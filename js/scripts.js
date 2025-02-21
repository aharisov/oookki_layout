"use strict";
function addToCart() {
    const modal = document.getElementById("in-cart-modal");
    const modalBg = document.querySelector(".bg-modal");
    const modalTitle = document.querySelector(".modal-title span");
    const modalImage = document.querySelector(".modal-picture img");
    const continueShopping = document.querySelector(".continue");
    const cartCounter = document.querySelector(".btn-cart .cnt");
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    if (!modalTitle || !modalImage || !continueShopping || !cartCounter || !addToCartButtons) {
        return;
    }
    let cartCount = 0;
    function updateModal(title, imageUrl) {
        modalTitle.textContent = `${title}`;
        modalImage.src = imageUrl;
        // Increment cart count
        cartCount++;
        cartCounter.textContent = cartCount.toString();
    }
    // Close modal function
    function closeModalHandler() {
        modal.classList.remove("show");
        modalBg.classList.remove("show");
    }
    // Event listeners for add to cart buttons
    addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
            const productTitle = this.getAttribute("data-title");
            const productImage = this.getAttribute("data-image");
            updateModal(productTitle, productImage);
        });
    });
    continueShopping.addEventListener("click", closeModalHandler);
}
document.addEventListener("DOMContentLoaded", () => {
    addToCart();
});
function applyInputMask(input, pattern) {
    input.addEventListener("input", (event) => {
        const target = event.target;
        let value = target.value.replace(/\s+/g, "").toUpperCase(); // Remove spaces and force uppercase if needed
        let maskedValue = "";
        let patternIndex = 0;
        let valueIndex = 0;
        while (patternIndex < pattern.length && valueIndex < value.length) {
            if (pattern[patternIndex] === "0") {
                // Only numbers allowed
                if (/\d/.test(value[valueIndex])) {
                    maskedValue += value[valueIndex++];
                }
                else {
                    valueIndex++; // Skip invalid character
                    continue;
                }
            }
            else if (pattern[patternIndex] === "X") {
                // Any alphanumeric character
                if (/[A-Z0-9]/.test(value[valueIndex])) {
                    maskedValue += value[valueIndex++];
                }
                else {
                    valueIndex++; // Skip invalid character
                    continue;
                }
            }
            else {
                // Add predefined character from pattern
                maskedValue += pattern[patternIndex];
            }
            patternIndex++;
        }
        target.value = maskedValue;
    });
}
// Usage example:
const inputPhone = document.getElementById("phone-number");
const inputRio = document.getElementById("phone-rio");
if (inputPhone)
    applyInputMask(inputPhone, "00 00 00 00 00"); // Example: Phone number format
if (inputRio)
    applyInputMask(inputRio, "00 X XXXXXX 0X0"); // Example: Custom alphanumeric format
