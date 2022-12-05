<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$ap_automation_solutions_section_title = get_field('ap_automation_solutions_section_title', $pageElnvoicingID);
$ap_automation_solutions_image_diagram = get_field('ap_automation_solutions_image_diagram', $pageElnvoicingID);
$ap_automation_solutions_image_diagram_mobile = get_field('ap_automation_solutions_image_diagram_mobile', $pageElnvoicingID);
$invoice_sense_title = get_field('invoice_sense_title', $pageElnvoicingID);
$invoice_sense_description = get_field('invoice_sense_description', $pageElnvoicingID);
$invoice_sense_thumbnail = get_field('invoice_sense_thumbnail', $pageElnvoicingID);

if ($ap_automation_solutions_image_diagram) :
    $urlAp_automation_solutions_image_diagram = $ap_automation_solutions_image_diagram['url'];
else :
    $urlAp_automation_solutions_image_diagram = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($ap_automation_solutions_image_diagram_mobile) :
    $urlAp_automation_solutions_image_diagram_mobile = $ap_automation_solutions_image_diagram_mobile['url'];
else :
    $urlAp_automation_solutions_image_diagram_mobile = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

?>
<section class="automation-solutions section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="section-title">
                <?= $ap_automation_solutions_section_title; ?>
            </h2>
        </div>
        <div class="automation-solutions__image-container" data-aos="fade-up" data-aos-delay="100">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo esc_url($urlAp_automation_solutions_image_diagram); ?>">
                <img class="automation-solutions__image" src="<?php echo esc_url($urlAp_automation_solutions_image_diagram_mobile); ?>" alt="<?= $ap_automation_solutions_section_title; ?>">
            </picture>
        </div>
    </div>
</section>