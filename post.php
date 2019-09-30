<?php include "menu.php"; ?>
	<h2>Post</h2>
	<p>
		This is the Post.
		<form class="" action="show_post.php" method="post">
			<label for="en">Etunimi</label> <br>
			<input type="text" id="en" name="en" value="" placeholder="etunimi"> <br>
			<label for="sn">Sukunimi</label> <br>
			<input type="text" id="sn" name="sn" value=""placeholder="sukunimi"> <br>
			<br>
			<select class="" name="kieli">
				<option value="1">Suomi</option>
				<option value="2">Ruotsi</option>
				<option value="3">Norja</option>
			</select>
			<br>
			<br>
			<textarea name="name" rows="8" cols="80"></textarea>
			<br>
			<br>
			<input type="radio" name="gender" value="male"> Male <br>
			<input type="radio" name="gender" value="Female"> Female <br>
			<input type="radio" name="gender" value="Other"> Other <br>
			<br>
			<input type="checkbox" name="vehicle1" value="bike"> I have a bike <br>
			<input type="checkbox" name="vehicle2" value="car"> I have a car <br>
			<input type="checkbox" name="vehicle3" value="boat"> I have a boat <br>
			<br>
			<input type="date" name="pvm" value="">
			<br>
			<label for="">syntymävuosi</label><br>
			<input type="text" name="" value="">
			<input type="submit" name="" value="save">
		</form>
	</p>
<?php include "footer.php"; ?>
