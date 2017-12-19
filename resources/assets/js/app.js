
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const IdSelector = (param) => {
	return document.querySelector(`#${param}`);
}

const addListenerMulti = (element, eventNames, listener) => {
  var events = eventNames.split(' ');
  for (var i=0, iLen=events.length; i<iLen; i++) {
    element.addEventListener(events[i], listener, false);
  }
}

const checkBool = (param) => {
	let cont = 0;

	param.forEach( value => {
		if (value[1]) {
			cont++;
		}
	});

	return cont;
}

// HOME
IdSelector('fake-btn').addEventListener("click", () => {
	alert("Told 'ya");
});

$('.carousel').carousel({
  interval: 0
});

let auxname = false, auxemail = false, auxmessage = false;

let vars = [
	[IdSelector('name'), auxname],
	[IdSelector('email'), auxemail],
	[IdSelector('message'), auxmessage]
];

let submitContact = IdSelector('submit-contact');

vars.forEach(value => {
	addListenerMulti(value[0], 'keyup change', event => {
		if(value[0].value.length > 2) {
			value[1] = true;
		} else {
			value[1] = false;
		}

		if (checkBool(vars) == 3) {
			submitContact.disabled = false;
		} else {
			submitContact.disabled = true;
		}
	});
})