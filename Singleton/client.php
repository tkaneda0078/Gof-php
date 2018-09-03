<?php

require_once 'singleton.php';

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

echo $instance1->getId();
echo '<br>';
echo $instance2->getId();

// 複製できないことを確認
$instance_clone = clone $instance1;