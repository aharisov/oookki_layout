import addToCompare from './compare';

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
    const header = document.querySelector("header");
    const searchForm = document.querySelector('.header__search');
    const filterTop = document.getElementById('filter-top');

    window.addEventListener("scroll", function () {
        let currentScroll = window.scrollY;

        if (window.scrollY > 200 && !filterTop && !filterTop.classList.contains("fixed")) {
            if (currentScroll > lastScrollTop) {
                // Scrolling Down → Hide header
                header.classList.add("header-hidden");
                searchForm.classList.remove("active");
            } else {
                // Scrolling Up → Show header
                header.classList.remove("header-hidden");
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

const sortDropdown = () => {
    const sortActive = document.querySelector(".sort-active");
    const sortList = document.querySelector(".sort-list");
    const sortButtons = document.querySelectorAll(".sort-list-inner button");
    const screenW = window.innerWidth;
    const sortCloseBtn = document.querySelector(".js-sort-close");
    const bgModal = document.querySelector(".bg-modal");
    const sortInput = document.querySelector(".sort-list input[name='sort']");
    const sortHeadActive = document.querySelector(".sort-head__active");
    const sectionFilter = document.querySelector(".section-filter");
    
    if (sortList) {
        // Toggle dropdown visibility
        sortActive.addEventListener("click", () => {
            sortActive.classList.toggle("open");

            if (sortList.classList.contains("open")) {
                sortList.classList.remove("open");
                if (screenW >= 550) sortList.style.maxHeight = "0px"; // Collapse smoothly
            } else {
                sortList.classList.add("open");
                if (screenW >= 550) sortList.style.maxHeight = sortList.scrollHeight + "px"; // Expand smoothly
            }

            if (screenW < 550) {
                if (sectionFilter.classList.contains("open")) {
                    sectionFilter.classList.remove("open");
                    bgModal.classList.add("show");
                } else {
                    bgModal.classList.toggle("show");
                }
            } else {
                sectionFilter.classList.remove("open");
                bgModal.classList.remove("show");
            }
        });

        if (screenW < 550) {
            sortCloseBtn.addEventListener("click", () => {
                sortList.classList.remove("open");
                sortActive.classList.remove("open");
                bgModal.classList.remove("show");
            })
        }
    
        // Handle option selection
        sortButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();

                // Remove "aria-selected" from all buttons
                sortButtons.forEach(btn => btn.setAttribute("aria-selected", "false"));
    
                // Set the clicked button as selected
                button.setAttribute("aria-selected", "true");
    
                // Update the active selection text
                sortActive.textContent = button.textContent;
                sortInput.value = button.getAttribute("data-id");
                if (screenW < 550)  sortHeadActive.textContent = button.textContent;
                sortActive.classList.remove("open");
    
                // Close dropdown smoothly
                if (screenW >= 550) {
                    sortList.classList.remove("open");
                    sortList.style.maxHeight = "0px";
                }
            });
        });
    
        // Close dropdown when clicking outside
        document.addEventListener("click", (event) => {
            if (!sortActive.contains(event.target) && !sortList.contains(event.target)) {
                sortList.classList.remove("open");
                sortActive.classList.remove("open");
                if (screenW >= 550) sortList.style.maxHeight = "0px";
            }
        });
    }
}

const showCloseFilter = () => {
    const filter = document.querySelector(".section-filter");
    const openFilterBtn = document.querySelector(".js-open-filter");
    const screenW = window.innerWidth;
    const closeFilterBtn = document.querySelector(".js-close-filter");
    const sortList = document.querySelector(".sort-list");
    const bgModal = document.querySelector(".bg-modal");
    
    if (filter && screenW < 768) {
        // Toggle filter visibility
        openFilterBtn.addEventListener("click", () => {
            filter.classList.toggle("open");
            
            if (screenW < 550) {
                if (sortList.classList.contains("open")) {
                    sortList.classList.remove("open");
                    bgModal.classList.add("show");
                } else {
                    console.info('550, no sort')
                    bgModal.classList.toggle("show");
                }
            } 
            
            if (screenW >= 550 && screenW < 768) {
               bgModal.classList.toggle("show");
            }
        });

        closeFilterBtn.addEventListener("click", () => {
            filter.classList.remove("open");
            openFilterBtn.classList.remove("active");
            bgModal.classList.remove("show");
        })
    
        // Close dropdown when clicking outside
        // document.addEventListener("click", (event) => {
        //     if (filter.classList.contains("open")) {
        //         filter.classList.remove("open");
        //         openFilterBtn.classList.remove("active");
        //         bgModal.classList.remove('show');
        //     }
        // });
    }
}

