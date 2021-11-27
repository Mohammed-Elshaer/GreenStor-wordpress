<?php get_header(); ?>

<!-- single -->

<section id="single" class="container">
    <div class="single-content">

        <?php if(have_posts()):?>
        <?php while(have_posts()):?>
        <?php the_post(); ?>

        <article class="card">
            <div class="artical-header">
                <!-- <h1>Lorem ipsum dolor sit.</h1> -->
                <h1> <?php the_title(); ?></h1>
                <!-- <small>elshaer 20 nov 2021</small> -->
                <small><?php the_date(); ?> - <?php the_author(); ?></small>

                <div class="post-catogeries">
                    <?php the_category(' '); ?>
                    <!-- <a href="#">catogries1</a>
                    <a href="#">catogries2</a>
                    <a href="#">catogries3</a> -->
                </div>
            </div>
            <div class="artical-content">
                <p><?php the_content(); ?></p>
                <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                    <!-- <img src="https://via.placeholder.com/300" alt=""> -->
                </a>
                <?php else: ?>
                <a href="<?php the_permalink(); ?>">
                    <img src="https://via.placeholder.com/300" alt="">
                </a>
                <?php endif; ?>
                <!-- <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Impedit pariatur obcaecati dolores
                    consectetur architecto vel blanditiis nostrum esse,
                    omnis molestias perferendis iste accusantium
                    saepe unde non debitis ratione eaque amet!
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Impedit pariatur obcaecati dolores
                    consectetur architecto vel blanditiis nostrum esse,
                    omnis molestias perferendis iste accusantium
                    saepe unde non debitis ratione eaque amet!
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Impedit pariatur obcaecati dolores
                    consectetur architecto vel blanditiis nostrum esse,
                    omnis molestias perferendis iste accusantium
                    saepe unde non debitis ratione eaque amet!
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Impedit pariatur obcaecati dolores
                    consectetur architecto vel blanditiis nostrum esse,
                    omnis molestias perferendis iste accusantium
                    saepe unde non debitis ratione eaque amet!
                </p> -->
            </div>
    </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <?php get_template_part('pagination'); ?>

</section>

<?php get_footer(); ?>