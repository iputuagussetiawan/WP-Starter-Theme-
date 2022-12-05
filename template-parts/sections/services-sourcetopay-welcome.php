<?php
$pageSourceToPayID = get_field('source_to_pay_link', 'page_link')->ID;
$pageSourceToPayLink = get_permalink($pageSourceToPayID);
$pageSourceToPayWelcomeTitle = get_field('source_to_pay_welcome_title', $pageSourceToPayID);
$pageSourceToPayWelcomeDescription = get_field('source_to_pay_welcome_description', $pageSourceToPayID);
$pageSourceToPayWelcomeThumb = get_field('source_to_pay_welcome_thumbnail', $pageSourceToPayID);


if ($pageSourceToPayWelcomeThumb) :
    $urlPageSourceToPayWelcomeThumb = $pageSourceToPayWelcomeThumb['url'];
else :
    $urlPageSourceToPayWelcomeThumb = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="sourcetopay-welcome section-padding--top">
    <div class="container">
        <div class="sourcetopay-welcome__grid">
            <div class="sourcetopay-welcome__image-container" data-aos="fade-up">
                <img class="sourcetopay-welcome__image" src="<?= $urlPageSourceToPayWelcomeThumb; ?>" alt="<?= $pageSourceToPayWelcomeTitle; ?>">
            </div>
            <div class="sourcetopay-welcome__info-container" data-aos="fade-up" data-aos-delay="100">
                <h2 class="sourcetopay-welcome__title"><?= $pageSourceToPayWelcomeTitle; ?></h2>
                <div class="sourcetopay-welcome__content">
                    <?= $pageSourceToPayWelcomeDescription; ?>
                </div>
            </div>
        </div>
    </div>
</section>