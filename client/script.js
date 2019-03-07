'use strict';

const button = document.querySelector('.button');
button.addEventListener('click', buttonClickHandler);

async function buttonClickHandler() {
  try {
    const result = await fetch(`http://127.0.0.1:8888/test.php`);
    const jsonData = await result.json();
    console.log(jsonData);
  } catch (error) {
    console.log(error);
  }
  
}