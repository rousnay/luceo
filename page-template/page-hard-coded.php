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



				<div id="editor-wrapper" class="hard-coded page-board">
					<div class="row heading">
						<div class="col-xs-12">
							<h1 class="orange">THE LUCEO BOARD</h1>
							<h1 class="yellow">AND OFFICERS</h1>
							<p>Intro to the board or overview here – around 3 lines of text here please. Intro to the board or overview here – around 3 lines of text here please. Intro to the board or overview here – around 3 lines of text here please. Intro to the board or overview here – around 3 lines of text here please.</p>
						</div>
					</div><!-- .row -->



					<div class="row fund-range">
						<div class="ranges">
							<div class="col-xs-6">
								<div class="ranges-item">
									<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Lighthouse_MalcolmStreatfield.jpg" alt="">
									<h3>MALCOLM STREATFIELD</h3>
									<p>Malcolm Streatfield was appointed Chief Executive of Lighthouse Group plc in January 2003. He has been involved in financial services since 1976 and was elected to the council of APFA (Association of Professional Financial Advisers) in June 2002. In June 2008, Malcolm was appointed to the Customer Impact Panel of the ABI (Association of British Insurers) and from February 2009 to February 2015 was a member of the Financial Services Practitioner Panel. He joined Lighthouse in April 2002, following the acquisition of BWA Group where he was Chief Executive.</p>
								</div>
							</div>

							<div class="col-xs-6">
								<div class="ranges-item">
									<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Lighthouse_PeterSmith.jpg" alt="">
									<h3>PETER SMITH</h3>
									<p>Peter is a fellow of the Institute of Chartered Accountants in England and Wales and was a corporate finance and assurance partner with KPMG. He has considerable experience of the UK financial services sector, both from an assurance and corporate advisory capacity and more latterly as an executive director. Peter’s responsibilities include Finance, Treasury, Legal and Company Secretarial matters, as well as strategic initiatives.</p>
								</div>
							</div>

							<div class="col-xs-6">
								<div class="ranges-item">
									<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Lighthouse_FayGoddard.jpg" alt="">
									<h3>MIKE ACHILLES</h3>
									<p>BIO HERE PLEASE Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
								</div>
							</div>

							<div class="col-xs-6">
								<div class="ranges-item">
									<img class="responsive" src="http://genuineimitation.co.uk/luceo/wp-content/uploads/2016/08/Lighthouse_KenPaterson.jpg" alt="">
									<h3>KEN PATERSON</h3>
									<p>Ken was appointed to the Board as Group Compliance and Risk Director on 12 February 2014. He has more than 20 years’ experience in senior compliance, risk and regulatory roles within the UK financials services sector, encompassing regulatory bodies, life companies and advisory businesses. Ken joined Lighthouse in August 2012 as Group Compliance Director for the Group’s regulated businesses and has contributed fully as part of the management team since that date.</p>
								</div>
							</div>
						</div>
					</div>



					<div class="row inquiry">
						<div class="col-xs-12">
							<div class="invest-inquiry">
								<h2>For general enquires call: 0333 000 0330</h2>
								<a href="http://genuineimitation.co.uk/luceo/advice">Luceo Funds are only available via a financial adviser. Talk to your existing adviser, or to seek advice, click here.</a>
							</div>
						</div>
					</div>
				</div>

























				

			<?php endwhile; // end of the loop. ?>
		</div><!-- .section -->
	</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>