<?php

	include 'assets/conf/configure-default-pages.php';
	
	$page = $_GET['page'];

	include "views/$page.php";