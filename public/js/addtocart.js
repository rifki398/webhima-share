const product_buku=[
    {
        image:'../images/store/mary_boas.jpg',
        title:'Fisika Matematika',
        price:90000,
    },
    {
        image:'../images/store/fisdas1.jpg',
        title:'Fisika Dasar 1',
        price:50000,
    },
    {
        image:'../images/store/optoelektronika.jpg',
        title:'Diktat Optoelektronika',
        price:50000,
    },
    {
        image:'../images/store/fismod.jpg',
        title:'Konsep Fisika Modern',
        price:70000,
    },
    {
        image:'../images/store/kuantum.jpg',
        title:'Fisika Kuantum',
        price:50000,
    },
    {
        image:'../images/store/mary_boas.jpg',
        title:'Fisika Matematika',
        price:90000,
    },
    {
        image:'../images/store/fisdas1.jpg',
        title:'Fisika Dasar 1',
        price:50000,
    },
    {
        image:'../images/store/optoelektronika.jpg',
        title:'Diktat Optoelektronika',
        price:50000,
    },
    {
        image:'../images/store/fismod.jpg',
        title:'Konsep Fisika Modern',
        price:70000,
    }
];

const product_seragam=[
    {
        image:'../images/store/kemejaputih.png',
        title:'Kemeja Putih',
        price:120000,
    },
    {
        image:'../images/store/celanakain.jpg',
        title:'Celana kain hitam',
        price:150000,
    },
    {
        image:'../images/store/dasi.jpg',
        title:'Dasi hitam',
        price:20000,
    },
    {
        image:'../images/store/pantofelpria.jpg',
        title:'Sepatu pantofel Pria',
        price:190000,
    },
    {
        image:'../images/store/pantofelwanita.jpg',
        title:'Sepatu pantofel wanita',
        price:190000,
    }
];

const product_souvenir=[
    {
        image:'../images/store/topi.jpg',
        title:'Topi',
        price:15000,
    },
    {
        image:'../images/store/jam.jpg',
        title:'Jam dinding',
        price:30000,
    },
    {
        image:'../images/store/gantungankunci.jpg',
        title:'Gantungan kunci',
        price:5000,
    },
    {
        image:'../images/store/bonekawisuda.jpg',
        title:'Boneka wisuda',
        price:40000,
    },
    {
        image:'../images/store/buket.jpg',
        title:'Buket wisuda',
        price:80000,
    }
];

const categories_buku=[... new Set(product_buku.map((item)=>
    {return item}
))];
const categories_seragam=[...new Set(product_seragam.map((item)=>
    {return item}
))];
const categories_souvenir=[...new Set(product_souvenir.map((item)=>
    {return item}
))];

let i_buku=0, i_seragam=0, i_souvenir=0;
document.getElementById('item-buku').innerHTML=categories_buku.map((item)=>{
    var {image,title,price}=item;
    return(
        `<div class="item-div">
            <div class="item-list">
                <img src=${image}>
                <p>${title}</p>
                <h6>Rp${price}</h6>`+
                `<button onclick='addtocart(`+(i_buku++)+`,1)'>Add-Cart</button>`+
            `</div>
        </div>`
    )
}).join(' ');
document.getElementById('item-seragam').innerHTML=categories_seragam.map((item)=>{
    var {image,title,price}=item;
    return(
        `<div class="item-div">
            <div class="item-list">
                <img src=${image}>
                <p>${title}</p>
                <h6>Rp${price}</h6>`+
                `<button onclick='addtocart(`+(i_seragam++)+`,2)'>Add-Cart</button>`+
            `</div>
        </div>`
    )
}).join(' ');
document.getElementById('item-souvenir').innerHTML=categories_souvenir.map((item)=>{
    var {image,title,price}=item;
    return(
        `<div class="item-div">
            <div class="item-list">
                <img src=${image}>
                <p>${title}</p>
                <h6>Rp${price}</h6>`+
                `<button onclick='addtocart(`+(i_souvenir++)+`,3)'>Add-Cart</button>`+
            `</div>
        </div>`
    )
}).join(' ');

//---------------------------------------------------- FOR TABLE CHECKOUT------------------
let cart=[];
function addtocart(a,n){
    if(n==1){ 
        // buku
        cart.push({...categories_buku[a]});
    }else if(n==2){
        // seragam
        cart.push({...categories_seragam[a]});
    }else if(n==3){
        // souvenir
        cart.push({...categories_souvenir[a]});
    }
    displaycart();
}
function displaycart(){
    let n=cart.length;
    let jumlah=1;
    let title=cart[n-1].title;
    let price=cart[n-1].price;
    let table=document.getElementById('table-order');
    let row=table.insertRow(1);
    let cell1=row.insertCell(0);
    let cell2=row.insertCell(1);
    let cell3=row.insertCell(2);
    cell1.innerHTML=title;
    cell2.innerHTML=jumlah;
    cell3.innerHTML=`Rp${jumlah*price}`;

    let sam=0;
    for(let i=0;i<n;i++){
        sam=sam+cart[i].price;
    }
    document.getElementById('total-price').innerHTML=`Rp${sam}`;
}
function deleteRow(){
    let x=document.getElementById('table-order').rows.length;
    // at least 2 row (first and final)
    for(let j=1;j<x-1;j++){
        if(x==2){
            break;
        }
        document.getElementById('table-order').deleteRow(1); 
    }
    cart=[];
    document.getElementById('total-price').innerHTML=`Rp0`;
}