<?php

Loader::import('Module', 'SessionManager');
Loader::import('Module', 'PostManager');

use \SessionManager\SessionManager as SM;
use \PostManager\PostManager as PM;

class AuthController extends Controller {
	
	public $allow = array('auth', 'test');
	//Table name to authenticate on
	private $_authTable = 'Dealer';
	//First field to authenticate on
	private $_fieldA = 'email';
	//Second field to authenticate on
	private $_fieldB = 'password';
	//Name of the field associated with $_fieldA
	private $_formFieldNameA = 'email';
	//Name of the field associated with $_fieldA
	private $_formFieldNameB = 'password';
	//Controller to redirect to
	private $_redirectControllerSuccess = 'Index';
	//Method to redirect to
	private $_redirectMethodSuccess = 'index';
	//Controller to redirect to on failure
	private $_redirectControllerFailure = 'Index';
	//Method to redirect to on failure
	private $_redirectMethodFailure = 'login';
	
	public function index() {
		echo "Access denied.";
	}

	public function rubBefore() {
		
	}
	
	public function test() {
		$_SESSION['test'] = "blahh";
		$this->App->Router->redirect(array('controller'=>'Index', 'method'=>'loggedIn'));

	}

	public function auth() {
		
		if(!$this->isLoggedIn()) {
			$dealerQ = DealerQuery::create()
				->filterByEmail(PM::get($this->_formFieldNameA))
				->filterByPassword(sha1(PM::get($this->_formFieldNameB)))
				->findOne();
			
			if(is_object($dealerQ)) {
				echo "Found a user...<br>";
				SM::init($this->_authTable);
				SM::store('email', $dealerQ->getEmail());
				SM::store('accessLevel', $dealerQ->getClearance());
				//redirect to success page
				$this->App->Router->redirect(array('controller'=>$this->_redirectControllerSuccess, 'method'=>$this->_redirectMethodSuccess));
			}
			//Failure so redirect to fail page
			$this->App->Router->redirect(array('controller'=>$this->_redirectControllerFailure, 'method'=>$this->_redirectMethodFailure));
		}elseif($this->isLoggedIn()) {
			//redirect to the desired page
			$this->App->Router->redirect(array('controller'=>$this->_redirectControllerSuccess, 'method'=>$this->_redirectMethodSuccess));
		}
		//login failed
		return false;
	}
	
	/**
	*	Return True if a user is logged in, false otherwise
	*/
	private function isLoggedIn() {
		SM::init($this->_authTable);
		return SM::exists($this->_fieldA);
	}
	
	/**
	*	Destroy the authenticated session
	*/
	public function logout() {
		SM::init($this->_authTable);
		SM::clear();
	}	
	
}

?>