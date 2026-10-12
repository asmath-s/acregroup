<?php get_header(); ?>

<div class="sea-view-page">

<!-- ======================================================================
   1. HERO SECTION
   ====================================================================== -->

<?php
$hero_image        = get_field('sea_hero_image', 'option');
$hero_eyebrow      = get_field('sea_hero_eyebrow', 'option');
$hero_title        = get_field('sea_hero_title', 'option');
$hero_location     = get_field('sea_hero_location', 'option');
$hero_description  = get_field('sea_hero_description', 'option');
$hero_script       = get_field('sea_hero_script', 'option');
$hero_palm_image   = get_field('sea_hero_palm_image', 'option');
?>

<section class="hero-section" id="hero">
  <div class="hero-wrapper">

    <!-- Left: Image with Diagonal Slanted Cut & Cursive Script -->
    <div class="hero-left">

      <?php if ($hero_image): ?>
        <img
          src="<?php echo esc_url($hero_image); ?>"
          alt="<?php echo esc_attr($hero_title); ?>"
          class="hero-bg-img"
        />
      <?php endif; ?>

      <?php if ($hero_script): ?>
        <div class="hero-script-tag">
          <?php echo nl2br(esc_html($hero_script)); ?>
        </div>
      <?php endif; ?>

    </div>

    <!-- Right: Content & Palm Leaves Background -->
    <div class="hero-right">

      <?php if ($hero_palm_image): ?>
        <img
          src="<?php echo esc_url($hero_palm_image); ?>"
          alt="Tropical Palm Branch"
          class="hero-palm-leaf"
        />
      <?php endif; ?>

      <div class="hero-content">

        <?php if ($hero_eyebrow): ?>
          <h5 class="hero-eyebrow">
            <?php echo esc_html($hero_eyebrow); ?>
          </h5>
        <?php endif; ?>

        <?php if ($hero_title): ?>
          <h1 class="hero-title">
            <?php echo nl2br(esc_html($hero_title)); ?>
          </h1>
        <?php endif; ?>

        <?php if ($hero_location): ?>
          <div class="hero-location">
            <?php echo nl2br(esc_html($hero_location)); ?>
          </div>
        <?php endif; ?>

        <?php if ($hero_description): ?>
          <p class="hero-desc">
            <?php echo esc_html($hero_description); ?>
          </p>
        <?php endif; ?>


        <!-- Hero Features -->
        <?php if (have_rows('sea_hero_features', 'option')): ?>

          <div class="hero-features">

            <?php while (have_rows('sea_hero_features', 'option')): the_row(); ?>

              <?php
              $feature_icon = get_sub_field('icon');
              $feature_text = get_sub_field('text');
              ?>

              <div class="feature-badge">

                <?php if ($feature_icon): ?>
                  <div class="feature-badge-icon">
                    <img
                      src="<?php echo esc_url($feature_icon); ?>"
                      alt="<?php echo esc_attr($feature_text); ?>"
                    />
                  </div>
                <?php endif; ?>

                <?php if ($feature_text): ?>
                  <span>
                    <?php echo nl2br(esc_html($feature_text)); ?>
                  </span>
                <?php endif; ?>

              </div>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>


<!-- ======================================================================
   2. ABOUT SECTION
   ====================================================================== -->

<?php
$about_title       = get_field('sea_about_title', 'option');
$about_description = get_field('sea_about_description', 'option');
$about_focus_title = get_field('sea_about_focus_title', 'option');
?>

