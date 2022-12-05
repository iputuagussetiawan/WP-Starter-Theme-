<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$peppol_eInvoicing_title = get_field('peppol_eInvoicing_services_title', $pageElnvoicingID);
$peppol_eInvoicing_description = get_field('peppol_eInvoicing_services_description', $pageElnvoicingID);
$peppol_eInvoicing_thumbnail = get_field('peppol_eInvoicing_services_thumbnail', $pageElnvoicingID);
$peppol_eInvoicing_diagram = get_field('peppol_einvoicing_services_diagram', $pageElnvoicingID);
$peppol_eInvoicing_diagram_mobile = get_field('peppol_einvoicing_services_diagram_mobile', $pageElnvoicingID);

if ($peppol_eInvoicing_thumbnail) :
    $urlpeppol_eInvoicing_thumbnail = $peppol_eInvoicing_thumbnail['url'];
else :
    $urlpeppol_eInvoicing_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($peppol_eInvoicing_diagram) :
    $urlpeppol_eInvoicing_diagram = $peppol_eInvoicing_diagram['url'];
else :
    $urlpeppol_eInvoicing_diagram = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($peppol_eInvoicing_diagram_mobile) :
    $urlpeppol_eInvoicing_diagram_mobile = $peppol_eInvoicing_diagram_mobile['url'];
else :
    $urlpeppol_eInvoicing_diagram_mobile = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="peppol-eInvoicing section-padding">
    <div class="container">
        <div class="peppol-eInvoicing__grid" data-aos="fade-up" data-aos-delay="100">
            <div class="peppol-eInvoicing__info-container">
                <h3 class="peppol-eInvoicing__title">
                    <?= $peppol_eInvoicing_title; ?>
                </h3>
                <div class="peppol-eInvoicing__content">
                    <?= $peppol_eInvoicing_description; ?>
                </div>
            </div>
            <div class="peppol-eInvoicing__image-container">
                <img class="peppol-eInvoicing__image" src="<?= $urlpeppol_eInvoicing_thumbnail; ?>" alt="<?= $peppol_eInvoicing_title; ?>">
            </div>
        </div>

        <div class="peppol-eInvoicing-detail" data-aos="fade-up" data-aos-delay="200">
            <div class="peppol-eInvoicing-detail__grid">
                <?php
                if (have_rows('peppol_eInvoicing_list', $pageElnvoicingID)) :
                    while (have_rows('invoice_sense_list', $pageElnvoicingID)) : the_row();
                        $invoice_sense_item_thumbnail = get_sub_field('invoice_sense_item_thumbnail');
                        $invoice_sense_item_description = get_sub_field('invoice_sense_item_description');

                        if ($invoice_sense_item_thumbnail) :
                            // Image variables.
                            $urlInvoice_sense_item_thumbnail = $invoice_sense_item_thumbnail['url'];
                        else :
                            $urlInvoice_sense_item_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;

                        get_template_part('template-parts/components/cards/card', 'elnvoicing', array(
                            'card-elnvoicing-image' =>  $urlInvoice_sense_item_thumbnail,
                            'card-elnvoicing-description' => $invoice_sense_item_description
                        ));

                    endwhile;
                endif;
                ?>

            </div>
        </div>

        <div class="peppol-eInvoicing__diagram-container section-padding--top text-center" data-aos="fade-up" data-aos-delay="300">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo esc_url($urlpeppol_eInvoicing_diagram); ?>">
                <img class="img-fluid" src="<?php echo esc_url($urlpeppol_eInvoicing_diagram_mobile); ?>" alt="<?= $ap_automation_solutions_section_title; ?>">
            </picture>
        </div>

        <div class="peppol-detail" data-aos="fade-up" data-aos-delay="400">
            <div class="peppol-detail__grid">
                <?php
                if (have_rows('peppol_eInvoicing_services_list', $pageElnvoicingID)) :
                    while (have_rows('peppol_eInvoicing_services_list', $pageElnvoicingID)) : the_row();
                        $invoice_sense_item_thumbnail = get_sub_field('invoice_sense_item_thumbnail');
                        $invoice_sense_item_description = get_sub_field('invoice_sense_item_description');

                        if ($invoice_sense_item_thumbnail) :
                            // Image variables.
                            $urlInvoice_sense_item_thumbnail = $invoice_sense_item_thumbnail['url'];
                        else :
                            $urlInvoice_sense_item_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;

                        get_template_part('template-parts/components/cards/card', 'elnvoicing-two', array(
                            'card-elnvoicing-image' =>  $urlInvoice_sense_item_thumbnail,
                            'card-elnvoicing-description' => $invoice_sense_item_description
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>