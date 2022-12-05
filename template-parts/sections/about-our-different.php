<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$ourDifferentTitle = get_field('our_difference_title', $pageAboutID);
$ourDifferentDescription = get_field('our_difference_desciption', $pageAboutID);
?>
<section class="our-different section-padding">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-10">
                <div class="section-title-wrapper text-center">
                    <h2 class="section-title text-white">
                        <?= $ourDifferentTitle; ?>
                    </h2>
                    <p class="section-title__description text-white">
                        <?php echo $ourDifferentDescription ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="our-different__grid" data-aos="fade-up" data-aos-delay="100">
            <div class="our-different__inner">
                <?php
                if (have_rows('our_difference_list', $pageAboutID)) :
                    while (have_rows('our_difference_list', $pageAboutID)) : the_row();
                        $our_difference_item_thumbnail = get_sub_field('our_difference_item_thumbnail');
                        $our_difference_item_title = get_sub_field('our_difference_item_title');
                        $our_difference_item_description = get_sub_field('our_difference_item_description');
                        if ($our_difference_item_thumbnail) :
                            // Image variables.
                            $urlour_difference_item_thumbnail = $our_difference_item_thumbnail['url'];
                        else :
                            $urlour_difference_item_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'seven', array(
                            'card-seven-image' =>  $urlour_difference_item_thumbnail,
                            'card-seven-title' => $our_difference_item_title,
                            'card-seven-description' => $our_difference_item_description,
                            'card-seven-type' => '--white'
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>