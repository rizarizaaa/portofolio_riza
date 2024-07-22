<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $whatsappNumber = $_POST['whatsappNumber'];
    
    // Format pesan WhatsApp
    $whatsappMessage = "Nama: $fullName\n"
                     . "Email: $email\n"
                     . "Nomor Handphone: $phoneNumber\n"
                     . "Subjek: $subject\n"
                     . "Pesan: $message";
    
    // Encode pesan untuk URL
    $encodedMessage = urlencode($whatsappMessage);
    
    // Link WhatsApp dengan nomor dan pesan
    $whatsappLink = "https://wa.me/$whatsappNumber?text=$encodedMessage";
    
    // Redirect ke link WhatsApp
    header("Location: $whatsappLink");
    exit();
}
?>
