<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$user = Auth::check();

$name = $_FILES['photo']['name'];
$type = $_FILES['photo']['type'];
$tmp_name = $_FILES['photo']['tmp_name'];

if($type == "image/jpeg" OR $type == "image/png") {
    move_uploaded_file($tmp_name, "photos/$name");

    $user->photo = $name;

    $table = new UsersTable(new MySQL);
    $table->updatePhoto($user->id, $name);

    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}

