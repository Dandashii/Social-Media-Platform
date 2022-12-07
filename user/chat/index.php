<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
	<link rel="stylesheet" href="/styling/main.css" type="text/css">
	<link rel="stylesheet" href="../../styling/chat.css">
	<title>Chat page</title>
</head>
<body>
	<nav>
	</nav>

	<main>
		<div class="section-nav">
			<button class="section-btn current">CHAT</button>
		</div>

		<section class="recent-chat">
			<div class="recent-chat-top-section">
				<form class="recent-chat-search">
					<div class="search-icon">
						<iconify-icon icon="akar-icons:search"></iconify-icon>
					</div>
					<input type="text" name="search-recentChat" id="search-recentChat" placeholder="Enter the name of a friend here ...">
				</form>
				<h2 class="recent-chat-title">RECENT CHAT</h2>
				<button class="new-chat" type="button">
					<iconify-icon icon="material-symbols:chat-outline-rounded"></iconify-icon>
					NEW CHAT
				</button>
			</div>
			<div class="chat-list">
				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>

				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>

				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>

				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>

				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>
				<figure class="recent-chat-friend">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<figcaption class="friend-last-msg">I informed via email to attend the 2020 grad party ....</figcaption>
				</figure>
			</div>
		</section>
		<section class="chat-area-container">
			<div class="chat-area-top-section">
				<div class="chat-recipient">
					<div class="friend-profile-pic">
						<img src="../../media/profile.png" alt="Friend Profile Picture">
						<div class="friend-profile-status"></div>
					</div>
					<h3 class="chat-recipient-title">MOHAMMAD ALDANDASHI</h3>
				</div>

				<div class="chat-options">
					<iconify-icon icon="ph:phone-fill"></iconify-icon>
					<iconify-icon icon="ph:video-camera-fill"></iconify-icon>
					<iconify-icon icon="material-symbols:settings-rounded"></iconify-icon>
				</div>
			</div>

			<div class="chat-area">
				<div class="message-received message">
					<img src="../../media/profile.png" alt="Friend Profile Picture">
					<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
				</div>
				<div class="message-sent message">
					<div class="message-container">
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
					</div>
					<img src="../../media/profile.png" alt="Friend Profile Picture">
				</div>

				<div class="message-received message">
					<img src="../../media/profile.png" alt="Friend Profile Picture">
					<div class="message-container">
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>
						<p class="message-content">What do you mean that you are unable to deliver the project by the deadline? If you dont abide by the deadline given to you, you will be suspended!</p>

					</div>
				</div>
			</div>

			<form class="chat-area-bottom-section">
				<input type="text" class="chat-input" name="chat-input" id="chat-input" placeholder="TYPE YOUR MESSAGE HERE ...">
				<iconify-icon class="emojis" icon="iconoir:emoji"></iconify-icon>
				<iconify-icon icon="gg:attachment"></iconify-icon>
				<div class="send-icon">
					<iconify-icon icon="material-symbols:send-outline-rounded"></iconify-icon>
				</div>
			</form>
		</section>
	</main>

	<script src="/scripts/main.js" type="text/javascript"></script>
</body>
</html>