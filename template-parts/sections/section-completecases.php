<div class="completed-cases section-padding3">
    <div class="container">
        <div class="row">
            <!-- slider Heading -->
            <div class="col-xl-4 col-lg-4 col-md-8">
                <div class="single-cases-info mb-30">
                    <h3>Completed Cases</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                        quUt enim ad minim veniam.
                        quis nostrud exercitation ullamco laboris 
                        nierci si ut.</p>
                    <a href="gallery.html" class="border-btn border-btn2">See more</a>
                </div>
            </div>
            <!-- OwL -->
            <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                <div class=" completed-active owl-carousel"> 
                    <?php
                    $args = array(
                        'post_type' => 'CompleteCases',
                        'posts_per_page' => 3,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post();?>
                    <div class="single-cases-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <!-- img hover caption -->
                        <div class="single-cases-cap">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                            <span><?php echo get_field('categories'); ?></span>
                        </div>
                    </div>
                    <?php } wp_reset_postdata();?>
                </div>
                
            </div>
        </div>
    </div>
</div>