'use strict';

const button = document.querySelector('.container_button');
button.addEventListener('click', buttonClickHandler);

function buttonClickHandler() {
  fetch(`http://127.0.0.1:8888/test.php`)
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('The response was not OK.');
    }
  })
  .then(result => {
    writeDataToDOM(result);
    console.log(result); // pretpostavljam da se na ovo misli pod zahtjevom "ispisati povratne podatke na klik gumba"
  })
  .catch(err => {
    console.log(err);
  });
};

function writeDataToDOM(data) {
 const container = document.querySelector('.js-container_content');

 Object.keys(data).forEach(day => {
  let html;

  data[day].forEach(event => {
    html = `
      <div class="content_activity">
        <h2>${day}</h2>
        <div class="activity">
          <p class="activity_type">${event.activity}</p>
          <p class="activity_time">od ${event.time_from}</p>
          <p class="activity_time">do ${event.time_to}</p>
        </div>
        <p>${event.activity_detail}</p>
        <p>${event.activity_name}</p>
      </div>
    `;
    container.insertAdjacentHTML('beforeend', html);
  })
 });

};