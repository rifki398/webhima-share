const text_img=[
    {
        image:'../images/events/event1.png',
        text:`Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud  ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`,
    },
    {
        image:'../images/events/event2.png',
        text:`Lorem2 ipsum  sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event3.png',
        text:`Lorem3 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor  ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event4.png',
        text:`Lorem4 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna . Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event5.png',
        text:`Lorem5 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  
        consequat.`
    },
    {
        image:'../images/events/event6.png',
        text:`Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud  ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`,
    },
    {
        image:'../images/events/event7.png',
        text:`Lorem2 ipsum  sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event8.png',
        text:`Lorem3 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor  ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event9.png',
        text:`Lorem4 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna . Ut enim ad minim 
        veniam, quis nobstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat.`
    },
    {
        image:'../images/events/event10.png',
        text:`Lorem5 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  
        consequat.`
    }
];

function appearPict(a){
    document.getElementById('container-img').src=text_img[a-1].image;
    document.getElementById('container-text').innerHTML=text_img[a-1].text;
}

let n=1;
document.getElementById('container-slide').innerHTML=text_img.map((items)=>{
    var {image}=items;
    return(
        `<div class="owl-pict">
            <img onclick="appearPict(
                `+(n++)+`)" src="${image}">
        </div>`
    )
}).join('');

let innerSlider=document.querySelector('#container-slide');
let isDrag=false, prevPageX, prevScrollLeft;

const dragStart=(e)=>{
    isDrag=true;
    prevPageX=e.pageX;
    prevScrollLeft=innerSlider.scrollLeft
}

const dragging=(e)=>{
    if(!isDrag) return;
    e.preventDefault(); // image will be no dragged 
    let positionDiff=e.pageX - prevPageX;
    innerSlider.scrollLeft=prevScrollLeft - positionDiff;
}

const dragStop=()=>{
    isDrag=false;
}

innerSlider.addEventListener('mousedown',dragStart);
innerSlider.addEventListener('mousemove',dragging);
innerSlider.addEventListener('mouseup',dragStop);

innerSlider.addEventListener('touchmove',dragging);
innerSlider.addEventListener('touchstart',dragStart);
innerSlider.addEventListener('touchend',dragStop);