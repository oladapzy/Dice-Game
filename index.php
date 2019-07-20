<?php
session_start();

$now = time();

if ($_SESSION['click'] > ($now-1)) { 
    
	echo "You're clicking too fast"; 
	exit() ; 
}

$_SESSION['click'] = $now;

if(isset($_POST['submit'])){
	
	$rand1 = rand(0,0);
	$rand2 = rand(0,1);
	$high1 = 1;
	$high2 = 0;
	
	if($rand1.":".$rand2 == $high1.":".$high2 or $rand1.":".$rand2 == $high2.":".$high1 ){
	  
	  $result1 ="You can do better than that!!!";
}

	$rand1 = rand(0,6);
	$rand2 = rand(0,6);
	$high1 = 6;
	$high2 = 6;
	
	
	if($rand1.":".$rand2 == $high1.":".$high2){
	  
	  $result1 ="Good job , you hit the highest dice roll!!!";
	}
	
}	


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
	<title>Dice Game</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
    <style>
          body{
			
                background-color : #F7F7F7;
	        height : 100%
			
		}
	    .container{
			background-color : black;
			border : 1px solid black;
			border-radius : 5px;
		}
	    
	   .align{
			width : 100px;
			height :60px;
			padding-left : 30px;
			border-radius : 5px;
			border-color : blue;
		
		}
		
	  .center{
			
			text-align : center;
		}
		
		.output{
			
			
			font-family : san-serif;
			font-weight : bold;
		}
	    .button{
			
			border : 2px solid grey;
			width : 150px;
			height :60px;
			color : blue;
			border-radius : 5px;
			font-family : san-serif;
			font-size : 30px;
			font-weight : bold;
			
		}
		
		img{
			border-radius : 10px;
		}
		
		
		textarea{
			
			resize : none;
		}
		
		H2,H4{	
			font-family : Georgia, serif;
			color : #3AAFD6;
			font-weight: bold;
		}
		
	</style>
	<body>
	<!-------------------------->
	 <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dapzzy</a>
    </div>
  </div><!-- /.container-fluid -->
</nav>
<!-------------------------------------->
	 <div class = "container">
	    <div class = "row center">
		    <div class = "col-md-6 col-md-offset-3">
				<H2> DICE ROLLING GAME</H2>
	                <H4>ROLL AS LONG AS YOU WANT</H4>    
		   
		            <div class = "img">
		      
			            <img src="27.jpg" alt="dice" width="300" height="200">
	
			       
			
			    <form action = "index.php" method = "POST">

					<div class="form-group output">  
				        <h3>
						
						    <input type = "text"  class = 'align'value = "<?PHP echo $rand1.":".$rand2;?>"   disabled>
						
						</h3><br>
				    </div>
					 
					<div class="form-group float">
				        <input type = "submit" class = 'button' name = "submit" value = "Roll Dice"><br><br>
		            </div>
						
					    <div class = "form-group" >  
				     <h4><?PHP echo $result1 ;?></h4>
				        </div>	
			    </form>
				
				 </div>
			
			</div>
		</div>
	   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script = 'javascript'>
	
	
	
	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>





