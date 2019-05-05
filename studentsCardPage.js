/*var schedule = {
  row1:[1,1,"Kavya","Donovan", "Jey", "Juggle"],
  row2:[1,2,"Riya", "Harmony", "Malathy", "Juggle"],
  row3:[1,3,"Ami", "Jash", "Doug", "Juggle"],
  row4:[1,4,"Leah", "Ian", "Inder", "Juggle"],
  row5:[1,5,"Mary", "Ella", "Paras", "Juggle"],
  //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  row6:[2,1,"Kavya","Harmony", "Jey", "Stars and Bars"],
  row7:[2,2,"Riya", "Jash", "Malathy", "Stars and Bars"],
  row8:[2,3,"Ami", "Ian", "Doug", "Stars and Bars"],
  row9:[2,4,"Leah", "Ella", "Inder", "Stars and Bars"],
  row10:[2,5,"Mary", "Donovan", "Paras", "Stars and Bars"],
  //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  row11:[3,1,"Kavya","Jash", "Jey", "Contig 60"],
  row12:[3,2,"Riya", "Ian", "Malathy", "Contig 60"],
  row13:[3,3,"Ami", "Ella", "Doug", "Contig 60"],
  row14:[3,4,"Leah", "Donovan", "Inder", "Contig 60"],
  row15:[3,5,"Mary", "Harmony", "Paras", "Contig 60"],
  //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  row16:[4,1,"Kavya","Ian", "Jey", "Fab-A-Diffy"],
  row17:[4,2,"Riya", "Ella", "Malathy", "Fab-A-Diffy"],
  row18:[4,3,"Ami", "Donovan", "Doug", "Fab-A-Diffy"],
  row19:[4,4,"Leah", "Harmony", "Inder", "Fab-A-Diffy"],
  row20:[4,5,"Mary", "Jash", "Paras", "Fab-A-Diffy"],
  //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  row21:[5,1,"Kavya","Ella", "Jey", "Queens And Guards"],
  row22:[5,2,"Riya", "Donovan", "Malathy", "Queens And Guards"],
  row23:[5,3,"Ami", "Harmony", "Doug", "Queens And Guards"],
  row24:[5,4,"Leah", "Jash", "Inder", "Queens And Guards"],
  row25:[5,5,"Mary", "Ian", "Paras", "Queens And Guards"]
};*/

/*
1) Go through each row in schedule
	Row is a variable. 
	First, row has the value of row 1. 
		1) Checks if row one has a studentname[0] (which is Kavya)
		2) It is true, so 
			a) Create the row with the info
	Then it has the value of row 2,
		1) 1) Checks if row one has a studentname[0] (which is Kavya)
		2) It is false, so 
			a) So don't create the row with the info
	Same with row 3, row 4, row 5, then row 6

*/

/*Bad Code Below:*/
/*if (schedule[row][4] === "student1"){
		html+='<tr>';
		var html = '<table id="studentTable1" border="0" cellspacing="0" cellpadding="0">';
		html+='<tr><th id="round">Round</th><th id="game">Game</th><th id="station">Station</th><th id="opponent">Opponent</th><th id="game">Game</th></tr>';
		for (var row in schedule)//Use only the rows that include 'student1' {
			html+='<tr>';
			for (var i = 0; i < schedule[row].length; i++) {
				console.log(schedule[row][i]);
				html+='<td>';
				html+=schedule[row][i];
				html+='</td>';
			};//Use only the info that we need(round, game, station, opponent)
			html+='</tr>';
			console.log(html);
		};
		html+='</table>'
		$("#tableContainer1").append(html);
	};
*/