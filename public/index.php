<?php

// Init composer
require "../vendor/autoload.php";

use App\Database\Models\User;


$user = new User;
$user->firstName = "Lucas";
$user->lastName = "Tenório";
$user->id = 1;
