// faire apparaitre - disparaitre le boc recherche
const clickRech = document.getElementsByTagName('img');
const cacher = document.getElementById("bloc-recherche")
clickRech[1].addEventListener("click", function () {
    if (cacher.className === "disparaitre")  {
        cacher.className = "apparaitre";
    } else {
        cacher.className = "disparaitre"
    }
});
