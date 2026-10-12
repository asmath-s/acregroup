<?php get_header(); ?>

<?php
 $SamudraBreadcrampImage = get_field("samudra_breadcramp_image", "options");
 ?>
<section class="topbreadcrumbs" style="background-image: url(<?php echo $SamudraBreadcrampImage; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>Samudra <br />Beach View</h1>
      <p><a href="#">Home</a> > Samudra Beach View</p>
    </div>
  </div>
</section>

<?php
    $SamudraTopContent = get_field("samudra_top_content", "options");
    $SamudraLocationLink = get_field("samudra_location_link", "options");
    $SamudraLocation = get_field("samudra_location", "options");
    $SamudraCallLink = get_field("samudra_call_link", "options");
    $SamudraCall = get_field("samudra_call", "options");
    $SamudraMailLink = get_field("samudra_mail_link", "options");
    $SamudraMail = get_field("samudra_mail", "options");

    ?>
<section class="projecttop">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="topdetails">
          <?php echo $SamudraTopContent; ?>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Location</h3>
              <a href="<?php echo $SamudraLocationLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Locationtop.png" alt=""
                  class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/loactiontophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $SamudraLocation; ?></span></a>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Call</h3>
              <a href="<?php echo $SamudraCallLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Calltop.png" alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/calltophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $SamudraCall; ?></span></a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="topcontact">
              <h3>Mail</h3>
              <a href="<?php echo $SamudraMailLink; ?>" target="_blank"><img
                  src="<?php bloginfo('template_directory');?>/assets/images/Emailtop.png" alt="" class="topicon" /><img
                  src="<?php bloginfo('template_directory');?>/assets/images/mailtophover.gif" alt=""
                  class="tophoverimg" /><span><?php echo $SamudraMail; ?></span></a>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-5">
            <div class="topcontact2">
              <h3>Brochure</h3>
              <a href="https://acregroup.in/samudra-beach-view-brochure/" target="_blank"><span>View Brochure's</span><i
                  class="fa-solid fa-chevron-right"></i><img
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
    $AboutSamudraImage = get_field("about_samudra_image", "options");
    $AboutSamudraContent = get_field("about_samudra_content", "options");
    ?>
<section class="projectdetails">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="projectdetailsimg">
          <img data-src="<?php echo $AboutSamudraImage; ?>" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="projectdetailspara">
          <?php echo $AboutSamudraContent; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    $SamudraOfferBg = get_field("samudra_offer_bg", "options");
    $SamudraOfferTitle = get_field("samudra_offer_title", "options");
    $SamudraOffersImage = get_field("samudra_offers_image", "options");
    ?>
<section class="offerssection" style="background-image: url(<?php echo $SamudraOfferBg; ?>)">
  <!-- <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojecttopline.png" alt="" class="upimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/newprojectdownline.png" alt=""
    class="downimg1" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/homeabout2.png" alt="" class="bottomhome" /> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="offersdetails">
          <h2><?php echo $SamudraOfferTitle; ?></h2>

          <ul class="offerslist">
            <?php if (have_rows("samudra_offers", "options")): ?>
            <?php while (have_rows("samudra_offers", "options")):
                the_row();
                $SamudraOffersIcon = get_sub_field("samudra_offers_icon");
                $SamudraOffersContent = get_sub_field("samudra_offers_content");
                ?>
            <li>
              <img data-src="<?php echo $SamudraOffersIcon; ?>" alt="" /><?php echo $SamudraOffersContent; ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="offersimg">
          <img data-src="<?php echo $SamudraOffersImage; ?>" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    $SamudraLayoutTitle = get_field("samudra_layout_title", "options");
    $SamudraLayoutSubtitle = get_field("samudra_layout_subtitle", "options");
    ?>
<section class="layoutplans">
  <div class="layouttitle">
    <h2><?php echo $SamudraLayoutTitle; ?></h2>
    <p><?php echo $SamudraLayoutSubtitle; ?></p>
  </div>
  <div class="container">
    <div class="layoutimg">
      <?php if (have_rows("samudra_layout_images", "options")): ?>
      <?php while (have_rows("samudra_layout_images", "options")):
          the_row();
          $LayoutPlanImage1 = get_sub_field("layout_plan_image1");
          ?>
      <div class="layoutpageimg">
        <img data-src="<?php echo $LayoutPlanImage1; ?>" alt="" />
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php
    $SamudraGalleryTitle = get_field("samudra_gallery_title", "options");
    $SamudraGallerySubtitle = get_field("samudra_gallery_subtitle", "options");
    $ViewMoreLink2 = get_field('view_more_link2', 'option');
    ?>
<section class="projectgallery">
  <div class="container">
    <div class="projectgallerytitle">
      <h2><?php echo $SamudraGalleryTitle; ?></h2>
      <p><?php echo $SamudraGallerySubtitle; ?></p>
    </div>
    <div class="projectphotos">
      <?php if (have_rows("samudra_gallery", "options")): ?>
      <?php while (have_rows("samudra_gallery", "options")):
          the_row();
          $SamudraGalleryImage = get_sub_field("samudra_gallery_image");
          ?>
      <img data-src="<?php echo $SamudraGalleryImage; ?>" alt="" />
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php $SamudraBeachViewGalleryPage=get_field('samudra_beach_view_gallery_page','options'); ?>
    <div class="viewbtn">
      <?php if ($ViewMoreLink2): ?>
      <a href="<?php echo esc_url($ViewMoreLink2); ?>" target="_blank" class="discoverbtn">
        <button>View More</button>
      </a>
      <?php endif; ?>

      <a href="<?php echo esc_url($SamudraBeachViewGalleryPage); ?>" target="_blank" class="discoverbtn">
          <button>View More</button>
        </a>
    </div>
  </div>

  <?php
  $SamudraMap = get_field("samudra_map", "options");
  ?>
  <?php echo $SamudraMap; ?>
</section>

<?php get_footer(); ?>