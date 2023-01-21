
var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");

var toToggle = document.querySelectorAll(".toggleColour");

document.addEventListener("scroll", function () {
	/*Apply classes for slide in bar*/
	scrollpos = window.scrollY;

	if (scrollpos > 10) {
		header.classList.add("bg-white");
		header.classList.remove("gradient");
		navaction.classList.remove("bg-white"); ""
		navaction.classList.add("gradient");
		navaction.classList.remove("text-gray-800");
		navaction.classList.add("text-white");
		//Use to switch toggleColour colours
		for (var i = 0; i < toToggle.length; i++) {
			toToggle[i].classList.add("text-gray-800");
			toToggle[i].classList.remove("text-white");
		}
		header.classList.add("shadow");
		navcontent.classList.remove("bg-gray-100");
		navcontent.classList.add("bg-white");
	} else {
		header.classList.remove("bg-white");
		header.classList.add("gradient");
		navaction.classList.remove("gradient");
		navaction.classList.add("bg-white");
		navaction.classList.remove("text-white");
		navaction.classList.add("text-gray-800");
		//Use to switch toggleColour colours
		for (var i = 0; i < toToggle.length; i++) {
			toToggle[i].classList.add("text-white");
			toToggle[i].classList.remove("text-gray-800");
		}

		header.classList.remove("shadow");
		navcontent.classList.remove("bg-white");
		navcontent.classList.add("bg");
	}
});



var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
	var target = (e && e.target) || (event && event.srcElement);

	//Nav Menu
	if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
			// click on the link
			if (navMenuDiv.classList.contains("hidden")) {
				navMenuDiv.classList.remove("hidden");
			} else {
				navMenuDiv.classList.add("hidden");
			}
		} else {
			// click both outside link and outside menu, hide menu
			navMenuDiv.classList.add("hidden");
		}
	}
}
// function checkParent(t, elm) {
// 	while (t.parentNode) {
// 		if (t == elm) {
// 			return true;
// 		}
// 		t = t.parentNode;
// 	}
// 	return false;
// }
// HTMLDataListElement
//afficher le formulaire de reservation pour company//
// var others = document.getElementById("others");

// let button = document.getElementById("aa");
// button.addEventListener("click", () => {
//     others.classList.toggle('hidden');
// });
//suite options 1

var todo = document.getElementById("todo");
// var todobutton = document.getElementById("todobutton");
// var doing = document.getElementById("doing");
// var doingbutton = document.getElementById("doingbutton");
// var done = document.getElementById("done");
// var donebutton = document.getElementById("donebutton");

// function todotache(){
//    var todotach = document.createElement("textarea");
//    todo.append(todotach);
//    todotach.classList.add('textarea');
// }
function todoarea() {
	var todoarea = document.getElementById("todoarea");
	var todobutton = document.getElementById("todobutton");

	todoarea.classList.toggle("hidden");
	todobutton.classList.toggle("hidden");


}

function doingarea(){
	var doingarea = document.getElementById("doingarea");
	var doingbutton = document.getElementById("doingbutton");

	doingarea.classList.toggle("hidden");
	doingbutton.classList.toggle("hidden");
	// console.log(doingarea);


	}
function donearea(){
	var donearea = document.getElementById("donearea");
	var donebutton = document.getElementById("donebutton");

	donearea.classList.toggle("hidden");
	donebutton.classList.toggle("hidden");


	}
	function testgg(id) {
		let overlay = document.getElementById(`overlay${id}`)
		overlay.classList.toggle('hidden')
		overlay.classList.toggle('flex')
	}
	function closegg(id) {
		let overlay = document.getElementById(`overlay${id}`)
		overlay.classList.toggle('hidden')
		overlay.classList.toggle('flex')
	}
// window.addEventListener('DOMContentLoaded', () => {
// 	const delBtn = document.querySelectorAll('.delete-btn')
// 	const closeBtn = document.querySelectorAll('.close-modal')
// 	console.log(delBtn);

// 	const toggleModal = () => {
// 		overlay.classList.toggle('hidden')
// 		overlay.classList.toggle('flex')
// 	}
// 	delBtn.forEach(item => {
// 		item.addEventListener('click', toggleModal)
// 	})
// 	// delBtn.forEach(toggleModal);
// 	// forEach(delBtn as delete){
// 	// 	delBtn.addEventListener('click', toggleModal)

// 	// }

// 	function closegg(id) {
// 		const overlay = document.getElementById(`overlay${id}`)
// 		const delBtn = document.querySelectorAll('.delete-btn')
// 	const closeBtn = document.querySelectorAll('.close-modal')
// 	}



// 	closeBtn[0].addEventListener('click', toggleModal)
// 	closeBtn[1].addEventListener('click', toggleModal)
// }
// )


function taches(){
	var taches  = document.getElementById("taches");
	// var btn  = document.getElementById("tachesbtn");
	taches.classList.toggle('hidden');

}
function tachesnumber(v){
	var form=  document.getElementById("tachesdiv");
	// var input = document.createElement("input");
    form.innerHTML = "";
	for (let i=1 ;i<=v;i++){
		var div =  document.createElement("div");
		
		var input = document.createElement("textarea");
		div.setAttribute("class","flex");
		
		input.setAttribute("name", `input${i}`);
		input.setAttribute("class","textarea");
		var date = document.createElement("input");
		
		date.setAttribute("name", `date${i}`);
		date.setAttribute("type", `date`);
		date.setAttribute("class","block border border-grey-light  p-3 rounded mb-4");
		div.append(input,date);
		form.append(div);
		

	}

}
