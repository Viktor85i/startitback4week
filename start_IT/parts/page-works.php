<?php $id = get_the_ID() ?>
<?php $start_it_portfolio_title = get_field('start_it_portfolio_title', $id); ?>
<?php $start_it_portfolio_repeater = get_field('start_it_portfolio_repeater', $id); ?>
<?php $filter_items=[]; ?>
<?php foreach($start_it_portfolio_repeater as $value){
        foreach($value['filters'] as $filter){
            if(!in_array($filter['filter']['label'], $filter_items)){
                $filter_items[$filter['filter']['value']]=$filter['filter']['label'];
            }
        }
}
?>
<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <?= $start_it_portfolio_title; ?>
        </div>
        <?php if(is_array($filter_items)){ ?>
            <ul id="filters" class="clearfix text-center">
                <li><span class="filter active" data-filter="*">All</span></li>
                <?php foreach($filter_items as $key=>$value){ ?>
                    <li><span class="filter" data-filter=".<?= $key; ?>"><?= $value; ?></span></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <div id="portfoliolist">
            <?php if(!empty($start_it_portfolio_repeater)){ ?>
                <div class="row">
                    <?php foreach($start_it_portfolio_repeater as $value){ ?>
                        <?php $classes = '';
                            foreach($value['filters'] as $filter){
                                $classes.= ' '.$filter['filter']['value'];
                            }
                        ?>
                        <div class="col-md-4 col-lg-3 portfolio <?= $classes; ?>">
                            <div class="portfolio-wrapper">
                                <div class="works-img">
                                    <a href="<?= $value['image']; ?>" data-fancybox="<?php echo bloginfo('template_url'); ?>/assets/images">
                                        <img src="<?= $value['image']; ?>" alt=""/>
                                    </a>
                                </div>
                                <div class="works-info">
                                    <div class="label-text">
                                        <h4><?= $value['tltle'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>