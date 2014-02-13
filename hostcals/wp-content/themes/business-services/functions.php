<?php

	remove_filter( 'the_content', 'wpautop' );

	function whitebox_func( $atts, $content = null ) {

		return '<div class="whitebox">' . $content . '</div>';

	}

	add_shortcode( 'whitebox', 'whitebox_func' );

	function contact_bio_func( $atts, $content = null ) {

		return '<div class="contact-bio">' . $content . '</div>';

	}

	add_shortcode( 'contact-bio', 'contact_bio_func' );

	function explanation_func( $atts, $content = null ) {

		return '<div class="page-explanation">' . $content . '</div>';

	}

	add_shortcode( 'explanation', 'explanation_func' );

	function pageInfo_func( $atts, $content = null ) {

		return '<div class="page-info">' . $content . '</div>';

	}

	add_shortcode( 'pageinfo', 'pageInfo_func' );

	function list_links_func( $cat ) {

		 return wp_list_bookmarks(
		 		array(
		 			 'orderby' => 'name',

		 		)
		 	);
		 
	}
	add_shortcode( 'list_links', 'list_links_func' );


	add_action( 'init', 'create_post_type' );

	function create_post_type() {
		register_post_type( 'accounting',
			array(
				'labels' => array(
					'name' => __( 'accounting' ),
					'singular_name' => __( 'accounting' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( '136-funds',
			array(
				'labels' => array(
					'name' => __( '136 Funds' ),
					'singular_name' => __( '136 Funds' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( 'budget',
			array(
				'labels' => array(
					'name' => __( 'budget' ),
					'singular_name' => __( 'budget' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( 'award-management',
			array(
				'labels' => array(
					'name' => __( 'award management' ),
					'singular_name' => __( 'award management' )
				),
			// 'taxonomies' => array('category'), 
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( 'purchasing',
			array(
				'labels' => array(
					'name' => __( 'purchasing' ),
					'singular_name' => __( 'purchasing' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( 'travel',
			array(
				'labels' => array(
					'name' => __( 'travel' ),
					'singular_name' => __( 'travel' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( 'forms',
			array(
				'labels' => array(
					'name' => __( 'forms' ),
					'singular_name' => __( 'form' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
	}


?>