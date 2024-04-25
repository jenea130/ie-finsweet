import "../vue/vue-app.js";
import fixedHeader from "./modules/header/fixed-header";
import streetMap from "./modules/maps/streetMap.js";
import { mainMenu } from "./modules/menu";
import tabsProtect from "./modules/tabs.js";

document.addEventListener("DOMContentLoaded", function () {
  const map = document.querySelector(".map");
  const tabs = document.querySelectorAll(".tabs-protect");

  mainMenu();
  fixedHeader();

  if (map) {
    streetMap();
  }

  if (tabs) {
    tabsProtect();
  }

});
