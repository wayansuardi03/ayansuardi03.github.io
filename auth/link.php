<?php
@$page = $_GET['h'];
if (!empty($page)) {
    switch ($page) {

        case 'signIn':
            include 'signIn.php';
            break;

        case 'prosesSignIn':
            include 'proses.php';
            break;

        case 'signUp':
            include 'signUp.php';
            break;

        default:
            include 'signIn.php';
            break;
    }
} else {
    include 'signIn.php';
}