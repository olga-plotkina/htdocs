import throttle from "lodash/throttle";

document.addEventListener("DOMContentLoaded", () => {
  document.body.classList.remove("is-page-loading");

  // adds the has-scroll class when there is a page scroll
  let scrollState = false;
  const onScrollUpdate = function () {
    // eslint-disable-next-line no-mixed-operators
    const newState = Boolean(
      document.documentElement.scrollTop ||
        (document.body && document.body.scrollTop) ||
        0
    );
    if (newState === scrollState) return true;
    document.body.classList.toggle("has-scroll", newState);
    scrollState = newState;
  };
  window.addEventListener("scroll", throttle(onScrollUpdate, 200));
  onScrollUpdate();

  // Download and apply Photoswipe
  // const photoswipeElements = document.querySelectorAll('.js-photoswipe-gallery');
  // if (photoswipeElements.length) {
  // 	import('./async-modules/photoswipe').then(({ loaderInit }) => {
  // 		loaderInit(photoswipeElements);
  // 	});
  // }

  // // Download and apply Swiper
  // const swiperElements = document.querySelectorAll('.js-swiper');
  // if (swiperElements.length) {
  // 	import('./async-modules/swiper').then(({ loaderInit }) => {
  // 		loaderInit(swiperElements);
  // 	});
  // }

  // // Download and apply basicLightbox
  // const basicLightboxElements = document.querySelectorAll('.js-reviews-button');
  // if (basicLightboxElements.length) {
  // 	import('./async-modules/basiclightbox').then(({ loaderInit }) => {
  // 		loaderInit(basicLightboxElements);
  // 	});
  // }
});

const menuBtnRef = document.querySelector("[data-menu-button]");
const mobileMunuRef = document.querySelector("[data-menu]");
const closeMenuBtn = document.querySelector("[data-close-button]");

menuBtnRef.addEventListener("click", () => {
  const expanded = menuBtnRef.getAttribute("aria-expanded") === true || false;

  menuBtnRef.classList.add("is-open");
  closeMenuBtn.classList.add("is-open");
  menuBtnRef.setAttribute("aria-expanded", !expanded);

  mobileMunuRef.classList.add("is-open");
});

closeMenuBtn.addEventListener("click", () => {
  menuBtnRef.classList.remove("is-open");
  closeMenuBtn.classList.remove("is-open");

  mobileMunuRef.classList.remove("is-open");
});
