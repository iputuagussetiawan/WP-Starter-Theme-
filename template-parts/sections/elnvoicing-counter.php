<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$our_einvoicing_title = get_field('our_einvoicing_title', $pageElnvoicingID);
$our_einvoicing_subtitle = get_field('our_einvoicing_subtitle', $pageElnvoicingID);
$our_einvoicing_bg = get_field('our_einvoicing_bg', $pageElnvoicingID);

$worth_of_invoices_label = get_field('worth_of_invoices_label', $pageElnvoicingID);
$worth_of_invoices_value = get_field('worth_of_invoices_value', $pageElnvoicingID);
$invoices_label = get_field('invoices_label', $pageElnvoicingID);
$invoices_value = get_field('invoices_value', $pageElnvoicingID);
$suppliers_label = get_field('suppliers_label', $pageElnvoicingID);
$suppliers_value = get_field('suppliers_value', $pageElnvoicingID);
$of_peppol_eInvoices_label = get_field('of_peppol_eInvoices_label', $pageElnvoicingID);
$of_peppol_eInvoices_value = get_field('of_peppol_eInvoices_value', $pageElnvoicingID);
if ($our_einvoicing_bg) :
    $urlOur_einvoicing_bg = $our_einvoicing_bg['url'];
else :
    $urlOur_einvoicing_bg = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="elnvoicing-counter section-padding" style="background-image:url(<?php echo  $urlOur_einvoicing_bg ?>);">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <p class="section-title__subtitle">
                <?= $our_einvoicing_subtitle; ?>
            </p>
            <h2 class="section-title text-white">
                <?= $our_einvoicing_title; ?>
            </h2>
        </div>
        <div class="elnvoicing-counter__grid">
            <div class="card-approach" data-aos="fade-up" data-aos-delay="100">
                <div class="card-approach__value">
                    $<h3 class="card-approach__value-title" id="worthOfInvoices" data-value="<?= $worth_of_invoices_value; ?>"> </h3>m
                </div>
                <div class="card-approach__label">
                    <?= $worth_of_invoices_label; ?>
                </div>
            </div>

            <div class="card-approach" data-aos="fade-up" data-aos-delay="200">
                <div class="card-approach__value">
                    <h3 class="card-approach__value-title" id="Invoices" data-value="<?= $invoices_value; ?>"> </h3>
                </div>
                <div class="card-approach__label">
                    <?= $invoices_label; ?>
                </div>
            </div>

            <div class="card-approach" data-aos="fade-up" data-aos-delay="300">
                <div class="card-approach__value">
                    <h3 class="card-approach__value-title" id="suppliers" data-value="<?= $suppliers_value; ?>"> </h3>
                </div>
                <div class="card-approach__label">
                    <?= $suppliers_label; ?>
                </div>
            </div>

            <div class="card-approach" data-aos="fade-up" data-aos-delay="400">
                <div class="card-approach__value">
                    $<h3 class="card-approach__value-title" id="ofPeppolEInvoices" data-value="<?= $of_peppol_eInvoices_value; ?>"> </h3>K
                </div>
                <div class="card-approach__label">
                    <?= $of_peppol_eInvoices_label; ?>
                </div>
            </div>
        </div>
    </div>
</section>