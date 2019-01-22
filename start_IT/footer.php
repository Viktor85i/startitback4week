<?php $copyright=get_fields('options'); ?>
<footer id="footer" class="footer">
    <div class="footer-bottom">
        <div class="container">
            <?php if(is_array($copyright)){ ?>
                <div class="copyright">
                    <?= $copyright['start_it_footer_copyright']; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
