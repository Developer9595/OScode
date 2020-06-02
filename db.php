<?php
    require "rb.php";
    R::setup( 'mysql:host=localhost;dbname=oscode',
        'admin', 'qwertyuiop' );

session_start();