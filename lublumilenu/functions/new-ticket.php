<?php

include_once "../includes/db.php";

$email = $_POST['new-email'];

$email = trim($email);
$email = stripslashes($email);
$email = strip_tags($email);
$email = htmlspecialchars($email);

$name = $_POST['new-name'];

$name = trim($name);
$name = stripslashes($name);
$name = strip_tags($name);
$name = htmlspecialchars($name);

$pnumber = $_POST['new-pnumber'];

$pnumber = trim($pnumber);
$pnumber = stripslashes($pnumber);
$pnumber = strip_tags($pnumber);
$pnumber = htmlspecialchars($pnumber);

$topic = $_POST['new-topic'];

$topic = trim($topic);
$topic = stripslashes($topic);
$topic = strip_tags($topic);
$topic = htmlspecialchars($topic);

$summary = $_POST['new-summary'];

$summary = trim($summary);
$summary = stripslashes($summary);
$summary = strip_tags($summary);
$summary = htmlspecialchars($summary);

$text = $_POST['new-text'];

$text = trim($text);
$text = stripslashes($text);
$text = strip_tags($text);
$text = htmlspecialchars($text);

echo $email . $name . $pnumber . $topic . $summary . $text;

$addticket = "INSERT INTO support (email, pnumber, topic, summary, text) VALUES ('$email', '$name', '$pnumber', '$topic', '$summary', '$text')";

$connect->query($addticket);

$connect->close();