const openFilterBlock = () => {
    const filterBlocks = document.querySelectorAll(".filter-block");

    if (filterBlocks.length > 0) {
        filterBlocks.forEach(block => {
            // Select the header (h4 with role="btn")
            const header = block.querySelector("h4[role='btn']");
            // Select the inner content container
            const content = block.querySelector(".filter-block__inner");

            header.addEventListener("click", () => {
                // Get current state from the header's aria-active attribute
                const isActive = header.getAttribute("aria-active") === "true";
                
                // Toggle the state:
                header.setAttribute("aria-active", isActive ? "false" : "true");
                content.setAttribute("aria-hidden", isActive ? "true" : "false");
            });
        });
    }
}

const showMoreFilterValues = () => {
    const showMoreBtn = document.querySelector('.js-show-more');
    const container = showMoreBtn.parentElement;

    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', function () {
            // Toggle the 'expanded' class on the container
            container.classList.toggle('expanded');

            // Update button text based on state
            if (container.classList.contains('expanded')) {
                this.textContent = '- moins de marques';
            } else {
                this.textContent = '+ de marques';
            }
        });
    }
}

const stickyFilter = () => {
    const filterTop = document.getElementById('filter-top');
    const sidebar = document.querySelector('.section-filter');
    const sidebarInner = document.querySelector('.section-filter__inner');
    const container = document.querySelector('.section-products');
    const header = document.querySelector('header');

    if (filterTop) {
        const filterTopOffset = filterTop.offsetTop;
        const sidebarInitialOffset = sidebar.offsetTop - 180;

        window.addEventListener('scroll', function () {
            const scrollY = window.pageYOffset || document.documentElement.scrollTop;

            // === Sticky Filter Header ===
            if (scrollY >= filterTopOffset - 150) {
                filterTop.classList.add('fixed');
                header.classList.add('header-hidden');
            } else {
                filterTop.classList.remove('fixed');
                header.classList.remove('header-hidden');
            }

            if (window.innerWidth >= 768) {
                // === Sidebar Sticky Logic ===
                const containerRect = container.getBoundingClientRect();
                const containerBottom = containerRect.bottom;

                const sidebarHeight = sidebarInner.offsetHeight;

                // If we've scrolled past the sidebar's initial position...
                if (scrollY >= sidebarInitialOffset) {
                    if (containerBottom < sidebarHeight) {
                        sidebarInner.classList.add("absolute");
                        sidebarInner.classList.remove("fixed");
                        
                        sidebarInner.style.top = (container.offsetHeight - sidebarHeight) + 'px';
                    } else {
                        sidebarInner.classList.add("fixed");
                        sidebarInner.classList.remove("absolute");
                        sidebarInner.style.top = '80px';
                    }
                } else {
                    // Reset sidebar to its original position 
                    sidebarInner.classList.remove("absolute");
                    sidebarInner.classList.remove("fixed");
                    sidebarInner.style.top = '';
                }
            }
        });
    }
}

document.addEventListener('DOMContentLoaded',  function(event) {
    openCloseMenu();   
    openDropdown(); 
    accordion();
    scrollToTop();
    scrollMenu();
    openCloseSearch();
    openModal();
    sortDropdown();
    showCloseFilter();
    openFilterBlock();
    showMoreFilterValues();
    stickyFilter();
    addToCompare();

    const homeTopSlider = new Swiper('.top-slider', {
        speed: 800,
        autoplay: {
            delay: 8000,
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

    const sectionNav = new Swiper(".section-nav .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            550: {
              slidesPerView: 2
            },
            1024: {
                slidesPerView: 5
            }
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});