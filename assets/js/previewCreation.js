const pokemonName = document.querySelector("#name");
const hp = document.querySelector("#hp");
const atk = document.querySelector("#atk");
const sprite = document.querySelector("#sprite");
const typePokemon = document.querySelector("#typePokemon");

pokemonName.addEventListener("focusout", () => {
	let namePar = document.querySelector("#preview > article > .name");
	namePar.innerText = pokemonName.value;
});

hp.addEventListener("focusout", () => {
	let hpPar = document.querySelector("#preview > article > .hp");
	hpPar.innerText = "HP: " + hp.value;
});

atk.addEventListener("focusout", () => {
	let atkPar = document.querySelector("#preview > article > .atk");
	atkPar.innerText = "ATK: " + atk.value;
});

typePokemon.addEventListener("click", () => {
	let typePar = document.querySelector("#preview > article > .typePokemon");
	typePar.innerText = "Type: " + typePokemon.value;
});

sprite.addEventListener("focusout", () => {
	if (sprite.value != "") {
		let spriteImg = document.querySelector("#preview > article > .sprite");
		spriteImg.src = sprite.value;
	}
});
