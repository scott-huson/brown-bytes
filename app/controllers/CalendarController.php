<?php

use Phalcon\Flash;
use Phalcon\Session;

class CalendarController extends ControllerBase
{
    public function initialize() {
        $this->tag->setTitle('Calendar');
        parent::initialize();
        $this->view->admin = false;
        if ($this->session->get('auth')) {
        	$this->view->login = true;
        	$this->view->user = $this->session->get('auth')['data']['name'];
            if($this->session->admin) {
                $this->view->admin = true;
            }
        } else {
        	$this->view->login = false;
        }
    }

    public function indexAction() {
    	//See if there are offers because those should be suggested above
    	$market = new Market();
    	$offers = $market->getCurrentOffers();

    	$this->view->offers = $offers;
        $date_query_string = "date_int >= ".$this->getDateString();
        //Get all the calendar events:
        $events = Event::find( 
            [
            $date_query_string,
            'limit' => 30,
            'order' => 'time_start ASC'
            ]
        );
        $this->view->events = $events;

    }
    //Create a new event
    public function newAction() {
        $this->view->form = new EventForm(new Event);
    }

    public function createAction() {
        if (!$this->request->isPost()) {
            return $this->forward("calendar/new");
        }

        $form = new EventForm(new Event);
        $event = new Event();
        try {
            $data = $this->request->getPost();
            if (!$form->isValid($data, $event)) {
                foreach ($form->getMessages() as $message) {
                    $this->flash->error($message);
                }
                return $this->forward('calendar/new');
            }
        } catch (Exception $e) {
            printf("The server has encountered an error:<br/>".$e);
            die();
        }

        //Set all the fields here:
        $event->date_int = substr($event->date, 0, 4).substr($event->date, 5, 2).substr($event->date, 8, 2); //This is the date string for comparison
        $event->time_start = strtotime($event->date_int.'T'.$event->time_number) + 18000;
        if($event->time_start < time()) {
            $this->flash->error('Please only use future dates.');
            return $this->forward('calendar/new');
        }
        $event->time_end = strtotime($event->date_int.'T'.$event->time_number_end) + 18000;
        if($event->time_start > $event->time_end) {
            $this->flash->error('End time must be after start.');
            return $this->forward('calendar/new');
        }
        //get the brown event id:
        $pos = strrpos($event->link, 'event_id/');
        if($pos) {
            $event->brown_event_id = substr($event->link, $pos + 9);
        } else {
            $event->brown_event_id = 0;
        }
        $event->user_id = $this->session->get('auth')['id'];

        //Try to save it
        try {
            if ($event->save() == false) {
                foreach ($event->getMessages() as $message) {
                    $this->flash->error($message);
                }
                return $this->forward('calendar/new');
            }
            $form->clear();
        } catch (exception $e) {
            print_r($e);
            die();
            $this->flash->error('Special internal error. Contact an admin.');
            return $this->forward('calendar/new');
        }
        $this->flash->success("Event was created successfully");
        return $this->forward("calendar/index");
    }

    //This function just returns the current date string.
    public function getDateString() {
    	//This accounts for the time zone change between GMT and EST
        return date('Ymd');
    }
}