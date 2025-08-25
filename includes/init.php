<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once "dbh.inc.php";

//this file is to avoid repetition of session start 
