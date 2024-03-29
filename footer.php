<?php
/* 
* The template for displaying the footer
*/
?>

<footer class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-4">
                <h5>Stay Connected</h5>
                <form>
                    <div class="form-row form-group">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">
                                Sign Up
                                <i class="fas fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Social Media Icons -->
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
                <i class="fab fa-instagram fa-2x"></i>
                <i class="fab fa-pinterest-square fa-2x"></i>
            </div>

            <div class="col-sm-4">
                <h5>Out Setting</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum eaque pariatur iusto, amet fuga dolore beatae aperiam nulla dolores quaerat architecto obcaecati totam cum culpa delectus qui dolorum quas ab?</p>
            </div>

            <div class="col-sm-4">
                <h5>Navigation</h5>
                <?php  wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'ul',
                    'container_class' => 'list-group',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
                <!-- <ul class="list-group">
                    <li class="list-group-item"><a href="blog.html">Blog</a></li>
                    <li class="list-group-item"><a href="contact.html">Contact Us</a></li>
                    <li class="list-group-item"><a href="">Privacy Policy</a></li>
                </ul> -->
            </div>

        </div>
    </footer>
 
    
    

    <?php wp_footer(); ?>
  </body>
</html>