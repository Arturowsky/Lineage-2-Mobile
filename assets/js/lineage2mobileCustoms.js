// CUSTOM JAVASCRIPT BY SNUGGE @ LINEAGE2M.PL
// Author: Artur Lewandowicz

// MAKING IMAGES RESPONSIVE AND LAZY
console.log("LINEAGE 2 MOBILE POLSKA");


// SEARCH
// Form div container
// const form = document.querySelector(".searchform div");

// // Label
// const searchLabel = document.querySelector(".screen-reader-text");
// searchLabel.classList.add("d-none");


// // Input Text
const searchInputText = document.querySelector("#s");
searchInputText.setAttribute("placeholder", "Szukaj na stronie...");

// // Input Submit
// const searchInputSubmit = document.querySelector("#searchsubmit");
// searchInputSubmit.classList.add("btn-primary");

const notification = document.querySelector(".delete-alert");
// function removeNotification() {
//    notification.style.transition = "opacity .5s";
//    notification.style.opacity = "0";
// }
// setTimeout(removeNotification, 5000);

// function removeBlock() {
//     notification.style.display = "none";
// }
// setTimeout(removeBlock, 500);


function one(callback) {
    setTimeout(function() {
        notification.style.transition = "opacity 1s";
        notification.style.opacity = "0";
      callback();
    }, 5000);
  }
  
  function two() {
    notification.style.display = "none";
  }
  
  one(two)
