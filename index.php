<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/styling/main.css" type="text/css">
	<title>ITEC404 - Homepage</title>
	<style>
		.announcements {
			width: 66%;
			height: 527px;
			margin: 30px auto 0;
			background: #000000;
			position: relative;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.announcements figcaption {
			position: absolute;
			top: 55%;
			-ms-transform: translateY(-70%);
			transform: translateY(-65%);
			z-index: 1;
			height: 20%;
			background: black;
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		.announcements span {
			width: 100%;
			display: inline-block;
			font-style: normal;
			font-weight: 700;
			font-size: 20px;
			padding: 20px;
		}

		.announcements .overlay {
			width: 100%;
			height: 87%;
			/*background: rgb(119, 130, 149);*/
			background: rgba(67, 97, 135, 0.25);
			position: absolute;
			top: 0;
		}

		.announcements img {
			object-fit: fill;
			width: 100%;
			height: 87%;
			opacity: 0.5;
		}

		.announcements-nav-bottom {
			display: flex;
			flex-flow: row nowrap;
			justify-content: center;
			align-items: center;
			gap: 10px;
			width: 100%;
			margin-top: 1.3%;
		}

		.nav-circle {
			width: 1.5em;
			height: 1.5em;
			background: #555760;
			border-radius: 50%;
		}

		.nav-circle:first-child {
			background: #848D9B;
			border: 3px solid #94a0b3;
			width: 1.8em;
			height: 1.8em;
		}

		.recents-container {
			position: relative;
			width: 100vw;
			display: flex;
			flex-flow: row wrap;
			justify-content: space-between;
			margin-top: 50px;
		}

		.recent {
			position: relative;
			padding: 0;
			width: 355px;
			height: 520px;
			overflow: hidden;
			background: linear-gradient(180deg, #426F76 0%, rgba(34, 56, 103, 0.5) 100%);
			border: 1px solid #000000;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.recent-header {
			background: black;
			height: 12.5%;
			width: 100%;
			display: flex;
			flex-flow: row nowrap;
			justify-content: center;
			align-items: center;
			gap: 5px;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.recent-header iconify-icon {
			font-size: 30px;
			color: white;
		}

		.news-container iconify-icon {
			font-size: 35px;
		}

		h2 {
			color: white;
			font-weight: 400;
			font-size: 20px;
		}

		.recent-overlay {
			position: absolute;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
			background: #1B3347;
			opacity: 0.5;
			transition: filter 600ms;
		}

		.recent-nav-top {
			position: absolute;
			top: 3%;
			width: 30px;
			height: 30px;
			background: #5C5C5C;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.3));
		}

		.recent-nav-top:hover {
			background: #2a2a2a;
			cursor: pointer;
		}

		.recent-nav-top iconify-icon {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
			color: white;
		}

		.recent-left {
			left: 3%;
			padding: 5px;
		}

		.recent-right {
			right: 3%;
			padding: 5px 5px 5px 7px;
		}

		.recent-image {
			position: relative;
			top: 0;
			margin: 0 auto;
			height: 55%;
			width: 100%;
			overflow: hidden;
		}

		.recent-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: filter 600ms;
		}

		.recent-image:hover > img, .recent-overlay{
			cursor: pointer;
			filter: blur(4px);
			-webkit-transform: translate3d(0, 0, 0);
		}

		.recent-caption {
			text-align: left;
			font-weight: bolder;
			font-size: 16px;
			line-height: 24px;
			position: absolute;
			top: 80%;
			left: 5%;
			transform: translateY(-80%);
			width: 77%;
			text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.recent-post-date {
			position: absolute;
			right: 2.5%;
			bottom: 1%;
			font-weight: lighter;
			font-size: 14px;
			text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.recent-post-author {
			position: absolute;
			left: 5.5%;
			bottom: 1%;
			font-weight: normal;
			font-size: 14px;
			text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.recent-nav-bottom {
			display: flex;
			flex-flow: row nowrap;
			justify-content: center;
			align-items: center;
			gap: 10px;
			margin-top: 10%;
		}

		.recent-nav-bottom .circle-nav {
			width: 1.4em;
			height: 1.4em;
			background: #8C8C8C;
			border-radius: 50%;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			transition: background-color 300ms;
		}

		.recent-nav-bottom .circle-nav:hover:not(:first-child) {
			background: #2a2a2a;
			cursor: pointer;
		}

		.circle-nav:first-child {
			border: 3px solid white;
			width: 1.7em;
			height: 1.7em;
		}

		.show-all {
			width: 85px;
			height: 35px;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
			position: absolute;
			bottom: 3%;
			right: 4%;
		}

		.show-all button {
			border: none;
			margin: 0;
			color: white;
			display: inline-block;
			width: 100%;
			height: 100%;
			background: black;
			font-size: 13px;
			font-weight: 700;
			text-align: center;
		}

		.show-all button:hover {
			cursor: pointer;
			background: #656f80;
		}

		/* Recent tables Job listings and Events */
		.recent-table-header {
			border-collapse: collapse;
			border: 1px solid #000000;
			margin: 4% auto 0 auto;
			width: 95%;
		}

		.recent-table-header thead tr {
			background: #1A1C22;
			font-weight: 600;
			font-size: 16px;
		}

		.recent-table-header thead th {
			height: 50px;
		}

		.recent-table-data {
			width: 90%;
			height: 10%;
			margin: 2% auto;
			text-align: center;
			border-spacing: 0 7px;
		}

		.recent-table-data tbody td {
			height: 55px;
			font-weight: 500;
			font-size: 13px;
			line-height: 20px;
		}

		.colored-row {
			background: #1E2C35;
		}

		.recent-table-data tbody tr:hover {
			background: #58849d;
			cursor: pointer;
		}

		.events-container .recent-table-data tbody td {
			width: 33%;
		}

		/* Media Query for low resolution  Tablets, Ipads */
		@media (max-width: 767px) {
			.announcements {
				width: 95vw;
			}

			.recents-container {
				justify-content: space-evenly;
				gap: 4vw 0px;
			}
		}

		/* Media Query for Tablets Ipads portrait mode */
		@media (min-width: 768px) and (max-width: 1024px) {
			.announcements {
				width: 85vw;
			}

			.recents-container {
				justify-content: space-evenly;
				gap: 3vw 0px;
			}
		}

		/* Media Query for Laptops and Desktops */
		@media (min-width: 1025px) and (max-width: 1439px){
			.recents-container {
				flex-flow: row nowrap;
				justify-content: space-between;
				width: 100vw;
				gap: 5px;
				overflow-x:scroll;
			}

			.recent {
				min-width: 355px;
			}
		}

		/* Media Query for Large screens */
		@media (min-width: 1441px) and (max-width: 1920px) {
			.announcements {
				width: 55vw;
			}

			.recents-container {
				justify-content: center;
				gap: 3vw;
			}
		}
	</style>
</head>
<body>
	<header>
		<div class="header-icons-container">
			<div class="language-header">
				<iconify-icon class="header-icon" icon="ic:baseline-language"></iconify-icon>
				<span>EN</span>
			</div>

			<iconify-icon class="header-icon" icon="bi:person-fill"></iconify-icon>
			<iconify-icon class="header-icon" icon="jam:inbox-f"></iconify-icon>
			<iconify-icon class="header-icon" icon="ic:baseline-notifications"></iconify-icon>
		</div>
		<div class="title-container">
			<a href="index.html"><img src="/media/EMU-Logo.svg" alt="EMU Logo"></a>
			<h1>SCHOOL OF COMPUTER & TECHNOLOGY</h1>
		</div>
		<nav>
			<button class="menu"><iconify-icon class="nav-icons" icon="fluent-mdl2:collapse-menu"></iconify-icon><span>MENU</span></button>
			<ul>
				<li><a href=""><iconify-icon class="nav-icons" icon="ant-design:home-outlined"></iconify-icon><span>HOME</span></a></li>
				<li><a href="/announcements-news/index.php"><iconify-icon class="nav-icons" icon="fluent:news-28-regular"></iconify-icon><span>ANNOUNCEMENTS & NEWS</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="bi:file-person"></iconify-icon><span>INTERNSHIPS & JOB OFFERS</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="fluent-mdl2:cycling"></iconify-icon><span>ACTIVITIES & EVENTS</span></a></li>
				<li><a href="/articles/index.php"><iconify-icon class="nav-icons" icon="bytesize:archive"></iconify-icon><span>ARTICLES</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="fluent:hat-graduation-12-filled"></iconify-icon><span>STAFF</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="akar-icons:people-group"></iconify-icon><span>CLUBS</span></a></li>
			</ul>
			<div class="help"><a href=""><iconify-icon class="nav-icons"icon="bi:exclamation-circle"></iconify-icon>HELP</a></div>
		</nav>
	</header>
	<main>
		<!-- Announcements -->
		<figure class="announcements">
			<!-- Top right & left navigation buttons -->
			<div class="left-nav"></div>
			<div class="right-nav"></div>

			<img src="/media/announcement.jpg" alt="Announcement Picture">
			<figcaption><span>THIS IS THE FIRST ANNOUNCEMENT</span></figcaption>
			<div class="overlay"></div>
			<div class="announcements-nav-bottom">
				<div class="nav-circle"></div>
				<div class="nav-circle"></div>
				<div class="nav-circle"></div>
				<div class="nav-circle"></div>
				<div class="nav-circle"></div>
			</div>
		</figure>

		<!-- Recents -->
		<section class="recents-container">
			<!-- Recent News -->
			<div class="news-container recent">
				<div class="recent-header">
					<iconify-icon icon="fluent:news-20-regular"></iconify-icon>
					<h2>RECENT NEWS</h2>
				</div>

				<!-- News post container -->
				<figure class="recent-image">
					<img src="/media/recent-news.jpg" alt="A news image">
					<div class="recent-overlay"></div>
					<div class="recent-nav-top recent-left">
						<iconify-icon width="100%" height="100%" class="recent-left recent-nav" icon="ep:arrow-left-bold"></iconify-icon>
					</div>
					<div class="recent-nav-top recent-right">
						<iconify-icon width="100%" height="100%" class="recent-right recent-nav" icon="ep:arrow-right-bold"></iconify-icon>
					</div>
					<figcaption class="recent-caption">This is the news post main title retrieved from the post</figcaption>
					<p class="recent-post-date">3 hours ago</p>
				</figure>

				<!-- Circle navigations -->
				<div class="recent-nav-bottom">
					<div class="circle-nav main-circle"></div>
					<div class="circle-nav"></div>
					<div class="circle-nav"></div>
				</div>

				<a href="news.html" class="show-all"><button>SHOW ALL</button></a>
			</div>

			<!-- Recent Job Listings -->
			<div class="jobs-container recent">
				<div class="recent-header">
					<iconify-icon icon="bi:file-person"></iconify-icon>
					<h2>RECENT JOB LISTINGS</h2>
				</div>

				<table class="recent-table-header">
					<thead>
						<tr>
							<th>JOB DESCRIPTION</th>
							<th>JOB TYPE</th>
						</tr>
					</thead>
				</table>

				<table class="recent-table-data">
					<tbody>
						<tr class="colored-row">
							<td>SYSTEMS ENGINEER</td>
							<td>INTERNSHIP</td>
						</tr>

						<tr>
							<td>COMPUTER ENGINEER</td>
							<td>PART-TIME</td>
						</tr>

						<tr class="colored-row">
							<td>PHYSICS PROFESSOR</td>
							<td>FULL-TIME</td>
						</tr>

						<tr>
							<td>CHEMISTRY ASSISTANT</td>
							<td>PART-TIME</td>
						</tr>

						<tr class="colored-row">
							<td>BIOLOGY PROFESSOR</td>
							<td>FULL-TIME</td>
						</tr>
					</tbody>
				</table>

				<a href="news.html" class="show-all"><button>SHOW ALL</button></a>
			</div>
			<div class="articles-container recent">
				<div class="recent-header">
					<iconify-icon icon="fluent-mdl2:articles"></iconify-icon>
					<h2>RECENT PUBLICATIONS</h2>
				</div>

				<!-- Article post container -->
				<figure class="recent-image">
					<img src="/media/article.png" alt="An article's image">
					<div class="recent-overlay"></div>
					<div class="recent-nav-top recent-left">
						<iconify-icon width="100%" height="100%" class="recent-left recent-nav" icon="ep:arrow-left-bold"></iconify-icon>
					</div>
					<div class="recent-nav-top recent-right">
						<iconify-icon width="100%" height="100%" class="recent-right recent-nav" icon="ep:arrow-right-bold"></iconify-icon>
					</div>
					<figcaption class="recent-caption">This is an article's main title retrieved from the post</figcaption>
					<p class="recent-post-author">By Mohammad Aldandashi</p>
					<p class="recent-post-date">3 hours ago</p>
				</figure>

				<!-- Circle navigations -->
				<div class="recent-nav-bottom">
					<div class="circle-nav main-circle"></div>
					<div class="circle-nav"></div>
					<div class="circle-nav"></div>
				</div>

				<a href="news.html" class="show-all"><button>SHOW ALL</button></a>
			</div>
			<div class="events-container recent">
				<div class="recent-header">
					<iconify-icon icon="akar-icons:calendar"></iconify-icon>
					<h2>UPCOMING EVENTS</h2>
				</div>

				<table class="recent-table-header">
					<thead>
						<tr>
							<th>TITLE</th>
							<th>LOCATION</th>
							<th>DATE</th>
						</tr>
					</thead>
				</table>

				<table class="recent-table-data">
					<tbody>
						<tr class="colored-row">
							<td>GRAD PARTY</td>
							<td>EMU SQUARE</td>
							<td>22/02/2000</td>
						</tr>

						<tr>
							<td>GRAD PARTY</td>
							<td>EMU SQUARE</td>
							<td>22/02/2000</td>
						</tr>

						<tr class="colored-row">
							<td>GRAD PARTY</td>
							<td>EMU SQUARE</td>
							<td>22/02/2000</td>
						</tr>

						<tr>
							<td>GRAD PARTY</td>
							<td>EMU SQUARE</td>
							<td>22/02/2000</td>
						</tr>

						<tr class="colored-row">
							<td>GRAD PARTY</td>
							<td>EMU SQUARE</td>
							<td>22/02/2000</td>
						</tr>
					</tbody>
				</table>

				<a href="events.html" class="show-all"><button>SHOW ALL</button></a>
			</div>
		</section>
	</main>
	<footer>
		<div class="footer-nav">
			<h3 class="footer-nav-title">Navigation</h3>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Announcements & News</a></li>
				<li><a href="">Internships & Job Offers</a></li>
				<li><a href="">Activities & Events</a></li>
				<li><a href="">Articles</a></li>
				<li><a href="">Staff</a></li>
				<li><a href="">Clubs</a></li>
			</ul>
		</div>
		<section class="about">
			<p>
				The School of Computing and Technology (SCT) was established in 1979 and it is the most experienced academic unit of the Eastern Mediterranean University (EMU).
				SCT provides a high-tech education in a fully digital and multicultural environment to its multinational student profile.
				With its excellent facilities coupled with a commitment to excellence in teaching and ''Project-based learning'', the SCT offers a wide variety of academic programs including a non-thesis
				Master of Technology degree program in IT, a Bachelor of Science degree program in IT and associate degree programs.
			</p>
			<ul>
				<li><a href="">Privacy Policy</a></li>
				<li><a href="" class="copyrights"><span>&copy;</span>Copyrights Reserved</a></li>
				<li><a href="">Terms of use</a></li>
			</ul>
		</section>
		<section class="other">
			<div class="language-container">
				<h3>Language</h3>
				<button type="button" class="lang-btn"><span>English</span> <i class="arrow down"></i></button>
			</div>
			<button type="button" class="contact-us">CONTACT US</button>
		</section>
	</footer>
	<script src="/icons/iconify-icon/iconify-icon.min.js"></script>
	<script src="/scripts/main.js" type="text/javascript"></script>
</body>
</html>