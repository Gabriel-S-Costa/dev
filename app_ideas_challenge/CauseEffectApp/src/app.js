import people from './db.js';

const elementList = document.getElementById('contacts-list');
const listItem = document.createElement('li');

people.forEach((item) => {
   
   listItem.innerText(item.first_name);

})

console.log(list_contacts);