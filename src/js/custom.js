document.getElementById("sidebarToggleTop").onclick = function () {
    const menu = document.getElementsByClassName('toggled');
    const element = document.getElementById("accordionSidebar");

    if (menu.length > 0) {
       return element.classList.remove("toggled");
    }

    return element.classList.add("toggled");

}
