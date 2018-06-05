<?php 
    // Do nothing if we don't have Types.
    if( apply_filters( 'types_is_active', false ) ) {
 
        $output = '';

        // ID of the current post
        $post_id = get_the_ID();

        // Slug of a Types repeating image field, without the "wpcf-" prefix.
        $field_slug = 'main-property-picture'; // TODO set the field slug you want to display

        // Parameters that define the field
        $field_definition = wpcf_fields_get_field_by_slug( $field_slug );
        if( ! empty( $field_definition ) ) {
     
            // Get the raw field data.
            $images = get_post_meta( $post_id, "wpcf-{$field_slug}" );

            foreach( $images as $image_index => $image ) {

                // Parameters for the Types field rendering mechanism.
                $image_parameters = array(
                    'proportional' => 'true',
                    'url' => 'true',
                    'field_value' => $image
                );

                // Get an image of specific (maximum) proportions.
                // NOTE: Update image size to your needs
                $thumbnail_parameters = array_merge( $image_parameters, array( 'width' => '200', 'height' => '200' ) );
                $thumbnail_url = types_render_field_single( $field_definition, $thumbnail_parameters, null, '', $image_index );

                // Get the image in full size.
                $fullsize_parameters = array_merge( $image_parameters, array( 'size' => 'full' ) );
                $fullsize_url = types_render_field_single( $field_definition, $fullsize_parameters, null, '', $image_index );

                // Append the markup (a thumbnail linking to the full image) to existing content.
                // NOTE: Customize the output to your needs
                $output .= sprintf(
                    '<div class="img"><a href=" '. $fullsize_url .' "><img src=" '. $thumbnail_url .' "></a></div>'
                );
            }
        }

        echo $output;
    }
?>