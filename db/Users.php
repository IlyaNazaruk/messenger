<?php


class Users {
	private $id;
	protected $login;
	private $password;
	private $loginstatus;
	protected $lastlogin;
	protected $users;


	public function setId( $id ) {
		$this->id = $id;
	}

	public function setLogin( $login ) {
		$this->login = $login;
	}

	public function setPassword( $password ) {
		$this->password = $password;
	}

	public function setLoginStatus( $loginstatus ) {
		$this->loginstatus = $loginstatus;
	}

	public function setLastLogin( $lastlogin ) {
		$this->lastlogin = $lastlogin;
	}


	public function getId() {
		return $this->id;
	}

	public function getLogin() {
		return $this->login;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getLoginstatus() {
		return $this->loginstatus;
	}

	public function getLastLogin() {
		return $this->lastlogin;
	}


	public function getAllusers() {
		return R::findAll( 'users' );
	}

	public function setLastactivity() {
		$user1              = R::findOne( 'users', "login = ?", array( $this->login ) );
		$user1->lastlogin   = $this->lastlogin;
		$user1->loginstatus = 1;
		R::store( $user1 );

	}

	public function changeLoginStatus() {
		$user              = R::findOne( 'users', "login = ?", array( $this->login ) );
		$user->loginstatus = 0;
		R::store( $user );
	}

	public function getStatus() {
		$user = R::findOne( 'users', "login = ?", array( $this->login ) );

		return $user->loginstatus;
	}
}







