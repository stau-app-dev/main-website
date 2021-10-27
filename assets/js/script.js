var today = new Date();
var dateString = today.toDateString();

var dateElement = document.getElementById('date');
dateElement.innerText = dateString;

var toggleMobileMenu = document.getElementById('toggleMobileMenu');
var mobileMenu = document.getElementById('mobileMenu');
toggleMobileMenu.addEventListener('click', function () {
    mobileMenu.classList.toggle('d-none');
    mobileMenu.classList.toggle('d-flex');
});
