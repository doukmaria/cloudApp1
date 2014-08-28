<?php

$myName=$_POST['username'];

?>

<!documentTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Tetris</title>
	<link rel="stylesheet" type="text/css" href="table.css" />
</head>
<body>
<h1><?php echo $myName.' is playing '; ?>Tetris</h1>
<div class="score">Score: <span id="result">0</span></div>
<br>
<div id="stack">
    <div data-y="0" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="1" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="2" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="3" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="4" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="5" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="6" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="7" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="8" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="9" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="10" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="11" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="12" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="13" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="14" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="15" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="16" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="17" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="18" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
    <div data-y="19" class="line">
        <div data-x="0" class="brick"></div><div data-x="1" class="brick"></div><div data-x="2" class="brick"></div><div data-x="3" class="brick"></div><div data-x="4" class="brick"></div><div data-x="5" class="brick"></div><div data-x="6" class="brick"></div><div data-x="7" class="brick"></div><div data-x="8" class="brick"></div><div data-x="9" class="brick"></div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
var fs = "1111:01|01|01|01*011|110:010|011|001*110|011:001|011|010*111|010:01|11|01:010|111:10|11|10*11|11*010|010|011:111|100:11|01|01:001|111*01|01|11:100|111:11|10|10:111|001", now = [3,0], pos = [4,0];
var gP = function(x,y) { return document.querySelector('[data-y="'+y+'"] [data-x="'+x+'"]'); };
var draw = function(ch, cls) {
    var f = fs.split('*')[now[0]].split(':')[now[1]].split('|').map(function(a){return a.split('')});
    for(var y=0; y<f.length; y++)
        for(var x=0; x<f[y].length; x++)
            if(f[y][x]=='1') {
                if(x+pos[0]+ch[0]>9||x+pos[0]+ch[0]<0||y+pos[1]+ch[1]>19||gP(x+pos[0]+ch[0],y+pos[1]+ch[1]).classList.contains('on')) return false;
                gP(x+pos[0]+ch[0], y+pos[1]+ch[1]).classList.add(cls!==undefined?cls:'now');
            }
    pos = [pos[0]+ch[0], pos[1]+ch[1]];
}
var deDraw = function(){ if(document.querySelectorAll('.now').length>0) deDraw(document.querySelector('.now').classList.remove('now')); }
var check = function(){
	for(var i=0; i<20; i++)
		if(document.querySelectorAll('[data-y="'+i+'"] .brick.on').length == 10) 
			return check(roll(i), document.querySelector('#result').innerHTML=Math.floor(document.querySelector('#result').innerHTML)+10);
};
var roll = function(ln){ if(false !== (document.querySelector('[data-y="'+ln+'"]').innerHTML = document.querySelector('[data-y="'+(ln-1)+'"]').innerHTML) && ln>1) roll(ln-1); };

//on keydown move as the arrows define
window.addEventListener('keydown', kdf = function(e){
    if(e.keyCode==38&&false!==(now[1]=((prv=now[1])+1)%fs.split('*')[now[0]].split(':').length) && false===draw([0,0], undefined, deDraw())) draw([0,0],undefined, deDraw(), now=[now[0],prv]);
    if((e.keyCode==39||e.keyCode==37)&&false===draw([e.keyCode==39?1:-1,0],undefined,deDraw())) draw([0,0],undefined,deDraw());
    if(e.keyCode == 40)
        if(false === draw([0,1], undefined, deDraw())) {
            if(draw([0,0], 'on', deDraw())||true) check();
            //return the result and with regex /\d+/ get the result
			if(false === draw([0,0], undefined, now = [Math.floor(Math.random()*fs.split('*').length),0], pos = [4,0])) { 
				toV=-1; 
				//var myName = <?php echo $myName; ?>;
				alert('Score: '+document.querySelector('#result').innerHTML); 
				
				var r = /\d+/;
				var num = (('Score: '+document.querySelector('#result').innerHTML).match(r));				
				$("#formRes").append('<input type="hidden" name="theScore" id="formScore" value="'+num+'"/>');
				document.getElementById("formRes").style.display = "block";
			}
        }
});

toF = function() {
    kdf({keyCode:40});
    setTimeout(function(){if(toV>=0)toF();}, toV=toV>0?toV-0.5:toV);
}
toF(toV = 500);
</script>
<br>
<form id="formRes" style="display:none;">
    <!--input type="submit" class="btn btn-primary" value="Submit score"/-->
	<input type="hidden" name="theUser" id="formUser" value="<?php echo $myName; ?>"/>
	<button type="submit" id="mybtn" class="btn btn-primary">Submit score</button>
</form>
<form action="logout.php" method="post">
    <input type="submit" class="btn btn-primary" value="I'm done playing"/>
</form>
<div id="response"></div>
<script>
$(function() {
	$("#mybtn").on('click', function(e) {
		e.preventDefault();
		var theUser=$("input[name=theUser]").val();
		var theScore=$("input[name=theScore]").val();

		$.post(
			"./ajax_score.php",
			{theUser:theUser, theScore:theScore},
			function(data){
				$("#response").html(data);
				//alert(data);
			});
	});
});	
</script>
</body>
</html>