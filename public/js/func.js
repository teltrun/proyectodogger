function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#subirFoto + img').remove();
            $('#subirFoto').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#subirFoto").change(function () {
    filePreview(this);
});