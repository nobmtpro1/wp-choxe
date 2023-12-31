<?php

// Shortcode to display a single product
add_ux_builder_shortcode( 'scroll_to', array(
    'name' => 'Scroll To',
    'category' => __( 'Content' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'scroll_to' ),
    'info' => '{{ title }}',
    'wrap' => false,

    'presets' => array(
        array(
            'name' => __( 'Default' ),
            'content' => '[scroll_to title="" link="" bullet="true"]'
        ),
    ),

    'options' => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Title',
            'default' => 'Change this',
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Link',
            'default' => '',
            'placeholder' => 'Leave empty to auto create',
            'description' => 'You can scroll to this by using #value as link'
        ),
        'bullet' => array(
            'type' => 'radio-buttons',
            'heading' => __('Bullet'),
            'default' => 'true',
            'options' => array(
                'false'  => array( 'title' => 'Off'),
                'true'  => array( 'title' => 'On'),
            ),
        ),
        'offset_options' => array(
	        'type'    => 'group',
	        'heading' => 'Scroll offset',
	        'options' => array(
		        'offset_type' => array(
			        'type'    => 'radio-buttons',
			        'heading' => 'Type',
			        'default' => '',
			        'options' => array(
				        ''      => array( 'title' => 'Auto' ),
				        'custom' => array( 'title' => 'Custom' ),
			        ),
		        ),
		        'offset'      => array(
			        'type'       => 'slider',
			        'heading'    => 'Value',
			        'conditions' => 'offset_type == "custom"',
			        'default'    => '0',
			        'min'        => '0',
			        'max'        => '1000',
			        'unit'       => 'px',
		        ),
	        ),
        ),
    ),
) );
