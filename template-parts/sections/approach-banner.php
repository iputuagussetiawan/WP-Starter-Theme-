<?php
$pageApproachID = get_field('our_approach_link', 'page_link')->ID;
$approachLink = get_permalink($pageApproachID);
$approachBannerTitle = get_field('page_approach_banner_title', $pageApproachID);
$approachBannerSubTitle = get_field('page_approach_banner_subtitle', $pageApproachID);
$approachBannerContent = get_field('page_approach_banner_content', $pageApproachID);
$approachBannerThumbnail = get_field('page_approach_banner_thumbnail', $pageApproachID);
if ($approachBannerThumbnail) :
    $urlApproachBannerThumbnail = $approachBannerThumbnail['url'];
else :
    $urlApproachBannerThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="approach-banner section-padding">
    <div class="container">
        <div class="approach-banner__grid">
            <div class="approach-banner__info-container" data-aos="fade-up">
                <p class="approach-banner__subtitle">
                    <?php
                    echo $approachBannerSubTitle
                    ?>
                </p>
                <h1 class="approach-banner__title">
                    <?php
                    echo $approachBannerTitle
                    ?>
                </h1>
                <div class="approach-banner__content">
                    <?php
                    echo $approachBannerContent
                    ?>
                </div>
            </div>
            <div class="approach-banner__image-container" data-aos="fade-left" data-aos-delay="100">
                <img src="<?php echo $urlApproachBannerThumbnail ?>" alt="<?php echo $approachBannerTitle ?>">
            </div>
        </div>
    </div>
</section>