<!DOCTYPE html>
<html>
  <head>
    <title>Kodai Nature Stay</title>
    <meta name="author" content="asmath" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#e8f1ff" />
    <link href="<?php bloginfo('template_directory');?>/pdf/favicon.ico" rel="icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script
      src="https://kit.fontawesome.com/b0eb9bd990.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/flipbook.style.css" />

    <script src="<?php bloginfo('template_directory');?>/js/flipbook.min.js"></script>

    <?php
    $KodaiBrochure = get_field("kodai_brochure", "options"); 
    $brochure_url = isset($KodaiBrochure['url']) ? $KodaiBrochure['url'] : ''; 
    ?>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#container").flipBook({
          pdfUrl: "<?php echo esc_url($brochure_url); ?>",
        });
      });
    </script>
  </head>

  <body>
 	<i class="fa-solid fa-angle-right"></i>
    <div id="container"></div>
  </body>
</html>
