<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Fblogin extends CI_Controller {

	public function index()
	{
		$_SESSION["id"]=$_POST["id"];
		$_SESSION["name"]=$_POST["name"];
		echo "done";
	}
}
