<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

<main class="page__main main main--main-page">
  <h1 class="visually-hidden">
    <?the_title();?>
  </h1>
  <section class="main__promo-slider promo-slider">
  <div class="container">
    <div class="promo-slider__inner">
      <h2 class="visually-hidden">
        Promo Posts. Check info about best betting sites highest odds in Nigeria
      </h2>

      <div class="promo-slider__promo-image promo-image">
      <!--Промо изображение состоит из множества элементов - для гибкого адаптива страницы-->

        <picture>
          <source
            media="(min-width: 1200px)"
            srcset="<?=get_template_directory_uri();?>/img/promo-slider/promo-part-1-desktop@1x.png 1x, <?=get_template_directory_uri();?>/img/promo-slider/promo-part-1-desktop@1x.png 2x">
          <img
            class="promo-image__part-1"
            src="<?=get_template_directory_uri();?>/img/promo-slider/promo-part-1-mobile@1x.png"
            srcset="<?=get_template_directory_uri();?>/img/promo-slider/promo-part-1-mobile@2x.png 2x"
            width="320"
            height="320"
            alt="Promo Image"
          >
        </picture>

        <picture>
          <img
            class="promo-image__part-2"
            src="<?=get_template_directory_uri();?>/img/promo-slider/promo-part-2-mobile@1x.png"
            srcset="<?=get_template_directory_uri();?>/img/promo-slider/promo-part-2-mobile@2x.png 2x"
            width="320"
            height="320"
            alt="Promo Image"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-1 promo-image__decor-1--cell-1"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-1--dark-theme.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-1 promo-image__decor-1--cell-2"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-1--dark-theme.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-1 promo-image__decor-1--cell-3"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-1--dark-theme.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-1 promo-image__decor-1--cell-3"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-1--dark-theme.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-2 promo-image__decor-2--cell-1"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-2--accent.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-2 promo-image__decor-2--cell-2"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-2--default.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

        <picture>
          <img
            class="promo-image__decor-2 promo-image__decor-2--cell-3"
            src="<?=get_template_directory_uri();?>/img/decor/decor-el-2--default.svg"
            width="125"
            height="97"
            alt="Promo Image Decor El"
          >
        </picture>

      </div>
      <!-- /.promo-slider__promo-image -->

      <div class="promo-slider__button promo-slider__button--prev">
        <svg width="60px" height="54px">
          <use xlink:href="#arrow-left-icon"></use>
        </svg>
      </div>
      <div class="promo-slider__button promo-slider__button--next">
        <svg width="60px" height="54px">
          <use xlink:href="#arrow-left-icon"></use>
        </svg>
      </div>

      <div class="swiper">
        <div class="swiper-wrapper">

          <div class="promo-slider__slide swiper-slide">
            <article class="promo-slider__card">
              <h3 class="promo-slider__title page__title">
                <span class="page__title--accent">Best betting sites</span> with highest odds in Nigeria
              </h3>
              <a class="promo-slider__link primary-button" href="#">
                read more
              </a>
            </article>
          </div>

          <div class="swiper-slide promo-slider__slide">
            <article class="promo-slider__card">
              <h3 class="promo-slider__title page__title">
                Introduce <span class="page__title--accent">best betting site</span> with highest odds in Nigeria
              </h3>
              <a class="promo-slider__link primary-button" href="#">
                read more
              </a>
            </article>
          </div>

          <div class="swiper-slide promo-slider__slide">
            <article class="promo-slider__card">
              <h3 class="promo-slider__title page__title">
                <span class="page__title--accent">Best betting sites</span> with highest odds in Nigeria
              </h3>
              <a class="promo-slider__link primary-button" href="#">
                read more
              </a>
            </article>
          </div>

        </div>

        <div class="promo-slider__pagination"></div>
      </div>
      <!-- /.swiper -->

    </div>
    <!-- /.container -->
    </div>
    <!-- /.promo-slider__inner -->
