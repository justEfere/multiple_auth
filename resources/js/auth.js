document.addEventListener("DOMContentLoaded", () => {

    const viewPasswordBtn = document.querySelectorAll(".view_pswrd");

    if (viewPasswordBtn) {
        viewPasswordBtn.forEach(vPswdBtn => {
            vPswdBtn.addEventListener("click", () => {
                const pInput = vPswdBtn.previousElementSibling;
                const viewIcon = vPswdBtn.querySelector("#viewPswrdIcon");

                if (pInput.getAttribute("type") === "password") {
                    pInput.setAttribute("type", "text");
                    viewIcon.textContent = "visibility_off"
                } else {
                    pInput.setAttribute("type", "password");
                    viewIcon.textContent = "visibility"
                }
            })
        })
    }



})
