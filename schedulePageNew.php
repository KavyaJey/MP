<html>
  <head>
    <title>MP Scheduler</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="schedulePage.css">
    <link rel="stylesheet" type="text/css" href="frontPage.css">
    <link rel="stylesheet" type="text/css" href="common.css">
    <!--<link rel="stylesheet" href="../../stylesheets/coloringpage.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="../../stylesheets/coloringpageprint.css" type="text/css" media="print" />-->
  </head>
  <body>
    <?php
        include'headerLogo.php';
      ?>
    <header>
      <h1 id="title">MP Scheduler</h1>
      <p>Please click on the column header for the rounds</p>
    </header>
    <main id="main">
      <div id="buttonContainer">
        <button id="studentCardButton" class="buttons"><a href="studentsCardPageNew.php">Create Student Cards</a></button>
        <button id="stationCardButton" class="buttons"><a href="stationCardPageNew.php">Create Station Cards</a></button>
        <button id="printButton" class="buttons"><a href="javascript:window.print()">Print</a></button>
      </div>
      </main>
        <?php
          session_start();
          $students = $_POST["students"];
          $monitors = $_POST["monitors"];
          $division = $_POST["division"];
          $_SESSION['students'] = $students;
          $_SESSION['monitors'] = $monitors;
          $_SESSION['division'] = $division;
        ?>
        <div id="tableHolder"></div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
  <script src="schedulePage.js"></script>
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
    var monitorNames = monitor.split(",");
    var NumOfMonitorsNeeded = studentNames1.length/2;

    for (var MonitorNum = monitorNames.length; MonitorNum < NumOfMonitorsNeeded; MonitorNum++) {
      monitorNames.push('Extra Monitor '+MonitorNum);
      console.log(monitorNames);
    }

    console.log(monitor);
    console.log(monitorNames);

    var division = ("<?php echo $_SESSION['division'] ?>");
    console.log(division);
    var getGames = games[division];
    console.log(getGames);

    var opponent1 = [];
    var opponent2 = [];

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
    console.log(round1);

    //round 2
    var studentNames1Length = studentNames1.length;
    var studentNames2 = [studentNames1[0],studentNames1[studentNames1Length-1]];
    for (var i = 1; i < studentNames1Length-1; i++) {
      studentNames2.push(studentNames1[i]);
    }

    var round2 = [];
    for (var i = 0; i < studentNames2.length / 2; i++) {
      round2.push(studentNames2[i]+" is with "+studentNames2[(studentNames2.length-1)-i]);
      html+='<tr>';
      html+='<td>';
      html+='2';
      html+='</td>';
      html+='<td>';
      html+=i+1;
      html+='</td>';
      html+='<td>';
      html+=studentNames2[i];
      html+='</td>';
      html+='<td>';
      html+=studentNames2[(studentNames2.length-1)-i];
      html+='</td>';
      html+='<td>';
      html+=monitorNames[i];
      html+='</td>';
      html+='<td>';
      html+=getGames[1];
      html+='</td>';
      html+='</tr>';
    }
    console.log(round2);


    //round 3
    var studentNames2Length = studentNames2.length;
    var studentNames3 = [studentNames2[0],studentNames2[studentNames2Length-1]];
    for (var i = 1; i < studentNames2Length-1; i++) {
      studentNames3.push(studentNames2[i]);
    }

    var round3 = [];
    for (var i = 0; i < studentNames3.length / 2; i++) {
      round3.push(studentNames3[i]+" is with "+studentNames3[(studentNames3.length-1)-i]);
      html+='<tr>';
      html+='<td>';
      html+='3';
      html+='</td>';
      html+='<td>';
      html+=i+1;
      html+='</td>';
      html+='<td>';
      html+=studentNames3[i];
      html+='</td>';
      html+='<td>';
      html+=studentNames3[(studentNames3.length-1)-i];
      html+='</td>';
      html+='<td>';
      html+=monitorNames[i];
      html+='</td>';
      html+='<td>';
      html+=getGames[2];
      html+='</td>';
      html+='</tr>';
    }
    console.log(round3);

    //round 4
    var studentNames3Length = studentNames3.length;
    var studentNames4 = [studentNames3[0],studentNames3[studentNames3Length-1]];
    for (var i = 1; i < studentNames3Length-1; i++) {
      studentNames4.push(studentNames3[i]);
    }

    var round4 = [];
    for (var i = 0; i < studentNames4.length / 2; i++) {
      round4.push(studentNames4[i]+" is with "+studentNames4[(studentNames4.length-1)-i]);
      html+='<tr>';
      html+='<td>';
      html+='4';
      html+='</td>';
      html+='<td>';
      html+=i+1;
      html+='</td>';
      html+='<td>';
      html+=studentNames4[i];
      html+='</td>';
      html+='<td>';
      html+=studentNames4[(studentNames4.length-1)-i];
      html+='</td>';
      html+='<td>';
      html+=monitorNames[i];
      html+='</td>';
      html+='<td>';
      html+=getGames[3];
      html+='</td>';
      html+='</tr>';
    }
    console.log(round4);

    //round 5
    var studentNames4Length = studentNames4.length;
    var studentNames5 = [studentNames4[0],studentNames4[studentNames4Length-1]];
    for (var i = 1; i < studentNames4Length-1; i++) {
      studentNames5.push(studentNames4[i]);
    }

    var round5 = [];
    for (var i = 0; i < studentNames5.length / 2; i++) {
      round5.push(studentNames5[i]+" is with "+studentNames5[(studentNames5.length-1)-i]);
      html+='<tr>';
      html+='<td>';
      html+='5';
      html+='</td>';
      html+='<td>';
      html+=i+1;
      html+='</td>';
      html+='<td>';
      html+=studentNames5[i];
      html+='</td>';
      html+='<td>';
      html+=studentNames5[(studentNames5.length-1)-i];
      html+='</td>';
      html+='<td>';
      html+=monitorNames[i];
      html+='</td>';
      html+='<td>';
      html+=getGames[4];
      html+='</td>';
      html+='</tr>';
    }
    console.log(round5);

    //table ending & appending
    html+='</tbody></table>';
    $("#tableHolder").append(html);
    console.log(html);

































          /*
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

          var html = '<table id="scheduleTable" class="sortable" border="0" cellspacing="0" cellpadding="0">';
          html+='<thead><tr><th id="round">Round</th><th id="station">Station</th><th id="opponent1">Opponent 1</th><th id="opponent2">Opponent 2</th><th id="monitor">Monitor</th><th id="game">Game</th></tr></thead><tbody>';
          for (var j = 0; j < opponent1.length; j++) {
            for (var i = 0; i < 5; i++) {
              if ((i+j) >= opponent2.length) {
                k = (j+i)-opponent2.length;
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
              html+=j+1;
              html+='</td>';
              html+='<td class="breakUp">';
              html+=opponent1[j];
              html+='</td>';
              html+='<td class="breakUp">';
              html+=opponent2[k];
              html+='</td>';
              html+='<td class="breakUp">';
              html+=monitorNames[j];
              html+='</td>';
              html+='<td>';
              html+=getGames[i];
              html+='</td>';
              html+='</tr>';
            };
          };
          html+='</tbody><table>';
          $("#tableContainer").append(html);
          console.log(html);
          $(document).ready(function() {
            $("#scheduleTable").DataTable( {
              "order": [[ 0, "asc" ]]
            } );*/
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
                console.log(col);
                var val1 = $(a).children('td').eq(col).text().toUpperCase();
                var val2 = $(b).children('td').eq(col).text().toUpperCase();
                if ($.isNumeric(val1) && $.isNumeric(val2))
                  return sortOrder == 1 ? val1 - val2 : val2 - val1;
                else
                  return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
              });
              $.each(arrData, function(index, row) {
                $('tbody').append(row);
              });
            });*/
        /*});*/
  </script>
</html>