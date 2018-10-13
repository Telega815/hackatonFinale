window.addEventListener("DOMContentLoaded", init);

function init() {
	var but=document.getElementById('butt');
	var blackpanel=document.getElementById('blackpanel');
	var close=document.getElementById('close');

	but.addEventListener('click',function() {
			blackpanel.style.display='flex';
	});
	close.addEventListener('click',function() {
			blackpanel.style.display='none';
	});

	var but=document.getElementById('buttt');
	var blackpanel=document.getElementById('blackpanel');
	var close=document.getElementById('close');

	but.addEventListener('click',function() {
			blackpanel.style.display='flex';
	});
	close.addEventListener('click',function() {
			blackpanel.style.display='none';
	});


}




function changeAboutBackground() {
    var about = document.getElementById("about");
    var portfolio = document.getElementById("portfolio");
        about.style.backgroundColor='#CE5453';
        portfolio.style.backgroundColor='#33383E';
}

function changePortfolioBackground() {
    var about = document.getElementById("about");
    var portfolio = document.getElementById("portfolio");
        about.style.backgroundColor='#33383E';
        portfolio.style.backgroundColor='#CE5453';
}


function changecategoriesBackground(event) {
	var arr = document.getElementsByClassName("category");
	for (var i = 0; i < arr.length; i++) {
		arr[i].style.backgroundColor='#FFFFFF';
	}
    event.target.style.backgroundColor='#CE5453';
}
