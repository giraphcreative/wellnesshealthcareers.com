<?php


// init cmb2
require_once( 'cmb2/init.php' );



// add metabox(es)
function page_metaboxes( $meta_boxes ) {


    // showcase metabox
    $showcase_metabox = new_cmb2_box( array(
        'id' => 'showcase_metabox',
        'title' => 'Showcase',
        'object_types' => array( 'page' ), // post type
        'show_on' => array(
            'key' => 'template',
            'value' => array( '', 'page-front' )
        ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $showcase_metabox_group = $showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'group_title'   => __( 'Slide {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Image/Video',
        'desc' => 'Upload a slide image. Usually 1220x420 is a good general size guideline, but the showcase will adapt to any height.',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 100 )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Alt text',
        'desc' => 'Specify alt text for this slide.',
        'id'   => 'alt-text',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Link',
        'desc' => 'Specify a URL to which this ad should link.',
        'id'   => 'link',
        'type' => 'text',
    ) );



    // thumb showcase metabox
    $ad_showcase_metabox = new_cmb2_box( array(
        'id' => 'ad_showcase_metabox',
        'title' => 'Ad Showcase',
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-front.php' ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $ad_showcase_metabox_group = $ad_showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'ad_showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Ad', 'cmb2'),
            'remove_button' => __('Remove Ad', 'cmb2'),
            'group_title'   => __( 'Ad {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $ad_showcase_metabox->add_group_field( $ad_showcase_metabox_group, array(
        'name' => 'Image',
        'desc' => 'Upload a 300x300 pixel image to be used for this ad. If you do not adhere to that restriction, it will be imposed and may not look right.',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 200 )
    ) );

    $ad_showcase_metabox->add_group_field( $ad_showcase_metabox_group, array(
        'name' => 'Alt Text',
        'desc' => 'Specify alt text for the icon.',
        'id'   => 'alt-text',
        'type' => 'text',
    ) );

    $ad_showcase_metabox->add_group_field( $ad_showcase_metabox_group, array(
        'name' => 'Link',
        'desc' => 'Specify a URL to which this ad should link.',
        'id'   => 'link',
        'type' => 'text',
    ) );


    // showcase metabox
    $showcase_footer_metabox = new_cmb2_box( array(
        'id' => 'showcase_footer_metabox',
        'title' => 'Footer Showcase',
        'object_types' => array( 'page' ), // post type
        'show_on' => array(
            'key' => 'template',
            'value' => array( '', 'page-front' )
        ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $showcase_footer_metabox_group = $showcase_footer_metabox->add_field( array(
        'id' => CMB_PREFIX . 'showcase_footer',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'group_title'   => __( 'Slide {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $showcase_footer_metabox->add_group_field( $showcase_footer_metabox_group, array(
        'name' => 'Image/Video',
        'desc' => 'Upload a slide image. Usually 1220x420 is a good general size guideline, but the showcase will adapt to any height.',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 100 )
    ) );

    $showcase_footer_metabox->add_group_field( $showcase_footer_metabox_group, array(
        'name' => 'Alt text',
        'desc' => 'Specify alt text for this slide.',
        'id'   => 'alt-text',
        'type' => 'text',
    ) );

    $showcase_footer_metabox->add_group_field( $showcase_footer_metabox_group, array(
        'name' => 'Link',
        'desc' => 'Specify a URL to which this ad should link.',
        'id'   => 'link',
        'type' => 'text',
    ) );


    // job metabox
    $job_metabox = new_cmb2_box( array(
        'id' => 'job_metabox',
        'title' => 'Job',
        'object_types' => array( 'job' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $job_metabox->add_field( array(
        'name' => 'Region',
        'id'   => CMB_PREFIX . 'job_region',
        'type' => 'text',
    ) );

    $job_metabox->add_field( array(
        'name' => 'Company',
        'id'   => CMB_PREFIX . 'job_company',
        'type' => 'text',
    ) );

    $job_metabox->add_field( array(
        'name' => 'Education',
        'id'   => CMB_PREFIX . 'job_education',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $job_metabox->add_field( array(
        'name' => 'Comments',
        'id'   => CMB_PREFIX . 'job_comments',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Name',
        'id'   => CMB_PREFIX . 'job_contact_name',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Title',
        'id'   => CMB_PREFIX . 'job_contact_title',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Email',
        'id'   => CMB_PREFIX . 'job_contact_email',
        'type' => 'text_email'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Phone',
        'id'   => CMB_PREFIX . 'job_contact_phone',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Fax',
        'id'   => CMB_PREFIX . 'job_contact_fax',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Job Expires',
        'id'   => CMB_PREFIX . 'job_expires',
        'type' => 'text_date',
        'date_format' => "Y-m-d"
    ) );

}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}


/*
function cmb2_metabox_show_on_template( $display, $meta_box ) {
    if ( isset( $meta_box['show_on']['key'] ) && isset( $meta_box['show_on']['value'] ) ) :
        if( 'template' !== $meta_box['show_on']['key'] )
            return $display;

        // Get the current ID
        if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
        elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
        if( !isset( $post_id ) ) return false;

        $template_name = get_page_template_slug( $post_id );
        if ( !empty( $template_name ) ) $template_name = substr($template_name, 0, -4);

        // If value isn't an array, turn it into one
        $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

        // See if there's a match
        return in_array( $template_name, $meta_box['show_on']['value'] );
    else:
        return $display;
    endif;
}
add_filter( 'cmb2_show_on', 'cmb2_metabox_show_on_template', 10, 2 );
*/


?>