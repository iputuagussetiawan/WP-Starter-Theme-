<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$what_elnvoicing_title = get_field('what_elnvoicing_title', $pageElnvoicingID);
$what_elnvoicing_description = get_field('what_elnvoicing_description', $pageElnvoicingID);
$what_elnvoicing_thumbnail = get_field('what_elnvoicing_thumbnail', $pageElnvoicingID);

if ($what_elnvoicing_thumbnail) :
    $urlWhat_elnvoicing_thumbnail = $what_elnvoicing_thumbnail['url'];
else :
    $urlWhat_elnvoicing_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="what-elnvoicing section-padding--bottom">
    <div class="container">
        <div class="what-elnvoicing__grid">
            <div class="what-elnvoicing__image-container" data-aos="fade-up">
                <img src="<?php echo $urlWhat_elnvoicing_thumbnail ?>" alt="<?php echo $what_elnvoicing_title ?>">
            </div>
            <div class="what-elnvoicing__info-container" data-aos="fade-up" data-aos-delay="100">
                <h2 class="what-elnvoicing__title">
                    <?php
                    echo $what_elnvoicing_title
                    ?>
                </h2>
                <div class="what-elnvoicing__content">
                    <?php
                    echo $what_elnvoicing_description
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>