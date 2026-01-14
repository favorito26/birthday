<?php
include 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];

$db->query("UPDATE guests SET rsvp='$status' WHERE id='$id'");

header('location: thankyou.php?id="$id"');
exit;
