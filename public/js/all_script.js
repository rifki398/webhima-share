$(function(){
    $('#header').load("/header.html");
    $('#log-in').load("/login.html");
    $('#footer').load("/footer.html");
});
//*--------------------------------------------- FOR LOGIN ---------------------------------------------
function getLogIn(){
    let login=document.getElementById("popup-login");
    login.style.visibility="visible";
    document.body.style.overflow="hidden";
};
function getClose(){
    let close=document.getElementById("popup-login");
    close.style.visibility="hidden";
    document.body.style.overflow="auto";
};
//!----------------------------------------- CABINET -----------------------------------------------
window.addEventListener('scroll',function(){
    let content=document.querySelector('#cabinet-section');
    let contentPosition=content.getBoundingClientRect().top;
    let screenPosition=window.innerHeight;
    if(contentPosition<screenPosition){
        content.classList.add('active-appear');
    }else{
        content.classList.remove('active-appear');
    }
});
function openPopup(cabinet){
    let cab=document.getElementById(cabinet);
    cab.classList.toggle("active-popup");
};
function closePopup(cabinet){
    let cab=document.getElementById(cabinet);
    cab.classList.remove("active-popup");
};
function getBlur(){
    let blur_cabinet=document.getElementById("cabinet-section");
    blur_cabinet.classList.toggle("active-blur");
    let blur_head=document.getElementById("header")
    blur_head.classList.toggle("active-blur");
    let blur_home=document.getElementById("background-img");
    blur_home.classList.toggle("active-blur");
};
//?--------------------------------------- PUBLICATION --------------------------------------------------
function scrollWin(x,y){
    window.scrollTo(x,y);
};
//TODO------------------------------------- EVENTS ------------------------------------------------------

//!-------------------------------------------- STORE ---------------------------------------------------
function openPayment(){
    let open=document.getElementById("payment-popup");
    open.style.display='block';
};
function closePayment(){
    let close=document.getElementById("payment-popup");
    close.style.display='none'
};
$(document).ready(function(){
    $(".item-list-1").click(function(){
        $("#item-buku").show();
        $("#item-seragam").hide();
        $("#item-souvenir").hide();
    });
    $(".item-list-2").click(function(){
        $("#item-buku").hide();
        $("#item-seragam").show();
        $("#item-souvenir").hide();
    });
    $(".item-list-3").click(function(){
        $("#item-buku").hide();
        $("#item-seragam").hide();
        $("#item-souvenir").show();
    });
});