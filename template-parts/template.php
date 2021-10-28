<?php
/*
  Template Name: Dance Template
  Template Post Type: post, page
*/
get_header();
//header start
$head_content = sanitize_text_field(trim(get_post_meta($post->ID, "ets_head_content", true )));
$subheading_content = sanitize_text_field(trim(get_post_meta($post->ID, "ets_subheading_content", true )));
$head_btn_content=sanitize_text_field( trim( get_post_meta($post->ID, "ets_button_content", true ) ) );
$head_bg = sanitize_text_field( trim( get_post_meta($post->ID, "upload_head_background", true ) ) );
if (isset($head_content) && $head_content && isset($subheading_content) && $subheading_content && isset($head_btn_content) && $head_btn_content && isset($head_bg) && $head_bg) {
    ?>
    <section class="head_bg text-light py-5 px-5" style="background-image: url(<?php echo $head_bg;?>);"> 
      <div class="col-lg-6 col-md-10 col-sm-12  py-5 px-3 sec1_item">
        <h1 class="text-capitlize pt-5">
        <?php
         echo $head_content;
        ?>
        </h1>
        <p>
         <?php
         echo  $subheading_content;
        ?> 
        </p>
        <button class="head_button btn text-uppercase text-light px-5 py-2 mt-2">
        <?php
         echo  $head_btn_content;
        ?> 
        </button>
      </div>
    </section>
    <?php
    
  }
//header end
//section one start
$secone_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "sec_one_head_content", true ) ) );
$secone_sub_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "sec_one_subhead_content", true ) ) );
$imageone_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_one_content", true ) ) );
$imageone_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_one_subhead_content", true ) ) );
$imagetwo_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_two_content", true ) ) );
$imagetwo_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_two_subhead_content", true ) ) );
$imagethree_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_three_content", true ) ) );
$imagethree_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "image_three_subhead_content", true ) ) );
$image_one = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_one", true ) ) );
$image_two = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_two", true ) ) );
$image_three = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_three", true ) ) );
         
if(isset($secone_head_content) && $secone_head_content && isset( $secone_sub_head_content) &&  $secone_sub_head_content && isset( $imageone_content) &&  $imageone_content && isset( $imageone_subhead_content) &&  $imageone_subhead_content && isset($imagetwo_content) && $imagetwo_content && isset( $imagetwo_subhead_content) &&  $imagetwo_subhead_content && isset($imagethree_content) && $imagethree_content && isset($imagethree_subhead_content) && $imagethree_subhead_content && isset($image_one) && $image_one && isset( $image_two ) && $image_two && isset($image_three) &&  $image_three) {
  ?>
  <section class="sec_one">
    <div class="container py-5 px-4">
       <div class="row">
          <div class=" col-md-8 col-sm-12 col-12 col-lg-8 m-auto text-center text-light py-4">
            <h1 class="text-uppercase py-2">
              <?php echo $secone_head_content;?> 
            </h1>
            <p class="px-3">
              <?php echo $secone_sub_head_content;?>
            </p>
          </div>
        </div>
       <div class="row pt-4">
          <div class=" col-lg-4 col-md-4 col-sm-12 my-2">
            <div class="card">
              <div class="text-center">
                <img src="<?php echo $image_one ; ?>" class="img-fluid" >
              </div>
              <div class="card-body text-center text-light bg-dark">
                <h2 class="text-uppercase py-2">
                  <?php echo $imageone_content; ?>
                  </h2>
                <p class="card-text pb-3">
                  <?php echo $imageone_subhead_content; ?>
                  </p>
              </div>
            </div>
         </div>
         <div class=" col-lg-4 col-md-4 col-sm-12 my-2">
            <div class="card">
              <div class="text-center">
                <img src="<?php echo $image_two ; ?>" class="img-fluid" >
              </div>
              <div class="card-body text-center text-light bg-dark">
                <h2 class="text-uppercase py-2">
                  <?php echo $imagetwo_content; ?>
                </h2>
                <p class="card-text pb-3">
                  <?php echo  $imagetwo_subhead_content; ?>

                </p>
              </div>
            </div>
         </div>
         <div class=" col-lg-4 col-md-4 col-sm-12 my-2">
            <div class="card">
              <div class="text-center">
                <img src="<?php echo $image_three ; ?>" class="img-fluid" >
              </div>
              <div class="card-body text-center text-light bg-dark">
                <h2 class="text-uppercase py-2">
                  <?php echo $imagethree_content; ?>
                </h2>
                <p class="card-text pb-3">
                  <?php echo $imagethree_subhead_content; ?>
                </p>
              </div>
            </div>
         </div>
      </div> 
    </div> 
  </section>
  <?php
 }
//section one end
 //section two start
$grayhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_head_content", true ) ) );
$graysubhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead_content", true ) ) );
$grayimageone_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_content", true ) ) );
$grayimageonesub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_sub_content", true ) ) );
$grayimageonebtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imageone_btn_content", true ) ) );
$grayimagetwo_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_content", true ) ) );
$grayimagetwosub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_sub_content", true ) ) );
$grayimagetwobtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagetwo_btn_content", true ) ) );
$grayimagethree_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_content", true ) ) );
$grayimagethreesub_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_sub_content", true ) ) );
$grayimagethreebtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_imagethree_btn_content", true ) ) );
$image_grayone = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_grayone", true ) ) );
$image_graytwo = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_graytwo", true ) ) );
$image_graythree = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_graythree", true ) ) );

  if(isset($grayhead_content) &&  $grayhead_content && isset( $graysubhead_content) &&  $graysubhead_content && isset(  $grayimageone_content) &&   $grayimageone_content && isset($grayimageonesub_content) && $grayimageonesub_content && isset($grayimageonebtn_content) && $grayimageonebtn_content && isset($grayimagetwo_content) && $grayimagetwo_content && isset($grayimagetwosub_content) && $grayimagetwosub_content && isset( $grayimagetwobtn_content) &&  $grayimagetwobtn_content && isset($grayimagethree_content) && $grayimagethree_content && isset($grayimagethreesub_content) && $grayimagethreesub_content && isset($grayimagethreebtn_content) && $grayimagethreebtn_content && isset($image_grayone) && $image_grayone && isset($image_graytwo) &&  $image_graytwo && isset($image_graythree) && $image_graythree) {
    ?>
<section class="bg-dark text-light">
    <div class="container py-5 px-4">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 m-auto text-center py-4">
            <h1 class="text-uppercase">
                <?php echo $grayhead_content; ?>
            </h1>
            <p class="px-3">
              <?php echo $graysubhead_content; ?>
           </p>
          </div>
        </div>
        <div class="row">
        <div class=" col-lg-4 col-md-4 col-sm-12 my-2 ">
          <div class="card bg-card text-light pt-5 pb-3">
            <div class="text-center">
              <img src="<?php echo $image_grayone;?>" class="img-fluid"></div>
            <div class="card-body text-center">
              <h2 class="text-uppercase py-3">
                <?php echo $grayimageone_content; ?>
                </h2>
              <p class="card-text pb-3">
                <?php echo $grayimageonesub_content; ?> 
              </p>
              <button class="btn btn-dark btn-lg btn-block">
                <?php echo $grayimageonebtn_content; ?>
              </button>
            </div>
          </div>
        </div>

        <div class=" col-lg-4 col-md-4 col-sm-12 my-2 ">
          <div class="card bg-card text-light pt-5 pb-3">
            <div class="text-center">
              <img src="<?php echo $image_graytwo;?>" class="img-fluid"></div>
            <div class="card-body text-center">
              <h2 class="text-uppercase py-3">
                <?php echo $grayimagetwo_content; ?>
                </h2>
              <p class="card-text pb-3">
                <?php echo $grayimagetwosub_content; ?>
                </p>
              <button class="btn btn-dark btn-lg btn-block">
                <?php echo $grayimagetwobtn_content; ?> 
                </button>
            </div>
          </div>
        </div>

        <div class=" col-lg-4 col-md-4 col-sm-12 my-2 ">
          <div class="card bg-card text-light pt-5 pb-3">
            <div class="text-center">
              <img src="<?php echo $image_graythree;?>" class="img-fluid"></div>
            <div class="card-body text-center">
              <h2 class="text-uppercase py-3">
                <?php echo $grayimagethree_content; ?>
              </h2>
              <p class="card-text pb-3">
                <?php echo $grayimagethreesub_content; ?>
              </p>
              <button class="btn btn-dark btn-lg btn-block">
                <?php echo $grayimagethreebtn_content; ?>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  }
  //section two end
  //section three start
$besthead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_heading1", true ) ) );
$bestsubhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_subheading1", true ) ) );
$bestbtn_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_btn1", true ) ) );
$best_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_heading2", true ) ) );
$best_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_subheading2", true ) ) );
$best_btn_content = sanitize_text_field( trim( get_post_meta($post->ID, "best_btn2", true ) ) );
$best_imageone = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_bestone", true ) ) );
 $best_imagetwo = sanitize_text_field( trim( get_post_meta($post->ID, "user_picture_besttwo", true ) ) );
   
