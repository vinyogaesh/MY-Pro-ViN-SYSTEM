<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['username']);
unset($_SESSION['utype']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php');

?>