	let btn1 = document.querySelectorAll(".btn1");
	let form1 = document.querySelectorAll(".form1");
	for (let i = 0; i < 1000; i++) {
			btn1[i].onclick = function(){
				form1[i].style.display = "block";
				btn1[i].style.display = "none";
			}
	}
	