<section class="about-section" id="about">

  <div class="container about-grid">

    <div class="about-text-col">

      <?php if ($about_title): ?>
        <h2 class="about-title">
          <?php echo nl2br(esc_html($about_title)); ?>
        </h2>
      <?php endif; ?>


      <?php if ($about_description): ?>
        <div class="about-desc">
          <?php echo wp_kses_post($about_description); ?>
        </div>
      <?php endif; ?>


      <?php if ($about_focus_title): ?>
        <h4 class="about-focus-title">
          <?php echo esc_html($about_focus_title); ?>
        </h4>
      <?php endif; ?>


      <!-- About Bullet Points -->
      <?php if (have_rows('sea_about_bullets', 'option')): ?>

        <div class="about-bullets-grid">

          <?php while (have_rows('sea_about_bullets', 'option')): the_row(); ?>

            <?php $bullet_text = get_sub_field('text'); ?>

            <?php if ($bullet_text): ?>

              <div class="bullet-item">

                <span class="bullet-asterisk">*</span>

                <span>
                  <?php echo esc_html($bullet_text); ?>
                </span>

              </div>

            <?php endif; ?>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

    </div>


    <!-- Right: About Images -->
    <?php if (have_rows('sea_about_images', 'option')): ?>

      <div class="about-images-col">

        <?php
        $image_index = 0;
        ?>

        <?php while (have_rows('sea_about_images', 'option')): the_row(); ?>

          <?php
          $about_image = get_sub_field('image');

          $image_index++;

          $image_class = ($image_index === 1) ? 'img-1' : 'img-2';
          ?>

          <?php if ($about_image): ?>

            <div class="about-img-wrap <?php echo esc_attr($image_class); ?>">

              <img
                src="<?php echo esc_url($about_image); ?>"
                alt="<?php echo esc_attr($about_title); ?>"
              />

            </div>

          <?php endif; ?>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>

</section>


<!-- ======================================================================
   3. PROJECT STORIES SECTION
   ====================================================================== -->

<?php
$stories_title = get_field('sea_stories_title', 'option');
?>

<section class="stories-section" id="stories">

  <div class="container">

    <?php if ($stories_title): ?>
      <h2 class="section-heading">
        <?php echo esc_html($stories_title); ?>
      </h2>
    <?php endif; ?>


    <?php if (have_rows('sea_project_stories', 'option')): ?>

      <div class="stories-grid">

        <?php while (have_rows('sea_project_stories', 'option')): the_row(); ?>

          <?php
          $story_image       = get_sub_field('image');
          $story_title       = get_sub_field('title');
          $story_description = get_sub_field('description');
          ?>

          <div class="story-card">

            <?php if ($story_image): ?>

              <div class="story-img-wrap">

                <img
                  src="<?php echo esc_url($story_image); ?>"
                  alt="<?php echo esc_attr($story_title); ?>"
                />

              </div>

            <?php endif; ?>


            <div class="story-content">

              <?php if ($story_title): ?>
                <h3>
                  <?php echo nl2br(esc_html($story_title)); ?>
                </h3>
              <?php endif; ?>


              <?php if ($story_description): ?>
                <p>
                  <?php echo nl2br(esc_html($story_description)); ?>
                </p>
              <?php endif; ?>

            </div>

          </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>

</section>


<!-- ======================================================================
   4. WHY CHOOSE SEA VIEW VILLA
   ====================================================================== -->

<?php
$why_title = get_field('sea_why_title', 'option');
?>

<section class="why-choose-section" id="why-choose">

  <div class="container">

    <?php if ($why_title): ?>
      <h2 class="section-heading">
        <?php echo esc_html($why_title); ?>
      </h2>
    <?php endif; ?>


    <?php if (have_rows('sea_why_choose', 'option')): ?>

      <div class="why-choose-grid">

        <?php while (have_rows('sea_why_choose', 'option')): the_row(); ?>

          <?php
          $why_image = get_sub_field('image');
          $why_title = get_sub_field('title');
          ?>

          <div class="why-card">

            <?php if ($why_image): ?>

              <img
                src="<?php echo esc_url($why_image); ?>"
                alt="<?php echo esc_attr($why_title); ?>"
              />

            <?php endif; ?>


            <div class="why-card-overlay">

              <?php if ($why_title): ?>

                <h3>
                  <?php echo nl2br(esc_html($why_title)); ?>
                </h3>

              <?php endif; ?>

            </div>

          </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>

</section>


<!-- ======================================================================
   5. VIDEO SECTION
   ====================================================================== -->

<?php
$video_title = get_field('sea_video_title', 'option');
?>

