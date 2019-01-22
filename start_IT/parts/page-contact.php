<?php $copyright=get_fields('options'); ?>
<?php
if(is_array($copyright)){
    $phone=!empty($copyright['start_it_phone'])?$copyright['start_it_phone']:'';
    $address=!empty($copyright['start_it_adress'])?$copyright['start_it_adress']:'';
    $email=!empty($copyright['start_it_email'])?$copyright['start_it_email']:'';
    $social=!empty($copyright['start_it_social'])?$copyright['start_it_social']:'';
}
?>

<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="contact-info">
                    <div class="contact-info-details">
                        <h4>Phone</h4>
                        <p><?php echo $phone; ?></p>
                    </div>
                    <div class="contact-info-details">
                        <h4>Address</h4>
                        <p><?php echo $address; ?></p>
                    </div>
                    <div class="contact-info-details">
                        <h4>E-mail</h4>
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 offset-lg-1">
                <div class="contact-form-two">
                    <div class="contact-title">
                        <h3>Drop Us a line</h3>
                        <form class="appoint-form-two"
                              action="http://wpthemebooster.com/demo/themeforest/html/carrby/register.php"
                              method="post">
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control"
                                                   placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control"
                                                      placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="submit-btn">
                                            <input type="submit" name="submit" class="btn" value="send mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <?php if(is_array($social)) {?>
                                        <ul class="top-social list-inline">
                                            <?php foreach ($social as $value) { ?>
                                            <li><a href="<?=$value['link'] ?>"><i class="<?= $value['class'] ?>"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>