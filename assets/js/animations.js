const goPokedexImg = document.querySelector('#goPokedex\\" > img');

goPokedexImg.addEventListener("mouseover", (event) => {
	goPokedexImg.src = "./assets/img/pokedex_open.png";
	goPokedexImg.alt = "Open pokedex";
});

goPokedexImg.addEventListener("mouseleave", (event) => {
	goPokedexImg.src = "./assets/img/pokedex_closed.png";
	goPokedexImg.alt = "Closed pokedex";
});
