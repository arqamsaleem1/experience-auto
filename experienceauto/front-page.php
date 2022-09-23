<?php
/**
 * The template for displaying Front Page
 */

get_header();
?>
<div class="home-content-wrapper">
	<div class="container banner-img">
		<img src="<?php if(get_field('page_banner_image')){ the_field('page_banner_image'); }?>">
	</div>
</div>
<div class="container-fluid accordion-bg">
  	<div class="container">
    <?php while ( have_rows('home_loan_tabs') ) : the_row(); ?> 
    <div class="col accordion-setting">
      <h1><?php the_sub_field('loan_tabs_heading'); ?></h1>
      <div class="accordion-inner-setting">
    <div class="accordion" id="accordionExample">
        <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link btn-setting" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> <?php the_sub_field('tab_1_title'); ?></button>                  
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_1_content'); ?></div>
            </div>
        </div>
        <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link btn-setting collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i><?php the_sub_field('tab_2_title'); ?></button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_2_content'); ?></div>
            </div>
        </div>
        <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed btn-setting" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i> <?php the_sub_field('tab_3_title'); ?></button>                     
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_3_content'); ?></div>
            </div>
        </div>
         <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingFour">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed btn-setting" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i> <?php the_sub_field('tab_4_title'); ?></button>                     
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_4_content'); ?></div>
            </div>
        </div>
        <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingFive">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed btn-setting" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus"></i> <?php the_sub_field('tab_5_title'); ?></button>                     
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_5_content'); ?></div>
            </div>
        </div>
        <div class="card card-setting">
            <div class="card-header card-header-setting" id="headingSix">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed btn-setting" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-plus"></i> <?php the_sub_field('tab_6_title'); ?></button>                     
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body accordion-setting"><?php the_sub_field('tab_6_content'); ?></div>
            </div>
        </div>
    </div>
</div>
    </div>
<?php endwhile; ?> 
  </div>
  </div> <!-- accordion div closed -->
<div class="container services">
<?php while ( have_rows('services_area_fields') ) : the_row(); ?> 
	<h1><?php the_sub_field('services_heading'); ?></h1>
	<div class="row">
		<div class="col-sm-4 services-setting">
			<img src="<?php the_sub_field('services_image_one'); ?>" class="img-fluid">
		</div>
		<div class="col-sm-4 services-setting">
			<img src="<?php the_sub_field('services_image_two'); ?>" class="img-fluid">
		</div>
		<div class="col-sm-4 services-setting">
			<img src="<?php the_sub_field('services_image_three'); ?>" class="img-fluid">
		</div>
	</div>
	<button type="button" class="btn btn-setting service-btn-setting"><?php the_sub_field('services_button_text'); ?><i class="fa fa-chevron-right font-awesome-setting"></i><i class="fa fa-chevron-right"></i></button>
	<?php endwhile; ?> 
</div> 
<?php get_footer();?>
