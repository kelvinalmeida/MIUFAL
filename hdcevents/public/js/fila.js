const checkInput = document.querySelectorAll(".form-check-input");
const btn = document.querySelector(".btn-primary");
// console.log(btn);
btn.setAttribute("disabled", "disabled");

for (let i = 0; i < checkInput.length; i++) {
    checkInput[i].addEventListener("input", function () {
        btn.removeAttribute("disabled", "disabled");
    });
}
