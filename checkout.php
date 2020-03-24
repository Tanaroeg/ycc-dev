<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm Order</title>
<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
  <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="https://kit.fontawesome.com/95b7c25d21.js" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
  </head>
  <body class="sub-page" bgcolor="#fff">
	  <nav class="sticky-top">
	 <div class="g-nav">
	  	<ul>
			<li><span class="nav-toggle" onClick="navToggle()"><i class="fas fa-bars"></i></span></li>
			<div id="main-nav" class="main-menu">
				<li><a href="Macbook.html">Macbook</a></li>
				<li><a href="Surface.html">Surface</a></li>
				<li><a href="Swift.html">Swift</a></li>
				<li><a href="XPS.html">XPS</a></li>
				<li><a href="ZenBook.html">ZenBook</a></li>
			</div>
		</ul>
	 </div>
	</nav>
	<a href="index.html" class="ml-5 fix-resp2">&#x227A; Back</a>
	<div class="container">
		<h2 class="mt-lg-5 mt-sm-1 mx-auto text-center">Checkout</h2>
		<div class="col-lg-6 bg-light p-3 mx-auto">
			<div class="row mx-auto">
				<div class="col-6">
					<center><img src="img/<?php echo $_POST["image"]; ?>" width="90%" alt=""></center>
				</div>
				<div class="col-6 my-auto">
					<p><strong><?php echo $_POST["brand"]; ?></strong></p>
					<p>Storage : <?php echo $_POST["radios"]; ?></p>
					<p>Price : <?php echo $_POST["price"]; ?> Baht</p>
				</div>
			</div>
		</div>
		<div class="col-10 mx-auto mt-4">
		<div class="card border-0">
		<div class="card-header bg-dark text-white border-0">Your information.</div>
		<div class="card-body bg-light p-4">
			<form action="success.html" method="post" class="needs-validation" novalidate>
			<div class="form-row">
			<div class="col-md-12 mb-3">
			  <label>Name :</label>
			  <input type="text" class="form-control" placeholder="Name Surname" name="name" required>
			  <div class="invalid-feedback">
				Please insert your name.
			  </div>
			</div>
			<div class="col-md-12 mb-3">
			  <label>Address :</label>
			  <textarea class="form-control" placeholder="Your address" name="address" required></textarea>
			  <div class="invalid-feedback">
				Please insert your address.
			  </div>
			</div>
			<div class="col-md-6 mb-3">
			  <label>Telephone :</label>
			  <input type="text" class="form-control" placeholder="0812345678" name="s_tel1" maxlength="10" required>
			  <div class="invalid-feedback">
				Please insert your phone number.
			  </div>
			</div>
			  <div class="col-12 form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
				  <label class="form-check-label" for="invalidCheck">
					I agree to the terms and conditions
				  </label>
				</div>
			  </div>
			  <input class="btn btn-primary" type="submit" value="Check out">
			</div>
			</form>
		</div>
		</div>
		</div>
		</div>
		<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>

	</div>
	 		<footer class="mx-auto ">
			The content, information, opinions, and viewpoints contained in these educational materials are those of the authors or contributors of such materials. While the American Society of Transplantation (AST) and its committees take great care to screen the credentials of the contributors and make every attempt to review the contents, AST MAKES NO WARRANTY, EXPRESSED OR IMPLIED, as to the completeness or accuracy of the content contained in the educational materials or on this website. The reader of these materials uses these materials at his or her own risk, and AST shall not be responsible for any errors, omissions, or inaccuracies in these materials, whether arising through negligence, oversight, or otherwise. Reliance on any information appearing on this site is strictly at your own risk.
		</footer>
	</div>
  </body>
</html>