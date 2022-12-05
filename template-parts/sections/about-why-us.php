<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$whyUsTitle = get_field('why_choose_us_section_title', $pageAboutID);
?>
<section class="whyus section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="section-title">
                <?= $whyUsTitle; ?>
            </h2>
        </div>
        <div class="whyus__grid">
            <?php
            if (have_rows('why_choose_us_list', $pageAboutID)) :
                while (have_rows('why_choose_us_list', $pageAboutID)) : the_row();
                    $why_choose_us_thumbnail = get_sub_field('why_choose_us_thumbnail');
                    $why_choose_us_item_title = get_sub_field('why_choose_us_item_title');
                    $why_choose_us_item_description = get_sub_field('why_choose_us_item_description');
                    get_template_part('template-parts/components/cards/card', 'whyus', array(
                        'card-whyus-thumb' =>  $why_choose_us_thumbnail,
                        'card-whyus-title' => $why_choose_us_item_title,
                        'card-whyus-description' => $why_choose_us_item_description,
                    ));
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <img class="whyus__bg" src="<?php echo get_template_directory_uri() . '/src/images/vector/section-bg.png' ?>" alt="section bg">
</section>