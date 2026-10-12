    <?php get_header(); ?>
    <section class="mainbanner">
      <div class="banner-carousel owl-carousel owl-theme">

        <?php if (have_rows("banner_slider", "options")): ?>
        <?php while (have_rows("banner_slider", "options")):

            the_row();
            $BannerImage = get_sub_field("banner_image");
            $BannerTittle = get_sub_field("banner_tittle");
            $BannerPara = get_sub_field("banner_para");
            $DiscoverMoreLink = get_sub_field("discover_more_link");
            ?>
        <div class="bannerslider">
          <div class="bigbanner" style="background-image: url( <?php echo $BannerImage; ?>)"></div>
          <div class="container">
            <div class="bannercontent">
              <h2><?php echo $BannerTittle; ?></h2>
              <p>
                <?php echo $BannerPara; ?>
              </p>
              <a href="<?php echo $DiscoverMoreLink; ?>" class="discoverbtn">
                <button>Discover More</button>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

    <?php
    $WelcomeImage = get_field("welcome_image", "options");
    $WelcomeTopTittle = get_field("welcome_top_tittle", "options");
    $WelcomeTitle = get_field("welcome_title", "options");
    $WelcomePara = get_field("welcome_para", "options");
    ?>

    <section class="homeabout">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="homeaboutimg">
              <img data-src="<?php echo $WelcomeImage; ?>" alt="Acre Group" data-aos="fade-up" data-aos-duration="2000" />
            </div>
          </div>
          <div class="col-lg-8">
            <div class="homeaboutcontent">
              <h4 data-aos="fade-up" data-aos-duration="2000"><?php echo $WelcomeTitle; ?></h4>
              <div class="hometitleline" data-aos="fade-up" data-aos-duration="2000">
                <img data-src="<?php bloginfo('template_directory');?>/assets/images/Rectangle5385.png" alt=""
                  style="border-radius:15px" />
                <h2><?php echo $WelcomeTopTittle; ?></h2>
              </div>

              <p data-aos="fade-up" data-aos-duration="2000">
                <?php echo $WelcomePara; ?>
              </p>
              <div class="homecounter" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="200">

                <?php if (have_rows("home_counter", "options")): ?>
                <?php while (have_rows("home_counter", "options")):
                  the_row();
                  $HomeCounterImage = get_sub_field("home_counter_image");
                  $HomeCounterNumber = get_sub_field("home_counter_number");
                  $HomeCounterContent = get_sub_field("home_counter_content");
                  ?>
                <div class="counteritem">
                  <div class="countimg">
                    <img data-src="<?php echo $HomeCounterImage; ?>" alt="Acre Group" />
                  </div>
                  <div class="counttext">
                    <h3><?php echo $HomeCounterNumber; ?></h3>
                    <p><?php echo $HomeCounterContent; ?></p>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <?php
      $RedSandalBackgroundImage = get_field("red_sandal_background_image", "options");
      $RedSandalMaintenance1Image = get_field("red_sandal_maintenance1_image", "options");
      $RedSandalMaintenance2Image = get_field("red_sandal_maintenance2_image", "options");
      $RedSandalMaintenance3Image = get_field("red_sandal_maintenance3_image", "options");
      $RedSandalAboutContent = get_field("red_sandal_about_content", "options");
      $RedSandalBrochureLink = get_field("red_sandal_brochure_link", "options");
      $RedSandalViewmoreLink = get_field("red_sandal_viewmore_link", "options");
     ?>

    <section class="newredsandalfarm" style="background-image: url(<?php echo $RedSandalBackgroundImage; ?>)">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="newredsandalimg">
              <div class="newredsandalimg2">
                <img data-src="<?php echo $RedSandalMaintenance1Image; ?>" alt="Acre Group"
                  data-aos="fade-up" data-aos-duration="2000" />
                <span data-aos="fade-up" data-aos-duration="2000">Maintenance 1</span>
                <img data-src="<?php echo $RedSandalMaintenance2Image; ?>" alt="Acre Group"
                  data-aos="fade-up" data-aos-duration="2000" />
                <span data-aos="fade-up" data-aos-duration="2000">Maintenance 2</span>
              </div>
              <div class="newredsandalimg3">
                <img data-src="<?php echo $RedSandalMaintenance3Image; ?>" alt="Acre Group"
                  data-aos="fade-up" data-aos-duration="2000" />
                <span data-aos="fade-up" data-aos-duration="2000">Maintenance 3</span>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="newredsandalcontent" data-aos="fade-up" data-aos-duration="2000">
              <?php echo $RedSandalAboutContent; ?>
              <div class="homeviewbtn">
                <a href="<?php echo $RedSandalBrochureLink; ?>" target="_blank" class="viewbrocherbtn1">
                  <button>View Brochure</button>
                </a>
                <a href="<?php echo $RedSandalViewmoreLink; ?>" class="viewmorebtn1">
                  <button>View More</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <?php
        $KodaiCouldContent = get_field("kodai_could_content", "options");
        $KodaiCouldBrochureLink = get_field("kodai_could_brochure_link", "options");
        $KodaiCouldViewmoreLink = get_field("kodai_could_viewmore_link", "options");
        $KodaiCouldBigImage = get_field("kodai_could_big_image", "options");
        $KodaiCouldImage1 = get_field("kodai_could_image1", "options");
        $KodaiCouldImage2 = get_field("kodai_could_image2", "options");
        $KodaiCouldImage3 = get_field("kodai_could_image3", "options");
     ?>
    <section class="newkodaiclub">
      <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="newkodaiclubcontent" data-aos="fade-up" data-aos-duration="2500">
                <?php echo $KodaiCouldContent; ?>
                <div class="homeviewbtn">
                  <a href="<?php echo $KodaiCouldBrochureLink; ?>" class="viewbrocherbtn2" target="_blank">
                      <button>View Brochure</button>
                    </a>
                    <a href="<?php echo $KodaiCouldViewmoreLink; ?>" class="viewmorebtn2">
                      <button class="viewmorebtn3">View More</button>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="newkodaiclubimg1" data-aos="fade-up" data-aos-duration="2000">
                <img data-src="<?php echo $KodaiCouldBigImage; ?>" alt="Acre Group" />
              </div>
            </div>
          </div>

          <div class="newkodaiclubimgbox" data-aos="fade-up" data-aos-duration="2500">
            <div class="newkodaiclubimg2">
              <img data-src="<?php echo $KodaiCouldImage1; ?>" alt="Acre Group" />
            </div>
            <div class="newkodaiclubimg3">
              <img data-src="<?php echo $KodaiCouldImage2; ?>" alt="Acre Group" />
            </div>
            <div class="newkodaiclubimg4">
              <img data-src="<?php echo $KodaiCouldImage3; ?>" alt="Acre Group" />
            </div>
          </div>
      </div>
    </section>

    
    <?php
        $SamudraBackgroundImage = get_field("samudra__background_image", "options");
        $SamudraContent = get_field("samudra_content", "options");
        $SamudraBrochureLink = get_field("samudra_brochure_link", "options");
        $SamudraViewmoreLink = get_field("samudra_viewmore_link", "options");
        $SamudraImage = get_field("samudra_image", "options");
     ?>
    <section class="redsandlefarm" style="background-image: url(<?php echo $SamudraBackgroundImage; ?>)">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="redsnadleimg" data-aos="fade-up" data-aos-duration="2000">
              <img data-src="<?php echo $SamudraImage; ?>" alt="Acre Group" />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="redsandalcontent" data-aos="fade-up" data-aos-duration="2000">
              <?php echo $SamudraContent; ?>
              <div class="homeviewbtn">
                <a href="<?php echo $SamudraBrochureLink; ?>" target="_blank" class="viewbrocherbtn1">
                  <button>View Brochure</button>
                </a>
                <a href="<?php echo $SamudraViewmoreLink; ?>" class="viewmorebtn1">
                  <button>View More</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <?php
        $AgroClubContent = get_field("agro_club_content", "options");
        $AgroClubBrochureLink = get_field("agro_club_brochure_link", "options");
        $AgroClubViewmoreLink = get_field("agro_club_viewmore_link", "options");
        $AgroClubImage = get_field("agro_club_image", "options");
     ?>
    <section class="newkodaiclub">
      <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="newkodaiclubcontent" data-aos="fade-up" data-aos-duration="2000">
            <?php echo $AgroClubContent; ?>
            <div class="homeviewbtn">
              <a href="<?php echo $AgroClubBrochureLink; ?>" class="viewbrocherbtn2" target="_blank">
                <button>View Brochure</button>
              </a>
              <a href="<?php echo $AgroClubViewmoreLink; ?>" class="viewmorebtn2">
                <button class="viewmorebtn3">View More</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="newagroimg" data-aos="fade-up" data-aos-duration="2000">
            <img data-src="<?php echo $AgroClubImage; ?>" alt="Acre Group" />
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="newtestimonial">
      <img data-src="<?php bloginfo('template_directory');?>/assets/images/Maskgroup.png" alt="Acre Group"
        class="maskimage" />
      <div class="container">
        <div class="newtestimonialcontainer">
          <div class="row">
            <div class="col-lg-6">
              <div class="newtestimonialheading" data-aos="fade-up" data-aos-duration="2000">
                <h5>Testimonial</h5>
                <h2>See What People say <br> About US</h2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="newtestimonialslide">
                <div class="newtestimonial-carousel owl-carousel owl-theme">

                  <?php if (have_rows("testimonial", "options")): ?>
                  <?php while (have_rows("testimonial", "options")):
                    the_row();
                    $TestimonialContent = get_sub_field("testimonial_content");
                    $CostumerName = get_sub_field("costumer_name");
                    $CostumerDesignation = get_sub_field("costumer_designation");
                  ?>

                  <div class="newtestimonialbox" data-aos="fade-up" data-aos-duration="2000">
                    <div class="newtestimonialname">
                      <h5><?php echo $CostumerName; ?></h5>
                      <span><?php echo $CostumerDesignation; ?></span>
                    </div>
                    <div class="newtestimonialcontent">
                      <p><?php echo $TestimonialContent; ?></p>
                    </div>
                  </div>

                  <?php endwhile; ?>
                  <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <section class="videosec">
      <div class="container">
        <div class="videotitle">
          <h4>Our <span>Videos</span></h4>
          <h2>Catch up with our ongoing projects!</h2>
        </div>
        <div class="video-carousel owl-carousel owl-theme">

          <?php if (have_rows("home_videos", "options")): ?>
          <?php while (have_rows("home_videos", "options")):

            the_row();
            $ProjectVideo = get_sub_field("project_video");
            ?>
          <div class="videocontent">
            <video controls>
              <source src="<?php echo $ProjectVideo; ?>" type="video/mp4" />
            </video>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php $EnquiryBackgroundImage = get_field("enquiry_background_image", "options");
           $EnquiryPageLink = get_field("enquiry_page_link", "options");
     ?>
    <section class="enquirynow" data-aos="fade-up" data-aos-duration="2000">
      <div class="container">
        <div class="enquirynowimg" style="background-image: url(<?php echo $EnquiryBackgroundImage; ?>)">
          <h1>Enquiry <br />Now</h1>
          <a href="<?php echo $EnquiryPageLink; ?>">
            <img data-src="<?php bloginfo('template_directory');?>/assets/images/CircledDownLeft.png" alt="Acre Group" />
          </a>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>