const openCloseMenu = () => {
    const menuBtn = document.querySelector('.js-open-menu');
    const menu = document.querySelector('.main-menu');
    const body = document.querySelector('body');
    if (!menuBtn || !menu || !body)
        return;
    menuBtn.addEventListener('click', function () {
        this.classList.toggle('opened');
        menu.classList.toggle('active');
        body.classList.toggle('lock');
    });
};
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
    });
    document.addEventListener('click', () => {
        parentItems.forEach(item => item.classList.remove('opened'));
    });
};
const scrollMenu = () => {
    let lastScrollTop = 0;
    const header = document.querySelector("header");
    const searchForm = document.querySelector('.header__search');
    const filterTop = document.getElementById('filter-top');
    if (!header || !searchForm || !filterTop)
        return;
    window.addEventListener("scroll", function () {
        let currentScroll = window.scrollY;
        if (window.scrollY > 200 && !filterTop.classList.contains("fixed")) {
            if (currentScroll > lastScrollTop) {
                // Scrolling Down → Hide header
                header.classList.add("header-hidden");
                searchForm.classList.remove("active");
            }
            else {
                // Scrolling Up → Show header
                header.classList.remove("header-hidden");
            }
        }
        lastScrollTop = currentScroll;
    });
};
document.addEventListener('DOMContentLoaded', function (event) {
    openCloseMenu();
    openDropdown();
    scrollMenu();
});
function moveElementOnResize(elementSelector, fromSelector, toSelector, beforeFromSelector, beforeToSelector, breakpoint) {
    const element = document.querySelector(elementSelector);
    const fromContainer = document.querySelector(fromSelector);
    const toContainer = document.querySelector(toSelector);
    const beforeFromElement = document.querySelector(beforeFromSelector);
    const beforeToElement = document.querySelector(beforeToSelector);
    if (!element || !fromContainer || !toContainer || !beforeFromElement || !beforeToElement) {
        console.error("One or more elements not found");
        return;
    }
    function moveElement() {
        if (window.innerWidth <= breakpoint) {
            if (element.parentElement !== toContainer) {
                fromContainer.contains(element) && fromContainer.removeChild(element);
                toContainer.insertBefore(element, beforeFromElement);
            }
        }
        else {
            if (element.parentElement !== fromContainer) {
                toContainer.contains(element) && toContainer.removeChild(element);
                fromContainer.insertBefore(element, beforeToElement);
            }
        }
    }
    window.addEventListener("resize", moveElement);
    window.addEventListener("DOMContentLoaded", moveElement);
    moveElement(); // Initial check
}
moveElementOnResize(".product-title", ".product-info__inner", ".product-info", ".product-page__slider", ".return-calculate", 768);
function changeCartOption() {
    const optionButtons = document.querySelectorAll(".config-option .switch");
    console.info(optionButtons);
    if (!optionButtons)
        return;
    optionButtons.forEach(btn => {
        if (!btn.classList.contains("accordion-item")) {
            btn.classList.remove("active");
            btn.addEventListener("click", function () {
                console.info("t");
                this.classList.add("active");
            });
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
    // changeCartOption();
});
function playVideo() {
    const figures = document.querySelectorAll(".media figure");
    if (!figures)
        return;
    figures.forEach((figure) => {
        const video = figure.querySelector(".media video");
        const cover = figure.querySelector(".media .cover");
        if (!video || !cover)
            return;
        // Observer to autoplay video when in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !video.dataset.played) {
                    playVideo();
                    video.dataset.played = "true"; // Mark video as played once
                }
            });
        }, { threshold: 0.5 } // 50% of the video must be visible
        );
        observer.observe(figure);
        function playVideo() {
            cover.style.opacity = "0"; // Start fade out
            setTimeout(() => {
                cover.style.visibility = "hidden";
                video.style.visibility = "visible";
                video.play();
            }, 300); // Matches transition duration
        }
        // Show cover after video ends
        video.addEventListener("ended", () => {
            video.style.visibility = "hidden";
            cover.style.visibility = "visible";
            setTimeout(() => {
                cover.style.opacity = "1"; // Fade in effect
            }, 50);
        });
        // Manual replay when clicking the cover
        cover.addEventListener("click", () => {
            playVideo();
        });
    });
}
document.addEventListener("DOMContentLoaded", () => {
    playVideo();
});
/**
 * Adds a compare item element to the compare modal window.
 * @param product - The product to be compared.
 */
