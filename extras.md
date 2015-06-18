<?php $image = get_field('home_section_image'); ?>
    	<img src="<?php echo $image['sizes']['large'] ?>">


        <?php while( has_sub_field('skills') ): ?>
            <p class="techSkills"><?php the_sub_field('tech_skills'); ?></p>
        <?php endwhile; ?>

        

ActionScriptAPICSSGitHTML5JavaScriptjQueryResponsiveSassWordPress
After EffectsBlenderBrowser Dev ToolsCommand LineGrid SystemsGulpIllustratorMaxon 4DPhotoshopPremiereSketchSublime Text


    	/******************* Background ********************/
    		
    		html { 
    			background-color: #fdfdfd;
    		}
    		
    		#Wrapper, #Content { 
    			background-color: #fdfdfd;
    		}
    		
    			
    		
    	/********************** Font | Family **********************/

    	 	body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"],
    		input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 400;
    		}
    		
    		#menu > ul > li > a, .action_button, #overlay-menu ul li a {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 400;
    		}
    		
    		#Subheader .title {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 400;
    		}
    		
    		h1, .text-logo #logo {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 300;
    		}
    		
    		h2 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 300;
    		}
    		
    		h3 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 300;
    		}
    		
    		h4 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 300;
    		}
    		
    		h5 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 700;
    		}
    		
    		h6 {
    					font-family: "Lato", Arial, Tahoma, sans-serif;
    			font-weight: 400;
    		}
    		
    		blockquote {
    					font-family: "Playfair Display", Arial, Tahoma, sans-serif;
    		}


    	/********************** Font | Size **********************/

    		
    	/* Body */

    		body {
    			font-size: 14px;
    			line-height: 22px;		
    		}	
    		#menu > ul > li > a, .action_button {	
    			font-size: 16px;
    		}
    		
    	/* Headings */

    		h1, #Subheader .title, .text-logo #logo { 
    			font-size: 25px;
    			line-height: 25px;	
    		}	
    		h2 { 
    			font-size: 42px;
    			line-height: 42px;	
    		}	
    		h3 {
    			font-size: 30px;
    			line-height: 32px;	
    		}	
    		h4 {
    			font-size: 22px;
    			line-height: 26px;	
    		}	
    		h5 {
    			font-size: 16px;
    			line-height: 21px;	
    		}	
    		h6 {		
    			font-size: 14px;
    			line-height: 21px;	
    		}
    		
    	/* Responsive */
    			
    					
    			@media only screen and (min-width: 768px) and (max-width: 959px){	
    				body {
    					font-size: 13px;		
    					line-height: 20px;		
    				}
    				#menu > ul > li > a {	
    					font-size: 14px;
    				}
    				
    				h1, #Subheader .title, .text-logo #logo { 
    					font-size: 23px;
    					line-height: 23px;	
    				}	
    				h2 { 
    					font-size: 38px;
    					line-height: 38px;	
    				}	
    				h3 {
    					font-size: 27px;
    					line-height: 29px;	
    				}	
    				h4 {
    					font-size: 20px;
    					line-height: 24px;	
    				}	
    				h5 {
    					font-size: 14px;
    					line-height: 18px;	
    				}	
    				h6 {		
    					font-size: 13px;
    					line-height: 19px;	
    				}
    				
    				blockquote { font-size: 15px;}
    				.the_content_wrapper ul, .the_content_wrapper ol { font-size: 14px; line-height: 19px; }
    				.faq .question .title { font-size: 14px; }
    				.pricing-box .plan-header h2 { font-size: 27px; line-height: 27px; }
    				.pricing-box .plan-header .price > span { font-size: 40px; line-height: 40px; }
    				.pricing-box .plan-header .price sup.currency { font-size: 18px; line-height: 18px; }
    				.pricing-box .plan-header .price sup.period { font-size: 14px; line-height: 14px;}
    				.offer .offer_li .desc_wrapper .title h3 { font-size: 32px; line-height: 32px; }
    				.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {  font-size: 32px; line-height: 32px; }
    				.counter .desc_wrapper .number-wrapper { font-size: 45px; line-height: 45px;}
    				.counter .desc_wrapper .title { font-size: 14px; line-height: 18px;}
    				.chart_box .chart .num { font-size: 45px; line-height: 45px; }
    				.trailer_box .desc h2 { font-size: 27px; line-height: 27px; }
    				.quick_fact .number { font-size: 80px; line-height: 80px;}
    			}
    			
    					
    			@media only screen and (min-width: 480px) and (max-width: 767px){
    				body {
    					font-size: 13px;		
    					line-height: 20px;		
    				}
    				#menu > ul > li > a {	
    					font-size: 13px;
    				}
    				
    				h1, #Subheader .title, .text-logo #logo { 
    					font-size: 20px;
    					line-height: 20px;	
    				}	
    				h2 { 
    					font-size: 34px;
    					line-height: 34px;	
    				}	
    				h3 {
    					font-size: 24px;
    					line-height: 26px;	
    				}	
    				h4 {
    					font-size: 18px;
    					line-height: 22px;	
    				}	
    				h5 {
    					font-size: 13px;
    					line-height: 17px;	
    				}	
    				h6 {		
    					font-size: 13px;
    					line-height: 18px;	
    				}
    				
    				blockquote { font-size: 14px;}
    				.the_content_wrapper ul, .the_content_wrapper ol { font-size: 13px; line-height: 16px; }
    				.faq .question .title { font-size: 13px; }
    				.pricing-box .plan-header h2 { font-size: 24px; line-height: 24px; }
    				.pricing-box .plan-header .price > span { font-size: 34px; line-height: 34px; }
    				.pricing-box .plan-header .price sup.currency { font-size: 16px; line-height: 16px; }
    				.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}
    				.offer .offer_li .desc_wrapper .title h3 { font-size: 28px; line-height: 28px; }
    				.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {  font-size: 28px; line-height: 28px; }
    				.counter .desc_wrapper .number-wrapper { font-size: 40px; line-height: 40px;}
    				.counter .desc_wrapper .title { font-size: 13px; line-height: 16px;}
    				.chart_box .chart .num { font-size: 40px; line-height: 40px; }
    				.trailer_box .desc h2 { font-size: 24px; line-height: 24px; }
    				.quick_fact .number { font-size: 70px; line-height: 70px;}
    			}
    			
    					
    			@media only screen and (max-width: 479px){
    				body {
    					font-size: 13px;		
    					line-height: 20px;		
    				}
    				#menu > ul > li > a {	
    					font-size: 13px;
    				}