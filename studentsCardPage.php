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
    <button id="stationCardButton" class="buttons"><a href="stationCardPage.php">Create Station Cards</a></button>
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
};

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

  $( ".sortable" ).each(function() {
    console.log("I will sort the table", this);
     $(this).DataTable( {
        "order": [[ 0, "asc" ]]
    } );
  });

	</script>
</body>
</html>
