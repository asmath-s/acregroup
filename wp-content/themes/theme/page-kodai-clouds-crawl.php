<?php get_header(); ?>

 <?php
$KodaiBreadcrampImage = get_field("kodai_breadcramp_image", "options");
?>
<section class="topbreadcrumbs"
  style="background-image: url(<?php echo $KodaiBreadcrampImage; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>Kodai <br />Clouds Crawl</h1>
      <p><a href="#">Home</a> > Kodai Clouds Crawl</p>
    </div>
  </div>
</section>

<?php
$KodaiTopContent = get_field("kodai_top_content", "options");
$KodaiLocationLink = get_field("kodai_location_link", "options");
$KodaiLocation = get_field("kodai_location", "options");
$KodaiCallLink = get_field("kodai_call_link", "options");
$KodaiCall = get_field("kodai_call", "options");
$KodaiMailLink = get_field("kodai_mail_link", "options");
$KodaiMail = get_field("kodai_mail", "options");
?>
<section class="projecttop">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="topdetails">
          <?php echo $KodaiTopContent; ?>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Location</h3>
              <a href="<?php echo $KodaiLocationLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Locationtop.png" alt=""
                  class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/loactiontophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $KodaiLocation; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Call</h3>
              <a href="<?php echo $KodaiCallLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Calltop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/calltophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $KodaiCall; ?></span></a>
            </div>
          </div>

          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Mail</h3>
              <a href="<?php echo $KodaiMailLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Emailtop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/mailtophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $KodaiMail; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Brochure</h3>
              <a href="https://acregroup.in/kodai-clouds-crawl-brochure/" target="_blank"><span>View Brochure's</span><i class="fa-solid fa-chevron-right"></i><img
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
$AboutKodaiBigImage = get_field("about_kodai_big_image", "options");
$AboutKoadiContent = get_field("about_koadi_content", "options");
?>
<section class="projectdetails">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="projectdetailsimg">
          <img data-src=" <?php echo $AboutKodaiBigImage; ?>" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="projectdetailspara">
          <?php echo $AboutKoadiContent; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$KodaiOfferBg = get_field("kodai_offer_bg", "options");
$KodaiOfferTittle = get_field("kodai_offer_tittle", "options");
$KodaiOffersImage = get_field("kodai_offers_image", "options");
?>
<section class="offerssection" style="background-image: url(<?php echo $KodaiOfferBg; ?>)">
  <!-- <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojecttopline.png" alt="" class="upimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojectdownline.png" alt=""
    class="downimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/homeabout2.png" alt="" class="bottomhome" /> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="offersdetails">
          <h2><?php echo $KodaiOfferTittle; ?></h2>

          <ul class="offerslist">
            <?php if (have_rows("kodai_offers", "options")): ?>
            <?php while (have_rows("kodai_offers", "options")):
            the_row();
            $KodaiOffersIcon = get_sub_field("kodai_offers_icon");
            $KodaiOffersContent = get_sub_field("kodai_offers_content");
            ?>
            <li>
              <img data-src="<?php echo $KodaiOffersIcon; ?>" alt="" /><?php echo $KodaiOffersContent; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="offersimg">
          <img data-src="<?php echo $KodaiOffersImage; ?>" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$KodaiLayoutTitle = get_field("kodai_layout_title", "options");
$KodaiLayoutSubtitle = get_field("kodai_layout_subtitle", "options");
?>
<section class="layoutplans">
  <div class="layouttitle">
    <h2><?php echo $KodaiLayoutTitle; ?></h2>
    <p><?php echo $KodaiLayoutSubtitle; ?></p>
  </div>
  <div class="container">
    <div class="layoutimg">
      <?php if (have_rows("kodai_layout_images", "options")): ?>
        <?php while (have_rows("kodai_layout_images", "options")):
          the_row();
          $LayoutPlanImage = get_sub_field("layout_plan_image");
          ?>
            <div class="layoutpageimg">
              <img data-src="<?php echo $LayoutPlanImage; ?>" alt="" />
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
$KodaiGalleryTitle = get_field("kodai_gallery_title", "options");
$KodaiGallerySubtitle = get_field("kodai_gallery_subtitle", "options");
$ViewMoreLink1 = get_field('view_more_link1', 'option');
?>
<section class="projectgallery">
  <div class="container">
    <div class="projectgallerytitle">
      <h2><?php echo $KodaiGalleryTitle; ?></h2>
      <p><?php echo $KodaiGallerySubtitle; ?></p>
    </div>
    <div class="projectphotos">
       <?php if (have_rows("kodai_gallery", "options")): ?>
        <?php while (have_rows("kodai_gallery", "options")):
          the_row();
          $KodaiGalleryImage = get_sub_field("kodai_gallery_image");
          ?>
            <img data-src="<?php echo $KodaiGalleryImage; ?>" alt="" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="viewbtn">
      <?php if ($ViewMoreLink1): ?>
        <a href="<?php echo esc_url($ViewMoreLink1); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>
      <?php endif; ?>
    </div>
  </div>

  <?php
  $ProjectMap = get_field("project_map", "options");
  ?>
  <?php echo $ProjectMap; ?>
</section>

<?php get_footer(); ?>