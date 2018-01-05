<?php

 
ini_set('display_errors', 1);
 
error_reporting(E_ALL);
 
$from = "testing @ yourdomain";
$from = "site@abapconsulting.com.br";
 
$to = "recipientemailaddress";
$to = "nascimento@abapconsulting.com.br";
 
$subject = "Verificando o correio do PHP";
 
$message = "O correio do PHP funciona bem";
 
$headers = "De:". $from;
 
mail($to, $subject, $message, $headers);
 
echo "A mensagem de e-mail foi enviada.";
 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

