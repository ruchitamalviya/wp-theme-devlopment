<?php
add_action("add_meta_boxes", "add_header_meta_box",11, 2);
function add_header_meta_box( $post_type, $post ){
    if ($post_type = 'page') {
        add_meta_box("ets_header", "Header Meta Box", "header_meta_box_markup", "page", "normal", "default", null);
        add_meta_box("section_one", "Section One Meta Box", "section_one_box_markup", "page", "normal", "default", null);
        add_meta_box("section_two", "Section Two Meta Box", "section_two_box_markup", "page", "normal", "default", null);
        add_meta_box("section_three", "Section three Meta Box", "section_three_box_markup", "page", "normal", "default", null);
        add_meta_box("section_four", "Section four Meta Box", "section_four_box_markup", "page", "normal", "default", null);
        add_meta_box("section_five", "Section five Meta Box", "section_five_box_markup", "page", "normal", "default", null);
        add_meta_box("section_six", "Section six Meta Box", "section_six_box_markup", "page", "normal", "default", null);
        
    }
} 
function header_meta_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    ?>
    <div>
       <?php
       $head_content = sanitize_text_field( trim( get_post_meta($post->ID, "ets_head_content", true ) ) );
       $subheading_content=sanitize_text_field( trim( get_post_meta($post->ID, "ets_subheading_content", true ) ) );
       $head_btn_content=sanitize_text_field( trim( get_post_meta($post->ID, "ets_button_content", true ) ) );
        ?>
        <label for="ets_head_content">Title</label>
        <input id="ets_head_content" name="ets_head_content" type="text" value="<?php if(isset($head_content) && $head_content ) echo $head_content; ?>">
        <br><br>
        <label for="ets_subheading_content">Discription</label>
        <input id="ets_subheading_content" name="ets_subheading_content" rows="5" value="<?php if(isset($subheading_content) && $subheading_content ) echo $subheading_content; ?>">
         <br><br>
        <label for="ets_button_content">Button</label>
        <input id="ets_button_content" name="ets_button_content" rows="5" value="<?php if(isset($head_btn_content) && $head_btn_content ) echo $head_btn_content; ?>">      
    </div>
    <?php
} ?>
<?php
function header_save_custom_meta_box_content($post_id) {
    $textbox_content = sanitize_text_field(trim($_POST['ets_head_content'] ) );
    $subhead_content = sanitize_text_field(trim($_POST['ets_subheading_content'] ) );
    $btn_content=sanitize_text_field(trim($_POST['ets_button_content'] ) );
    $sec_one_head_content=sanitize_text_field(trim($_POST['sec_one_head_content'] ) );
    $sec_one_subhead_content=sanitize_text_field(trim($_POST['sec_one_subhead_content'] ) );
    $image_one_content = sanitize_text_field(trim($_POST['image_one_content'] ) );
    $image_one_subhead_content = sanitize_text_field(trim($_POST['image_one_subhead_content'] ) );
    $image_two_content = sanitize_text_field(trim($_POST['image_two_content'] ) );
    $image_two_subhead_content = sanitize_text_field(trim($_POST['image_two_subhead_content'] ) );
    $image_three_content = sanitize_text_field(trim($_POST['image_three_content'] ) );
    $image_three_subhead_content = sanitize_text_field(trim($_POST['image_three_subhead_content'] ) );
    $image_three_subhead_content = sanitize_text_field(trim($_POST['image_three_subhead_content'] ) );
    $gray_head_content = sanitize_text_field(trim($_POST['gray_head_content'] ) );
    $gray_subhead_content = sanitize_text_field(trim($_POST['gray_subhead_content'] ) );
    $gray_imageone_content = sanitize_text_field(trim($_POST['gray_imageone_content'] ) );
    $gray_imageone_sub_content = sanitize_text_field(trim($_POST['gray_imageone_sub_content'] ) );
    $gray_imageone_btn_content = sanitize_text_field(trim($_POST['gray_imageone_btn_content'] ) );
    $gray_imagetwo_content = sanitize_text_field(trim($_POST['gray_imagetwo_content'] ) );
    $gray_imagetwo_sub_content = sanitize_text_field(trim($_POST['gray_imagetwo_sub_content'] ) );
    $gray_imagetwo_btn_content = sanitize_text_field(trim($_POST['gray_imagetwo_btn_content'] ) );
    $gray_imagethree_content = sanitize_text_field(trim($_POST['gray_imagethree_content'] ) );
    $gray_imagethree_sub_content = sanitize_text_field(trim($_POST['gray_imagethree_sub_content'] ) );
    $gray_imagethree_btn_content = sanitize_text_field(trim($_POST['gray_imagethree_btn_content'] ) );
    $best_heading1 = sanitize_text_field(trim($_POST['best_heading1'] ) );
    $best_subheading1 = sanitize_text_field(trim($_POST['best_subheading1'] ) );
    $best_btn1 = sanitize_text_field(trim($_POST['best_btn1'] ) );
    $best_heading2 = sanitize_text_field(trim($_POST['best_heading2'] ) );
    $best_subheading2 = sanitize_text_field(trim($_POST['best_subheading2'] ) );
    $best_btn2 = sanitize_text_field(trim($_POST['best_btn2'] ) );
    $gray_two_heading = sanitize_text_field(trim($_POST['gray_two_head'] ) );
    $gray_two_subheading = sanitize_text_field(trim($_POST['gray_two_subhead'] ) );
    $gray_head1 = sanitize_text_field(trim($_POST['gray_subhead1'] ) );
    $gray_para1 = sanitize_text_field(trim($_POST['gray_para1'] ) );
    $gray_head2 = sanitize_text_field(trim($_POST['gray_subhead2'] ) );
    $gray_para2 = sanitize_text_field(trim($_POST['gray_para2'] ) );
    $gray_head3 = sanitize_text_field(trim($_POST['gray_subhead3'] ) );
    $gray_para3 = sanitize_text_field(trim($_POST['gray_para3'] ) );
    $heartbeat_para = sanitize_text_field(trim($_POST['herbeat_para'] ) );
    $heartbeat_head = sanitize_text_field(trim($_POST['herbeat_head'] ) );
    $subscribe_head = sanitize_text_field(trim($_POST['subscribe_head'] ) );
    $subscribe_para = sanitize_text_field(trim($_POST['subscribe_para'] ) );
    $subscribe_button = sanitize_text_field(trim($_POST['subscribe_btn'] ) );
      
      
      
    
    update_post_meta($post_id, 'ets_head_content', $textbox_content);
    update_post_meta($post_id, 'ets_subheading_content', $subhead_content);
    update_post_meta($post_id, 'ets_button_content', $btn_content);
    update_post_meta($post_id, 'sec_one_head_content',   $sec_one_head_content);
    update_post_meta($post_id, 'sec_one_subhead_content',   $sec_one_subhead_content);
    update_post_meta($post_id, 'image_one_content', $image_one_content);
    update_post_meta($post_id, 'image_one_subhead_content', $image_one_subhead_content);
    update_post_meta($post_id, 'image_two_content', $image_two_content);
    update_post_meta($post_id, 'image_two_subhead_content', $image_two_subhead_content);
    update_post_meta($post_id, 'image_three_content', $image_three_content);
    update_post_meta($post_id, 'image_three_subhead_content', $image_three_subhead_content);
    update_post_meta($post_id, 'gray_head_content', $gray_head_content);
    update_post_meta($post_id, 'gray_subhead_content', $gray_subhead_content);
    update_post_meta($post_id, 'gray_imageone_content', $gray_imageone_content);
    update_post_meta($post_id, 'gray_imageone_sub_content', $gray_imageone_sub_content);
    update_post_meta($post_id, 'gray_imageone_btn_content', $gray_imageone_btn_content);
    update_post_meta($post_id, 'gray_imagetwo_content', $gray_imagetwo_content);
    update_post_meta($post_id, 'gray_imagetwo_sub_content', $gray_imagetwo_sub_content);
    update_post_meta($post_id, 'gray_imagetwo_btn_content', $gray_imagetwo_btn_content);
    update_post_meta($post_id, 'gray_imagethree_content', $gray_imagethree_content);
    update_post_meta($post_id, 'gray_imagethree_sub_content', $gray_imagethree_sub_content);
    update_post_meta($post_id, 'gray_imagethree_btn_content', $gray_imagethree_btn_content);
    update_post_meta($post_id, 'best_heading1', $best_heading1);
    update_post_meta($post_id, 'best_subheading1', $best_subheading1);
    update_post_meta($post_id, 'best_btn1', $best_btn1);
    update_post_meta($post_id, 'best_heading2', $best_heading2);
    update_post_meta($post_id, 'best_subheading2', $best_subheading2);
    update_post_meta($post_id, 'best_btn2', $best_btn2);
    update_post_meta($post_id, 'gray_two_head', $gray_two_heading);
    update_post_meta($post_id, 'gray_two_subhead', $gray_two_subheading);
    update_post_meta($post_id, 'gray_subhead1', $gray_head1);
    update_post_meta($post_id, 'gray_para1', $gray_para1);
    update_post_meta($post_id, 'gray_subhead2', $gray_head2);
    update_post_meta($post_id, 'gray_para2', $gray_para2);
    update_post_meta($post_id, 'gray_subhead3', $gray_head3);
    update_post_meta($post_id, 'gray_para3', $gray_para3);
    update_post_meta($post_id, 'herbeat_para', $heartbeat_para);
    update_post_meta($post_id, 'herbeat_head', $heartbeat_head);
    update_post_meta($post_id, 'subscribe_head', $subscribe_head);
    update_post_meta($post_id, 'subscribe_para', $subscribe_para);
    update_post_meta($post_id, 'subscribe_btn', $subscribe_button);

         
}?>
<?php
add_action( 'save_post', 'header_save_custom_meta_box_content' );
//section one
function section_one_box_markup($post)
    {
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
    <div>
        <?php
        $secone_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "sec_one_head_content", true ) ) );
        $secone_sub_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "sec_one_subhead_content", true ) ) );
        $imageone_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_one_content", true ) ) );
        $imageone_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_one_subhead_content", true ) ) );
        $imagetwo_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_two_content", true ) ) );
        $imagetwo_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_two_subhead_content", true ) ) );
        $imagethree_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_three_content", true ) ) );
        $imagethree_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_three_subhead_content", true ) ) );
            ?>
        <label for="sec_one_head_content">Title</label>
        <input  id="sec_one_head_content" name="sec_one_head_content" type="text" value="<?php if(isset( $secone_head_content) && $secone_head_content ) echo  $secone_head_content; ?>">
        <br><br>
        <label for="sec_one_subhead_content">Description</label>
        <input  id="sec_one_subhead_content" name="sec_one_subhead_content" type="text" value="<?php if(isset( $secone_sub_head_content) && $secone_sub_head_content ) echo  $secone_sub_head_content; ?>">
        <br><br>
        <label for="image_one">Image</label>
        <input  id="image_one" name="image_one" type="file" value="">
        <br><br>
        <label for="image_one_content">Image Title</label>
        <input  id="image_one_content" name="image_one_content" type="text" value="<?php if(isset($imageone_content) &&  $imageone_content ) echo   $imageone_content; ?>">
        <br><br>
        <label for="image_one_subhead_content">Image Description</label>
        <input  id="image_one_subhead_content" name="image_one_subhead_content" type="text" value="<?php if(isset( $imageone_subhead_content) && $imageone_subhead_content ) echo $imageone_subhead_content; ?>">
        <br><br>
        <label for="image_two">Image</label>
        <input  id="image_two" name="image_two" type="file" value="">
        <br><br>
        <label for="image_two_content">Image Title</label>
        <input  id="image_two_content" name="image_two_content" type="text" value="<?php if(isset( $imagetwo_content) && $imagetwo_content ) echo $imagetwo_content; ?>">

        <br><br>
        <label for="image_two_subhead_content">Image Description</label>
        <input  id="image_two_subhead_content" name="image_two_subhead_content" type="text" value="<?php if(isset( $imagetwo_subhead_content) && $imagetwo_subhead_content ) echo $imagetwo_subhead_content; ?>">
        <br><br>
        <label for="image_three">Image</label>
        <input  id="image_three" name="image_three" type="file" value="">
        <br><br>
        <label for="image_three_content">Image Title</label>
        <input  id="image_three_content" name="image_three_content" type="text" value="<?php if(isset( $imagethree_content) && $imagethree_content ) echo $imagethree_content; ?>">

        <br><br>
        <label for="image_three_subhead_content">Image Description</label>
        <input  id="image_three_subhead_content" name="image_three_subhead_content" type="text" value="<?php if(isset( $imagethree_subhead_content) && $imagethree_subhead_content ) echo $imagethree_subhead_content; ?>">
    </div>
    <?php 
} ?>

