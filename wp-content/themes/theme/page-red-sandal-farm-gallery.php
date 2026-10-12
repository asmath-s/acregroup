<?php get_header(); ?>

<?php $RedSandalGalleryBreadcrumb=get_field('red_sandal_gallery_breadcrumb','options'); ?>

<section class="topbreadcrumbs" style="background-image: url(<?php echo $RedSandalGalleryBreadcrumb; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>Red Sandal Farm<br /> Gallery</h1>
      <p><a href="#">Home</a> > Red Sandal Farm</p>
    </div>
  </div>
</section>

<section class="kidszone">
  <div class="container">
    <!-- <div class="zonetabbtn">
        <button class="tabbtn filter-button" data-filter="stage1"><span>Maintenance Stage 1</span></button>
        <button class="tabbtn filter-button" data-filter="stage2"><span>Maintenance Stage 2</span></button>
        <button class="tabbtn filter-button" data-filter="kidsplayzone"><span>Maintenance Stage 3</span></button>
        <button class="tabbtn filter-button" data-filter="indoorgames"><span>Videos</span></button>
      </div> -->

    <div class="galleryboxtitle">
      <h3>Plantation & Maintenance</h3>
      <div class="gallerybox">
        <?php if (have_rows("red_sandal_stage_one", "options")): ?>
        <?php while (have_rows("red_sandal_stage_one", "options")): the_row(); $RedSandalStageOneImage = get_sub_field("red_sandal_stage_one_image"); $RedSandalStageOneImageName = get_sub_field("red_sandal_stage_one_image_name"); ?>
        <div class="playzonecontent filter stage1">
          <figure class="wow fadeInUp2">
            <a href="<?php echo $RedSandalStageOneImage ?>" data-fancybox="gallery"
              data-src="<?php echo $RedSandalStageOneImage ?>">
              <img data-src="<?php echo $RedSandalStageOneImage ?>" alt="<?php echo $RedSandalStageOneImageName ?>" /></a>
          </figure>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="galleryboxtitle">
      <h3>Maintenance Stage 1</h3>
      <div class="gallerybox">
        <?php if (have_rows("red_sandal_stage_two", "options")): ?>
        <?php while (have_rows("red_sandal_stage_two", "options")): the_row(); $RedSandalStageTwoImage = get_sub_field("red_sandal_stage_two_image"); $RedSandalStageTwoImageName = get_sub_field("red_sandal_stage_two_image_name"); ?>
        <div class="playzonecontent filter stage2">
          <figure class="wow fadeInUp2">
            <a href="<?php echo $RedSandalStageTwoImage ?>" data-fancybox="gallery"
              data-src="<?php echo $RedSandalStageTwoImage ?>">
              <img data-src="<?php echo $RedSandalStageTwoImage ?>" alt="<?php echo $RedSandalStageTwoImageName ?>" /></a>
          </figure>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="galleryboxtitle">
      <h3>Customers Visit</h3>
      <div class="gallerybox">
        <?php if (have_rows("red_sandal_gallery_image", "options")): ?>
        <?php while (have_rows("red_sandal_gallery_image", "options")): the_row(); $RedSandalImage = get_sub_field("red_sandal_image"); $RedSandalImageName = get_sub_field("red_sandal_image_name"); ?>
        <div class="playzonecontent filter kidsplayzone">
          <figure class="wow fadeInUp2">
            <a href="<?php echo $RedSandalImage ?>" data-fancybox="gallery" data-src="<?php echo $RedSandalImage ?>">
              <img data-src="<?php echo $RedSandalImage ?>" alt="<?php echo $RedSandalImageName ?>" /></a>
          </figure>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="galleryboxtitle">
      <h3>Videos</h3>
      <div class="gallerybox">
        <?php if (have_rows("red_sandal_gallery_video", "options")): ?>
        <?php while (have_rows("red_sandal_gallery_video", "options")): the_row(); $RedSandalVideo = get_sub_field("red_sandal_video"); ?>
        <div class="playzonecontent filter indoorgames">
          <figure class="wow fadeInUp2">
            <a href="<?php echo $RedSandalVideo ?>" data-fancybox="gallery" data-src="<?php echo $RedSandalVideo ?>" class="galleryvideo">
              <video controls>
                <source src="<?php echo $RedSandalVideo ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video></a>
          </figure>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>