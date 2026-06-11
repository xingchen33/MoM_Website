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

		<!-- favicon link -->
		<link rel="icon" type="image/favicon" href="img/favicon.ico">

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

			.desc {
				color: grey;
			}

			.webdesc {
				color: grey;
			}


		</style>
	</head>

	<body>

		<?php include "nav.php";?>

		<div id="teamCover">
			<h1>Meet the Team</h1>
			<p>
				See who the faculty advisor, research team, and website developers
				who helped bring this project to life.
			</p>
		</div>

		<main>

			<section class="section" id="faculty">
				<h2>Santa Clara University Faculty Advisor</h2>

				<ul class="teamList">
					<li>
						<a href="mailto:nshaghaghi@scu.edu" target="_blank">Navid Shaghaghi<span class="desc">  -  nshaghaghi.scu.edu</span></a>
					</li>
					<!-- https://www.linkedin.com/in/nshaghaghi/ -->
				</ul>
			</section>

			<section class="section" id="research">
				<h2>Research Team</h2>

				<ul class="teamList">
					<li><a href="mailto:hlyons@scu.edu">Heather Lyons<span class="desc">  -  hlyons@scu.edu</span></a></li>

					<li><a href="mailto:edgar.garcia@upb.edu.co">Edgar Garcia<span class="desc">  -  edgar.garcia@upb.edu.co</span></a></li>

					<li><a href="mailto:isabel.zuluagagonzalez@alumni.scu.edu">Isabel Zuluaga Gonzalez<span class="desc"> - isabel.zuluagagonzalez@alumni.scu.edu</span></a></li>

					<li><a href="mailto:slee7@scu.edu">Samantha Lee<span class="desc">  -  slee7@scu.edu</span></a></li>

					<li><a href="mailto:kalyaninitin.shinde@alumni.scu.edu">Kalyani Shinde<span class="desc">  -  kalyaninitin.shinde@alumni.scu.edu</span></a></li>	

					<li><a href="mailto:sanchez.jazmin.js@gmail.com">Jazmin Sanchez<span class="desc">  - sanchez.jazmin.js@gmail.com</span></a></li>	

					<li><a href="mailto:roberto.hincapie@upb.edu.co">Roberto Hincapie<span class="desc">  - roberto.hincapie@upb.edu.co</span></a></li>



				</ul>
			</section>

			<section class="section split3" id="developers">
				<h2>Website Developers</h2>

				<div class="containerOuter">

					<div class="container">
						<h3>Yue Yu</h3>
						<hr/>
						<h4 class="webdesc">yyu7@scu.edu</h4>

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
						<hr/>
						<h4 class="webdesc">cramirezborrego@scu.edu</h4>

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
						<hr/>
						<h4 class="webdesc">ewhitehead@scu.edu</h4>

						<div class="socialLinks">
							<a href="https://www.linkedin.com/in/emmet-whitehead-b1182a183/" target="_blank">
								<img src="img/linkedin_logo.png" alt="LinkedIn icon"/>
							</a>

							<a href="https://github.com/ewhitehead1" target="_blank">
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
