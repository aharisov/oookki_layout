function getProductPayment() {
    const paymentRadios: NodeListOf<HTMLInputElement> = document.querySelectorAll('input[name="pay-type"]');
    const payTypeBlocks: NodeListOf<HTMLUListElement> = document.querySelectorAll(".pay-subtype");

    function updatePaymentVisibility() {
        const selectedRadio = document.querySelector('input[name="pay-type"]:checked') as HTMLInputElement | null;
        const selectedValue = selectedRadio ? selectedRadio.value : null;
        const selectedParent = selectedRadio?.closest(".option-block") as HTMLDivElement | null;

        payTypeBlocks.forEach((block) => {
            const blockType = block.getAttribute("data-type");
            const payTypeContainer = document.querySelector(".product-options.payment-options") as HTMLDivElement;

            if (selectedValue === "cash") {
                payTypeContainer.setAttribute("aria-hidden", "true");
                selectedParent?.classList.add("last");
            } else {
                payTypeContainer.setAttribute("aria-hidden", "false");
                selectedParent?.classList.remove("last");

                if (blockType === selectedValue) {
                    block.setAttribute("aria-hidden", "false");
                } else {
                    block.setAttribute("aria-hidden", "true");
                }
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