jQuery(document).ready( function(){
	function upload_pictures(evtId, viewId)
	{
		var mediaUploader;
		
	
		
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Select a Picture',
			button: {
				text: 'Select Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			jQuery('#'+evtId).val(attachment.url);
			jQuery('#'+viewId).css("display",'block');
			jQuery('#'+viewId).css('background-image','url(' + attachment.url + ')');
		});
		
		mediaUploader.open();
		
	
	}
	jQuery('#upload-picture-one').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_one', 'user_picture_preview_one');

	});
	jQuery('#upload-picture-two').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_two', 'user_picture_preview_two');

	});
	jQuery('#upload-picture-three').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_three', 'user_picture_preview_three');

	});

	jQuery('#upload-picture-garyone').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_grayone', 'user_picture_preview_grayone');

	});

	jQuery('#upload-picture-garytwo').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_graytwo', 'user_picture_preview_graytwo');

	});

	jQuery('#upload-picture-garythree').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_graythree', 'user_picture_preview_graythree');

	});

	jQuery('#upload-picture-bestone').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_bestone', 'user_picture_preview_bestone');

	});

	jQuery('#upload-picture-besttwo').on('click',function(e) {
		e.preventDefault();
		upload_pictures('user_picture_besttwo', 'user_picture_preview_besttwo');

	});

	jQuery('#upload-head-background').on('click',function(e) {
		e.preventDefault();
		upload_pictures('upload_head_background', 'head_background_preview');

	});

	jQuery('#upload-herbeat-background').on('click',function(e) {
		e.preventDefault();
		upload_pictures('upload_herbeat_background', 'herbeat_background_preview');

	});
	


	
});