<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$pageAboutYT = get_field('about_youtube_url', $pageAboutID);
$pageHeaderAboutDescription = get_field('page_header_about_description', $pageAboutID);
?>
<section class="about-banner section-padding">
    <div class="container">
        <div class="about-banner__grid" data-aos="fade-up" data-aos-delay="100">
            <div class="about-banner__title-wrapper section-title-wrapper text-center">
                <h1 class="section-title">
                    <?php
                    the_title();
                    ?>
                </h1>
            </div>
            <div class="about-banner__YT-wrapper">
                <div class="about-banner__YT-container ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/<?php echo GetYouTubeId($pageAboutYT); ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
            <div class="about-banner__description">
                <?php echo  $pageHeaderAboutDescription ?>
            </div>
        </div>
    </div>
</section>