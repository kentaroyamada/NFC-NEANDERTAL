<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'products' )
	->fields(
		Field::inst( 'type' ),
		Field::inst( 'name' ),
		Field::inst( 'image_url' ),
		Field::inst( 'description' ),
		Field::inst( 'is_refillable' )
	)
	->process( $_POST )
	->json();
