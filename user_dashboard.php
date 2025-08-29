<?php

echo "---------------- TASK 1: Profile & Dynamic Messages (Ternaries) ----------------<br><br>";
$username = "John_Michael";
$role = "member";          
$activeStatus = true;      
$premium = true;         
$lastLogin = 0;


$welcomeMsg = ($role === "admin") ? 
    "Welcome Administrator!" : 
    "Welcome " . $username ;

echo $welcomeMsg . "<br><br>";

$loginMsg = ($lastLogin <= 1) ? 
    "You've been active recently" : 
    "It's been a while since your last visit!";

echo $loginMsg . "<br><br>";

echo "---------------- TASK 2: Feature Access (If / Else If / Else) ----------------<br><br>";

if (!$activeStatus) {
    echo "❌ Account Suspended<br>";
    echo "Your account is currently inactive. Please contact support to reactivate.<br>";
} else {
      if ($role === "administrator") {
        echo "Administrator Access";

            
    } elseif ($role === "moderator") {
        echo "Moderator Access";
        $premMsg =   $premium ? "<br>Premium Benefits Active" : "";
        echo $premMsg;
        
    } elseif ($role === "member") {
        echo "Member Access";
         $premMsg =   $premium ? "<br>Premium Benefits Active" : "";
        echo $premMsg;
        
    } else {
        echo "Guest Access";
    }
   
}


echo "<br><br>---------------- TASK 3: Notification Preferences (Switch) ----------------<br><br>";
$notificationPreference = "both";

switch ($notificationPreference) {
    case "email":
        echo " Email Notifications Only";
        break;
        
    case "sms":
        echo "SMS Notifications Only";
        break;
        
    case "both":
        echo "All Notifications Enabled";
        break;
        
    case "none":
        echo "All Notifications Disabled";
        break;
        
    default:
        echo "Invalid Notification Preference";
        break;
}
?>