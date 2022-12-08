<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../styling/main.css" type="text/css">
	<script src="/icons/iconify-icon/iconify-icon.min.js"></script>
	<title>Announcement & News</title>
	<style>
		/* Shared styling amongst the announcements-news */
		footer {
			margin-top: 5%;
		}

		/* Announcements Styling Section*/
		.announcements {
			width: 95%;
			margin: 30px auto;
			display: none;
			flex-flow: column nowrap;
			gap: 25px;
		}

		.fade-in {
			opacity: 1;
			transition: opacity 1.5s ease;
		}

		.announcement-post {
			background: linear-gradient(180deg, rgba(43, 43, 43, 0.5) 0%, rgba(28, 33, 49, 0.245) 100%);
			mix-blend-mode: normal;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			display: flex;
			flex-flow: column nowrap;
			align-items: center;
			gap: 5px;
		}

		.announcement-post:first-child {
			background: linear-gradient(180deg, rgba(67, 172, 230, 0.5) 0%, rgba(71, 82, 177, 0.245) 100%);
			mix-blend-mode: normal;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.announcement-top {
			display: flex;
			flex-flow: row nowrap;
			align-items: center;
			align-content: center;
			width: 98%;
			gap: 2px;
		}

		.announcement-title-icon {
			font-size: 30px;
			margin-bottom: 3px;
		}

		.announcement-title {
			margin-right: auto;
			font-style: normal;
			font-weight: 600;
			font-size: 22px;
		}

		.announcement-desc {
			margin: 0;
			width: 98%;
			font-weight: 300;
			font-size: 16px;
			letter-spacing: -0.01em;
		}

		.announcement-bottom {
			display: flex;
			flex-flow: row nowrap;
			align-items: center;
			width: 98%;
			font-style: normal;
			font-weight: 400;
			font-size: 15px;
			margin-top: 5px;
			gap: 5px;
		}

		.announcement-author-icon {
			font-size: 25px;
			margin-bottom: 3px;
		}

		.announcement-author {
			margin-right: auto;
			font-style: italic;
			font-weight: 300;
			font-size: 13px;
		}

		/* News styling section */
		.news {
			display: none;
			flex-flow: row wrap;
			justify-content: space-between;
			width: 95%;
			margin: 40px auto;
			gap: 100px;
		}

		.news-post {
			width: 350px;
			height: 425px;
			background: linear-gradient(180deg, #404246 0%, rgba(14, 14, 14, 0.49) 100%);
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			border-radius: 30px;
			position: relative;
		}

		.news-post img {
			width: 100%;
			height: 50%;
			opacity: 0.75;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
			border-radius: 30px 30px 0px 0px;
		}

		.news-title {
			font-weight: bold;
			font-size: 18px;
			width: 92.5%;
			margin-right: auto;
			margin-left: auto;
			line-height: 27px;
		}

		.news-desc {
			width: 92.5%;
			margin: 0 auto;
			font-weight: lighter;
			font-size: 15px;
			line-height: 22px;
		}

		.news-bottom {
			position: absolute;
			bottom: 0;
			right: 18px;
			display: flex;
			align-items: center;
			gap: 5px;
		}

		.news-postDate {
			font-weight: 300;
			font-size: 14px;
			text-align: right;
		}
	</style>
</head>
<body onload="getAllPosts('announcements', 1)">
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
			<a href="../index.php"><img src="/media/EMU-Logo.svg" alt="EMU Logo"></a>
			<h1>SCHOOL OF COMPUTER & TECHNOLOGY</h1>
		</div>
		<nav>
			<button class="menu"><iconify-icon class="nav-icons" icon="fluent-mdl2:collapse-menu"></iconify-icon><span>MENU</span></button>
			<ul>
				<li><a href="../index.php"><iconify-icon class="nav-icons" icon="ant-design:home-outlined"></iconify-icon><span>HOME</span></a></li>
				<li><a href="index.php"><iconify-icon class="nav-icons" icon="fluent:news-28-regular"></iconify-icon><span>ANNOUNCEMENTS & NEWS</span></a></li>
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
			<button class="section-btn announcements-sec" onclick="getAllPosts('announcements', 1); return false">ANNOUNCEMENTS</button>
			<button class="section-btn news-sec" onclick="getAllPosts('news', 1); return false">NEWS</button>
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

		<section class="announcements"></section>
		<section class="news"></section>

		<ol class="pagination"> </ol>
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
	<script type="text/javascript">
		let loadedSection;
		let totalPosts;
		let data = new FormData();

		async function getAllPosts(section, pageNo) {
			data.append('section', section);
			data.append('pageNo', pageNo);

			await fetch('getAllPosts.php', {
				method: 'POST',
				body: data })
				.then(function (response) {
					return response.json();
				}).then(function (postList) {
					if(loadedSection) {
						document.querySelector(`.${loadedSection}`).style.display = 'none';
						document.querySelector(`.${loadedSection}`).innerHTML = '';

						document.querySelector(`.pagination`).innerHTML = '';

						document.querySelector(`.current`).classList.remove('current');
					}

					for(let post in postList['posts']) {
						document.querySelector(`.${section}`).innerHTML += createPost(section, postList['posts'], post);
					}

					document.querySelector(`.${section}`).style.display = 'flex';
					document.querySelector(`.${section}-sec`).classList.add('current');

					document.querySelector('.pagination').innerHTML = createPagination(section, postList['totalPages']);

					setCurrentPage(pageNo);

					loadedSection = section;
				}).catch(function(error) {
					console.log(error);
				});
		}


		function createPagination(section, totalPages) {
			let pageNumbers = '';
			if(totalPages > 1) {
				for (let i = 1; i <= totalPages; i++) {
					pageNumbers += `<li> <span onclick="getAllPosts('${section}', ${i})"> ${i} </span> </li>`;
				}
			}

			return pageNumbers;
		}

		function setCurrentPage(pageNo) {
			let pages = document.querySelectorAll('.pagination span');
			let pageArr = [];
			for(let i = 0; i < pages.length; i++) {
				pageArr[i+1] = pages[i];
			}

			for(let page of pageArr) {
				if(pageArr.indexOf(page) === pageNo) {
					page.style.borderBottom = '1px solid white';
				}
			}
		}

		function createPost(section, postsArr, index) {
			let post;

			switch(section) {
				case 'announcements':
					post = `
							<article class='announcement-post'>
								<div class='announcement-top'>
									<iconify-icon class='announcement-title-icon' icon='emojione-v1:speaker-low-volume'></iconify-icon>
									<h2>${postsArr[index]['title']}</h2>
								</div>
								<p class='announcement-desc'>${postsArr[index]['description']}</p>
								<div class='announcement-bottom'>
									<iconify-icon class="announcement-author-icon" icon='material-symbols:person'></iconify-icon>
									<p class="announcement-author">By ${postsArr[index]['author']}</p>

									<iconify-icon style="color: #2385B0;" icon="ic:round-access-time-filled"></iconify-icon>
									<p>${postsArr[index]['postDate']}</p>
								</div>
							</article>`;
					break;
				case 'news':
					post = `
							<article class='news-post'>
								<img src='../media/article.png' alt='News post'>
								<h2 class='news-title'>${postsArr[index]['title']}</h2>
								<p class='news-desc'>${postsArr[index]['description']}</p>
								<div class='news-bottom'>
									<iconify-icon style="color: #2385B0;" icon="ic:round-access-time-filled"></iconify-icon>
									<p class='news-postDate'>${postsArr[index]['postDate']}</p>
								</div>
							</article>`;
					break;
				default:
					return `Cannot create posts for the unknown section of ${section}`;
			}

			return post;
		}
		
	</script>
</body>
</html>