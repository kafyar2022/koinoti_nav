const formEl = document.querySelector('form');
const stageEls = document.querySelectorAll('.test-form__stage');
const nextBtnEl = document.querySelector('.test-form__btn');

nextBtnEl.addEventListener('click', (evt) => {
  stageEls[0].textContent = 'Этап 10 из 10';
  stageEls[1].textContent = 'Личная информация';

  formEl.classList.add('last');
});


