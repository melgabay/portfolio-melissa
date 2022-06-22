function openCanvas() {
    document.querySelector('.offcanvas-btn').classList.toggle('offcanvas-btn-open');
    document.querySelector('.offcanvas-aside').classList.toggle('offcanvas-aside-open');
}
var typed = new Typed(".typing", {
    strings: ["Student", "Developer", "Programmer", "Leader"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});