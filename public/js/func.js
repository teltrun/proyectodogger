window.onload=function(){

    fetch('https://restcountries.eu/rest/v2/all')
        .then(function(response) {
            return response.json();
        })
        .then(function(myJson) {
            // console.log(myJson);
            $.each(myJson, function(data, index){
                $("#country").append('<option value="'+index['name']+'">'+index['name']+'</option>');
            });
        });

    $("#country").change(function () {
            if($('#country').selectedIndex != 0){
                cargarProvincia();
            }
            
        });

    function cargarProvincia(){
        fetch('https://dev.digitalhouse.com/api/getProvincias')
        .then(function(response) {
            return response.json();
        })
        .then(function(myJson) {
            console.log(myJson['data']);
            $.each(myJson['data'], function(data, index){
                $("#provincia").append('<option value="'+index['state']+'">'+index['state']+'</option>');
            });
        });
    }

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

};
