import { initHistories } from '../histories.js';

initHistories();

new Glide('.projects-glide', {
  type: 'slider',
  startAt: 0,
  perView: 6,
  gap: 32,
  autoplay: 3000,
}).mount();
