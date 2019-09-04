$('.custom-file-input').on('change',function(){
    var fileName = $(this).val().replace(/\\/g, '/').replace(/.*\//, '');
    $(".custom-file-label").text(fileName);
});