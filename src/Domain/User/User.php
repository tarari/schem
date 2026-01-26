<?php
    namespace App\Domain\User;

    class User{
        

        public function __construct(
            private UserId $id,
            private string $name,
            private string $email)
        {
        }

        private function validateEmail($email){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
            
        }
    }