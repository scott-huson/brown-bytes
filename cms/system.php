<?php

//change depending on development environment
$_SERVER['DOCUMENT_ROOT'] = "C:/xampp/htdocs/brown-bytes/";

require_once($_SERVER['DOCUMENT_ROOT']."cms/constants.php");
require_once($_SERVER['DOCUMENT_ROOT']."cms/patdbc.php");
require_once($_SERVER['DOCUMENT_ROOT']."cms/session.php");
require_once($_SERVER['DOCUMENT_ROOT']."/cms/constantsmgr.php");

class CMS {
	//get from constants
	public static $mysql_user = CMS_MYSQL_USER;
	public static $mysql_pass = CMS_MYSQL_PASS;
	public static $mysql_db = CMS_MYSQL_DB;
	public static $constants;
	public static $session;


	public static function initialize() {
		//creates the CMS object to be used
		$cms = array();

		//initialize database
		$cms['db'] = self::mysqlConnect();
		print_r('initialized db<br/>');

		//initialize server session
		$cms['s'] = new session();
		self::$session = $cms['s'];
		print_r('initialized session<br/>');

		if ($cms['s']->get('admin')) {
			$cms['admin'] = 1;
		} else {
			$cms['admin'] = 0;
		}
		$cms['user'] = $cms['s']->get('user');
		$cms['data'] = $cms['s']->get('data');
		print_r('initialized user info<br/>');

		self::injectConstants($cms);
		print_r('injected constants<br/>');

		return $cms;
	}
	public static function mysqlConnect() {
		return new patMySqlDbc("localhost", self::$mysql_db, self::$mysql_user, self::$mysql_pass);
	}
	public static function injectConstants($cms) {
		global $CMS_SITEMAP;

		$mgr = new ConstantsManager($cms,true);
		self::$constants = $mgr;
	}
}





?>