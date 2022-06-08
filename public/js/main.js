const linkEls = document.querySelectorAll('.site-navigation__link--with-extra');

const hideOpenedPageNavEl = () => {
  const navEl = document.querySelector('.page-navigation--shown');
  if (navEl) {
    navEl.classList.toggle('page-navigation--shown');
    navEl.classList.toggle('page-navigation--hidden');
  }
};

linkEls.forEach((linkEl) => {
  linkEl.addEventListener('click', (evt) => {
    const navigationEl = evt.target.nextElementSibling;
    if (navigationEl.classList.contains('page-navigation--shown')) {
      navigationEl.classList.toggle('page-navigation--shown');
      navigationEl.classList.toggle('page-navigation--hidden');
    } else {
      hideOpenedPageNavEl()
      navigationEl.classList.toggle('page-navigation--shown');
      navigationEl.classList.toggle('page-navigation--hidden');
    }
  });
});