</section>
<!-- /.promo-slider -->
<section class="main__posts-feed posts-feed">
  <h2 class="visually-hidden">
    Feed with posts about best betting sites with highest odds in Nigeria
  </h2>
  <div class="container">
    <ul class="posts-feed__list">
      <li class="posts_feed__item">
        <article class="posts-feed__post-card post-card">
          <h2 class="post-card__title">
            Best betting sites with highest odds in Nigeria
          </h2>
          <p class="post-card__text">
            If&nbsp;you&rsquo;re looking for a&nbsp;great place to&nbsp;bet on&nbsp;sports, the internet is&nbsp;the
            best place to&nbsp;start. There are
            countless websites out there that offer betting services, and they all come with their own unique set of
            odds and features.
          </p>
          <p class="post-card__text">
            So&nbsp;no&nbsp;matter what type of&nbsp;betting you&rsquo;re interested&nbsp;in, or&nbsp;who your
            favorite teams are, you&rsquo;ll be&nbsp;able to
            find a&nbsp;site that caters to&nbsp;your needs. In&nbsp;this article, we&rsquo;ll take a&nbsp;look at&nbsp;two
            of&nbsp;the best betting sites
            around and see what they have to&nbsp;offer!
          </p>
          <div class="post-card__tools">
            <a class="post-card__link" href="./news-page.html">read more</a>
            <time class="post-card__create-date" datetime="2022-03-18 00:00">18.03.2022</time>
          </div>
        </article>
      </li>
      <li class="posts_feed__item">
        <article class="posts-feed__post-card post-card">
          <h2 class="post-card__title">
            Introduce best betting site with highest odds in Nigeria
          </h2>
          <p class="post-card__text">
            If&nbsp;you&rsquo;re looking for a&nbsp;great place to&nbsp;bet on&nbsp;sports, the internet is&nbsp;the
            best place to&nbsp;start. There are countless websites out there that offer betting services, and they all
            come with their own unique set of&nbsp;odds and features.
          </p>
          <p class="post-card__text">
            So&nbsp;no&nbsp;matter what type of&nbsp;betting you&rsquo;re interested&nbsp;in, or&nbsp;who your
            favorite teams are, you&rsquo;ll be&nbsp;able to&nbsp;find a&nbsp;site that caters to&nbsp;your needs. In&nbsp;this
            article, we&rsquo;ll take a&nbsp;look at&nbsp;two of&nbsp;the best betting sites around and see what they
            have to&nbsp;offer!
          </p>
          <div class="post-card__tools">
            <a class="post-card__link" href="./news-page.html">read more</a>
            <time class="post-card__create-date" datetime="2022-03-18 00:00">18.03.2022</time>
          </div>
        </article>
      </li>
      <li class="posts_feed__item">
        <article class="posts-feed__post-card post-card">
          <h2 class="post-card__title">
            Best betting sites with highest odds in Nigeria
          </h2>
          <p class="post-card__text">
            If&nbsp;you&rsquo;re looking for a&nbsp;great place to&nbsp;bet on&nbsp;sports, the internet is&nbsp;the
            best place to&nbsp;start. There are
            countless websites out there that offer betting services, and they all come with their own unique set of
            odds and features.
          </p>
          <p class="post-card__text">
            So&nbsp;no&nbsp;matter what type of&nbsp;betting you&rsquo;re interested&nbsp;in, or&nbsp;who your
            favorite teams are, you&rsquo;ll be&nbsp;able to
            find a&nbsp;site that caters to&nbsp;your needs. In&nbsp;this article, we&rsquo;ll take a&nbsp;look at&nbsp;two
            of&nbsp;the best betting sites
            around and see what they have to&nbsp;offer!
          </p>
          <div class="post-card__tools">
            <a class="post-card__link" href="./news-page.html">read more</a>
            <time class="post-card__create-date" datetime="2022-03-18 00:00">18.03.2022</time>
          </div>
        </article>
      </li>
      <li class="posts_feed__item">
        <article class="posts-feed__post-card post-card">
          <h2 class="post-card__title">
            Introduce best betting site with highest odds in Nigeria
          </h2>
          <p class="post-card__text">
            If&nbsp;you&rsquo;re looking for a&nbsp;great place to&nbsp;bet on&nbsp;sports, the internet is&nbsp;the
            best place to&nbsp;start. There are countless websites out there that offer betting services, and they all
            come with their own unique set of&nbsp;odds and features.
          </p>
          <p class="post-card__text">
            So&nbsp;no&nbsp;matter what type of&nbsp;betting you&rsquo;re interested&nbsp;in, or&nbsp;who your
            favorite teams are, you&rsquo;ll be&nbsp;able to&nbsp;find a&nbsp;site that caters to&nbsp;your needs. In&nbsp;this
            article, we&rsquo;ll take a&nbsp;look at&nbsp;two of&nbsp;the best betting sites around and see what they
            have to&nbsp;offer!
          </p>
          <div class="post-card__tools">
            <a class="post-card__link" href="./news-page.html">read more</a>
            <time class="post-card__create-date" datetime="2022-03-18 00:00">18.03.2022</time>
          </div>
        </article>
      </li>
    </ul>
    <!-- /.posts-feed__list -->
  </div>
  <!-- /.container -->
</section>
<!-- /.posts-feed -->

<?php
get_footer();
