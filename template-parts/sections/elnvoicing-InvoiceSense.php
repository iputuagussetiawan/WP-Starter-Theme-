<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$invoice_sense_title = get_field('invoice_sense_title', $pageElnvoicingID);
$invoice_sense_description = get_field('invoice_sense_description', $pageElnvoicingID);
$invoice_sense_thumbnail = get_field('invoice_sense_thumbnail', $pageElnvoicingID);


if ($invoice_sense_thumbnail) :
    $urlInvoice_sense_thumbnail = $invoice_sense_thumbnail['url'];
else :
    $urlInvoice_sense_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="invoicesense section-padding">
    <div class="container">
        <div class="invoicesense__grid" data-aos="fade-up">
            <div class="invoicesense__image-container">
                <img class="invoicesense__image" src="<?= $urlInvoice_sense_thumbnail; ?>" alt="<?= $invoice_sense_title; ?>">
            </div>

            <div class="invoicesense__info-container">
                <h3 class="invoicesense__title">
                    <?= $invoice_sense_title; ?>
                </h3>
                <div class="invoicesense__content">
                    <?= $invoice_sense_description; ?>
                </div>
            </div>
        </div>

        <div class="invoicesense-detail">
            <div class="invoicesense-detail__grid">
                <?php
                if (have_rows('invoice_sense_list', $pageElnvoicingID)) :
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
    </div>
</section>