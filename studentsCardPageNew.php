<html>
<head>
	<title>MP Scheduler</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300|Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="studentsCardPage.css">
	<link rel="stylesheet" type="text/css" href="frontPage.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="schedulePage.css">
</head>
<body>
	<?php
		include'headerLogo.php';
	?>
	
	<header>
		<h1 id="title">Student Cards</h1>
	</header>
  <?php
    session_start();
  ?>
	<main id="main">
    <button id="stationCardButton" class="buttons"><a href="stationCardPageNew.php">Create Station Cards</a></button>
    <button id="printButton" class="buttons"><a href="javascript:window.print()">Print</a></button>
    <div id="cardHolder"></div>
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

  for (var s = 0; s < studentNames1.length; s++) {

    var studentName = studentNames1[s];
    NumOfStudents = studentNames1.length-1;
    var playerPosition1 = studentNames1.indexOf(studentName);
    var opponentPosition1 = NumOfStudents-playerPosition1;
    var opponent1 = studentNames1[opponentPosition1];

    console.log(studentName);
    console.log(playerPosition1);
    console.log(opponentPosition1);
    console.log(opponent1);

    var playerPosition2 = studentNames2.indexOf(studentName);
    var opponentPosition2 = NumOfStudents-playerPosition2;
    var opponent2 = studentNames2[opponentPosition2];

    var playerPosition3 = studentNames3.indexOf(studentName);
    var opponentPosition3 = NumOfStudents-playerPosition3;
    var opponent3 = studentNames3[opponentPosition3];

    var playerPosition4 = studentNames4.indexOf(studentName);
    var opponentPosition4 = NumOfStudents-playerPosition4;
    var opponent4 = studentNames4[opponentPosition4];

    var playerPosition5 = studentNames5.indexOf(studentName);
    var opponentPosition5 = NumOfStudents-playerPosition5;
    var opponent5 = studentNames5[opponentPosition5];

    var studentIndexOriginal1 = studentNames1.indexOf(studentName);
    var studentIndexOriginal2 = studentNames2.indexOf(studentName);
    var studentIndexOriginal3 = studentNames3.indexOf(studentName);
    var studentIndexOriginal4 = studentNames4.indexOf(studentName);
    var studentIndexOriginal5 = studentNames5.indexOf(studentName);

    var halfway = studentNames1.length/2;
    var NumOfIndexes = studentNames1.length-1;

    if (studentIndexOriginal1 >= halfway) {
      var studentIndexNew1 = NumOfIndexes-studentIndexOriginal1;
    } else {
      var studentIndexNew1 = studentIndexOriginal1;
    }
    var station1 = studentIndexNew1+1;

    if (studentIndexOriginal2 >= halfway) {
      var studentIndexNew2 = NumOfIndexes-studentIndexOriginal2;
    } else {
      var studentIndexNew2 = studentIndexOriginal2;
    }
    var station2 = studentIndexNew2+1;

    if (studentIndexOriginal3 >= halfway) {
      var studentIndexNew3 = NumOfIndexes-studentIndexOriginal3;
    } else {
      var studentIndexNew3 = studentIndexOriginal3;
    }
    var station3 = studentIndexNew3+1;

    if (studentIndexOriginal4 >= halfway) {
      var studentIndexNew4 = NumOfIndexes-studentIndexOriginal4;
    } else {
      var studentIndexNew4 = studentIndexOriginal4;
    }
    var station4 = studentIndexNew4+1;

    if (studentIndexOriginal5 >= halfway) {
      var studentIndexNew5 = NumOfIndexes-studentIndexOriginal5;
    } else {
      var studentIndexNew5 = studentIndexOriginal5;
    }
    var station5 = studentIndexNew5+1;

    console.log(studentIndexOriginal1);
    console.log(studentIndexNew1);
    console.log(studentIndexOriginal2);
    console.log(studentIndexNew2);
    console.log(studentIndexOriginal3);
    console.log(studentIndexNew3);
    console.log(studentIndexOriginal4);
    console.log(studentIndexNew4);
    console.log(studentIndexOriginal5);
    console.log(studentIndexNew5);

    table=[];
    table+='<h2>';
    table+=studentName;
    table+='</h2>';
    table+='<table id="studentsCards" class="sortable" border="0" cellspacing="0" cellpadding="0">';
    table+='<thead><tr><th id="round">Round</th><th id="station">Station</th><th id="opponent">Opponent</th><th id="game">Game</th></tr></thead><tbody>';

    table+='<tr>';
    table+='<td>';
    table+='1';
    table+='</td>';
    table+='<td>';
    table+=station1;
    table+='</td>';
    table+='<td>';
    table+=opponent1;
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
    table+=station2;
    table+='</td>';
    table+='<td>';
    table+=opponent2;
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
    table+=station3;
    table+='</td>';
    table+='<td>';
    table+=opponent3;
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
    table+=station4;
    table+='</td>';
    table+='<td>';
    table+=opponent4;
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
    table+=station5;
    table+='</td>';
    table+='<td>';
    table+=opponent5;
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















  /*
  //table starting
  var html = '<table id="scheduleTable" class="sortable" border="0" cellspacing="0" cellpadding="0">';
  html+='<thead><tr><th id="round">Round</th><th id="station">Station</th><th id="opponent1">Opponent #1</th><th id="opponent2">Opponent #2</th><th id="monitor">Monitor</th><th id="game">Game</th></tr></thead><tbody>';
  
  //round 1
  var round1 = [];
  for (var i = 0; i < studentNames1.length / 2; i++) {
    round1.push(studentNames1[i]+" is with "+studentNames1[(studentNames1.length-1)-i]);
    html+='<tr>';
    html+='<td>';
    html+='1';
    html+='</td>';
    html+='<td>';
    html+=i+1;
    html+='</td>';
    html+='<td>';
    html+=studentNames1[i];
    html+='</td>';
    html+='<td>';
    html+=studentNames1[(studentNames1.length-1)-i];
    html+='</td>';
    html+='<td>';
    html+=monitorNames[i];
    html+='</td>';
    html+='<td>';
    html+=getGames[0];
    html+='</td>';
    html+='</tr>';
  }

  //table ending & appending
  html+='</tbody></table>';
  $("#tableHolder").append(html);
  console.log(html);
  */

        /*var games = {
          div1:["Calla", "Shape-up", "Kings & Quads", "Hex-A-Gone", "Star Track"],
          div2:["Fiar", "Sum Dominoes & Dice", "Quatro Sinko", "Par 55", "Ramrod"],
          div3:["Fab-A-Diffy", "Stars & Bars", "Contig 60", "Queens & Guards", "Juggle"],
          div4:["Fraction Pinball", "Pent Em' In", "Prime Gold", "Remainder Islands", "Frac Fact"]
          };

          var student = ("<?php echo $_SESSION['students'] ?>");
          var studentNames = student.split(",");
          var monitor = ("<?php echo $_SESSION['monitors'] ?>");
          var monitorNames = monitor.split(",");
          var division = ("<?php echo $_SESSION['division'] ?>");
          var opponent1 = [];
          var opponent2 = [];
          for (var i = 0; i < studentNames.length; i=i+2) {
            opponent1.push(studentNames[i]);
            opponent2.push(studentNames[i+1]);
          };
          
          var getGames = games[division];
          
          var html = '<table id="scheduleTable" style="display:none" border="0" cellspacing="0" cellpadding="0">';
          html+='<thead><tr><th id="round" data-autoclick="true">Round</th><th id="station">Station</th><th id="opponent1">Opponent 1</th><th id="opponent2">Opponent 2</th><th id="monitor">Monitor</th><th id="game">Game</th></tr></thead><tbody>';
          for (var j = 0; j < 5; j++) {
            for (var i = 0; i < 5; i++) {
              if ((i+j) >= 5) {
                k = (j+i)-5;
              }else{
                k = j+i;
              };
              html+='<tr>';
              html+='<td>';
              html+=i+1;
              html+='</td>';
              html+='<td>';
              html+=j+1;
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
          html+='</tbody><table>';
          $("#main").append(html);

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

for (var i = 0; i < studentNames.length; i++) {
	var html = '<div class="divs">';
	var j = i + 1;
	html +='<h1>Student #' + j + ' ~ ' + studentNames[i] + '</h1>';
	html += '<table class="sortable" border="0" cellspacing="0" cellpadding="0">';
	html+='<thead><tr><th id="round" data-autoclick="true">Round</th><th id="game">Game</th><th id="station">Station</th><th id="opponent">Opponent</th></tr></thead><tbody>';
	for (var row in tbl) {
	    if (tbl[row]['opponent1'] === studentNames[i]) { 
					html+='<tr>';
					html+='<td>';
					html+=tbl[row]['round'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['game'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['station'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['opponent2'];
					html+='</td>';
					html+='</tr>';
			};
			if (tbl[row]['opponent2'] === studentNames[i]) {
					html+='<tr>';
					html+='<td>';
					html+=tbl[row]['round'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['game'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['station'];
					html+='</td>';
					html+='<td>';
					html+=tbl[row]['opponent1'];
					html+='</td>';
					html+='</tr>';
			};
	};
	html += '</tbody></table>';
	html += '</div>';
	$("main").append(html);
  console.log("created");
};*/

    /*$(this).click(function() {
              if ($(this).is('.asc')) {
                $(this).removeClass('asc');
                $(this).addClass('desc selected');
                sortOrder = -1;
              } else {
                $(this).addClass('asc selected');
                $(this).removeClass('desc');
                sortOrder = 1;
              }
              $(this).siblings().removeClass('asc selected');
              $(this).siblings().removeClass('desc selected');
              var arrData = $('table').find('tbody >tr:has(td)').get();

              arrData.sort(function(a, b) {
                var val1 = $(a).children('td').eq(0).text().toUpperCase();
                var val2 = $(b).children('td').eq(0).text().toUpperCase();
                if ($.isNumeric(val1) && $.isNumeric(val2))
                  return sortOrder == 1 ? val1 - val2 : val2 - val1;
                else
                  return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
              });
              $.each(arrData, function(index, row) {
                $('tbody').append(row);
              });
            });*/
/*
  $( ".sortable" ).each(function() {
    console.log("I will sort the table", this);
     $(this).DataTable( {
        "order": [[ 0, "asc" ]]
    } );
  });
  */

	</script>
</body>
</html>
