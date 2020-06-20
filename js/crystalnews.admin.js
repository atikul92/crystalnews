jQuery(document).ready(function($){

	var mediaUploader;

	$('#upload-button').on('click', function(e){
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			return;
		}

		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a logo',
			button: {
				text: 'Choose picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#logo-picture').val(attachment.url);
			$('#logo-picture-review').css('background-image', 'url('+attachment.url+')');
		});

		mediaUploader.open();
	});

	$('#remove-picture').on('click', function(e){
		e.preventDefault();
		var answer = confirm("Are you sure you want to remove your profile picture?");
		if(answer == true){
			$('#logo-picture').val('');
			$('.crystal-general-form').submit();
		}
		return;
	});

});