<html>
<!--my first git comment-->
	<head>
		<title>MP Scheduler</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300|Slabo+27px" rel="stylesheet">
  		<link rel="stylesheet" type="text/css" href="frontPage.css">
  		<link rel="stylesheet" type="text/css" href="common.css">
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			include 'headerLogo.php';
		?>
		<header>
			<h1 id="title">MP Scheduler</h1>
			<p id="about">This is a MP mock scheduler. This makes it much easier to make schedules when you play Math Pentathlon. You can make a schedule in 3 easy steps: </p>
			<h2 id="3Steps">Add Students > Add Monitor > Create Schedule</h2>
		</header>
		<main>
      <form action="schedulePageNew.php" method="post" id="form">
			<h3>Add Students: <span class="definition">List the students</span><h5>Please put commas between the names.</h5></h3>
      <textarea id="studentInputs" name="students"></textarea>
			<h3>Add Monitors: <span class="definition">List the monitors</span><h5>Please put commas between the names.</h5></h3>
			<textarea id="monitorInputs" name="monitors"></textarea>
			<h3>Division: <span class="definition">Select the division the students & monitors are in</span></h3>
      <select id="dropdown" name="division">
        <option value="div1">Division 1</option>
        <option value="div2">Division 2</option>
        <option value="div3">Division 3</option>
        <option value="div4">Division 4</option>
      </select>
      <br>
      <input type="submit" id="submit">
    </form>
      
	<!--comment test-->
	</main>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php
	session_start();
	$students = $_POST["students"];
	$monitors = $_POST["monitors"];
	$division = $_POST["division"];
	$_SESSION['students'] = $students;
	$_SESSION['monitors'] = $monitors;
	$_SESSION['division'] = $division;
  ?>
  <script src="frontPage.js"></script>
</html>