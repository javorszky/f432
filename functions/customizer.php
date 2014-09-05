<?php


class ElectricStudioThemeCustomizer {
    function __construct() {
        add_action( 'customize_register', array( $this, 'customize_register' ) );

    }

    public function customize_register( $wp_customize ) {


        /**
         * The settings I want to handle
         */
        $wp_customize->add_setting( 'es_twitter' , array(
            'default'     => '',
            'type' => 'option'

        ) );

        $wp_customize->add_setting( 'es_facebook' , array(
            'default'     => '',
            'type' => 'option'

        ) );

        $wp_customize->add_setting( 'es_linkedin' , array(
            'default'     => '',
            'type' => 'option'
        ) );

        $wp_customize->add_setting( 'es_google' , array(
            'default'     => '',
            'type' => 'option'
        ) );


        /**
         * The section I want to handle the settings in
         */
        $wp_customize->add_section( 'electric_studio_theme_setting' , array(
            'title'      => 'Social Link Settings',
            'priority'   => 60,
        ) );

        /**
         * Adding the controls
         */
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'es_twitter', array(
            'label'          => 'Twitter',
            'section'        => 'electric_studio_theme_setting',
            'settings'       => 'es_twitter',
            'type'           => 'text',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'es_facebook', array(
            'label'          => 'Facebook',
            'section'        => 'electric_studio_theme_setting',
            'settings'       => 'es_facebook',
            'type'           => 'text',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'es_linkedin', array(
            'label'          => 'LinkedIn',
            'section'        => 'electric_studio_theme_setting',
            'settings'       => 'es_linkedin',
            'type'           => 'text',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'es_google', array(
            'label'          => 'Google+',
            'section'        => 'electric_studio_theme_setting',
            'settings'       => 'es_google',
            'type'           => 'text',
        ) ) );
    }
}

$estc = new ElectricStudioThemeCustomizer;
