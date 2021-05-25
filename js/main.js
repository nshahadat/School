//gallery start
const modal = document.querySelector(".modal");
const previews = document.querySelectorAll(".gallery img");
const orginal = document.querySelector(".full-img");
const imgText = document.querySelector(".caption");

previews.forEach((preview) => {
	preview.addEventListener("click", function () {
		modal.classList.add("open");
		orginal.classList.add("open");
	});
});
modal.addEventListener("click", (e) => {
	if (e.target.classList.contains("modal")) {
		modal.classList.remove("open");
		orginal.classList.add("open");
	}
});
