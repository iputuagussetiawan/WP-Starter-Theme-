<section class="approach-detail">
    <?php
    $pageApproachID = get_field('our_approach_link', 'page_link')->ID;
    if (have_rows('our_three_step_approach_list', $pageApproachID)) :
        while (have_rows('our_three_step_approach_list', $pageApproachID)) : the_row();
            $step_approach_icon = get_sub_field('step_approach_icon');
            $step_approach_title = get_sub_field('step_approach_title');
            $step_approach_subtitle = get_sub_field('step_approach_subtitle');
            $step_approach_description = get_sub_field('step_approach_description');
            $our_team_of_experts_will_title = get_sub_field('our_team_of_experts_will_title');
            if ($step_approach_icon) :
                $urlCardTwoIcon  = $step_approach_icon['url'];
            else :
                $urlCardTwoIcon = get_template_directory_uri() . '/src/images/blank-image.svg';
            endif;
    ?>
            <div class="approach-detail__section section-padding">
                <div class="container">
                    <div class="approach-detail__grid">
                        <div class="approach-detail__inner">
                            <div class="approach-detail__header" data-aos="fade-up">
                                <div class="approach-detail__icon-container">
                                    <img class="approach-detail__icon" src="<?php echo $urlCardTwoIcon ?>" alt="<?php echo $step_approach_title ?>">
                                </div>
                                <h3 class="approach-detail__title"><?php echo $step_approach_title ?></h3>
                            </div>
                            <div class="approach-detail__content" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $step_approach_description ?>
                                <h4 class="approach-detail__subtitle">
                                    <?php echo $our_team_of_experts_will_title ?>
                                </h4>
                                <ul class="approach-detail__list">
                                    <?php
                                    if (have_rows('our_team_of_experts_will_list', $pageApproachID)) :
                                        while (have_rows('our_team_of_experts_will_list', $pageApproachID)) : the_row();
                                            $our_team_of_experts_will_item = get_sub_field('our_team_of_experts_will_item');
                                    ?>
                                            <li class="approach-detail__item">
                                                <svg class="approach-detail__item-icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 0C5.83187 0 0 5.83187 0 13C0 20.1681 5.83187 26 13 26C20.1681 26 26 20.1681 26 13C26 5.83187 20.1681 0 13 0ZM19.7656 8.64312L11.3656 18.6431C11.2735 18.7529 11.1588 18.8415 11.0294 18.9031C10.9 18.9647 10.7589 18.9977 10.6156 19H10.5988C10.4586 18.9999 10.32 18.9704 10.192 18.9134C10.064 18.8563 9.94936 18.773 9.85563 18.6688L6.25562 14.6688C6.1642 14.5718 6.09308 14.4575 6.04644 14.3327C5.99981 14.2078 5.9786 14.0749 5.98407 13.9417C5.98953 13.8086 6.02156 13.6778 6.07827 13.5572C6.13498 13.4366 6.21523 13.3286 6.31429 13.2394C6.41336 13.1503 6.52925 13.0818 6.65515 13.0381C6.78105 12.9944 6.91442 12.9763 7.04742 12.9848C7.18042 12.9934 7.31036 13.0284 7.42962 13.0879C7.54888 13.1474 7.65505 13.2301 7.74187 13.3312L10.5725 16.4762L18.2344 7.35688C18.4062 7.15817 18.6494 7.03509 18.9113 7.01422C19.1732 6.99335 19.4327 7.07638 19.6339 7.24535C19.8351 7.41433 19.9617 7.65568 19.9863 7.91724C20.0109 8.17879 19.9317 8.43954 19.7656 8.64312Z" fill="#0FD7BD" />
                                                </svg>
                                                <?php echo $our_team_of_experts_will_item ?>
                                            </li>
                                    <?php

                                        endwhile;
                                    endif;
                                    ?>

                                </ul>


                                <h3 class="approach-detail__subtitle">
                                    Includes
                                </h3>
                                <ul class="approach-detail__list">
                                    <?php
                                    if (have_rows('step_approach_includes_list', $pageApproachID)) :
                                        while (have_rows('step_approach_includes_list', $pageApproachID)) : the_row();
                                            $step_approach_includes_item = get_sub_field('step_approach_includes_item');
                                    ?>
                                            <li class="approach-detail__item">
                                                <svg class="approach-detail__item-icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 0C5.83187 0 0 5.83187 0 13C0 20.1681 5.83187 26 13 26C20.1681 26 26 20.1681 26 13C26 5.83187 20.1681 0 13 0ZM19.7656 8.64312L11.3656 18.6431C11.2735 18.7529 11.1588 18.8415 11.0294 18.9031C10.9 18.9647 10.7589 18.9977 10.6156 19H10.5988C10.4586 18.9999 10.32 18.9704 10.192 18.9134C10.064 18.8563 9.94936 18.773 9.85563 18.6688L6.25562 14.6688C6.1642 14.5718 6.09308 14.4575 6.04644 14.3327C5.99981 14.2078 5.9786 14.0749 5.98407 13.9417C5.98953 13.8086 6.02156 13.6778 6.07827 13.5572C6.13498 13.4366 6.21523 13.3286 6.31429 13.2394C6.41336 13.1503 6.52925 13.0818 6.65515 13.0381C6.78105 12.9944 6.91442 12.9763 7.04742 12.9848C7.18042 12.9934 7.31036 13.0284 7.42962 13.0879C7.54888 13.1474 7.65505 13.2301 7.74187 13.3312L10.5725 16.4762L18.2344 7.35688C18.4062 7.15817 18.6494 7.03509 18.9113 7.01422C19.1732 6.99335 19.4327 7.07638 19.6339 7.24535C19.8351 7.41433 19.9617 7.65568 19.9863 7.91724C20.0109 8.17879 19.9317 8.43954 19.7656 8.64312Z" fill="#0FD7BD" />
                                                </svg>
                                                <?php echo $step_approach_includes_item ?>
                                            </li>
                                    <?php

                                        endwhile;
                                    endif;
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</section>