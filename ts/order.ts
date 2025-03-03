// radio buttons select on order step 1
const handleRadioSelection = () => {
    const cardRadios = document.querySelectorAll<HTMLInputElement>("input[name='card']");
    const phoneSaveRadios = document.querySelectorAll<HTMLInputElement>("input[name='phone_save']");
    const abonRadios = document.querySelectorAll<HTMLInputElement>("input[name='abon']");
    const phoneNumber = document.querySelector<HTMLInputElement>("#phone-number");
    const phoneRio = document.querySelector<HTMLInputElement>("#phone-rio");

    cardRadios.forEach(radio => radio.addEventListener("change", updatePayBlock));
    [...cardRadios, ...phoneSaveRadios, ...abonRadios].forEach(radio => radio.addEventListener("change", updateButtonState));

    if (phoneNumber) phoneNumber.addEventListener("keyup", updateButtonState);
    if (phoneRio) phoneRio.addEventListener("keyup", updateButtonState);
};

// update pay block with the value of chosen sim card
const updatePayBlock = () => {
    const payBlockList = document.querySelectorAll<HTMLElement>(".pay-summary .pay-block.all-info ul");
    const selectedCard = document.querySelector<HTMLInputElement>("input[name='card']:checked");

    if (!payBlockList || !selectedCard) return;

    // Remove existing "offer" entry if any
    payBlockList.forEach(el => {
        const existingOffer = el.querySelector(".card-offer");

        if (existingOffer) {
            existingOffer.remove();
        }
    })

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
    const phoneSaveChecked = document.querySelector<HTMLInputElement>("input[name='phone_save']:checked")?.value === "yes";
    const abonChecked = document.querySelector<HTMLInputElement>("input[name='abon']:checked")?.value === "yes";
    const phoneNumber = document.querySelector<HTMLInputElement>("#phone-number");
    const phoneRio = document.querySelector<HTMLInputElement>("#phone-rio");
    const nextStepButton = document.querySelector<HTMLButtonElement>(".next-step");

    if (!nextStepButton || !phoneNumber || !phoneRio) return;

    // Check if all radio groups have a selection
    const allGroupsChecked = ["card", "phone_save", "abon"].every(group =>
        document.querySelector(`input[name='${group}']:checked`)
    );

    if (!allGroupsChecked) {
        nextStepButton.disabled = true;
        console.info('not all checked');
        return;
    } else {
        nextStepButton.disabled = false;
        nextStepButton.addEventListener("click", clickNextBtn);
    }

    if (phoneSaveChecked) {
        phoneNumber.required = true;
        phoneRio.required = true;
        
        const isPhoneNumberFilled = phoneNumber.value.length === phoneNumber.maxLength;
        const isPhoneRioFilled = phoneRio.value.length === phoneRio.maxLength;

        nextStepButton.disabled = !(isPhoneNumberFilled && isPhoneRioFilled);
    } else {
        phoneNumber.required = false;
        phoneRio.required = false;
    }

    if (abonChecked) {
        nextStepButton.disabled = true;
    }
};

// go to order step 2
const clickNextBtn = (e: Event) => {
    e.preventDefault();

    const nextStepButton = document.querySelector<HTMLButtonElement>(".order-buttons .next-step");
    if (!nextStepButton) return;

    const url = nextStepButton.getAttribute("data-next");

    if (url) {
        window.location.href = url;
    }
}

// show second part of order step 1
const showNextSection = (e: Event) => {
    e.preventDefault();

    const nextStepButton = document.querySelector<HTMLButtonElement>(".order-buttons .next");
    const currentSection = document.querySelector<HTMLButtonElement>(".order-content.recommend-list");
    const nextSection = document.querySelector<HTMLButtonElement>(".order-content.config-content");
    if (!nextStepButton || !currentSection || !nextSection) return;

    const url = nextStepButton.getAttribute("data-next");

    if (url) {
        window.location.href = url;
    } else {
        currentSection.setAttribute("aria-hidden", "true");
        nextSection.setAttribute("aria-hidden", "false");

        const offset = 100;
        const sectionTop = nextSection.getBoundingClientRect().top + window.scrollY - offset;

        // Smooth scroll
        window.scrollTo({ top: sectionTop, behavior: "smooth" });
    }
}

function isRadioGroupSelected(groupName: string): boolean {
    const selectedOption = document.querySelector<HTMLInputElement>(`input[name="${groupName}"]:checked`);
    return selectedOption !== null;
}

