const msgSection = document.querySelector("#msg");

document.body.onkeyup = function (event) {
	if (event.code == "Space" || event.keyCode == 32 || event.code == "Enter") {
		msgSection.innerText = "---";
	}
};
