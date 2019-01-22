<?php $id = get_the_ID() ?>
<?php $start_it_articles_title = get_field('start_it_articles_title', $id); ?>
<?php $args=[
        'post_type'=>'post',
        'posts_per_page'=>3,
    ];
$query=new WP_Query($args); ?>
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <?= $start_it_articles_title; ?>
        </div>
        <?php if($query->have_posts()){ ?>
            <div class="row">
                <?php while ($query->have_posts()){
                    $query->the_post();
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog_post">
                            <div class="post_img">
                                <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail(); ?></a>
                            </div>
                            <div class="post_content">
                                <div class="post_header">
                                    <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                    <div class="read_more"><a href="<?php the_permalink(); ?>">Go to article</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</section>