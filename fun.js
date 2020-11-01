		let txt = document.querySelectorAll(".soh");
		let like = document.querySelectorAll(".icon");
		let	zakl = document.querySelectorAll(".iconz");
		for (let i = 0; i < 1000; i++) {
			like[i].onclick = function(){
				like[i].src = "heart.png";
			}
			zakl[i].onclick = function(){
				zakl[i].src = "176.png";
				txt[i].style.opacity = 100 + "%";
				setTimeout(disp,3000)
			}
			let disp = function(){
				txt[i].style.opacity = 0 + "%";
			}
		}
		