// common accordion
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
// scroll to top button
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
// show/hide search input in mobile version
const openCloseSearch = () => {
    const btn = document.querySelector('.js-open-search');
    const searchForm = document.querySelector('.header__search');

    btn.addEventListener('click', function() {
        searchForm.classList.toggle('active');
    })
}
// open modal windows
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
                bg.classList.add("show", "on-top");
                modal.classList.add("show");
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener("click", function () {
            bg.classList.remove("show", "on-top");
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
    accordion();
    scrollToTop();
    openCloseSearch();
    openModal();
});