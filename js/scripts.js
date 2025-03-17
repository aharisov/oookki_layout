"use strict";
function addToCart() {
    const modal = document.getElementById("in-cart-modal");
    const modalBg = document.querySelector(".bg-modal");
    const modalTitle = document.querySelector(".modal-product .name");
    const modalImage = document.querySelector(".modal-picture img");
    const continueShopping = document.querySelector(".continue");
    const cartCounter = document.querySelector(".btn-cart .cnt");
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const body = document.querySelector("body");
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
        body.classList.remove("lock");
    }
    // Event listeners for add to cart buttons
    addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
            const productTitle = this.getAttribute("data-title");
            const productImage = this.getAttribute("data-image");
            updateModal(productTitle, productImage);
            body.classList.add("lock");
        });
    });
    continueShopping.addEventListener("click", closeModalHandler);
}
document.addEventListener("DOMContentLoaded", () => {
    addToCart();
});
async function readXMLFile(filePath) {
    var _a, _b, _c, _d, _e, _f, _g, _h, _j, _k, _l, _m;
    const response = await fetch(filePath);
    const text = await response.text();
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(text, "text/xml");
    const productNode = xmlDoc.querySelector("product");
    if (productNode) {
        const id = (_b = (_a = productNode.querySelector("id")) === null || _a === void 0 ? void 0 : _a.textContent) === null || _b === void 0 ? void 0 : _b.trim();
        const manufacturerName = (_d = (_c = productNode.querySelector("manufacturer_name")) === null || _c === void 0 ? void 0 : _c.textContent) === null || _d === void 0 ? void 0 : _d.trim();
        const reference = (_f = (_e = productNode.querySelector("reference")) === null || _e === void 0 ? void 0 : _e.textContent) === null || _f === void 0 ? void 0 : _f.trim();
        const price = (_h = (_g = productNode.querySelector("price")) === null || _g === void 0 ? void 0 : _g.textContent) === null || _h === void 0 ? void 0 : _h.trim();
        const productName = (_k = (_j = productNode.querySelector("name language")) === null || _j === void 0 ? void 0 : _j.textContent) === null || _k === void 0 ? void 0 : _k.trim();
        const description = (_m = (_l = productNode.querySelector("description language")) === null || _l === void 0 ? void 0 : _l.textContent) === null || _m === void 0 ? void 0 : _m.trim();
        console.log("Product ID:", id);
        console.log("Manufacturer:", manufacturerName);
        console.log("Reference:", reference);
        console.log("Price:", price);
        console.log("Name:", productName);
        console.log("Description:", description);
    }
    else {
        console.error("No product data found.");
    }
}
// Usage example:
//readXMLFile("/response.xml");
// TODO: add items to the page from CMS API after choosing them in modal
const removeFromComparePage = () => {
    const pageButtons = document.querySelectorAll(".remove-from-compare");
    const modalButtons = document.querySelectorAll(".compare-search-modal .js-compare-remove");
    if (pageButtons) {
        pageButtons.forEach(btn => {
            btn.addEventListener("click", function () {
                removeCompareItem(this.getAttribute("data-id"));
                toggleSelectButtonsState();
            });
        });
    }
    if (modalButtons) {
        modalButtons.forEach(btn => {
            btn.addEventListener("click", function () {
                const compareItem = this.closest(".compare-item");
                if (!compareItem)
                    return;
                const colIndex = compareItem.getAttribute("aria-colindex") || "";
                const compareItemId = this.getAttribute("data-id");
                const deselectedItem = document.querySelector(`.compare-search-modal .model-item[data-id="${compareItemId}"]`);
                compareItem.innerHTML = "";
                compareItem.classList.add("empty");
                compareItem.removeAttribute("data-id");
                removeCompareItem(compareItemId);
                changeCompareButtonState();
                toggleSelectButtonsState();
                deselectedItem === null || deselectedItem === void 0 ? void 0 : deselectedItem.classList.remove("active");
                localStorage.setItem("colIndex", colIndex);
            });
        });
    }
};
/**
 * Removes product from compare page
 * @param id - product id
 */
const removeCompareItem = (id) => {
    const items = document.querySelectorAll(`.compare-item[data-id="${id}"]`);
    if (!items)
        return;
    items.forEach((item) => {
        let itemDataId = item.getAttribute("data-id");
        if (itemDataId == id) {
            item.innerHTML = "";
            item.classList.add("empty");
        }
    });
    addSelectButton(".compare-top .compare-item.empty");
    removeEmptyLines();
};
/**
 * Adds button for adding new product to compare page
 * @param element - parent element with compare items
 */
