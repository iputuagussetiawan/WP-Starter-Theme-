<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$why_elnvoicing_title = get_field('why_elnvoicing_title', $pageElnvoicingID);
$why_elnvoicing_thumbnail = get_field('why_elnvoicing_thumbnail', $pageElnvoicingID);
$why_elnvoicing_description = get_field('why_elnvoicing_description', $pageElnvoicingID);

if ($why_elnvoicing_thumbnail) :
    $urlWhy_elnvoicing_thumbnail = $why_elnvoicing_thumbnail['url'];
else :
    $urlWhy_elnvoicing_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="why-elnvoicing section-padding">
    <div class="container">
        <div class="why-elnvoicing__grid">
            <div class="why-elnvoicing__info-container" data-aos="fade-up">
                <h2 class="why-elnvoicing__title">
                    <?php
                    echo $why_elnvoicing_title
                    ?>
                </h2>
                <div class="why-elnvoicing__content">
                    <ul class="why-elnvoicing__list">
                        <?php
                        if (have_rows('why_elnvoicing_list', $pageElnvoicingID)) :
                            while (have_rows('why_elnvoicing_list', $pageElnvoicingID)) : the_row();
                                $why_elnvoicing_title = get_sub_field('why_elnvoicing_title');
                                $why_elnvoicing_sortdescription = get_sub_field('why_elnvoicing_sortdescription');
                        ?>
                                <li class="why-elnvoicing__item">
                                    <svg class="why-elnvoicing__item-icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 0C5.83187 0 0 5.83187 0 13C0 20.1681 5.83187 26 13 26C20.1681 26 26 20.1681 26 13C26 5.83187 20.1681 0 13 0ZM19.7656 8.64312L11.3656 18.6431C11.2735 18.7529 11.1588 18.8415 11.0294 18.9031C10.9 18.9647 10.7589 18.9977 10.6156 19H10.5988C10.4586 18.9999 10.32 18.9704 10.192 18.9134C10.064 18.8563 9.94936 18.773 9.85563 18.6688L6.25562 14.6688C6.1642 14.5718 6.09308 14.4575 6.04644 14.3327C5.99981 14.2078 5.9786 14.0749 5.98407 13.9417C5.98953 13.8086 6.02156 13.6778 6.07827 13.5572C6.13498 13.4366 6.21523 13.3286 6.31429 13.2394C6.41336 13.1503 6.52925 13.0818 6.65515 13.0381C6.78105 12.9944 6.91442 12.9763 7.04742 12.9848C7.18042 12.9934 7.31036 13.0284 7.42962 13.0879C7.54888 13.1474 7.65505 13.2301 7.74187 13.3312L10.5725 16.4762L18.2344 7.35688C18.4062 7.15817 18.6494 7.03509 18.9113 7.01422C19.1732 6.99335 19.4327 7.07638 19.6339 7.24535C19.8351 7.41433 19.9617 7.65568 19.9863 7.91724C20.0109 8.17879 19.9317 8.43954 19.7656 8.64312Z" fill="#0FD7BD" />
                                    </svg>

                                    <h4 class="why-elnvoicing__item-title">
                                        <?php echo $why_elnvoicing_title ?>
                                    </h4>
                                    <p class="why-elnvoicing__item-description">
                                        <?php echo $why_elnvoicing_sortdescription ?>
                                    </p>
                                </li>
                        <?php

                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="why-elnvoicing__image-container" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo $urlWhy_elnvoicing_thumbnail ?>" alt="<?php echo $why_elnvoicing_title ?>">
            </div>
        </div>
    </div>
</section>