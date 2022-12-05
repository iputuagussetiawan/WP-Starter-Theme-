<?php
$pageApproachID = get_field('our_approach_link', 'page_link')->ID;
$approachLink = get_permalink($pageApproachID);
$approachTitle = get_field('section_our_approach_title', $pageApproachID);
$approachSortDescription = get_field('section_our_approach_sort_description', $pageApproachID);
$approachBG = get_field('section_our_approach_bg', $pageApproachID);
$approacList = get_field('our_approach_list', $pageApproachID);

$complated_project_label = get_field('complated_project_label', $pageApproachID);
$years_of_experience_label = get_field('years_of_experience_label', $pageApproachID);
$business_productivity_label = get_field('business_productivity_label', $pageApproachID);
$decrease_in_cost_per_invoice_label = get_field('decrease_in_cost_per_invoice_label', $pageApproachID);

$complated_project_value = get_field('complated_project_value', $pageApproachID);
$years_of_experience_value = get_field('years_of_experience_value', $pageApproachID);
$business_productivity_value = get_field('business_productivity_value', $pageApproachID);
$decrease_in_cost_per_invoice_value = get_field('decrease_in_cost_per_invoice_value', $pageApproachID);
if ($approachBG) :
    $urlApproachBG = $approachBG['url'];
else :
    $urlApproachBG = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section style="background-image:url(<?php echo  $urlApproachBG ?>);" class="our-approach section-padding">
    <div class="container">
        <div class="our-approach__grid">
            <div class="our-approach__info-container" data-aos="fade-up">
                <h3 class="our-approach__title">
                    <?php echo $approachTitle ?>
                </h3>
                <div class="our-approach__description">
                    <?php echo $approachSortDescription ?>
                </div>
            </div>
            <div class="our-approach__values-container">
                <div class="card-approach" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-approach__value">
                        <h3 class="card-approach__value-title" id="complatedProject" data-value="<?= $complated_project_value; ?>"></h3>+
                    </div>
                    <div class="card-approach__label">
                        <?= $complated_project_label; ?>
                    </div>
                </div>
                <div class="card-approach" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-approach__value">
                        <h3 class="card-approach__value-title" id="yearExperience" data-value="<?= $years_of_experience_value; ?>"></h3>+
                    </div>
                    <div class="card-approach__label">
                        <?= $years_of_experience_label; ?>
                    </div>
                </div>
                <div class="card-approach" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-approach__value">
                        +<h3 class="card-approach__value-title" id="businessProductivity" data-value="<?= $business_productivity_value; ?>"></h3>%
                    </div>

                    <div class="card-approach__label">
                        <?= $business_productivity_label; ?>
                    </div>
                </div>
                <div class="card-approach" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-approach__value">
                        <h3 class="card-approach__value-title" id="decreaseCost" data-value="<?= $decrease_in_cost_per_invoice_value; ?>"> </h3>+
                    </div>
                    <div class="card-approach__label">
                        <?= $decrease_in_cost_per_invoice_label; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>