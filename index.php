<?php
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

$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1px'><tr> 
    <th>No.</th>
    <th>Kecamatan</th> 
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Luas</th> 
    <th>Jumlah Penduduk</th>
    <th>Aksi</th>";

    // output data of each row 
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" .
            $row["kecamatan"] . "</td><td>" .
            $row["latitude"] . "</td><td>" .
            $row["longitude"] . "</td><td>" .
            $row["luas"] . "</td><td align='right'>" .
            $row["jumlah_penduduk"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }

$conn->close();
