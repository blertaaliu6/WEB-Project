const imgx = document.querySelector('.imgx');
const slides = imgx.getElementsByTagName('img');
var i = 0;


function nextSlide(){
    slides[i].classList.remove('active');
     i = (i + 1) % slides.length;
    slides[i].classList.add('active');
}

function prevSlide(){
    slides[i].classList.remove('active');
     i = (i - 1 +slides.length) % slides.length;
    slides[i].classList.add('active');

}


    const contentbx = document.querySelector('.contentbx');
    const slidesText = contentbx.getElementsByTagName('div');
    var j = 0;
    
    
    function nextSlideText(){
        slidesText[j].classList.remove('active');
         j = (j + 1) % slidesText.length;
         slidesText[j].classList.add('active');
    }
    
    function prevSlideText(){
        slidesText[j].classList.remove('active');
         j = (j - 1 +slidesText.length) % slidesText.length;
         slidesText[j].classList.add('active');
    
    }











