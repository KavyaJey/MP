var games = {
  div1:["Calla", "Shape-up", "Kings & Quads", "Hex-A-Gone", "Star Track"],
  div2:["Fiar", "Sum Dominoes & Dice", "Quatro Sinko", "Par 55", "Ramrod"],
  div3:["Fab-A-Diffy", "Stars & Bars", "Contig 60", "Queens & Guards", "Juggle"],
  div4:["Fraction Pinball", "Pent Em' In", "Prime Gold", "Remainder Islands", "Frac Fact"]
};

$("#form").submit(function(event){
  var studentNames = $("#studentInputs").val().split(",");
  var monitorNames = $("#monitorInputs").val().split(",");
  var division = $("#dropdown").val();
  var getGames = games[division];

  cookie1 = studentNames;
  cookie2 = monitorNames;
  cookie3 = getGames;
  console.log(document.cookie);
  //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  /*if(monitorNames.length < studentNames.length/2) {
    alert("Please include atleast monitors as students/2");
    return false;
  };*/
  /*if (monitorNames.length > studentNames.length/2) {
    alert("Too many monitors");
    return false;
  };*/
  //event.preventDefault();
  for (var i = 0; i < studentNames.length; i++) {
    if (studentNames[i].length < 4){
      alert("Every name should include a first and last name");
      return false;
    };
  };
  /*var studentLength = studentNames.length;
  if (studentLength%2 !== 0){
    studentLength++;
    console.log(studentLength);
  };
  if (monitorNames.length < Math.round(studentNames.length/2)) {
    alert("Please add more monitors");
    return false;
  };*/
});
