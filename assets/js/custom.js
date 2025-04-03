// Function to create and insert the preloader into the DOM
function createPreloader() {
    const preloader = document.createElement('div');
    preloader.id = 'preloader';
    const wrapper = document.createElement('div');
    wrapper.className = "position-relative";
    const spinner = document.createElement('div');
    spinner.className = "spinner";
    const image = document.createElement('img');
    image.src = "assets/images/index/logo.png";
    wrapper.appendChild(spinner);
    wrapper.appendChild(image);
    preloader.appendChild(wrapper);
    document.body.appendChild(preloader);
}
function removePreloader() {
    const preloader = document.getElementById('preloader');
    const siterapper = document.querySelector('.site-wrapper');
    if (preloader) {
        preloader.remove();
        siterapper.style.visibility = "visible";
        siterapper.style.overflow = "visible";
        siterapper.style.height = "unset";
    }
}
createPreloader();
window.addEventListener('load', function() {
    setTimeout(() => {
        removePreloader();
    }, 500);
});






// Numbers Animations for spans
function animateNumbers(num, finalValue, duration) {
    let start = null;
    const finalValueStr = num.getAttribute("data-final-value");
    const charCount = finalValueStr.length;
    num.style.display = "inline-block";
    num.style.width = `${charCount}ch`;
    function step(timestamp) {
        if (!start) start = timestamp;
        const progress = Math.min((timestamp - start) / duration, 1);
        num.textContent = Math.floor(progress * finalValue);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    }
    window.requestAnimationFrame(step);
}
function startNumberAnimation() {
    const numbers = document.querySelectorAll(".number");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const finalValue = parseInt(
                        entry.target.getAttribute("data-final-value")
                    );
                    animateNumbers(entry.target, finalValue, 2000);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );
    numbers.forEach((num) => observer.observe(num));
}
startNumberAnimation();
window.addEventListener("load", startNumberAnimation);






/* 1.1. Side navbar */
function open_aside() {
    "use strict";
    const sidepanel = document.getElementById("sideNav");
    if (sidepanel) {
        sidepanel.style.left = "0";
    } else {
        console.error("Error: Side panel element not found!");
    }
}
function close_aside() {
    "use strict";
    const sidepanel = document.getElementById("sideNav");
    if (sidepanel) {
        sidepanel.style.left = "-355px";
    } else {
        console.error("Error: Side panel element not found!");
    }
}
let slid = document.getElementById("slid-btn");
if (slid !== null) {
    slid.onclick = () => {
        let dropdwon = document.getElementById("slid-drop");
        dropdwon.classList.toggle("aside-dropdwon");
    }
}
const dropdowns = document.querySelectorAll('.navbar .dropdown');
dropdowns.forEach(dropdown => {
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
    dropdownMenu.style.maxHeight = '0';
    dropdown.addEventListener('mouseenter', () => {
        dropdownMenu.style.visibility = 'visible';
        dropdownMenu.style.maxHeight = `${dropdownMenu.scrollHeight}px`;
    });
    dropdown.addEventListener('mouseleave', () => {
        dropdownMenu.style.visibility = 'hidden';
        dropdownMenu.style.maxHeight = '0';
    });
});






// 1.3. Logos SLider 
let companies = document.querySelector('.CompaniesSlider');
if (companies !== null)
    $('.CompaniesSlider').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 4000,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 830,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 620,
                settings: {
                    slidesToShow: 2,
                    speed: 3000,
                }
            },
            {
                breakpoint: 360,
                settings: {
                    slidesToShow: 1.5,
                    speed: 4000,
                }
            },
        ]
    });







// 1.8. Quote Form Validation
const mainForm = document.querySelector(".Quote form");
if (mainForm !== null)
    mainForm.addEventListener("submit", function (event) {
        const path = document.querySelector(".Quote .modal img").getAttribute("src");
        document.querySelector(".Quote .modal img").setAttribute("src", "");
        event.preventDefault();
        var modal = new bootstrap.Modal(document.querySelector('.Quote .modal'));
        modal.show();
        document.querySelector(".Quote form").reset();
        document.querySelector(".Quote .modal img").setAttribute("src", path);
        setTimeout(() => {
            modal.hide();
        }, 5000);
    });







