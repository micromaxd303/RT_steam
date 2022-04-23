import { sendData } from '../db/send';
import { notification } from '../notification/swal';
import { tree_container } from './tree_container';

// TODO оформить добавление товара после выбора компании игры на главной
const selector = {
  path: 'selector-companies',
  header: 'application/x-www-form-urlencoded',
  class: 'counts',
};

const dashboard = document.querySelector('#dashboard');

document
  .querySelector('#selector-companies')
  .addEventListener('change', function () {
    notification('Загружаем игры...', 'info');

    const send = sendData(this.value, selector.path, selector.header);

    send(this.value)
      .then(response => {
        tree_container(response, dashboard);
      })
      .catch(error => {
        console.log(error);
      });
  });
