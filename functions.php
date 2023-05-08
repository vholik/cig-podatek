<?php

add_action('wp_enqueue_scripts', 'cigpodatek_scripts');


function cigpodatek_scripts() {
    wp_enqueue_style( 'cig-style', get_template_directory_uri() . '/assets/styles/style.css' );
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/about.css' );
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );


    // Scripts
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'googletagmanager', 'https://www.googletagmanager.com/gtag/js?id=UA-246694698-1', array(), null, true );
    wp_enqueue_script( 'cig-script', get_template_directory_uri() . '/assets/scripts/index.js', array('slick-script'), null, true );
    
};


add_theme_support( 'custom-logo' );

// Add custom validation for Contact Form 7
add_filter('wpcf7_validate', 'custom_form_validation', 10, 2);
add_filter('wpcf7_validate_textarea*', 'custom_form_validation', 10, 2);
// add_filter('wpcf7_validate', 'custom_form_validation', 10, 2);

// function custom_form_validation($result, $tags) {
//     // Get the submitted form data
//     $submission = WPCF7_Submission::get_instance();
//     if ($submission) {
//         $posted_data = $submission->get_posted_data();
        
//         // Perform validation for the second form
//         if (isset($posted_data['phone'])) {
//             $phone = $posted_data['phone'];
//             if (!preg_match('/^[0-9]{9}$/', $phone)) {
//                 $result->invalidate('phone', 'Numer telefonu musi składać się z 9 cyfr.');
//             }
//         }
        
//         // Add more validation rules for other fields if needed
        
//     }
    
//     return $result;
// }

function custom_form_validation($result, $tags) {
    // Get the submitted form data
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $posted_data = $submission->get_posted_data();
        
        // Perform validation for each form field
        if (isset($posted_data['company'])) {
            $company = $posted_data['company'];
            if (!preg_match('/^[a-zA-Z0-9\s]+$/', $company)) {
                $result->invalidate('company', 'Nazwa firmy zawiera niedozwolone znaki.');
            } elseif (strlen($company) > 50) {
                $result->invalidate('company', 'Nazwa firmy nie może mieć więcej niż 50 znaków.');
            }
        }
        
        if (isset($posted_data['text'])) {
            $text = $posted_data['text'];
            if (strlen($text) > 200) {
                $result->invalidate('text', 'Tekst nie może zawierać więcej niż 200 znaków.');
            }
        }
        
        // Add more validation rules for other form fields if needed
        
    }
    
    return $result;
}

?>