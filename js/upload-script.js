jQuery(document).ready(function() {
  jQuery('#upload_photo_button').click(function() {
    imgurl = jQuery('img').attr('src');
    jQuery('#upload_photo').val(imgurl);
    tb_remove();
    tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
    return false;
  });
});
