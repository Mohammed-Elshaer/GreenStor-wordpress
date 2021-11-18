<footer id="main-footer">
    <div class="container footer-container">
        <div class="footer-column">
            <?php if (is_active_sidebar('footer1')); ?>
            <?php dynamic_sidebar('footer1'); ?>

        </div>

        <div class="footer-column">
            <?php if (is_active_sidebar('footer2')); ?>
            <?php dynamic_sidebar('footer2'); ?>

        </div>
        <div class="footer-column">
            <div class="elshaer-widget">
                <?php if (is_active_sidebar('footer3')); ?>
                <?php dynamic_sidebar('footer3'); ?>

            </div>
        </div>
        <div class="footer-row">
            <p>copyright Elshaer 2021</p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>