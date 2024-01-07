<?php
include "connection.php";

//Insert Into Database
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $Phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO users (name,email,phone,address) VALUES ('$name','$email','$Phone','$address')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header('Location: index.php');
    } else {
        echo "Something Went Wrong";
    }
}


//Update Data In Databse
if (isset($_POST['update_btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Updated Successfully";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Something Went Wrong";
        header('Location: index.php');
    }
}


