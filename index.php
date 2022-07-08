<?php

require __DIR__ . "/vendor/autoload.php";

use Jephdev\Moi\UserService;

$id = !empty($_GET['id']) ? $_GET['id'] : 0;

$response = UserService::getById($id);
echo $response;

echo "<br><br>";

$page_id = !empty($_GET['page_id']) ? $_GET['page_id'] : 1;
$response = UserService::getMany($page_id);
echo $response;
