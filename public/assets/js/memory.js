$('#add-image').click(function() {
    const index = +$('#widget-counter').val();
    console.log(index);
    const tmpl = $('#memory_images').data('prototype').replace(/__name__/g, index);
    $('#memory_images').append(tmpl);
    $('#widget-counter').val(index + 1);

    handleDeleteButtons();
});

function handleDeleteButtons()
{
    $('button[data-action = "delete"]').click(function() {
        const target = this.dataset.target;
        $(target).remove();
    });
}

handleDeleteButtons();