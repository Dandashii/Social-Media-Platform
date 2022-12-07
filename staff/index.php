<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/styling/main.css" type="text/css">
	<title>Staff page</title>
	<style>
		.staff-container {
			display: flex;
			flex-flow: row wrap;
			justify-content: space-between;
			margin: 50px auto;
			width: 95%;
			gap: 50px;
		}

		.staff {
			width: 360px;
			height: 430px;
			background: #161616;
			border: 1px solid #404040;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			border-radius: 50px;
			text-align: center;
		}

		.staff-pic-container {
			width: 100px;
			height: 100px;
			margin: 20px auto;
			position: relative;
			border-radius: 50%;
		}

		.staff-profile-pic {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border: 1px solid #FFFFFF;
			filter: brightness(50%);
			border-radius: inherit;
		}

		.staff-profile-status {
			height: 15px;
			width: 15px;
			background: #127929;
			border-radius: inherit;
			position: absolute;
			top: 10px;
			right: 5px;
		}

		.staff-name {
			font-weight: 700;
			font-size: 22px;
			margin-bottom: 22px;
		}

		.staff-position {
			font-weight: 300;
			font-size: 18px;
		}

		.staff-edu {
			display: flex;
			flex-flow: row nowrap;
			justify-content: center;
			gap: 15px;
		}

		.staff-button {
			background: none;
			display: flex;
			flex-flow: row nowrap;
			align-items: center;
			gap: 4px;
			width: fit-content;
			height: 35px;
			border: 1px solid #AEAEAE;
			color: white;
			font-weight: 500;
			font-size: 12px;
		}

		.staff-office {
			width: 90px;
			gap: 8px;
		}

		.staff-edu iconify-icon {
			font-size: 20px;
		}

		.staff-info-container {
			width: 310px;
			height: 44px;
			margin: 25px auto;
			background: #252525;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			display: flex;
			flex-flow: row nowrap;
			align-items: center;
		}

		.staff-email-icon, .staff-phone-icon {
			background: black;
			height: 100%;
			width: 15%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.staff-email-icon iconify-icon {
			font-size: 25px;
		}

		.staff-phone-icon iconify-icon {
			font-size: 22px;
		}

		.staff-email, .staff-phone {
			margin-left: 8px;
			font-weight: 500;
			font-size: 14px;
		}

		.search-sort-container {
			justify-content: center;
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
				<li><a href="../index.php"><iconify-icon class="nav-icons" icon="ant-design:home-outlined"></iconify-icon><span>HOME</span></a></li>
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
			<button class="section-btn current">STAFF</button>
		</div>

		<div class="search-sort-container">
			<form class="search-container">
				<div class="search-icon">
					<iconify-icon class="header-icon" icon="akar-icons:search"></iconify-icon>
				</div>
				<input type="text" name="search" id="search" placeholder="Type the name of staff member here...">
			</form>
		</div>

		<section class="staff-container">
			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
			</div>

			<div class="staff">
				<div class="staff-pic-container">
					<img class="staff-profile-pic" src="../media/profile.png" alt="Profile Picture">
					<div class="staff-profile-status"></div>
				</div>
				<h2 class="staff-name">MOHAMMAD ALDANDASHI</h2>
				<p class="staff-position">SCHOOL DIRECTOR</p>

				<div class="staff-edu">
					<button class="staff-timetable staff-button" type="button">
						<iconify-icon icon="uil:schedule"></iconify-icon>
						TIMETABLE
					</button>
					<button class="staff-office staff-button" type="button">
						<iconify-icon icon="ic:round-work-outline"></iconify-icon>
						CT 000
					</button>
				</div>

				<div class="staff-info-container">
					<div class="staff-email-icon">
						<iconify-icon icon="ic:outline-email"></iconify-icon>
					</div>
					<p class="staff-email">18700426@emu.edu.tr</p>
				</div>

				<div class="staff-info-container">
					<div class="staff-phone-icon">
						<iconify-icon icon="bi:telephone"></iconify-icon>
					</div>
					<p class="staff-phone">+90 123 456 78 91</p>
				</div>
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
	<script src="../icons/iconify-icon/iconify-icon.min.js"></script>
	<script src="/scripts/main.js" type="text/javascript"></script>
</body>
</html>