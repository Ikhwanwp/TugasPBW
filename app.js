//Running Text Effect
const TypeWriter = function(txtElement, words, wait = 3000){
	this.txtElement = txtElement;
	this.words = words;
	this.txt = '';
	this.wordIndex = 0;
	this.wait = parseInt(wait, 10);
	this.type();
	this.isDeleting = false;
}

//Type Method
TypeWriter.prototype.type = function(){
	// Current Index of word
	const current = this.wordIndex % this.words.length;
	// Get Full text of current word
	const fullTxt = this.words[current];

	//Check if deleting
	if(this.isDeleting){
		//Remove Char
		this.txt = fullTxt.substring(0, this.txt.length - 1);
	}else{
		//Add Char
		this.txt = fullTxt.substring(0, this.txt.length + 1);
	}

	//Insert Txt into element
	this.txtElement.innerHTML = `<span class='txt'>${this.txt}</span>`;

	//initial type speed
	let typeSpeed = 100;

	if(this.isDeleting){
		typeSpeed /= 2;
	}

	//if word is complete
	if(!this.isDeleting && this.txt === fullTxt){
		//Make pause at end
		typeSpeed = this.wait;
		//set  delete to true
		this.isDeleting = true;
	}else if(this.isDeleting && this.txt === ''){
		this.isDeleting = false;
		//Move to next word
		this.wordIndex++;
		//Pause before start typing 
		typeSpeed = 50;
	}

	setTimeout(() => this.type(), typeSpeed)
}

// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init(){
	const txtElement = document.querySelector('.txt-type');
	const words = JSON.parse(txtElement.getAttribute('data-words'));
	const wait = txtElement.getAttribute('data-wait');
	// Init TypeWriter
	new TypeWriter(txtElement, words, wait);
}

//Slider Artikel
const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide img');

// button
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

// Counter
let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

// Button Listeners
nextBtn.addEventListener('click',()=>{
	if (counter >= carouselImages.length -1) return;
	carouselSlide.style.transition = "transform 0.4s ease-in-out";
	counter++;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});
prevBtn.addEventListener('click',()=>{
	if(counter <= 0) return;
	carouselSlide.style.transition = "transform 0.4s ease-in-out";
	counter--;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend',() =>{
	if(carouselImages[counter].id == 'lastClone'){
		carouselSlide.style.transition = "none";
		counter = carouselImages.length - 2;
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}
	if(carouselImages[counter].id == 'firstClone'){
		carouselSlide.style.transition = "none";
		counter = carouselImages.length - counter;
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}
});


//Slider Video
const videoSlide = document.querySelector('.video-slide');
const videoImages = document.querySelectorAll('.video-slide img');

// button
const prevBtn2 = document.querySelector('#prevBtn2');
const nextBtn2 = document.querySelector('#nextBtn2');

// Counter
let counter2 = 1;
const size2 = videoImages[0].clientWidth;

videoSlide.style.transform = 'translateX(' + (-size2 * counter2) + 'px)';

// Button Listeners
nextBtn2.addEventListener('click',()=>{
	videoSlide.style.transition = "transform 0.4s ease-in-out";
	counter2++;
	videoSlide.style.transform = 'translateX(' + (-size2 * counter2) + 'px)';
});
prevBtn2.addEventListener('click',()=>{
	videoSlide.style.transition = "transform 0.4s ease-in-out";
	counter2--;
	videoSlide.style.transform = 'translateX(' + (-size2 * counter2) + 'px)';
});

videoSlide.addEventListener('transitionend',() =>{
	if(videoImages[counter2].id == 'lastCloneVideo'){
		videoSlide.style.transition = "none";
		counter2 = videoImages.length - 2;
		videoSlide.style.transform = 'translateX(' + (-size2 * counter2) + 'px)';
	}
	if(videoImages[counter2].id == 'firstCloneVideo'){
		videoSlide.style.transition = "none";
		counter2 = videoImages.length - counter;
		videoSlide.style.transform = 'translateX(' + (-size2 * counter2) + 'px)';
	}
});