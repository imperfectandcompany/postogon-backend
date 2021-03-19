<?php

class userSocial extends DatabaseConnector {

    public function userExists($user_access){
        //Our access can be a username or an email, but we'll assume it is an email and then check for a username.
        if (filter_var($user_access, FILTER_VALIDATE_EMAIL)) {
            $query = 'WHERE email = ?';
        } else {
            $query = 'WHERE username = ?'; 
        }

        $filter_params = array();
        $filter_params[] = array("value" => $user_access, "type" => PDO::PARAM_STR);

        $return = $this->viewSingleData($GLOBALS['db_conf']['db_db'].".profiles", '*', $query, $filter_params);

        if($return['count'] > 0){
            return $return;
        }else{
            return false;
        }
    }

    public function userPasswordCheck($user_access,$password){
        if(password_verify($password, $this->userExists($user_access)['result']['password'])){
            return true;
        } else {
            return false;
        }
    }

    public function newUser($username, $email, $password){
        try {
            //Is their username too long?
            if(strlen($username) > $GLOBALS['config']['max_username_length']){ throw new Error('This username is too long!'); }

            //Is their eamil valid?
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { throw new Error('This is not a valid email!'); }

            //Is their password valid?
            if(strlen($password) > $GLOBALS['config']['max_password_length']){ throw new Error('This password is too long!'); }

            //Seems like we're good to continue!

            //**This is where we are encrypting our passwords!*/ */
            //We are using Bcrypt, see this for details https://www.php.net/manual/en/function.password-hash.php
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));

            $filter_params = array();
            $filter_params[] = array("value" => $username, "type" => PDO::PARAM_STR);
            $filter_params[] = array("value" => $email, "type" => PDO::PARAM_STR);
            $filter_params[] = array("value" => $password, "type" => PDO::PARAM_STR);

            return $this->insertData($GLOBALS['db_conf']['db_db'].".profiles", 'username,email,password', '?,?,?', $filter_params);

        } catch (Exception $e) {
            $GLOBALS['errors'][] = $e->getMessage();
            return false;
        }
    }

    public function userLogin($user_access, $remember_me){

        //To-do add final security for this
        //$_SESSION['session_id'] = "";
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $this->userExists($user_access)['result']['id'];
    }

}