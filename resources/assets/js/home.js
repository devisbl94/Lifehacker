document.addEventListener("ready", () => {
	if (thisExists(Idselector('fake-btn'))) {
		let fakeBtn = Idselector('fake-btn');
		fakeBtn.addEventListener("click", () => {
			alert("Told 'ya");
		})
	}
});