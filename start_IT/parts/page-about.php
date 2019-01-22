<?php $id = get_the_ID() ?>
<?php $start_it_about_sectoin = get_field('start_it_about_sectoin', $id); ?>
<?php $start_it_about_text_left = get_field('start_it_about_text_left', $id); ?>
<?php $start_it_about_right_text = get_field('start_it_about_right_text', $id); ?>
<?php $start_it_about_image_left = get_field('start_it_about_image_left', $id); ?>
<?php $start_it_about_image_right = get_field('start_it_about_image_right', $id); ?>
<?php $start_it_about_image_right_2 = get_field('start_it_about_image_right_2', $id); ?>

<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <?= $start_it_about_sectoin; ?>
                </div>
                <div class="about_content_box box-left">
                    <div class="about_txt_box">
                        <?= $start_it_about_text_left ?>
                    </div>
                    <?php if(!empty($start_it_about_image_left)){ ?>
                        <div class="about_img_box">
                            <img src="<?=  $start_it_about_image_left; ?>" alt="img">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <?php if(!empty($start_it_about_image_right)){ ?>
                                <div class="about_img_box">
                                    <img src="<?= $start_it_about_image_right; ?>" alt="img">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <?php if(!empty($start_it_about_image_right_2)){ ?>
                                <div class="about_img_box">
                                    <img src="<?= $start_it_about_image_right_2; ?>" alt="img">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="about_txt_box">
                        <?= $start_it_about_right_text ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>