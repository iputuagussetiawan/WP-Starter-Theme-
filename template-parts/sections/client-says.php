<section class="client-says section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h3 class="section-title">
                <?php echo pll__('What our customer Say about us'); ?>
            </h3>
        </div>
    </div>
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php
                $testimonial = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_type' => 'testimonials',
                    'post_status'   => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($testimonial->have_posts()) :
                    while ($testimonial->have_posts()) :
                        $testimonial->the_post();
                ?>
                        <div class="swiper-slide">
                            <?php
                            get_template_part('template-parts/components/cards/card', 'one');
                            ?>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    get_template_part('template-parts/data', 'not-found');
                endif;
                ?>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-testimonial"></div>
        <div class="swiper-button-prev swiper-button-prev-testimonial">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2718 1.19692C10.7844 1.70949 10.7844 2.54051 10.2718 3.05308L4.63741 8.6875H18.5312C19.2561 8.6875 19.8438 9.27513 19.8438 10C19.8438 10.7249 19.2561 11.3125 18.5312 11.3125H4.63741L10.2718 16.9469C10.7844 17.4595 10.7844 18.2905 10.2718 18.8031C9.75926 19.3156 8.92824 19.3156 8.41567 18.8031L0.540672 10.9281C0.0281092 10.4155 0.0281092 9.58449 0.540672 9.07192L8.41567 1.19692C8.92824 0.684359 9.75926 0.684359 10.2718 1.19692Z" fill="white" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next-testimonial">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.72817 1.19692C9.21561 1.70949 9.21561 2.54051 9.72817 3.05308L15.3626 8.6875H1.46875C0.743877 8.6875 0.15625 9.27513 0.15625 10C0.15625 10.7249 0.743877 11.3125 1.46875 11.3125H15.3626L9.72817 16.9469C9.21561 17.4595 9.21561 18.2905 9.72817 18.8031C10.2407 19.3156 11.0718 19.3156 11.5843 18.8031L19.4593 10.9281C19.9719 10.4155 19.9719 9.58449 19.4593 9.07192L11.5843 1.19692C11.0718 0.684359 10.2407 0.684359 9.72817 1.19692Z" fill="white" />
            </svg>
        </div>
    </div>
</section>