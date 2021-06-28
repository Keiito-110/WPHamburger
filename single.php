<?php get_header(); ?>

        <?php 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<main class="l-main--singletop"　body style="background: url('. $url.') center center / cover no-repeat;">';
        ?>

        <h1  class="c-title--main"><?php the_title(); ?></h1>

        </main>

        <div class="c-title--single_discription">
            <?php the_content(); ?>

        </div>

        <quote class="l-main--singlequote c-title--singlequote">
            <h2>Blockquote <small> 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</small></h2>
            <reference>出典元：<a href="#">○○○○○○○○○○○○</a></reference>
        </quote>

        <div class="l-main--singlemain c-figure--singlemain"></div>

        <article class="l-main--single">
            <image class="l-main--singlebox c-figure--singlemenu"></image>
            <div class="l-main--singlebox c-title--single_comment">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</div>
        </article>

        <article class="l-main--single">
            <div class="l-main--singlebox c-title--single_comment">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</div>
            <image class="l-main--singlebox c-figure--singlemenu"></image>
        </article>

        <div class="l-main--single">
            <image class="l-main--singlebox c-figure--singlemenu"></image>
        </div>

        <div class="l-main--singleblock">
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
            <image class="l-main--singlecell c-figure--singlemenu"></image>
        </div>

        <div class="l-main--singlelist">
            <ul class="c-title--singlelist1">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>

            <ul class="c-title--singlelist2">
                <li>1.リスト2リスト2リスト2</li>
                <li>2.リスト2リスト2リスト2</li>
            </ul>

            <ul class="c-title--singlelist1">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>
        </div>
              
        <div class="l-main--singlelist">
            <ul class="c-title--singlelist1">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>

            <ul class="c-title--singlelist2">
                <li>1.リスト2リスト2リスト2</li>
                <li>2.リスト2リスト2リスト2</li>
            </ul>

            <ul class="c-title--singlelist1">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>
        </div>

        <div class="c-list--single">
            <h3>&lt;html&gt;</h3>
            <ul>
                <li>&lt;head&gt;</li>
                <li>&lt;/head&gt;</li>
                <li>&lt;body&gt;</li>
                <li>&lt;/body&gt;</li>
            </ul>
            <h3>&lt;/html&gt;</h3>
        </div>

        <table class="p-table--single">
            <tr>
                <td class="p-table--row1">テーブル</td><td class="p-table--row2">テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
        </table>


        <button class="c-button--single c-title--detail"><a href="#">ボタン</a></button>         

        <h3 class="c-title--singlebold">boldboldboldboldboldboldbold</h3>

    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
<?php wp_footer();?>

</body>

</html>
    

