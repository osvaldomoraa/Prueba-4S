<?php 

add_action( 'cmb2_init', 'cmb2_home_hero_metabox' );
function cmb2_home_hero_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_hero_metabox',
		'title'        => __( 'Seccion: Hero', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

    $cmb->add_field( array(
		'name' => __( 'Logo', 'cmb2' ),
		'id' => $prefix . 'logo_hero',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_hero',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion - enfasis', 'cmb2' ),
		'id' => $prefix . 'title_accent_hero',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_hero',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal - enfasis', 'cmb2' ),
		'id' => $prefix . 'text_accent_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen de fondo', 'cmb2' ),
		'id' => $prefix . 'image_background_hero',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Placeholder 1', 'cmb2' ),
		'id' => $prefix . 'placeholder_1_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Placeholder 2', 'cmb2' ),
		'id' => $prefix . 'placeholder_2_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Placeholder 3', 'cmb2' ),
		'id' => $prefix . 'placeholder_3_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Placeholder 4', 'cmb2' ),
		'id' => $prefix . 'placeholder_4_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Placeholder 5', 'cmb2' ),
		'id' => $prefix . 'placeholder_5_hero',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Botón del formulario', 'cmb2' ),
		'id' => $prefix . 'button_form_hero',
		'type' => 'text',
	) );
}

add_action( 'cmb2_init', 'cmb2_home_decide_metabox' );
function cmb2_home_decide_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_decide_metabox',
		'title'        => __( 'Seccion: Decide', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_decide',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion - enfasis', 'cmb2' ),
		'id' => $prefix . 'title_accent_decide',
		'type' => 'text',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_decide',
		'type' => 'textarea_code',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Imagen de fondo', 'cmb2' ),
		'id' => $prefix . 'image_background_decide',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'cmb2_home_storey_metabox' );
function cmb2_home_storey_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_storey_metabox',
		'title'        => __( 'Seccion: Plantas', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

    $cmb->add_field( array(
		'name' => __( 'Modelo 1', 'cmb2' ),
		'id' => $prefix . 'model_nav_1_storey',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen del modelo 1', 'cmb2' ),
		'id' => $prefix . 'image_model_1_storey',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Tamaño del modelo 1', 'cmb2' ),
		'id' => $prefix . 'size_model_1_storey',
		'type' => 'text',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Caracteristicas del modelo 1', 'cmb2' ),
		'id' => $prefix . 'features_model_1_storey',
		'type' => 'text',
        'repeatable' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Modelo 2', 'cmb2' ),
		'id' => $prefix . 'model_nav_2_storey',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen del modelo 2', 'cmb2' ),
		'id' => $prefix . 'image_model_2_storey',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Tamaño del modelo 2', 'cmb2' ),
		'id' => $prefix . 'size_model_2_storey',
		'type' => 'text',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Caracteristicas del modelo 2', 'cmb2' ),
		'id' => $prefix . 'features_model_2_storey',
		'type' => 'text',
        'repeatable' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Modelo 3', 'cmb2' ),
		'id' => $prefix . 'model_nav_3_storey',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen del modelo 3', 'cmb2' ),
		'id' => $prefix . 'image_model_3_storey',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Tamaño del modelo 3', 'cmb2' ),
		'id' => $prefix . 'size_model_3_storey',
		'type' => 'text',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Caracteristicas del modelo 3', 'cmb2' ),
		'id' => $prefix . 'features_model_3_storey',
		'type' => 'text',
        'repeatable' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Modelo 4', 'cmb2' ),
		'id' => $prefix . 'model_nav_4_storey',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen del modelo 4', 'cmb2' ),
		'id' => $prefix . 'image_model_4_storey',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Tamaño del modelo 4', 'cmb2' ),
		'id' => $prefix . 'size_model_4_storey',
		'type' => 'text',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Caracteristicas del modelo 4', 'cmb2' ),
		'id' => $prefix . 'features_model_4_storey',
		'type' => 'text',
        'repeatable' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Modelo 5', 'cmb2' ),
		'id' => $prefix . 'model_nav_5_storey',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen del modelo 5', 'cmb2' ),
		'id' => $prefix . 'image_model_5_storey',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Tamaño del modelo 5', 'cmb2' ),
		'id' => $prefix . 'size_model_5_storey',
		'type' => 'text',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Caracteristicas del modelo 5', 'cmb2' ),
		'id' => $prefix . 'features_model_5_storey',
		'type' => 'text',
        'repeatable' => true,
	) );
}

