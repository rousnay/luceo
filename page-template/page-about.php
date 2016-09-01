<?php
/**
 * Template Name: About
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width page-about hard-coded">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="sections">
				<?php //the_content(); ?>
				<div class="row heading">
					<div class="col-xs-12">
						<h1 class="orange">INVESTMENTS</h1>
						<h1 class="yellow">FOR EVERYONE</h1>
						<p>Luceo Asset Management was created by Lighthouse Group (Lighthouse) to provide people all over the UK with a better way to invest for their future. At Luceo Asset Management, we believe high quality investment portfolios should be available to everyone, not just the very wealthy or those with financial kanowledge and past investment experience. We’re giving people from all walks of life access to investments made to suit their needs.</p>
					</div>
				</div><!-- .row -->

				<div class="row img-intro">
					<div class="img-intro-inner">
						<div class="col-xs-6 col-sm-3">
							<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Photo-1.png" alt="">
							<h4>PEOPLE FROM ALL WALKS OF LIFE: YOUNG OR OLD, IN WORK OR RETIRED</h4>
						</div>
						<div class="col-xs-6 col-sm-3">
							<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Photo-2.png" alt="">
							<h4>PEOPLE WHO REQUIRE EXPERT HELP TO REACH THEIR LIFESTYLE GOALS</h4>
						</div>
						<div class="col-xs-6 col-sm-3">
							<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Photo-3.png" alt="">
							<h4>PEOPLE WHO WANT TO TARGET A CONSISTENT LEVEL OF RETURN</h4>
						</div>
						<div class="col-xs-6 col-sm-3">
							<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Photo-4.png" alt="">
							<h4>PEOPLE LOOKING FOR A WELL DIVERSIFIED PORTFOLIO</h4>
						</div>
					</div>
				</div><!-- .row -->

				<div class="row invest-info">
					<div class="col-sm-6 invest-solution">
						<h3 class="solution yellow">A STRAIGHTFORWARD SOLUTION</h3>
						<p>For most people, assembling a ‘Do-It-Yourself’ investment portfolio can be time consuming and risky. Investing can be made more straightforward by engaging with a financial adviser and receiving a recommendation to use a Luceo Investment Fund which is designed to suit you.</p>

						<p>Each Luceo Investment fund is a portfolio made up of a diverse range of investment types. This give you instant access to a wide range of high quality funds managed by the most capable fund managers, all within a single portfolio. We explain this in more detail on our funds page.</p>
					</div>
					<div class="col-sm-6 one-solution">
						<h3 class="solution orenge">BENEFITS OF INVESTING</h3>
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6">
								<ul>
									<li>Targeting Long-Term Capital Growth</li>
									<li>Actively Managed to remain Risk Appropriate</li>
									<li>Diversification across Asset Classes</li>
									<li>Equity Exposure tailored to Suit</li>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-12 col-md-6">
								<ul>
									<li>Professional Fund Management</li>
									<li>Combining Active & Passive Investment schemes</li>
									<li>Investment Committee Oversight</li>
									<li>Delivered with expert Financial Advice</li>
								</ul>

							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<h3 class="sub-title orange">WE BELIEVE HIGH QUALITY INVESTMENT PORTFOLIOS SHOULD BE AVAILABLE TO EVERYONE, NOT JUST THE VERY WEALTHY, OR THOSE WITH FINANCIAL KANOWLEDGE AND PAST INVESTMENT EXPERIENCE. WE’RE GIVING PEOPLE FROM ALL WALKS OF LIFE ACCESS TO INVESTMENTS MADE TO SUIT THEIR NEEDS.</h3>
					</div>
					</div><!-- .row -->

					<div class="row inquiry">
						<div class="col-xs-12">
							<div class="invest-inquiry">
								<h2>For general enquires call: 0333 000 0330</h2>
								<a href="http://genuineimitation.co.uk/luceo/advice">Luceo Funds are only available via a financial adviser. Talk to your existing adviser, or to seek advice, click here.</a>
							</div>
						</div>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .section -->
		</main><!-- #main -->
	</div><!-- .container -->

	<?php get_footer(); ?>