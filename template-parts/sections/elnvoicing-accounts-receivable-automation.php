<?php
$pageElnvoicingID = get_field('elnvoicing_link', 'page_link')->ID;
$elnvoicingLink = get_permalink($pageElnvoicingID);

$accounts_receivable_automation_title = get_field('accounts_receivable_automation_title', $pageElnvoicingID);
$accounts_receivable_automation_description = get_field('accounts_receivable_automation_description', $pageElnvoicingID);
$accounts_receivable_automation_diagram = get_field('accounts_receivable_automation_diagram', $pageElnvoicingID);
$accounts_receivable_automation_diagram_mobile = get_field('accounts_receivable_automation_diagram_mobile', $pageElnvoicingID);
if ($accounts_receivable_automation_diagram) :
    $urlAccounts_receivable_automation_diagram = $accounts_receivable_automation_diagram['url'];
else :
    $urlAccounts_receivable_automation_diagram = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($accounts_receivable_automation_diagram_mobile) :
    $urlAccounts_receivable_automation_diagram_mobile = $accounts_receivable_automation_diagram_mobile['url'];
else :
    $urlAccounts_receivable_automation_diagram_mobile = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="receivable-automation section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title-wrapper text-center" data-aos="fade-up">
                    <h3 class="section-title">
                        <?= $accounts_receivable_automation_title; ?>
                    </h3>
                    <p class="section-title__description"> <?= $accounts_receivable_automation_description; ?> </p>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="receivable-automation__diagram-container" data-aos="fade-up" data-aos-delay="100">
                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo esc_url($urlAccounts_receivable_automation_diagram); ?>">
                        <img class="receivable-automation__diagram img-fluid" src="<?php echo esc_url($urlAccounts_receivable_automation_diagram_mobile); ?>" alt="<?= $accounts_receivable_automation_title; ?>">
                    </picture>
                </div>
            </div>
        </div>
        <div class="receivable-automation__detail" data-aos="fade-up" data-aos-delay="200">
            <?php
            if (have_rows('accounts_receivable_automation_list', $pageElnvoicingID)) :
                while (have_rows('accounts_receivable_automation_list', $pageElnvoicingID)) : the_row();
                    $accounts_receivable_automation_list_title = get_sub_field('accounts_receivable_automation_list_title');
                    $accounts_receivable_automation_list_description = get_sub_field('accounts_receivable_automation_list_description');
                    $accounts_receivable_automation_list_thumbnail = get_sub_field('accounts_receivable_automation_list_thumbnail');
                    if ($accounts_receivable_automation_list_thumbnail) :
                        // Image variables.
                        $urlAccounts_receivable_automation_list_thumbnail = $accounts_receivable_automation_list_thumbnail['url'];
                    else :
                        $urlAccounts_receivable_automation_list_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;

                    get_template_part('template-parts/components/cards/card', 'elnvoicing-three', array(
                        'card-elnvoicing-image' =>  $urlAccounts_receivable_automation_list_thumbnail,
                        'card-elnvoicing-title' => $accounts_receivable_automation_list_title,
                        'card-elnvoicing-description' => $accounts_receivable_automation_list_description
                    ));
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>