<section class="video-section" id="video">

  <div class="container">

    <?php if ($video_title): ?>
      <h2 class="section-heading">
        <?php echo esc_html($video_title); ?>
      </h2>
    <?php endif; ?>


    <?php
    /*
     * Build video array for the JavaScript carousel.
     */
    $sea_videos = [];

    if (have_rows('sea_videos', 'option')):

      while (have_rows('sea_videos', 'option')): the_row();

        $video = get_sub_field('video');

        if ($video) {
          $sea_videos[] = $video;
        }

      endwhile;

    endif;
    ?>


    <?php if (!empty($sea_videos)): ?>

      <div class="video-carousel-wrapper">

        <!-- Left Arrow -->
        <button
          class="video-nav-btn prev-btn"
          id="prevVideo"
          aria-label="Previous Video"
        >
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/left-circle-arrow.svg"
            alt="Previous Video Arrow"
          />
        </button>


        <!-- Video Player -->
        <div class="video-player-container">

          <video
            id="mainVideo"
            class="main-video"
            playsinline
            controls
            preload="metadata"
          >

            <source
              src="<?php echo esc_url($sea_videos[0]); ?>"
              type="video/mp4"
            />

            Your browser does not support HTML5 video.

          </video>


          <!-- Play Overlay -->
          <div
            class="video-play-overlay"
            id="playOverlay"
          >

            <button
              class="play-pulse-btn"
              aria-label="Play Video"
            >

              <svg
                width="32"
                height="32"
                viewBox="0 0 24 24"
              >

                <polygon
                  points="5 3 19 12 5 21 5 3"
                ></polygon>

              </svg>

            </button>

          </div>

        </div>


        <!-- Right Arrow -->
        <button
          class="video-nav-btn next-btn"
          id="nextVideo"
          aria-label="Next Video"
        >

          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/right-circle-arrow.svg"
            alt="Next Video Arrow"
          />

        </button>

      </div>


      <!-- Video Indicators -->
      <div
        class="video-indicators"
        id="videoDots"
      >

        <?php foreach ($sea_videos as $index => $video_url): ?>

          <span
            class="video-dot <?php echo ($index === 0) ? 'active' : ''; ?>"
            data-index="<?php echo esc_attr($index); ?>"
            title="Video <?php echo esc_attr($index + 1); ?>"
          ></span>

        <?php endforeach; ?>

      </div>


      <!-- Pass videos to JavaScript -->
      <script>
        window.seaViewVideos = <?php echo wp_json_encode($sea_videos); ?>;
      </script>

    <?php endif; ?>

  </div>

</section>


<!-- ======================================================================
   6. CTA / VISIT SECTION
   ====================================================================== -->

<?php
$cta_image       = get_field('sea_cta_image', 'option');
$cta_script      = get_field('sea_cta_script', 'option');
$cta_title       = get_field('sea_cta_title', 'option');
$cta_description = get_field('sea_cta_description', 'option');
$cta_link        = get_field('sea_cta_link', 'option');
$cta_button      = get_field('sea_cta_button', 'option');
?>

<section class="cta-banner-section" id="visit">

  <div class="cta-container">

    <!-- Left: Image -->
    <div class="cta-left-wrap">

      <?php if ($cta_image): ?>

        <img
          src="<?php echo esc_url($cta_image); ?>"
          alt="<?php echo esc_attr($cta_title); ?>"
          class="cta-bg-img"
        />

      <?php endif; ?>


      <div class="cta-fade-overlay"></div>


      <?php if ($cta_script): ?>

        <div class="cta-script-tag">
          <?php echo nl2br(esc_html($cta_script)); ?>
        </div>

      <?php endif; ?>

    </div>


    <!-- Right: Content -->
    <div class="cta-right-content">

      <?php if ($cta_title): ?>

        <h2 class="cta-title">
          <?php echo esc_html($cta_title); ?>
        </h2>

      <?php endif; ?>


      <?php if ($cta_description): ?>

        <div class="cta-desc">
          <?php echo wp_kses_post($cta_description); ?>
        </div>

      <?php endif; ?>


      <?php if ($cta_link && $cta_button): ?>

        <a
          href="<?php echo esc_url($cta_link); ?>"
          class="cta-schedule-btn"
        >

          <span>
            <?php echo esc_html($cta_button); ?>
          </span>

          <svg
            width="22"
            height="22"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          >

            <line
              x1="5"
              y1="12"
              x2="19"
              y2="12"
            ></line>

            <polyline
              points="12 5 19 12 12 19"
            ></polyline>

          </svg>

        </a>

      <?php endif; ?>

    </div>

  </div>

</section>
</div><!-- /.sea-view-page -->
<?php get_footer(); ?>