<?php get_header(); ?>
<header id="main-header">
    <div class="container">
        <!-- <h1>WebsitName</h1> -->
        <h1><?php bloginfo('name'); ?></h1>
        <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, modi?</p> -->
        <p><?php bloginfo('description') ?></p>
    </div>
</header>
<!-- Blog posts -->
<section id="blog-bosts">
    <div class="container posts-container">
        <!-- لو في مقالات اعرضها لو مافيش اظهر رسالة الخطأ -->
        <?php
                if(have_posts()):
                while(have_posts()):
                the_post();
        ?>
        <article class="card">
            <!-- لاظهار الصور -->
            <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <!-- <img src="https://via.placeholder.com/300" alt=""> -->
            </a>
            <?php else: ?>
            <a href="<?php the_permalink(); ?>">
                <img src="https://via.placeholder.com/300" alt="">
            </a>
            <?php endif; ?>
            <div>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <!-- <a href="#">
                        Lorem ipsum, dolor sit amet consectetur adipisicing.
                    </a> -->
                </h3>
                <!-- اظهر المقالة -->
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam ea expedita quas reiciendis
                    maiores doloribus!
                </p> -->

                <div class="post-catogeries">
                    <!-- ديناميك التصنيفات تظهر -->
                    <?php the_category(' '); ?>
                    <!-- <a href="#">category1</a>
                    <a href="#">category2</a>
                    <a href="#">category3</a> -->
                </div>
            </div>
        </article>
        <?php
                endwhile;
                else:
                echo "ther are no articales";
                endif;
        ?>
        <!-- <article class="card">
            <a href="#">
                <img src="https://via.placeholder.com/300" alt="">
            </a>
            <div>
                <h3>
                    <a href="#">
                        Lorem ipsum, dolor sit amet consectetur adipisicing.
                    </a>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam ea expedita quas reiciendis
                    maiores doloribus!
                </p>
                <div class="post-catogeries">
                    <a href="#">category1</a>
                    <a href="#">category2</a>
                    <a href="#">category3</a>
                </div>
            </div>
        </article>
        <article class="card">
            <a href="#">
                <img src="https://via.placeholder.com/300" alt="">
            </a>
            <div>
                <h3>
                    <a href="#">
                        Lorem ipsum, dolor sit amet consectetur adipisicing.
                    </a>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam ea expedita quas reiciendis
                    maiores doloribus!
                </p>
                <div class="post-catogeries">
                    <a href="#">category1</a>
                    <a href="#">category2</a>
                    <a href="#">category3</a>
                </div>
            </div>
        </article>
        <article class="card">
            <a href="#">
                <img src="https://via.placeholder.com/300" alt="">
            </a>
            <div>
                <h3>
                    <a href="#">
                        Lorem ipsum, dolor sit amet consectetur adipisicing.
                    </a>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam ea expedita quas reiciendis
                    maiores doloribus!
                </p>
                <div class="post-catogeries">
                    <a href="#">category1</a>
                    <a href="#">category2</a>
                    <a href="#">category3</a>
                </div>
            </div>
        </article> -->
    </div>
    <?php get_template_part('pagination'); ?>
</section>
<?php get_footer(); ?>