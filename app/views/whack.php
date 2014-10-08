

<html>
<head>
	<title>Whack.html</title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style>

#game-board {
	width:700px;
	box-align:center;
	margin-left:400px;
	
}
.mole 	{
	background-image: url(img/mole.jpg);
	background-color: black;
    background-size: 150px 150px;
    background-repeat: no-repeat;
}
.mole-hole	{
	border:1px dashed grey;
	width:150px;
	height:150px;
	float:left;
}
.h1 	{
	align:center; 
}


</style>
</head>
<body>

<h1>Whack a Mole</h1>

<button id="start-button">Start</button>

<div id="game-board">
<div class="mole-hole" id="1">
</div>
<div class="mole-hole" id="2">
</div>
<div class="mole-hole" id="3">
</div>
<div class="mole-hole" id="4">
</div>
<div class="mole-hole" id="5">
</div>
<div class="mole-hole" id="6">
</div>
<div class="mole-hole" id="7">
</div>
<div class="mole-hole" id="8">
</div>
<div class="mole-hole" id="9">
</div>
<div class="mole-hole" id="10">
</div>
<div class="mole-hole" id="11">
</div>
<div class="mole-hole" id="12">
</div>

<script>

$(document).ready(function () {
	function getRandomInt() {
		return Math.floor(Math.random()* 12) +1;
	}	

	$('#start-button').click(function()  {
		setInterval(function () {
			boxId = getRandomInt();
			//console.log(boxId);
			$('#' + boxId).addClass('mole');

			$('#' + boxId).click(function() {
				
			});
			setTimeout(function () {
				$("#" + boxId).removeClass('mole');
			}	,2000);	
		},3000);  
	});
				//click on image only to remove
	$("#game-board").on('click', '.mole', function() {
		$(this).removeClass('mole');
	});
				


});

</script>
</body>
</html>