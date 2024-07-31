<?php
// Database connection parameters
$dsn = 'pgsql:host=localhost;port=5432;dbname=mydatabase;';
$user = 'myuser';
$password = 'mypassword';

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'];
        $phone_number = $_POST['phone-number'];
        $address = $_POST['address'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $details = $_POST['details'];

        // Validate input (basic example)
        if (empty($name) || empty($phone_number) || empty($address) || empty($month) || empty($year) || empty($details)) {
            throw new Exception("All fields are required.");
        }

        // Prepare SQL query with placeholders
        $sql = "INSERT INTO users (name, phone_number, address, month, year,details) VALUES (:name, :phone_number, :address, 
        :month, :year, :details)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone-number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':month', $phone_number);
        $stmt->bindParam(':year', $address);
        $stmt->bindParam(':details', $phone_number);

        // Execute query
        $stmt->execute();

        echo "Data inserted successfully.";
    }
} catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>
