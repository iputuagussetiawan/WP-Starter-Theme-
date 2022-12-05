<section class="featured-in section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h3 class="section-title">
                <?php echo pll__('We Also Featured In'); ?>
            </h3>
        </div>
        <div class="featured-in__grid" data-aos="fade-up" data-aos-delay="100">
            <?php
            $no = 1;
            if (have_rows('featured_in_list', 'company-setting')) :
                while (have_rows('featured_in_list', 'company-setting')) : the_row();
                    $featuredInTitle = get_sub_field('featured_in_title');
                    $featuredInImage = get_sub_field('featured_in_image');
                    $featuredInLink = get_sub_field('featured_in_link');
                    if ($featuredInImage) :
                        // Image variables.
                        $urlFeaturedInImage = $featuredInImage['url'];
                    else :
                        $urlFeaturedInImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;

                    if ($no == 1) {
                        $activeClass = 'active';
                    } else {
                        $activeClass = '';
                    }
            ?>
                    <?php
                    if ($featuredInLink) :
                    ?>
                        <a href="<?php echo $featuredInLink; ?>" class="featured-in__image-container <?= $activeClass; ?>">
                            <img class="featured-in__image img-fluid" src="<?php echo $urlFeaturedInImage ?>" alt="<?php echo  $featuredInTitle  ?>">
                        </a>
                    <?php
                    else :
                    ?>
                        <div class="featured-in__image-container <?= $activeClass; ?>">
                            <img class="featured-in__image" src="<?php echo $urlFeaturedInImage ?>" alt="<?php echo  $featuredInTitle  ?>">
                        </div>
                    <?php
                    endif
                    ?>
            <?php
                    $no++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>