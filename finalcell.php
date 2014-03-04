<html>
<?php
session_start();
$a=0;
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET x='1'";
if(mysqli_query($con,$sql));
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET y='4'";                                         //change this posn
if(mysqli_query($con,$sql));
if(isset($_POST["sub"])){
if($_POST["ans"]=="alfred hitchcock"){
$a=1;
}}
?>
<style>
body{
background-color:black;
background-image:url(fcell.jpg);
background-size:100% 100%;
background-repeat:no-repeat;
}
img#w{
margin-top:-40%;
}
img#f{
margin-top:-40%;
opacity:0.5;
}
p{
position:absolute;
font-family:chiller,Helvetica,Ariel,sans-seriff;
left:40%;
z-index:100;
color:red;
font-size:25px;
font-weight:15px;
}
img{
z-index:-10;
}
#back{
background-color:#3B240B;
color:#F7D358;
font-family:chiller,Helvetica,Ariel,sans-seriff;
font-size:30px;
font-weight:20px;
width:100px;
height:40px;
border:0;
position:absolute;
top:2%;
}
h3{
position:relative;
font-family:chiller,Helvetica,Ariel,sans-seriff;
font-size:35px;
text-align:left;
padding-left:20%;
top:-150%;
color:red;
width:30%;
}
#fintext
{margin-top:35%;
 margin-left:38%;
 height:62px;
 width:500px;
 font-size:50px;
background-color:#3B240B;
color:#F7D358;
text-shadow:5px 5px 3px 1px black;
}

input{
border-radius:5px;
}
</style>
<body>


<div>
<img id="w" src="wood.jpg" alt="wood" width="100%" height="25%">
<img id="f" src="frame.jpg" alt="frame" width="100%" height="25%">
</div>

<h3 id="msg"></h3>
<form name="form1" action="finalcell.php" method="post">
<input type="text" id="fintext" type="submit" value="Passkey" name="ans">
</form>
<form name="form2" action="fmaze2.php" method="post">
<input id="back" type="submit" value="back" name="back">
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript">
var w="<?php echo $a; ?>"; 

        var ind=0,ctr=0,s,q;
        



				 var imageone = new Image();
				 var show=function(t,m,ind,i){
if(ind<m.length){
$(t).append(m[ind++]);
ctr=1;
}
else{if(i==0){
clearInterval(s);}
else{
clearInterval(q);}}
}



});



document.getElementById("msg").innerHTML="";

});

</script>
</body>
</html>
