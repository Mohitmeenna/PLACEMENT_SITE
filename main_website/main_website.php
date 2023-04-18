<!DOCTYPE html>
<html>
<head>
	<title>Placements</title>
	<link rel="stylesheet" href="main_page.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
		<header>
		<div class="header">
            <img style="border-radius:82px" src="logo.jpeg" class="logo">
            <nav>
                <ul>
                    <li><h1 style="color:black;">WELCOME TO OUR PLACEMENT WEBSITE</h1></li>
			    </ul>
            </nav>
            <button class="btn" id="btn1"><a class="text-btn1"  href="/student/login_main.php">Login</a></button>
            <button class="btn" id="btn2"><a class="text-btn2" href="/student/registration.html">Register</a></button>
            <button class="btn" id="btn3"><a class="text-btn3" href="/companies/company_login_ui.php">Company Login</a></button>
        </div>
	</header>
	<div class="content">
            <div class="text">
                <h1>Training and Placement Cell <br> <span>प्रशिक्षण एवं स्थानन प्रकोष्ठ</span></h1>
                <br><h2>Indian Institute of Technology Patna</h2>
				<br><h2>भारतीय प्रौद्योगिकी संस्थान पटना</h2>
            </div>
    </div>
	</div class="div-graph">	

	<main>
    <h1>Placement Graph</h1>
	<form>
		<label for="year">Select a year:</label>
		<select id="year" name="year">
			<?php
			// Create options for the last 3 years
			for ($i = 0; $i < 3; $i++) {
				$year = date("Y") - $i;
				echo "<option value='$year'>$year</option>";
			}
			?>
		</select>
		<input type="submit" value="Update">
	</form>
	<?php
	// Connect to the database
	require_once 'db_config.php';

	// Check connection
	if ($db_conn->connect_error) {
		die("Connection failed: " . $db_conn->connect_error);
	}

	// Get the selected year from the form
	$selected_year = $_GET["year"];

	// Query to fetch data for the selected year
	$sql = "SELECT alum_placed.company_name, COUNT(*) as count FROM alum_database JOIN alum_placed ON alum_database.id = alum_placed.id WHERE YEAR(alum_placed.start_date) = $selected_year GROUP BY alum_placed.company_name";

	$result = $db_conn->query($sql);

	// Initialize arrays to store data
	$company_names = array();
	$counts = array();

	if ($result->num_rows > 0) {
		// Fetch data and store in arrays
		while($row = $result->fetch_assoc()) {
			array_push($company_names, $row["company_name"]);
			array_push($counts, $row["count"]);
		}
	} else {
		echo "No results";
	}
	?>

	<!-- Display the graph using JavaScript -->
	<div id="chart-container">
		<canvas id="myChart"></canvas>
		<canvas id="topChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById('myChart').getContext('2d');

		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($company_names); ?>,
				datasets: [{
					label: '# of Placements',
					data: <?php echo json_encode($counts); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				},
				plugins: {
					title: {
						display: true,
						text: 'Placement Graph for <?php echo $selected_year; ?>'
					}
				}
			}
		});

		var topChart = document.getElementById('topChart').getContext('2d');

var topCompanies = <?php 
session_start();
require_once 'db_config.php';

    $sql_top = "SELECT alum_placed.company_name, COUNT(*) as count FROM alum_database JOIN alum_placed ON alum_database.id = alum_placed.id WHERE YEAR(alum_placed.start_date) = $selected_year GROUP BY alum_placed.company_name ORDER BY count DESC LIMIT 3";
    $result_top = $db_conn->query($sql_top);
    $top_names = array();
    $top_counts = array();
    while($row_top = $result_top->fetch_assoc()) {
        array_push($top_names, $row_top["company_name"]);
        array_push($top_counts, $row_top["count"]);
    }
    echo json_encode($top_names);
?>;

var topCounts = <?php echo json_encode($top_counts); ?>;

var topChart = new Chart(topChart, {
    type: 'pie',
    data: {
        labels: topCompanies,
        datasets: [{
            label: '# of Placements',
            data: topCounts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Top 3 Companies with the Most Placements'
            }
        }
    }
});

	</script>
	</main>
	<footer>
	<div class="footer">
    <div class="left">
      <img class="icon-line" src="iitplogo.jpg" alt="IITP logo">
      <!-- <img class="icon-yt" src="icons/Youtube-logo.jpg"> -->
    </div>
    <div class="middle">
      <!-- <input class="search"  type="search" placeholder="Search">
          <img class="icon-search" src="icons/searcj.png">
          <img class="icon-voice" src="icons/voice.jpg"> -->
      <!-- <h1 class="footer-h" >About This Website</h1>
      <h3>IIT patna's training and placement cell website for the database of student placed, upcoming recruitments,
        alumnus and maintainence of database</h3>
      <br> -->
      <div class="middle-bottom">
		<a class="abc" href="">About Us</a>
        <a class="abc" href="">privacy policy</a>
        <a class="abc" href="">Terms & conditions</a>
      </div>
      <br>
    </div>
    <div class="right">
      <!-- <img class="icon-short" src="icons/shorts.jpg">
          <img class="icon-live" src="icons/live.png">        
          <img class="icon-bell" src="icons/bell.png">        
          <img class="icon-user" src="icons/user.png">        
   -->
      <a href="">USER GUIDE <img class="icon-demo" src="multimedia.png"></a>
    </div>

  </div>
  </footer>

</body>
</html>

<!-- 
<footer>
<img class="fot-img" src="logo.jpeg" alt="">		<nav>
			<a href="#">About Us</a>
			<a href="#">Terms of Service</a>
			<a href="#">Privacy Policy</a>
		</nav>
	</footer> -->