<?php
//section two
function section_two_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");
?>
    <div>
        <?php
        $grayhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_head_content", true ) ) );
        $graysubhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead_content", true ) ) );
        $grayimageone_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_content", true ) ) );
        $grayimageonesub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_sub_content", true ) ) );
        $grayimageonebtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_btn_content", true ) ) );
        $grayimagetwo_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_content", true ) ) );
        $grayimagetwosub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_sub_content", true ) ) );
        $grayimagetwobtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_btn_content", true ) ));
        $grayimagethree_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_content", true ) ) );
        $grayimagethreesub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_sub_content", true ) ) );
        $grayimagethreebtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_btn_content", true ) ));

        ?>

        <label for="gray_head_content">Title</label>
        <input  id="gray_head_content" name="gray_head_content" type="text" value="<?php if(isset($grayhead_content) &&  $grayhead_content ) echo   $grayhead_content; ?>">
        <br><br>
        <label for="gray_subhead_content"> Description</label>
        <input  id="gray_subhead_content" name="gray_subhead_content" type="text" value="<?php if(isset($graysubhead_content) &&  $graysubhead_content ) echo  $graysubhead_content; ?>">
        <br><br>
        <label for="gray_img_one">Image</label>
        <input  id="gray_img_one" name="gray_img_one" type="file" value="">
        <br><br>
        <label for="gray_imageone_content">image Title</label>
        <input  id="gray_imageone_content" name="gray_imageone_content" type="text" value="<?php if(isset($grayimageone_content) &&  $grayimageone_content ) echo  $grayimageone_content; ?>">
        <br><br>
        <label for="gray_imageone_sub_content">Image Description</label>
        <input  id="gray_imageone_sub_content" name="gray_imageone_sub_content" type="text" value="<?php if(isset($grayimageonesub_content) &&   $grayimageonesub_content ) echo   $grayimageonesub_content; ?>">
        <br><br>
        <label for="gray_imageone_btn_content">image Button</label>
        <input  id="gray_imageone_btn_content" name="gray_imageone_btn_content" type="text" value="<?php if(isset($grayimageonebtn_content) &&   $grayimageonebtn_content ) echo   $grayimageonebtn_content; ?>">
        <br><br>
        <label for="gray_img_two">Image</label>
        <input  id="gray_img_two" name="gray_img_two" type="file" value="">
        <br><br>
        <label for="gray_imagetwo_content">image Title</label>
        <input  id="gray_imagetwo_content" name="gray_imagetwo_content" type="text" value="<?php if(isset($grayimagetwo_content) &&  $grayimagetwo_content ) echo  $grayimagetwo_content; ?>">
        <br><br>
        <label for="gray_imagetwo_sub_content">Image Description</label>
        <input  id="gray_imagetwo_sub_content" name="gray_imagetwo_sub_content" type="text" value="<?php if(isset($grayimagetwosub_content) &&   $grayimagetwosub_content ) echo   $grayimagetwosub_content; ?>">
        <br><br>
        <label for="gray_imagetwo_btn_content">image Button</label>
        <input  id="gray_imagetwo_btn_content" name="gray_imagetwo_btn_content" type="text" value="<?php if(isset($grayimagetwobtn_content) &&   $grayimagetwobtn_content ) echo   $grayimagetwobtn_content; ?>">
        <br><br>
        <label for="gray_img_three">Image</label>
        <input  id="gray_img_three" name="gray_img_three" type="file" value="">
        <br><br>
        <label for="gray_imagethree_content">image Title</label>
        <input  id="gray_imagethree_content" name="gray_imagethree_content" type="text" value="<?php if(isset($grayimagethree_content) &&  $grayimagethree_content ) echo  $grayimagethree_content; ?>">
        <br><br>
        <label for="gray_imagethree_sub_content">Image Description</label>
        <input  id="gray_imagethree_sub_content" name="gray_imagethree_sub_content" type="text" value="<?php if(isset($grayimagethreesub_content) &&   $grayimagethreesub_content ) echo   $grayimagethreesub_content; ?>">
        <br><br>
        <label for="gray_imagethree_btn_content">image Button</label>
        <input  id="gray_imagethree_btn_content" name="gray_imagethree_btn_content" type="text" value="<?php if(isset($grayimagethreebtn_content) &&   $grayimagethreebtn_content ) echo   $grayimagethreebtn_content; ?>">
        <br><br>

    </div>
