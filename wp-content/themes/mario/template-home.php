<?php
/*
Template Name: home (Головна)
*/
get_header();
?>

<main>
    <section class="hero">
                <div class="hero__title-wrap">
                    <h1 class="hero__title">Рушникосушки Маріо <br><span>з нержавіючої сталі</span></h1>
                    <p class="hero__description">Обирай свою модель, адже якість наших рушникосушок підтверджено українськими та європейськими сертифікатами.</p>
                </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section__title">АСОРТИМЕНТ ТОВАРІВ</h2>
            <ul class="categories list">
                <li class="categories__item categories__item--water-models">
                    <a href="" class="categories__item-link">
                        <div class="categories__item-wrap">
                            <img srcset="/wp-content/themes/mario/resources/img/categories/category-water-models-mobile-250x443.jpg 480w, /wp-content/themes/mario/resources/img/categories/category-water-models-desktop-400x710.jpg 1200w "
                                        src="/wp-content/themes/mario/resources/img/categories/category-water-models-mobile-250x443.jpg" 
                                        alt="Водяні моделі">
                            <h3 class="categories__item-title">Водяні <br><span>моделі</span></h3>
                        </div>
                    </a>
                </li>
                <li class="categories__item categories__item--electric-models">
                    <a href="" class="categories__item-link">
                        <div class="categories__item-wrap">
                            <img srcset="/wp-content/themes/mario/resources/img/categories/category-electric-models-mobile-250x443.jpg 480w, /wp-content/themes/mario/resources/img/categories/category-electric-models-desktop-400x710.jpg 1200w "
                                        src="/wp-content/themes/mario/resources/img/categories/category-electric-models-mobile-250x443.jpg" 
                                        alt="Електричні моделі">
                            <h3 class="categories__item-title">Електричні <br> <span>моделі</span></h3>
                        </div>
                    </a>
                </li>
                <li class="categories__item categories__item--accessories">
                    <a href="" class="categories__item-link">
                        <div class="categories__item-wrap">
                            <img srcset="/wp-content/themes/mario/resources/img/categories/category-accessories-mobile-250x139.jpg 480w, /wp-content/themes/mario/resources/img/categories/category-accessories-desktop-400x720.jpg 1200w "
                                        src="/wp-content/themes/mario/resources/img/categories/category-accessories-mobile-250x139.jpg" 
                                        alt="Аксесуари">
                            <h3 class="categories__item-title">Аксесуари <br><span>для рушникосушок</span></h3>
                        </div>
                    </a>
                </li>
                <li class="categories__item categories__item--combined">
                    <a href="" class="categories__item-link">
                        <div class="categories__item-wrap">
                            <img srcset="/wp-content/themes/mario/resources/img/categories/category-combined-models-mobile-250x205.jpg 480w, /wp-content/themes/mario/resources/img/categories/category-combined-models-desktop-347x285.jpg 1200w "
                                        src="/wp-content/themes/mario/resources/img/categories/category-combined-models-mobile-250x205.jpg" 
                                        alt="Комбіновані моделі">
                            <h3 class="categories__item-title">Комбіновані</h3>
                        </div>
                    </a>
                </li>
                <li class="categories__item categories__item--special-offers">
                    <a href="" class="categories__item-link">
                        <div class="categories__item-wrap">
                            <img srcset="/wp-content/themes/mario/resources/img/categories/category-special-offer-models-mobile-250x205.jpg 480w, /wp-content/themes/mario/resources/img/categories/category-special-offer-models-desktop-347x285.jpg 1200w "
                                        src="/wp-content/themes/mario/resources/img/categories/category-special-offer-models-mobile-250x205.jpg" 
                                        alt="Акційні моделі">
                            <h3 class="categories__item-title">Акційні</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </section>

    <section class="section section--features">
        <div class="container">
          <h2 class="visually-hidden">Наші переваги</h2>
          <ul class="features list">
            <li class="features__item">
              <div class="features__thumb">
                <svg class="features__icon">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#clients"></use>
                </svg>
              </div>
              <h3 class="features__item-title">ЗАДОВОЛЕНІ КЛІЄНТИ</h3>
              <p class="features__item-number">
                965К
              </p>
              <svg class="features__icon-line">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#blue-line"></use>
              </svg>
            </li>
            <li class="features__item">
              <div class="features__thumb">
                <svg class="features__icon">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#size"></use>
                </svg>
              </div>
              <h3 class="features__item-title">ТИПОРОЗМІРИ МОДЕЛЕЙ</h3>
              <p class="features__item-number">
                280+
              </p>
              <svg class="features__icon-line">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#blue-line"></use>
              </svg>
            </li>
            <li class="features__item">
              <div class="features__thumb">
                <svg class="features__icon">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#towel-rail"></use>
                </svg>
              </div>
              <h3 class="features__item-title">РУШНИКОСУШАРКИ</h3>
              <p class="features__item-number">
                3,4млн
              </p>
              <svg class="features__icon-line">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#blue-line"></use>
              </svg>
            </li>
            <li class="features__item">
              <div class="features__thumb">
                <svg class="features__icon">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#diamond"></use>
                </svg>
              </div>
              <h3 class="features__item-title">ЯКІСТЬ</h3>
              <p class="features__item-number">
                100%
              </p>
              <svg class="features__icon-line">
                  <use href="/wp-content/themes/mario/assets/sprite.svg#blue-line"></use>
              </svg>
            </li>
          </ul>
        </div>
    </section>

</main>
<?php
get_footer();