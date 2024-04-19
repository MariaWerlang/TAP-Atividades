<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\SMS;

$Whats = new Whatsapp();
$Sms = new SMS();
$Email = new Email();

$Whats->enviar("Tipo de mensagem: ");
$Sms->enviar("Tipo de mensagem: ");
$Email->enviar("Tipo de mensagem: ");

?>