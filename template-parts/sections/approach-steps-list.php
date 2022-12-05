<?php
$pageApproachID = get_field('our_approach_link', 'page_link')->ID;
$approachLink = get_permalink($pageApproachID);
$our_three_step_approach_title = get_field('our_three_step_approach_title', $pageApproachID);
$our_three_step_approach_title_description = get_field('our_three_step_approach_title_description', $pageApproachID);
?>
<section class="approach-steps section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="section-title text-white">
                <?= $our_three_step_approach_title; ?>
            </h2>
            <p class="section-title__description text-white">
                <?= $our_three_step_approach_title_description; ?>
            </p>
        </div>
        <div class="approach-steps__grid" data-aos="fade-up" data-aos-delay="100">
            <?php
            if (have_rows('our_three_step_approach_list', $pageApproachID)) :
                while (have_rows('our_three_step_approach_list', $pageApproachID)) : the_row();
                    $step_approach_icon = get_sub_field('step_approach_icon');
                    $step_approach_title = get_sub_field('step_approach_title');
                    $step_approach_subtitle = get_sub_field('step_approach_subtitle');
                    $step_approach_sort_description = get_sub_field('step_approach_sort_description');
                    get_template_part('template-parts/components/cards/card', 'two', array(
                        'card-two-icon' =>  $step_approach_icon,
                        'card-two-title' => $step_approach_title,
                        'card-two-subtitle' => $step_approach_subtitle,
                        'card-two-description' => $step_approach_sort_description
                    ));
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>