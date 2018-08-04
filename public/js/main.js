$(document).ready(function (){
    var ul = $('#active-list').data('ul');
    var li = $('#active-list').data('li');

    console.log(ul);
    $('.'+ul).addClass('active').siblings().removeClass('active');
    $('.'+li).addClass('active').siblings().removeClass('active');

});