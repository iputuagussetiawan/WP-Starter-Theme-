<?php
$pageSourceToPayID = get_field('source_to_pay_link', 'page_link')->ID;
$pageSourceToPayLink = get_permalink($pageSourceToPayID);
$relatedUsefulContentTitle = get_field('related_useful_content_title', $pageSourceToPayID);

?>
<section class="sourcetopay-usefulcontent section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h3 class="section-title">
                <?= $relatedUsefulContentTitle; ?>
            </h3>
        </div>
        <div class="sourcetopay-usefulcontent__inner" data-aos="fade-up" data-aos-delay="100">
            <div class="sourcetopay-usefulcontent__grid">
                <?php
                if (have_rows('related_useful_content_list', $pageSourceToPayID)) :
                    while (have_rows('related_useful_content_list', $pageSourceToPayID)) : the_row();
                        $related_useful_item_thumb = get_sub_field('related_useful_item_thumb');
                        $related_useful_item_title = get_sub_field('related_useful_item_title');
                        $related_useful_item_link = get_sub_field('related_useful_item_link');
                        get_template_part('template-parts/components/cards/card', 'four', array(
                            'card-four-image' =>  $related_useful_item_thumb,
                            'card-four-title' => $related_useful_item_title,
                            'card-four-link' => $related_useful_item_link,
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>