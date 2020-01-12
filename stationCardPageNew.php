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
    <button id="studentCardButton" class="buttons"><a href="studentsCardPageNew.php">Create Student Cards</a></button>
    <button id="printButton" class="buttons"><a href="javascript:window.print()">Print</a></button>
    <div id="tableHolder"></div>
  </main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="studentsCardPage.js"></script>
	<script>

  console.log(document.cookie);
  var games = {
    div1:["Calla", "Shape-up", "Kings & Quads", "Hex-A-Gone", "Star Track"],
    div2:["Fiar", "Sum Dominoes & Dice", "Quatro Sinko", "Par 55", "Ramrod"],
    div3:["Fab-A-Diffy", "Stars & Bars", "Contig 60", "Queens & Guards", "Juggle"],
    div4:["Fraction Pinball", "Pent Em' In", "Prime Gold", "Remainder Islands", "Frac Fact"]
  };

  var student = ("<?php echo $_SESSION['students'] ?>");
  var studentNames1 = student.split(",");
  var counter = 1;

  for (var i = counter; i > 0; i++) {
    if (studentNames1.length % 2 === 0) {
      break;
    } else {
      studentNames1.push("Extra Player");
    }
  }

  console.log(student);
  console.log(studentNames1);
  var monitor = ("<?php echo $_SESSION['monitors'] ?>");
  var monitorNamesdraft = monitor.split(",");

  for (var i = 0; i > studentNames1.length; i++) {
    monitorNames.push(monitorNamesdraft[i]);
  }

  for (var i = counter; i > 0; i++) {
    if (studentNames1.length / 2 === monitorNames.length) {
      break;
    } else {
      monitorNames.push("Extra Monitor "+i);
    }
  }

  console.log(monitor);
  console.log(monitorNames);

  var division = ("<?php echo $_SESSION['division'] ?>");
  console.log(division);
  var getGames = games[division];
  console.log(getGames);

  var opponent1 = [];
  var opponent2 = [];

  //round 2
  var studentNames1Length = studentNames1.length;
  var studentNames2 = [studentNames1[0],studentNames1[studentNames1Length-1]];
  for (var i = 1; i < studentNames1Length-1; i++) {
    studentNames2.push(studentNames1[i]);
  }

  //round 3
  var studentNames2Length = studentNames2.length;
  var studentNames3 = [studentNames2[0],studentNames2[studentNames2Length-1]];
  for (var i = 1; i < studentNames2Length-1; i++) {
    studentNames3.push(studentNames2[i]);
  }

  //round 4
  var studentNames3Length = studentNames3.length;
  var studentNames4 = [studentNames3[0],studentNames3[studentNames3Length-1]];
  for (var i = 1; i < studentNames3Length-1; i++) {
    studentNames4.push(studentNames3[i]);
  }

  //round 5
  var studentNames4Length = studentNames4.length;
  var studentNames5 = [studentNames4[0],studentNames4[studentNames4Length-1]];
  for (var i = 1; i < studentNames4Length-1; i++) {
    studentNames5.push(studentNames4[i]);
  }

  var NumOfStations = studentNames1.length/2;

  for (var s = 0; s < NumOfStations; s++) {


    var opponent1index = s;
    var opponent2index = studentNames1.length-s-1;
    var stationNum = s+1;

    table=[];
    table+='<h2>';
    table+='Station '+stationNum;
    table+='</h2>';
    table+='<table id="stationCards" class="sortable" border="0" cellspacing="0" cellpadding="0">';
    table+='<thead><th id="round">Round</th><th id="opponent1">Opponent 1</th><th id="opponent2">Opponent 2</th><th id="monitor">Monitor</th><th id="game">Game</th></tr></thead><tbody>';

    table+='<tr>';
    table+='<td>';
    table+='1';
    table+='</td>';
    table+='<td>';
    table+=studentNames1[opponent1index];
    table+='</td>';
    table+='<td>';
    table+=studentNames1[opponent2index];
    table+='</td>';
    table+='<td>';
    table+=monitorNames[s];
    table+='</td>';
    table+='<td>';
    table+=getGames[0];
    table+='</td>';
    table+='</tr>';

    table+='<tr>';
    table+='<td>';
    table+='2';
    table+='</td>';
    table+='<td>';
    table+=studentNames2[opponent1index];
    table+='</td>';
    table+='<td>';
    table+=studentNames2[opponent2index];
    table+='</td>';
    table+='<td>';
    table+=monitorNames[s];
    table+='</td>';
    table+='<td>';
    table+=getGames[1];
    table+='</td>';
    table+='</tr>';

    table+='<tr>';
    table+='<td>';
    table+='3';
    table+='</td>';
    table+='<td>';
    table+=studentNames3[opponent1index];
    table+='</td>';
    table+='<td>';
    table+=studentNames3[opponent2index];
    table+='</td>';
    table+='<td>';
    table+=monitorNames[s];
    table+='</td>';
    table+='<td>';
    table+=getGames[2];
    table+='</td>';
    table+='</tr>';

    table+='<tr>';
    table+='<td>';
    table+='4';
    table+='</td>';
    table+='<td>';
    table+=studentNames4[opponent1index];
    table+='</td>';
    table+='<td>';
    table+=studentNames4[opponent2index];
    table+='</td>';
    table+='<td>';
    table+=monitorNames[s];
    table+='</td>';
    table+='<td>';
    table+=getGames[3];
    table+='</td>';
    table+='</tr>';

    table+='<tr>';
    table+='<td>';
    table+='5';
    table+='</td>';
    table+='<td>';
    table+=studentNames5[opponent1index];
    table+='</td>';
    table+='<td>';
    table+=studentNames5[opponent2index];
    table+='</td>';
    table+='<td>';
    table+=monitorNames[s];
    table+='</td>';
    table+='<td>';
    table+=getGames[4];
    table+='</td>';
    table+='</tr>';

    table+='</tbody>';
    table+='</table>';

    console.log(table);
    $("#tableHolder").append(table);
  }
  </script>
</body>
</html>

