<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ma page d'accueil</title>
	<style>
	    body {
	    margin: 0 ;
	    }
	    #header {
		  background-image: url(https://unsplash.it/1227/300);
		  background-repeat: no-repeat;
		  height: 20em;
		  background-position: center center;
		  background-size: cover;
		  /*margin-bottom: 2em; */
		  text-align: center;
		  margin:0;
		}
	   
	   #flex {
	   	display :flex;
	  justify-content: space-around;
	  padding-bottom: 5em;
	  padding-top: 4em;
	   }
	   h1 {
			padding-top: 2.7em;
			margin-top: 0;
	   }
	   hr {
	   	color : orange;
	   	width: 80%;

	   }
	   footer {
	   	text-align: center;
	   	margin : 2em;
	   }
	   a {
	   	color : red;
	   	font-size: 1.5em;
	   
	   }
	   input {
	   	padding-top: 2em;
	   	margin-top: 3em;
	   	margin : 3em;
	   }
		span{
			padding-top: 10em;
		}
	</style>
</head>
<body>
	<div id="header">
		<h1>ImageBox Mg!</h1>
		<h3>Nos images sont super géniales...youOuuuuh</h3>
	</div>
	<div id="flex">
		<div>
			<p>
				Just resizing the choose image here after the url above and you will get want you want.
				Enjoy! <br>
			</p>
			<a href="#">http://imagebox.mg/200/300</a> <br>
			<span>Thanks to use imageBox. The better patner ever</span> <br>
			<a href="#">http://imagebox.mg</a>
			<div>
				<input type="number" placeholder="Enter Width">		
				<input type="number" placeholder="Enter Height">
			</div>
		</div>
		<div>
			<img src="{{URL::asset('mesImages/photo2-32.jpeg')}}" alt="paysage">
		</div>
	</div>
		
	<hr>
	<footer >
		@Created By <strong>Christelle TSAGUE</strong> & <strong>Ru TAN</strong>, Simplon.co
	</footer>	
</body>
</html>