const addToCompareModal = (product) => {
    // get compare modal
    const compareModal = document.getElementById('compare-modal');
    if (!compareModal) {
        //   console.error('Compare modal container not found');
        return;
    }
    // get container for adding items
    const compareList = compareModal.querySelector('.compare-list');
    if (!compareList) {
        // console.error('Compare inner container not found');
        return;
    }
    // get open compare page button
    const compareBtn = document.querySelector('.js-open-compare');
    // get note
    const compareNote = document.querySelector('.compare-modal .note span');
    // create compare item
    const compareItem = document.createElement('div');
    compareItem.classList.add('compare-item');
    compareItem.setAttribute('data-id', product.id);
    // create empty compare item
    const compareItemEmpty = document.createElement('div');
    compareItemEmpty.classList.add('compare-item', 'empty');
    compareItem.innerHTML = `
        <div class='compare-remove js-compare-remove' data-id='${product.id}'></div>
        <div class='inner flex'>
            <div class='pic'>
                <img src='${product.image}' alt=''>
            </div>
            <div class='right'>
                <div class='brand'>${product.brand}</div>
                <div class='name'>${product.name}</div>
            </div>
        </div>
    `;
    // Append the new compare item to the compare modal
    const emptyItems = compareList.querySelectorAll('.empty');
    if (window.innerWidth < 768) {
        if (compareList.children.length == 0) {
            compareList.appendChild(compareItem);
            compareList.appendChild(compareItemEmpty);
            compareBtn.disabled = true;
        }
        else if (compareList.children.length == 1) {
            compareBtn.disabled = true;
        }
        else if (compareList.children.length == 2) {
            if (emptyItems) {
                compareList.replaceChild(compareItem, emptyItems[0]);
            }
            compareBtn.disabled = false;
        }
        compareNote.innerHTML = '2';
    }
    else {
        if (compareList.children.length == 0) {
            compareList.appendChild(compareItem);
            addEmptyItems(2, false);
        }
        else {
            if (emptyItems) {
                compareList.replaceChild(compareItem, emptyItems[0]);
            }
            compareBtn.disabled = false;
        }
        compareNote.innerHTML = '3';
    }
    // Show compare modal
    compareModal.classList.add('open');
    // item removal from the compare modal
    const removeButton = compareItem.querySelector('.js-compare-remove');
    if (removeButton) {
        removeButton.addEventListener('click', () => {
            compareList.replaceChild(compareItemEmpty, compareItem);
            compareBtn.disabled = true;
            disableProducts(false);
            unSelectProduct(removeButton.getAttribute('data-id'));
            if ((window.innerWidth < 768 && compareList.querySelectorAll('.empty').length == 2)
                || (window.innerWidth >= 768 && compareList.querySelectorAll('.empty').length == 3)) {
                compareModal.classList.remove('open');
                compareList.innerHTML = '';
            }
        });
    }
    openComparePage();
    clearCompareModal();
};
/**
 * Chooses product to compare
 */
