(() => {
  const menuBtnRef = document.querySelector("[data-menu-button]");
  const mobileMunuRef = document.querySelector("[data-menu]");
  // const closeMenuBtn = document.querySelector('.js-close-menu');

  menuBtnRef.addEventListener("click", () => {
    const expanded = menuBtnRef.getAttribute("aria-expanded") === true || false;

    menuBtnRef.classList.toggle("is-open");
    menuBtnRef.setAttribute("aria-expanded", !expanded);

    mobileMunuRef.classList.toggle("is-open");
  });
})();
