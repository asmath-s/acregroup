<?php get_header(); ?>


<?php $AgroClubGalleryBreadcrumb=get_field('agro_club_gallery_breadcrumb','options'); ?>

<section class="topbreadcrumbs" style="background-image: url(<?php echo $AgroClubGalleryBreadcrumb; ?>)">
    <div class="container">
      <div class="breadcrumbscontent">
        <h1>Agro Club Gallery</h1>
        <p><a href="#">Home</a> > Agro Club</p>
      </div>
    </div>
  </section>

  <section class="kidszone">
    <div class="container">
      <div class="gallerybox">

        <?php if (have_rows("agro_club_gallery_page", "options")): ?>
          <?php while (have_rows("agro_club_gallery_page", "options")): the_row(); $AgroClubGalleryImage1 = get_sub_field("agro_club_gallery_image1"); $AgroClubGalleryName = get_sub_field("agro_club_gallery_name"); ?>
            <div class="playzonecontent">
              <figure class="wow fadeInUp2">
                <a href="<?php echo $AgroClubGalleryImage1 ?>" data-fancybox="gallery" data-src="<?php echo $AgroClubGalleryImage1 ?>">
                  <img data-src="<?php echo $AgroClubGalleryImage1 ?>" alt="<?php echo $AgroClubGalleryName ?>" /></a>
              </figure>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>