function changeCartOption(): void {
    const optionButtons = document.querySelectorAll(".config-option .switch");
    console.info(optionButtons);

    if (!optionButtons) return;

    optionButtons.forEach(btn => {
        if (!btn.classList.contains("accordion-item")) {
            btn.classList.remove("active");

            btn.addEventListener("click", function(this: HTMLButtonElement) {
                console.info("t");
                this.classList.add("active");
            });
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    // changeCartOption();
});