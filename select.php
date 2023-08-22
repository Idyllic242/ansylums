<!DOCTYPE html>
<html>

<head>
    <title>Fetch Page</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            animation: fadeInUp 1s ease-in-out;
        }

        /* Form styling */
        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Table styling
        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        } */
/* Table styling */
table {
    margin-top: 30px;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

/* Alternating row colors for better readability */
tr:nth-child(even) {
    background-color: light yellow;
}

/* Hover effect */
tr:hover {
    background-color: #f0f0f0;
    transition: background-color 0.3s ease;
}

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
            if ($conn === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $id = $_POST["id"];
            $sql = "SELECT * FROM reform WHERE id='$id'";
            $result = $conn->query($sql);
        }
        ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="id">ID to Fetch:</label>
            <input type="text" name="id" required>
            <input type="submit" value="Show Data">
        </form>

        <h1>Data Table</h1>
        <?php
        if (isset($result) && $result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>p_id</th>
                        <th>branch</th>
                        <th>Year</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>College Id</th>
                        <th>Type of Query</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["p_id"]."</td>
                        <td>".$row["branch"]."</td>
                        <td>".$row["year"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["mobile"]."</td>
                        <td>".$row["clg_id"]."</td>
                        <td>".$row["toq"]."</td>
                      </tr>";
            }
            echo "</table>";
        } elseif (isset($result)) {
            echo "No data found.";
        }

        mysqli_close($conn);
        ?>
    </div>
</body>

</html>
