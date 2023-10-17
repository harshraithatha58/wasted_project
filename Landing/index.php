<?php
include '../_conn.php';
if(!isset($_SESSION['loggedin']) == true){
	header("Location: ../signin.php");
	exit;
}
?> 
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">


	<title>Sterial &mdash; Free Bootstrap 5 Website Template by Untree.co </title>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav mt-3">
		<div class="container">

			<div class="site-navigation">
				<div class="row">
					<div class="col-6 col-lg-3">
						<a href="index.php" class="logo m-0 float-start">Sterial</a>
					</div>
					<div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
						<ul class="js-clone-nav  text-center site-menu p-0 m-0">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="#about">About us</a></li>
							<li class="active"><a href="#services">Services</a></li>
							<li class="active"><a href="#testimonials">Testimonials</a></li>
						</ul>
					</div>
					<div class="col-6 col-lg-3 text-lg-end">
						<ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
							<li class="cta-button"><a href="contact.html">Contact Us</a></li>
						</ul>

						<a href="#"
							class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
							data-toggle="collapse" data-target="#main-navbar">
							<span></span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</nav>



	<div class="hero overlay">

		<div class="img-bg rellax">
			<img src="images/hero_1.jpg" alt="Image" class="img-fluid">
		</div>

		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-5">
					<h1 class="heading" data-aos="fade-up">XYZ crafted by CZMGC </h1>
				</div>
			</div>
		</div>
	</div>


	<div class="section section-2">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
					<div class="image-stack mb-5 mb-lg-0">
						<div class="image-stack__item image-stack__item--bottom" data-aos="fade-up">
							<img src="https:/source.unsplash.com/180x240/?company" alt="Image"
								class="img-fluid rellax ">
						</div>
						<div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="90"
							data-rellax-percentage="0.5">
							<img src="https:/source.unsplash.com/300x400/?employee" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="col-lg-4 order-lg-1" id="about">

					<div>
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">About Us</h2>

						<p data-aos="fade-up" data-aos-delay="200">At [Your Recruitment Company Name], our story is one
							of passion, dedication, and a desire to redefine the recruitment landscape. Established in
							[year], we set out to bridge the gap between talent and businesses, understanding the
							pivotal role that the right people play in the success of an organization.</p>

						<p data-aos="fade-up" data-aos-delay="300">Over the years, we've evolved and grown, adapting to
							the changing dynamics of industries we serve. We've learned, innovated, and continuously
							improved our strategies to deliver top-tier talent solutions.</p>


					</div>
				</div>

			</div>

		</div>
	</div>
	<br><br><br>

	<div class="section service-section-1" id="services">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 mb-4 mb-lg-0">
					<div class="heading-content" data-aos="fade-up">
						<h2>Our <span class="d-block">Services</span></h2>
						<p>We offer youth with chances for career development in their practice. We also support a wide
							range of services to ensure client satisfaction.</p>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
							<div class="service-1">
								<span class="icon">
									<img src="../assets/img/icons/text.png" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Better Recruitment</h3>
									<p>Financial planning, forecasting and adjusting rapidly with
										customer demands and budgets.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
							<div class="service-1">
								<span class="icon">
									<img src="../assets/img/icons/organized.png" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Vast Opportunities</h3>
									<p>Latest technology and experienced guidance, trained HR specialists
										to keep updated.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
							<div class="service-1">
								<span class="icon">
									<img src="../assets/img/icons/statistics.png" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Analytical Statistics</h3>
									<p>Messages, real-time reminders, memos, and many more will keep your
										team in sync.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
	</div>


	<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<div class="row align-items-center justify-content-between  mb-5">
				<div class="col-lg-5" data-aos="fade-up">
					<h2 class="heading mb-3">Explore Hundred of Companies</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
						a large language ocean.</p>
				</div>
				<div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
					<div id="destination-controls">
						<span class="prev me-3" data-controls="prev">
							<span class="icon-chevron-left"></span>

						</span>
						<span class="next" data-controls="next">
							<span class="icon-chevron-right"></span>

						</span>
					</div>
				</div>
			</div>

		</div>

		<div class="destination-slider-wrap" >
			<div class="destination-slider">
				<div class="destination">
					<div class="thumb">
						<img src="https://static.vecteezy.com/system/resources/previews/020/336/451/non_2x/infosys-logo-infosys-icon-free-free-vector.jpg"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="https://th-i.thgim.com/public/incoming/yx5eem/article65529724.ece/alternates/FREE_1200/tcs.jpg"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTljt4z5gcFwsbNUpu4RLrMOl9mLS1PHfhS1r6gboH7JfpgbEaBMewkTN2FPJ5WSseqBZY&usqp=CAU">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="https://static.vecteezy.com/system/resources/previews/020/336/451/non_2x/infosys-logo-infosys-icon-free-free-vector.jpg"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="https://th-i.thgim.com/public/incoming/yx5eem/article65529724.ece/alternates/FREE_1200/tcs.jpg"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="data:image/png;base64,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"
							alt="Image" class="img-fluid">
					</div>
				</div>


			</div>
		</div>

	</div>


	
	<div class="section bg-light" id="testimonials">




		<h2 class="heading mb-5 text-center">Testimonials</h2>
		
		<div class="text-center mb-5">
			<div id="prevnext-testimonial">
				<span class="prev me-3" data-controls="prev">
					<span class="icon-chevron-left"></span>

				</span>
				<span class="next" data-controls="next">
					<span class="icon-chevron-right"></span>

				</span>
			</div>
		</div>

		<div class="wide-slider-testimonial-wrap">
			<div class="wide-slider-testimonial">
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSB53Ad_7ipzJ9KNXZ8it1M4dsvoLbP95QV7o80JoPA1jQ1ZlIv"
							alt="Free template by TemplateUX">
							<h3>Rantan Tata</h3>
							<p class="position mb-5">CEO, TCS</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
							&ldquo;I don't take right decisions, I take decision and make them right.&rdquo;</p>
						</blockquote>
					</div>
					
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="data:image/jpeg;base64,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" alt="Free template by TemplateUX">
								<h3>Mukesh Ambani</h3>
								<p class="position mb-5">Indian Bussinessman</p>
							</div>
							<p>
							<div class="quote">&ldquo;</div>
							&ldquo;In the journey of an entrepreneur, the most important thing is self-belief and the ability to convert that belief into reality.&rdquo;</p>
						</blockquote>
					</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="data:image/jpeg;base64,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"
								alt="Free template by TemplateUX">
							<h3>Elon Musk</h3>
							<p class="position mb-5">CEO of Tesla</p>
						</div>
						<p>
						<div class="quote">&ldquo;</div>
						&ldquo;When something is important enough, you do it even if the odds are not in your favor.&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAT4BPgMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAACAwEEAAUGB//EAEEQAAEEAQMDAgQEBAQDBwUBAAEAAgMRBBIhMQVBURMiBjJhcUKBkaEUI1LBM7HR4QckYhYlU2Nyc4I0NUOSohX/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAjEQEBAAICAgICAwEAAAAAAAAAAQIRAyESMUFRBCITMmEj/9oADAMBAAIRAxEAPwDkMQaib5pQ5o/iPzTcNtWVjqOQK8rIMj+Y/evr5VqEWwKtP7ZHFWMN1scPCgDHaQ530Ks6a+yhgFkDzum1sqF3RHhL1XOE51VRSIt59+yijl+cA+U3JH8qx2UyFjPe/gJMeU2d74w0UODfKBuG4ObRTrBeW73zwqUfscN9rWxBFA+QoIpTQJRUFIQY1qUNiR9U8HulNI9QjvaAchzmM1Nj1usJpFkEijW4R2LKlsTibAJTeiS30Vt6nPbwgkBI1EBPOO7XddkuZp013B8cqeUb/jy+i49VG1haSeE2EhxIqq8qHkh6rF6CI9Jefwu7ItIAFcfVGx2oWR+qPRsgQ6EB19lPoAi2iweUxo0nynNnPyEbD6Kim+HTICG1Sgxn1A4jbVyFZeS+goc4Pm0k/K26QLYxsZNNGm727pjWjkbB3Ch9DYBMa0FjDQOkqoWWgKAwa9XfhbKLDjdGHmzYvYqTiR6qF1W26yrXNYLQlgDrTchwY9zYhdfukh5dGHFuk9wVYivO3+axOAjcfcbaeXBBN8zD9UewppaACNkUIjxg46C8gCvdVomNhY8amEk90p7SHOawDVVi02naWEgfqrsZK2Fkb2sbufxKtN7WsoWRsSrskQY9rJHc9xuq+S0AgAghNo0UbHOgIY7Sb3IUNLWyAvNV3KY8GKFlbEndRUcs7WE2N7FIMDxM31Gm7KOAu1gWQCUTsVsP+CNjylwk+oPuoq+1uglHzSwtOmz+ixoKqJICrw0MrSdy5WHNLhttRVanRziTTqF1soq3LE17dLqrwlwYsUJcWj3EKDIHZDBR9prnlPcJf4nWXAxaaAA7oikfa+ir8BDoQ48BUMogzHQ4EfRXcEXB9ioqwBtxt2UgbIjQF0oP0VEAb78LMTHdNO7QL832TIYnTu0R83v9FusTGbG3RGPufK5cnJMXbi4bnVaHCYwX8zirLcQ14HgLZQ4wI4VpuO0DheTLO3292PHjj6aT+C2sXf1S5cM6d2hdD6I7NS5ITp+X9lmN6jkp8Jo3Ac1w8KjKXMd/M3rawuqyouRpWjz4P6RRXTHkscs+LHJWYA5ho2Exm7bBsLVSSvxpNTRsPmaeCtjizxzxgxGx9+F68c5Y8PJx3C9mht15UllC6UslMbzR/ZS6V3IJW3MAaBvdJYjZ6pe3c1SaXuePcSUvcOFIII4tMGwpDsUQQNZlSMj0NI0/ZA7KmrZw324SZw/T/K+awi5q+UQFbeFDn2wB1CgjfXH1pV3Ma6Wr+UboJla5xFfLaiUaWtd3HCay+OUl8Ye0azRabG/KKk75Dd7WZTfYB2CkU6UPB2pRmmomj67lAMbnu0eq4kaaFpTi12Q5rrpo2TGObrbvQ7KCwOmc6xVINXkOa+WJgIJBFqHs063MbuRt9UX8M1p9QbEBNr+W0eAqivhSyEOExHHtQQ2JWG737KwYAxok3JA7KtiB3rtDgQb4KUbaR4IG1Uoa73EfRZK9tG6H3WGjIPdy3soHN3CWzSZnbUfCZHRYK8JO7cmrHuQJIcMsX5tXH+4Mrulzssa2/MNk5jaYwUeOUVQkxmxNaWg+42bV3p1+iRXdBlUY/b2KZg2GuJ7lQWCdzfF8KOHcWTwFLvdRarHSo/Xndp30qZXUXGbumzw8UQxD+uTc/RbXHiAHCTFET+SuxCiB2Xgyu6+rhJJo+Nu2yYGElFEwK3DDe9KatN6KjisKJI9qV/0RSXJGK3V8aky20OXDyQtJnR0CaXWZEDS0+StHmwCnCll0jiOpR1blqMTLOHmtt38pxpw/ut/1dlMcRzwuUzAfUA7rvxVx5sZcXbUDuP1UV3KrdKn9fp8LzuQNJ/LZWXUQAV63zL0wjZDRI5WF1mlIFKgCDRo7ogDuCs9okvudrWE+5BJCGt9lIbIQS1oq6JJorAD90Qt42+xUSNNHQBZ5WTvLAT37IS0ucH9vARRj2jxsqGY4h4pWZY5QRoHt7lRNDqBJo7IAxSTE3zxSLMvSy/6lOIwBtX35Q5rtUbXN7PAQBlsOtukUAoZEHU8OPFUmz2WbEbbonOAjY4bghBrGv9aHU38QTAKivuOUrFoewfh4CJzz6Lz3VQ4uAAHalTzRonBbsVcjOpo1BV81tPbZsHslC47e4BxtbAM0ynwGKpiC5NVbNCtuIcx+1ur9FA+JpDAfoqb7blNc41ur0G8bfqFXy43fOaNFA35mitwlzNldKx7ZKYOQU1opg+yrSyuLw0D2goHylvpu25RYhuIoMhmoMb55Q4+oRO0g7lRVmG9NrdfDbGvZM/TVP227rS47XNit3ddN8NNrCJIB1SGlnP03xf2bFjaCsRN3BPCxzBWwTY20K8LxWPpSrESvw/LstfErsd6UxTJYJ9qU9ZuAsadRpbYk0qZBIWnzr92y32REACtPltAa4t3K52OuNcZ1SPVqFfkuP6nGY8tv7Lvs2EkF1blcp8QY7dLHj5u63h1TL0P4ZkLo5odrB1Bbd3K5r4akLOo6f6mkLqJAV7MfT5vLNZFCrREErN68LBqvnZacw1SgB1ku47Ixv+SF7TqFHv7kEStbJoDhdHVf2RWSdjQREN8pW+nTdUgRmg2E33Ni1Cya4CXnG2gVud7T2fIK5pBXjkOr0ze6aDbHNPCQ5v8AzNh1VurLgNGoqCvjbNclOLTigXdPT4y0g6dqO6XOG+kQ0VSCsXUDXcJhd/y0er8lVdzYVl1DGjQVIGlsv0KcANxWyBjuPumMF2VpEs4Scs7s/NO1gA0DdcKpN6j8yOP/APHos/dBZxtNNZdOcLryFcjbWyXA0Na0HkJwNnZA5oAaPoheA7Y0L4WbrJGseWE2C02oI0FR6DLO25TNV8LGuo2gwNaGgEcIva1pA4USt3q9vKGjYtRTBTjQ7LoOhvDcQAc2dlz8bHatTWnTW5AW36I9oEkYu71fYLGfp14pZk6PGdrFHlB1DqOJ06CTIy5RHE0bk+fA8pGLJoLr8Xaq5WH/AB8lzNa/+lpF0F5tPbL0os/4g9MDy1uLmPA/E2Mf5EqB/wATMBs7Y3YWQGk0X7bfcK6ekdI1hmVoca2Zyf0Wrzuk/DbpHACdrgbJYC6v0Wpr6O3UYPxRgZzQ6F/bdp5Ctx9QjlyGmMmlw2P03CiIfgZWoHbS4EH7eV13S8H0cTWHFzqsrNrpJNH9X6tBit/mPArndefdf+P44X6MGP1Hk17hwEXxTkOyuptxXPLATuSErF6P0nEa6aXpk+bJVn1dr+zfHG58rWEjOXU00rPjbqzw5zoMeQVxpoqrN8QnPb6WRimJ/wDU020roh17p75MnGPw2cd+MSJWX7mflS0HUpcDqFHCbp34pbsn05y7nVD0Rwb1iH6ml2LwuCxZxiZuPLIHODH76e9LfYHXZcjqEePO1jRNehrTuKC642R5+TDLK2xt3OcHNobHlHVVVUpLFLI72W3nCBV1yVDe7XDcclFGCHOs96Rlna9lAotDjqHKHTRJ8omkMeWlSSHcdkFPJNSMvvtSbI0hlgqrlyj+IAc0UG7H6q00B0bSTwNwqADAZbPOlZNe252UteC9xB4HCmxLuDwgTG0sDie5U5Df5LvsmloI28oJNRY4HhBqm8kHsrksZ/hYq3Kq/iIK2gr0ht4Qatg8p4AAKAtRA9lUYBsbU6QTdC1jiiYEBAj9EUb2vFscCPogZRe7bgo4o2svQKs2UDxwsbZJ+yhg890YsOpQCBujrfwPqhdsRSYNuVFIefXxXuhkBO4aR5WQseImB7tTwBZTfSDQaAAPYBE3ZprZCH4vUers64MdmPinAa4RhpadR+t3yutdBjPjdLFE2OWuwpUen48c8cc0bQTrY4nwdgf3T+vZb8MQOgj9TW8MeAaI+q8mW5X1urj0WLLa+U6U7JZkHBLMZsnquGkObyP9EMDf5wDvxEbLcxscG6W1+fZRh5/m/CXVOo4c2NPlyQhwqP0SQ3X5eeXff9lX6H8CydPyJ8vrOfFLJKzQ0xN0aDtuON9uwXpE+C6Xl7mfWPZDjdJhicH0HO/qcdR/da88taTxx3tq+jdIxomgyepkFosOla3b9Attje1klbgpk9Mb6MffkoYBQLPK53t0jjcuCGD4kM8rSdTTpI5aaqwtxJ03Bf0rIxT6rIpgNb2ut5o2PdzytN8VEs6jG5pqgt50aX+KxGO3sckK7sS47cbjfDuB0qTJfBmPndMCCZX+4Xz23Oy1MPQW/wAYfQaGQ7E7d16lP0uLIv1W/nS1vVcHGx8aowAQFrzvynhJ6eWdTjZDkkCubSOhwvf8SY0rvwgn7Ck34oeI8r+WNiRa2Hw/H/zzJNI/wCb/AD/3XXH4Yy/pXSu+U2olsxHRz3S5nUwkdk8btors+cqxF2pt7C+/dWwEmRtixyEDnP1WdhxSCZdNuPflVDkn09gQ88hXX07YjlUnYrzISHNLUFVx87nwrQyWNELHNJdKdI22VUs9xvsU70WS45BJ+hHLUEGO3EA1v2VmOMsiISIN2Wdjqq03IJawn9r5QE0ihuocL2S4JC+AO06X3uDwE8DVuqNXQ9bfyrOdJoawN23VZ1+s4+DaDPfK+cU0CPTse5QDjmUsLpT7nEmvATCaOyVHKS4h52/CUVEqoc33fcJrPaSfKCMe1MHyg9kES6/T/lAar7p4GwvwqWbljHAa0AlTg57Z/bIAx3ZBdBobJjd6JG9IO9t4RD3c8qAiWt5RACTdAWNI3TIwW8fuoMea2PZC4kbFYbJF/iKPTqItFbj4ey3Q6ojx8wH+f+q6X+Fhmyw5wD2EFzB9aXE47zFK14/Cf1XbdMp8EbmO1Rndvlv2Xm5sdXb3/jZ7w01uSfSy2aQQ3agVvYflBC0+fAWSNtznA2Wl33VzHyh6YaeQN1n4b+W4YAW2UieeOJpLnAUtbldUbBG4kgEDytdhRzdVn9SZ/p47Ts293qNTH5rZsdJkTl7Rpj/zWxiAJrutL1vqbuhYPqQYk2V2DYhZWrwPjVr4PUzIH4svdkgqv9VZOlu6rfGLNWRQ8J3wlliKP0ZHixxa434z+MoMjIihw2Oedy8gK38IZ78mUmWPTGAANSWXW6su3qbpY3NsELnfiCUMhcRwjdnhkYMZ9o+q5r4h6kTC6iSOVn5WRwfXnuyczSzbUaJW6+Gi50k2k+2OJrQT9/8AZaKRxOW1xHK6boLGRYJNbzOv8hwvRg83LdYVtwwOFOTLDdI7VSSZrLdI9vdMJDq+i6vCGY+waT3Q5LCMc7m+yZp1NogKJ2CSOnHhBXa7ZhLk80wjsXFAAAYmUKIRamOJLvwnZADomu1jybSY2aSWhOc63tePlPKGFwdM7bgcoK73lk+mueyZkNc+MabG/Cmdt5TCKuiN1Mv+E47X9Cgq4bZNMv8AEaTG4+xoG4H1VuOi014SMarLST7gmR3qrsBSCkRUhQZRcdNNtHNbXHUKtFFD60VjsVFUnY5dG5u3Ht+hViFhDGh3Nbo+4oJ2xGwpbZAK8Jg2YSeyAO9zQG2O58KZzoieewCDSSD+IynOLhp1clFBJhPkdHDMJHMJujuqcwL8eVrbtx7eEjCw8duiS3iUbkDakVvsfNf7Wl2wNH7LdNIofZc3jM15Iobd1v4z7QD2Sob3UtPu5Q2pYKFndQEC0lpv7JjRpqkmH5WFWwAgFvAW86F1FuOfRncQ38LuwWjaDrN8JvkLOWMymq3hncLuOt6jkRSGJrJGOOkmgb2VMkB12ufZJ/Du9Voo1RodlscLMZktA1bheXPHx6e7j5Jn2DIxpp5g4uGjwStnhvbDpaZmk/0tPCRqcGaCzWPoqn/ZrFyHHIhklxpexheRz5HCzi7Vv3PZM2i+1zvXeiR9QLIzHbRutfNh/EeLMRHnwSxcNL4yDX1op5/7WwtD2xYkgdW/qAD910kXwv20T/hCDDmLvTo8lHI6HAhdTw0gbI+pQfFDmOflZOLESL0t9y02L0LJz5rz+oF7Sd2x7furf9S4adNj52LkRRQifU9w3Y3c2q3xNEyGAMZyey2GH0/C6d6bMaJkTW92jc/crTfEmQ0ylznXRtcvkc83HbkdVETjTQLNeAr3Us84bY48aAumfTYmDgKr0NrpsifKIOgDSCfJV+XHMsrJLaHxm2ly9mE1HzufLeWk9Ny8mQPblxCKZo20Otprt91s4JC9oJKoRBsTTbWlxvZg2s91cxgGhoA3WtOS7qOmhttyslBbj2fmrdExpAo0k5BdRB47KAmbvj/9CpSlw1gb78XSuRmnRuPGlVqBeS4GrKB8Tg6INNeEjHdWQR2TIgDG4gaqNtBKrYrCJbdd88oHylrZmnuVkoIjJ2rsEM3+LHt3QZjjQKAsYtMp2vZYzU6Z+k7eErDjIJe4pzBpyCexGyBGY0Food1OJ8jqPfyglY58jSSasilOM0hj96GpFADQHlNYlDhMaQFpkxrVEzA6NzfIRNBFk8dlmxFqQc9LjSse4AGvNImxSOA9tE/Rb0sYeQELQ3YhveloIwMQx2XcrYBtII0wbuUog8hN2DeSkvvWyhyVL3bD6GiFAzGosFbi1bFUkQta1go7JwuxW47gqBjW+VJFIQSTzt4pEUAtO/0QdTxZenTtzsS3Yzz/ADIxy2+4+iMkNBLtgBZK3MWjK6bE5pDmln6rly+no/HvdI6X1GOdrXNPI7lb6H3MsFeb5oyOiZfqwDVATZYBx9l2nQerY/UMRkkLhvz9CvPp7ZRdUhlouZqDt6cOy5rKzuuxtMcWTqDflBZa9CiEUrQ1wBPcEImYuOwFwgjvzpCu2/LTyiSLqmaR/GTPc3+kDStv0rpsoAe9ulo4C7ydrHMumj7ALVZeTHDGG0Bym6W7c11idsDQ7sObXC/EOf6znBm+3A7/AEW4+L+pAfymn3E3+S5Wi8a3d+FvGa7c8rvp0vwl1LDz+iMhhZ6eRCf5sYNk2fm+x/bhbSTGLTsCb42Xk2Pkz9PzjNiSuikjcdJC6LD+O+pwkfxUUGSB9NB/Uf6L2afMt7dmYHihVK1BCGAOdyuYx/jzDeScjBnYT/S4OH9ldi+MukyH3euwfWMn/JNVNt806tSBp1aL35C1uP8AEvRyHA5gaT/Uxw/srGJ1bpkhAZnY7neNYWfGm16NttZe2kLABs0AUSbtFA9r2l0bg4XQIOyNjSGjUBYKiqscTww6eCghjp5B7LYBpAABoeEssAJIG6CtOD6kbW1z4VfPhMlejIAWH3BW3AucD4SptLWl2mifCAIYqa1w+auVjSTM6+K2TMf5GoZhQe/gjlAl5DXN+6jHAc1zb7rJSDCHfVRiclFLa00jYDTh5QsFNU6iNgVpkQsAWdlDgdh2UOdqB8qGncDuEDmtBHKwNo34WN9vClps7oGM3JPZNDeT2pKZuTSc8FsR3o0lCAHO9I3+LdN9GMzB/wCLwlwF3ps7+VYa2pL8rIOFootrum6SDSBlDk2mHlAcbdVae6APBq+5ofdMZvsDa13WOtYnS4yJXh0xG0TTufv4Vkt9C3O9kcb3ykBjAXOJ8AIvgbqh6l0iYuG7J3gNHZpNgfuvMOp9ZzOs5V5D9MLN2Qt2aP8AX810n/D/ADxhdTOG91Ny2e03+Nv+1/otcnD/AM7W+HPWcd51TCZkQkFo45XHiXI6FmOlib7HfMPwu/3XcF4d8xC1vVcBmRCdQBteDf2+jr6Bg/GGPJGNL9Mg5Y7lW3fFuLJHpbPTvBO64bqHQQL0NI/sueyulztJDHOW5JflPKz4etH4ixsfHL35LCTexK47rXxfHJKfScXNH7rjD07LdyXJkXR5jRI/Va8cZ8p55X1By5EmfkmWTlx7+Fb9EloHYKMfFET9J5V3JAhxnE80pb9NT1uuGyx/zk1caylprm3O4nklLe2ivdjOny8r3RNTWpTE2tl0jFG1EDtR3SxYFhGxwN9lUWIJ58ch2LPLFX/hvIXQdM+MeoYxDMtrMqPuXe1w/P8A2XNsARAJcZTdj0nB+Kul5YAdP6D+7ZhX78K23q3TXk6M7HJPbWF5YAssLF4o15PVmzMfXpua4Hu0gpOZYj2XmcORJC9pge6M+WEgro+m/FEjw2Hqfub2lA3H3WMuKz0syjpXSGKJhaLJUyg+i8/1UsDosiCN8L2vaSKLTYR5IDYneCVyaV3NJhYB33KjFJBNeEyH3tBLvlB2UQ8kqCqyXVYA4NIiRe97JcTTbrHdOaOVtEtaCOVmmnWsAIdsjIsChugNvCa1u18pWrRyE6Nwc2weUBMG6Y4F7a+iTFITM6MscAKpx4KedhdbKBUDDoATTsWlBCaYKS5nSam6N0D9ROQG9tKdK+PHjdJPI1kbeXuOwVDP6li9Lx/XynfzK9sY+Zx8Lg+rdZyuqy6p31GPkib8rf8AU/VbwwuSW6b7qfxYXiSDpQ0MO3rO+b8vC5XLlc+y97nOdu4uNkoYge6gjVsd7XomMnpi3YsVu5IVyUyQelNC4tfGQ5rh2IVTDaWto9jSv5DbiC3rc0j0ToHX29SwIpnAB9U6+x7hbhr/AFQacL8Lyf4bz3YHUDA8/wAqc7fRy7uHJdE8arIHbwF8jm4/DJ9Xhz8sWxzICz3Obbb5C17saF5qgbW3imiyoLik3I7eVqMtro5CXNP/AKmrlHWjZ0qEs2ZuqXUceHFhc402greJmaDpkkcAeHUtN8UTMdUbJdbuSFZOyRp8N4myy8Dbtanq8gMRaOaScN+iTwhz5A5/al012l9Odki/nUq87KJVvqUwx5faAXkcKl/EiT5wAT44Xvws8Xys5+yGCwmEbBC0aXfdMO4W4xWM4WFtGwpYEdKiWcI+FAWAbrSCabUvG1omNpQ9AGmqKzjhEflCFBc6f1LJ6fJqgkIafmYfld+S7TpnVcXqmO5rX6J6t0T+fy8hefnhQ1zmPDmEhw3BBohYywlWXT0uBmmN5H6IG2NjstD0L4lYD6HUhRdQEw/v/quhprwHMOoHgje15ssbi6yqrDbdvKNh3CUz5CB5TWDuexWkMN+pd+2qATL0EcboLGoIpImyuY66c3hQMMbZmFsm7SjYxscbWN4CgGhSi90DtiNh9eUYPlBGD2QZuVBgwumyZAxg4vlx8BX2GtZXC53rnXxizOhwnh0oHucNw0/6rWdW+JMnLLo8e8eEnhp9zh9StFI+11x4/msXJmVkS5UzpZ5HPc7lzjuUICG90bd+F1jJjdmlKF7+Qdkzsh4OyofDuGmqV2TeL7KqwVXgJmXksxsUvk+zW/1LXqCpMz2h/BHHYrt/hnqQz8IQ5NGaPYu4K8tyMiTIfqe7bsBwFs+idTzMbLb6GqR/ZoFkjx9V4+aTkejiz/jr1aIHFm1xuLmH5hwVs54GzxB8b+R91yvTPiHA6nGI5JfQy2bOjk2P5Wun6PlxmQRSusHbjdeDPGx9DHKZemsy8N+ktsG+9rncjpghcXvdY8Xdr0PqfThJGXwGvyXGdQwZ3Pp+ogu28LOOTdc6xnqZbGxg1qR9ajZiNdM8e1o/Urquj9AAeZXiyOAuK/4g5evqv8BFWiBoL67uO9f5L0cf75aceXLxwcrkSunmc9x5P6JYCMN3TY4rK9cx2+daCMuFNdu3/JWAbROx6YhYCDRXSSxm01gTdKiMbJrWkrTIALRtaiDQ1C5y0JJSysLkKij/AAhDW6MfL9kIG1+URhQOCaAShkHtKgX2Wz6X1zK6dGYm1JF2Y/8ACfotb2Qu2Us2r0JuwWa7IaL3RWOO5RtYG0aXmdEt1WL4pWYx2VZocST2VhgIAJ8coDJaG2UrU7WK4RPbbNuLVHq+Wen9Nlnaak2bH9ymt0H1frcXS4wyvUyCLEd7D6lcXn9Qyc6b1cmQudwB2b9AEl8kksjnyvc57jZJ5KHTuvTjhI5W7Bv3RBu6OllLYExhyVocw7HZWAiI+iBTHA87FSQS8BH/APFS46Wl+xKBhljgZrlOlo7/AOi0eZlvy5dTtmjZrfAUZckk0nvddcDsEMcLiuWWVy6anSGwlw2RNjcDQJa76K5A0xGiLVp8LXx6mqzCHk1UpfK63lxf9Stz0j4l6j08tZI50sY7O3cPsSqb8f1G7bOHdZjhrj6Uw0u7Hyplxy9Vcc7j6ew/CHxlhdXjbimbTN/4cmzvy8rdTYUck4sGuV4WcQMe17HGORptr28g9qXqPwZ8SuzsIQZlfxcVNe4fjHYrw8/4/h+0fQ4Ofz/WuqkjbDG52mmhnPheG9Zyx1HqeTmOjaDI8loHgbD9qXsPxBmnF6LnZBcWlsDtIPckUP3XjErWtic47ADldfxMerk5/mZeo1MTdbifJV6GGt1Wwm2FswKA+y9mLw0uRnspKbEDRVkkcFLLw3YLSMDA1SXAcJZelucoGPcllyC7U0oJCNrbUMamtCogCg4KAFjjT/ypY3c1VICkOltpYOptqZz/ACyUrHOpoHhAYCBzm6qvdROS2wlYtFzyVN9rp6KL9QWdvCs9vySwwXdI8c6xfnYryuhsIqO/om7hgUNoAeApc81tsgZECR2A8rlvjHPx9LcBnulY8Peezavb77rp5pDj4U09WY4y4D6gLzJ2qR7pJTqe4253krrx47rOV0wOs2mgikvYBQCu22DLUa9P1CxC4EJsMBa4bKAdN32VcksN9k+ORr9j2TYYCCiLQQgLTyCoDiFQs4gc60TcdreyeHAj6oSa+yaihdCKKXE8wmjwdlYa4WgljBFhNIINHbbuEufHEjbGzxwVGPJoeWu3CtEBwtqof0ePHlidLk48+VThHohk0aQeXHY7+Oyd8O5rcHrzdMpdB6hh1+Rex/yWonjIcZGA6SKcASEJcGNAYNLeaAXLLC3creOXjZY9U+OpxH8JkX/jTRt3/M/2XjmdlHIf6cf+GP8A+l2Xxp1xub8K9FjBPqyF7nfTSA3f9SuPxINrIXHhxsx07c+cyy2dhQ6Wg91ZkeGCyUL3tjZt4VP3zvr8K9Hp5zHTOc6mo44jy5NigbGN+fKGaTS3S1VCpSGnSgaCUTYy425ODAFAtrEYaj2pR32C1oTVBSDQQ1angIFSHdG0g6XWlvKFh9teFAyaWMHSXCyq+O7TK4eUjI/xhe+yMO97H9uCs77XRmUdNWhwhs4oc1wJACbiDTHZ7pPa/D0SGXW2wU3CaAHDtaTEwNArjunlzYGOe6wzzS8zaz3AClzrNUgiNizyjruEGj+LOqehjt6fC7+ZK0OkPhvj8/7Lj3PV3rkxm6vlPJvS8sH2GyokWvTjNRyt3UXaJqEBEFoGK7JhF8pIeAKpMjfqb9QqAkj24VZ1sOyv1slSRWoFw5FbFWRokF8Fa+SMg2hZK+P7JKNjRZvuiFPBBSIcljhTk3SH7sO6uxDmlnlYJNt0QdWzhaGSK92b/RULk33GyOKYgUlcbFASWm+yguDIDfm4VSWVr3mlEhLhYSCDamxE7nTSxxkktYDQvi91djbpjr91VhbcxcVayXhkW32UkVVkd6jqG6tQRU0CqScSO6JCvimN/wAlZEKncG7JDI9Rs7oyNT9+EZpooKiNgENklSATypApBACkClOyEupBJNJbnKHOtA4qUQSgJo78KHOpJfJss2rATUXWEQP8r80guspkZtjvosS9taZIdcgV1uzGj6KlEPeL5V3sFrFnJ6Iw8bFOsHYix4KBt2nsG+687omM2N1ZY1um/wBUtoC5b4vzpv4hmGx7mQhoc8NNa78q4zdS3Tn8oXmTnm5XH9yl0ougsa5epzFpUHYJc2SxhrulDKDtgm4aNsDcoWSGOSwPaVh4S36SKQbIOBClUseU6dJ5CttdYV2BfHYVWSDcq9/dQ5oITQ1T4nN3ClmQ+PzSvOjCS6EFZsUcWYxwp/PlWG6XC43X9Frn43cJY9WI7FN0bV1O2eKKW/HsHTuFVjz3N2kGpWY8uJ/fSVdyhPvgfuNk2o5GghWba9pFhwSXQ0bj2+hTQrtprz90M1zTNjb25QTaxI7elZwmNYwySDcna1EPYwRtA4USOHndA+aydKXdrQLX4U2gCkFQHYCEu8IbUjhXYyyhKy7KwqASUp7t0bykOcs1QuKS87qXG0BJAtYtaixidPy81ksmLjvkbC3VIQOP9/oq8R9xHZeqdEgjxOi4kDWta8xNLqHJIsn91wPxJ0uTpnUpDp/kSuL4nff8P3C543ta13EoVonwqhdYaeysh2y7RivSonhznDVZb2VmMGgXCj4VaGNrJHPGxcNwrHIped0HzsOFxXxm4nqgDKJbE0H9129CvoFwPxE/1us5JHALWj/9QunH7ZyaZsxBDZGkHz2KJ7vbspkYHN0u5VYOLDpdx2XX0z7SImyG73+qB0ZYdt/smkBu44KgsPI3/NTWxkUtiu6l7tPzJDiQ7caT5Qkn5rtPLS6PjfTlbjkWtY73BWGvSZFjZsfYRqlFJsrDHldNsm1aW5qY02p2QIUFt8hPNUhpBWdA0/hCS/Fr5RSvrKvlTQ1gE0fykpjcqZvIJH1WyDG1whMTALKmlVGh07wBQc80NRoKS19jfUwjYj6KMp5D2lm1EEfcKzFkPf7p3DURpFCgB4pTvyJrROk+KUgEKwXNJ7ITS3pCVICOgh4/JKIpYViFQYULuFhKFx2QJlJSnA0mu3RAABYUgRVu7hKIMkrWN/EQP1TciSzoHCLpUZl6thx/1Tsv9QsZNR6x6TYwzb5WgD9FTz8fHy2PhyY2yRu5Dv7K/K4EltWPKoTg69zyuLbiesdAOCx+RivMkA3c13zM+v1C1Hu0ja16WWRv1McAWuFEeQvPut4MnTcx8bSTCXExknt4/JdMcmLHorXsa6u6e12rZvzeCtXmsl9Fvokh2v3EdgtjjsqNr3j3kUfqsNLTa4XnnxLqHXMv0jtqG3/xC9CZwvO+vH/vrNd/5v8AYLpx+2cmqdM8PGsUmOibK3b9VJIdyl0+E233NXVksaofa/dhTWtI3YbaUYLZW9vqEg6sdxq9J7J6DJXx1Twqji1nyOBHhWHGMjU+jf1Q6ITswj9VL2s6IpvzNcB/0o4zaiSIDuLQsNbLPqr7WWupWY3qiHJkclGluVlfa9MDlWY4EJgK1tDtQUWgCm1QYU7JdrLQM10gc/YoXFLJTYVq1uNjhMu20lirNUmALIXrLe6Nst90D2pV0UFsPWEqu2RNa602DtRaxRRVGFA5EdkpzlKrDSCR+lhWakiV1mli0kATfK2fwswP6/iWL0uLq+wWru1t/hSx13GI/wCr/IrnW3pLjuqkrdUwJ2ICwyvLiewP6qGucXncLnppWDneqBuGlZLjY+XFWRE14D7AcLopcTw6cM8Wd09kjqI7WqLLCOSNgnB1pDSA1Mb7qRD2H2rzzrv/AN4zB/5pXofP6LzzrhrrGZ/7hXTjZy9KDWeSiD2jY0kyyPOzW7eUg6r9y67ZXHaW7t5UfOKO6qtkLTvwmOJLfaU2aAWGNxoW36pb2tI1MPHbwnMmB9r/ANUZga82DSzra7Ud63u1jfmTXxj1C3UCRzXCU3lc7NNGgo2lKBRg7LcqVZierLHWte11KzE9blZqyCpS2uRhy0ibpZaAlTdoIcUslMpZpQIOxFd0Zd2RvbSUQoDHuS5GFWY2bKHjdXQoGwUTJKT5I74Vd7CCsqsMfaa0+Vrw4t7pjZzVEps0KfJBcWt4HdIMhKd6LXi28pD43NO6xdtTTNaitRQEFTdKbXQ9FLefBrWnrY1doXV99lodZW3+F5dHWYv+prm/tf8AZS+ie3dZA9OMljdRvhLhc6YvNGOvKl07Xs253QQytj1HydlzaV2tdFOXH9k+KzEdW/uOyyO3ZLyXcUgyJRpAbtv9kF69wmDdt+Es7JjDtXlEMxnXs7nyvOutuJ6rmf8AuuXo0R345XnPWB/3llnxK7/NdONnJTY4O9pNdkRh+tpbG69yeE+N1AArswrSQ+AltOk0dgtjseyVJE2SwQFLFVJIwRYStT2jTaez2OLTvSyRjSFmzpZVUNc5waAXOcaAA3JWUQ4tdsQaIK6f4F6ZHm9Z9eY2zDqTR/U43X6UqPxZiNw/iLMjj+Rz/VA8at6XL50205FFY00mvaCwFKC3rSS7MBTGuSL2UhxVlTS6x5TQVUjfasRldIzofdSpCw8KowO2WByFYEEudsh53CwjlAflI8qC04SQxsdNFJGx4tpewtDh9LQuo8LY9W67H1iWSSaOT+JmcHO3GhukVt3qhVLVudTtuykq2QRCBzAUd2FB2WkVZIu4SHNIK2HPZLewFZsXamyV0fBVoPbI0A8pD4wEsEtOxWfS6Nkh32CUYirTHkt3RbHsmpU3VMRLY9CiH/8Aqwf9Nn9ikkBbX4VjY/qMpePli2/MhZymost26ZrS0NBrSQoj0e4OcSNWwWZ9tYK2+yqtBEkbtRXJ0Wmf/UOIADSFUmIEhBvZWS8CV7a2AsKkfc95PlSj/9k=" alt="Free template by TemplateUX">
							<h3>Jeff Bezos</h3>
							<p class="position mb-5">Owner of Amazon</p>
						</div>
						<p>
						<div class="quote">&ldquo;</div>
						&ldquo;One of the only ways to get out of a tight box is to invent your way out.&rdquo;</p>
					</blockquote>
				</div>

				
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo0VS5EonhAcJ-9xX5ma0g-wvC7V1hjsJbxw&usqp=CAU" alt="Free template by TemplateUX">
							<h3>Sundar Pichai</h3>
							<p class="position mb-5">CEO of Google</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
							&ldquo;wear your failure as a bagde of honour.&rdquo;</p>

					</blockquote>
				</div>
				
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuEvSw6gRPe009SMfeNE2s6irFYu0QdJUJ5Q&usqp=CAU" alt="Free template by TemplateUX">
							<h3>Mark Zukerberk</h3>
							<p class="position mb-5">CEO of Facebook</p>
						</div>
						<p>
						<div class="quote">&ldquo;</div>
						&ldquo;The biggest risk is not taking any risk.&rdquo;</p>
					</blockquote>
				</div>

			</div>
		</div>

		

	</div> <!-- /.untree_co-section -->

	<div class="section">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 mb-4 mb-lg-0">
					<img src="images/img_v_2.jpg" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">

					<h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

					<div class="custom-accordion" id="accordion_1">
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
									to register</button>
							</h2>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-bs-parent="#accordion_1">
								<div class="accordion-body">
									Dhairya nu kam
								</div>
							</div>
						</div> <!-- .accordion-item -->

						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What
									types of assignments do you work with ?</button>
							</h2>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								data-bs-parent="#accordion_1">
								<div class="accordion-body">
									Dhairya nu kam
								</div>
							</div>
						</div> <!-- .accordion-item -->
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseThree" aria-expanded="false"
									aria-controls="collapseThree">Can I get a permanent job through your firm ?</button>
							</h2>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								data-bs-parent="#accordion_1">
								<div class="accordion-body">
									Dhairya nu kam
								</div>
							</div>

						</div> <!-- .accordion-item -->


						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseFour" aria-expanded="false"
									aria-controls="collapseFour">How long does the process take from candidate contact
									through to hire</button>
							</h2>

							<div id="collapseFour" class="collapse" aria-labelledby="headingThree"
								data-bs-parent="#accordion_1">
								<div class="accordion-body">
									Dhairya nu kam
								</div>
							</div>

						</div> <!-- .accordion-item -->

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">

			<div class="row">
				<div class="col-12" data-aos="fade-up" data-aos-delay="0">

					<h2 class="heading mb-5">Recent Posts</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_1.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_2.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_3.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_4.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="py-5 bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center mb-3 mb-lg-0 text-lg-start">
					<h3 class="text-white m-0">Begin your adventurous journey here.</h3>
				</div>
				<div class="col-lg-5 text-center text-lg-end">
					<a href="#" class="btn btn-outline-white">Get started</a>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>About Passport<span class="text-primary">.</span> </h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Connect</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2 ml-auto">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2">
					<div class="widget">
						<h3>Company</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->


				<div class="col-lg-3">
					<div class="widget">
						<h3>Contact</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links mb-4">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="mb-0">Copyright &copy;
						<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
						Designed with love by <a href="https://untree.co">Untree.co</a>
						<!-- License information: https://untree.co/license/ --> Distributed By <a
							href="https:/themewagon.com" target="_blank">ThemeWagon</a>
					</p>
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.site-footer -->

		<!-- Preloader -->
		<div id="overlayer"></div>
		<div class="loader">
			<div class="spinner-border text-primary" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/navbar.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/rellax.js"></script>
		<script src="js/flatpickr.js"></script>
		<script src="js/glightbox.min.js"></script>
		<script src="js/custom.js"></script>
</body>

</html>