<?php
// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Alamat email tujuan (gantilah dengan email Anda)
$to = "youremail@example.com";

// Subjek email
$subject = "Pesanan Baru dari Toko Online Saya";

// Isi email
$message = "Pesanan baru diterima dari:\n";
$message .= "Nama: " . $name . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Alamat: " . $address . "\n";
$message .= "No. Telepon: " . $phone . "\n";

// Header email
$headers = "From: " . $email . "\r\n";

// Kirim email
mail($to, $subject, $message, $headers);

// Redirect ke halaman terima kasih
header("Location: thank_you.html");
exit();
?>
