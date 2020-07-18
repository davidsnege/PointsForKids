<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<form action="add_user.php" method="post">
		<div class="form-group">
	    <label for="exampleFormControlSelect1">Role</label>
	    <select class="form-control" id="role" name="role">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	      <option>5</option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Nome</label>
	    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Email address</label>
	    <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	  </div>

		<div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

		<div class="form-group">
	    <label for="exampleInputPassword1">Default Confiance Points</label>
	    <input type="text"  name="confiance_points" class="form-control" id="exampleInputPassword1" placeholder="0.005" value="0.005">
    </div>

		<div class="form-group">
	    <input type="hidden" name="points" class="form-control" id="points" placeholder="0" value="0">
    </div>

		<button type="submit" class="btn btn-primary btn-sm">Confirm Create</button>

	</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
