<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$our_partners_title = get_field('our_partners_title', $pageAboutID);
?>
<section class="our-partners section-padding">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-10">
                <div class="section-title-wrapper text-center">
                    <h2 class="section-title">
                        <?= $our_partners_title; ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="our-partners__grid" data-aos="fade-up" data-aos-delay="100">
            <?php
            if (have_rows('our_partners_list', $pageAboutID)) :
                while (have_rows('our_partners_list', $pageAboutID)) : the_row();
                    $our_partners_item_thumbnail = get_sub_field('our_partners_item_thumbnail');
                    $our_partners_item_title = get_sub_field('our_partners_item_title');
                    $our_partners_description = get_sub_field('our_partners_description');
                    if ($our_partners_item_thumbnail) :
                        // Image variables.
                        $urlour_partners_item_thumbnail = $our_partners_item_thumbnail['url'];
                    else :
                        $urlour_partners_item_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
                    get_template_part('template-parts/components/cards/card', 'six', array(
                        'card-six-image' =>  $urlour_partners_item_thumbnail,
                        'card-six-title' => $our_partners_item_title,
                        'card-six-description' => $our_partners_description
                    ));
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>