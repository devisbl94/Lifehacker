
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require
require('./bootstrap');

// functions
const IdSelector = (param) => {
	return document.querySelector(`#${param}`);
}

const scrollIt = (destination, duration = 200) => {

    const start = window.pageYOffset;
    const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

    const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
    const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
    const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop;
    const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);

    if ('requestAnimationFrame' in window === false) {
        window.scroll(0, destinationOffsetToScroll);
        return;
    }

    function scroll() {
        const now = 'now' in window.performance ? performance.now() : new Date().getTime();
        const time = Math.min(1, ((now - startTime) / duration));
        const timeFunction = time * (2 - time);
        window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));

        if (window.pageYOffset === destinationOffsetToScroll) {
            return;
        }

        requestAnimationFrame(scroll);
    }

    scroll();
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

// init
$('.carousel').carousel({
  interval: 0
});

// events
// HOME
IdSelector('link-welcome').addEventListener("click", event => {
    scrollIt(IdSelector('welcome'), 600);
});

IdSelector('link-home-6').addEventListener("click", event => {
    scrollIt(IdSelector('home-6'), 600);
});
IdSelector('fake-btn').addEventListener("click", () => {
	alert("Told 'ya");
});

// Validate contact form
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

