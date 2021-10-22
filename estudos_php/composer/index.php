<?php

require "vendor/autoload.php"; 

$email = new \app\classes\Email;

varDump($email->send());