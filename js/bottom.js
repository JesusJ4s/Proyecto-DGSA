function irArriba(pxPamtalla){
	window.addEventListener('scroll', () => {
		var scroll = document.documentElement.scrollTop;
		
		if (scroll > pxPamtalla) {
			bottomArriba.style.right = 20 + "px";
		}else{
			bottomArriba.style.right = -100 + "px";
		}
	}); 
}
irArriba(250);