/* 1.10. Testimonials Slider */
let slideIndex = 3;
showSlides(slideIndex);
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    const slides = document.querySelectorAll('.mySlides');
    if (slides.length === 0)
        return;
    const dots = document.querySelectorAll('.dot');
    const imgContainer = document.querySelector('.Testimonials figure');
    const imgs = document.querySelectorAll('.Testimonials figure img');
    slideIndex = (n > slides.length) ? 1 : (n < 1) ? slides.length : n;
    slides.forEach(slide => slide.style.display = 'none');
    dots.forEach(dot => dot.classList.remove('active'));
    imgs.forEach(img => img.classList.remove('active'));
    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].classList.add('active');
    imgs[slideIndex - 1].classList.add('active');
    imgContainer.style.transition = "opacity 2s ease";
    imgContainer.style.opacity = "0";
    const orderIndices = [1, 2, 3, 4, 5];
    for (let i = 0; i < imgs.length; i++) {
        let index = (slideIndex + i - 3 + imgs.length) % imgs.length;
        imgs[index].style.visibility = 'hidden';
        setTimeout(() => {
            imgs[index].style.order = orderIndices[i];
            imgs[index].style.visibility = 'visible';
        }, 0);
    }
    imgContainer.style.opacity = "1";
}
let slideInterval = setInterval(function () {
    showSlides(slideIndex);
    slideIndex++;
    (slideIndex == 5) ? slideIndex = 0 : slideIndex;
}, 5000);
document.querySelectorAll(".mySlides, .dot, .Testimonials img").forEach((element) => {
    element.addEventListener("mouseover", () => {
        clearInterval(slideInterval);
    });
    element.addEventListener("mouseout", () => {
        slideInterval = setInterval(function () {
            showSlides(slideIndex);
            slideIndex++;
            slideIndex = slideIndex == 5 ? 1 : slideIndex;
        }, 5000);
    });
});






// 1.15. Subscribe Form Validation
const subscribeForm = document.querySelector(".Subscribe form");
if (subscribeForm !== null)
    subscribeForm.addEventListener("submit", function (event) {
        const path = document.querySelector(".Subscribe .modal img").getAttribute("src");
        document.querySelector(".Subscribe .modal img").setAttribute("src", "");
        event.preventDefault();
        var modal = new bootstrap.Modal(document.querySelector('.Subscribe .modal'));
        modal.show();
        document.querySelector(".Subscribe form").reset();
        document.querySelector(".Subscribe .modal img").setAttribute("src", path);
        setTimeout(() => {
            modal.hide();
        }, 5000);
    });






// 3.1. Contact-Us Form Validation
const contactForm = document.querySelector(".Contact-Us form");
if (contactForm !== null)
    contactForm.addEventListener("submit", function (event) {
        const path = document.querySelector(".Contact-Us .modal img").getAttribute("src");
        document.querySelector(".Contact-Us .modal img").setAttribute("src", "");
        event.preventDefault();
        var modal = new bootstrap.Modal(document.querySelector('.Contact-Us .modal'));
        modal.show();
        document.querySelector(".Contact-Us form").reset();
        document.querySelector(".Contact-Us .modal img").setAttribute("src", path);
        setTimeout(() => {
            modal.hide();
        }, 5000);
    });







// 6.2. Reply Form Validation
const replyForm = document.querySelector(".Reply form");
if (replyForm !== null)
    replyForm.addEventListener("submit", function (event) {
        const path = document.querySelector(".Reply .modal img").getAttribute("src");
        document.querySelector(".Reply .modal img").setAttribute("src", "");
        event.preventDefault();
        var modal = new bootstrap.Modal(document.querySelector('.Reply .modal'));
        modal.show();
        document.querySelector(".Reply form").reset();
        document.querySelector(".Reply .modal img").setAttribute("src", path);
        setTimeout(() => {
            modal.hide();
        }, 5000);
    });






    
// Back to top
document.addEventListener("DOMContentLoaded", function () {
    var box = document.querySelector(".scrollToTop");
    var water = document.querySelector(".scrollToTop .water");

    function updateDimensions() {
        windowHeight = window.innerHeight;
        documentHeight = document.documentElement.scrollHeight - windowHeight;
    }

    updateDimensions();

    window.addEventListener("resize", updateDimensions);

    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;
        var percent = Math.min(Math.floor((scrollPosition / documentHeight) * 100), 100);
        water.style.transform = 'translate(0,' + (100 - percent) + '%)';

        if (scrollPosition >= 200) {
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
    });

    if (box !== null) { // Corrected the typo
        box.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});