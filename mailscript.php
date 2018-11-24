<?php

$from="Peterhalborg55@hotmail.com";

$email="Peterhalborg55@hotmail.com";

$navn=$_POST['name'];

$minmail=$_POST['email'];

$tlf=$_POST['subject'];

mail ( $email, $navn, $tlf );

print "you message has been sent!"

?>