function handleRadioGroup(groupName: string): void {
    const radioButtons = document.querySelectorAll<HTMLInputElement>(`input[name="${groupName}"]`);
  
    radioButtons.forEach((radio) => {
        radio.addEventListener("change", (event) => {
            const selectedRadio = event.target as HTMLInputElement;
            const parent = selectedRadio.closest(".form-line");
            parent?.classList.remove("error");
            parent?.querySelector(".error-message")?.remove();
        });
    });
}
  

// open/close cart on mobile device in order after step 1
const showMobileCart = () => {
    const showBtn = document.querySelector<HTMLButtonElement>(".show-mobile-cart");
    const cartSummary = document.querySelector<HTMLButtonElement>(".cart-summary");
    if (!showBtn || !cartSummary) return;

    showBtn?.addEventListener("click", () => {
        if (cartSummary.classList.contains("show")) {
            showBtn.innerHTML = 'Détail du panier <i class="fa-solid fa-angles-down"></i>';
        } else {
            showBtn.innerHTML = 'Cacher le panier <i class="fa-solid fa-angles-up"></i>';
        }

        cartSummary?.classList.toggle("show");
    })
}

const validateEmail = (email: string): boolean => {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
};

const validateBirthDate = (birthDate: string): boolean => {
    const birthDateRegex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

    if (!birthDateRegex.test(birthDate)) return false;

    const [day, month, year] = birthDate.split("/").map(Number);
    const dateObj = new Date(year, month - 1, day);

    return (
        dateObj.getFullYear() === year &&
        dateObj.getMonth() === month - 1 &&
        dateObj.getDate() === day
    );
};
// check all personal data in order step 2
const orderFormValidation = () => {
    const form = document.querySelector<HTMLFormElement>(".order-wrap");
    const submitButton = document.querySelector<HTMLButtonElement>(".next-step");
    const inputs = document.querySelectorAll<HTMLInputElement | HTMLTextAreaElement>(".order-wrap input:required");

    if (!form || !submitButton || inputs.length === 0) return;

    // create and append error message
    const showErrorMessage = (input: HTMLInputElement | HTMLTextAreaElement, message: string) => {
        const parent = input.closest(".form-line");
        if (!parent) return;

        let errorMessage = parent.querySelector<HTMLSpanElement>(".error-message");

        if (!errorMessage) {
            errorMessage = document.createElement("span");
            errorMessage.classList.add("error-message");
            parent.appendChild(errorMessage);
        }

        errorMessage.innerHTML = `<i>!</i> ${message}`;
        parent.classList.add("error");
    };

    // remove error message
    const removeErrorMessage = (input: HTMLInputElement | HTMLTextAreaElement) => {
        const parent = input.closest(".form-line");
        if (!parent) return;

        const errorMessage = parent.querySelector<HTMLSpanElement>(".error-message");
        if (errorMessage) errorMessage.remove();

        parent.classList.remove("error");
    };

    // handle input validation on blur (when user leaves an input)
    const handleBlur = (event: Event) => {
        const input = event.target as HTMLInputElement | HTMLTextAreaElement;
        const parent = input.closest(".form-line");
        if (!parent) return;
        const fieldName = parent.querySelector(".form-line__title")?.getAttribute("data-name");

        if (!input.value.trim()) {
            showErrorMessage(input, `Veuillez renseigner votre ${fieldName}`);
            return;
        }

        if (input.type == "email" && !validateEmail(input.value)) {
            showErrorMessage(input, "Veuillez entrer un email valide.");
            return;
        }

        if (input.getAttribute("name") == "birthDate" && !validateBirthDate(input.value)) {
            showErrorMessage(input, "Veuillez entrer une date valide au format JJ/MM/AAAA.");
            return;
        }
        
        removeErrorMessage(input);

        checkInputs();
    };

    // check if all required inputs are filled
    const checkInputs = () => {
        let allFilled = true;

        if (!isRadioGroupSelected("sex")) {
            let radioElem = document.querySelector(".radio-group") as HTMLInputElement;
            if (!radioElem) return;
            showErrorMessage(radioElem, "Veuillez sélectionner votre civilité");

            allFilled = false;
        }
        inputs.forEach(input => {
            handleRadioGroup("sex");
            if (!input.value.trim() && isRadioGroupSelected("sex")) {
                allFilled = false;
            }
        });

        submitButton.disabled = !allFilled;
    };

    // event Listeners
    inputs.forEach(input => {
        input.addEventListener("input", checkInputs); // Re-check when typing
        input.addEventListener("blur", handleBlur);   // Check on blur
    });
};

const init = () => {
    handleRadioSelection();
    updateButtonState(); 
    showMobileCart();
    orderFormValidation();
    
    const nextStepButton = document.querySelector<HTMLButtonElement>(".order-buttons .next");
    if (!nextStepButton) return;

    nextStepButton.addEventListener("click", showNextSection);
};

init();
