<!DOCTYPE html>
<html>
<head>
	<title>Face Recognition System</title>
    <link rel="icon" href="../mario.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="csjs/app.js" defer></script>
	<link href="csjs/app.css" rel="stylesheet">
	<link href="csjs/home.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md nanv-light shadow-sm" style="background-color: #D9DDDC;">
			<div class="container">
				<p class="navbar-brand" style="padding-top: 10px; font-size: 25px">
					Face Recognition System
				</p>
                <p class="navbar-brand" style="padding-top: 10px; font-size: 25px">
                    <a href="index.html">Real Time Face Detection</a>
                </p>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="display: none">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

					<ul class="navbar-nav ml-auto">
						<?php
			                session_start();
			                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
			            ?>
			            	<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 25px" v-pre>
                                    Home
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="logout.php"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="font-size: 20px">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="../Acoount/logout.php" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        <?php
                    		}else{
                        ?>
                        	<li class="nav-item" style="font-size: 25px">
                                <a class="nav-link" href="../Acoount/login.php">Login</a>
                            </li>
                        <?php
			                }
			            ?>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Face Recognition System
                </div>

                <div class="links">
                    <a href="https://github.com/laravel/laravel">GitHub Source Code</a>
                </div>
            </div>
    </div>

</body>
</html>