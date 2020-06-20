<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/auth_redirect.php";include_once($path); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Head tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path); ?>
</head>

<body>
<div id="page-content">
	<div id="content-wrap">
		<!-- Header-->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/login_header.php";include_once($path); ?>

		<!-- Spacer-->
		<div class="mSpacer-y-40"></div>

		<div class="container">
			<h2 class="mb-4 text-center"> Redwood Info</h2>
			<table class="table">
				<tbody>
				<tr>
					<th scope="row">Redwood Red Colour</th>
					<td><span style="color: #BB3C5B">#BB3C5B</span></td>
				</tr>
				<tr>
					<th scope="row">Redwood Dark Grey Colour</th>
					<td><span style="color: #575757">#575757</span></td>
				</tr>
				<tr>
					<th scope="row">Redwood Light Grey Colour</th>
					<td><span style="color: #BABABA">#BABABA</span></td>
				</tr>
				</tbody>
			</table>
		</div>


		<!-- Spacer-->
		<div class="pSpacer-y-40"></div>

	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>


