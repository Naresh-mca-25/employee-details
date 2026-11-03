<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees
        (name, email, phone, department, designation, salary)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssssd",
    $name,
    $email,
    $phone,
    $department,
    $designation,
    $salary
);

if ($stmt->execute()) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Saved</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #f5f7fa);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .success-box {
            width: 450px;
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #28a745;
            color: white;
            font-size: 40px;
            line-height: 70px;
        }

        h2 {
            color: #28a745;
            margin-bottom: 12px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
        }

        .employee-name {
            font-weight: bold;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #1565c0;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

        .btn:hover {
            background: #0d47a1;
        }
    </style>
</head>

<body>

    <div class="success-box">

        <div class="icon">✓</div>

        <h2>Employee Saved Successfully!</h2>

        <p>
            Employee
            <span class="employee-name">
                <?php echo htmlspecialchars($name); ?>
            </span>
            has been added to the database.
        </p>

        <a href="index.php" class="btn">
            Add Another Employee
        </a>

    </div>

</body>
</html>

<?php

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>