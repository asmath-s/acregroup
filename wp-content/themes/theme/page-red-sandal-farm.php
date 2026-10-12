<?php get_header(); ?>

 <?php
$RedSandalBreadcrampImage = get_field("red_sandal_image", "options");
?>
<section class="topbreadcrumbs"
  style="background-image: url(<?php echo $RedSandalBreadcrampImage; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>Red Sandal <br />Farm</h1>
      <p><a href="#">Home</a> > Red Sandal Farm</p>
    </div>
  </div>
</section>

<?php
$RedSandalTopContent = get_field("red_sandal_top_content", "options");
$RedSandalLocationLink = get_field("red_sandal_location_link", "options");
$RedSandalLocation = get_field("red_sandal_location", "options");
$RedSandalCallLink = get_field("red_sandal_call_link", "options");
$RedSandalCall = get_field("red_sandal_call", "options");
$RedSandalMailLink = get_field("red_sandal_mail_link", "options");
$RedSandalMail = get_field("red_sandal_mail", "options");

?>
<section class="projecttop">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="topdetails">
          <?php echo $RedSandalTopContent; ?>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Location</h3>
              <a href="<?php echo $RedSandalLocationLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Locationtop.png" alt=""
                  class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/loactiontophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $RedSandalLocation; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Call</h3>
              <a href="<?php echo $RedSandalCallLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Calltop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/calltophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $RedSandalCall; ?></span></a>
            </div>
          </div>

          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Mail</h3>
              <a href="<?php echo $RedSandalMailLink; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/Emailtop.png"
                  alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/mailtophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $RedSandalMail; ?></span></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Brochure</h3>
              <a href="https://acregroup.in/red-sandal-farm-brochure/" target="_blank"><span>View Brochure's</span><i class="fa-solid fa-chevron-right"></i><img
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
$AboutRedSandalBigImage = get_field("about_red_sandal_big_image", "options");
$AboutRedSandalContent = get_field("about_red_sandal_content", "options");
?>
<section class="projectdetails">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="projectdetailsimg">
          <img data-src=" <?php echo $AboutRedSandalBigImage; ?>" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="projectdetailspara">
          <?php echo $AboutRedSandalContent; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$RedSandalOfferBg = get_field("red_sandal_offer_bg", "options");
$RedSandalOfferTittle = get_field("red_sandal_offer_tittle", "options");
$RedSandalOffersImage = get_field("red_sandal_offers_image", "options");
?>
<section class="offerssection" style="background-image: url(<?php echo $RedSandalOfferBg; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="offersdetails">
          <h2><?php echo $RedSandalOfferTittle; ?></h2>

          <ul class="offerslist">
            <?php if (have_rows("red_sandal_offers", "options")): ?>
            <?php while (have_rows("red_sandal_offers", "options")):
            the_row();
            $RedSandalOffersIcon = get_sub_field("red_sandal_offers_icon");
            $RedSandalOffersContent = get_sub_field("red_sandal_offers_content");
            ?>
            <li>
              <img data-src="<?php echo $RedSandalOffersIcon; ?>" alt="" /><?php echo $RedSandalOffersContent; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="offersimg">
          <img data-src="<?php echo $RedSandalOffersImage; ?>" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$RedSandalLayoutTitle = get_field("red_sandal_layout_title", "options");
$RedSandalLayoutSubtitle = get_field("red_sandal_layout_subtitle", "options");
?>
<section class="layoutplans">
  <div class="layouttitle">
    <h2><?php echo $RedSandalLayoutTitle; ?></h2>
    <p><?php echo $RedSandalLayoutSubtitle; ?></p>
  </div>
  <div class="container">
    <div class="layoutimg">
      <?php if (have_rows("red_sandal_layout_images", "options")): ?>
        <?php while (have_rows("red_sandal_layout_images", "options")):
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
$RedSandalGalleryTitle = get_field("red_sandal_gallery_title", "options");
$RedSandalGallerySubtitle = get_field("red_sandal_gallery_subtitle", "options");
?>
<?php $ViewMoreLink = get_field('view_more_link', 'option');?>
<section class="projectgallery">
  <div class="container">
    <div class="projectgallerytitle">
      <h2><?php echo $RedSandalGalleryTitle; ?></h2>
      <p><?php echo $RedSandalGallerySubtitle; ?></p>
    </div>
    <div class="projectphotos">
       <?php if (have_rows("red_sandal_gallery", "options")): ?>
        <?php while (have_rows("red_sandal_gallery", "options")):
          the_row();
          $RedSandalGalleryImage = get_sub_field("red_sandal_gallery_image");
          ?>
            <img data-src="<?php echo $RedSandalGalleryImage; ?>" alt="" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php $RedSandalGalleryPage=get_field('red_sandal_gallery_page','options'); ?>
    <div class="viewbtn">
      <?php if ($ViewMoreLink): ?>
        <a href="<?php echo esc_url($ViewMoreLink); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>
      <?php endif; ?>

      <a href="<?php echo esc_url($RedSandalGalleryPage); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>

    </div>
  </div>

  <?php
  $RedProjectMap = get_field("red_project_map", "options");
  ?>
  <?php echo $RedProjectMap; ?>
</section>

<?php get_footer(); ?>