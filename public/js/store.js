function openPayment(){
    let open=document.getElementById("payment-popup");
    open.style.display='block';
}

function closePayment(){
    let close=document.getElementById("payment-popup");
    close.style.display='none'
}

$(document).ready(function(){
    $(".item-list-1").click(function(){
        $(".item-buku").show();
        $(".item-seragam").hide();
        $(".item-souvenir").hide();
    });
    $(".item-list-2").click(function(){
        $(".item-buku").hide();
        $(".item-seragam").show();
        $(".item-souvenir").hide();
    });
    $(".item-list-3").click(function(){
        $(".item-buku").hide();
        $(".item-seragam").hide();
        $(".item-souvenir").show();
    });
});