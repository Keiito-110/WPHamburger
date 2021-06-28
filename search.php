<?php get_header(); ?>
     
        <main class="l-main--archivetop c-figure--archivetop">
            <h1 class="c-title--main">検索結果:</h1>
            <h1 class="c-title--main"><?php echo '"'.$_GET['s'].'"'; ?></h1>
        </main>


        <?php if (isset($_GET['s']) && empty($_GET['s'])): ?>
            '検索キーワード未入力':
        <?php else: ?>
            <?php echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; ?>
            <?php while (have_posts()): the_post();?>
                <article class="l-main--archive">
                    <?php 
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        echo '<div class="l-main--archivebox c-figure--archive"　body style="background: url('. $url.') no-repeat center center / cover;"></div>';
                    ?>
                    <div class="l-main--archivebox">
                        <dl class="c-title--archive_comment">                        
                        <h2 class="c-title--archive"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        </dl>
                        <button class="c-button--detail c-title--detail"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>    
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_pagenavi(); ?>

    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>

</html>
