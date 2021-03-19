<?php
$GLOBALS['config']['url'] = 'https://www.postogon.com/devmaster';
$GLOBALS['config']['private_folder'] = '../../private';

//Database variables
$GLOBALS['db_conf']['db_host']  =    'localhost';
$GLOBALS['db_conf']['db_user']  =    'root';
$GLOBALS['db_conf']['db_pass']  =    '';
$GLOBALS['db_conf']['db_db']    =    'postogon';
$GLOBALS['db_conf']['port']     =    '3306';
$GLOBALS['db_conf']['db_charset']  = '';

//If the site is not in a root folder, how many values in the url_loc array will we be ignoring so we think we're in a root folder?
$GLOBALS['config']['url_offset'] = 1; 


//This is how we get what page we should be on based on URL.
$GLOBALS['url_loc'] = explode('/', htmlspecialchars(strtok($_SERVER['REQUEST_URI'], '?'), ENT_QUOTES));

if($GLOBALS['config']['url_offset'] > 0){
    $x = 0; while($x < ($GLOBALS['config']['url_offset'])){ unset($GLOBALS['url_loc'][$x]); $x++; }
    $GLOBALS['url_loc'] = array_values($GLOBALS['url_loc']);
}