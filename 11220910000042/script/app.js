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

// Character move
var x = 0;
const character = document.getElementById("character");
// character.style.left = ((innerWidth - 96) / 2) + "px";
// character.style.top = (innerHeight - 200) + "px";
function char_move () {

  if (x > parseInt(character.style.left.substring(0, character.style.left.length-2))) {
    character.style.left = (parseInt(character.style.left.substring(0, character.style.left.length-2)) + 10) + "px";
    console.log(x);

  } else {
    character.style.left = (parseInt(character.style.left.substring(0, character.style.left.length-2)) - 10) + "px";

  }

}
// const move = setInterval(char_move, 50);

// Delete loading
window.addEventListener("DOMContentLoaded", (e) => {

  clearInterval(run);
  document.getElementById("loadingpage").remove();

  if (e.clientX > innerWidth / 2) {
    character.style.transform = "none";
  } else {
    console.log(e);
    character.style.transform = "scaleX(-1)";
  }


});

// Change gif
window.addEventListener("mousemove", (e) => {

  if (e.clientX > innerWidth / 2) {
    x = e.clientX;
    character.style.transform = "none";
  } else {
    character.style.transform = "scaleX(-1)";
  }

})