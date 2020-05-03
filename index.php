<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2 class="pb-4 pt-3">Fact-Checking Tool</h2>

	<?php 
	if (isset($_GET['search'])) {
		include("includes/search.php");
	} else {
		echo '

	<form class="" method="GET">
		<div class="input-group">
			<input class="form-control" type="text" name="search" placeholder="Paste a URL or type a question..."></input>
		</div>
		<div class="input-group p-3 ">
			<button type="submit" class="btn btn-primary mx-auto">Submit</button>
		</div>
	</form>
	';
	}
	?>

</div>

<br />
<br />
<br />

<?php include("includes/footer.php");?>

</body>
</html>