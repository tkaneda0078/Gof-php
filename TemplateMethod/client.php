<?php

require_once 'ListDisplay.php';

$data = ['design pattern', 'gang of four', 'template method'];

$display = new ListDisplay($data);

$display->display();
