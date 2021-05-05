var loader = document.querySelector(".loader");
console.log(loader);
window.addEventListener("load", vanish);

function vanish() {
	loader.classList.add("gone");
}
