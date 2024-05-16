// Library
import { kuro } from "./kuro.js";

// Component
let kuro_index = 7;
const element = document.getElementById("loading_el");
const vektor = [0, 1, 2, 0, 3, 0, 4, 5, 0, 4, 5, 0, 0, 6, 7, 8, 9, 10, 10, 10, 10, 10, 10, 11, 11, 12, 12, 13, 13, 14, 14, 14, 15, 15, 16];

// Animaton running
function animasi() {

  element.innerHTML = kuro[vektor[kuro_index]];
  kuro_index = kuro_index == vektor.length-1 ? 0 : kuro_index+1;

}

const run = setInterval(animasi, 150);

// Delete loading
window.addEventListener("DOMContentLoaded", function () {

  clearInterval(run);
  document.getElementById("loadingpage").remove();



});