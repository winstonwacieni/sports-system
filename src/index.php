<?php
include_once("../includes/connection.php");
include_once("../includes/functions.php");
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Sports News</title>
	<link rel="stylesheet" href="../admin/assets/bootsrap5/bootsrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/lightbox.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic'
		rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700italic,700,400italic'
		rel='stylesheet' type='text/css'>

	<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
	<script src="js/js.js" type="text/javascript"></script>
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<!-- Include js plugin -->
	<script src="owl-carousel/owl.carousel.js"></script>
	<script src="js/countdown.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/lightbox.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
</head>
<body>
	<header>
		<div class="logo">
			<img src="img/logo no bg.png" alt="Sport Template">
			<h1>YOUTH, SPORTS, GENDER, CULTURE AND SOCIAL SERVICES</h1>
		</div>

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">About</a>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">Services</a></li>
						<li><a href="soon.html">Comming soon</a></li>
					</ul>
				</li>
				<li><a href="blog.html">Departments</a>
					<ul>
						<li><a href="blog-post.html">Blog Post</a></li>
					</ul>
				</li>
				<li><a href="#">Games</a>
					<ul>
						<li><a href="sport.html">Football</a></li>
						<li><a href="sport.html">Basketball</a></li>
						<li><a href="sport.html">Volleyball</a></li>
						<li><a href="sport.html">Rugby</a></li>
					</ul>
				</li>
				<li><a href="blog.html">News</a>
					<ul>
						<li><a href="blog.html">Blog Post</a></li>
					</ul>
				</li>
				<!--<li><a href="#">Games Store</a>
					<ul>
						<li><a href="modules.html">Modules</a></li>
						<li><a href="accordion.html">Accordion</a></li>
						<li><a href="blockquote.html">Blockquote</a></li>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="sliders.html">Sliders</a></li>
						<li><a href="icon-box.html">Icon Box</a></li>
						<li><a href="feature-icons.html">Feature Icons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="price-table.html">Pricing Tables</a></li>
						<li><a href="tabs.html">Tabs</a></li>
						<li><a href="tagline-boxes.html">Tagline Boxes</a></li>
						<li><a href="full-width.html">Typography</a></li>					
					</ul>				
				</li>-->
				<li><a href="contact.html">Contact</a></li>
				<li class="search">
					<form action="/search" method="get">
						<input type="search" name="q" placeholder="search...">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</li>
			</ul>
		</nav>

		<div class="nav-mobile">
			<ul class="nav-mobile-menu">
				<li><a href="index.html">Home</a></li>
				<li>
					<div>Pages <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">Services</a></li>
						<li><a href="soon.html">Comming soon</a></li>
					</ul>
				</li>
				<li>
					<div>Blog <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-post.html">Blog Post</a></li>
					</ul>
				</li>
				<li>
					<div>Shortcodes <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="modules.html">Modules</a></li>
						<li><a href="accordion.html">Accordion</a></li>
						<li><a href="blockquote.html">Blockquote</a></li>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="sliders.html">Sliders</a></li>
						<li><a href="icon-box.html">Icon Box</a></li>
						<li><a href="feature-icons.html">Feature Icons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="price-table.html">Pricing Tables</a></li>
						<li><a href="tabs.html">Tabs</a></li>
						<li><a href="tagline-boxes.html">Tagline Boxes</a></li>
						<li><a href="full-width.html">Typography</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<ul class="button-menu">
				<li>
					<i class="fa fa-bars"></i>
				</li>
			</ul>
		</div>
	</header>
	<section class="hero-section">
		<h1>Embu County Sports Updates</h1>
		<div class="clearfix-header-content">
			<h2>Welcome to the official sports website.</h2>
			<a href="#" class="button yellow-bg">Watch our video</a>
		</div>
	</section>

	<section class="sport-news">



		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Football</a></div>
		</div>
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Basketball</a></div>
		</div>
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Volleyball</a></div>
		</div>
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Rugby</a></div>
		</div>
	</section>

	<section class="bg-orange">
		<div class="m-12">

			<div class="m-06 bg-03">
				<div class="owl-carousel owl-theme" data-items="1" data-auto-play="true">

					<div class="module-content content">
						<a href="blog-post.html">
							<h1>The OG's Towards the Top</h1>
						</a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's
							Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>18th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Basketball</a></li>
							</ul>
						</div>
					</div>


				</div>
			</div>

			<div class="m-06 bg-orange">
				<div class="owl-carousel owl-theme" data-items="1" data-auto-play="true">

					<div class="item">
						<div class="m-12 bg-06">
							<div class="module-content content">
								<a href="blog-post.html">
									<h1>The Minister for Sports visits the Basketball court during a match</h1>
								</a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the
									Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>18th July 2023</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Basketball</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="m-12 bg-03">
							<div class="module-content content">
								<a href="blog-post.html">
									<h1>Coach Ben of Young Bloods facing a tough season as his team losses all matches
										played</h1>
								</a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the
									Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>18th July 2023</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Basketball</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="m-12 bg-02">
							<div class="module-content content">
								<a href="blog-post.html">
									<h1>Meet Mowzes, top-score of the season </h1>
								</a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the
									Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>15th July 2023</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Basketball</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>


					<div class="item">
						<div class="m-12 bg-04">
							<div class="module-content content">
								<a href="blog-post.html">
									<h1>Alexaner of Badgers volleyball team dives for a smash, sending back the ball
										tothe opponents. </h1>
								</a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the
									Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>15th July 2023</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Volleyball</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!--<div class="m-12">

			<div class="m-06 bg-01">
				<div class="module-content content">
					<a href="blog-post.html"><h1>Flames fotball club emerges winners after a tough victory of 1 goal against the Embu college </h1></a>
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>15th July 2023</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>		
				</div>							
			</div>		

			<div class="m-06 bg-04">
				<div class="module-content content">
					<a href="blog-post.html"><h1>Kangaru School's Basketball Team takes lead in the National Highschool Games </h1></a>
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>18th July 2023</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Highschool</a></li>
						</ul>
					</div>						
				</div>									
			</div>	

		</div> -->
	</section>

	<section>
		<div class="m-12" id="news-5">
			<?php
			// fetch all news
			  get_all_news();
			?>							 
		</div>
	</section>

	<section>
		<div class="m-12 bg-dark-blue">
			<div class="m-06 bg-05">
				<div class="module-content">
					<div class="title-default">
						<h2>Upcoming Games</h2>
					</div>
					<table class="table-scores">
						<tr class="t-header">
							<td colspan="2" class="score-teams-soon">Embu Sevens FInals</td>
						</tr>
						<tr>
							<td class="countdown-table-soon">
								<div class="countdown countdown-white" data-countdown="2023/07/27"></div>
							</td>
							<td class="score-tv"><a href="#"><i class="fa fa-ticket"></i></a></td>
						</tr>
						<tr class="t-header">
							<td colspan="2" class="score-teams-soon">Football Finals</td>
						</tr>
						<tr>
							<td class="countdown-table-soon">
								<div class="countdown countdown-white" data-countdown="2023/07/25"></div>
							</td>
							<td class="score-tv"><a href="#"><i class="fa fa-ticket"></i></a></td>
						</tr>
					</table>
				</div>
			</div>

			<div class="m-03">
				<div class="tagline-box t-box-dark-blue">
					<div class="module-content">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, pariatur praesentium eius
							maxime. Ex, veniam, natus, assumenda, vel praesentium dicta eligendi doloribus quibusdam rem
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet iure
							illum quisquam saepe autem cumque officiis!</p>
						<a href="#" class="button green-bg">Button</a>
					</div>
				</div>
			</div>


			<div class="m-03 bg-dark-blue">
				<div class="module-content">
					<div class="title-default">
						<h2>League Table</h2>
					</div>
					<table class="table-scores">
						<tr class="t-header">
							<td>Pos</td>
							<td>Team</td>
							<td>P</td>
							<td>Pts</td>
						</tr>
						<tr>
							<td>1</td>
							<td>E. Nights</td>
							<td>31</td>
							<td>70</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Old Guards</td>
							<td>25</td>
							<td>65</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Embu Uni</td>
							<td>23</td>
							<td>62</td>
						</tr>
						<tr>
							<td>4</td>
							<td>The Generals</td>
							<td>21</td>
							<td>59</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Mzuzi Elites</td>
							<td>19</td>
							<td>53</td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-10">
		<div class="m-12">
			<div class="module-content">

				<div class="title-default">
					<h2>The Grand Final</h2>
				</div>

				<div class="m-04">
					<div class="leftTeam">
						<img src="img/left-team.png" alt="" />
						<img src="img/left-team-logo.png" alt="" class="leftTeamLogo" />
					</div> <!-- End Left Team -->
				</div>

				<div class="m-04">
					<div class="soon-countdown">
						<ul>
							<li>Old Guards</li>
							<li>vs</li>
							<li>E. Nights</li>
						</ul>
						<div class="countdown-big countdown-white" data-countdown="2023/07/18"></div>
					</div>
				</div>

				<div class="m-04">
					<div class="rightTeam">
						<img src="img/right-team.png" alt="" />
						<img src="img/right-team-logo.png" alt="" class="rightTeamLogo" />
					</div> <!-- End Right Team -->
				</div>

			</div>
		</div>
	</section>

	<section class="updated-score bg-dark-blue">
		<!--<div class="m-06 bg-orange">						
			<div class="owl-carousel owl-theme" data-items="2" data-auto-play="true">
				<div class="item">				
					<div class="module-content content">							
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Basketball</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Volleyball</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Rugby</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Sports Updates</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>17th July 2023</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Sports Updates</a></li>
							</ul>
						</div>						
					</div>
				</div>																
			</div>
		</div>-->

		<div class=" score-table m-06 bg-dark-blue">
			<div class="score-table-content">

				<div class="title-default">
					<h2>Scores Table</h2>
				</div>

				<div class="tab-dark-blue">
					<div class="m-03">
						<ul class="vertical tab-nav click-tab">
							<li>
								<h4>Yesterday</h4>
							</li>
							<li>
								<h4>Today</h4>
							</li>
							<li>
								<h4>Tomorrow</h4>
							</li>
						</ul>
					</div>
					<div class="m-09">
						<div class="tab-content ">
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class=" score-table m-06 bg-dark-blue">
			<div class="score-table-content">
				<div class="title-default">
					<h2>Scores Table</h2>
				</div>

				<div class="tab-dark-blue">
					<div class="m-03">
						<ul class="vertical tab-nav click-tab">
							<li>
								<h4>Yesterday</h4>
							</li>
							<li>
								<h4>Today</h4>
							</li>
							<li>
								<h4>Tomorrow</h4>
							</li>
						</ul>
					</div>
					<div class="m-09">
						<div class="tab-content ">
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<footer class="clearfix">
		<div class="quicklinks">
			<div class="m-12">
				<div class="m-02">
					<div>
						<h4>Learn more</h4>
						<ul>
							<li><a href="#">Tour</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Pricing & Plans</a></li>
						</ul>
					</div>
				</div>
				<div class="m-02">
					<div>
						<h4>Support</h4>
						<ul>
							<li><a href="#">Terms of Service</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="m-02">
					<div>
						<h4>About</h4>
						<ul>
							<li><a href="#">Company</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="m-03">
				<div>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright ">
			<p class="text">@copyright 2023| <span class="middle-text">Embu County Government</span> |All Rights
				Reserved</p>

		</div>
	</footer>

	<script src="js/fluidvids.js"></script>
</body>

</html>