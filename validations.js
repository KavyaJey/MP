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
console.log(monitorNames);
//validations
if (studentNames.length === 0){
alert("Please input at least 1 student.");
return false;
} 

if (monitorNames.length === 0){
alert("Please input at least 1 monitor.");
return false;
} 

for (var i = 0; i < studentNames.length; i++) {
if (studentNames[i].length != "" && studentNames[i].length < 4) {
alert("Every student's name should include a first and last name.");
return false;
};
};

for (var i = 0; i < monitorNames.length; i++) {
if (monitorNames[i].length != "" && monitorNames[i].length < 4) {
alert("Every monitor's name should include a first and last name.");
return false;
};
};

for (var i = 0; i < studentNames.length; i++) {
if (studentNames[i] = "") {
alert("Please remove a comma after the last student's name.");
return false;
};
};

for (var i = 0; i < monitorNames.length; i++) {
if (monitorNames[i] = "") {
alert("Please remove a comma after the last monitor's name.");
return false;
};
};

});