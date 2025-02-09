<?php
    get_header();
?>

<main class="container">
    <section class="homepage">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php
    get_footer();
?>