const addSelectButton = (element) => {
    const items = document.querySelectorAll(element);
    if (!items)
        return;
    items.forEach(item => {
        const newButton = document.createElement("button");
        newButton.classList.add("open-modal");
        newButton.setAttribute("data-modal", "compare-modal");
        newButton.innerHTML = `<span class="icon">
            <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"></path></svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com -->
            </span>
            <span>Ajouter</span>`;
        item.innerHTML = "";
        item.append(newButton);
        if (!item.classList.contains("empty")) {
            item.classList.add("empty");
        }
    });
    openModal();
    getColumnNumber();
};
const countEmptyCells = () => {
    const topEmptyItems = document.querySelectorAll(".compare-top .compare-item.empty");
    return topEmptyItems.length;
};
const countModalEmptyCells = () => {
    const emptyCells = document.querySelectorAll(".compare-search-modal .compare-item.empty");
    return emptyCells.length;
};
const initEmptyCells = () => {
    const emptyCells = document.querySelectorAll(".compare-search-modal .compare-item.empty");
    if (emptyCells.length == 0)
        return;
    if (window.innerWidth < 768) {
        emptyCells[emptyCells.length - 1].remove();
    }
};
const toggleSelectButtonsState = () => {
    const compareItems = document.querySelectorAll(".compare-search-modal .model-item");
    if (countModalEmptyCells() == 0) {
        compareItems.forEach(item => {
            if (!item.classList.contains("active")) {
                item.disabled = true;
            }
        });
    }
    else {
        compareItems.forEach(item => {
            item.disabled = false;
        });
    }
};
const removeEmptyLines = () => {
    const lines = document.querySelectorAll(".compare-line");
    if (!lines)
        return;
    lines.forEach((line) => {
        if (countEmptyCells() == 3) {
            if (!line.classList.contains("compare-top")) {
                line.remove();
            }
        }
    });
    addSelectButton(".compare-top .compare-item.empty");
};
const getColumnNumber = () => {
    const buttons = document.querySelectorAll(".compare-wrap .compare-top .open-modal");
    if (!buttons)
        return;
    buttons.forEach((btn) => {
        var _a;
        const colIndex = (_a = btn.closest(".compare-item")) === null || _a === void 0 ? void 0 : _a.getAttribute("aria-colindex");
        btn.addEventListener("click", () => {
            localStorage.setItem("colIndex", colIndex);
        });
    });
};
const changeCompareButtonState = () => {
    const button = document.querySelector(".compare-search-modal .js-open-compare");
    const compareItems = document.querySelectorAll(".compare-search-modal .compare-item.empty");
    if (!button)
        return;
    if (compareItems.length <= 1) {
        button.disabled = false;
    }
    else {
        button.disabled = true;
    }
};
const closeCompareSearchModal = () => {
    const button = document.querySelector(".compare-search-modal .js-open-compare");
    const modal = document.querySelector(".compare-search-modal");
    const modalBg = document.querySelector(".bg-modal");
    if (!button)
        return;
    button.addEventListener("click", () => {
        modal.classList.remove("show");
        modalBg.classList.remove("show");
    });
};
const setColIndex = () => {
    const emptyItems = document.querySelectorAll(".compare-search-modal .compare-item.empty");
    if (emptyItems.length > 0) {
        localStorage.setItem("colIndex", emptyItems[0].getAttribute("aria-colindex") || "");
    }
};
const onChangeButtonClick = () => {
    const buttons = document.querySelectorAll(".compare-products button.open-modal");
    if (!buttons)
        return;
    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            const parent = this.closest(".compare-item");
            const colIndex = parent.getAttribute("aria-colindex");
            const itemId = parent.getAttribute("data-id");
            const modalItem = document.querySelector(`.compare-search-modal .compare-item[data-id='${itemId}']`);
            const removeButton = document.querySelector(`.compare-top .remove-from-compare[data-id='${itemId}']`);
            localStorage.setItem("colIndex", colIndex || "");
            modalItem.innerHTML = "";
            modalItem.classList.add("empty");
            removeButton.click();
        });
    });
};
const compareSearch = () => {
    const brands = {
        Apple: [
            { id: "13", name: "iPhone 13", image: "images/brands-logo/iphone13.png", brand: "Apple" },
            { id: "14", name: "iPhone 14", image: "images/brands-logo/iphone14.png", brand: "Apple" },
            { id: "15", name: "iPhone 15", image: "images/brands-logo/iphone15.png", brand: "Apple" },
            { id: "1", name: "iPhone 16 Plus", image: "images/brands-logo/iphone16plus.png", brand: "Apple" },
            { id: "16", name: "iPhone 16 Pro", image: "images/brands-logo/iphone16pro.png", brand: "Apple" }
        ],
        Samsung: [
            { id: "23", name: "Galaxy S23", image: "images/brands-logo/s23.png", brand: "Samsung" },
            { id: "2", name: "Galaxy S25 Ultra", image: "images/brands-logo/s24.png", brand: "Samsung" },
            { id: "55", name: "Galaxy A55", image: "images/brands-logo/a55.png", brand: "Samsung" }
        ],
        Xiaomi: [
            { id: "33", name: "Redmi Note 13", image: "images/brands-logo/note13.png", brand: "Xiaomi" },
            { id: "34", name: "Redmi 12", image: "images/brands-logo/redmi12.png", brand: "Xiaomi" },
            { id: "35", name: "14", image: "images/brands-logo/x14.png", brand: "Xiaomi" }
        ]
    };
    const brandLogos = [
        "images/brands-logo/apple.png",
        "images/brands-logo/samsung.png",
        "images/brands-logo/xiaomi.png"
    ];
    const searchInput = document.querySelector(".compare-search-modal input");
    const brandList = document.querySelector(".compare-search-modal .brand-list");
    const modelList = document.querySelector(".compare-search-modal .model-list");
    const returnBtn = document.querySelector(".compare-search-modal .return");
    const compareNote = document.querySelector(".compare-search-modal .note span");
    if (!searchInput || !brandList || !modelList || !returnBtn)
        return;
    if (window.innerWidth < 768) {
        compareNote.innerHTML = "2";
    }
    else {
        compareNote.innerHTML = "3";
    }
    function displayBrands() {
        brandList.innerHTML = "";
        Object.keys(brands).forEach((brand, index) => {
            const icon = document.createElement("img");
            icon.setAttribute("src", brandLogos[index]);
            const button = document.createElement("button");
            button.textContent = brand;
            button.className = "brand";
            button.onclick = () => {
                brandList.classList.add("hidden");
                returnBtn.classList.add("active");
                getSelectedItems();
                displayModels(brand);
                toggleSelectButtonsState();
            };
            button.appendChild(icon);
            brandList.appendChild(button);
        });
    }
    function displayModels(brand) {
        modelList.innerHTML = "";
        modelList.classList.remove("hidden");
        brands[brand].forEach((product) => {
            const item = document.createElement("button");
            item.innerHTML = `<img src="${product.image}" alt="${product.name}"> ${product.name}`;
            item.className = "model-item";
            item.setAttribute("data-id", product.id);
            let comparedProducts = JSON.parse(localStorage.getItem("comparedProducts") || "");
            if (comparedProducts.includes(product.id)) {
                item.classList.add("active");
            }
            else {
                item.classList.remove("active");
            }
            item.onclick = () => {
                if (item.classList.contains("active")) {
                    item.classList.remove("active");
                    selectItem(product, false);
                }
                else {
                    item.classList.add("active");
                    selectItem(product, true);
                }
                changeCompareButtonState();
            };
            modelList.appendChild(item);
        });
    }
    function getSelectedItems() {
        const selectedItems = document.querySelectorAll(".compare-search-modal .compare-item:not(.empty)");
        const idList = [];
        localStorage.setItem("comparedProducts", "");
        selectedItems.forEach(item => {
            idList.push(item.getAttribute("data-id") || "");
        });
        localStorage.setItem("comparedProducts", JSON.stringify(idList));
    }
    function selectItem(product, select) {
        if (select) {
            const colIndex = localStorage.getItem("colIndex");
            const compareBox = document.querySelector(`.compare-search-modal .compare-item[aria-colindex='${colIndex}']`);
            if (!compareBox)
                return;
            compareBox.classList.remove("empty");
            compareBox.setAttribute("data-id", product.id);
            compareBox.innerHTML = `
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
            setColIndex();
        }
        else {
            const compareBox = document.querySelector(`.compare-search-modal .compare-item[data-id='${product.id}']`);
            if (!compareBox)
                return;
            compareBox.innerHTML = "";
            compareBox.classList.add("empty");
            compareBox.removeAttribute("data-id");
            localStorage.setItem("colIndex", compareBox.getAttribute("aria-colindex") || "");
        }
        removeFromComparePage();
        toggleSelectButtonsState();
    }
    function searchModels() {
        const query = searchInput.value.toLowerCase();
        modelList.innerHTML = "";
        modelList.classList.remove("hidden");
        let results = [];
        if (query) {
            Object.entries(brands).forEach(([_, models]) => {
                results = results.concat(models.filter((model) => model.name.toLowerCase().includes(query)));
            });
            if (results.length === 0) {
                modelList.innerHTML = "<p>Aucun résultat trouvé</p>";
            }
            else {
                results.forEach(({ id, name, image }) => {
                    const item = document.createElement("button");
                    item.innerHTML = `<img src="${image}" alt="${name}"> ${name}`;
                    item.className = "model-item";
                    item.setAttribute("data-id", id);
                    // item.onclick = () => selectItem(item);
                    modelList.appendChild(item);
                });
            }
        }
        else {
            displayBrands();
            modelList.classList.add("hidden");
        }
    }
    searchInput.addEventListener("input", searchModels);
    returnBtn.addEventListener("click", () => {
        brandList.classList.remove("hidden");
        modelList.classList.add("hidden");
        returnBtn.classList.remove("active");
    });
    displayBrands();
};
const clearComparePage = () => {
    const clearBtn = document.querySelector(".compare-search-modal .js-clear-compare");
    const modalItems = document.querySelectorAll(".compare-search-modal .compare-item");
    const pageItems = document.querySelectorAll(".compare-wrap .compare-line:not(.compare-top)");
    if (!clearBtn || !modalItems || !pageItems)
        return;
    clearBtn === null || clearBtn === void 0 ? void 0 : clearBtn.addEventListener('click', () => {
        modalItems.forEach((item) => {
            item.innerHTML = "";
            item.classList.add("empty");
            item.removeAttribute("data-id");
        });
        pageItems.forEach(item => {
            item.remove();
        });
        addSelectButton(".compare-top .compare-item");
        changeCompareButtonState();
    });
};
initEmptyCells();
compareSearch();
removeFromComparePage();
getColumnNumber();
changeCompareButtonState();
closeCompareSearchModal();
clearComparePage();
onChangeButtonClick();
const validateEmail = (email) => {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
};
const validateBirthDate = (birthDate) => {
    const birthDateRegex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;
    if (!birthDateRegex.test(birthDate))
        return false;
    const [day, month, year] = birthDate.split("/").map(Number);
    const dateObj = new Date(year, month - 1, day);
    return (dateObj.getFullYear() === year &&
        dateObj.getMonth() === month - 1 &&
        dateObj.getDate() === day);
};
const formValidation = (formClass, submitBtn, input, checkRadioGroup, nextEvent) => {
    const form = document.querySelector(formClass);
    const submitButton = document.querySelector(submitBtn);
    const inputs = document.querySelectorAll(input);
    const requiredCheckboxes = document.querySelectorAll("input[type='checkbox'][required]");
    if (!form || !submitButton || inputs.length === 0)
        return;
    // create and append error message
    const showErrorMessage = (input, message) => {
        const parent = input.closest(".form-line");
        if (!parent)
            return;
        let errorMessage = parent.querySelector(".error-message");
        if (!errorMessage) {
            errorMessage = document.createElement("span");
            errorMessage.classList.add("error-message");
            parent.appendChild(errorMessage);
        }
        errorMessage.innerHTML = `<i>!</i> ${message}`;
        parent.classList.add("error");
    };
    // remove error message
    const removeErrorMessage = (input) => {
        const parent = input.closest(".form-line");
        if (!parent)
            return;
        const errorMessage = parent.querySelector(".error-message");
        if (errorMessage)
            errorMessage.remove();
        parent.classList.remove("error");
    };
    const handleBlur = (event) => {
        const input = event.target;
        validateInput(input);
        checkInputs();
    };
    const handleCheckbox = (event) => {
        const input = event.target;
        validateInput(input);
        checkInputs();
    };
    // Validate a single input field
    const validateInput = (input) => {
        var _a;
        const parent = input.closest(".form-line");
        if (!parent)
            return false;
        const fieldName = (_a = parent.querySelector(".form-line__title")) === null || _a === void 0 ? void 0 : _a.getAttribute("data-name");
        if (input.hasAttribute("required") && !input.value.trim()) {
            showErrorMessage(input, `Veuillez renseigner votre ${fieldName}`);
            return false;
        }
        if (input.type === "email" && !validateEmail(input.value)) {
            showErrorMessage(input, "Veuillez entrer un email valide");
            return false;
        }
        if ((input.getAttribute("name") === "birthDate" || input.getAttribute("name") === "birthday") && !validateBirthDate(input.value)) {
            showErrorMessage(input, "Veuillez entrer une date valide au format JJ/MM/AAAA");
            return false;
        }
        removeErrorMessage(input);
        return true;
    };
    // Check if all required inputs are filled
    const checkInputs = () => {
        let allValid = true;
        // validate radio buttons
        if (checkRadioGroup) {
            if (!isRadioGroupSelected("sex")) {
                let radioElem = document.querySelector(".radio-group");
                if (!radioElem)
                    return false;
                showErrorMessage(radioElem, "Veuillez sélectionner votre civilité");
                allValid = false;
                return false;
            }
        }
        // validate inputs
        inputs.forEach(input => {
            if (checkRadioGroup) {
                handleRadioGroup("sex");
                if (!input.value.trim() && isRadioGroupSelected("sex")) {
                    allValid = false;
                    return false;
                }
            }
            else {
                if (input.hasAttribute("required") && !input.value.trim()) {
                    allValid = false;
                    // input.addEventListener("input", handleBlur);
                    validateInput(input);
                    return false;
                }
                else {
                    allValid = true;
                }
            }
        });
        // validate checkboxes
        if (requiredCheckboxes) {
            requiredCheckboxes.forEach(checkbox => {
                if (!checkbox.checked) {
                    showErrorMessage(checkbox, "Vous devez accepter les conditions");
                    allValid = false;
                }
                else {
                    removeErrorMessage(checkbox);
                }
            });
        }
        submitButton.disabled = !allValid;
        return allValid;
    };
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        if (checkInputs()) {
            nextEvent();
        }
    });
    // event Listeners
    inputs.forEach(input => {
        input.addEventListener("input", handleBlur); // Re-check when typing
        input.addEventListener("blur", handleBlur);
    });
    requiredCheckboxes.forEach(checkbox => {
        checkbox.addEventListener("input", handleCheckbox);
    });
    submitButton.addEventListener("click", () => {
        if (!checkInputs()) {
            const offset = 100;
            const sectionTop = form.getBoundingClientRect().top + window.scrollY - offset;
            // Smooth scroll
            window.scrollTo({ top: sectionTop, behavior: "smooth" });
        }
    });
};
const login = () => {
    // If authentication is successful, save a cookie
    localStorage.setItem("authenticated", "true");
    // Redirect user after login
    window.location.href = "index.php";
};
const restoreSuccess = () => {
    const successMess = document.querySelector(".form-note.success");
    const email = document.querySelector(".restore-form input");
    const span = successMess === null || successMess === void 0 ? void 0 : successMess.querySelector("span");
    if (!successMess || !email || !span)
        return;
    span.innerHTML = email === null || email === void 0 ? void 0 : email.value;
    successMess.classList.add("active");
};
const updatedAddress = () => {
    window.location.href = "profile-addresses.php";
};
formValidation(".order-wrap", ".next-step", ".order-wrap input:required", true, () => showNextStep);
formValidation(".signin-form", "#submit-login", ".signin-form input:required", false, () => login());
formValidation(".signup-form", "#submit-register", ".signup-form .form-line__title + input:required", false, () => login());
formValidation(".restore-form", "#submit-restore", ".restore-form input:required", false, () => restoreSuccess());
formValidation(".address-form", "#submit-address", ".address-form input:required", false, () => updatedAddress());
// common accordion
const accordion = () => {
    const accordionHeaders = document.querySelectorAll(".accordion-head");
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(el => {
            el.addEventListener("click", function () {
                const accordionItem = this.parentElement;
                const isActive = accordionItem.classList.contains("active");
                const isOption = accordionItem.classList.contains("config-option");
                if (!accordionItem)
                    return;
                const accordionContainer = accordionItem.closest(".accordion-container");
                const accordionShowAll = accordionItem.closest(".accordion-show-all");
                // Close all accordion items
                if (accordionContainer) {
                    accordionContainer.querySelectorAll(".accordion-item").forEach(item => {
                        item.classList.remove("active");
                    });
                }
                else if (accordionShowAll) {
                }
                else {
                    document.querySelectorAll(".accordion-item").forEach(item => {
                        item.classList.remove("active");
                    });
                }
                if (accordionShowAll) {
                    accordionItem.classList.toggle("active");
                }
                else {
                    // Toggle only the clicked one
                    if (!isActive || isOption) {
                        accordionItem.classList.add("active");
                    }
                }
            });
        });
    }
};
// scroll to top button
const scrollToTop = () => {
    const scrollToTopBtn = document.querySelector(".up-btn");
    if (!scrollToTopBtn)
        return;
    // Show button when user scrolls down
    window.addEventListener("scroll", function () {
        if (window.scrollY > 400) {
            scrollToTopBtn.style.opacity = "1";
        }
        else {
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
};
// show/hide search input in mobile version
const openCloseSearch = () => {
    const btn = document.querySelector('.js-open-search');
    const searchForm = document.querySelector('.header__search');
    if (!btn || !searchForm)
        return;
    btn.addEventListener('click', function () {
        searchForm.classList.toggle('active');
    });
};
// open modal windows
const openModal = () => {
    const body = document.querySelector("body");
    const bg = document.querySelector(".bg-modal");
    const openButtons = document.querySelectorAll("[data-modal]");
    const closeButtons = document.querySelectorAll(".modal .modal-close");
    if (!bg || !openButtons || !closeButtons)
        return;
    openButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const modalId = this.getAttribute("data-modal");
            if (!modalId)
                return;
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
};
// toggle password visibility
const showHidePass = (input) => {
    const passwordInput = document.getElementById(input);
    if (!passwordInput)
        return;
    const parent = passwordInput.closest(".inner");
    if (!parent)
        return;
    const toggleButton = parent.querySelector(".js-toggle-pass");
    if (!toggleButton)
        return;
    toggleButton.addEventListener("click", () => {
        let iconHide = toggleButton.querySelector('.fa-eye-slash');
        let iconShow = toggleButton.querySelector('.fa-eye');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            iconHide.style.display = "block";
            iconShow.style.display = "none";
        }
        else {
            passwordInput.type = "password";
            iconHide.style.display = "none";
            iconShow.style.display = "block";
        }
    });
};
document.addEventListener('DOMContentLoaded', function (event) {
    accordion();
    scrollToTop();
    openCloseSearch();
    openModal();
    showHidePass("field-password");
    showHidePass("field-new_password");
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
const inputPhone = document.getElementById("phone-number");
const inputRio = document.getElementById("phone-rio");
const inputBirthDate = document.getElementById("birth-date");
const inputPostalCode = document.getElementById("postal-code");
if (inputPhone)
    applyInputMask(inputPhone, "00 00 00 00 00");
if (inputRio)
    applyInputMask(inputRio, "00 X XXXXXX 0X0");
if (inputBirthDate)
    applyInputMask(inputBirthDate, "00/00/0000");
if (inputPostalCode)
    applyInputMask(inputPostalCode, "00000");
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
const updateOrderPlan = () => {
    const changeButton = document.querySelector(".js-change-plan");
    if (!changeButton)
        return;
    changeButton.addEventListener("click", () => {
        var _a, _b, _c, _d, _e, _f, _g, _h, _j, _k;
        const modal = document.getElementById("change-plan-modal");
        const bgModal = document.querySelector(".bg-modal");
        if (!modal && !bgModal)
            return;
        const dataId = modal === null || modal === void 0 ? void 0 : modal.getAttribute("data-id");
        const activePack = modal === null || modal === void 0 ? void 0 : modal.querySelector(".pack-item.active");
        if (!activePack)
            return;
        // Extract data from the active pack
        const title = ((_b = (_a = activePack.querySelector(".pack-item__title")) === null || _a === void 0 ? void 0 : _a.textContent) === null || _b === void 0 ? void 0 : _b.trim()) || "N/A";
        const offer = ((_d = (_c = activePack.querySelector(".pack-item__offer")) === null || _c === void 0 ? void 0 : _c.textContent) === null || _d === void 0 ? void 0 : _d.trim()) || "";
        const priceNum = ((_f = (_e = activePack.querySelector(".pack-item__price .num")) === null || _e === void 0 ? void 0 : _e.textContent) === null || _f === void 0 ? void 0 : _f.trim()) || "0";
        const priceMore = ((_h = (_g = activePack.querySelector(".pack-item__price .more span")) === null || _g === void 0 ? void 0 : _g.textContent) === null || _h === void 0 ? void 0 : _h.trim()) || "€ 0";
        const priceNote = ((_k = (_j = activePack.querySelector(".pack-item__price .note")) === null || _j === void 0 ? void 0 : _j.textContent) === null || _k === void 0 ? void 0 : _k.trim()) || "";
        // Update the .summary-product block
        const summaryProduct = document.querySelector(`.summary-product[data-id="${dataId}"]`);
        if (!summaryProduct)
            return;
        summaryProduct.querySelector(".product-title a").textContent = title;
        summaryProduct.querySelector(".product-props").textContent = `${priceNote} - ${offer}`;
        summaryProduct.querySelector(".product-note").textContent = `${priceNum}${priceMore}/mois`;
        modal === null || modal === void 0 ? void 0 : modal.classList.remove("show");
        bgModal === null || bgModal === void 0 ? void 0 : bgModal.classList.remove("show");
    });
};
const choosePlan = () => {
    const planList = document.querySelectorAll(".packs-list-modal .pack-item");
    const changeBtn = document.querySelector(".js-change-plan");
    if (!planList || !changeBtn)
        return;
    planList.forEach(plan => {
        plan.addEventListener("click", function () {
            // Remove "active" class from all plans
            planList.forEach(p => p.classList.remove("active"));
            // Add "active" to clicked plan
            this.classList.add("active");
            // Enable the change button
            changeBtn.disabled = false;
        });
    });
};
choosePlan();
updateOrderPlan();
// radio buttons select on order step 1
const handleRadioSelection = () => {
    const cardRadios = document.querySelectorAll("input[name='card']");
    const phoneSaveRadios = document.querySelectorAll("input[name='phone_save']");
    const abonRadios = document.querySelectorAll("input[name='abon']");
    const phoneNumber = document.querySelector("#phone-number");
    const phoneRio = document.querySelector("#phone-rio");
    cardRadios.forEach(radio => radio.addEventListener("change", updatePayBlock));
    [...cardRadios, ...phoneSaveRadios, ...abonRadios].forEach(radio => radio.addEventListener("change", updateButtonState));
    if (phoneNumber)
        phoneNumber.addEventListener("keyup", updateButtonState);
    if (phoneRio)
        phoneRio.addEventListener("keyup", updateButtonState);
};
// update pay block with the value of chosen sim card
const updatePayBlock = () => {
    const payBlockList = document.querySelectorAll(".pay-summary .pay-block.all-info ul");
    const selectedCard = document.querySelector("input[name='card']:checked");
    if (!payBlockList || !selectedCard)
        return;
    // Remove existing "offer" entry if any
    payBlockList.forEach(el => {
        const existingOffer = el.querySelector(".card-offer");
        if (existingOffer) {
            existingOffer.remove();
        }
    });
    payBlockList.forEach(el => {
        // Create new list item for selected card
        const newListItem = document.createElement("li");
        newListItem.classList.add("card-offer");
        newListItem.innerHTML = `<span>${selectedCard.value}</span><span>offerte</span>`;
        // Append new list item to the list
        el.appendChild(newListItem);
    });
};
// verify if all radios are checked in order step 1
const updateButtonState = () => {
    var _a, _b;
    const phoneSaveChecked = ((_a = document.querySelector("input[name='phone_save']:checked")) === null || _a === void 0 ? void 0 : _a.value) === "yes";
    const abonChecked = ((_b = document.querySelector("input[name='abon']:checked")) === null || _b === void 0 ? void 0 : _b.value) === "yes";
    const phoneNumber = document.querySelector("#phone-number");
    const phoneRio = document.querySelector("#phone-rio");
    const nextStepButton = document.querySelector(".next-step");
    if (!nextStepButton || !phoneNumber || !phoneRio)
        return;
    // Check if all radio groups have a selection
    const allGroupsChecked = ["card", "phone_save", "abon"].every(group => document.querySelector(`input[name='${group}']:checked`));
    if (!allGroupsChecked) {
        nextStepButton.disabled = true;
        // console.info('not all checked');
        return;
    }
    else {
        nextStepButton.disabled = false;
        nextStepButton.addEventListener("click", showNextStep);
    }
    if (phoneSaveChecked) {
        phoneNumber.required = true;
        phoneRio.required = true;
        const isPhoneNumberFilled = phoneNumber.value.length === phoneNumber.maxLength;
        const isPhoneRioFilled = phoneRio.value.length === phoneRio.maxLength;
        nextStepButton.disabled = !(isPhoneNumberFilled && isPhoneRioFilled);
    }
    else {
        phoneNumber.required = false;
        phoneRio.required = false;
    }
    if (abonChecked) {
        nextStepButton.disabled = true;
    }
};
// go to next step
const showNextStep = (e) => {
    e.preventDefault();
    const nextStepButton = document.querySelector(".order-buttons .next-step");
    if (!nextStepButton)
        return;
    const url = nextStepButton.getAttribute("data-next");
    if (url) {
        window.location.href = url;
    }
};
// show second part of order step 1
const showNextSection = (e) => {
    e.preventDefault();
    const nextStepButton = document.querySelector(".order-buttons .next");
    const currentSection = document.querySelector(".order-content.recommend-list");
    const nextSection = document.querySelector(".order-content.config-content");
    if (!nextStepButton || !currentSection || !nextSection)
        return;
    const url = nextStepButton.getAttribute("data-next");
    if (url) {
        window.location.href = url;
    }
    else {
        currentSection.setAttribute("aria-hidden", "true");
        nextSection.setAttribute("aria-hidden", "false");
        const offset = 100;
        const sectionTop = nextSection.getBoundingClientRect().top + window.scrollY - offset;
        // Smooth scroll
        window.scrollTo({ top: sectionTop, behavior: "smooth" });
    }
};
function isRadioGroupSelected(groupName) {
    const selectedOption = document.querySelector(`input[name="${groupName}"]:checked`);
    return selectedOption !== null;
}
function handleRadioGroup(groupName) {
    const radioButtons = document.querySelectorAll(`input[name="${groupName}"]`);
    radioButtons.forEach((radio) => {
        radio.addEventListener("change", (event) => {
            var _a;
            const selectedRadio = event.target;
            const parent = selectedRadio.closest(".form-line");
            parent === null || parent === void 0 ? void 0 : parent.classList.remove("error");
            (_a = parent === null || parent === void 0 ? void 0 : parent.querySelector(".error-message")) === null || _a === void 0 ? void 0 : _a.remove();
        });
    });
}
// open/close cart on mobile device in order after step 1
const showMobileCart = () => {
    const showBtn = document.querySelector(".show-mobile-cart");
    const cartSummary = document.querySelector(".cart-summary");
    if (!showBtn || !cartSummary)
        return;
    showBtn === null || showBtn === void 0 ? void 0 : showBtn.addEventListener("click", () => {
        if (cartSummary.classList.contains("show")) {
            showBtn.innerHTML = 'Détail du panier <i class="fa-solid fa-angles-down"></i>';
        }
        else {
            showBtn.innerHTML = 'Cacher le panier <i class="fa-solid fa-angles-up"></i>';
        }
        cartSummary === null || cartSummary === void 0 ? void 0 : cartSummary.classList.toggle("show");
    });
};
const addDeliveryToSummary = () => {
    const payBlockList = document.querySelectorAll(".pay-summary .pay-block.all-info ul");
    const selectedDeliveryItem = document.querySelector("input[name='delivery']:checked");
    if (!payBlockList || !selectedDeliveryItem)
        return;
    // Remove existing entry if any
    payBlockList.forEach(el => {
        const existingElement = el.querySelector(".delivery-info");
        if (existingElement) {
            existingElement.remove();
        }
    });
    payBlockList.forEach(el => {
        // Create new list item for selected entry
        const newListItem = document.createElement("li");
        let price = selectedDeliveryItem.getAttribute("data-price") + "€";
        if (selectedDeliveryItem.getAttribute("data-price") == "gratuit")
            price = "gratuit";
        newListItem.classList.add("delivery-info");
        newListItem.innerHTML = `<span>Delivery ${selectedDeliveryItem.value}</span><span>${price}</span>`;
        // Append new list item to the list
        el.appendChild(newListItem);
    });
};
const validateDeliveryStep = () => {
    const nextStepButton = document.querySelector(".order-buttons .next-step");
    const radioButtons = document.querySelectorAll(`input[name="delivery"]`);
    if (!nextStepButton || !radioButtons)
        return;
    radioButtons.forEach((radio) => {
        radio.addEventListener("change", (event) => {
            addDeliveryToSummary();
            if (isRadioGroupSelected("delivery"))
                nextStepButton.disabled = false;
        });
    });
    nextStepButton.addEventListener("click", showNextStep);
};
const validatePayStep = () => {
    const nextStepButton = document.querySelector(".order-buttons .next-step");
    const radioButtons = document.querySelectorAll(`input[name="payment"]`);
    if (!nextStepButton || !radioButtons)
        return;
    radioButtons.forEach((radio) => {
        radio.addEventListener("change", (event) => {
            if (isRadioGroupSelected("payment"))
                nextStepButton.disabled = false;
        });
    });
    nextStepButton.addEventListener("click", showNextStep);
};
const init = () => {
    handleRadioSelection();
    updateButtonState();
    showMobileCart();
    validateDeliveryStep();
    validatePayStep();
    // button in first step
    const nextButton = document.querySelector(".order-buttons .next");
    if (!nextButton)
        return;
    nextButton.addEventListener("click", showNextSection);
};
init();
const togglePlanAbon = () => {
    const switchBtns = document.querySelectorAll(".js-toggle-switch");
    if (!switchBtns)
        return;
    switchBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            switchBtns.forEach(b => b.classList.toggle("active"));
        });
    });
};
togglePlanAbon();
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
    removeFromCompareModal(compareItem, compareList, compareItemEmpty, compareModal);
    openComparePage();
    clearCompareModal();
};
// item removal from the compare modal
const removeFromCompareModal = (item, list, emptyItem, modal) => {
    const removeButton = item.querySelector('.js-compare-remove');
    const compareBtn = document.querySelector('.js-open-compare');
    if (removeButton) {
        removeButton.addEventListener('click', () => {
            list.replaceChild(emptyItem, item);
            compareBtn.disabled = true;
            disableProducts(false);
            unSelectProduct(removeButton.getAttribute('data-id'));
            if ((window.innerWidth < 768 && list.querySelectorAll('.empty').length == 2)
                || (window.innerWidth >= 768 && list.querySelectorAll('.empty').length == 3)) {
                modal.classList.remove('open');
                list.innerHTML = '';
            }
        });
    }
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
            // console.info('Products in compare list:', compareList);
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
        // console.error('The page does not contain products');
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
const regionsFranceList = [
    "Hors France", "Ain (01)", "Aisne (02)", "Allier (03)", "Alpes-de-Haute-Provence (04)", "Hautes-Alpes (05)",
    "Alpes-Maritimes (06)", "Ardèche (07)", "Ardennes (08)", "Ariège (09)", "Aube (10)",
    "Aude (11)", "Aveyron (12)", "Bouches-du-Rhône (13)", "Calvados (14)", "Cantal (15)",
    "Charente (16)", "Charente-Maritime (17)", "Cher (18)", "Corrèze (19)", "Corse-du-Sud (2A)",
    "Haute-Corse (2B)", "Côte-d'Or (21)", "Côtes-d'Armor (22)", "Creuse (23)", "Dordogne (24)",
    "Doubs (25)", "Drôme (26)", "Eure (27)", "Eure-et-Loir (28)", "Finistère (29)", "Gard (30)",
    "Haute-Garonne (31)", "Gers (32)", "Gironde (33)", "Hérault (34)", "Ille-et-Vilaine (35)",
    "Indre (36)", "Indre-et-Loire (37)", "Isère (38)", "Jura (39)", "Landes (40)", "Loir-et-Cher (41)",
    "Loire (42)", "Haute-Loire (43)", "Loire-Atlantique (44)", "Loiret (45)", "Lot (46)", "Lot-et-Garonne (47)",
    "Lozère (48)", "Maine-et-Loire (49)", "Manche (50)", "Marne (51)", "Haute-Marne (52)", "Mayenne (53)",
    "Meurthe-et-Moselle (54)", "Meuse (55)", "Morbihan (56)", "Moselle (57)", "Nièvre (58)", "Nord (59)",
    "Oise (60)", "Orne (61)", "Pas-de-Calais (62)", "Puy-de-Dôme (63)", "Pyrénées-Atlantiques (64)",
    "Hautes-Pyrénées (65)", "Pyrénées-Orientales (66)", "Bas-Rhin (67)", "Haut-Rhin (68)", "Rhône (69)",
    "Haute-Saône (70)", "Saône-et-Loire (71)", "Sarthe (72)", "Savoie (73)", "Haute-Savoie (74)", "Paris (75)",
    "Seine-Maritime (76)", "Seine-et-Marne (77)", "Yvelines (78)", "Deux-Sèvres (79)", "Somme (80)", "Tarn (81)",
    "Tarn-et-Garonne (82)", "Var (83)", "Vaucluse (84)", "Vendée (85)", "Vienne (86)", "Haute-Vienne (87)",
    "Vosges (88)", "Yonne (89)", "Territoire de Belfort (90)", "Essonne (91)", "Hauts-de-Seine (92)",
    "Seine-Saint-Denis (93)", "Val-de-Marne (94)", "Val-d'Oise (95)"
];
const countriesList = [
    "Afghanistan", "Albanie", "Algérie", "Andorre", "Angola", "Antigua-et-Barbuda", "Argentine", "Arménie", "Australie", "Autriche",
    "Azerbaïdjan", "Bahamas", "Bahreïn", "Bangladesh", "Barbade", "Belgique", "Belize", "Bénin", "Bhoutan", "Bolivie",
    "Bosnie-Herzégovine", "Botswana", "Brésil", "Brunei", "Bulgarie", "Burkina Faso", "Burundi", "Cambodge", "Cameroun", "Canada",
    "Cap-Vert", "Chili", "Chine", "Chypre", "Colombie", "Comores", "Congo (République du Congo)", "Congo (République Démocratique du Congo)",
    "Costa Rica", "Croatie", "Cuba", "Danemark", "Djibouti", "Dominique", "Égypte", "El Salvador", "Équateur", "Érythrée",
    "Espagne", "Estonie", "Eswatini", "États-Unis", "Éthiopie", "Fidji", "Finlande", "France", "Gabon", "Gambie", "Géorgie",
    "Ghana", "Grèce", "Grenade", "Guatemala", "Guinée", "Guinée-Bissau", "Guinée équatoriale", "Guyana", "Haïti", "Honduras",
    "Hongrie", "Inde", "Indonésie", "Irak", "Iran", "Irlande", "Islande", "Israël", "Italie", "Jamaïque", "Japon", "Jordanie",
    "Kazakhstan", "Kenya", "Kiribati", "Koweït", "Laos", "Lesotho", "Lettonie", "Liban", "Liberia", "Libye", "Liechtenstein",
    "Lituanie", "Luxembourg", "Macédoine du Nord", "Madagascar", "Malaisie", "Malawi", "Maldives", "Mali", "Malte", "Maroc",
    "Marshall (îles)", "Maurice", "Mauritanie", "Mexique", "Micronésie", "Moldavie", "Monaco", "Mongolie", "Monténégro",
    "Mozambique", "Namibie", "Nauru", "Népal", "Nicaragua", "Niger", "Nigeria", "Niue", "Norvège", "Nouvelle-Zélande",
    "Oman", "Ouganda", "Pakistan", "Palaos", "Panama", "Papouasie-Nouvelle-Guinée", "Paraguay", "Pays-Bas", "Pérou", "Philippines",
    "Pologne", "Portugal", "Qatar", "République tchèque", "République dominicaine", "République du Congo", "Roumanie",
    "Rwanda", "Saint-Christophe-et-Niévès", "Saint-Marin", "Saint-Siège", "Sainte-Lucie", "Sénégal", "Serbie", "Seychelles",
    "Sierra Leone", "Singapour", "Syrie", "Somalie", "Soudan", "Soudan du Sud", "Sri Lanka", "Suède", "Suisse", "Suriname",
    "Suisse", "Syrie", "Tadjikistan", "Tanzanie", "Tchad", "Thaïlande", "Timor oriental", "Togo", "Tonga", "Trinité-et-Tobago",
    "Tunisie", "Turkménistan", "Turquie", "Tuvalu", "Ukraine", "Uruguay", "Vanuatu", "Vatican", "Venezuela", "Vietnam", "Yémen",
    "Zambie", "Zimbabwe"
];
/**
 * Shows/hides list popup
 * @param selectClass selector for list parent
 * @param inputSelector selector for list input
 * @param show boolean for show or hide list popup
 * @returns
 */
const showDataList = (selectClass, inputSelector = "input", show) => {
    const dataList = document.querySelector(selectClass);
    if (!dataList)
        return;
    const dataInput = dataList.querySelector(inputSelector);
    if (!dataInput)
        return;
    if (show) {
        dataList.setAttribute("aria-hidden", "false");
        dataInput.required = true;
    }
    else {
        dataList.setAttribute("aria-hidden", "true");
        dataInput.required = false;
    }
};
// initialize regions and countires lists
const initDataList = () => {
    const inputRegionField = document.getElementById("birth-region");
    const dataRegionList = document.getElementById("region-datalist");
    const inputCountryField = document.getElementById("birth-country");
    const dataCountryList = document.getElementById("country-datalist");
    if (!inputRegionField || !dataRegionList || !inputCountryField || !dataCountryList)
        return;
    const dataListChange = (data, input, listElement) => {
        const inputParent = input.closest(".with-list");
        if (!inputParent)
            return;
        // create data list
        const populateDatalist = (filter = "") => {
            listElement.innerHTML = "";
            const filteredList = data.filter(dataItem => dataItem.toLowerCase().includes(filter.toLowerCase()));
            if (filteredList.length === 0) {
                listElement.setAttribute("aria-hidden", "true");
                inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.remove("open");
                return;
            }
            filteredList.forEach(dataItem => {
                const listItem = document.createElement("li");
                listItem.textContent = dataItem;
                listItem.classList.add("option");
                listItem.addEventListener("click", () => {
                    var _a;
                    input.value = dataItem;
                    listElement.setAttribute("aria-hidden", "true");
                    inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.remove("open");
                    (_a = inputParent === null || inputParent === void 0 ? void 0 : inputParent.querySelector(".error-message")) === null || _a === void 0 ? void 0 : _a.remove();
                    inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.remove("error");
                    if (input.getAttribute("id") == "birth-region") {
                        if (input.value == "Hors France") {
                            showDataList(".country-select", "input", true);
                            showDataList(".birth-city-select", "input", false);
                        }
                        else {
                            showDataList(".country-select", "input", false);
                            showDataList(".birth-city-select", "input", true);
                        }
                    }
                });
                listElement.appendChild(listItem);
            });
            listElement.setAttribute("aria-hidden", "false");
            inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.remove("open");
        };
        // show list
        input.addEventListener("focus", () => {
            populateDatalist();
            inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.add("open");
        });
        // dynamic filter of list items
        input.addEventListener("input", () => populateDatalist(input.value));
        // hide list on clicking outside of it
        document.addEventListener("click", (event) => {
            if (!input.contains(event.target) && !listElement.contains(event.target)) {
                listElement.setAttribute("aria-hidden", "true");
                inputParent === null || inputParent === void 0 ? void 0 : inputParent.classList.remove("open");
            }
        });
    };
    dataListChange(regionsFranceList, inputRegionField, dataRegionList);
    dataListChange(countriesList, inputCountryField, dataCountryList);
};
initDataList();
const removeFromCart = () => {
    const removeButtons = document.querySelectorAll(".product-buttons .delete");
    if (!removeButtons)
        return;
    removeButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            const product = this.closest(".summary-product");
            if (product) {
                product.remove();
                if (product.getAttribute("aria-label") == "plan") {
                    onPlanRemove();
                }
                // Check if there are remaining products
                setTimeout(() => {
                    const remainingProducts = document.querySelectorAll(".summary-product");
                    if (remainingProducts.length === 0) {
                        window.location.href = "basket-empty.php";
                    }
                }, 200);
            }
        });
    });
};
const onPlanRemove = () => {
    const configBlocks = document.querySelectorAll(".line-config-block");
    const payBlockElements = document.querySelectorAll(".pay-block li[aria-label='plan']");
    if (!configBlocks || !payBlockElements)
        return;
    configBlocks.forEach(block => {
        block.classList.add("hidden");
    });
    payBlockElements.forEach(block => {
        block.classList.add("hidden");
    });
};
removeFromCart();
const revealOnScroll = () => {
    const container = document.querySelector(".order-content .more-products .section-inner");
    if (!container)
        return;
    const divs = Array.from(container.children).slice(2); // Selects divs starting from the third one
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("hidden");
                observer.unobserve(entry.target); // Stop observing once visible
            }
        });
    }, { root: null, threshold: 0.2 } // 20% visibility triggers animation
    );
    divs.forEach(div => observer.observe(div));
};
// Run when DOM is loaded
// document.addEventListener("DOMContentLoaded", revealOnScroll);
const showMoreItems = () => {
    const container = document.querySelector(".more-products .section-inner");
    const showMoreBtn = document.querySelector(".more-products .show-more");
    if (!container || !showMoreBtn)
        return;
    const childDivs = Array.from(container.children);
    let visibleCount = 2; // Initially show 2 divs
    // Function to determine how many divs to show based on screen size
    const getIncrement = () => (window.innerWidth < 640 || (window.innerWidth >= 768 && window.innerWidth < 1024)) ? 1 : 2;
    // Hide all divs except the initially visible ones
    childDivs.forEach((div, index) => {
        if (index >= visibleCount) {
            div.style.opacity = "0";
            div.style.height = "0px";
            div.style.marginBottom = "0";
            div.style.overflow = "hidden";
            div.style.transition = "opacity 0.3s ease, height 0.3s ease";
        }
    });
    showMoreBtn.addEventListener("click", () => {
        let increment = getIncrement();
        let shown = 0;
        for (let i = visibleCount; i < childDivs.length && shown < increment; i++, shown++) {
            const div = childDivs[i];
            div.style.height = "calc(100% - 1rem)";
            div.style.marginBottom = "1rem";
            div.style.opacity = "1";
        }
        visibleCount += increment;
        // Hide button if all divs are visible
        if (visibleCount >= childDivs.length) {
            showMoreBtn.style.display = "none";
        }
    });
    // Update visibleCount on resize
    window.addEventListener("resize", () => {
        visibleCount = Math.min(visibleCount, childDivs.length);
    });
};
document.addEventListener("DOMContentLoaded", showMoreItems);
document.addEventListener('DOMContentLoaded', function (event) {
    const homeTopSlider = new Swiper('.top-slider', {
        speed: 800,
        // autoplay: {
        //     delay: 8000,
        // },
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
            640: {
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
            640: {
                slidesPerView: 2,
            },
            800: {
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
    const modalRecommendSlider = new Swiper(".modal-recommend .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        autoHeight: true,
        mousewheel: {
            enabled: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                direction: "vertical",
                slidesPerView: "auto",
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
    const orderPackSlider = new Swiper(".packs-list-modal .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 19,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    const plansPhonesSlider = new Swiper(".phones-with-plans .swiper", {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        /*
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },*/
    });
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
document.addEventListener("DOMContentLoaded", () => {
    const stickyProductTop = document.querySelector(".product-top");
    const stickyMobileTabs = document.querySelector(".product-top__tabs");
    const stickyPlanTop = document.querySelector(".plan-details-top");
    const stickyCompareTop = document.querySelector(".compare-products");
    if (stickyProductTop && window.innerWidth >= 1024) {
        stickyElement(stickyProductTop, true);
    }
    if (stickyMobileTabs && window.innerWidth < 1024) {
        stickyElement(stickyMobileTabs, true);
    }
    if (stickyPlanTop && window.innerWidth >= 768) {
        stickyElement(stickyPlanTop, true);
    }
    if (stickyCompareTop) {
        stickyElement(stickyCompareTop, true);
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
// handle login form submission
function handleSignin(event) {
    event.preventDefault();
    // If authentication is successful, save a cookie
    localStorage.setItem("authenticated", "true");
    // Redirect user after login
    window.location.href = "index.php";
}
function handleSignout(event) {
    event.preventDefault();
    localStorage.setItem("authenticated", "false");
    toggleProfileLink();
    const url = window.location.href.split("/");
    if (url[3] && url[3] == "profile") {
        window.location.href = "../index.php";
    }
    else {
        window.location.href = "index.php";
    }
}
function toggleProfileLink() {
    const checkLogin = localStorage.getItem("authenticated");
    const btnLogin = document.querySelector(".btn-login");
    const btnProfile = document.querySelector(".btn-profile");
    const btnLogout = document.querySelector(".js-logout");
    if (!btnLogin || !btnProfile)
        return;
    if (checkLogin == "true") {
        btnLogin === null || btnLogin === void 0 ? void 0 : btnLogin.classList.add("hidden");
        btnProfile === null || btnProfile === void 0 ? void 0 : btnProfile.classList.remove("hidden");
        btnLogout === null || btnLogout === void 0 ? void 0 : btnLogout.classList.remove("hidden");
    }
    else {
        btnLogin === null || btnLogin === void 0 ? void 0 : btnLogin.classList.remove("hidden");
        btnProfile === null || btnProfile === void 0 ? void 0 : btnProfile.classList.add("hidden");
        btnLogout === null || btnLogout === void 0 ? void 0 : btnLogout.classList.add("hidden");
    }
}
const initProfileFunctions = () => {
    const loginForm = document.getElementById("auth-form");
    if (loginForm) {
        loginForm.addEventListener("submit", handleSignin);
    }
    const logoutBtns = document.querySelectorAll(".js-logout");
    if (logoutBtns) {
        logoutBtns.forEach(btn => {
            btn.addEventListener("click", handleSignout);
        });
    }
};
initProfileFunctions();
toggleProfileLink();
