<?php
/*
*  Template Name: Contact Us
*/

get_header();
?>

<!-- CONTACT US SECTION-->
<div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3><?php the_title(); ?></h3>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/divider-purple.png" alt="divider" class="w-25">
            </div>
        </div><!--Row-->

        <div class="row">
            <div class="col-sm-12">
                <?php echo do_shortcode('[contact-form-7 html_class="text-left" id="56" title="Contact form 1"]'); ?>
                <!-- <form class="text-left">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message...</button>
                </form> -->
            </div>
        </div>
    </div>



<?php get_footer();  ?>