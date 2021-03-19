<?php

class timeline {
    public function __construct($dbObject)
    {
        $this->dbObject = $dbObject;
    }

    
    /**
     * For displaying a public timeline feed of events
     *
     * @return void
     */
    public function fetchPublicTimeline(){
        $query = 'LIMIT '.$GLOBALS['config']['max_timeline_lookup'];
        $filter_params = array();

        return $this->dbObject->viewData($GLOBALS['db_conf']['db_db'].".timeline", '*', $query, $filter_params);
    }

    //For showing a private timeline
    //UserID of the person viewing it
    //User ID of the person's timeline optional
    public function fetchPrivateTimeline($user_id, $view_id = NULL){

        //If timeline post is set to 2, it means they're for contacts only. This means that we can only see it if we're a contact of this person. We need to be mutual followers, they need to set me as a contact.
        //if id = 3 and we are contact of this person, show.

    }

    public function showUsername($user_id){
        if($this->username[$user_id]){ return $this->username[$user_id]; }

        $this->username[$user_id] = $this->dbObject->viewSingleData($GLOBALS['db_conf']['db_db'].".profiles", "username", "WHERE id = ?", array(array("value" => $user_id, "type" => PDO::PARAM_INT)))['result']['username'];
        return $this->username[$user_id];
    }   
    
    public function showAvatar($user_id){
        if($this->avatar[$user_id]){ return $this->avatar[$user_id]; }

        $this->avatar[$user_id] = $this->dbObject->viewSingleData($GLOBALS['db_conf']['db_db'].".profiles", "avatar", "WHERE id = ?", array(array("value" => $user_id, "type" => PDO::PARAM_INT)))['result']['avatar'];
        if($this->avatar[$user_id] == ""){ $this->avatar[$user_id] = $GLOBALS['config']['default_avatar']; }
        return $this->avatar[$user_id];
    }
}