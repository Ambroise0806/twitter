<?php
    session_start();
    if(isset($_POST['send']) && $_POST['send'] == true) {
        $messages = fopen("get_chat.txt", "a");
        $chat = "<b>".$_SESSION['username'].':</b> '.$_POST['msg']."<br>";
        fwrite($messages,$chat);
        fclose($messages);
        $messages = fopen("get_chat.txt", "r");
        echo fread($messages, filesize("get_chat.txt"));
        fclose($messages);
    } else if (isset($_POST['get']) && $_POST['get'] == true) {
        if(file_exists('get_chat.txt') && filesize("get_chat.txt") > 0) { 
        $messages = fopen("get_chat.txt", "r");
        echo fread($messages, filesize("get_chat.txt"));
        fclose($messages);
        }
    }