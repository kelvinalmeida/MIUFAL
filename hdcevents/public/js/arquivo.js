const btn = document.querySelector(".btnDelete");
now = new Date();
hora = now.getHours();
minutos = now.getMinutes();

document.querySelector(".btnDelete").style.display = "none";
// console.log(now.getSeconds());
if (hora == 15 && minutos == 00) {
    btn.click();
}
if (0) {
    btn.click();
}
