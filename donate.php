<?php


       
// Store the submitted data sent 
// via POST method, stored  
  
// Temporarily in $_POST structure. 


    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $amt=$_POST['amount'];

    $apiKey= "rzp_test_5ICcWGh1RUivYW";

   





?>


    

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $amt*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?> "//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay now"
    data-name="Donate For Adarsh"
    data-description="Donate me for a coffee to Car"
    data-image=""
    data-prefill.name="<?php echo $name?>"
    data-prefill.email="<?php echo $email?> "
    data-prefill.contact="<?php echo $phone?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>