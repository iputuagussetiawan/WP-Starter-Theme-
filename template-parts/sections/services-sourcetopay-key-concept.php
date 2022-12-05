<?php
$pageSourceToPayID = get_field('source_to_pay_link', 'page_link')->ID;
$pageSourceToPayLink = get_permalink($pageSourceToPayID);
$ourKeyConceptTitle = get_field('our_key_concept_title', $pageSourceToPayID);

$ourKeyConceptTitle = get_field('our_key_concept_title', $pageSourceToPayID);
$ourKeyConceptDescription = get_field('our_key_concept_description', $pageSourceToPayID);
$ourKeyConceptThumbnail = get_field('our_key_concept_thumbnail', $pageSourceToPayID);

if ($ourKeyConceptThumbnail) :
    $urlOurKeyConceptThumbnail = $ourKeyConceptThumbnail['url'];
else :
    $urlOurKeyConceptThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="sourcetopay-keyconcept section-padding">
    <div class="container">
        <div class="sourcetopay-keyconcept__grid">
            <div class="sourcetopay-keyconcept__info-container" data-aos="fade-up">
                <div class="section-title-wrapper">
                    <h2 class="section-title">
                        <?= $ourKeyConceptTitle; ?>
                    </h2>
                </div>
                <div class="sourcetopay-keyconcept__content">
                    <?= $ourKeyConceptDescription; ?>
                </div>
            </div>
            <div class="sourcetopay-keyconcept__image-container" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= $urlOurKeyConceptThumbnail; ?>" alt="<?= $ourKeyConceptTitle; ?>" class="sourcetopay-keyconcept__image">
            </div>
        </div>
    </div>
</section>