const selectProduct = () => {
    const compareButtons = document.querySelectorAll('.product-card .compare input');
    if (!compareButtons.length) {
        // console.error('The page does not contain products');
        return;
    }
    const compareInner = document.querySelector('.compare-list');
    let compareList = [];
    compareButtons.forEach((btn) => {
        btn.addEventListener('change', () => {
            var _a;
            // Get the closest parent element with the class 'product-card'
            const parent = btn.closest('.product-card');
            if (!parent) {
                console.error('Product card parent not found');
                return;
            }
            // Retrieve the product data from the DOM
            const id = btn.getAttribute('data-id');
            const imageElem = parent.querySelector('.pic img');
            const image = imageElem ? imageElem.getAttribute('src') : null;
            const brandElem = parent.querySelector('.brand');
            const brand = brandElem ? brandElem.innerHTML : '';
            const nameElem = parent.querySelector('.name');
            const name = nameElem ? nameElem.innerHTML : '';
            // If id or pic is not found, exit early
            if (!id || !image) {
                console.error('Missing product id or image');
                return;
            }
            // If the button is checked, add the product to the list and add a class to the product card
            if (btn.checked) {
                parent.classList.add('in-compare');
                compareList.push({ id, image, brand, name });
                addToCompareModal({ id, image, brand, name });
            }
            else {
                // Remove the product from the list and remove the class from the product card
                parent.classList.remove('in-compare');
                compareList = compareList.filter(el => el.id !== id);
                (_a = compareInner === null || compareInner === void 0 ? void 0 : compareInner.querySelector(`[data-id="${id}"]`)) === null || _a === void 0 ? void 0 : _a.remove();
                addEmptyItems(1, false);
            }
            if ((compareInner === null || compareInner === void 0 ? void 0 : compareInner.querySelectorAll('.empty'))
                && (compareInner === null || compareInner === void 0 ? void 0 : compareInner.querySelectorAll('.empty').length) > 0) {
                disableProducts(false);
                if (((compareInner === null || compareInner === void 0 ? void 0 : compareInner.querySelectorAll('.empty').length) == 2 && window.innerWidth >= 768)
                    || ((compareInner === null || compareInner === void 0 ? void 0 : compareInner.querySelectorAll('.empty').length) == 1 && window.innerWidth < 768)) {
                    const compareBtn = document.querySelector('.js-open-compare');
                    compareBtn.disabled = true;
                }
            }
            else {
                disableProducts(true);
            }
            console.info('Products in compare list:', compareList);
        });
    });
};
const disableProducts = (disable) => {
    const compareButtons = document.querySelectorAll('.product-card .compare input');
    if (!compareButtons.length) {
        console.error('The page does not contain products');
        return;
    }
    compareButtons.forEach((btn) => {
        const parent = btn.closest('.in-compare');
        disable && !parent ? btn.disabled = true : btn.disabled = false;
    });
};
const unSelectProduct = (id) => {
    const compareButtons = document.querySelectorAll('.product-card .compare input');
    if (!compareButtons.length) {
        console.error('The page does not contain products');
        return;
    }
    compareButtons.forEach((btn) => {
        if (btn.getAttribute('data-id') == id) {
            const parent = btn.closest('.product-card');
            btn.checked = false;
            parent === null || parent === void 0 ? void 0 : parent.classList.remove('in-compare');
        }
        if (id == null) {
            const parent = btn.closest('.product-card');
            btn.checked = false;
            parent === null || parent === void 0 ? void 0 : parent.classList.remove('in-compare');
        }
    });
};
const addEmptyItems = (count, clear) => {
    // get compare modal    
    const compareModal = document.getElementById('compare-modal');
    if (!compareModal) {
        console.error('Compare modal container not found');
        return;
    }
    // get container for adding items
    const compareList = compareModal.querySelector('.compare-list');
    if (!compareList) {
        console.error('Compare inner container not found');
        return;
    }
    if (clear)
        compareList.innerHTML = '';
    for (let i = 0; i < count; i++) {
        // create compare item
        const compareItem = document.createElement('div');
        compareItem.classList.add('compare-item', 'empty');
        compareList.appendChild(compareItem);
    }
};
const openComparePage = () => {
    const compareBtn = document.querySelector('.js-open-compare');
    compareBtn === null || compareBtn === void 0 ? void 0 : compareBtn.addEventListener('click', () => {
        var _a;
        let url = (_a = compareBtn.getAttribute('data-url')) !== null && _a !== void 0 ? _a : '';
        window.location.pathname = url;
    });
};
const clearCompareModal = () => {
    const clearBtn = document.querySelector('.js-clear-compare');
    const compareButtons = document.querySelectorAll('.product-card .compare input');
    if (!compareButtons.length) {
        console.error('The page does not contain products');
        return;
    }
    clearBtn === null || clearBtn === void 0 ? void 0 : clearBtn.addEventListener('click', () => {
        compareButtons.forEach(btn => {
            const parent = btn.closest('.product-card');
            btn.checked = false;
            btn.disabled = false;
            parent === null || parent === void 0 ? void 0 : parent.classList.remove('in-compare');
        });
        if (window.innerWidth < 768) {
            addEmptyItems(2, true);
        }
        else {
            addEmptyItems(3, true);
        }
    });
};
const closeCompareModal = () => {
    const closeBtn = document.querySelector('.js-close-compare');
    const compareModal = document.getElementById('compare-modal');
    const compareInner = document.querySelector('.compare-list');
    if (compareModal && closeBtn && compareInner) {
        closeBtn.addEventListener('click', () => {
            compareModal.classList.remove('open');
            compareInner.innerHTML = '';
            unSelectProduct(null);
        });
    }
};
document.addEventListener('DOMContentLoaded', function (event) {
    closeCompareModal();
    selectProduct();
});
const showCloseFilter = () => {
    const filter = document.querySelector(".section-filter");
    const openFilterBtn = document.querySelector(".js-open-filter");
    const screenW = window.innerWidth;
    const closeFilterBtn = document.querySelector(".js-close-filter");
    const sortList = document.querySelector(".sort-list");
    const bgModal = document.querySelector(".bg-modal");
    if (filter && openFilterBtn && closeFilterBtn && bgModal && screenW < 768) {
        openFilterBtn.addEventListener("click", () => {
            filter.classList.toggle("open");
            if (screenW < 550) {
                if (sortList === null || sortList === void 0 ? void 0 : sortList.classList.contains("open")) {
                    sortList.classList.remove("open");
                    bgModal.classList.add("show");
                }
                else {
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
        });
    }
};
const openFilterBlock = () => {
    const filterBlocks = document.querySelectorAll(".filter-block");
    filterBlocks.forEach(block => {
        const header = block.querySelector("h4[role='btn']");
        const content = block.querySelector(".filter-block__inner");
        if (header && content) {
            header.addEventListener("click", () => {
                const isActive = header.getAttribute("aria-active") === "true";
                header.setAttribute("aria-active", isActive ? "false" : "true");
                content.setAttribute("aria-hidden", isActive ? "true" : "false");
            });
        }
    });
};
const showMoreFilterValues = () => {
    const showMoreBtn = document.querySelector(".js-show-more");
    if (!showMoreBtn)
        return;
    const container = showMoreBtn.parentElement;
    showMoreBtn.addEventListener("click", function () {
        if (container) {
            container.classList.toggle("expanded");
            this.textContent = container.classList.contains("expanded") ? "- moins de marques" : "+ de marques";
        }
    });
};
const stickyFilter = () => {
    const filterTop = document.getElementById("filter-top");
    const sidebar = document.querySelector(".section-filter");
    const sidebarInner = document.querySelector(".section-filter__inner");
    const container = document.querySelector(".section-products");
    const header = document.querySelector("header");
    if (filterTop && sidebar && sidebarInner && container && header) {
        const filterTopOffset = filterTop.offsetTop;
        const sidebarInitialOffset = sidebar.offsetTop - 180;
        window.addEventListener("scroll", () => {
            const scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY >= filterTopOffset - 150) {
                filterTop.classList.add("fixed");
                header.classList.add("header-hidden");
            }
            else {
                filterTop.classList.remove("fixed");
                header.classList.remove("header-hidden");
            }
            if (window.innerWidth >= 768) {
                const containerRect = container.getBoundingClientRect();
                const containerBottom = containerRect.bottom;
                const sidebarHeight = sidebarInner.offsetHeight;
                if (scrollY >= sidebarInitialOffset) {
                    if (containerBottom < sidebarHeight) {
                        sidebarInner.classList.add("absolute");
                        sidebarInner.classList.remove("fixed");
                        sidebarInner.style.top = `${container.offsetHeight - sidebarHeight}px`;
                    }
                    else {
                        sidebarInner.classList.add("fixed");
                        sidebarInner.classList.remove("absolute");
                        sidebarInner.style.top = "80px";
                    }
                }
                else {
                    sidebarInner.classList.remove("absolute", "fixed");
                    sidebarInner.style.top = "";
                }
            }
        });
    }
};
document.addEventListener('DOMContentLoaded', function (event) {
    showCloseFilter();
    openFilterBlock();
    showMoreFilterValues();
    stickyFilter();
});
function getProductPayment() {
    const paymentRadios = document.querySelectorAll('input[name="pay-type"]');
    const payTypeBlocks = document.querySelectorAll(".pay-subtype");
    if (!paymentRadios || !payTypeBlocks)
        return;
    function updatePaymentVisibility() {
        const selectedRadio = document.querySelector('input[name="pay-type"]:checked');
        const selectedValue = selectedRadio ? selectedRadio.value : null;
        const selectedParent = selectedRadio === null || selectedRadio === void 0 ? void 0 : selectedRadio.closest(".option-block");
        const summaryBlocks = document.querySelectorAll(".summary-inner");
        if (!summaryBlocks)
            return;
        payTypeBlocks.forEach((block) => {
            const blockType = block.getAttribute("data-type");
            const payTypeContainer = document.querySelector(".product-options.payment-options");
            if (selectedValue === "cash") {
                payTypeContainer.setAttribute("aria-hidden", "true");
                selectedParent === null || selectedParent === void 0 ? void 0 : selectedParent.classList.add("last");
                // hide summary for products with several payments
                // show block for one price
                summaryBlocks.forEach(block => {
                    block.setAttribute("aria-hidden", "true");
                    if (block.classList.contains("pay-cash"))
                        block.setAttribute("aria-hidden", "false");
                });
            }
            else {
                payTypeContainer.setAttribute("aria-hidden", "false");
                selectedParent === null || selectedParent === void 0 ? void 0 : selectedParent.classList.remove("last");
                if (blockType === selectedValue) {
                    block.setAttribute("aria-hidden", "false");
                }
                else {
                    block.setAttribute("aria-hidden", "true");
                }
                // show summary for products with several payments
                // hide block for one price
                summaryBlocks.forEach(block => {
                    block.setAttribute("aria-hidden", "false");
                    if (block.classList.contains("pay-cash"))
                        block.setAttribute("aria-hidden", "true");
                });
            }
        });
    }
    // Run on page load to set the correct visibility
    updatePaymentVisibility();
    // Listen for changes on the radio inputs
    paymentRadios.forEach((radio) => {
        radio.addEventListener("change", updatePaymentVisibility);
    });
}
document.addEventListener("DOMContentLoaded", () => {
    getProductPayment();
});
function productPhotoChange() {
    const colorButtons = document.querySelectorAll("input[name='color']");
    const swiperContainer = document.querySelector(".product-page__slider .swiper-wrapper");
    if (!swiperContainer || !colorButtons)
        return;
    function updateGallery(color) {
        var _a;
        if (!swiperContainer)
            return;
        // Convert colors with 2 words, ex. "Bleu nuit" to "bleu-nuit"
        const formattedColor = color.toLowerCase().replace(/\s+/g, "-");
        const images = swiperContainer.querySelectorAll("img");
        const toCartBtn = document.querySelector(".add-to-cart");
        images.forEach((img) => {
            const link = img.closest("a");
            const newImage = img.getAttribute(`data-${formattedColor}`);
            if (newImage && img.src !== newImage) {
                img.style.opacity = "0"; // Start fade out
                setTimeout(() => {
                    img.src = newImage;
                    link === null || link === void 0 ? void 0 : link.setAttribute("href", newImage);
                    img.setAttribute("alt", `Smartphone color: ${color}`);
                    img.style.opacity = "1"; // Fade in after src change
                }, 300); // Wait for fade out duration
            }
        });
        // update image on btn
        toCartBtn === null || toCartBtn === void 0 ? void 0 : toCartBtn.setAttribute("data-image", (_a = images[0]) === null || _a === void 0 ? void 0 : _a.getAttribute(`data-${formattedColor}`));
        // Refresh Swiper to update images
        const swiperInstance = window.swiper;
        if (swiperInstance) {
            swiperInstance.update();
        }
    }
    colorButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const selectedColor = button.value;
            if (selectedColor) {
                updateGallery(selectedColor);
            }
        });
    });
}
document.addEventListener("DOMContentLoaded", () => {
    productPhotoChange();
});
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
    const body = document.querySelector("body");
    if (!sortActive || !sortList || !sortInput || !sortHeadActive || !sectionFilter || !body || !bgModal)
        return;
    // Toggle dropdown visibility
    sortActive.addEventListener("click", () => {
        sortActive.classList.toggle("open");
        if (sortList.classList.contains("open")) {
            sortList.classList.remove("open");
            if (screenW >= 550)
                sortList.style.maxHeight = "0px";
        }
        else {
            sortList.classList.add("open");
            if (screenW >= 550)
                sortList.style.maxHeight = `${sortList.scrollHeight}px`;
        }
        if (screenW < 550) {
            if (sectionFilter.classList.contains("open")) {
                sectionFilter.classList.remove("open");
                bgModal.classList.add("show");
                body.classList.add("lock");
            }
            else {
                bgModal.classList.toggle("show");
                body.classList.toggle("lock");
            }
        }
        else {
            sectionFilter.classList.remove("open");
            bgModal.classList.remove("show");
            body.classList.remove("lock");
        }
    });
    if (screenW < 550 && sortCloseBtn) {
        sortCloseBtn.addEventListener("click", () => {
            sortList.classList.remove("open");
            sortActive.classList.remove("open");
            bgModal.classList.remove("show");
            body.classList.remove("lock");
        });
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
            sortInput.value = button.getAttribute("data-id") || "";
            if (screenW < 550)
                sortHeadActive.textContent = button.textContent || "";
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
            if (screenW >= 550)
                sortList.style.maxHeight = "0px";
        }
    });
};
document.addEventListener('DOMContentLoaded', function (event) {
    sortDropdown();
});
function initTabs() {
    var _a;
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabPanels = document.querySelectorAll(".tab-panel");
    const tabSelect = document.querySelector(".product-top__tabs-select");
    const tabSwitch = document.querySelector(".product-top__tabs-switch");
    function activateTab(tabId) {
        tabButtons.forEach(button => {
            button.classList.toggle("active", button.dataset.tab === tabId);
        });
        tabPanels.forEach(panel => {
            if (panel.id === tabId) {
                panel.setAttribute("aria-hidden", "false");
                // Get panel position and subtract offset (e.g., 20px for spacing)
                const offset = 100;
                const panelTop = panel.getBoundingClientRect().top + window.scrollY - offset;
                // Smooth scroll
                window.scrollTo({ top: panelTop, behavior: "smooth" });
            }
            else {
                panel.setAttribute("aria-hidden", "true");
            }
        });
        // Update the select text on mobile
        if (tabSelect) {
            const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
            if (activeButton) {
                tabSelect.textContent = activeButton.textContent;
                tabSelect.classList.remove("active");
            }
        }
    }
    // Handle tab button clicks
    tabButtons.forEach(button => {
        button.addEventListener("click", () => {
            if (button.dataset.tab) {
                activateTab(button.dataset.tab);
            }
            // Close mobile menu after selection
            if (tabSwitch) {
                tabSwitch.classList.remove("open");
                tabSelect.classList.remove("active");
            }
        });
    });
    // Toggle tab menu on mobile
    tabSelect === null || tabSelect === void 0 ? void 0 : tabSelect.addEventListener("click", () => {
        tabSwitch === null || tabSwitch === void 0 ? void 0 : tabSwitch.classList.toggle("open");
        tabSelect.classList.toggle("active");
    });
    // Ensure the first tab is active on load
    const firstTab = (_a = tabButtons[0]) === null || _a === void 0 ? void 0 : _a.dataset.tab;
    if (firstTab)
        activateTab(firstTab);
}
document.addEventListener("DOMContentLoaded", () => {
    initTabs();
});
document.addEventListener('DOMContentLoaded', function (event) {
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
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
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
        autoHeight: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
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
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 5,
            },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    const recommendSlider = new Swiper(".recommend-slider.swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        autoHeight: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                autoHeight: false,
                slidesPerView: 3,
            },
            1200: {
                autoHeight: false,
                slidesPerView: 4,
            },
            1360: {
                autoHeight: false,
                slidesPerView: 5,
            },
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
    const productImagesSlider = new Swiper(".product-page__slider .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    if (!homeTopSlider)
        return;
});
function stickyElement(element, hideHeader) {
    if (!element)
        return;
    const elementRect = element.getBoundingClientRect();
    const header = document.querySelector("header");
    const originalTop = elementRect.top + window.scrollY - 70;
    const stickyClass = "sticky";
    function handleScroll() {
        if (window.scrollY >= originalTop) {
            if (!element.classList.contains(stickyClass)) {
                element.classList.add(stickyClass);
                if (hideHeader)
                    header === null || header === void 0 ? void 0 : header.classList.add("header-hidden");
            }
        }
        else {
            if (element.classList.contains(stickyClass)) {
                element.classList.remove(stickyClass);
                element.style.transform = "";
                if (hideHeader)
                    header === null || header === void 0 ? void 0 : header.classList.remove("header-hidden");
            }
        }
    }
    window.addEventListener("scroll", handleScroll);
}
// Example usage:
document.addEventListener("DOMContentLoaded", () => {
    const stickyProductTop = document.querySelector(".product-top");
    const stickyMobileTabs = document.querySelector(".product-top__tabs");
    if (stickyProductTop && window.innerWidth >= 1024) {
        stickyElement(stickyProductTop, true);
    }
    if (stickyMobileTabs && window.innerWidth < 1024) {
        stickyElement(stickyMobileTabs, true);
    }
});
function stickySidebar(leftElement, rightElement, offset = 20) {
    function onScroll() {
        const leftRect = leftElement.getBoundingClientRect();
        const rightRect = rightElement.getBoundingClientRect();
        const rightBottom = rightElement.offsetTop + rightElement.offsetHeight;
        const scrollY = window.scrollY || window.pageYOffset;
        const leftHeight = leftElement.offsetHeight;
        if (scrollY + offset > rightElement.offsetTop && scrollY + leftHeight + offset < rightBottom) {
            leftElement.style.position = "fixed";
            leftElement.style.top = `${offset}px`;
            leftElement.classList.add("sticky");
        }
        else if (scrollY + leftHeight + offset >= rightBottom) {
            leftElement.style.position = "absolute";
            leftElement.style.top = `${rightElement.offsetHeight - leftHeight}px`;
        }
        else {
            leftElement.style.position = "static";
            leftElement.classList.remove("sticky");
        }
    }
    window.addEventListener("scroll", onScroll);
    window.addEventListener("resize", onScroll); // Handle screen resizing
    onScroll(); // Call once to set the initial position
}
// Example usage:
const left = document.querySelector(".product-page__slider .inner");
const right = document.querySelector(".product-info .product-info__inner");
if (left && right && window.innerWidth >= 768) {
    stickySidebar(left, right, 100);
}
