let goPokedexImg = document.querySelector('#goPokedex\\" > img');

goPokedexImg.addEventListener("mouseover", (event) => {
	goPokedexImg.src = "./assets/img/pokedex_open.png";
});

goPokedexImg.addEventListener("mouseleave", (event) => {
	goPokedexImg.src = "./assets/img/pokedex_closed.png";
	goPokedexImg.alt = "Open pokedex";
});
