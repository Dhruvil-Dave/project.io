<?php
require('stripe-php/init.php');
$publishableKey="pk_test_51HX6neLJsbVO0JgVvBWYEmGo5SOrmTtBDE71aC0NcOmkxJtwwvrZzX26coBhyX3QN2dFx8IdtzEsgQ22l3LML0fy00p4iPhHhu";
$secretKey="sk_test_51HX6neLJsbVO0JgVYS5PI8SpkKHOcCCTehLCIdczIee7kvEiehOsroGx4rvRbmBE8zr0WULb5up7lMp6pdjmUIHK00k9aNRr8I";
\Stripe\Stripe::setApiKey($secretKey);
?>