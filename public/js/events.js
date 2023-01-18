$(document).ready(function(){
    $(".owl-pict").click(function displayContent(alamat){
        let foto=document.getElementById(alamat);
        $('.display-container').css("background-image",foto);
    });
});