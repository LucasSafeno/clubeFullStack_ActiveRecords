<?php

// Init composer
require "../vendor/autoload.php";

use App\Database\Models\User;
use App\Database\Activerecord\Update;
use App\Database\Activerecord\UpdateUser;


$user = new User;
$user->firstName = "Lucas";
$user->lastName = "Tenório";
$user->id = 1;


$user->update(new UpdateUser);