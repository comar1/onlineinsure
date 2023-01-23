<?php

namespace App\Controllers;

class User extends BaseController 
{
	public function index(){
		
        return view('login');
	}
 
	public function home(){
        return view('header')
            . view('home');
	}
}