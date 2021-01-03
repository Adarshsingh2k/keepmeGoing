<?php
    require('./instamojo.php');

    const API_KEY ="test_1d9751d88b464fd39f5f8df465d";
const AUTH_TOKEN = "test_3cc7fd34c17f3c2c7f2d7913364";


if(isset($_POST['purpose']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']))
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "https://focused-volhard-5b57d6.netlify.app/"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}

?>