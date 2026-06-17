<?php

$con = mysqli_connect('localhost', 'root', 'protected', 'world');

if (!$con) {
    die("Unable to connect to the database");
}
