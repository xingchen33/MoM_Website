<!DOCTYPE html>
<html>
	<head>
		<title>Meet the Team</title>
		<link rel="icon" type="image/png" href="img/icon.png"/>

		<link rel="stylesheet" href="css/base.css"/>
		<link rel="stylesheet" href="css/home.css"/>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

		<style>
			#teamCover {
				background-image: linear-gradient(to bottom, orange, #A32035);
				padding-left: 8rem;
				padding-right: 8rem;
				padding-top: 3rem;
				padding-bottom: 3rem;
				margin-bottom: 0;
			}

			#teamCover h1 {
				color: white;
				margin-bottom: 1rem;
			}

			#teamCover p {
				color: white;
				max-width: 50rem;
			}

			#faculty {
				background-color: white;
				margin-top: 0;
			}

			#faculty h2,
			#research h2 {
				color: var(--scu-red);
			}

			.teamList {
				list-style-type: none;
				padding-left: 0;
			}

			.teamList li {
				background-color: var(--bg-light);
				border-left: 5px solid var(--scu-red);
				padding: 1rem;
				margin-bottom: 1rem;
				border-radius: 5px;
			}

			.teamList a {
				color: var(--scu-red);
				text-decoration: none;
				font-weight: 700;
			}

			.teamList a:hover {
				text-decoration: underline;
			}

			#research {
				background-color: var(--bg-light);
				margin-top: 0;
			}

			#developers {
				background-color: var(--scu-red);
				margin-top: 0;
			}

			#developers h2 {
				color: white;
			}

			#developers .container {
				background-color: white;
				border-top: 5px solid orange;
				border-radius: 8px;
				padding: 2rem 1rem;
				box-sizing: border-box;
			}

			#developers .container h3 {
				color: var(--scu-red);
				margin-top: 0;
			}

			.socialLinks {
				display: flex;
				justify-content: center;
				gap: 1rem;
				margin-top: 1rem;
			}

			.socialLinks img {
				height: 30px;
				width: auto;
				vertical-align: middle;
			}

			.socialLinks a {
				text-decoration: none;
			}
		</style>
	</head>

	<body>

		<?php include "nav.php";?>

		<div id="teamCover">
			<h1>Meet the Team</h1>
			<p>
				Learn more about the faculty advisor, research team, and website developers
				who helped create this project.
			</p>
		</div>

		<main>

			<section class="section" id="faculty">
				<h2>Santa Clara University Faculty Advisor</h2>

				<ul class="teamList">
					<li>
						<a href="mailto:nshaghaghi@scu.edu" target="_blank">Navid Shaghaghi</a>
					</li>
					<!-- https://www.linkedin.com/in/nshaghaghi/ -->
				</ul>
			</section>

			<section class="section" id="research">
				<h2>Research Team</h2>

				<ul class="teamList">
					<li><a href="">Heather Lyons</a></li>
					<li><a href="">Edgar Garcia</a></li>
					<li><a href="">Isabel Zuluaga Gonzalez</a></li>
					<li><a href="">Samantha Lee</a></li>
				</ul>
			</section>

			<section class="section split3" id="developers">
				<h2>Website Developers</h2>

				<div class="containerOuter">

					<div class="container">
						<h3>Yue Yu</h3>

						<div class="socialLinks">
							<a href="https://www.linkedin.com/in/yyu05/" target="_blank">
								<img src="img/linkedin_logo.png" alt="LinkedIn icon"/>
							</a>

							<a href="https://github.com/xingchen33" target="_blank">
								<img src="img/github_logo.png" alt="GitHub icon"/>
							</a>

							<a href="mailto:yyu7@scu.edu">
								<img src="img/email_icon.png" alt="Email icon"/>
							</a>
						</div>
					</div>

					<div class="container">
						<h3>Cuitlahuac Ramirez</h3>

						<div class="socialLinks">
							<a href="https://www.linkedin.com/in/cuit/" target="_blank">
								<img src="img/linkedin_logo.png" alt="LinkedIn icon"/>
							</a>

							<a href="https://github.com/cramirez3182" target="_blank">
								<img src="img/github_logo.png" alt="GitHub icon"/>
							</a>

							<a href="mailto:cramirezborrego@scu.edu">
								<img src="img/email_icon.png" alt="Email icon"/>
							</a>
						</div>
					</div>

					<div class="container">
						<h3>Emmet Whitehead</h3>

						<div class="socialLinks">
							<a href="https://www.linkedin.com/in/emmet-whitehead-b1182a183/" target="_blank">
								<img src="img/linkedin_logo.png" alt="LinkedIn icon"/>
							</a>

							<a href="https://github.com/ewhitehead1">
								<img src="img/github_logo.png" alt="GitHub icon"/>
							</a>

							<a href="mailto:ewhitehead@scu.edu">
								<img src="img/email_icon.png" alt="Email icon"/>
							</a>
						</div>
					</div>

				</div>
			</section>

		</main>

		<?php include "footer.php";?>

	</body>
</html>