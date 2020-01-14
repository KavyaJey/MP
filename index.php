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
      <h3>Instructions</h3>
      <p>
        This is a MP Pre-tournament Practice Scheduler. Generating a practice tournament schedule using this schedule maker is very simple. Just follow the steps below: </br>

        1. Enter the first & last names of the players who will be playing in the tournament and make sure to include a comma in between each child's name. </br>
        2. Enter the first & last names of the monitor who have volunteered to be in the mock tournament and make sure to include a comma in between each monitor's name. </br> 
        3. Choose the division that the students are playing in. </br> 
        4. Click the 'Submit' button, and voilà! Your tournament schedule is ready.
      </p>
		</header>
		<main>
      <form action="schedulePageNew.php" method="post" id="form">
			<h3>Add Students: <span class="definition">Enter the first & last names of the students</span><h5>Make sure to include a comma after each child's last name.</h5></h3>
      <textarea id="studentInputs" name="students"></textarea>
			<h3>Add Monitors: <span class="definition">Enter the first & last names of the monitors</span><h5>Make sure to include a comma after each monitor's last name</h5></h3>
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

    <h3>
    	About This Site
    </h3>
    <p>
    	The MP Practice Tournament Scheduler was created by Kavya Jey, a former Pentathlete. Her father was the Math Pentathlon Lead of her school and he was responsible for conducting practice tournaments for the students who were playing. She noticed the amount of hard work and time that goes into scheduling those practice tournaments and thought to make it easier for future Math Pentathlon Leads. After 2 1/2 years of writing code & testing the Scheduler, she achieved her goal and asked that the Pentathlon Institute share this with coaches who run practice tournaments. The MP Practice Tournament Scheduler will save a lot of time and help organize your practice tournament to run smoothly & easily. Hope this is helpful for you!

		  This website uses round-robin scheduling. A word of thanks goes out to <a href="https://nrich.maths.org/1443" target="_blank"> NRICH's excellent website</a> that helped me understand the algorithms required for this.
    </p>
      
	<!--comment test-->
	</main>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="validations.js"></script>
</html>