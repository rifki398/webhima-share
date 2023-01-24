const pub_content=[
    {
        image:'../images/publication/Pub-1.jpg',
        name:'Ambis Ngampus'
    },
    {
        image:'../images/publication/Pub-2.jpg',
        name:'Fisika Yeay'
    },
    {
        image:'../images/publication/Pub-3.jpg',
        name:'Pengen Libur'
    },
    {
        image:'../images/publication/Pub-4.jpg',
        name:'Halo Dek'
    },
    {
        image:'../images/publication/Pub-5.jpg',
        name:'Easy Dek'
    },
    {
        image:'../images/publication/Pub-6.jpg',
        name:'Susah Njir'
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