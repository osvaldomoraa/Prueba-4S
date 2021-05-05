<?php 

//Template Name: Pagina de inicio

function template_home_styles(){  
    wp_enqueue_style( 'landing' );
}
add_action('wp_enqueue_scripts','template_home_styles');

get_header();?>

    <body>
        <main>
            <section id="hero-section">
                <div class="layer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 col-xl-6">
                                <div class="hero-section-heading-box">
                                    <figure class="hero-section-logo-wrapper">
                                        <img class="hero-section-logo" src="<?php $more_cmb2_logo_hero = get_post_meta( get_the_ID(), 'more_cmb2_logo_hero', true ); echo esc_url( $more_cmb2_logo_hero ); ?>" alt="">                                
                                    </figure>
                                    <h1 class="hero-section-heading">
                                        <?php
                                            $more_cmb2_title_hero = get_post_meta( get_the_ID(), 'more_cmb2_title_hero', true );
                                            echo esc_html( $more_cmb2_title_hero );
                                        ?> 
                                    <span class="contrast-word">
                                        <?php
                                            $more_cmb2_title_accent_hero = get_post_meta( get_the_ID(), 'more_cmb2_title_accent_hero', true );
                                            echo esc_html( $more_cmb2_title_accent_hero );
                                        ?>
                                    </span>
                                    </h1>
                                </div>
                            </div> 
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="col-md-12 col-lg-5 col-xl-4">
                                <p class="standard-text hero-section-text">
                                    <?php
                                        $more_cmb2_text_hero = get_post_meta( get_the_ID(), 'more_cmb2_text_hero', true );
                                        echo esc_html( $more_cmb2_text_hero );
                                    ?>  
                                    <span class="bold-word">
                                        <?php
                                            $more_cmb2_text_accent_hero = get_post_meta( get_the_ID(), 'more_cmb2_text_accent_hero', true );
                                            echo esc_html( $more_cmb2_text_accent_hero );
                                        ?>
                                    </span>                                  
                                </p>
                            </div>
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="col-md-12 col-lg-4 col-xl-3">
                                <div class="hero-section-form-box">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Hero_Form_Name" placeholder="<?php $more_cmb2_placeholder_1_hero = get_post_meta( get_the_ID(), 'more_cmb2_placeholder_1_hero', true ); echo esc_html( $more_cmb2_placeholder_1_hero ); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Hero_Form_Last_Name" placeholder="<?php $more_cmb2_placeholder_2_hero = get_post_meta( get_the_ID(), 'more_cmb2_placeholder_2_hero', true ); echo esc_html( $more_cmb2_placeholder_2_hero ); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Hero_Form_Mail" placeholder="<?php $more_cmb2_placeholder_3_hero = get_post_meta( get_the_ID(), 'more_cmb2_placeholder_3_hero', true ); echo esc_html( $more_cmb2_placeholder_3_hero ); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Hero_Form_Phone" placeholder="<?php $more_cmb2_placeholder_4_hero = get_post_meta( get_the_ID(), 'more_cmb2_placeholder_4_hero', true ); echo esc_html( $more_cmb2_placeholder_4_hero ); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="Hero_Form_Interest" required>
                                              <option selected="true" disabled="disabled"><?php $more_cmb2_placeholder_5_hero = get_post_meta( get_the_ID(), 'more_cmb2_placeholder_5_hero', true ); echo esc_html( $more_cmb2_placeholder_5_hero ); ?></option> 
                                              <option>Opción uno</option>
                                              <option>Opción dos</option>
                                              <option>Opción tres</option>
                                              <option>Opción cuatro</option>
                                              <option>Opción cinco</option>
                                            </select>
                                          </div>
                                        <button type="submit" class="btn float-right"><?php $more_cmb2_button_form_hero = get_post_meta( get_the_ID(), 'more_cmb2_button_form_hero', true ); echo esc_html( $more_cmb2_button_form_hero ); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer-2">
                    <div class="layer-wrapper">
                        <div class="row">
                            <div class="col-lg-9 col-xl-7 offset-lg-3 offset-xl-5 background-col">
                                <div class="image-background d-flex">
                                    <img class="single-triangle align-self-end" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-black-l.png" alt="">                                                
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="layer-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-7 offset-0 offset-lg-3 offset-xl-5">
                                <div class="polygon-group-wrapper d-flex">
                                    <img class="polygon-group align-self-end" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-1.png" alt="">                                                
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>      
            </section>
            <section id="decide-section">
                <div class="layer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 col-xl-4 offset-md-0 offset-lg-8 offset-xl-7">
                                <div class="decide-section-text-box">
                                    <h2 class="decide-section-heading">
                                        <?php
                                            $more_cmb2_title_decide = get_post_meta( get_the_ID(), 'more_cmb2_title_decide', true );
                                            echo esc_html( $more_cmb2_title_decide );
                                        ?>
                                        <span class="contrast-word">
                                        <?php
                                            $more_cmb2_title_accent_decide = get_post_meta( get_the_ID(), 'more_cmb2_title_accent_decide', true );
                                            echo esc_html( $more_cmb2_title_accent_decide );
                                        ?>
                                        </span>
                                    </h2>
                                    <p class="standard-text decide-section-text">
                                        <?php
                                            $more_cmb2_text_decide = get_post_meta( get_the_ID(), 'more_cmb2_text_decide', true );
                                            echo esc_html( $more_cmb2_text_decide );
                                        ?>
                                    </p>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="layer-2">
                    <div class="layer-wrapper">
                        <div class="row">
                            <div class="col-md-12 col-lg-9 col-xl-7 background-col">
                                <div class="image-background d-flex">
                                                                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="layer-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 offset-9 offset-sm-10 offset-md-9 offset-lg-3">
                                <div class="polygon-group-wrapper">
                                    <img class="polygon-group" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-2.png" alt="">                                                                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </section>
            <section id="storey-section">
                <div class="layer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-fill" role="tablist">
                                    <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                        <a class="nav-link" id="modelo-sky-tab" data-toggle="pill" href="#modelo-sky" role="tab" aria-controls="modelo-sky" aria-selected="false">Modelo <span class="model-name">Sky</span></a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                        <a class="nav-link" id="modelo-up-tab" data-toggle="pill" href="#modelo-up" role="tab" aria-controls="modelo-up" aria-selected="false">Modelo <span class="model-name">Up</span></a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                        <a class="nav-link active" id="modelo-high-tab" data-toggle="pill" href="#modelo-high" role="tab" aria-controls="modelo-high" aria-selected="true">Modelo <span class="model-name">High</span></a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                        <a class="nav-link" id="modelo-plus-tab" data-toggle="pill" href="#modelo-plus" role="tab" aria-controls="modelo-plus" aria-selected="false">Modelo <span class="model-name">Plus</span></a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                        <a class="nav-link" id="modelo-ultra-tab" data-toggle="pill" href="#modelo-ultra" role="tab" aria-controls="modelo-ultra" aria-selected="false">Modelo <span class="model-name">Ultra</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="modelo-sky" role="tabpanel" aria-labelledby="modelo-sky-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-end">
                                                <div class="storey-section-tab-image-box">
                                                    <img class="storey-section-tab-image" src="<?php bloginfo('template_url'); ?>/assets/img/storey/ModeloSKY.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 offset-0 offset-lg-1 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-start">
                                                <div class="storey-section-tab-text-box">
                                                    <h3 class="storey-section-size">
                                                        45.60m&sup2;
                                                    </h3>
                                                    <ul class="storey-section-details">
                                                        <li>
                                                            1 habitación
                                                        </li>
                                                        <li>
                                                            1 baño
                                                        </li>
                                                        <li>
                                                            Balcón
                                                        </li>
                                                        <li>
                                                            Sala
                                                        </li>
                                                        <li>
                                                            Cocina
                                                        </li>
                                                        <li>
                                                            Área de Lavandería
                                                        </li>
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="modelo-up" role="tabpanel" aria-labelledby="modelo-up-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-end">
                                                <div class="storey-section-tab-image-box">
                                                    <img class="storey-section-tab-image" src="<?php bloginfo('template_url'); ?>/assets/img/storey/ModeloUP.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 offset-0 offset-lg-1 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-start">
                                                <div class="storey-section-tab-text-box">
                                                    <h3 class="storey-section-size">
                                                        54.12m&sup2;
                                                    </h3>
                                                    <ul class="storey-section-details">
                                                        <li>
                                                            2 habitaciones
                                                        </li>
                                                        <li>
                                                            2 baños
                                                        </li>
                                                        <li>
                                                            Balcón
                                                        </li>
                                                        <li>
                                                            Sala
                                                        </li>
                                                        <li>
                                                            Cocina
                                                        </li>
                                                        <li>
                                                            Área de Lavandería
                                                        </li>
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="modelo-high" role="tabpanel" aria-labelledby="modelo-high-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-end">
                                                <div class="storey-section-tab-image-box">
                                                    <img class="storey-section-tab-image" src="<?php bloginfo('template_url'); ?>/assets/img/storey/ModeloHIGH.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 offset-0 offset-lg-1 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-start">
                                                <div class="storey-section-tab-text-box">
                                                    <h3 class="storey-section-size">
                                                        61.37m&sup2;
                                                    </h3>
                                                    <ul class="storey-section-details">
                                                        <li>
                                                            2 habitaciones
                                                        </li>
                                                        <li>
                                                            2 baños
                                                        </li>
                                                        <li>
                                                            Sala
                                                        </li>
                                                        <li>
                                                            Cocina
                                                        </li>
                                                        <li>
                                                            Área de Lavandería
                                                        </li>
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="modelo-plus" role="tabpanel" aria-labelledby="modelo-plus-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-end">
                                                <div class="storey-section-tab-image-box">
                                                    <img class="storey-section-tab-image" src="<?php bloginfo('template_url'); ?>/assets/img/storey/ModeloPLUS.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 offset-0 offset-lg-1 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-start">
                                                <div class="storey-section-tab-text-box">
                                                    <h3 class="storey-section-size">
                                                        73.16m&sup2;
                                                    </h3>
                                                    <ul class="storey-section-details">
                                                        <li>
                                                            3 habitaciones
                                                        </li>
                                                        <li>
                                                            2 baños
                                                        </li>
                                                        <li>
                                                            Balcón
                                                        </li>
                                                        <li>
                                                            Sala
                                                        </li>
                                                        <li>
                                                            Estudio
                                                        </li>
                                                        <li>
                                                            Cocina
                                                        </li>
                                                        <li>
                                                            Área de Lavandería
                                                        </li>
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="modelo-ultra" role="tabpanel" aria-labelledby="modelo-ultra-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-end">
                                                <div class="storey-section-tab-image-box">
                                                    <img class="storey-section-tab-image" src="<?php bloginfo('template_url'); ?>/assets/img/storey/ModeloULTRA.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 offset-0 offset-lg-1 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-start">
                                                <div class="storey-section-tab-text-box">
                                                    <h3 class="storey-section-size">
                                                        86.71m&sup2;
                                                    </h3>
                                                    <ul class="storey-section-details">
                                                        <li>
                                                            2 habitaciones
                                                        </li>
                                                        <li>
                                                            2 baños
                                                        </li>
                                                        <li>
                                                            Balcón
                                                        </li>
                                                        <li>
                                                            Sala
                                                        </li>
                                                        <li>
                                                            Cocina
                                                        </li>
                                                        <li>
                                                            Área de Lavandería
                                                        </li>
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                                <div class="polygon-group-wrapper">
                                    <img class="polygon-group align-self-end" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-4.png" alt="">                                                
                                </div>
                            </div>
                            <div class="col-1 offset-md-8 offset-lg-9">
                                <div class="polygon-group-wrapper">
                                    <img class="polygon-group align-self-end" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-3.png" alt="">                                                
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>                 
            </section>
            <section id="amenities-section">
                <div class="layer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <h2 class="amenities-heading">
                                    Amenidades
                                </h2>
                            </div>
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="col-6 col-lg-2">
                                <div id="external-controls-1" class="amenities-section-list-box" aria-label="External slider nav">
                                    <ol class="amenities-slider-nav">
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="0">
                                                Pool
                                            </a>
                                        </li>    
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="1">
                                                Multisports place                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="2">
                                                Zen Garden                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="3">
                                                Game Room
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="4">
                                                Pet Spa                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="5">
                                                Pool Lounge                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="6">
                                                Coworking
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2">
                                <div id="external-controls-2" class="amenities-section-list-box" aria-label="External slider nav">
                                    <ol class="amenities-slider-nav">
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="7">
                                                Kid’s Playground                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="8">
                                                Chroma Yoga                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="9">
                                                Social Zone
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="10" class="active">
                                                Juice Bar                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="11">
                                                Gym                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="12">
                                                Tool Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-target="#amenities-slider" data-slide-to="13">
                                                Lobby                                        
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="layer-2">
                    <div class="layer-wrapper">
                        <div class="row">
                            <div class="col-12 col-lg-9 col-xl-7 offset-lg-3 offset-xl-5">
                                <div id="amenities-slider" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/Pool.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Pool</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/MultisportsPlace.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Multisports place</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/ZenGarden.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Zen Garden</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/GameRoom.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Game Room</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/PetSpa.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Pet Spa</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/PoolSide.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Pool Lounge</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/Coworking.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Coworking</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/KidsPlayground.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Kid’s Playground</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/Yoga.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Chroma Yoga</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/SocialZone.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Social Zone</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/JuiceBar.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Juice Bar</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/Gym.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Gym</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/ToolLibrary.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Tool Library</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/img/cropped/Lobby.png" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="amenitie-label">Lobby</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="layer-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 offset-lg-4 offset-xl-6">
                                <div class="polygon-group-wrapper">
                                    <img class="polygon-group" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-5.png" alt="">                                                                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </section>
            <section id="map-section">
                <div class="layer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4 offset-0 offset-lg-8">
                                <div class="map-section-text-box">
                                    <span class="map-section-heading">
                                        Para más información 
                                    </span>
                                    <p class="standard-text">
                                        contacto@panamaismore.com
                                    </p>
                                    <p class="standard-text">
                                        Showroom:</br>
                                        Calle Manuel Espinoza Batista,</br>
                                        Plaza el Cangrejo local no. 8 planta baja
                                    </p>
                                    <a class="btn map-section-button" href="#">Contáctanos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer-2">
                    <div class="layer-wrapper">
                        <div class="row">
                            <div class="col-12 col-lg-10 col-xl-8 background-col">
                                <div class="image-background d-flex">
                                                                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="layer-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 offset-8 offset-lg-4">
                                <div class="polygon-group-wrapper">
                                    <img class="polygon-group" src="<?php bloginfo('template_url'); ?>/assets/img/polygons/triangle-gruop-6.png" alt="">                                                                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>               
            </section>
        </main>            
        <footer>
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12 d-flex justify-content-between">
                        <img class="footer-brand" src="<?php bloginfo('template_url'); ?>/assets/img/logos/footer-logo.png" alt="">
                        <p class="footer-text">
                            Vía Argentina PH More, PA.</br>
                            T. 398-1122
                        </p>
                        <img class="partner-logo" src="<?php bloginfo('template_url'); ?>/assets/img/logos/partner-logo.png" alt="">
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>
    </body>
</html>