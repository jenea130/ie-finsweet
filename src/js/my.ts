import "../vue/vue-app.js";
import fixedHeader from "./modules/header/fixed-header";
import streetMap from "./modules/maps/streetMap.js";
import { mainMenu } from "./modules/menu";



document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelector(".video");
  mainMenu();
  fixedHeader();
  streetMap();
});
