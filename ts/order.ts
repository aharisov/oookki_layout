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
        console.info('phone save checked', isPhoneNumberFilled, isPhoneRioFilled);
    } else {
        phoneNumber.required = false;
        phoneRio.required = false;
        console.info('phone save unchecked');
    }

    if (abonChecked) {
        nextStepButton.disabled = true;
        console.info('abon checked');
    }
};

const clickNextBtn = (e: Event) => {
    e.preventDefault();

    const nextStepButton = document.querySelector<HTMLButtonElement>(".order-buttons .next-step");
    if (!nextStepButton) return;

    const url = nextStepButton.getAttribute("data-next");

    if (url) {
        window.location.href = url;
    }
}

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

const init = () => {
    handleRadioSelection();
    updateButtonState(); // Ensure correct state on load
    
    const nextStepButton = document.querySelector<HTMLButtonElement>(".order-buttons .next");
    if (!nextStepButton) return;
    nextStepButton.addEventListener("click", showNextSection);
};

init();
