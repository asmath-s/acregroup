<?php get_header(); ?>

<?php $AboutBreadcrampImage = get_field("about_breadcramp_image", "options");?>
<section class="topbreadcrumbs" style="background-image: url(<?php echo $AboutBreadcrampImage; ?>)">
  <div class="container">
    <div class="breadcrumbscontent">
      <h1>About Us</h1>
      <p><a href="#">Home</a> > About Us</p>
    </div>
  </div>
</section>

<?php 
    $AboutUsContentTitle = get_field("about_us_content_title", "options");
    $AboutUsContent = get_field("about_us_content", "options");
    $AboutUsImage = get_field("about_us_image", "options");
    ?>
<section class="aboutus">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" id="aboutpara">
        <div class="aboutuscontent">
          <h1><?php echo $AboutUsContentTitle; ?></h1>
          <p><?php echo $AboutUsContent; ?></p>
          <img data-src="<?php bloginfo('template_directory');?>/assets/images/tree1.png" alt="" />
        </div>
      </div>
      <div class="col-lg-6" id="aboutimage">
        <div class="aboutusimg">
          <img data-src="<?php echo $AboutUsImage; ?>" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
    $VisionImage = get_field("vision_image", "options");
    $VisionContent = get_field("vision_content", "options");
    $MissionContent = get_field("mission_content", "options");
    $MissionImage = get_field("mission_image", "options");
    ?>
<section class="visionmission">
  <div class="container">
    <div class="visionmissionbox">
      <div class="treebgimg">
        <img data-src="<?php bloginfo('template_directory');?>/assets/images/tree1.png" alt="" />
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6" id="missionpic">
          <div class="missionimg">
            <img data-src="<?php echo $MissionImage; ?>" alt="" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6" id="missioncontent">
          <div class="missionpara">
            <?php echo $MissionContent; ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="visionpara">
            <?php echo $VisionContent; ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="visionimg">
            <img data-src="<?php echo $VisionImage; ?>" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="aboutcounter">
  <!-- <img data-src="<?php bloginfo('template_directory');?>/assets/images/newtopstyleline.png" alt="" class="topimg" />
  <img data-src="<?php bloginfo('template_directory');?>/assets/images/newdownline.png" alt="" class="bottomimg" /> -->
  <div class="counterbg">
    <img data-src="<?php bloginfo('template_directory');?>/assets/images/aboutcounterbg.png" alt="" />
  </div>
  <div class="aboutcountertittle">
    <h4>Our Experience History</h4>
    <h1>Best Green Farm for Better Future</h1>
  </div>
  <div class="container">
    <div class="aboutcounterbox">
      <?php if (have_rows("about_counter", "options")): ?>
      <?php while (have_rows("about_counter", "options")):
              the_row();
              $AboutCounterImage = get_sub_field("about_counter_image");
              $AboutCounterNumber = get_sub_field("about_counter_number");
              $AboutCounterContent = get_sub_field("about_counter_content");
              ?>
      <div class="counterbox">
        <img data-src="<?php echo $AboutCounterImage; ?>" alt="" />
        <div class="countercontent">
          <h2><?php echo $AboutCounterNumber; ?></h2>
          <p><?php echo $AboutCounterContent; ?></p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php $FaqContactLink = get_field("faq_contact_link", "options");?>
<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="faqtitle">
          <h1>Frequently asked <br />questions</h1>
          <p>
            Welcome to our FAQ section! Here you'll find answers to the most common questions we receive.
          </p>
          <a href="<?php echo $FaqContactLink; ?>" class="aboutcontactbtn">
            <button>
              <span>Let's Contact </span><i class="fa-solid fa-arrow-right"></i>
            </button>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="accordion" id="accordionExample">

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                1.what are the security measures for the red sandal trees?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                We have done the frontage stone compound and fencing
                for our 200 acres of land in addition providing 24 / 7
				Security System (CCTV, Security Person, Dog Guards) including each tree GPS tracking systems.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2.What is the procedure to sell the grown red sandal trees?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                For selling these grown red sandal trees there are online
                services available from Tamilnadu forest website for getting
                Tree Felling / Tree Transit permits.  After the permits the product can
                be sold out Internationally and Domestically.  To export we have to get an extra permit from
                DGFT. These all can be handled by various third party agents
                to sell these trees or products.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3.What is the guarantee that the company will take over 10 years Maintenance ?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Acre Group has IEC (Import Export Code ) and MSME registration for manufacturing , exporting of wood and
                wood products, and the beneficary will be both the company and the investors from the grown trees in the
                farm lands. In order to achive the best grade of the trees, we serve the purpose to Maintenance the trees at
                it's best.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4.What is the Return of Investment ?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                The Investor can take return of investment (ROI) from both land and the trees. Investing in trees can be
                beneficial both financially and environmentally . The demand for wood products remains strong globally and potential
                inflation protection against zero capital risk and a minimum 15% profitable return from the capital.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>