<?php
    function matchSession($customer) {
        $_SESSION["identifier"] = $customer->identifier;
        $_SESSION["firstname"] = $customer->firstname;
        $_SESSION["lastname"] = $customer->lastname;
    }

    require_once "model/api.php";
    
    session_start();
    
    if ($login) {
        $_SESSION["identifier"] = $_POST["identifier"];
        $_SESSION["password"] = isset($_POST["password"]) ? hash("md5", $_POST["password"]) : null;
    }

    $customer = getCustomer();

    if ($login) {
        if (isset($customer->identifier)) {
            matchSession($customer);
            header("Location: .");
        }
        else {
            session_unset();
        }
    }
    else {
        if (!isset($customer->identifier)) {
            header("Location: login");
        }
        else {
            matchSession($customer);
        }
    }
?>