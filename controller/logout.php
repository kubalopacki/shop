<?php

unset($_SESSION['admin']);
unset($_SESSION['user']);
unset($_SESSION['navbar']);

//print_r($GLOBALS);
session_destroy();

redirect('/');