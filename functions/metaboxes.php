<?php
/*
 * File name - metaboxes.php
 * Meta box functionality has been created by Rilwis @ http://www.deluxeblogtips.com and can be downloaded as a plugin from the wordpress repository.
 * Use underscore (_) at the beginning to make keys hidden, for example $prefix = '_es_';
 */
$prefix = '_es_';

global $meta_boxes;

// Set up the array to store all the meta boxes data.
$meta_boxes = array();

$meta_boxes[] = array(
	'id' => 'corpus_meta',
	'title' => 'Corpus Meta',
	'pages' => array('corpi'),
	'fields' => array(
		array(
			'name' => 'Dataset Type',
			'id' => $prefix . 'dataset_type',
			'type' => 'radio',
			'options' => array(
				'mono' => 'Monolingual',
				'multi' => 'Multilingual'
			)
		),
		array(
			'name' => 'Content Date',
			'id' => $prefix . 'content_date',
			'type' => 'date',
			'js_options' => array(
                    'appendText'      => __( '(yyyy)', 'rwmb' ),
                    'dateFormat'      => __( 'yy', 'rwmb' ),
                    'changeMonth'     => false,
                    'changeYear'      => true,
                    'showButtonPanel' => true,
            )
		),
		array(
			'name' => 'Filesize',
			'id' => $prefix . 'filesize',
			'type' => 'text'
		),
		array(
			'name' => 'Defined Terms',
			'id' => $prefix . 'defined_terms',
			'type' => 'number'
		),
		array(
			'name' => 'Translated Terms',
			'id' => $prefix . 'translated_terms',
			'type' => 'number'
		),
		array(
			'name' => 'Synonym Entries',
			'id' => $prefix . 'synonym_entries',
			'type' => 'number'
		),
		array(
			'name' => 'Definitions',
			'id' => $prefix . 'definitions',
			'type' => 'number'
		),
		array(
			'name' => 'Translations',
			'id' => $prefix . 'translations',
			'type' => 'number'
		),
		array(
			'name' => 'Synonyms',
			'id' => $prefix . 'synonyms',
			'type' => 'number'
		),
		array(
			'name' => 'Antonyms',
			'id' => $prefix . 'antonyms',
			'type' => 'number'
		),
		array(
			'name' => 'Total examples and idioms',
			'id' => $prefix . 'total_idioms',
			'type' => 'number'
		),
		array(
			'name' => 'Etymologies',
			'id' => $prefix . 'etymologies',
			'type' => 'number'
		),
		array(
			'name' => 'Phonetics',
			'id' => $prefix . 'phonetics',
			'type' => 'checkbox',
			'std' => 0,
			'desc' => 'Tick the box if Phonetics are included'
		),
		array(
			'name' => 'Phonetic transcription',
			'id' => $prefix . 'phonetic_transcription',
			'type' => 'text'
		),
		array(
			'name' => 'Inflected forms',
			'id' => $prefix . 'inflected_forms',
			'type' => 'checkbox',
			'std' => 0,
			'desc' => 'Tick the box if Inflected forms are included'
		),
		array(
			'name' => 'Can full inflections be provided?',
			'id' => $prefix . 'full_inflecteds_provided',
			'type' => 'checkbox',
			'std' => 0,
			'desc' => 'Tick the box if they can be provided.'
		),
		array(
			'name' => 'Regional varieties',
			'id' => $prefix . 'regional_varieties',
			'type' => 'text'
		)
	)
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function _es_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', '_es_register_meta_boxes' );
