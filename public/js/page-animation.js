//!-------- APPEAR ANIMATION FOR #CABINET-SECTION
window.addEventListener('scroll',function(){
    let content=document.querySelector('#cabinet-section');
    let contentPosition=content.getBoundingClientRect().top;
    let screenPosition=window.innerHeight;
    if(contentPosition<screenPosition){
        content.classList.add('active-appear');
    }else{
        content.classList.remove('active-appear');
    }
})
