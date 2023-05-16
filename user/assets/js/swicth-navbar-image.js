const checkbox = document.getElementById("checkbox");
const navbarImage = document.getElementById("navbar-image");

checkbox.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark-mode");
    navbarImage.src = "images/Official_Final_Full white.png";
  } else {
    document.body.classList.remove("dark-mode");
    navbarImage.src = "images/Official_Final_Full_Blue.png";
  }
});
