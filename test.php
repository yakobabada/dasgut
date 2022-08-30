<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$result = mail("yakob.abada@gmail.com","My subject",$msg);

var_dump($result);

echo 'Here is Yakob';
