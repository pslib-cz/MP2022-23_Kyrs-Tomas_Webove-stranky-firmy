document.addEventListener("DOMContentLoaded", () => {
    let hamelmnts = document.querySelectorAll(".hamburger-zone");
    for (const btn of document.querySelectorAll(".hamburger-btn")) {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            for (const element of hamelmnts) {
                element.classList.toggle("active");
            }  
        });
    }
});

function mojeFunction() {
    var x = document.querySelector(".navbar__menu");
    var element = document.body;
    if (x.style.display === "block") {
      x.style.display = "none";
      element.classList.toggle("hamburger_on");
    } else {
      x.style.display = "block";
      element.classList.toggle("hamburger_on");
    }
  }