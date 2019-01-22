 <?php $id = get_the_ID() ?>
<?php $start_it_title_section_services = get_field('start_it_title_section_services', $id); ?>
<?php $start_it_section_services_description = get_field('start_it_section_services_description', $id); ?>
<?php $args=[
        'post_type'=>'services',
        'posts_per_page'=>3,
        'order'       => 'ASC',
    ];
$query=new WP_Query($args); ?>
<section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?= $start_it_title_section_services ?></h2>
                        <p><?= $start_it_section_services_description ?></p>
                    </div>
                    <?php if($query->have_posts()){ ?>
                    <div class="row">
                        <?php while ($query->have_posts()){
                    $query->the_post();
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="servicebox">
                                <div class="srv_desc">
                                    <div class="srv_desc">
                                            <?php the_content() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <?php } ?>
                </div>
            </section>