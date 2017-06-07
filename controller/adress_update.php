<?php

print_r($_POST);

$pdo->exec(update($_POST, "customers", "uzytkownik", "abcd"));

//redirect('/', 303);