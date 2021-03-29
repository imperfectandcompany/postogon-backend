<?php
if (!User::isLoggedin()){
	header("Location: https://postogon.com/lit/public_html/login");
}
?>