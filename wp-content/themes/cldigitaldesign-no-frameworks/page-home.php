<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

<section id="banner">
        <div class="banner" data-type="background" data-speed="5">
            <div class="banner-items">
                <h1 class="headline">CL Digital Design</h1>
            
                <span class="tagline">Web Design and Development</span>
                <a class="button" href="#expertise">tell me more</a>
            </div>
        </div><!--/.banner-->            
    </section><!--/#banner-->
    
    <section id="expertise">
       <div class="expertise-header col">
            <h2>My Expertise</h2>
            <p>Producing high-quality websites and exceptional user experience.</p>
        </div>        
        <div class="row">   		
            <div class="primary col">
                <i class="fa fa-diamond"></i>
                <h3>Website Design</h3>
                <p>Our approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
            </div><!--/.primary-->

            <div class="secondary col">
                <i class="fa fa-wordpress" aria-hidden="true"></i>               
                <h3>Wordpress Development</h3>
                <p>Wordpress CMS is a user-friendly administrative area allowing you to easily edit your website's content.</p>
            </div><!--/.secondary-->

            <div class="tertiary col">
                <i class="fa fa-code"></i>
                <h3>Modern Technologies</h3>
                <p>I have knowledge of multiple fields such as HTML5, CSS3, Javascript, Jquery and PHP. These allow me to work on a project producing a more cohesive experience for users.</p>
            </div><!--/.tertiary-->
        </div><!--/.row-->
	</section><!--/#expertise-->
	
	<section id="work">
        <h2>My Work</h2>

        <div class="row">   		
            <div class="primary col">
                <h3>Random Pain Relief Exercise Generator</h3>
                <ul>
                    <li>REACTJS, CSS3</li>
                </ul>
                <p>This app uses exercises from the Egoscue Method which borrows heavily from Yoga. It is an effective way to re-align the body and reduce all sorts of pain. If you sit constantly and are experiencing pain, try a random exercise every hour.</p>
                <a class="button" href="https://charles-loehle.github.io/Random-Pain-Relief-Exercise-Generator/#/" >visit website</a>
            </div><!--/.primary col-->
            
            <div class="secondary col">             
                <div class="wrapper"> 
                    <a href="https://charles-loehle.github.io/Random-Pain-Relief-Exercise-Generator/#/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Yoga_app_screenshot.jpg" alt="">
                    </a>
                    <a href="https://charles-loehle.github.io/Random-Pain-Relief-Exercise-Generator/#/">
                    <div class="overlay">
                        <div class="content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div><!--/.secondary col-->
            
        </div><!--/.row-->
        <hr> 

        <div class="row">   		
            <div class="primary col">
                <h3>Blog App</h3>
                <ul>
                    <li>REACTJS, REDUX, JSON WEB TOKENS, BOOTSTRAP</li>
                </ul>
                <p>This app is a MERN stack blog with user registration and login/logout using json web tokens for authentication. A user can create a profile, create blog posts, comment and like/unlike another users's blog post.</p>
                <a class="button" href="https://charles-mern-blog.herokuapp.com/profiles" >visit website</a>
            </div><!--/.primary col-->
            
            <div class="secondary col">             
                <div class="wrapper"> 
                    <a href="https://charles-mern-blog.herokuapp.com/profiles">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog_app_screenshot.jpg" alt="">
                    </a>
                    <a href="https://charles-mern-blog.herokuapp.com/profiles">
                    <div class="overlay">
                        <div class="content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div><!--/.secondary col-->
            
        </div><!--/.row-->
        <hr>
		
		<div class="row">   		
            <div class="primary col">
                <h3>George Martin, Emotion Code practitioner</h3>
                <ul>
                    <li>WORDPRESS THEME CUSTOMIZATION, HTML5, CSS3, BOOTSTRAP</li>
                </ul>
                <p>The Emotion Code technique helps release trapped emotions, making conditions right to heal physically and emotionally.</p>
                <a class="button" href="http://my-spirit-healing.com/" >visit website</a>
            </div><!--/.primary col-->
            
            <div class="secondary col">             
                <div class="wrapper"> 
                    <a href="http://my-spirit-healing.com/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mySpiritHealingPhotoshop.jpg" alt="">
                    </a>
                    <a href="http://my-spirit-healing.com/">
                    <div class="overlay">
                        <div class="content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div><!--/.secondary col-->
            
        </div><!--/.row-->
        <hr>        
		
        <div class="row">   		
            <div class="primary col">
                <h3>Exercise Tracker</h3>
                <ul>
                    <li>REACTJS, REACT CONTEXT API, JSON WEB TOKENS, BOOTSTRAP</li>
                </ul>
                <p>A MERN stack application that allows a logged in user to log their exercising including sets, reps and duration. Authentication with json web tokens.</p>
                <a class="button" href="https://exercise-tracker1965.herokuapp.com/login" >visit website</a>
            </div><!--/.primary col-->
            
            <div class="secondary col">             
                <div class="wrapper"> 
                    <a href="https://exercise-tracker1965.herokuapp.com/login">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/exercise_tracker_app.jpg" alt="">
                    </a>
                    <a href="https://exercise-tracker1965.herokuapp.com/login">
                    <div class="overlay">
                        <div class="content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div><!--/.secondary col-->
            
        </div><!--/.row-->
   
	</section><!--/#work-->

    <section id="contact">
        <div class="row">   		
                <div class="primary col">
                    <h3>Websites designed with HTML, CSS, JavaScript, including React.js </h3>
                    <a class="button" href="mailto:charlesloehle@gmail.com" >Get Started</a>
                </div>
        </div>
    </section>
	
	<!--------CONTACT FORM--------------------->
<!--     <section id="contact-form">
      <h2>Contact Us</h2>
	  
       <div class="row"> -->
        
<!--         <form id="ajax-contact" method="post" action="">
            <div class="field-name">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="field-email">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="field-message">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required><? //php if(isset($message)) echo htmlspecialchars($_POST['message'//]); ?></textarea>
            </div>

            <div class="field-button">
                <button type="submit" class="button">Send</button>
				<div id="form-messages"></div>
            </div>
        </form> -->
<!--         </div>
    </section><!--/#contact-form-->

<?php get_footer(); ?>
