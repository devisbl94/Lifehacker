
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const IdSelector = (param) => {
	return document.querySelector(`#${param}`);
}

const thisExists = (param) => {
	return typeof param !== 'undefined' ? true : false;
}

// HOME

if (thisExists(IdSelector('fake-btn'))) {
	let fakeBtn = IdSelector('fake-btn');
	fakeBtn.addEventListener("click", () => {
		alert("Told 'ya");
	})
}

$('.carousel').carousel({
  interval: 0
})