<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $guests = htmlspecialchars($_POST['guests']);
    $file = 'confirmed_guests.txt';
    file_put_contents($file, $guests . "\n", FILE_APPEND);
    header("Location: thanks.html");
    exit();
}
?>