<?php 
} ?>
<?php
//section three
function section_three_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    ?>
    <div>
        <?php
        $besthead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_heading1", true ) ) );
        $bestsubhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_subheading1", true ) ) );
        $bestbtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_btn1", true ) ) );
        $best_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_heading2", true ) ) );
        $best_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_subheading2", true ) ) );
        $best_btn_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_btn2", true ) ) );
        ?>
        <label for="best_one_img">Image</label>
        <input  id="best_one_img" name="best_one_img" type="file" value="">
        <br><br>
        <label for="best_heading1">Title</label>
        <input  id="best_heading1" name="best_heading1" type="text" value="<?php if(isset( $besthead_content) && $besthead_content ) echo    $besthead_content; ?>">
        <br><br>
        <label for="best_subheading1">Description</label>
        <input  id="best_subheading1" name="best_subheading1" type="text" value="<?php if(isset($bestsubhead_content) && $bestsubhead_content) echo $bestsubhead_content; ?>">
        <br><br>
        <label for="best_btn1">Button</label>
        <input  id="best_btn1" name="best_btn1" type="text" value="<?php if(isset($bestbtn_content) && $bestbtn_content) echo $bestbtn_content; ?>">
        <br><br>
        <label for="best_heading2">Title</label>
        <input  id="best_heading2" name="best_heading2" type="text" value="<?php if(isset( $best_head_content) && $best_head_content ) echo    $best_head_content; ?>">
        <br><br>
        <label for="best_subheading2">Description</label>
        <input  id="best_subheading2" name="best_subheading2" type="text" value="<?php if(isset($best_subhead_content) && $best_subhead_content) echo $best_subhead_content; ?>">
        <br><br>
        <label for="best_btn2">Button</label>
        <input  id="best_btn2" name="best_btn2" type="text" value="<?php if(isset($best_btn_content) && $best_btn_content) echo $best_btn_content; ?>">
        <label for="best_two_img">Image</label>
        <input  id="best_two_img" name="best_two_img" type="file" value="">
        <br><br>
    </div>
    <?php 
} ?>
<?php
//section four
function section_four_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
    <div>
        <?php
        $gray_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_two_head", true ) ) );
        $gray_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_two_subhead", true ) ) );
        $gray_subhead1 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead1", true ) ) );
        $gray_subpara1 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para1", true ) ) );
        $gray_subhead2 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead2", true ) ) );
        $gray_subpara2 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para2", true ) ) );
        $gray_subhead3 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead3", true ) ) );
        $gray_subpara3 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para3", true ) ) );
        ?>
        <label for="gray_two_head">Title</label>
        <input id="gray_two_head" name="gray_two_head" type="text" value="<?php if(isset($gray_head_content) && $gray_head_content ) echo $gray_head_content; ?>">
        <br><br>
        <label for="gray_two_subhead">Description</label>
        <input id="gray_two_subhead" name="gray_two_subhead" type="text" value="<?php if(isset($gray_subhead_content) && $gray_subhead_content ) echo $gray_subhead_content; ?>">
        <label for="gray_subhead1">Subtitle</label>
        <input id="gray_subhead1" name="gray_subhead1" type="text" value="<?php if(isset($gray_subhead1 ) && $gray_subhead1) echo $gray_subhead1 ; ?>">
        <br><br>
        <label for="gray_para1">Subdescription</label>
        <input id="gray_para1" name="gray_para1" type="text" value="<?php if(isset($gray_subpara1) && $gray_subpara1) echo $gray_subpara1 ; ?>">
        <label for="gray_subhead2">Subtitle</label>
        <input id="gray_subhead2" name="gray_subhead2" type="text" value="<?php if(isset($gray_subhead2 ) && $gray_subhead2) echo $gray_subhead2 ; ?>">
        <br><br>
        <label for="gray_para2">Subdescription</label>
        <input id="gray_para2" name="gray_para2" type="text" value="<?php if(isset($gray_subpara2) && $gray_subpara2) echo $gray_subpara2 ; ?>">
        <br><br>
        <label for="gray_subhead3">Subtitle</label>
        <input id="gray_subhead3" name="gray_subhead3" type="text" value="<?php if(isset($gray_subhead3 ) && $gray_subhead3) echo $gray_subhead3 ; ?>">
        <br><br>
        <label for="gray_para3">Subdescription</label>
        <input id="gray_para3" name="gray_para3" type="text" value="<?php if(isset($gray_subpara3) && $gray_subpara3) echo $gray_subpara3 ; ?>">
    </div>
    <?php 
} ?>
<?php
//section five
function section_five_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    ?>
    <div>
        <?php
        $herbeat_para_content = sanitize_text_field( trim( get_post_meta($post->ID, "herbeat_para", true ) ) );
        $herbeat_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "herbeat_head", true ) ) );
            ?>
        <label for="herbeat_para">Description</label>
        <input id="herbeat_para" name="herbeat_para" type="text" value="<?php if(isset($herbeat_para_content) &&  $herbeat_para_content ) echo  $herbeat_para_content; ?>">
        <br><br>
        <label for="herbeat_head">Title</label>
        <input id="herbeat_head" name="herbeat_head" type="text" value="<?php if(isset($herbeat_head_content) &&  $herbeat_head_content ) echo  $herbeat_head_content; ?>">
    </div>
    <?php 
} ?>
<?php
//section six
function section_six_box_markup($post)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
    <div>
        <?php
        $subscribe_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_head", true ) ) );
        $subscribe_para_content = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_para", true ) ) );
        $subscribe_btn = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_btn", true ) ) );

        ?>
        <label for="subscribe_head">Title</label>
        <input id="subscribe_head" name="subscribe_head" type="text" value="<?php if(isset($subscribe_head_content) &&  $subscribe_head_content ) echo $subscribe_head_content; ?>">
        <br><br>
        <label for="subscribe_para">Description</label>
        <input id="subscribe_para" name="subscribe_para" type="text" value="<?php if(isset($subscribe_para_content) &&  $subscribe_para_content ) echo $subscribe_para_content; ?>">
        <br><br>
        <label for="subscribe_para">Button</label>
        <input id="subscribe_btn" name="subscribe_btn" type="text" value="<?php if(isset($subscribe_btn) &&  $subscribe_btn ) echo $subscribe_btn; ?>">
    </div>
    <?php 
} 

