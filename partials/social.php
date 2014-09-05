<?php
$socials = apply_filters( 'es_social_links', array( 'google', 'twitter', 'linkedin', 'facebook' ) );
?>
<div class="social-bar">
    <?php
    foreach ($socials as $social) {
        $url = get_option( 'es_' . $social );
        if( !empty( $url ) ) {
            ?>
            <a target="_blank" href="<?php echo $url; ?>" class="social <?php echo $social; ?>">
                <?php include TEMPLATEPATH . '/images/svg/social_' . $social . '.svg'; ?>
            </a>
            <?php
        }
    }
    ?>
</div>
