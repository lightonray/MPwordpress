<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'web_designer_elementor_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'web-designer-elementor' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_designer_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'web-designer-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-designer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-designer-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_designer_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'web-designer-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-designer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-designer-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	
	// TYPOGRAPHY SETTINGS

	Kirki::add_panel( 'web_designer_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'web-designer-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'web_designer_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h1_typography_heading',
		'section'     => 'web_designer_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h1_typography_font',
		'section'   =>  'web_designer_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'web_designer_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h2_typography_heading',
		'section'     => 'web_designer_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h2_typography_font',
		'section'   =>  'web_designer_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'web_designer_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h3_typography_heading',
		'section'     => 'web_designer_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h3_typography_font',
		'section'   =>  'web_designer_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'web_designer_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h4_typography_heading',
		'section'     => 'web_designer_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h4_typography_font',
		'section'   =>  'web_designer_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'web_designer_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h5_typography_heading',
		'section'     => 'web_designer_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h5_typography_font',
		'section'   =>  'web_designer_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'web_designer_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_h6_typography_heading',
		'section'     => 'web_designer_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_h6_typography_font',
		'section'   =>  'web_designer_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'web_designer_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_body_typography_heading',
		'section'     => 'web_designer_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_designer_elementor_body_typography_font',
		'section'   =>  'web_designer_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'web_designer_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'web-designer-elementor' ),
	) );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'web_designer_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_theme_options_panel',
		'description'    => esc_html__( 'Additional Settings of themes', 'web-designer-elementor' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_single_page_layout_heading',
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_designer_elementor_single_page_layout',
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-designer-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-designer-elementor' ),
			'One Column' => esc_html__( 'One Column', 'web-designer-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_header_background_attachment_heading',
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_designer_elementor_header_background_attachment',
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'web-designer-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'web-designer-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'web_designer_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_theme_options_panel',
		'description'    => esc_html__( 'Here you can add header information.', 'web-designer-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_designer_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-designer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-designer-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_menu_size_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'web-designer-elementor' ),
		'type'        => 'text',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_menu_text_transform_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_designer_elementor_menu_text_transform',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'web-designer-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'web-designer-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'web-designer-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'web-designer-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_menu_color',
		'label'       => __( 'Menu Color', 'web-designer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'web-designer-elementor' ),
		'type'        => 'color',
		'default'     => '#0e5af2',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'web-designer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'web-designer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'web-designer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_designer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#0e5af2',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_header_announcement_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Announcement', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_announcement',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_enable_button_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_button_text',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_button_url',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_enable_socail_link',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'web_designer_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'web-designer-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'web-designer-elementor' ),
		'settings'     => 'web_designer_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'web-designer-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'web-designer-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'web-designer-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'web-designer-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	 
	// POST SECTION

	  Kirki::add_section( 'web_designer_elementor_blog_post', array(
	    'title'          => esc_html__( 'Post Settings', 'web-designer-elementor' ),
	    'description'    => esc_html__( 'Here you can add post information.', 'web-designer-elementor' ),
	    'panel'    => 'web_designer_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_post_layout_heading',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_designer_elementor_post_layout',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-designer-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-designer-elementor' ),
			'One Column' => esc_html__( 'One Column', 'web-designer-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'web-designer-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'web-designer-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_length_setting_heading',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'web_designer_elementor_length_setting',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_single_post_tag',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_single_post_category',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_single_post_radius',
		'section'     => 'web_designer_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_designer_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'web-designer-elementor' ),
		'type'        => 'text',
		'section'     => 'web_designer_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );
		
	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'web_designer_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'web-designer-elementor' ),
		'panel'    => 'woocommerce',
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'web-designer-elementor' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_shop_page_layout',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-designer-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-designer-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'web_designer_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_products_per_row',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_products_per_page',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_designer_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'web-designer-elementor' ),
		'settings'    => 'web_designer_elementor_single_product_sidebar_layout',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-designer-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-designer-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'web_designer_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_products_button_border_radius_heading',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'web_designer_elementor_products_button_border_radius',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_sale_badge_position_heading',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_designer_elementor_sale_badge_position',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'web-designer-elementor' ),
			'left' => esc_html__( 'Left', 'web-designer-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_products_sale_font_size_heading',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'web_designer_elementor_products_sale_font_size',
		'section'     => 'web_designer_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'web_designer_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'web-designer-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'web-designer-elementor' ),
		'panel'    => 'web_designer_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_footer_text_heading',
		'section'     => 'web_designer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_designer_elementor_footer_text',
		'section'  => 'web_designer_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_footer_enable_heading',
		'section'     => 'web_designer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_designer_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-designer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-designer-elementor' ),
		],
	] );
}