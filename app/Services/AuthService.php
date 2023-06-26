<?php
 

 namespace App\services;
use App\Exceptions\LoginInvalidException;
use App\Models\User;
 class AuthService {
        
        function login ($phone, $password)
        {
            $token = auth()->attempt(["phone"=> $phone, "password"=>$password]);
            if(!$token ){
                throw new LoginInvalidException();
            }else{ 
                return $token;          
            }
        }
        public function register($name, $phone,$password,$role)
        {
            $pass = bcrypt($password);
            $user = User::create(["name"=>$name,"phone"=>$phone,"password"=>$pass,"role"=>$role]);
            return $user;
        }
 }