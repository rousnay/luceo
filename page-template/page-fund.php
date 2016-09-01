<?php
/**
 * Template Name: Fund
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width page-fund">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="sections">
				<?php //the_content(); ?>
				<div class="row heading">
					<div class="col-xs-12">
						<h1 class="orange">FIND AN INVESTMENT</h1>
						<h1 class="yellow">MADE TO SUIT YOU</h1>
						<p>It doesn’t matter how wealthy you are – everyone deserves access to high quality nancial advice and the best available investments. With Lighthouse and Octopus, you can feel con dent that you’re getting access to expertise in both these areas.  As you would expect from one of the UK’s leading providers of nancial advice, Lighthouse has the knowledge and expertise to provide practical, informed advice on your financial affairs.</p>
					</div>
				</div><!-- .row -->

				<div class="row features">
					<div class="col-sm-4">
						<h3 class="yellow">A STRAIGHTFORWARD SOLUTION</h3>
						<p>For most individual investors looking to ‘do it themselves’, assembling a well-diversi ed investment portfolio can be time consuming and expensive. But at Luceo Asset Management, by starting with the advice process and matching your recommendation with the best investment manager, we make the process straightforward.</p>
					</div>
					<div class="col-sm-4">
						<h3 class="orange">DIVERSIFIED INVESTMENTS</h3>
						<p>Your investment managers will build and oversee a diverse range of investment types, pooling them all within a single portfolio. This give you instant access to a wide range of high quality funds managed by the most capable fund managers. But you don’t pay management fees for several funds. Instead, you just pay for one.</p>
					</div>
					<div class="col-sm-4">
						<h3 class="yellow">ONGOING MANAGEMENT</h3>
						<p>Your investment managers don’t just build portfolios; they never stop working hard to make sure they keep performing. This means constantly monitoring investment markets, as well as extensively researching a vast number of different funds. You’ll be given regular updates on the performance of your portfolio so you can keep track of its progress.</p>
					</div>
				</div><!-- .row -->

				<div class="row invest-info">
					<div class="col-xs-12">
						<h3 class="sub-title">GOOD INVESTMENT INSIGHT AND FUND KNOWLEDGE CAN REALLY ADD VALUE, AND HELP BOOST THE PERFORMANCE OF YOUR PORTFOLIO. OUR INVESTMENT APPROACH IS KNOWN AS ‘ACTIVE MANAGEMENT’ AND IT CAN ADD SIGNIFICANTLY TO OVERALL RETURNS.</h3>
					</div>
					<div class="col-sm-6">
						<h3 class="solution">THE ‘ALL IN ONE’ SOLUTION</h3>
						<p>Your investment will be what’s known as a ‘multi manager’ portfolio, also known as a ‘fund of funds’. This just means that your investment manager will assemble a portfolio of the best funds to investment in, based on your investment objectives and the goals you discussed with your nancial adviser.</p>
						<div class="row">
							<div class="col-md-6">
								<ul>
									<li>Full Product Point</li>
									<li>Discover the next point</li>
									<li>Management Fact</li>
									<li>Great investment point</li>
								</ul>

							</div>
							<div class="col-md-6">
								<ul>
									<li>Full Product Point</li>
									<li>Discover the next point</li>
									<li>Management Fact</li>
									<li>Great investment point</li>
								</ul>

							</div>
						</div>
						<p>This approach means you feel con dent that your portfolio contains high quality investments and features many different types of assets. Each fund in your portfolio will be chosen for its own characteristics and how it ts within your overall portfolio (it’s like assembling a football team made up of the best players from all over the world).</p>

					</div>
					<div class="col-sm-6 info-chart">
						<div class="chart">
						<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Chart-risk.png" alt="">
						</div>
						<h3 class="invest-risk">PORTFOLIO INVESTMENT RISK & RETURN</h3>
						<p>Each Luceo Fund is formed from different combinations of funds which, when put together, are designed to create the right blend to suit your needs and appropriate level of risk.

							Depending on the level of risk and return you require, your Luceo Investment Fund could feature the following assets shown above. It is important to remember that the investment funds in this brochure are designed to achieve their returns over a period of at least five years.</p>

						</div>

					</div><!-- .row -->

					<div class="row fund-range">
						<div class="col-xs-12 heading">
							<h1><span class="orange">FUND </span><span class="yellow">RANGE</span></h1>
						</div>

						<div class="ranges">
							<div class="col-sm-4">
							<div class="ranges-item">
							<h1><span class="yellow">LUCEO</span><span class="orange questrial">4</span></h1>
								<h3>RISK 4 - FUND OBJECTIVES:</h3>
								<p>Predominantly investing in passive and active collective investment schemes (OEICs, unit trusts and exchange traded funds) and closed ended investment companies.</p>
								<h3 class="yellow">Equity Exposure < 55%.</h3>
								<div style="width: 100% " class="buttons medium orange capitalize"><a href="http://www.google.com">Download Factsheet</a></div>
								
							</div>
							</div>
							<div class="col-sm-4">
							<div class="ranges-item">
							<h1><span class="yellow">LUCEO</span><span class="orange questrial">5</span></h1>
								<h3>RISK 5 - FUND OBJECTIVES:</h3>
								<p>Suitable for individual investors seeking a well-diversified, professionally managed investment, but with global equity market exposure limited to no more than 70% of the total portfolio.</p>
								<h3 class="yellow">Equity Exposure < 70%.</h3>
								<div style="width: 100% " class="buttons medium orange capitalize"><a href="http://www.google.com">Download Factsheet</a></div>
								
							</div>
								
							</div>
							<div class="col-sm-4">
							<div class="ranges-item">
							<h1><span class="yellow">LUCEO</span><span class="orange questrial">6</span></h1>
								<h3>RISK 6 - FUND OBJECTIVES:</h3>
								<p>Investing in passive and active collective investment schemes & closed ended investment companies. Suitable for investors seeking a well-diversified, managed investment.</p>
								<h3 class="yellow">Equity Exposure < 85%.</h3>
								<div style="width: 100% " class="buttons medium orange capitalize"><a href="http://www.google.com">Download Factsheet</a></div>
								
							</div>
								
							</div>
						</div>
					</div>
					<div class="row inquiry">
						<div class="col-xs-12">
							<div class="invest-inquiry">
								<h2>For general enquires call: <span class="questrial">0333 000 0330</span></h2>
								<a href="http://genuineimitation.co.uk/luceo/advice">Luceo Funds are only available via a financial adviser. Talk to your existing adviser, or to seek advice, click here.</a>
							</div>
						</div>
					</div>


				<?php endwhile; // end of the loop. ?>
			</div><!-- .section -->
		</main><!-- #main -->
	</div><!-- .container -->

	<?php get_footer(); ?>