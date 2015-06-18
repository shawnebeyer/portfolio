<?php /*
	Template Name: Home
*/ 
 ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div id="home" class="content section homeSec" style="background-image: url('<?php the_field('home_background'); ?>'); ">
    	<div class="welcomeMessage">
    		<h1 class="animated fadeInLeft"><?php the_field('welcome_message_first'); ?></h1>
    		<h1 class="animatedFast fadeInLeft"><?php the_field('welcome_message_second'); ?></h1>
    		<h1 class="animatedFaster fadeInLeft"><?php the_field('welcome_message_third'); ?></h1>
    	</div>
        <div class="welcomeMessageRight">
            <h1 class="animatedAfter fadeInUp"><?php the_field('welcome_message'); ?></h1>
        </div>
    </div>
    <!--/.home -->
    <!-- .about -->
    <div id="about" class="content section about">
    <div class="sectionHeader">
        <h2><?php the_field('about_headline'); ?></h2>
        <h3>I’m here to make things look great & recognizable.</h3>
    </div>
    	<div class="aboutContainer flexboxRow">
            <div class="aboutLeft aboutHalf flexboxColumn">
                <div class="aboutLeftTop">
                     <?php $AboutSelfImage = get_field('about_section_self_photo'); ?>
                     <img class="aboutSelfImage" src="<?php echo $AboutSelfImage['sizes']['large'] ?>">
                </div>
                <div class="aboutLeftBottom">
                    <h4 class="nameAbout"><?php the_field('my_name_is_shawn'); ?></h4>
                    <p class="passions"><?php the_field('about_passions'); ?></p>
                </div>
            </div>
            <div class="aboutRight aboutHalf flexboxColumn">
                <div class="aboutRightTop">
                    <h4 class="aboutBlurb"><?php the_field('what_i_do'); ?></h4>
                </div>
                <div class="aboutRightSkills flexboxRow">
                    <div class="skills html">HTML5</div>
                    <div class="skills api">API</div>
                    <div class="skills jquery">jQuery</div>
                    <div class="skills javascript">Javascript</div>
                    <div class="skills css">CSS3</div>
                    <div class="skills git">Git</div>
                    <div class="skills responsive">Responsive</div>
                    <div class="skills sass">SASS</div>
                    <div class="skills flexbox">Flexbox</div>
                    <div class="skills wordpress">Wordpress</div>
                </div>
                <div class="aboutRightSecondBlurb">
                    <h4 class="aboutBlurb"><?php the_field('tools_i_use'); ?></h4>
                </div>
                <div class="aboutRightTechTools flexboxRow">
                    <div class="skills sublime">Sublime Text</div>
                    <div class="skills gulp">Gulp</div>
                    <div class="skills command">Command Line</div>
                    <div class="skills sketch">Sketch</div>
                    <div class="skills dev">Browser Dev Tools</div>
                    <div class="skills grid">Grid Systems</div>
                    <div class="skills pair">Pair Programming</div>
                </div>
                <div class="aboutRightBottom">
                    <?php $AboutSelfImage = get_field('about_section_working_image'); ?>
                    <img class="aboutOtherImage" src="<?php echo $AboutSelfImage['sizes']['medium'] ?>">
                </div>
            </div>
    	</div>
    </div>
    <!--/.about -->
    <!-- .work -->
    <div id="work" class="content section portfolio">
        <div class="sectionHeader portfolioSectionHeader">
        	<h2><?php the_field('portfolio_headline'); ?></h2>
    		<h3>Development & design is my whole life. Here are my most recent projects.</h3>
    	</div>
		  <?php 
		  	if(have_posts()) {
		  		while(have_posts()) {
		  			the_post();
		  		?>
		  			<!-- <div class="portfolioContainer flexboxRow"> -->
		  				<!-- //custom loop -->
		  				<?php                      //key           // Value'portfolio' is out slug
		  					$portfolioArgs = array('post_type' => 'portfolio');
							$portfolioQuery = new WP_Query($portfolioArgs);
							if($portfolioQuery->have_posts()) {
								while($portfolioQuery->have_posts()) {
									$portfolioQuery->the_post();
									?>
                                    <div class="portfolioContainer flexboxRow" style="background-image: url('<?php the_field('portfolio_piece_image'); ?>'); background-color:<?php the_field('portfolio_piece_background'); ?> ">
										<div class="portfolioPieceLeft">
											<h4 class="portfolioTitle"><?php the_title(); ?></h4>
                                            <?php while( has_sub_field('portfolio_piece_tech_used') ): ?>
                                                <p class="techUsed"><?php the_sub_field('tech_used'); ?></p>
                                            <?php endwhile; ?>
											<p class="portfolioPieceDesc"><?php the_field('portfolio_piece_description'); ?></p>
											<a class="portfolioPieceLink" href="<?php the_field('portfolio_piece_link'); ?>" target="_blank">VIEW LIVE</a>
										</div>
									</div>
									<?php
								} //End of while loop
								wp_reset_postdata();
							} //End of custom Query
		  				 ?>
		  			<!-- </div> -->
		  		<?php
		  		}
		  	}
		   ?>
    </div>
    <!--/.work -->
    <!-- .hire -->
    <div id="hire" class="content section hire">
        <div class="sectionHeader">
    	   <h2><?php the_field('hire_headline'); ?></h2>
           <h3>We should talk / text / email / collabo.</h3>
        </div>
        <div class="hireContainer flexboxRow">
            <div class="hireLeft" style="background-image: url('<?php the_field('hire_me_background'); ?>'); ">
                
            </div>
            <div class="hireRight flexboxColumn">
                <div class="hireRightUpper">
                    <h3 class="hireHeading"><?php the_field('hire_me_heading'); ?></h3>
                    <div class="contactInfoTop">
                        <div class="contactInfoTopBlurb">
                            <p class="contactMe">Contact Info</p>
                            <p class="contactMeDetails"><?php the_field('contact_me_details'); ?></p>
                        </div>
                    </div>
                    <div class="contactNumberandEmail">
                        <h6 class="contactMe"><?php the_field('phone_number'); ?></h6>
                        <a class="contactMe" href="mailto:hello@shawnebyer.com" target="_blank"><?php the_field('email'); ?></a>
                        <a class="contactMe twitter" href="http://twitter.com/shawnebeyer" target="_blank"><?php the_field('twitter'); ?></a>
                        <a class="contactMe github" href="http://github.com/shawnebeyer" target="_blank"><?php the_field('github'); ?></a>
                    </div>

                    <!-- <div class="contactForm"> -->
                        <!-- contact form 7 -->
                        <!-- <?php the_field('contact_form'); ?> -->
                    <!-- </div> -->
                </div>
                <div class="hireRightLower">
                    <p class="footerText">&copy shawn ebeyer 2015</p>
                </div>
            </div>
        </div>
    </div>
    <!--/.hire -->
  </div> <!-- /.container -->
</div> <!-- /.main -->
<!--end containerWrapper-->
<?php get_footer(); ?>