<?php get_header(); ?>

 <?php
$AgroClubBreadcrampImage = get_field("agro_club_breadcramp_image", "options");
?>
<section class="topbreadcrumbs"
  style="background-image: url(<?php echo $AgroClubBreadcrampImage; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>Agro Club</h1>
      <p><a href="#">Home</a> > Agro Club</p>
    </div>
  </div>
</section>

<?php
$AgroClubTopContent = get_field("agro_club_top_content", "options");
$AgroClubLocationLink = get_field("agro_club_location_link", "options");
$AgroClubLocation = get_field("agro_club_location", "options");
$AgroClubCallLink = get_field("agro_club_call_link", "options");
$AgroClubCall = get_field("agro_club_call", "options");
$AgroClubMailLink = get_field("agro_club_mail_link", "options");
$AgroClubMail = get_field("agro_club_mail", "options");
?>
<section class="projecttop">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="topdetails">
          <?php echo $AgroClubTopContent; ?>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Location</h3>
              <a href="<?php echo $AgroClubLocationLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Locationtop.png" alt=""
                  class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/loactiontophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $AgroClubLocation; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Call</h3>
              <a href="<?php echo $AgroClubCallLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Calltop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/calltophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $AgroClubCall; ?></span></a>
            </div>
          </div>

          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Mail</h3>
              <a href="<?php echo $AgroClubMailLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Emailtop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/mailtophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $AgroClubMail; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Brochure</h3>
              <a href="https://acregroup.in/agro-club-brochure/" target="_blank"><span>View Brochure's</span><i class="fa-solid fa-chevron-right"></i><img
                  src="<?php bloginfo('template_directory');?>/assets/images/arrowhover.gif" alt=""
                  class="tophoverimg" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$AboutAgroClubImage = get_field("about_agro_club_image", "options");
$AboutAgroClub = get_field("about_agro_club", "options");
?>
<section class="projectdetails">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="projectdetailsimg">
          <img data-src=" <?php echo $AboutAgroClubImage; ?>" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="projectdetailspara">
          <?php echo $AboutAgroClub; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$AgroClubOfferBg = get_field("agro_club_offer_bg", "options");
$AgroClubOfferTitle = get_field("agro_club_offer_title", "options");
$AgroClubOffersImage = get_field("agro_club_offers_image", "options");
?>
<section class="offerssection" style="background-image: url(<?php echo $AgroClubOfferBg; ?>)">
  <!-- <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojecttopline.png" alt="" class="upimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojectdownline.png" alt=""
    class="downimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/homeabout2.png" alt="" class="bottomhome" /> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="offersdetails">
          <h2><?php echo $AgroClubOfferTitle; ?></h2>

          <ul class="offerslist">
            <?php if (have_rows("agro_club_offers", "options")): ?>
            <?php while (have_rows("agro_club_offers", "options")):
            the_row();
            $AgroClubPointIcon = get_sub_field("agro_club_point_icon");
            $AgroClubOfferPoints = get_sub_field("agro_club_offer_points");
            ?>
            <li>
              <img data-src="<?php echo $AgroClubPointIcon; ?>" alt="" /><?php echo $AgroClubOfferPoints; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="offersimg">
          <img data-src="<?php echo $AgroClubOffersImage; ?>" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$AgroClubLayoutTitle = get_field("agro_club_layout_title", "options");
$AgroClubLayoutSubtitle = get_field("agro_club_layout_subtitle", "options");
?>
<section class="layoutplans">
  <div class="layouttitle">
    <h2><?php echo $AgroClubLayoutTitle; ?></h2>
    <p><?php echo $AgroClubLayoutSubtitle; ?></p>
  </div>
  <div class="container">
    <div class="layoutimg">
      <?php if (have_rows("agro_club_layout_plan", "options")): ?>
        <?php while (have_rows("agro_club_layout_plan", "options")):
          the_row();
          $AgroClubLayoutImage = get_sub_field("agro_club_layout_image");
          ?>
            <div class="layoutpageimg">
              <img data-src="<?php echo $AgroClubLayoutImage; ?>" alt="" />
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
$AgroClubGalleryTitle = get_field("agro_club_gallery_title", "options");
$AgroClubGallerySubtitle = get_field("agro_club_gallery_subtitle", "options");
$AgroClubWeb = get_field('agro_club_web', 'option');
?>
<section class="projectgallery">
  <div class="container">
    <div class="projectgallerytitle">
      <h2><?php echo $AgroClubGalleryTitle; ?></h2>
      <p><?php echo $AgroClubGallerySubtitle; ?></p>
    </div>
    <div class="projectphotos">
       <?php if (have_rows("agro_club_gallery", "options")): ?>
        <?php while (have_rows("agro_club_gallery", "options")):
          the_row();
          $AgroClubGalleryImage = get_sub_field("agro_club_gallery_image");
          ?>
            <img data-src="<?php echo $AgroClubGalleryImage; ?>" alt="" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php $AgroClubViewmoreLink=get_field('agro_club_viewmore_link','options'); ?>
    <div class="viewbtn">
      <?php if ($AgroClubWeb): ?>
        <a href="<?php echo esc_url($AgroClubWeb); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>
      <?php endif; ?>

      <a href="<?php echo esc_url($AgroClubViewmoreLink); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>
    </div>
  </div>

  <?php
  $AgroClubMap = get_field("agro_club_map", "options");
  ?>
  <?php echo $AgroClubMap; ?>
</section>

<?php get_footer(); ?>