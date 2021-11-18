require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const input = document.getElementById("search-input");
const searchBtn = document.getElementById("search-btn");
const expand = () => {
    searchBtn.classList.toggle("close");
    input.classList.toggle("square");
};
searchBtn.addEventListener("click", expand);