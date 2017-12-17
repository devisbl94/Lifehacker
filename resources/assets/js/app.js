
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const IdSelector = (param) => {
	return document.querySelector(`#${param}`);
}

// HOME
IdSelector('fake-btn').addEventListener("click", () => {
	alert("Told 'ya");
});

$('.carousel').carousel({
  interval: 0
})