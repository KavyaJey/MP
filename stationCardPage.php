<html>
<head>
	<title>MP Scheduler</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300|Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stationCardPage.css">
	<link rel="stylesheet" type="text/css" href="frontPage.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="schedulePage.css">
	<!-- TODO: all of the above css should be combined into 2 files, one common and one just for this page -->
</head>
<body>
<?php
	include'headerLogo.php';
    session_start();
  ?>
  <header>
    <h1 id="title">Station Cards</h1>
  </header>
	<main id="main">
    <button id="studentCardButton" class="buttons"><a href="studentsCardPage.php">Create Student Cards</a></button>
  </main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="studentsCardPage.js"></script>
	<script>
var games = {
          div1:["Calla", "Shape-up", "Kings & Quads", "Hex-A-Gone", "Star Track"],
          div2:["Fiar", "Sum Dominoes & Dice", "Quatro Sinko", "Par 55", "Ramrod"],
          div3:["Fab-A-Diffy", "Stars & Bars", "Contig 60", "Queens & Guards", "Juggle"],
          div4:["Fraction Pinball", "Pent Em' In", "Prime Gold", "Remainder Islands", "Frac Fact"]
          };

          var student = ("<?php echo $_SESSION['students'] ?>");
          var studentNames = student.split(",");
          console.log(student);
          console.log(studentNames);
          console.log(studentNames.length);
          var monitor = ("<?php echo $_SESSION['monitors'] ?>");
          var monitorNames = monitor.split(",");
          console.log(monitor);
          console.log(monitorNames);
          var division = ("<?php echo $_SESSION['division'] ?>");
          console.log(division);
          var opponent1 = [];
          var opponent2 = [];
          for (var i = 0; i < studentNames.length; i=i+2) {
            console.log(i);
            console.log(i+1);
            opponent1.push(studentNames[i]);
            opponent2.push(studentNames[i+1]);
          };
          console.log(opponent1);
          console.log(opponent2);
          
          var getGames = games[division];
          console.log(getGames);

          var html = '<table id="scheduleTable" class="sortable" style= "display:none" border="0" cellspacing="0" cellpadding="0">';
          html+='<tr><th id="round">Round</th><th id="station">Station</th><th id="opponent1">Opponent 1</th><th id="opponent2">Opponent 2</th><th id="monitor">Monitor</th><th id="game">Game</th></tr>';
          for (var j = 0; j < 5; j++) {
            for (var i = 0; i < 5; i++) {
              if ((i+j) >= 5) {
                k = (j+i)-5;
                console.log(i, j, k);
              }else{
                k = j+i;
                console.log(i, j, k, "This is else part");
              };
              console.log(opponent1[j] + " is opponents with " + opponent2[k] + " in round " + (i+1) + ". Their monitor is " + monitorNames[j] + " and they are in station " + j + ". They should play " + getGames[i] + ".");
              html+='<tr>';
              html+='<td>';
              html+=i+1;
              html+='</td>';
              html+='<td>';
              html+=j;
              html+='</td>';
              html+='<td>';
              html+=opponent1[j];
              html+='</td>';
              html+='<td>';
              html+=opponent2[k];
              html+='</td>';
              html+='<td>';
              html+=monitorNames[j];
              html+='</td>';
              html+='<td>';
              html+=getGames[i];
              html+='</td>';
              html+='</tr>';
            };
          };
          html+='<table>';
          $("#main").append(html);
          console.log(html);

          var tbl = $('#scheduleTable tr:has(td)').map(function(i, v) {
            var $td =  $('td', this);
            return {
              round: $td.eq(0).text(),
              station: $td.eq(1).text(),
              opponent1: $td.eq(2).text(),
              opponent2: $td.eq(3).text(),
              monitor: $td.eq(4).text(),
              game: $td.eq(5).text()               
            }
          }).get();
          console.log("tbl is", tbl);
          
          for (var i = 0; i < (studentNames.length/2); i++) {
	var html = '<div class="divs">';
	var j = i + 1; // this helps us out
	html +='<h1>Station #' + j + '</h1>';
	html += '<table border="0" class="sortable" cellspacing="0" cellpadding="0">';
	html+='<tr><th id="round">Round</th><th id="opponent1">Opponent 1</th><th id="opponent2">Opponent 2</th><th id="game">Game</th><th id="monitor">Monitor</th></tr>';
	for (var row in tbl) {
		console.log(Number(tbl[row]['station']));
			if (
					Number(tbl[row]['station']) === i
				) { 
				console.log("table row is", tbl[row]);
					html+='<tr>';
					html+='<td>';
					html+=tbl[row]['round'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['opponent1'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['opponent2'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['game'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['monitor'];
					html+='</td>';
					html+='</tr>';
				console.log(html);
			};
	};
	html += '</table>';
	html += '</div>';
	$("#main").append(html);
};
            $( ".sortable" ).each(function() {
              console.log("I will sort the table", this);
               $(this).DataTable( {
                  "order": [[ 0, "asc" ]]
              } );
            });
          </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="stationCardPage.js"></script>
</body>
</html>

