<?php
    function getCustomer() {
        return callAPI("GET", "customer/getCustomer.php");
    }

    function getAllItemsDiscounts() {
        return callAPI("GET", "public/getAllItemsDiscounts.php");
    }

    function getAllCategories() {
        return callAPI("GET", "public/getAllCategories.php");
    }

    function getAllBrands() {
        return callAPI("GET", "public/getAllBrands.php");
    }

    function callAPI($method, $path, $params = null)
    {
        $identifier = $_SESSION["identifier"] ?? "";
        $password = $_SESSION["password"] ?? "";
        $userpwd = "$identifier:$password";
        $url = "https://api.mimil-grp.eu/foodinni/$path";
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($params) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
                }
                break;
            case "GET":
                if ($params) {
                    $url += "?" + http_build_query($params);
                }
                break;
            default:
                throw new Exception("Unauthorized method");
        }

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $userpwd);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result);
    }