<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtp.googlemail.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'shaanaku@gmail.com',
//     'smtp_pass' => 'shaanaku@123',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'html', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// );

/*$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";*/

$config = array(
    'protocol' => 'mail', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'carcompareug.com', 
    'smtp_port' => 465,
    'smtp_user' => 'info@carcompareug.com',
    'smtp_pass' => 'Welcome@123',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);