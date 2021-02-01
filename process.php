<?php

if (isset($_POST['btn-send'])) {
    $FullName = $_POST['username'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];

    if (empty($FullName) || empty($Email) || empty($Subject) || empty($Message) || empty($Phone)) {
        header('location:index.php?error');
    } else {
        $to = "aamutezar@gmail.com"; // diganti sama email hefais
        if (mail($to, $Subject, $Phone, $Message)) {
            header("location:index.php?success");
        }
    }
} else {
    header("location:index.php");
}