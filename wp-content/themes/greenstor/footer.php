<footer id="main-footer">
    <div class="container footer-container">
        <div class="footer-column">
            <div class="elshaer-widget">
                <?php if (is_active_sidebar('footer1')); ?>
                <?php dynamic_sidebar('footer1'); ?>
                <!-- <h4>About us</h4>
                <p>lorem</p> -->
            </div>
        </div>
        <div class="footer-column">
            <div class="elshaer-widget">
                <?php if (is_active_sidebar('footer2')); ?>
                <?php dynamic_sidebar('footer2'); ?>
                <!-- <h4>About us</h4>
                <ul>
                    <li><a href="#">link1</li>
                    <li><a href="#">link2</li>
                    <li><a href="#">link3</li>
                    <li><a href="#">link4</li>
                </ul> -->
            </div>
        </div>
        <div class="footer-column">
            <div class="elshaer-widget">
                <?php if (is_active_sidebar('footer3')); ?>
                <?php dynamic_sidebar('footer3'); ?>
                <!-- <h4>About us</h4>
                <ul>
                    <li><a href="#">link1</li>
                    <li><a href="#">link2</li>
                    <li><a href="#">link3</li>
                    <li><a href="#">link4</li>
                </ul> -->
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