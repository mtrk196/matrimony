<?php
    include_once 'db-server.php';
    session_start();
    session_destroy();
    require 'login.php';
    ?>