<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 100; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_51HI0dXFM6GJzEqOTyJPNLIevfsrhXXDgyaGUtvGMkIv8QL7Ckn4s0EdjkZZciLJR0piTvCDlzkE8Xi0fA9D9vmlr00itBO9bkB'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51HI0dXFM6GJzEqOTGU0VkLhjFJ4Yrgm8xEYeb1WOZcsKvXCvFMXDOnuYXulilaw7iRiky0kD9nZ54ZdIyxgqbbs500CdUgwV7V'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'stripe');

$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
  
// Display error if failed to connect  
if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}

?>