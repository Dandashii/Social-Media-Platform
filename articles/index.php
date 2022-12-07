<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
	<link rel="stylesheet" href="/styling/main.css" type="text/css">
	<title>Articles page</title>
	<style>
		.articles {
			width: 95%;
			margin: 30px auto;
			display: flex;
			flex-flow: row wrap;
			justify-content: space-between;
			gap: 50px;
		}

		.article-post {
			width: 400px;
			height: 250px;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
			border-radius: 50px;
			position: relative;
		}

		.article-image {
			height: 100%;
			width: 100%;
			border-radius: 50px;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: -1;
			filter: brightness(60%);
		}

		.article-top-section {
			display: flex;
			flex-flow: row nowrap;
			justify-content: space-between;
			width: 75%;
			position: absolute;
			top: 0;
			left: 50%;
			transform: translateX(-50%);
		}

		.article-top-section p {
			margin: 0;
			display: flex;
			flex-flow: column nowrap;
			gap: 5px;
			align-items: center;
			width: 65px;
			left: 1019px;
			top: 422px;
			font-weight: 700;
			font-size: 15px;
			padding: 10px;
		}

		.article-comments {
			background: rgba(97, 65, 65, 0.6);
		}

		.article-ratings {
			background: rgba(124, 128, 81, 0.6);
		}

		.article-views {
			background: rgba(54, 78, 106, 0.6);
		}

		.article-top-section iconify-icon {
			font-size: 30px;
		}

		.article-bottom-section {
			position: absolute;
			bottom: 0;
			background: rgba(68, 68, 68, 0.55);
			border-top: 1px solid #1f1f1f;
			border-radius: 0px 0px 50px 50px;
			width: 100%;
		}

		.article-title {
			font-weight: 800;
			font-size: 18px;
			line-height: 27px;
			margin: 10px auto;
			width: 85%;
		}

		.article-author-container {
			display: flex;
			flex-flow: row nowrap;
			justify-content: space-evenly;
			padding-left: 15px;
			align-items: center;
			gap: 10px;
			width: 95%;
			margin: 10px auto;
		}

		.article-author-pic {
			width: 40px;
			height: 40px;
			border: 1px solid white;
			border-radius: 50%;
		}

		.article-author, .article-datePost {
			font-weight: lighter;
			font-size: 14px;
		}

		.article-datePost {
			margin-left: auto;
			margin-right: 30px;
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
			<a href="index.php"><img src="/media/EMU-Logo.svg" alt="EMU Logo"></a>
			<h1>SCHOOL OF COMPUTER & TECHNOLOGY</h1>
		</div>
		<nav>
			<button class="menu"><iconify-icon class="nav-icons" icon="fluent-mdl2:collapse-menu"></iconify-icon><span>MENU</span></button>
			<ul>
				<li><a href=""><iconify-icon class="nav-icons" icon="ant-design:home-outlined"></iconify-icon><span>HOME</span></a></li>
				<li><a href="/announcements%20&%20news/index.php"><iconify-icon class="nav-icons" icon="fluent:news-28-regular"></iconify-icon><span>ANNOUNCEMENTS & NEWS</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="bi:file-person"></iconify-icon><span>INTERNSHIPS & JOB OFFERS</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="fluent-mdl2:cycling"></iconify-icon><span>ACTIVITIES & EVENTS</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="bytesize:archive"></iconify-icon><span>ARTICLES</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="fluent:hat-graduation-12-filled"></iconify-icon><span>STAFF</span></a></li>
				<li><a href=""><iconify-icon class="nav-icons" icon="akar-icons:people-group"></iconify-icon><span>CLUBS</span></a></li>
			</ul>
			<div class="help"><a href=""><iconify-icon class="nav-icons"icon="bi:exclamation-circle"></iconify-icon>HELP</a></div>
		</nav>
	</header>

	<main>
		<div class="section-nav">
			<button class="section-btn current">ARTICLES</button>
		</div>

		<div class="search-sort-container">
			<form class="search-container">
				<div class="search-icon">
					<iconify-icon class="header-icon" icon="akar-icons:search"></iconify-icon>
				</div>
				<input type="text" name="search" id="search" placeholder="Type the name of a post here ...">
			</form>

			<button type="button" class="sort-btn"><span>SORT BY</span> <i class="arrow down"></i></button>
		</div>

		<section class="articles">
			<article class="article-post">
				<img class="article-image" src="../media/article.png" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>

			<article class="article-post">
				<img class="article-image" src="../media/article.png" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>

			<article class="article-post">
				<img class="article-image" src="../media/article.png" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>

			<article class="article-post">
				<img class="article-image" src="../media/announcement.jpg" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>

			<article class="article-post">
				<img class="article-image" src="../media/announcement.jpg" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>

			<article class="article-post">
				<img class="article-image" src="../media/announcement.jpg" alt="Article Post Image">
				<div class="article-top-section">
					<p class="article-comments">
						<iconify-icon class="comments-icon" icon="icons8:comments"></iconify-icon>
						50
					</p>
					<p class="article-ratings">
						<iconify-icon class="ratings-icon" icon="akar-icons:star"></iconify-icon>
						2.5 / 5
					</p>
					<p class="article-views">
						<iconify-icon class="views-icon" icon="ic:outline-remove-red-eye"></iconify-icon>
						25
					</p>
				</div>
				<div class="article-bottom-section">
					<h2 class="article-title">This is an article's title retrieved from the post</h2>

					<div class="article-author-container">
						<img class="article-author-pic" src="../media/profile.png" alt="Author picture">
						<p class="article-author">Mohammad Aldandashi</p>
						<p class="article-datePost">3 hours ago</p>
					</div>
				</div>
			</article>
		</section>

		<ol class="pagination">
			<li><span>1</span></li>
			<li><span>2</span></li>
			<li><span>3</span></li>
			<li><span>4</span></li>
			<li><span>5</span></li>
			<li><span>6</span></li>
			<li><span>7</span></li>
			<li><span>8</span></li>
			<li><span>9</span></li>
			<li><span>10</span></li>
		</ol>
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
	<script src="/scripts/main.js" type="text/javascript"></script>
</body>
</html>