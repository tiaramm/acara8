<?php
$kecamatan = $_POST['kecamatan'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];

// Sesuaikan dengan setting MySQL 
$servername = "localhost";
$username = "root";
$password = "DB_sql_tiara14";
$dbname = "latihan8";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO penduduk (kecamatan, latitude, longitude, luas, jumlah_penduduk) 
    VALUES ('$kecamatan', $latitude, $longitude, $luas, $jumlah_penduduk)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//header("Location: index.html"); 
//exit; 