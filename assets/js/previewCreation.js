const pokemonName = document.querySelector("#name");
const hp = document.querySelector("#hp");
const atk = document.querySelector("#atk");
const sprite = document.querySelector("#sprite");
const typePokemon = document.querySelector("#typePokemon");

pokemonName.addEventListener("focusout", () => {
	let namePar = document.querySelector("#preview > .card > .name");
	namePar.innerText = pokemonName.value;
});

hp.addEventListener("focusout", () => {
	let hpPar = document.querySelector(
		"#preview > .card > .hp  > p:nth-of-type(2)"
	);
	hpPar.innerText = hp.value;
});

atk.addEventListener("focusout", () => {
	let atkPar = document.querySelector(
		"#preview > .card > .atk  > p:nth-of-type(2)"
	);
	atkPar.innerText = atk.value;
});

typePokemon.addEventListener("click", () => {
	let typePar = document.querySelector(
		"#preview > .card > .typePokemon  > p:nth-of-type(2)"
	);
	typePar.innerText = typePokemon.value;
});

sprite.addEventListener("focusout", () => {
	if (sprite.value != "") {
		let spriteImg = document.querySelector(
			"#preview > .carc > .sprite  > p:nth-of-type(2)"
		);
		spriteImg.src = sprite.value;
	}
});
