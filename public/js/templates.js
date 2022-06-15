const createEmployeeTemplate = (employee) => (
  `<article class="employee">
    <img class="employee__img" src="/files/img/employee/${employee.img}" width="100%" height="424px" alt="${employee.name}">

    <div class="employee__inner">
      <h2 class="employee__name">${employee.name}</h2>
      <p class="employee__position">${employee.position}</p>

      <p class="employee__description">${employee.description}</p>
    </div>
  </article>`
);

export { createEmployeeTemplate };
