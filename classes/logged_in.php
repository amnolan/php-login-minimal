<div class="container">
<?php include 'header.php'; ?>
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
	<div class="row">
		<div class="col-sm-12">
			<h3>
				Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
				Try to close this browser tab and open it again. Still logged in!
			</h3>
		</div>
	</div>

	<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
	<div class="row">
	    <div class="col-sm-offset-2 col-sm-10">
	        <a href="index.php?logout"><h4>Logout</h4></a></a>
	    </div>
	</div>
<?php include 'footer.php'; ?>
</div>
