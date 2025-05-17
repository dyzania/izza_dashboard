<?php
// index.php
include 'db_connect.php';
$sql = "SELECT year_level, COUNT(*) AS total FROM student_dashboard GROUP BY year_level";
$result = $conn->query($sql);

// Set default values
$year1 = 0;
$year2 = 0;
$year3 = 0;
$year4 = 0;

// Store each count in a variable
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        switch ($row['year_level']) {
            case '1':
                $year1 = $row['total'];
                break;
            case '2':
                $year2 = $row['total'];
                break;
            case '3':
                $year3 = $row['total'];
                break;
            case '4':
                $year4 = $row['total'];
                break;
        }
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $year_level = $_POST['year_level'];

    // Insert query (adjust table/column names as needed)
    $insert = "INSERT INTO student_dashboard (student_name, year_level, date) 
            VALUES (?, ?, CURRENT_TIMESTAMP)";

    $state = $conn->prepare($insert);
    $state->bind_param("ss", $name, $year_level);

    if ($state->execute()) {
         header("Location: " . $_SERVER['PHP_SELF']);
        exit(); // Prevent further script execution
    } else {
        echo "Error: " . $conn->error;
    }

    $state->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CS Student Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<body>

    <div class="dashboard-container">

        <div class="title">
            <h1 style="display: flex; justify-content: center; align-items: center;">CS Student Dashboard</h1>
        </div>

        <div class="wrapper">
            <div class="rect">
                <p>1st YEAR</p>
                <h4><?php echo $year1; ?></h4>
            </div>
            <div class="rect">
                <p>2nd YEAR</p>
                <h4><?php echo $year2; ?></h4>
            </div>
            <div class="rect">
                <p>3rd YEAR</p>
                <h4><?php echo $year3; ?></h4>
            </div>
            <div class="rect">
                <p>4th YEAR</p>
                <h4><?php echo $year4; ?></h4>
            </div>
        </div>

        <div class="data">

            <canvas id="BarChart"></canvas>
            <canvas id="LineChart"></canvas>
            <canvas id="PieChart"></canvas>
        
        </div>

        <div class="add" style="margin: 20px;">
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="year_level" placeholder="Year Level" required>
                <button type="submit" name="submit">Add</button>
            </form>
        </div>

  
    <script>     
    // Assign PHP values to JavaScript variables
        const year1 = <?php echo $year1; ?>;
        const year2 = <?php echo $year2; ?>;
        const year3 = <?php echo $year3; ?>;
        const year4 = <?php echo $year4; ?>;
    </script>
    
    <script src="js/chart.js"></script>
</body>
</html>