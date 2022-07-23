



// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-list");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//end of nav menubar




// the script for the slideshow in homepage

//declare some of the variable
var slideIndex,slides,dots,captionText;
function initGallery(){
    slideIndex = 0;
    slides=document.getElementsByClassName("imageShow");
    slides[slideIndex].style.opacity=1;   //change the slide opacity to 1 for showing the image

    

    //disable nextPrevBtn if slide count is one
    if(slides.length<2){
        var nextPrevBtns=document.querySelector(".leftArrow,.rightArrow");
        nextPrevBtns.style.display="none";
        for (i = 0; i < nextPrevBtn.length; i++) {
            nextPrevBtn[i].style.display="none";
        }
    }

    //add dots under the slideshow
    dots=[];
    var dotsContainer=document.getElementById("dotsContainer"),i;
    for (i = 0; i < slides.length; i++) {
        var dot=document.createElement("span");
        dot.classList.add("dots"); 
        dotsContainer.append(dot); //append the dots to the class list dot
        dot.setAttribute("onclick","moveSlide("+i+")"); //set attribute for the dot
        dots.push(dot); //adding the dots to the class list dot
    }
    dots[slideIndex].classList.add("active");
}
initGallery(); 	//call the initGallery function

// this function is for plus slides
function plusSlides(n) {
    moveSlide(slideIndex+n);
}

// function for moving the slide
function moveSlide(n){
	// declare some of the variable
    var i;			
    var current,next;
    var moveSlideAnimClass={
          forCurrent:"",
          forNext:""
    };
	 
    var slideTextAnimClass;
    if(n>slideIndex) {  // so if n is bigger than the slide index 
        if(n >= slides.length){n=0;} //then n = 0 
        moveSlideAnimClass.forCurrent="moveLeftCurrentSlide"; // move left to the next slide
        moveSlideAnimClass.forNext="moveLeftNextSlide"; 	// move left to the next slide
       
    }else if(n<slideIndex){ // if n smaller than slide index 
        if(n<0){n=slides.length-1;} // 
        moveSlideAnimClass.forCurrent="moveRightCurrentSlide";	//move right to the previous slide
        moveSlideAnimClass.forNext="moveRightPrevSlide"; 		//move right to the previous slide
       
    }

    if(n!=slideIndex){
        next = slides[n];
        current=slides[slideIndex];
        for (i = 0; i < slides.length; i++) {
            slides[i].className = "imageShow";
            slides[i].style.opacity=0; //change the slide opacity to 0 for hiding the image
            dots[i].classList.remove("active"); //remove the class active 
        }
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);
        dots[n].classList.add("active"); //add class active to the dots so the active dots will having the darker color
        slideIndex=n;
        
    }

}
// set the timer for changing the slides automatically 
var timer=null;
function setTimer(){
    timer=setInterval(function () {
        plusSlides(1) ;
    },3000); //set the timer for 3000 mileseconds which is 3 seconds
}
setTimer();
// end of slideshow 



