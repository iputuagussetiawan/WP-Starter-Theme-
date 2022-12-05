<section class="services section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h3 class="section-title">
                <?php echo pll__('Our Services'); ?>
            </h3>
        </div>
        <div class="services__grid">
            <?php
            $testimonial = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'services',
                'post_status'   => 'publish',
                'orderby' => 'date',
                'order' => 'asc',
            ));
            if ($testimonial->have_posts()) :
                while ($testimonial->have_posts()) :
                    $testimonial->the_post();
                    get_template_part('template-parts/components/cards/card', 'service');
                endwhile;
                wp_reset_postdata();
            else :
                get_template_part('template-parts/data', 'not-found');
            endif;
            ?>
        </div>
    </div>
</section>