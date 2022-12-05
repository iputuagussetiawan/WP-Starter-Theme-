<?php
$pageApproachID = get_field('our_approach_link', 'page_link')->ID;
$approachLink = get_permalink($pageApproachID);
$our_three_step_approach_title = get_field('our_three_step_approach_title', $pageApproachID);
$our_three_step_approach_title_description = get_field('our_three_step_approach_title_description', $pageApproachID);
?>
<section class="casestudy-check section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="section-title">
                <?php echo pll__('Case Study'); ?>
            </h2>
        </div>
        <div class="casestudy-check__grid" data-aos="fade-up" data-aos-delay="100">
            <div class="casestudy-check__inner">
                <?php
                $caseStudies = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'case-studies',
                    'post_status'   => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'case-studies-categories',
                            'field' => 'slug',
                            'terms' => array('source-to-pay'),
                            'operator' => 'IN'
                        )
                    )
                ));
                if ($caseStudies->have_posts()) :
                    while ($caseStudies->have_posts()) :
                        $caseStudies->the_post();
                        $caseStudyThumbnail = get_field('case_study_thumbnail', get_the_ID());
                        if ($caseStudyThumbnail) :
                            $urlCaseStudyThumbnail = $caseStudyThumbnail['url'];
                        else :
                            $urlCaseStudyThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'five', array(
                            'card-five-image' =>   $urlCaseStudyThumbnail,
                            'card-five-title' => get_the_title(),
                        ));
                    endwhile;
                    wp_reset_postdata();
                else :
                    get_template_part('template-parts/data', 'not-found');
                endif;
                ?>
            </div>
        </div>
    </div>
</section>