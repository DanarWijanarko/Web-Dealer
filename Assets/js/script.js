/*----------------------Back To Top Start----------------------*/
window.onscroll = () => {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("backtotop").style.display = "block";
    } else {
        document.getElementById("backtotop").style.display = "none";
    }
};

function toTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
/*----------------------Back To Top End----------------------*/

/*----------------------NavBar Start----------------------*/
const popupBar = document.querySelector(".menu");

document.querySelector(".bars").onclick = () => {
    popupBar.classList.toggle("active");
};

const nv = document.querySelector("nav");

document.addEventListener("click", function (e) {
    if (!nv.contains(e.target) && !popupBar.contains(e.target)) {
        popupBar.classList.remove("active");
    }
});
/*----------------------NavBar End----------------------*/

/*----------------------Live Chat Start----------------------*/
const chatForm = document.querySelector(".chat-popup");

document.querySelector(".open-but").onclick = () => {
    chatForm.classList.toggle("active");
};

const op = document.querySelector(".open-but");

document.addEventListener("click", function (e) {
    if (!op.contains(e.target) && !chatForm.contains(e.target)) {
        chatForm.classList.remove("active");
    }
});
/*----------------------Live Chat End----------------------*/

/*----------------------Gallery Start----------------------*/
const popupImg = document.querySelector(".gallery-popup-img");
const getImg = document.querySelector(".gallery-popup-img img");

document.querySelectorAll(".gallery-img-content img").forEach((img) => {
    img.onclick = () => {
        popupImg.style.display = "block";
        getImg.src = img.getAttribute("src");
    };
});

document.querySelector(".gallery-popup-img span").onclick = () => {
    popupImg.style.display = "none";
};

const imgContent = document.querySelector(".gallery-img-content");
const imgClose = document.querySelector(".gallery-popup-img span");

document.addEventListener("click", function (e) {
    if (
        !imgContent.contains(e.target) &&
        !getImg.contains(e.target) &&
        !imgClose.contains(e.target)
    ) {
        popupImg.style.display = "none";
    }
});
/*----------------------Gallery End----------------------*/

/*----------------------Slideshow Img Start----------------------*/
let slideIndexx = 1;
showSlides(slideIndexx);

function currentImg(n) {
    showSlides((slideIndexx = n));
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndexx - 1].style.display = "block";
    dots[slideIndexx - 1].className += " active";
}
/*----------------------Slideshow Img End----------------------*/
