<section class="elnvoicing-trustedby section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="section-title-wrapper text-center" data-aos="fade-up">
                    <h3 class="section-title"><?php echo pll__('Trusted By'); ?></h3>
                </div>
            </div>
        </div>
        <div class="about-trustedby__grid" data-aos="fade-up" data-aos-delay="100">
            <?php
            if (have_rows('our_partners_list', 'company-setting')) :
                while (have_rows('our_partners_list', 'company-setting')) : the_row();
                    $partnerTitle = get_sub_field('our_partner_title');
                    $partnerImage = get_sub_field('our_partner_imge');
                    $partnerServiceUsed = get_sub_field('service_used');

                    $image = get_field('image');
                    if ($partnerImage) :
                        // Image variables.
                        $urlPartnerImage = $partnerImage['url'];
                    else :
                        $urlPartnerImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
            ?>
                    <?php
                    if ($partnerServiceUsed) : ?>
                        <?php foreach ($partnerServiceUsed as $service) :
                            if ($service == 'elnvoicing') :
                        ?>
                                <div class="about-trustedby__image-container">
                                    <img class="about-trustedby__image" src="<?php echo $urlPartnerImage ?>" alt="<?php echo  $partnerTitle ?>">
                                </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    <?php endif; ?>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>