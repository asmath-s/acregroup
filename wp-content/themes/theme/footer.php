  <footer>
    <div class="container">
      <div class="row">
        <?php
            $HeaderLogo = get_field("header_logo", "options");
            $HomePage = get_field("home_page", "options");
            $AboutPage = get_field("about_page", "options");
            $ContactPage = get_field("contact_page", "options"); 
          ?>
        <div class="col-lg-3 col-md-6">
          <div class="logoside">
            <a href="<?php echo $HomePage; ?>">
              <img data-src="<?php echo $HeaderLogo; ?>" alt="logo" />
            </a>
            <p>
              Acre Group, the leading green farm company in Tamilnadu since 2010, Acre Group sets the gold benchmark in
              the
              industry.
            </p>
            <div class="sociallinks">
              <p>Follow us:</p>
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
        <div class="col-lg-3 col-md-6">
          <div class="quicklinks">
            <h4>Quick Links</h4>
            <ul class="quick">
              <li><a href="<?php echo $HomePage; ?>">Home</a></li>
              <li><a href="<?php echo $AboutPage; ?>">About</a></li>
              <li><a href="<?php echo $ContactPage; ?>">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="servicelinks">
            <h4>Services</h4>
            <ul class="service">
              <?php if (have_rows("service_dropdown", "options")): ?>
              <?php while (have_rows("service_dropdown", "options")):
                  the_row();
                  $ServicePageLink = get_sub_field("service_page_link");
                  $ServiceName = get_sub_field("service_name");
                  ?>
              <li><a href="<?php echo $ServicePageLink; ?>"><?php echo $ServiceName; ?></a></li>
              <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="contactlinks">
            <h4>Contact</h4>
            <ul class="contactpoint">
              <?php if (have_rows("footer_contact", "options")): ?>
              <?php while (have_rows("footer_contact", "options")):
                    the_row();
                    $FooterContactLinks = get_sub_field("footer_contact_links");
                    $FooterHoverImage = get_sub_field("footer_hover_image");
                    $FooterContactIcon = get_sub_field("footer_contact_icon");
                    $FooterContactContent = get_sub_field("footer_contact_content");
                    ?>
              <li>
                <a href="<?php echo $FooterContactLinks; ?>" target="_blank">
                  <img data-src="<?php echo $FooterHoverImage; ?>" alt="" class="hoverimgfooter" />
                  <?php echo $FooterContactIcon; ?>
                  <span><?php echo $FooterContactContent; ?></span>
                </a>
              </li>
              <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
        <a href="https://designlyworld.com/" target="_blank"><span>Copyrights</span> &copy; &nbsp;<span
            id="currentYear"></span> <span>Designlyworld</span></a>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
      once: true,
      anchorPlacement: 'top-bottom',
      duration: 2000 // Adjusted to match your specified duration
    });
  </script>

  <script>
    $(document).ready(function () {
      $(".filter-button").click(function () {
        var value = $(this).attr("data-filter");

        if (value == "all") {
          $(".filter").fadeIn("1000");
        } else {
          $(".filter").fadeOut("3000");
          $(".filter." + value).fadeIn("3000");
        }

        // Toggle active class for filter buttons
        $(".filter-button").removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>
  <script>
    // JavaScript code to get the current year
    var currentYear = new Date().getFullYear();

    // Display the current year in the HTML element with id "currentYear"
    document.getElementById("currentYear").innerText = "" + currentYear;
  </script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/coustom.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/sea-view.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/lazyload.js"></script>
  </body>
  <?php wp_footer();?>

  </html>