<?php $id = get_the_ID() ?>
<?php $start_it_image = !empty(get_field('start_it_image', $id))?get_field('start_it_image', $id):''; ?>
<?php $start_it_text = get_field('start_it_text', $id); ?>
<?php $start_it_scroll_link = get_field('start_it_scroll_link', $id); ?>
<section id="slider" class="slider_1" style="background-image:url(<?= $start_it_image; ?>)">
    <div class="slider">
        <div class="container">
            <div class="slide-content">
                <h6 class="sub_heading">Creative Agency Template</h6>
                <div class="typing_content">
                    <?= $start_it_text; ?>
                </div>
            </div>
        </div>
        <div class="scroll_btn"><a href="<?= $start_it_scroll_link; ?>"><i class="fa fa-angle-down"></i></a></div>
        <div class="section-shape">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/shape1.png" alt="shape image">
        </div>
    </div>
</section>