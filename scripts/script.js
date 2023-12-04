const body = document.body;

function toggleDarkMode() {
  body.classList.toggle("dark-mode");
}

const darkModeButton = document.getElementById("darkModeButton");
darkModeButton.addEventListener("click", toggleDarkMode);
