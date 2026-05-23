<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Function to generate a random CAPTCHA code
function generateCaptchaCode($length = 6) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

// Generate a new CAPTCHA code
$newCaptcha = generateCaptchaCode();

// Store the new CAPTCHA code in the session
$_SESSION["code"] = $newCaptcha;

// Return the new CAPTCHA code as plain text
echo $newCaptcha;
?>
