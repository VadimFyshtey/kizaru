$(document).ready(function(){

    $("input[name='MusicSearch[name]']").attr('placeholder', 'Введите название и нажмите Enter');
    // $("select[name='MusicSearch[album]']").append('<option selected hidden>Выберете альбом</option>');
    $("select[name='MusicSearch[album]'] > option").first().text('Все альбомы');

});

