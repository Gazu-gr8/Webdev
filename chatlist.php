<?php
    session_start();
    sleep(5);
    header( 'Content-Type: application/json; charset=utf-8' );
    if ( !isset($_SESSION['chats']) ) $_SESSION['chats'] = array();
    echo(json_encode($_SESSION['chats']));



            [
                ["Hello","Fri. 01 Apr 2016 00:47:23 +0200"],
                ["Lunch?","Fri, 01 Apr 2017 00:54:19 +0200"]
            ]