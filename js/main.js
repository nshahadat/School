// Image SLider START
// let sliderImages = document.querySelectorAll(".slide"),
// 	arrowRight = document.querySelector("#arrow-right"),
// 	arrowLeft = document.querySelector("#arrow-left"),
// 	current = 0;

// function reset() {
// 	for (let i = 0; i < sliderImages.length; i++) {
// 		sliderImages[i].style.display = "none";
// 	}
// }

// function startSlide() {
// 	reset();
// 	sliderImages[0].style.display = "block";
// }

// function slideLeft() {
// 	reset();
// 	sliderImages[current - 1].style.display = "block";
// 	current--;
// }

// function slideRight() {
// 	reset();
// 	sliderImages[current + 1].style.display = "block";
// 	current++;
// }
// arrowLeft.addEventListener("click", function () {
// 	if (current === 0) {
// 		current = sliderImages.length;
// 	}
// 	slideLeft();
// });
// arrowRight.addEventListener("click", function () {
// 	if (current === sliderImages.length - 1) {
// 		current = -1;
// 	}
// 	slideRight();
// });
// startSlide();
// Image Slider END
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
modal.addEventListener("click",(e)=>{
if(e.target.classList.contains('modal')){
	modal.classList.remove("open");
	orginal.classList.add("open");
}
});