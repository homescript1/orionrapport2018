// header__myName anime writing
let texte = "Hi! my name is Arianna Storich";

let txt = texte.split("");
let element_header_name = document.getElementById("header__myName");
(function animate() {
  if (txt.length > 0) {
    element_header_name.innerHTML += txt.shift();
  } else {
    clearTimeout(running);
  }
  let running = setTimeout(animate, 50);
})();

// typed script code

var typed = new Typed(".header__aboutMe", {
  strings: [
    "",
    "a dream seller",
    "an photographer",
    "Designer",
    "specially a business woman."
  ],
  typeSpeed: 150,
  backSpeed: true,
  loop: true,
  smartBackspace: true // Default value
});

// menublock slide
const menuButton = document.querySelector(".menubtn");
const menuaffichage = document.querySelector(".menublock");

menuButton.addEventListener("click", affichageMenu);
let apparitiondumenu = false;
function affichageMenu() {
  if (!apparitiondumenu) {
    menuaffichage.classList.add("menublockShow");

    apparitiondumenu = true;
  } else {
    menuaffichage.classList.remove("menublockShow");

    apparitiondumenu = false;
  }
}

$(function() {
  $(".btncosmos").hover(function() {
    $(".first-main").toggleClass("premiereOuverture");
  });
});

$(function() {
  $(".btncosmos").click(function() {
    $(".first-main").toggleClass("deuxiemeOuverture");
    $(".btncosmos").css({
      color: "blue",
      "background-color": "rgba(51, 255, 0, 0.616)"
    });
  });
});
