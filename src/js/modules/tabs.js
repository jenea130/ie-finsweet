export default function tabsProtect() {
  const protect_tabs = document.querySelectorAll(".tabs-protect__item");
  const protect_contents = document.querySelectorAll(".tabs-protect__body");

  showFirst();

  protect_tabs.forEach((item, index) => {
    item.addEventListener("click", () => {
      resetActive();
      item.classList.add("active");
      protect_contents[index].classList.add("active");
    })
  })

  function showFirst() {
    protect_tabs[0].classList.add("active");
    protect_contents[0].classList.add("active");
  }

  function resetActive() {
    protect_tabs.forEach(item => {
      item.classList.remove("active");
    })
    protect_contents.forEach(item => {
      item.classList.remove("active");
    })
  }
}
