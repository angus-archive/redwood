<nav class="navbar navbar-expand-lg navbar-light bg-light" id="loginNav">
	<div class="container">
		<a class="navbar-brand" href="/login/home.php"><img src="/resources/coreImages/LogoEmploy.svg" alt="Redwood logo" style="width: 200px; height: 40px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#redwoodLoginNav" aria-controls="redwoodLoginNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="redwoodLoginNav">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item <?php if($NAV_PAGE == "Home"){echo "active";}?>">
					<a class="nav-link" href="/login/home.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?php if($NAV_PAGE == "Info"){echo "active";}?>">
					<a class="nav-link" href="/login/info.php">Info</a>
				</li>
				<li class="nav-item <?php if($NAV_PAGE == "Profile"){echo "active";}?>">
					<a class="nav-link" href="/login/profile.php">Profile</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="/login/logout.php" class="btn redwoodBackground redwoodHover text-light">Logout</a>
			</form>
		</div>
	</div>
</nav>
