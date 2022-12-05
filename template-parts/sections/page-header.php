<?php
$pageID = get_the_ID();
$page_header_subtitle = get_field('page_header_subtitle', $pageID);
$page_header_title = get_field('page_header_title', $pageID);
$page_header_description = get_field('page_header_description', $pageID);
$page_header_thumbnail = get_field('page_header_thumbnail', $pageID);
$page_header_show_link = get_field('page_header_show_link', $pageID);
$page_header_link = get_field('page_header_link', $pageID);

if ($page_header_thumbnail) :
    $urlPage_header_thumbnail = $page_header_thumbnail['url'];
else :
    $urlPage_header_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

?>
<section class="page-header section-padding">
    <div class="container">
        <div class="page-header__grid">
            <div class="page-header__info-container" data-aos="fade-up">
                <p class="page-header__subtitle">
                    <?php
                    echo $page_header_subtitle
                    ?>
                </p>
                <h1 class="page-header__title">
                    <?php
                    echo $page_header_title
                    ?>
                </h1>
                <div class="page-header__content">
                    <?php
                    echo $page_header_description
                    ?>
                </div>
                <div class="page-header__btn-wrapper">
                    <?php
                    // Loop over sub repeater rows.
                    if (have_rows('page_header_link')) :
                        while (have_rows('page_header_link')) : the_row();
                            // Get sub value.
                            $is_show_link = get_sub_field('page_header_is_show_link');
                            $banner_button_type = get_sub_field('page_header_button_type');
                            $banner_button_text = get_sub_field('page_header_button_text');
                            $is_external_link = get_sub_field('page_header_is_external_link');
                            $banner_button_link_internal = get_sub_field('page_header_button_link_internal');
                            $banner_button_link_external = get_sub_field('page_header_button_link_external');

                            $bannerBtnClass = '';
                            $bannerBtnLink = '';
                            $bannerBtnLinkATTR = '';

                            switch ($banner_button_type) {
                                case 'primary':
                                    $bannerBtnClass = 'btn btn-primary';
                                    break;
                                case 'secondary':
                                    $bannerBtnClass = 'btn btn-secondary';
                                    break;
                                default:
                                    $bannerBtnClass = 'btn btn-primary';
                            }
                            if ($is_external_link) {
                                $bannerBtnLink = $banner_button_link_external;
                                $bannerBtnLinkATTR = 'target="_blank" rel="noreferrer noopener nofollow"';
                            } else {
                                $bannerBtnLink =  $banner_button_link_internal;
                                $bannerBtnLinkATTR = '';
                            }
                    ?>
                            <?php
                            if ($is_show_link) :
                            ?>
                                <a href="<?php echo $bannerBtnLink ?>" <?php echo $bannerBtnLinkATTR ?> class="<?php echo $bannerBtnClass ?>"><?php echo  $banner_button_text ?></a>
                            <?php
                            endif;
                            ?>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="page-header__image-container" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo $urlPage_header_thumbnail ?>" alt="<?php echo $page_header_title ?>">
            </div>
        </div>
    </div>
</section>