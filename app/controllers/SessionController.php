<?php


/**
 * SessionController
 *
 * Allows to authenticate users
 */
class SessionController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Sign Up/Sign In');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->tag->setDefault('email', 'paxton@brown.edu');
            $this->tag->setDefault('password', 'password');
        }
        if ($this->session->get('auth')) {
            return $this->forward('dashboard');
        }
    }

    /**
     * Register an authenticated user into session data
     *
     * @param Users $user
     */
    private function _registerSession(Users $user)
    {
        $this->session->set('auth', array(
            'id' => $user->getId(),
            'email' => $user->email,
            'admin' => $user->isAdmin(),
            'data' => array(
                'name' => $user->name,
                'status' => $user->status,
            )
        ));

        if ($user->isAdmin()) {
            $this->session->admin = true;
        }
    }

    /**
     * This action authenticate and logs an user into the application
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user = Users::findFirst(
                array(
                    "(email = :email:) AND password = :password: AND status > '0'",
                    'bind' => array('email' => $email, 'password' => sha1($password)) 
                )
            );
            if ($user != false) { //;)
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->name);
                return $this->forward('dashboard/index');
            }

            $this->flash->error('Wrong email/password');
        }

        return $this->forward('session/index');
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {   
        $this->session->remove('auth');
        $this->flash->success('Goodbye!');
        return $this->forward('index/index');
    }
    public function verifyAction($key) {
        $user = Users::findFirst(
            array(
                "verify = :uniqid: AND status = '0'",
                "bind" => array('uniqid' => $key)
            )
        );
        if($user != false){
            $user->status = 1;
            if($user->save() == false) {
                $this->flash->success("Internal error could not verify");
                $this->forward('session/index');
            }
            $this->flash->success("Thank you for verifying ".$user->name.".");
            $this->forward('session/index');
        } else {
            $this->forward('session/index');
        }

    }
    public function dashboardAction() {
        return $this->forward('dashboard/index');
    }
}
