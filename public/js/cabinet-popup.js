//!----------------------------------------- OPEN ---------------------------------------------------
function openPopup(cabinet){
    let cab=document.getElementById(cabinet);
    cab.classList.toggle("active-popup");
}
//?----------------------------------------- CLOSE ---------------------------------------------------
function closePopup(cabinet){
    let cab=document.getElementById(cabinet);
    cab.classList.remove("active-popup");
}
//*----------------------------------------- BLUR ----------------------------------------------------
function getBlur(){
    let blur_cabinet=document.getElementById("cabinet-section");
    blur_cabinet.classList.toggle("active-blur");
    let blur_head=document.getElementById("header")
    blur_head.classList.toggle("active-blur");
    let blur_home=document.getElementById("background-img");
    blur_home.classList.toggle("active-blur");
}
//TODO--------------------------------- OTHER ANIMATION -----------------------------------------------
function getLogIn(){
    let login=document.getElementById("popup-login");
    login.style.visibility="visible";
    document.body.style.overflow="hidden";
}
function getClose(){
    let close=document.getElementById("popup-login");
    close.style.visibility="hidden";
    document.body.style.overflow="auto";
}