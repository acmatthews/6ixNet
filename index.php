<?php

    $lanIp = gethostbyname('lan.6ixnet.com');
    $mobydickip = gethostbyname('mobydick.6ixnet.com');
    $yourIp = $_SERVER['REMOTE_ADDR'];

	$links = [
		['href' => 'https://stats.uptimerobot.com/DQovJHoJnM', 'text' => '6ixNet Status Page'],
		['href' => 'https://discord.gg/awP5dv9yTN', 'text' => '6ixFlix on Discord'],

	];

	

?>
<!doctype html>
<html lang="en">
	<head>
		<title>6ixnet.com</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row header">
				<img src="images/6ixNetlogo.png" />
			</div>
			<div class="row">
				<div class="left">
				Welcome to 6ixNet. Please see menu of options below.
				<br><br>
				<h2>Tools</h2>
				
				Your IP Address is: <?=$yourIp;?>
				<br>
				lan.6ixnet.com IP Address is: <?=$lanIp;?>
				<br>
				
				<br><br>
					<h2>Links</h2>
					<ul>
						<?php foreach ($links as $link): ?>
						<li>
							<a href="<?=$link['href']?>" target='blank'><?=$link['text']?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div>
			<div class="row footer">
				<div class="full">
					&copy; 6ixNet.com,  <?php echo date("Y"); ?>
				</div>
			</div>
			<style>
				body {
					padding: 20px;
					background-color: #f7f7f9;
					font-family: 'Open Sans', sans-serif;
				}
				h2 {
					margin: 0 0 20px 0;
					font-weight: 400;
				}
				img {
					max-width: 100%;
					max-height: 50px;
				}
				.container { 
					margin: 0 auto;
					max-width: 1280px;
				 }
				 .row {
				 	padding: 20px;
				 	display: flex;
				 }
				 .left {
				 	width: 50%;
				 }
				 .right {
				 	width: 50%;
				 }
				 .full {
				 	width: 100%;
				 }
				 iframe {
				 	width: 100%;
				 	height: 500px;
				 	margin-bottom: 20px;
				 }
				 iframe:last-of-type {
				 	margin-bottom: 0;
				 }
				.header, .footer {
					background-color: #23633c;
					color: white;
				}
				.footer {
					text-align: right;
				}

				/* for your mobile devices, yo */
				@media screen and (max-width: 550px) {
					body {
						padding: 10px;
					}
					.row {
						display: block;
						padding: 10px;
					}
					.left, .right {
						width: 100%;
					}
					.header {
					    text-align: center;
					}
					.header img {
					    max-width: 30%;
					}
				}
			</style>
	</body>
</html>
