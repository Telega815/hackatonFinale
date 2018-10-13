window.addEventListener("DOMContentLoaded", init);

function init() {
    logout.style.display='none';

    document.getElementsByClassName('loginName')[0].innerText = "Войти";

    var butReg=document.getElementById('butReg');
    var logIn=document.getElementById('logIn');
    var blackpanelReg=document.getElementById('blackpanelReg');
    var closeReg1=document.getElementById('closeReg1');
    var closeReg2=document.getElementById('closeReg2');

    var closeReg3=document.getElementById('closeReg3');//войти



    var regButton=document.getElementById('regButton');
    var winLogIn=document.getElementById('winLogIn');
    var winRegistration=document.getElementById('winRegistration');

    butReg.addEventListener('click',function() {
        blackpanelReg.style.display='flex';
        winLogIn.style.display='block';
    });

    closeReg1.addEventListener('click',function() {
        blackpanelReg.style.display='none';
        winLogIn.style.display='none';
        winRegistration.style.display='none';
    });


    closeReg2.addEventListener('click',function() {
        blackpanelReg.style.display='none';
        winLogIn.style.display='none';
        winRegistration.style.display='none';
    });

    regButton.addEventListener('click',function() {
        winLogIn.style.display='none';
        winRegistration.style.display='block';
    });
}


function changeName(){
    var logout = document.getElementById("logout");
    document.getElementById("butReg").innerText = "Миша Дряев";
    blackpanelReg.style.display='none';
        winLogIn.style.display='none';
        winRegistration.style.display='none';
        logout.style.display='block';
}