// Elements selection
var button_open_burger = document.getElementById("burger-icon");
var button_close_burger = document.getElementById("close-icon");
var dropdown_burger = document.getElementById("burger-dropdown");

// Open window
button_open_burger.addEventListener("click", function() {
    dropdown_burger.classList.toggle("active");
});

// Close window
button_close_burger.addEventListener("click", function() {
    dropdown_burger.classList.toggle("active");
});