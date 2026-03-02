<?php
// contact.php
include 'config.php';

$response = ["status" => "error", "message" => ""];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitasi Dasar
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // 2. Validasi
    $error = "";
    if (empty($name)) $error .= "Nama harus diisi. ";
    if (empty($email)) $error .= "Email harus diisi. ";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error .= "Format email salah. ";
    if (empty($message)) $error .= "Pesan harus diisi. ";

    // 3. Masukkan ke Database jika Valid
    if (empty($error)) {
        // PERBAIKAN: Gunakan statement prepared untuk keamanan
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            $response = ["status" => "success", "message" => "Pesan berhasil terkirim!"];
        } else {
            // DEBUG: Jika gagal, tampilkan error SQL
            $response = ["status" => "error", "message" => "Database error: " . $stmt->error];
        }
        $stmt->close();
    } else {
        $response = ["status" => "error", "message" => $error];
    }
}

echo json_encode($response);
$conn->close();
?>