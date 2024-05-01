import "../vue/vue-app.js";
import fixedHeader from "./modules/header/fixed-header";
import streetMap from "./modules/maps/streetMap.js";
import { mainMenu } from "./modules/menu";
import tabsProtect from "./modules/tabs.js";
import modalWin from "./modules/modal.js";

document.addEventListener("DOMContentLoaded", function () {
  const map = document.querySelector(".map");
  const tabs = document.querySelector(".tabs-protect");

  mainMenu();
  fixedHeader();
  modalWin();

  if (map) {
    streetMap();
  }

  if (tabs) {
    tabsProtect();
  }

});
