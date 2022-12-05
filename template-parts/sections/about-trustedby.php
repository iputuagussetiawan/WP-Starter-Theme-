<section class="about-trustedby section-padding">
    <div class="container">
        <div class="row justify-content-center " data-aos="fade-up">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="section-title-wrapper text-center">
                    <h3 class="section-title"> <?php echo pll__('Trusted by leading <br/>businesses across the region'); ?></h3>
                    <p class="section-title__description">
                        <?php echo pll__('We are Source to Pay and Procure to Pay automation experts with over 30 years experience across our team and have been trusted partners to a number of leading organisations across APAC.'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="about-trustedby__grid" data-aos="fade-up" data-aos-delay="100">
            <?php
            if (have_rows('our_partners_list', 'company-setting')) :
                while (have_rows('our_partners_list', 'company-setting')) : the_row();
                    $partnerTitle = get_sub_field('our_partner_title');
                    $partnerImage = get_sub_field('our_partner_imge');

                    $image = get_field('image');
                    if ($partnerImage) :
                        // Image variables.
                        $urlPartnerImage = $partnerImage['url'];
                    else :
                        $urlPartnerImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
            ?>
                    <div class="about-trustedby__image-container">
                        <img class="about-trustedby__image" src="<?php echo $urlPartnerImage ?>" alt="<?php echo  $partnerTitle ?>">
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>