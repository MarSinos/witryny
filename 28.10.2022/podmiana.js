const a = document.getElementById("a");
const b = document.getElementById("b");
const c = document.getElementById("c");
const start = document.getElementById("start");
const form = document.getElementById("form");
const info = document.getElementById("info");

function starty() {
    console.log(start)
    a.style.backgroundColor = "orange";
    b.style.backgroundColor = "#333";
    c.style.backgroundColor = "#333";
    start.style.display = "block";
    form.style.display = "none";
    info.style.display = "none";
}
function formularz() {
    console.log(form)
    a.style.backgroundColor = "#333";
    b.style.backgroundColor = "purple";
    c.style.backgroundColor = "#333";
    start.style.display = "none";
    form.style.display = "block";
    info.style.display = "none";
}
function informacje() {
    console.log(info)
    a.style.backgroundColor = "#333";
    b.style.backgroundColor = "#333";
    c.style.backgroundColor = "aqua";
    start.style.display = "none";
    form.style.display = "none";
    info.style.display = "block";
}
