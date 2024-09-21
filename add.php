<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  
  $host = 'mysql';
$dbname = 'copier';
$username = 'root';
$password = 'password123';

//echo $text;

//$text = 'Hello world from php';


// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$text = $conn->real_escape_string($_POST['message']);
    //This is the start of putting things in database
 
      $sql = "INSERT INTO messages (message) VALUES ('$text')";

     // echo $videoDesc;
      if ($conn->query($sql) === TRUE) {
        echo "Your message was added";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  } else {
      echo "Sorry, there was an error uploading your file.";
  }

  ?>