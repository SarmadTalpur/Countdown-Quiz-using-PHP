<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>QUIZ MANIA</title>
	<style>
		.button{
			background-color: tomato; border: none; color: white; padding: 8px 30px; margin: 5px;
		}
		.button:hover{
			background-color: rgb(238, 52, 20);
		}
		.container{
			border: 1px solid gray; padding: 15px 30px; margin-bottom: 20px; width: 50%; background-color: skyblue;
		}
	</style>
</head>
<body style="background-color: silver">
	<div style="display: flex; flex-direction: column; align-items: center;">
		<h1 style="margin-top:80px">QUIZ MANIA</h1>
		<h2>Participate in the Quiz Mania and check how good is your knowledge about Football!</h2>
		<h3>Each question carries 1 point and time limit of 10 seconds.</h3>
		<h3 style="margin-bottom: 60px">GOOD LUCK!</h3>
		<div class="container" id="q1">
			<h4>Question No. 1</h4>
			<hr>
			<p>Which team has won most Football World Cup Titles?</p>
			<button id="q1o1" class="button">Brazil</button>
			<button id="q1o2" class="button">Italy</button>
			<label id="time" style="margin-left: 140px;"></label>
		</div>
		<div class="container" id="q2" style="display: none;">
			<h4>Question No. 2</h4>
			<hr>
			<p>Which team won three consecutive Champions League Titles?</p>
			<button id="q2o1" class="button">Manchester United</button>
			<button id="q2o2" class="button">Real Madrid</button>
			<label id="time2" style="margin-left: 140px"></label>
		</div>
		<div class="container" id="q3" style="display: none;">
			<h4>Question No. 3</h4>
			<hr>
			<p>Who is the most expensive transferred player in Football till day?</p>
			<button id="q3o1" class="button">Neymar Jr</button>
			<button id="q3o2" class="button">Kylian Mbbape</button>
			<label id="time3" style="margin-left: 140px"></label>
		</div>
		<div class="container" id="q4" style="display: none;">
			<h4>Question No. 4</h4>
			<hr>
			<p>Who is the highest paid Soccer Player?</p>
			<button id="q4o1" class="button">Lionel Messi</button>
			<button id="q4o2" class="button">Cristiano Ronaldo</button>
			<label id="time4" style="margin-left: 140px"></label>
		</div>
		<div id="result" style="display: none;">
			<label>Correct Answers: </label>
			<label id="correct"></label>
			<br>
			<label>Unattempted Questions</label>
			<label id="unattempted"></label>
			<br>
			<label>Wrong Answers</label>
			<label id="wrong"></label>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		var x = document.getElementById("time");
		var y = document.getElementById("time2");
		var z = document.getElementById("time3");
		var a = document.getElementById("time4");

		setTimeout(function(){
		  	setTimeout(function(){
			$('#q1').fadeOut('fast');
		}, 10000);
		x.innerHTML="1" }, 1000);
		setTimeout(function(){ x.innerHTML="2" }, 2000);
		setTimeout(function(){ x.innerHTML="3" }, 3000);
		setTimeout(function(){ x.innerHTML="4" }, 4000);
		setTimeout(function(){ x.innerHTML="5" }, 5000);
		setTimeout(function(){ x.innerHTML="6" }, 6000);
		setTimeout(function(){ x.innerHTML="7" }, 7000);
		setTimeout(function(){ x.innerHTML="8" }, 8000);
		setTimeout(function(){ x.innerHTML="9" }, 9000);
		setTimeout(function(){ x.innerHTML="10" }, 10000);
			setTimeout(function(){
			  	setTimeout(function(){
				$('#q2').fadeOut('fast');
				}, 10000);
				setTimeout(function(){ y.innerHTML="1" }, 1000);
				setTimeout(function(){ y.innerHTML="2" }, 2000);
				setTimeout(function(){ y.innerHTML="3" }, 3000);
				setTimeout(function(){ y.innerHTML="4" }, 4000);
				setTimeout(function(){ y.innerHTML="5" }, 5000);
				setTimeout(function(){ y.innerHTML="6" }, 6000);
				setTimeout(function(){ y.innerHTML="7" }, 7000);
				setTimeout(function(){ y.innerHTML="8" }, 8000);
				setTimeout(function(){ y.innerHTML="9" }, 9000);
				setTimeout(function(){ y.innerHTML="10" }, 10000);
				$('#q2').show();

					setTimeout(function(){
						setTimeout(function(){
						$('#q3').fadeOut('fast');
						}, 10000);
						setTimeout(function(){ z.innerHTML="1" }, 1000);
						setTimeout(function(){ z.innerHTML="2" }, 2000);
						setTimeout(function(){ z.innerHTML="3" }, 3000);
						setTimeout(function(){ z.innerHTML="4" }, 4000);
						setTimeout(function(){ z.innerHTML="5" }, 5000);
						setTimeout(function(){ z.innerHTML="6" }, 6000);
						setTimeout(function(){ z.innerHTML="7" }, 7000);
						setTimeout(function(){ z.innerHTML="8" }, 8000);
						setTimeout(function(){ z.innerHTML="9" }, 9000);
						setTimeout(function(){ z.innerHTML="10" }, 10000);
						$('#q3').show();
							setTimeout(function(){
								setTimeout(function(){
								$('#q4').fadeOut('fast');
								}, 10000);
								setTimeout(function(){ a.innerHTML="1" }, 1000);
								setTimeout(function(){ a.innerHTML="2" }, 2000);
								setTimeout(function(){ a.innerHTML="3" }, 3000);
								setTimeout(function(){ a.innerHTML="4" }, 4000);
								setTimeout(function(){ a.innerHTML="5" }, 5000);
								setTimeout(function(){ a.innerHTML="6" }, 6000);
								setTimeout(function(){ a.innerHTML="7" }, 7000);
								setTimeout(function(){ a.innerHTML="8" }, 8000);
								setTimeout(function(){ a.innerHTML="9" }, 9000);
								setTimeout(function(){ a.innerHTML="10" }, 10000);
								$('#q4').show();
								setTimeout(function(){$('#result').show();},11000)
							}, 11000);
					}, 11000);
			}, 11000);

		let cor=0; let unattempted=4; let wrong=0;
		$('#q1o1').click(function(){
			cor++;
			unattempted--;
			$("#correct").html(cor);
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q1o2').click(function(){
			unattempted--; wrong++;
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q2o2').click(function(){
			cor++;
			unattempted--;
			$("#correct").html(cor);
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q2o1').click(function(){
			unattempted--; wrong++;
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q3o1').click(function(){
			cor++;
			unattempted--;
			$("#correct").html(cor);
			$("#unattempted").html(unattempted);
		});
		$('#q3o2').click(function(){
			unattempted--; wrong++;
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q4o1').click(function(){
			cor++;
			unattempted--;
			$("#correct").html(cor);
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
		$('#q4o2').click(function(){
			unattempted--; wrong++;
			$("#unattempted").html(unattempted);
			$("#wrong").html(wrong);
		});
	</script>
</body>
</html>