// JavaScript file
// console.log( 'Hi, the file loads.' );

jQuery(document).ready(function($) {
    $('.like-button').on('click', function(e){
        e.preventDefault();
        // console.log( 'clicked' ); // Just to be sure

        let home_id = jQuery(this).attr('id')

        // AJAX
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'softuni_home_like', // PHP function
                home_id: home_id
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});
