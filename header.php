<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_front_page()) : ?>
        <meta name="description" content="Descrição breve da sua página inicial.">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="hamburger-menu">
        <span>&#9776; Menu</span>
    </div>
    <div class="site-title">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.hamburger-menu').addEventListener('click', function () {
            document.querySelector('nav ul').classList.toggle('open');
        });
    });
</script>
</body>
</html>
