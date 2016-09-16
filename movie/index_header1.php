<header class="site-header">
				<div class="container">
					<a href="index1.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">SRKR's Movie Rating</h1>
							<small class="site-description">Rate your faviorate movie</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index1.php">Home</a></li>
							
							<li class="menu-item"><a href="review1.php">Movie reviews</a></li>
							<li class="menu-item"><a href="Profile.php"> <?php 
								if (session_status() == PHP_SESSION_NONE) {
									session_start();
								}
						echo $_SESSION['uname']; ?> </a></li>
					
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							<li class="menu-item"><a href="contact1.php">Contact</a></li>
							<li class="menu-item"><a href="about1.php">About</a></li>
						</ul> <!-- .menu -->

					<!--	<form  class="search-form" name='search' action="" methord='post'>
							<input type="text" name='search'  placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form> -->
					
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>