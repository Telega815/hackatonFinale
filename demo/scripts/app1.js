window.addEventListener("DOMContentLoaded", init);

function init() {
	var but1=document.getElementById('but1');
	var blackpanel1=document.getElementById('blackpanel1');
	var close1=document.getElementById('close');

	but1.addEventListener('click',function() {
			blackpanel1.style.display='flex';
	});
	close1.addEventListener('click',function() {
			blackpanel1.style.display='none';
	});




	var but1=document.getElementById('but1');
	var blackpanel1=document.getElementById('blackpanel1');
	var close1=document.getElementById('close1');
	var ver=document.getElementById('but1'); 

	but1.addEventListener('click',function() {
			blackpanel1.style.display='flex';
	});
	close1.addEventListener('click',function() {
			blackpanel1.style.display='none';
			ver.style.backgroundColor="green";
	});
}