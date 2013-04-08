<?php 
ob_start();
$pageTitle = 'Form Submit';
include 'inc/header.php'; ?>

<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
		<?php
			if (isset($_GET["form"])) {
				$form = $_GET["form"];
				if (file_exists("form_handle/".$form.".php")) {
					include 'form_handle/'.$form.".php";
				} else {
					echo 'Seems like something went wrong.';
				}
			}
			else {
				echo 'Seems like something went wrong.';
			}
		?>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
