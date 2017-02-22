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
	   }
	   hr {
	   	color : orange;
	   	width: 80%;

	   }
	   footer {
	   	text-align: center;
	   	margin : 2em;
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
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
				Ab veniam harum beatae doloremque ea numquam reprehenderit, <br>
				fuga ad adipisci eum illum officiis, quidem, doloribus pariatur <br> nesciunt aspernatur voluptates. Tenetur, itaque.
			</p>
			<input type="text"> <br>
			Adresse <br>
			<input type="text">
		</div>
		<div>
			<img src="{{URL::asset('mesImages/photo2-32.jpeg')}}" alt="paysage">
		</div>
	</div>
	<hr>
	<footer >
		@Created By <strong>Christelle tsague</strong> & <strong>Ru TAN</strong>, Simplon.co
	</footer>	
</body>
</html>