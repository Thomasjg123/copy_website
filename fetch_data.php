<?php
//header('Content-Type: application/json');

// Database connection
$host = 'mysql';
$dbname = 'copier';
$username = 'root';
$password = 'password123';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM messages";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['message'];

 //then to pull use the row with this asthe alias
// $videoName = $row['description'];

/* try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT date, text FROM your_table");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
} catch (PDOException $e) {
    ec/ho json_encode(['error' => $e->getMessage()]);
} */


$conn->close();
?>
