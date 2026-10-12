<html lang="en">
  <head>
    <?php wp_head();?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acre Group</title>
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/assets/images/favicon.ico" />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/b0eb9bd990.js"
      crossorigin="anonymous"
    ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
 <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/sea-view.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/styles.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/home.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/about.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/contactus.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/projects.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/gallery.css" />
       

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
		integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
   	

  </head>

  <body>
    <?php
      $HeaderLogo = get_field("header_logo", "options");
	  $HeaderLogo1 = get_field("header_logo1", "options");
      $HeaderLogo2 = get_field("header_logo2", "options");
      $HomePage = get_field("home_page", "options");
      $AboutPage = get_field("about_page", "options");
      $ContactPage = get_field("contact_page", "options"); 
      $ContactUsCall1Link = get_field("contact_us_call1_link", "options");
      $ContactUsCall1 = get_field("contact_us_call1", "options");
    ?>
    <header class="header">
      <div class="container">
        <div class="headeritem">
          <div class="mainlogo">
            <a href="<?php echo $HomePage; ?>">
               <img class="logo1" data-src="<?php echo $HeaderLogo1; ?>" alt="acregroup logo" />
            </a>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbar-links"
            onclick="toggleNavbar()"
          >
            <i class="fa-solid fa-bars"></i>
          </button>
          <button class="closebtn" onclick="toggleNavbar()" id="navbar-close">
            <i class="fa-solid fa-circle-xmark"></i>
          </button>
          <ul class="mainmenu" id="navbar-links">
            <li><a href="<?php echo $HomePage; ?>">Home</a></li>
            <li><a href="<?php echo $AboutPage; ?>">About</a></li>
            <div class="dropmenu">
              <a class="dropdownbtn" type="button" aria-expanded="true">
                Projects <i class="fa-solid fa-chevron-down"></i>
              </a>
              <ul class="dropmenuitem">
                <?php if (have_rows("service_dropdown", "options")): ?>
                  <?php while (have_rows("service_dropdown", "options")):
                  the_row();
                  $ServicePageLink = get_sub_field("service_page_link");
                  $ServiceName = get_sub_field("service_name");
                  ?>
                    <li>
                      <a href="<?php echo $ServicePageLink; ?>" class="dropdown-item" type="button"><?php echo $ServiceName; ?></a>
                    </li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>
            </div>
            <li><a href="<?php echo $ContactPage; ?>">Contact Us</a></li>
            <li>
              <a href="<?php echo $ContactUsCall1Link; ?>" class="callbtn">
                <img data-src="<?php bloginfo('template_directory');?>/assets/images/callheader.gif" alt="" class="callimg" />
               <img data-src="<?php bloginfo('template_directory');?>/assets/images/callheader1.gif" alt="" class="callimg1" /><span>Call</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div class="overlay"></div>
