<!-- pagenation -->



<div id="pagination">
    <div class="container">
        <div class="nav-previous align-left">
            <?php if(is_single()): ?>
            <?php previous_post_link('<strong>%link</strong>'); ?>
            <?php else:?>
            <?php previous_posts_link('Previous posts'); ?>
            <?php endif; ?>
            <!-- <a href="#">Older posts</a> -->
        </div>
        <div class="nav-next align-right">
            <?php if(is_single()): ?>
            <?php next_post_link('<strong>%link</strong>'); ?>
            <?php else:?>
            <?php next_posts_link('Next posts'); ?>
            <?php endif; ?>
            <!-- <a href="#">Newer posts</a> -->
        </div>
    </div>
</div>