<?php
require '../view/contact.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = checkEmty(array('username', 'password', 'content'));
  if (empty($error)) {
    $contact;
  }
}
