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
			background: rgba(53, 53, 53, 0.5);
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			display: flex;
			flex-flow: column nowrap;
			align-items: center;
			gap: 5px;
		}

		.announcement-post:nth-child(even) {
			background: rgba(112, 108, 108, 0.7);
		}

		.announcement-top {
			display: flex;
			flex-flow: row nowrap;
			width: 98%;
			gap: 20px;
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
			width: 98%; font-style: normal;
			font-weight: 400;
			font-size: 15px;
			margin-top: 5px;
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
			background: #292929;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			border-radius: 30px;
		}

		.news-post img {
			width: 100%;
			height: 50%;
			opacity: 0.75;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
			border-radius: 30px 30px 0px 0px;
		}

		.news-title {
			font-weight: 800;
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

		.news-postDate {
			font-weight: 300;
			font-size: 14px;
			margin: 26% auto 0 auto;
			text-align: right;
			width: 88%;
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
						if(section === 'news') {
							document.querySelector(`.${section}`).appendChild(createNews(postList['posts'], post));
						} else if (section === 'announcements') {
							document.querySelector(`.${section}`).appendChild(createAnnouncement(postList['posts'], post));
						}
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

		function createPost(section) {
			let post;

			switch(section) {
				case 'announcements':
					post = ``;
					break;
				case 'news':
					post = ``;
					break;
				default:
					return `Cannot create posts for the unknown section of ${section}`;
			}

			return post;
		}

		function createAnnouncement(postList, post) {
			let announcementPost = document.createElement('article');
			announcementPost.className = 'announcement-post';

			let announcementTop = document.createElement('div');
			announcementTop.className = 'announcement-top';

			let announcementTitle = document.createElement('h2');
			announcementTitle.className = 'announcement-title';
			announcementTitle.innerText = postList[post].title;

			let announcementDesc = document.createElement('p');
			announcementDesc.className = 'announcement-desc';
			announcementDesc.innerText = postList[post].description;

			let announcementBottom = document.createElement('div');
			announcementBottom.className = 'announcement-bottom';

			let announcementAuthor = document.createElement('p');
			announcementAuthor.className = 'announcement-author';
			announcementAuthor.innerText = postList[post].author;

			let announcementDate = document.createElement('p');
			announcementDate.className = 'announcement-date';
			announcementDate.innerText = postList[post].postDate;

			announcementTop.appendChild(announcementTitle);

			announcementBottom.appendChild(announcementAuthor);
			announcementBottom.appendChild(announcementDate);

			announcementPost.appendChild(announcementTop);
			announcementPost.appendChild(announcementDesc);
			announcementPost.appendChild(announcementBottom);

			return announcementPost;
		}

		function createNews(postList, post) {
			let newsPost = document.createElement('article');
			newsPost.className = 'news-post';

			let newsImage = document.createElement('img');
			newsImage.src = '../media/article.png';
			newsImage.alt = 'News post title inserted here';

			let newsTitle = document.createElement('h2');
			newsTitle.className = 'news-title';
			newsTitle.innerText = postList[post].title;

			let newsDesc = document.createElement('p');
			newsDesc.className = 'news-desc';
			newsDesc.innerText = postList[post].description;

			let newsDate = document.createElement('p');
			newsDate.className = 'news-postDate';
			newsDate.innerText = postList[post].postDate;

			newsPost.appendChild(newsImage);
			newsPost.appendChild(newsTitle);
			newsPost.appendChild(newsDesc);
			newsPost.appendChild(newsDate);

			return newsPost;
		}
	</script>
</body>
</html>