<?php
include 'Model/Database.php';
include 'Model/Customer.php';

$data=new Model\Database();
$customer = new Model\Customer($data);
$customer->getAll();
echo nl2br("\n");
$customer->getById(3);
?>