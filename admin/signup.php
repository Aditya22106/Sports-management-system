<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="../images/verve.jpg" type="image/x-icon">
    <link rel="stylesheet" media="screen" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<title>Student Sign Up</title>
    <style>
		body {
			background-color: #000000;
		}
		
		a1 img{
			max-width: 50%;
			position: relative; 
		}

		h1 {
			font-size: 28px;
			color: #09ff00;
			text-align: center;
			margin-top: 50px;
		}

		form {
			width: 300px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			margin-top: 30px;
		}

		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
        }
        input#email {
            width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
            font-size: 16px;
        }

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			font-size: 16px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			padding: 12px 20px;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		.error {
			color: red;
			font-size: 14px;
			text-align: center;
			margin-top: 10px;
		}
		.a1 img{
			align-content: center;
			padding-left: 42%;
		}
        </style>
<body>
	<div class="a1">
		<a href="login.php">
			<img src="../images/verve.jpg" >
		</a>
		<h1>Verve login</h1>
	</div>

	<main>
		<section id="signup">
			<h2>Student Sign Up</h2>
			<form action="register.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
<br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>

				<label for="confirm_password">Confirm Password:</label>
				<input type="password" id="confirm_password" name="confirm_password" required>

                <input type="submit" value="Sign Up">
                
                <p>Already have an account? <a href="login.php">Log in here</a></p>
			</form>

			
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Sports Event Management System</p>
	</footer>
</body>
</html>
