<?php
$pageSourceToPayID = get_field('source_to_pay_link', 'page_link')->ID;
$pageSourceToPayLink = get_permalink($pageSourceToPayID);
$pageSourceToPayTitle = get_field('page_header_title_stp', $pageSourceToPayID);
$pageSourceToPayDescription = get_field('page_header_description_stp', $pageSourceToPayID);
$pageSourceToPayYT = get_field('yt_url_stp', $pageSourceToPayID);
?>
<section class="sourcetopay-banner section-padding--top">
    <div class="container">
        <div class="sourcetopay-banner__grid">
            <div class="sourcetopay-banner__title-wrapper section-title-wrapper text-center" data-aos="fade-up">
                <h1 class="section-title">
                    <?= $pageSourceToPayTitle; ?>
                </h1>
                <p class="section-title__description">
                    <?= $pageSourceToPayDescription; ?>
                </p>
            </div>
            <div class="sourcetopay-banner__YT-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="sourcetopay-banner__YT-container ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/<?php echo GetYouTubeId($pageSourceToPayYT); ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>