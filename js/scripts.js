"use strict";
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
closeCompareModal();
