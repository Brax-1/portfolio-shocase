<!DOCTYPE html>
<html>
<head>
	<title>Add Review</title>
	<link rel="stylesheet" type="text/css" href="../css/skilladd.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<a href="portfolio.php" ><img src="../images/previous.png" class="back" alt=""></a>


	<img class="wave" src="../images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../images/bg.svg">
		</div>
		<div class="login-content">
			<form action = 'savedata.php' method='POST'>
				<img src="../images/skills.png">
				<h2 class="title">Pls Review</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-chess-rook"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Stars</h5>
           		   		<input type="text" class="input" name= 'star' id='star' required>
           		   </div>
				   </div>
				   <div class="input-div one">
					<div class="i">
							<i class="fa fa-list-ul"></i>
					</div>
					<div class="div">
							<h5>Description</h5>
							<input type="text" class="input" name= 'desc' id='desc' required>
					</div>
				 </div>
				 <div class="input-div one">
					<div class="i">
							<i class="far fa-address-book"></i>
					</div>
					<div class="div">
							<h5>Kind Name</h5>
							<input type="text" class="input" name= 'name' id='name' required>
					</div>
				 </div>
           		
            	<input type="submit" class="btn" value="Add">
            </form>
        </div>
    </div>
	<script type="text/javascript" src="../javascripts/skilladd.js"></script>
	
</body>
</html>
