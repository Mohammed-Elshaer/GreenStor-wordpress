<!-- pagenation -->



<div id="pagination">
    <div class="container">
        <div class="nav-previous align-left">
            <?php if(is_single()): ?>
            <?php previous_post_link('<strong>السابق - %link</strong>'); ?>
            <?php else:?>
            <?php previous_posts_link('Older posts'); ?>
            <?php endif; ?>

            <!-- <a href="#">Older posts</a> -->
        </div>
        <div class="nav-next align-right">
            <?php if(is_single()): ?>
            <?php next_post_link('<strong>التالي - %link</strong>'); ?>
            <?php else:?>
            <?php next_posts_link('Newer posts'); ?>
            <?php endif; ?>
            <!-- <a href="#">Newer posts</a> -->

        </div>
    </div>
</div>