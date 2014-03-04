<html>
<?php
session_start();
$a=0;
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET x='1'";
if(mysqli_query($con,$sql));
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET y='4'";
if(mysqli_query($con,$sql));
if(isset($_POST["sub"])){
if($_POST["ans"]=="fenrir greyback"){
$a=1;
}}
?>
<style>

img#w{
margin-top:-40%;
}
img#f{
margin-top:-40%;
opacity:0.5;
}

img{
z-index:-10;
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

#clue
{font-weight:900;
 font-size:50px;
 font-color:red;
 background-position:right bottom;
 background-image:url(halloween1.jpg);
 background-repeat:no-repeat;
 background-color:red;
 height:60%;
 width:60%;
 position:relative;
 left:30%;
 top:-80%;
 visibility:hidden;
 
}
input{
border-radius:5px;
}
#vill
{height:600px;
 width:400px;
 position:relative;
 top:150px;
 left:800px;
}
</style>
<body>


<h3 id="msg"></h3>
<img id="vill" src="villain.jpg" alt="villain"/>

<script src="jquery.js">
</script>
<script type="text/javascript">

var ind=0;     
				 var show=function(t,m,ind,i){
if(ind<m.length){
$(t).append(m[ind++]);

}
var aa=setInterval(function(){show("#msg","A werewolf, also known as a lycanthrope, is a mythological human with the ability to shapeshift into a wolf-like creature",ind++,0)},90);


</script>
</body>
</html>