if(isset($besthead_content) && $besthead_content && isset($bestsubhead_content) && $bestsubhead_content && isset($bestbtn_content) && $bestbtn_content && isset($best_head_content) && $best_head_content && isset($best_subhead_content) && $best_subhead_content && isset($best_btn_content) && $best_btn_content && isset($best_imageone) && $best_imageone && isset($best_imagetwo) && $best_imagetwo) {
      ?>

  <section class=" col-lg-12  col-md-12 col-12 text-light">
    <div class="row">
      <div class=" col-lg-6 col-md-6 col-sm-6 sec_ped">
        <img src="<?php echo $best_imageone; ?>" class="img-fluid" >
      </div>
        <div class=" col-lg-6 col-md-6 col-sm-6 sec_three sec_ped">
          <div class="py-5 pl-5 pr-4">  
            <h1 class="text-uppercase pt-5 pb-2">
              <?php echo $besthead_content; ?>   
              </h1>
            <p class="pb-3">
              <?php echo $bestsubhead_content; ?>  
              </p>
            <button class="btn btn-dark text-uppercase py-2 px-5">
              <?php echo $bestbtn_content;?> 
            </button>
          </div>
        </div>
      </div>
    <div class="row">
      <div class=" col-lg-6 col-md-6 col-sm-6 sec_three sec_ped">
        <div class="py-5 pl-5 pr-4">  
          <h1 class="text-uppercase pt-5 pb-2"><?php echo $best_head_content;?>
          </h1>
          <p class="pb-3">
            <?php echo  $best_subhead_content;?> 
          </p>
          <button class="btn btn-dark text-uppercase py-2 px-5">
            <?php echo $best_btn_content;?>
          </button>
        </div>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-6 sec_ped">
        <img src="<?php echo $best_imagetwo;?>" class="img-fluid" >
      </div>
    </div>
  </section>


      <?php
}
//section threee end 
//section four start
$gray_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_two_head", true ) ) );
$gray_subhead_content = sanitize_text_field( trim( get_post_meta($post->ID, "gray_two_subhead", true ) ) );
$gray_subhead1 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead1", true ) ) );
$gray_subpara1 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para1", true ) ) );
$gray_subhead2 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead2", true ) ) );
$gray_subpara2 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para2", true ) ) );
$gray_subhead3 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_subhead3", true ) ) );
$gray_subpara3 = sanitize_text_field( trim( get_post_meta($post->ID, "gray_para3", true ) ) );

if(isset($gray_head_content) && $gray_head_content && isset($gray_subhead_content) && $gray_subhead_content && isset( $gray_subhead1) &&  $gray_subhead1 && isset( $gray_subpara1) &&  $gray_subpara1 && isset($gray_subhead2) && $gray_subhead2 && isset($gray_subpara2) && $gray_subpara2 && isset($gray_subhead3) && $gray_subhead3 && isset($gray_subpara3) && $gray_subpara3)    {
      ?>

      <section class="bg-dark text-light">
        <div class="container py-5 px-4">
          <div class="row">
            <div class="col-lg-8 m-auto text-center text-light py-4">
              <h1 class="text-uppercase py-3">
                <?php echo $gray_head_content;?>
                </h1>
              <p class="px-3">
                <?php echo $gray_subhead_content;?>    
                </p>
            </div>
          </div>
          <div class="row py-5">
            <div class="col-lg-4 mx-auto my-4 text-center">
              <h1>
                <?php echo $gray_subhead1;?>
              </h1>
              <h2>
                <?php echo $gray_subpara1;?>
              </h2> 
            </div>
            <div class="col-lg-4 mx-auto my-3 text-center">
              <h1>
                <?php echo $gray_subhead2;?>
              </h1>
              <h2>
                <?php echo $gray_subpara2;?>
              </h2> 
            </div>
          <div class="col-lg-4 mx-auto  my-3 text-center">
            <h1>
              <?php echo $gray_subhead3;?>
            </h1>
            <h2>
              <?php echo $gray_subpara3;?>
            </h2> 
          </div>
      </div>
    </div>
  </section>
  <?php
  }
//section four end
// section five start
$herbeat_para_content = sanitize_text_field( trim( get_post_meta($post->ID, "herbeat_para", true ) ) );
$herbeat_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "herbeat_head", true ) ) );
$herbeat_bg = sanitize_text_field( trim( get_post_meta($post->ID, "upload_herbeat_background", true ) ) );
if(isset($herbeat_para_content) && $herbeat_para_content && isset($herbeat_head_content) && $herbeat_head_content && isset($herbeat_bg) &&  $herbeat_bg)   {   ?>

  <section class="sec_four text-light py-5" style="background-image: url(<?php echo $herbeat_bg;?>);">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-8 mx-auto text-center">
          <p>
            <?php echo $herbeat_para_content; ?>
            </p>
          <h1 class="text-uppercase">
            <?php echo $herbeat_head_content; ?>
            </h1> 
        </div>
      </div>
    </div>
  </section>
          <?php
        }
//section five end
        //section six start
  $subscribe_head_content = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_head", true ) ) );
  $subscribe_para_content = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_para", true ) ) );
  $subscribe_btn = sanitize_text_field( trim( get_post_meta($post->ID, "subscribe_btn", true ) ) );
  if(isset($subscribe_head_content) && $subscribe_head_content && isset($subscribe_para_content) && $subscribe_para_content && isset($subscribe_btn) &&  $subscribe_btn)  {
  ?>
  <section class="sec_one text-light">
    <div class="container py-5">
      <div class="row pb-3">
        <div class="col-lg-8 mx-auto text-center py-5">
        <h1 class="text-uppercase py-1">
          <?php echo $subscribe_head_content; ?> 
          </h1>
        <p class="py-2 px-3">
          <?php echo $subscribe_para_content;?>
        </p>
        <input type="text" placeholder="Your Email" class="pl-3">
        <button class="btn2 bg-dark text-light">
          <?php echo $subscribe_btn; ?>
          </button>
        </div>
      </div>
    </div>
  </section>
          <?php
        }
get_footer();
 ?>