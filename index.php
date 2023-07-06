<?php
    require "env.php";
    require root."/src/util/send_error.php";
    require root."/src/util/db_conn.php";

    // getting the uri of the request for routing
    $uri = $_SERVER['REQUEST_URI'];
    switch($uri) {
        case '/register-user':
            require root."/public/registerUser.php";
            break;
        case '/register-college':
            require root."/public/registerCollege.php";
            break;
        default:
            send_error("Page not found", 404);
    }
?>