add_action( 'cmb2_init', 'cmb2_home_amenities_metabox' );
function cmb2_home_amenities_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_amenities_metabox',
		'title'        => __( 'Seccion: Amenidades', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 1', 'cmb2' ),
		'id' => $prefix . 'title_card_1_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 1', 'cmb2' ),
		'id' => $prefix . 'image_card_1_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 2', 'cmb2' ),
		'id' => $prefix . 'title_card_2_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 2', 'cmb2' ),
		'id' => $prefix . 'image_card_2_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 3', 'cmb2' ),
		'id' => $prefix . 'title_card_3_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 3', 'cmb2' ),
		'id' => $prefix . 'image_card_3_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 4', 'cmb2' ),
		'id' => $prefix . 'title_card_4_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 4', 'cmb2' ),
		'id' => $prefix . 'image_card_4_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 5', 'cmb2' ),
		'id' => $prefix . 'title_card_5_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 5', 'cmb2' ),
		'id' => $prefix . 'image_card_5_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 6', 'cmb2' ),
		'id' => $prefix . 'title_card_6_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 6', 'cmb2' ),
		'id' => $prefix . 'image_card_6_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 7', 'cmb2' ),
		'id' => $prefix . 'title_card_7_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 7', 'cmb2' ),
		'id' => $prefix . 'image_card_7_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 8', 'cmb2' ),
		'id' => $prefix . 'title_card_8_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 8', 'cmb2' ),
		'id' => $prefix . 'image_card_8_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 9', 'cmb2' ),
		'id' => $prefix . 'title_card_9_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 9', 'cmb2' ),
		'id' => $prefix . 'image_card_9_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 10', 'cmb2' ),
		'id' => $prefix . 'title_card_10_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 10', 'cmb2' ),
		'id' => $prefix . 'image_card_10_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 11', 'cmb2' ),
		'id' => $prefix . 'title_card_11_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 11', 'cmb2' ),
		'id' => $prefix . 'image_card_11_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 12', 'cmb2' ),
		'id' => $prefix . 'title_card_12_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 12', 'cmb2' ),
		'id' => $prefix . 'image_card_12_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 13', 'cmb2' ),
		'id' => $prefix . 'title_card_13_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 13', 'cmb2' ),
		'id' => $prefix . 'image_card_13_amenities',
		'type' => 'file',
	) );

    $cmb->add_field( array(
		'name' => __( 'Titulo de la amenidad 14', 'cmb2' ),
		'id' => $prefix . 'title_card_14_amenities',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la amenidad 14', 'cmb2' ),
		'id' => $prefix . 'image_card_14_amenities',
		'type' => 'file',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Poligono 1', 'cmb2' ),
		'id' => $prefix . 'polygon_1_amenities',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'cmb2_home_map_metabox' );
function cmb2_home_map_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_map_metabox',
		'title'        => __( 'Seccion: Mapa', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_map',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Correo', 'cmb2' ),
		'id' => $prefix . 'mail_map',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Dirección - linea 1', 'cmb2' ),
		'id' => $prefix . 'address_line_1_map',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Dirección - linea 2', 'cmb2' ),
		'id' => $prefix . 'address_line_2_map',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Dirección - linea 3', 'cmb2' ),
		'id' => $prefix . 'address_line_3_map',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Boton', 'cmb2' ),
		'id' => $prefix . 'button_map',
		'type' => 'text',
	) );

    $cmb->add_field( array(
		'name' => __( 'Imagen de fondo', 'cmb2' ),
		'id' => $prefix . 'image_background_map',
		'type' => 'file',
	) );
    
    $cmb->add_field( array(
		'name' => __( 'Poligono 1', 'cmb2' ),
		'id' => $prefix . 'polygon_1_map',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'cmb2_home_footer_metabox' );
function cmb2_home_footer_metabox() {

	$prefix = 'more_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_footer_metabox',
		'title'        => __( 'Seccion: Footer', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Logo', 'cmb2' ),
		'id' => $prefix . 'logo_footer',
		'type' => 'file',
	) ); 
    
    $cmb->add_field( array(
		'name' => __( 'Texto - linea 1', 'cmb2' ),
		'id' => $prefix . 'text_line_1_footer',
		'type' => 'text',
	) ); 

    $cmb->add_field( array(
		'name' => __( 'Texto - linea 2', 'cmb2' ),
		'id' => $prefix . 'text_line_2_footer',
		'type' => 'text',
	) );  

    $cmb->add_field( array(
		'name' => __( 'Partner', 'cmb2' ),
		'id' => $prefix . 'partner_footer',
		'type' => 'file',
	) ); 
    	
}