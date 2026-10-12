<?php get_header(); ?>

<?php
$ContactUsBreadcrampImage = get_field("contact_us_breadcramp_image", "options");
$ContactUsLocation = get_field("contact_us_location", "options");
$ContactUsLocationLink = get_field("contact_us_location_link", "options");
$ContactUsMail = get_field("contact_us_mail", "options");
$ContactUsMailLink = get_field("contact_us_mail_link", "options");
$ContactUsCall1Link = get_field("contact_us_call1_link", "options");
$ContactUsCall1 = get_field("contact_us_call1", "options");
$ContactUsCall2Link = get_field("contact_us_call2_link", "options");
$ContactUsCall2 = get_field("contact_us_call2", "options");
$ContactUsCall3Link = get_field("contact_us_call3", "options");
$ContactUsCall3 = get_field("contact_us_call3", "options");
?>
<section
      class="topbreadcrumbs"
      style="background-image: url(<?php echo $ContactUsBreadcrampImage; ?>)"
    >
      <div class="container">
        <div class="breadcrumbscontent">
          <h1>Contact Us</h1>
          <p><a href="#">Home</a> > Contact Us</p>
        </div>
      </div>
    </section>

    <section class="contactus">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <?php echo do_shortcode('[contact-form-7 id="88ea39e" title="Contact form 1"]'); ?>
          </div>

          <div class="col-lg-5">
            <div class="getintouch">
              <h2>Get In Touch!</h2>
              <p>
                Feel free to ask any questions or request information; I'm here
                to assist you.
              </p>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-6">
                <div class="contactbox">
                  <a href="<?php echo $ContactUsLocationLink; ?>" target="_blank">
                    <div class="contacticon">
                      <img data-src="<?php bloginfo('template_directory');?>/assets/images/location1.gif" alt="" />
                    </div>
                    <div class="contactinfo">
                      <h4>Location</h4>
                      <a href="<?php echo $ContactUsLocationLink; ?>" target="_blank">
                        <p>
                          <?php echo $ContactUsLocation; ?>
                        </p>
                      </a>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-6">
                <div class="contactbox">
                  <a href="<?php echo $ContactUsMailLink; ?>" target="_blank">
                    <div class="contacticon1">
                      <img data-src="<?php bloginfo('template_directory');?>/assets/images/mail.gif" alt="" />
                    </div>
                    <div class="contactinfo">
                      <h4>Mail</h4>
                      <a href="<?php echo $ContactUsMailLink; ?>" target="_blank"><p><?php echo $ContactUsMail; ?></p></a>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-12">
                <div class="contactbox">
                  <div class="contacticon2">
                    <img data-src="<?php bloginfo('template_directory');?>/assets/images/callheader.gif" alt="" />
                  </div>
                  <div class="contactinfo">
                    <h4>Call</h4>
                    <a href="<?php echo $ContactUsCall1Link; ?>" target="_blank"><p><?php echo $ContactUsCall1; ?></p></a>
                    <a href="<?php echo $ContactUsCall2Link; ?>" target="_blank"><p><?php echo $ContactUsCall2; ?></p></a>
					  <a href="<?php echo $ContactUsCall3Link; ?>" target="_blank"><p><?php echo $ContactUsCall3; ?></p></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="contactsocial">
              <h4>Follow Us</h4>
              <?php if (have_rows("social_media", "options")): ?>
                <?php while (have_rows("social_media", "options")):
                the_row();
                $SocialMediaLinks = get_sub_field("social_media_links");
                $SocialMediaIcons = get_sub_field("social_media_icons");
                ?>
                  <a href="<?php echo $SocialMediaLinks; ?>"><?php echo $SocialMediaIcons; ?></a>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="projectlocation">
      <div class="container">
        <div class="projectlocationtitle">
          <h2>Location</h2>
          <p>Our Onging Projects Location</p>
        </div>
        <div class="row">

          <?php if (have_rows("other_project_locations", "options")): ?>
            <?php while (have_rows("other_project_locations", "options")):
            the_row();
            $OtherProjectImage = get_sub_field("other_project_image");
            $OtherProjectName = get_sub_field("other_project_name");
            $OtherProjectLocationLink = get_sub_field("other_project_location_link");
            ?>
              <div class="col-lg-6 col-md-6">
                <div class="otherprojects">
                  <div class="otherprojectimg">
                    <img data-src="<?php echo $OtherProjectImage; ?>" alt="" />
                  </div>
                  <div class="otherprojectcontent">
                    <h3><?php echo $OtherProjectName; ?></h3>
                    <a
                      href="<?php echo $OtherProjectLocationLink; ?>"
                      target="_blank"
                      ><span>Get Direction</span
                      ><i class="fa-solid fa-chevron-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15796.70295254866!2d77.42698!3d8.185045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f126ff37cadf%3A0x325c1bfe58df70a6!2sAcre%20Group!5e0!3m2!1sen!2sin!4v1714973559241!5m2!1sen!2sin"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>

    <?php get_footer(); ?>