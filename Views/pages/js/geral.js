var loca = $(location).attr('href');

var lloca = loca.split('/');

if(lloca[5] == 'contato'){
    $('#contato').css('color','#585858');
    $('#contato').css('border-bottom','2px solid #585858');
}else if(lloca[5] == 'home'){
    $('#home').css('color','#585858');
    $('#home').css('border-bottom','2px solid #585858');
}else if(lloca[5] == 'loja'){
    $('#loja').css('color','#585858');
    $('#loja').css('border-bottom','2px solid #585858');
}