$('.fotos').slick({
    /*autoplay: true,
    autoplaySpeed: 1300*/
});

var mudarNomeProduto = function(){
    var el = $('.slick-current').attr("data-slick-index");
    if(el== 0){
        $('#nome-produto').text('Produto 1');
        $('#product-description').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus malesuada lacus eu consequat. In auctor felis vitae neque ultrices malesuada. Nunc maximus sit amet libero ut finibus. In sed enim at velit vehicula porta. Cras sed dapibus mauris. Suspendisse nec accumsan sem. Donec non lorem quis mauris porta aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus malesuada lacus eu consequat. In auctor felis vitae neque ultrices malesuada. Nunc maximus sit amet libero ut finibus. In sed enim at velit vehicula porta. Cras sed dapibus mauris. Suspendisse nec accumsan sem. Donec non lorem quis mauris porta aliquam.');
    }else if(el == 1){
        $('#nome-produto').text('Produto 2');
        $('#product-description').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus malesuada lacus eu consequat. In auctor felis vitae neque ultrices malesuada. Nunc maximus sit amet libero ut finibus. In sed enim at velit vehicula porta. Cras sed dapibus mauris. Suspendisse nec accumsan sem. Donec non lorem quis mauris porta aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
    }else if(el == 2){
        $('#nome-produto').text('Produto 3');
        $('#product-description').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus malesuada lacus eu consequat. In auctor felis vitae neque ultrices malesuada. Nunc maximus sit amet libero ut finibus. In sed enim at velit vehicula porta. Cras sed dapibus mauris. Suspendisse nec accumsan sem. Donec non lorem quis mauris porta aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus malesuada lacus eu consequat. In auctor felis vitae neque ultrices malesuada. Nunc maximus sit amet libero ut finibus.');
    }
};

setInterval(mudarNomeProduto, 400);