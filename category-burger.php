<?php get_header(); ?>  
        
        <main class="l-main--archivetop c-figure--burgertop">
            <h1 class="c-title--main">Menu:</h1>
            <h1 class="c-title--main">バーガー</h1>
        </main>

        <dl class="c-title--archive_discription">
            <dt>小見出しが入ります</dt>
            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>

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

        <?php wp_pagenavi(); ?>

    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
<?php wp_footer();?>

</body>

</html>
