// common accordion
const accordion = () => {
    const accordionHeaders = document.querySelectorAll(".accordion-head");

    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(el => {
            el.addEventListener("click", function () {
                const accordionItem = this.parentElement;
                const isActive = accordionItem.classList.contains("active");  
                const isOption = accordionItem.classList.contains("config-option");

                const accordionContainer = accordionItem.closest(".accordion-container");
                // Close all accordion items
                if (accordionContainer) {
                    accordionContainer.querySelectorAll(".accordion-item").forEach(item => {
                        item.classList.remove("active");
                    });
                } else {
                    document.querySelectorAll(".accordion-item").forEach(item => {
                        item.classList.remove("active");
                    });
                }

                // Toggle only the clicked one
                if (!isActive || isOption) {
                    accordionItem.classList.add("active");
                }
            });
        });
    }
}
// scroll to top button
const scrollToTop = () => {
    const scrollToTopBtn = document.querySelector(".up-btn");

    if (!scrollToTopBtn) return;

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

    if (!btn || !searchForm) return;

    btn.addEventListener('click', function() {
        searchForm.classList.toggle('active');
    })
}
// open modal windows
const openModal = () => {
    const body = document.querySelector("body");
    const bg = document.querySelector(".bg-modal");
    const openButtons = document.querySelectorAll("[data-modal]");
    const closeButtons = document.querySelectorAll(".modal .modal-close");

    if (!bg || !openButtons || !closeButtons) return;

    openButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const modalId = this.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            const dataId = this.getAttribute("data-id");

            if (modal) {
                bg.classList.add("show", "on-top");
                modal.classList.add("show");

                if (dataId) {
                    modal.setAttribute("data-id", dataId);
                }
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener("click", function () {
            bg.classList.remove("show", "on-top");
            this.closest(".modal").classList.remove("show");
            this.closest(".modal").setAttribute("data-id", "");
            body.classList.remove("lock");
        });
    });

    window.addEventListener("click", function (e) {
        if (e.target === bg) {
            document.querySelectorAll(".modal").forEach(modal => {
                modal.classList.remove("show");
            });
            bg.classList.remove("show");
            body.classList.remove("lock");
        }
    });
}

const showHidePass = (el) => {
    const passwordInput = document.getElementById(el);
    if (!passwordInput) return;
    const parent = passwordInput.closest(".inner");
    if (!parent) return;
    const toggleButton = parent.querySelector(".js-toggle-pass");
    if (!toggleButton) return;

    toggleButton.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.querySelector('.fa-eye-slash').style.display = "block";
            toggleButton.querySelector('.fa-eye').style.display = "none";
        } else {
            passwordInput.type = "password";
            toggleButton.querySelector('.fa-eye-slash').style.display = "none";
            toggleButton.querySelector('.fa-eye').style.display = "block";
        }
    });

}

document.addEventListener('DOMContentLoaded',  function(event) {
    accordion();
    scrollToTop();
    openCloseSearch();
    openModal();
    showHidePass("field-password");
    showHidePass("field-new_password");
});