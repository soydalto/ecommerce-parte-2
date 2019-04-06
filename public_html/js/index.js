document.querySelector(".icon-for-slide").addEventListener("click",navSlide);


nav = 0;
ul = document.querySelector(".responsive-ul");
function navSlide(){
    if (nav == 0) {
    	ul.style.animation = "aparecerNav 1s forwards";
    	ul.style.display = "block";
    	nav ++;
    } else {
    	ul.style.animation = "desaparecerNav 1s forwards";
    	setTimeout(()=>{
    		ul.style.display = "none";
    	},1000);
        nav--
    }
}