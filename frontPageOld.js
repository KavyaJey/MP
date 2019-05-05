$("#ScheduleButton").click(function() {
	var studentInputs = ["#studentsInput-1", "#studentsInput-2", "#studentsInput-3", "#studentsInput-4"];
	var monitorInputs = ["#monitorsInput-1", "#monitorsInput-2", "#monitorsInput-3", "#monitorsInput-4"];
	var students = {};
	var monitors = {};
	for (var i = 0; i < studentInputs.length; i++) {
		students['div'+(i+1)] = $(studentInputs[i]).val().split("/n");
		var divInStudents = students['div'+(i+1)];
			for (var k = 0; k < divInStudents.length; k++) {
				if (divInStudents[k].length < 4) {
					alert("Every name should include a first and last name");
				};
			};
		monitors['div'+(i+1)] = $(monitorInputs[i]).val().split("/n");
		var studentNames = $(studentInputs[i]).val().split("/n");
		var monitorNames = $(monitorInputs[i]).val().split("/n");
	};
	console.log(students.div1);
	var schedule = {};
	for (var div in students) /*for/in loop 1*/{
		schedule[div]={};
		var studentsArray = students[div];
		for (var i = 0; i < studentsArray.length; i++) /*for loop 1*/{
			for (var i = 0; i < studentNames.length; i++) {
				schedule[div]['student'+i] = studentsArray[i];
				i++;
				schedule[div]['student'+i] = studentsArray[i];
			};
			console.log(div);
			console.log('student'+i);
		};
	};

	for (var div in monitors) /*for/in loop 2*/{
		var monitorsArray = monitors[div];
		for (var i = 0; i < monitorsArray.length; i++) /*for loop 2*/{
			schedule[div]['monitor'+i] = monitorsArray[i];
		};
	};
	console.log(schedule);
	console.log(studentsArray[1]);

//Validations

	var S1 = $("#studentsInput-1").val();
	var S2 = $("#studentsInput-2").val();
	var S3 = $("#studentsInput-3").val();
	var S4 = $("#studentsInput-4").val();
	var M1 = $("#monitorsInput-1").val();
	var M2 = $("#monitorsInput-2").val();
	var M3 = $("#monitorsInput-3").val();
	var M4 = $("#monitorsInput-4").val();

	if((S1.length < 4) || (S2.length < 4) || (S3.length < 4) || (S4.length < 4)) {
		alert("Text field empty");
	}

	if (M1.length > S1.length/2) {
		alert("Too many monitors in in division 1");
	};
	if (M2.length > S2.length/2) {
		alert("Too many monitors in in division 2");
	};
	if (M3.length > S3.length/2) {
		alert("Too many monitors in in division 3");
	};
	if (M4.length > S4.length/2) {
		alert("Too many monitors in in division 4");
	};

	if (M1.length < S1.length/2) {
		alert("Need more monitors in in division 1");
	};
	if (M2.length < S2.length/2) {
		alert("Need more monitors in in division 2");
	};
	if (M3.length < S3.length/2) {
		alert("Need more monitors in in division 3");
	};
	if (M4.length < S4.length/2) {
		alert("Need more monitors in in division 4");
	};

	for(var div in students){
		for (var i = 0; i < div.length; i++) {
			if (students[div]['students'+i] < 4){
				alert("Every name should include a first and last name");
				console.log(students[div]['students'+i])
			};
		};
	};

	if (monitorNames) {};
});

var divisions = {
	first:{
		game1:"Calla",
		game2:"Shape-up",
		game3:"Kings & Quads",
		game4:"Hex-A-Gone",
		game5:"Star Track"
	},
	second:{
		game1:"Fiar",
		game2:"Sum Dominoes & Dice",
		game3:"Quatro Sinko",
		game4:"Par 55",
		game5:"Ramrod"
	},
	third:{
		game1:"Fab-A-Diffy",
		game2:"Stars & Bars",
		game3:"Contig 60",
		game4:"Queens & Guards",
		game5:"Juggle"
	},
	fourth:{
		game1:"Fraction Pinball",
		game2:"Pent Em' In",
		game3:"Prime Gold",
		game4:"Remainder Islands",
		game5:"Frac Fact"
	}
}