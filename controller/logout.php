<?php

unset($_SESSION['admin']);
unset($_SESSION['user']);

//print_r($GLOBALS);
session_destroy();

redirect('/');