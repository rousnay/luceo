<?php
/**
 * Template Name: Hard Coded
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="sections">
				<?php //the_content(); ?>


				<div id="editor-wrapper" class="hard-coded page-advice">
					<div class="row heading">
						<div class="col-xs-12">
							<h1 class="orange">UNDERSTANDING THE</h1>
							<h1 class="yellow">ADVICE PROCESS</h1>
							<p>If your adviser has recommended a Luceo Investment Fund, your money will be invested in a way that is designed to closely match your requirements. As you would expect from one of the UK’s most prestigious Financial Advice Firms, Lighthouse advisers have the knowledge and expertise to provide practical, informed advice on your financial affairs. With the Luceo funds on offer, you can feel comfortable that you’re gaining access to investments capable of delivering a result that is appropriate for you and which reflect their status as the “gold standard” of the Lighthouse Researched Solutions range of funds.</p>
						</div>
					</div><!-- .row -->


					<div class="row features">
						<div class="feature-area">
								<div id="advice-steps" class="owl-carousel">
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_1.png">

										<h3>STEP ONE</h3>
										<p>You‘ve talked to your adviser about your investment goals.</p>
									</div>
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_2.png">

										<h3>STEP TWO</h3>
										<p>Your adviser makes an assessment of your attitude towards risk.</p>
									</div>
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_3.png">

										<h3>STEP THREE</h3>
										<p>You are matched with THE LUCEO INVESTMENT FUND that suits you.</p>
									</div>
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_4.png">

										<h3>STEP FOUR</h3>
										<p>Your portfolio will be made up of lots of different funds.</p>
									</div>
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_5.png">


										<h3>STEP FIVE</h3>
										<p>It will be managed to give every chance of delivering the returns you expect.</p>
									</div>
									<div class="col-xs-12">
										<img src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/adivce_button_6.png">

										<h3>STEP SIX</h3>
										<p>Your portfolio will be monitored by expert fund managers.</p>
									</div>
								</div>

						</div>
					</div><!-- .row -->

					<div class="row invest-info">
						<div class="col-xs-12">
							<h3 class="sub-title orange">GOOD INVESTMENT INSIGHT AND FUND KNOWLEDGE CAN REALLY ADD VALUE, AND HELP BOOST THE PERFORMANCE OF YOUR PORTFOLIO. OUR INVESTMENT APPROACH IS KNOWN AS ‘ACTIVE MANAGEMENT’ AND IT CAN ADD SIGNIFICANTLY TO OVERALL RETURNS.</h3>
						</div>
						<div class="col-sm-6 invest-solution">
							<h3 class="yellow">WE LOOK TO MAXIMISE RETURNS</h3>
							<p>At Luceo Asset Management we never forget we’re in this business to help you achieve your financial goals. We make sure that your portfolio is capable of achieving its objectives, while staying closely aligned to your attitude to risk.</p>
							<h3 class="orange">DIVERSIFICATION IS KEY</h3>
							<p>Your investment managers look beyond traditional types of investment (equities, bonds and cash) in order to generate consistent returns from your investment and to manage the overall level of risk within your portfolio.</p>
							<h3 class="yellow">A PANEL OF EXPERTS</h3>
							<p>Luceo Asset Management has a dedicated investment committee that meets four times a year. It’s their job to monitor how Octopus, the company we have selected to manage the Luceo Investment Funds, is doing and to ensure that the funds are performing as expected.</p>

						</div>
						<div class="col-sm-6 info-chart">
							<h6>Depending on the level of risk and return you require, your Luceo Investment Fund could feature the following assets.</h6>
							<div class="chart">
								<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/manage_risk_chart.png" alt="">
							</div>
						</div>

					</div><!-- .row -->



					<div class="row fund-range">
						<div class="heading">
							<div class="col-xs-12 heading-inner">
								<h1><span class="orange">MANAGING </span><span class="yellow">THE RISK</span></h1>
							</div>
						</div>

						<div class="the-risk">
							<div class="col-xs-6">
								<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Photo-5.jpg" alt="">
							</div>
							<div class="col-xs-6">
								<h3 class="orange">WE CAN ASSIST WITH MANAGING YOUR RISK</h3>
								<p>These investments put your capital at risk and there is a chance you may not get back
									the full amount invested. Investment markets can be volatile and, as the value of markets goes up and down, the value of your portfolio will change too. The extent to which your investment may rise and fall will depend on the combination of different assets within your portfolio. It is therefore important to agree with your adviser the portfolio that accurately reflects your tolerance for risk and capacity for losses.</p>

									<h3 class="yellow">PORTFOLIO RETURN & GOALS</h3>
									<p>The past performance of an investment is not a reliable indicator of future results. Nor should you rely on any forecasts made about future returns. We can’t guarantee the level of capital gains or income generated by your investment.</p>

									<h3 class="black">ALL INVESTMENTS CARRY AN ELEMENT OF RISK, AND LUCEO INVESTMENT FUNDS ARE NO EXCEPTION. YOU SHOULD TALK TO YOUR FINANCIAL ADVISER IF YOU HAVE ANY QUESTIONS.</h3>

								</div>
							</div>
						</div><!-- .row -->












						<div class="row inquiry">
							<div class="col-xs-12">
								<div class="invest-inquiry">
									<h2>For general enquires call: 0333 000 0330</h2>
									<a href="http://genuineimitation.co.uk/luceo/advice">Luceo Funds are only available via a financial adviser. Talk to your existing adviser, or to seek advice, click here.</a>
								</div>
							</div>
						</div><!-- .row -->


					</div> <!-- #editor-wrapper -->


				<?php endwhile; // end of the loop. ?>
			</div><!-- .section -->
		</main><!-- #main -->
	</div><!-- .container -->

	<?php get_footer(); ?>