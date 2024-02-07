<footer>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
    </nav>
    <p><?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?> - All rights reserved.</p>
    <p>Theme By <a href="https://dev.informigados.com.br/">Dev INformigados</a></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
