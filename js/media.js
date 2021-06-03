var mediaUploader;
$(document).ready(function($){
});
$( '#upload-bg-image-topnavbar' ).on('click',function(e){
    // e.preventDefault();
    if( mediaUploader ){
        mediaUploader.open();
        return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose a picture for the background',
        button: {
            text: 'Choose picture'
        },
        multiple: false
    });

    mediaUploader.on('select', function(){
        let attachment = mediaUploader.state().get('selection').first().toJSON();
        $('#background-image-topnavbar').val(attachment.url);
        $('#background-image-topnavbar-preview').attr('src',attachment.url);
    });

    mediaUploader.open();
});