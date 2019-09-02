window.onload=function(){
    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#subirFoto + img').remove();
                $('#subirFoto').after('<img class= "tamañoFoto" src="'+e.target.result+'" width="450" height="300"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#subirFoto").change(function () {
        filePreview(this);
    });

    $('.publicaciones_imagen_perfil').on('click', 'img', function(){ 
        var thisSrc = $(this).attr('src');
        var idImagen = $(this).attr('idImagen');
        $('#detalleImagen img').attr('src', thisSrc);
        $('#postId').attr('name', idImagen);
        conseguirComentario(idImagen);
    });

    function conseguirComentario(id){
        console.log(id);
        fetch('/a')
        .then(function(data) {
            let comments = data.json;
            console.log(comments);
            // comments.forEach(addComentarios) 
        })
    }

    function addComentarios(datos){
        $("<div>", {
            'class': 'comentarios'
        }).append(
            $('<label>', {
                'class': 'usuarioComentario',
                'textContent': usuario
            }),
            $('<br>'),
            $('<label>', {
                'class': 'comentario',
                'textContent': comentario
            })
        ).hide().appendTo('#otraDiv').fadeIn('slow');
    };

}
