<?php
// getdata.php
header('Content-Type: application/json');
include 'config.php'; // Mengambil koneksi dari config.php

// Query mengambil data dari tabel 'aircrafts'
$query = "SELECT model_name, units_produced FROM aircrafts ORDER BY id ASC";
$result = $conn->query($query);

$data = [];
if ($result && $result->num_rows > 0) {
    // PERBAIKAN: fetch_assoc() sebelumnya salah tulis
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>