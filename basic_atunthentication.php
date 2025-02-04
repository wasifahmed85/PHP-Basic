<?php

define("ussername","admin");
define("password", "@1234");
echo "Enter  username:";
$inputUsername = readline();
echo "Enter Password:";
$inputPassword = readline();

if ($inputUsername === ussername && $inputPassword === password){
    echo "Login Successfull";
}
else{
    echo "Invalid ussername or   password";
}