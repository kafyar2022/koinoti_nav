import { createElement } from '../js/util.js';
import { createEmployeeTemplate } from './templates.js';

const employeeListEl = document.querySelector('.employee-list');


const showEmployee = (employee) => {
  const employeeEl = createElement(createEmployeeTemplate(employee));
  const prevEmployeeEl = document.body.querySelector('.employee');

  if (prevEmployeeEl) {
    prevEmployeeEl.remove();
  }
  document.body.classList.add('page-body--modal');
  document.body.insertAdjacentElement('beforeend', employeeEl);
  document.addEventListener('keydown', escKeydownHandler)
};

function escKeydownHandler(evt) {
  if (evt.key === 'Escape' || evt.key === 'Esc') {
    document.querySelector('.employee').remove();
    document.removeEventListener('keydown', escKeydownHandler);
    document.body.classList.remove('page-body--modal');
  }
};

const initEmployee = () => {
  employeeListEl.addEventListener('click', (evt) => {
    if (evt.target.classList.contains('employee-card__btn')) {
      showEmployee(JSON.parse(evt.target.dataset.employee));
    }
  });
};

export { initEmployee };
