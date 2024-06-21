<?php
require_once 'vendor/autoload.php';

$client = new Google_Client(['client_id' => 'YOUR_CLIENT_ID.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
$id_token = $_POST['idtoken'];

try {
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userid = $payload['sub'];
        // If request specified a G Suite domain:
        //$domain = $payload['hd'];

        // You can now use this information to create a session, check the user in your database, etc.
        echo 'User ID: ' . $userid;
    } else {
        // Invalid ID token
        echo 'Invalid ID token';
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
