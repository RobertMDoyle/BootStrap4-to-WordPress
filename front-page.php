<?php

    /*
    * The main template file
    */

?>

<?php get_header() ?>

    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- ACF VERSION-->
                <h3><?php the_field('welcome_section_title'); ?></h3>
                <img src="<?php the_field('section_title_image') ?>" alt="divider" class="w-25">
            </div>
        </div> 
        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-3">
                <!-- ACF VERSION-->
                <img src="<?php the_field('welcome_section_1_image') ?>" alt="Makeup Image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text"><?php the_field('welcome_section_1_text') ?></p>
                </div>
            </div>

            <div class="col-sm-3">
                <!-- NON ACF VERSION -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.jpg" alt="Candles" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text"><?php __('Spa Facilities', 'tranquilwp') ?></p>
                </div>
            </div>

            <div class="col-sm-3">
                <!-- NON ACF VERSION -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/retreat.jpg" alt="Retreat" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Take a Tour</p>
                </div>
            </div>
        </div>
    </div>


    <!-- LATEST OFFERS -->
    <div class="container-fluid text-center bg-dark py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Spa Offers</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
            </div>
        </div>

        <div class="row py-5">
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Family Swim Package<span class="font-weight-bold price">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great value for families or groups up to 12 people</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 People</li>
                        <li class="list-group-item font-italic">Private Sessions</li>
                        <li class="list-group-item font-italic">Swim Lessons also Available</li>
                    </ul> 
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        For the Bride<span class="font-weight-bold price">$40</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our wedding packages are perfect for your big day. We can cater for groups large or small</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Hair &amp; Makeup</li>
                        <li class="list-group-item font-italic">Groups of Any Size</li>
                        <li class="list-group-item font-italic">Champagne &amp; Cocktails Available</li>
                    </ul> 
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Weekend Pass<span class="font-weight-bold price">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Take full advantage of all our facilities we have to offer with our unlimited weekend pass</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Pool &amp; Sauna</li>
                        <li class="list-group-item font-italic">Full Use of Our Gym</li>
                        <li class="list-group-item font-italic">Includes 2 Treatments Per Person</li>
                    </ul> 
                </div>
            </div>
        </div> <!-- Row -->
    </div>  <!-- Container -->

    <!-- ABOUT US SECTION -->
    <div class="container-fluid py-5 text-center bg-light">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h3>About Us</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem commodi enim, suscipit officiis non quam! Quas tempore eos molestias exercitationem nostrum nemo, esse, nesciunt voluptas distinctio sunt blanditiis dolore modi?
                    Ducimus excepturi vitae accusamus itaque dolore, incidunt corporis, laborum nobis et ab reprehenderit amet nam dolores odit sunt delectus, blanditiis est architecto quaerat nulla nemo quo neque tempora. Consequatur, id.
                    Reiciendis, ab inventore ad itaque assumenda fugit dolore non autem veniam neque earum eveniet. Voluptate eveniet reprehenderit accusantium, animi veniam cum sit vel, quod voluptatem voluptas rem consequatur obcaecati praesentium!
                    Molestias vero quasi quas. Quae ipsa dolorem doloremque totam dolorum, velit illum consequuntur est reprehenderit magnam nobis reiciendis tempora. Reprehenderit eum corporis soluta natus ex laudantium nostrum sed iusto laborum.
                    Voluptatem ex tempore necessitatibus perspiciatis unde. Cum velit quia dolor sit error provident ab maiores autem nobis in eum repellat nostrum, voluptatem, itaque magnam saepe ex ad? Dolores, quis facilis!
                </p>
            </div>
        </div>
    </div>

    <!-- PRICE LIST SECTION -->
    <div class="container-fluid py-5 bg-dark">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class="text-light">Price List</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider-silver" class="pb-4 w-25">
            </div>
        </div> 
        <div class="row my-4">
            <div class="col-sm-8">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/massage.jpg" alt="massage picture">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Massages</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 2 <em>-$10</em></li>
                    <li class="list-group-item">Massage 3 <em>-$10</em></li>
                    <li class="list-group-item">Massage 4 <em>-$10</em></li>
                    <li class="list-group-item">Massage 5 <em>-$10</em></li>
                </ul>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm-4">
                <h4 class="title text-center">Facials</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Facials 1 <em>-$30</em></li>
                    <li class="list-group-item">Facials 2 <em>-$30</em></li>
                    <li class="list-group-item">Facials 3 <em>-$30</em></li>
                    <li class="list-group-item">Facials 4 <em>-$30</em></li>
                    <li class="list-group-item">Facials 5 <em>-$30</em></li>
                </ul>
            </div>
            <div class="col-sm-8">
                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facial.jpg" alt="facial picture">   
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm-8">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cosmetics.jpg" alt="cosmetics picture">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Hair &amp; Makeup</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Hair &amp; Makeup 1 <em>-$50</em></li>
                    <li class="list-group-item">Hair &amp; Makeup 2 <em>-$50</em></li>
                    <li class="list-group-item">Hair &amp; Makeup 3 <em>-$50</em></li>
                    <li class="list-group-item">Hair &amp; Makeup 4 <em>-$50</em></li>
                    <li class="list-group-item">Hair &amp; Makeup 5 <em>-$50</em></li>
                </ul>
            </div>
        </div>
    </div> <!-- Container -->

    <!-- Footer Section -->
    <?php get_footer() ?>