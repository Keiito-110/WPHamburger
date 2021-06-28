<aside class="l-sidebar">

    <nav class="p-nav--menu">
        <h1 class="c-title--menu">Menu</h1>
        <button class="p-hamburger">
            <span>menuボタン</span>
        </button>
    </nav>

    <ul class="p-nav--sidebar">
        <?php echo str_replace('sub-menu', 'c-list--menu', 
        wp_nav_menu( array('menu_class' => 'c-list--title', 'echo' => false, ) )); ?>
    </ul>

</aside>