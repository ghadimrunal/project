
let menuBar = document.querySelector("#menu-bar");
let navbar = document.querySelector(".menu");
let header = document.querySelector(".navbar");

menuBar.addEventListener("click", () => {
  menuBar.classList.toggle("fa-times");
  navbar.classList.toggle("active");
  console.log("menu-bar clicked");
  console.log(navbar.classList);
});

document.querySelectorAll(".nav-item").forEach((n) =>
  n.addEventListener("click", () => {
    menuBar.classList.remove("fa-times");
    navbar.classList.remove("active");
    n.classList.remove("active-1");
  })
);

window.onscroll = () => {
  menuBar.classList.remove("fa-times");
  navbar.classList.remove("active");

  if (Window.onscroll > 150) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
};
