const sidebar2 = document.querySelector(".sidebar-2");
const sidebarOpen = document.querySelector("#sidebarOpen");

const submenuItems = document.querySelectorAll(".submenu_item");

const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");

sidebarOpen.addEventListener("click", () => sidebar2.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar2.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar2.classList.remove("close", "hoverable");
});

sidebar2.addEventListener("mouseenter", () => {
  if (sidebar2.classList.contains("hoverable")) {
    sidebar2.classList.remove("close");
  }
});
sidebar2.addEventListener("mouseleave", () => {
  if (sidebar2.classList.contains("hoverable")) {
    sidebar2.classList.add("close");
  }
});
submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 868) {
  sidebar2.classList.add("close");
} else {
  sidebar2.classList.remove("close");
}
