const pub_content=[
    {
        image:'../images/publication/pdf.png',
        name:'M. Dwi Putra Sufandi'
    },
    {
        image:'../images/publication/pdf.png',
        name:'Joko Subianto'
    },
    {
        image:'../images/publication/pdf.png',
        name:'Moch. Mehdi Al Mahdani'
    },
    {
        image:'../images/publication/pdf.png',
        name:'Argya Anindya Maghfirridho'
    },
    {
        image:'../images/publication/pdf.png',
        name:'Moch. Sidiq Cahyana'
    },
    {
        image:'../images/publication/pdf.png',
        name:'Moh Rifqy Risqullah'
    }
];

document.getElementById('publication-content').innerHTML=pub_content.map((items)=>{
    var {image,name}=items;
    return(
        `<div class="slider-card slider-creation-1">
            <div>
                <img src=${image}>
            </div>
            <h5>${name}</h5>
        </div>`
    )
}).join('');