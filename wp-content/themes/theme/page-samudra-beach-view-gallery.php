<?php get_header(); ?>

<?php $SamudraBeachViewBreadcrumb=get_field('samudra_beach_view_breadcrumb','options'); ?>

<section class="topbreadcrumbs" style="background-image: url(<?php echo $SamudraBeachViewBreadcrumb; ?>)">
    <div class="container">
      <div class="breadcrumbscontent">
        <h1>Samudra Beach<br /> View</h1>
        <p><a href="#">Home</a> > Samudra Beach View</p>
      </div>
    </div>
  </section>

  <section class="kidszone">
    <div class="container">
      <!-- <div class="zonetabbtn">
        <button class="tabbtn filter-button" data-filter="kidsplayzone"><span>Images</span></button>
        <button class="tabbtn filter-button" data-filter="indoorgames"><span>Videos</span></button>
      </div> -->
      <div class="gallerybox">

        <?php if (have_rows("samudra_beach_view_image", "options")): ?>
          <?php while (have_rows("samudra_beach_view_image", "options")): the_row(); $SamudraBeachImage = get_sub_field("samudra_beach_image"); $SamudraBeachImageName = get_sub_field("samudra_beach_image_name"); ?>
            <div class="playzonecontent filter kidsplayzone">
              <figure class="wow fadeInUp2">
                <a href="<?php echo $SamudraBeachImage ?>" data-fancybox="gallery" data-src="<?php echo $SamudraBeachImage ?>">
                  <img data-src="<?php echo $SamudraBeachImage ?>" alt="<?php echo $SamudraBeachImageName ?>" /></a>
              </figure>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows("samudra_beach_view_video", "options")): ?>
          <?php while (have_rows("samudra_beach_view_video", "options")): the_row(); $SamudraBeachVideo = get_sub_field("samudra_beach_video"); ?>
            <div class="playzonecontent filter indoorgames">
              <figure class="wow fadeInUp2">
                <a href="<?php echo $SamudraBeachVideo ?>" data-fancybox="gallery" data-src="<?php echo $SamudraBeachVideo ?>">
                  <video controls style="  width: 500px;">
                    <source src="<?php echo $SamudraBeachVideo ?>" type="video/mp4">
                    Your browser does not support the video tag.
                  </video></a>
              </figure>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>