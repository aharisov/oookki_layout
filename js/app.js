const openCloseMenu = () => {
    const menuBtn = document.querySelector('.js-open-menu');
    const menu = document.querySelector('.main-menu');
    const body = document.querySelector('body');

    menuBtn.addEventListener('click', function() {
        this.classList.toggle('opened');
        menu.classList.toggle('active');
        body.classList.toggle('lock');
    })
}

const openDropdown = () => {
    const parentItems = document.querySelectorAll('.main-menu__parent');

    parentItems.forEach(item => {
        item.addEventListener('click', function (event) {
            event.stopPropagation(); 

            // Close all other dropdowns
            parentItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('opened');
                }
            });

            // Toggle the clicked one
            this.classList.toggle('opened');
        });
    })

    document.addEventListener('click', () => {
        parentItems.forEach(item => item.classList.remove('opened'));
    });
}

const accordion = () => {
    const accordionHeaders = document.querySelectorAll(".accordion-head");

    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(el => {
            el.addEventListener("click", function () {
                const accordionItem = this.parentElement;
                const isActive = accordionItem.classList.contains("active");

                // Close all accordion items
                document.querySelectorAll(".accordion-item").forEach(item => {
                    item.classList.remove("active");
                });

                // Toggle only the clicked one
                if (!isActive) {
                    accordionItem.classList.add("active");
                }
            });
        });
    }
}

const scrollToTop = () => {
    const scrollToTopBtn = document.querySelector(".up-btn");

    // Show button when user scrolls down
    window.addEventListener("scroll", function () {
        if (window.scrollY > 400) {
            scrollToTopBtn.style.opacity = "1";
        } else {
            scrollToTopBtn.style.opacity = "0";
        }
    });

    // Scroll to top on button click
    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
}

const scrollMenu = () => {
    let lastScrollTop = 0;
    const navbar = document.querySelector("header");
    const searchForm = document.querySelector('.header__search');

    window.addEventListener("scroll", function () {
        let currentScroll = window.scrollY;

        if (window.scrollY > 200) {
            if (currentScroll > lastScrollTop) {
                // Scrolling Down → Hide Navbar
                navbar.classList.add("header-hidden");
                searchForm.classList.remove("active");
            } else {
                // Scrolling Up → Show Navbar
                navbar.classList.remove("header-hidden");
            }
        }

        lastScrollTop = currentScroll;
    });
}

const openCloseSearch = () => {
    const btn = document.querySelector('.js-open-search');
    const searchForm = document.querySelector('.header__search');

    btn.addEventListener('click', function() {
        searchForm.classList.toggle('active');
    })
}

const openModal = () => {
    const bg = document.querySelector(".bg-modal");
    const openButtons = document.querySelectorAll("[data-modal]");
    const closeButtons = document.querySelectorAll(".modal .modal-close");

    openButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const modalId = this.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            if (modal) {
                bg.classList.add("show");
                modal.classList.add("show");
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener("click", function () {
            bg.classList.remove("show");
            this.closest(".modal").classList.remove("show");
        });
    });

    window.addEventListener("click", function (e) {
        if (e.target === bg) {
            document.querySelectorAll(".modal").forEach(modal => {
                modal.classList.remove("show");
            });
            bg.classList.remove("show");
        }
    });
}

document.addEventListener('DOMContentLoaded',  function(event) {
    openCloseMenu();   
    openDropdown(); 
    accordion();
    scrollToTop();
    scrollMenu();
    openCloseSearch();
    openModal();

    const homeTopSlider = new Swiper('.top-slider', {
        speed: 800,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const homePackSlider = new Swiper(".packs-list .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            768: {
              slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const homeProductsSlider = new Swiper(".products-slider.swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            768: {
              slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});