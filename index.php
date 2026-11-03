<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>

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

        .form-container {
            width: 500px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h2 {
            color: #1565c0;
            margin-bottom: 8px;
        }

        .header p {
            color: #777;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #1565c0;
            box-shadow: 0 0 5px rgba(21, 101, 192, 0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #1565c0;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 8px;
        }

        button:hover {
            background: #0d47a1;
        }

        .footer {
            text-align: center;
            margin-top: 18px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>

<body>

    <div class="form-container">

        <div class="header">
            <h2>Employee Registration</h2>
            <p>Enter employee details below</p>
        </div>

        <form action="save.php" method="POST">

            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" name="name" placeholder="Enter employee name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>

            <div class="form-group">
                <label>Department</label>
                <input type="text" name="department" placeholder="Enter department" required>
            </div>

            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation" placeholder="Enter designation" required>
            </div>

            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" placeholder="Enter salary" step="0.01" required>
            </div>

            <button type="submit">Save Employee</button>

        </form>

        <div class="footer">
            Employee Management System
        </div>

    </div>

</body>
</html>