<?php

    class User extends CI_Controller
    {
        public function index()
        {
            echo "hello world";
        }
        public function adduser()
        {
            echo "this is add user page";
        }
        public function sayMyName($name = "mone" ,$lastname = "fxxkU")
        {
         //   $name = "MONE";
            echo "You name is : " . $name; 
            echo "Why You last name :" .$lastname;
        }
    }

