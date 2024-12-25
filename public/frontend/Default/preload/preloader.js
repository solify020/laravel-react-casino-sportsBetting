const loader = document.querySelector(".loader");
const toggler = document.querySelector(".toggle-loader");

toggler.addEventListener("click", () => {
  loader.classList.add("hidden");

  setTimeout(() => {
    loader.classList.remove("hidden");
  });
});