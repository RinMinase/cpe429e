<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/style.css">

		<style type="text/css">
			section.content p {
				font-family: arial;
				text-align: justify;
				width: 95%;
			}
		</style>

		<title>Home</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Welcome!!</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><a class="active">HOME</a></li>
					<li><?php echo anchor('profile', 'PROFILE')?></li>
					<li><?php echo anchor('sched', 'CLASS SCHEDULE')?></li>
					<li><?php echo anchor('registration', 'REGISTRATION')?></li>
				</ul>
			</nav>

			<section class="body">
				<section class="content">
					<p>
						Konnichiwa!!
					</p>

					<p>
						My name is Kristian Daniel S. Alunan. I am currently twenty-one years of age right now. I am currently enrolled in the University of San Carlos, located in Nasipit, Talamban, Cebu City. I am now studying up Bachelor of Science in Computer Engineering majoring in Software Engineering.
					</p>

					<p>
						I like programming because of the power or the capability of a developer or a programmer holds. One anime character once said, "Making an impossible task, possible, is a programmer's job" (Ryuunosuke A., Sakurasou no Pet na Kanojo). I like programming because whenever I'm given with a repetitive task at hand, I usually make some ways to make myself exert lesser effort in doing the next sets of repetitions, I sometimes create small snippets of code to be able to make that certain task, faster, more efficient, less effort done, somewhat automated, and perhaps better than before.
					</p>

					<p>
						Although this site does not totally reflect it, I myself, just like on how I like anime, consider this a one of my greatest pastimes even until now. The anime I watch is something that is usually less mainstream or sometimes not mainstream at all, I as am usually not fond with the mainstream ones. I usually watch romance-comedy or romance-drama themed anime. These types of anime are usually the less likely watched and are not usually the ones.
					</p>

					<p>
						I also love playing mahjong (pronounced as MAHH-JONG). I got into playing this tile / board game from the anime Saki. I only played a few times in reality, and a lot of times from the internet. I don't play this for the money, or as they say, gambling; I only play this game for the fun and excitement in it as I draw and drop the tiles and while also winning the game. There was a time when I wanted to have my own set of tiles but figured not to when I saw its price up close, as the ones with good quality costs a fortune for me.
					</p>

					<p>
						Although my website looks extremely bleak, I still welcome you to my humble website. Feel free to browse, or look through some pages of my simple website. Its contents would include a welcome page, or this page respectively. It also has my profile containing a very tiny description of what I really am. It contains a schedule of my classes for the academic school year of 2016 - 2017. And ultimately it also contains my activities for the subject ComE 429E. I hope you will enjoy a bit of my simple website.
					</p>

					<p>
						A little quote before you leave this page...
					</p>

					<p>
						<em>
							"I am currently searching on what I really am. Therefore, I am still searching for myself"
						</em>

						<br>

						-Glenville Maturan
					</p>

					<p>
						<strong>
							:: Slice of Choi ::
						</strong>
					</p>
				</section>


				<?php $this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>
	</body>
</html>