<?php
$pageSourceToPayID = get_field('source_to_pay_link', 'page_link')->ID;
$pageSourceToPayLink = get_permalink($pageSourceToPayID);
$pageSourceToPayEnsureTitle = get_field('we_ensure_you_title', $pageSourceToPayID);

?>
<section class="sourcetopay-ensure section-padding--top">
    <div class="container">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="section-title">
                <?= $pageSourceToPayEnsureTitle; ?>
            </h2>
        </div>
        <div class="sourcetopay-ensure__inner" data-aos="fade-up" data-aos-delay="100">
            <div class="sourcetopay-ensure__grid">
                <?php
                if (have_rows('we_ensure_you_list', $pageSourceToPayID)) :
                    while (have_rows('we_ensure_you_list', $pageSourceToPayID)) : the_row();
                        $we_ensure_you_item_icon = get_sub_field('we_ensure_you_item_icon');
                        $we_ensure_you_item_title = get_sub_field('we_ensure_you_item_title');
                        get_template_part('template-parts/components/cards/card', 'three', array(
                            'card-three-icon' =>  $we_ensure_you_item_icon,
                            'card-three-title' => $we_ensure_you_item_title,
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>