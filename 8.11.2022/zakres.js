function fun1() {
    console.log("test");
    let zakres = document.getElementById("zakres");
    console.log(zakres);
    zakres.innerHTML = "zmieniamy tekst";
    // document.getElementById("zakres").style.backgroundColor = "cornflowerblue";
    zakres.style.backgroundColor = "cornflowerblue";
    zakres.style.color = "white";
    zakres.style.padding = "20px";
    let x = document.querySelector("#x").value;
    let y = document.getElementById("y").value;
    let temp = "";

    for (let index = x; index <= y; index++) {

        // if (index%2) { TYLKO LICZBY NIE PARZYSTE

        if (index%2==0) {
        // LUB
        // if (!index%2) {

        temp = temp + index + " ";
        }
    }
    zakres.innerHTML = temp;
}

