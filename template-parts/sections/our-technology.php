<section class="our-technology">
    <div class="section-title-wrapper text-center" data-aos="fade-up" data-aos-delay="100">
        <h3 class="section-title">
            <?php echo pll__('Our Technology Experience'); ?>
        </h3>
    </div>
    <div id="our_technology_slider" class="swiper our-technology__slider" data-aos="fade-in" data-aos-delay="200">
        <div class="swiper-wrapper">
            <?php

            if (have_rows('our_technology_experience_list', 'company-setting')) :
                $index         = 0;
                $no_of_columns = 2;
                while (have_rows('our_technology_experience_list', 'company-setting')) : the_row();
                    $featuredInTitle = get_sub_field('tech_title');
                    $featuredInImage = get_sub_field('tech_image');
                    if ($featuredInImage) :
                        // Image variables.
                        $urlFeaturedInImage = $featuredInImage['url'];
                    else :
                        $urlFeaturedInImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
                    if (0 === $index % $no_of_columns) :
            ?>
                        <div class="swiper-slide">
                        <?php
                    endif
                        ?>
                        <div class="our-technology__image-container">
                            <img class="our-technology__image img-fluid" src="<?php echo $urlFeaturedInImage ?>" alt="<?php echo  $featuredInTitle  ?>">
                            <?php echo $no ?>
                        </div>
                        <?php
                        $index++;
                        ?>
                        <?php
                        if (0 !== $index && 0 === $index % $no_of_columns) {
                        ?>
                        </div>
                    <?php
                        }
                    ?>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>