//add menus
register_nav_menus(
array('primary-menu'=>'header-menu')
);
//add logo
function config_custom_logo() {
        
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme' , 'config_custom_logo' );

//add widgets
function get_widgets() {
    register_sidebar(array(
        'name'=>__('Footer1','Dancetour'),
        'id'=>'footer1',
        'before_widget' => '<div class="col-lg-5 col-md-5 col-sm-6  col-12 px-4 ">',
        'after_widget'  => '</div>'
        

    ));

    register_sidebar(array(
        'name'=>__('Footer2','Dancetour'),
        'id'=>'footer2',
        'before_widget' => '<div class="col-lg-3 col-md-3 col-sm-6 col-12 px-4 ">',
        'after_widget'  => '</div>'
        

    ));

    register_sidebar(array(
        'name'=>__('Footer3','Dancetour'),
        'id'=>'footer3',
        'before_widget' => '<div class= "col-lg-2 col-md-2 col-sm-6 col-12 px-4 ">',
        'after_widget'  => '</div>'
        

    ));

    register_sidebar(array(
        'name'=>__('Footer4','Dancetour'),
        'id'=>'footer4',
        'before_widget' => '<div class="col-lg-2 col-md-2 col-sm-6 col-12 px-4 ">',
        'after_widget'  => '</div>'
        

    ));

}
add_action( 'widgets_init' , 'get_widgets');

//add media file upload
/*function enqueue_media() {
    if( function_exists( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
}

add_action('admin_enqueue_scripts', 'enqueue_media');*/

    //add featured image
    //add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 100, 100, true );
//remove menu by default classes
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

//add new classes in li menus
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);





?>