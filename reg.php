<!DOCTYPE html>
<html lang="ru">
  <head>
		<meta charset="utf-8">
		<title>Registration</title>
	<link rel="stylesheet" href="assets/css/style1.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
	
		
  </head>
  <body>
	<article>
		<h1>Registration</h1>
		<form  method="post" action="/" class="subform">
			<p>
				<label for="name">Your name</label>
				<input type="text" name="name" id="name">
			</p>
			<p>
				<label for="email">Your email</label>
				<input type="email" name="email" id="email">
			</p>
			<p>Your experience:
				<label>
					<input type="radio" name="skill" value="1">
					JavaScript
				</label>
				<label>
					<input type="radio" name="skill" value="2">
					HTML & CSS
				</label>
				<label>
					<input type="radio" name="skill" value="3">
					PHP
				</label>
			</p>
			<p>
				<label for="goal">Goals:</label>
				<select name="goal" id="goal">
					<option>Change the job.</option>
					<option>Improve my skill</option>
					<option>Hobby interest</option>
					<option>Freelancer job</option>
				</select>
			</p>
			<p>
				<label for="comments">Yoir feedback:</label>
				<textarea  name="comments" cols="40" rows="5" id="comments">
				</textarea>
			</p>
			<p>
				<input type="submit" value="Send">
			</p>
					
			

		</form>
	</article>

   </body>
</html>