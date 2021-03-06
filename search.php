<?php get_header(); ?>
<!--================ Search page =================-->
<section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
                <?php
                $s=get_search_query();
                $args = array(
                    's' =>$s,
                    'post_type' => 'post',
                );
                // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    _e("<h2 style='font-weight:bold;color:#222'>Search Results for: ".get_query_var('s')."</h2>");
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();?>

                <div class="single-post mb-3 ">
                    <div class="blog_details">
                        <div href="<?php the_permalink(); ?>" class="row">
                            <div class="col-8">
                            <h2><?php the_title(); ?></h2>
                            <?php $excerpt = get_the_excerpt();
                            $excerpt = substr( $excerpt, 0, 150 ); // Only display first 260 characters of excerpt
                            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                            ?>
                            <p><?php echo $result."..."; ?></p>
                        
                        </div>
                            <div class="col-4">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                        
                        
                    </div>
               </div>

                <?php
                    }
                }else{ ?>
                    <div class="single-post mb-3 ">
                    <div class="blog_details">
                        <h2><?php echo esc_html('Nothing Found', 'buson'); ?></h2>
                        <p class="alert alert-danger">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
               </div>
            <?php }
            ?>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <!--Start search-->
                  <?php get_template_part('template-parts/aside/search'); ?>
                  <!--End search-->
                  
                  <!--Start Categories-->
                  <?php get_template_part('template-parts/aside/category'); ?>
                  <!--End Categories-->

                  <!--Start recntposts-->
                  <?php get_template_part('template-parts/aside/recentposts'); ?>
                  <!--End recntposts-->

                  <!--Start tagcloud-->
                  <?php get_template_part('template-parts/aside/tagcloud'); ?>
                  <!--End tagcloud-->

                  <!--Start instagram-->
                  <?php get_template_part('template-parts/aside/instagram'); ?>
                  <!--End instagram-->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Search page end =================-->

<?php get_footer(); ?>
