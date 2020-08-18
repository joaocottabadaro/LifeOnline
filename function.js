//   ajax para chamar a tabela toda vez que a pagina sofrer refresh
$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: 'tabela.php',
        success: function (data) {
            $('.tabela').html(data)

        }
    });
});




function filtrarCarros() {


    var modelosFiat = ['Argo', 'Cronos', 'Ducato', 'Mobi', 'Palio', 'Strada', 'Toro', 'Uno', 'Sienna', 'Punto'];

    var modelosVW = ['Amarok', 'Fox', 'Golf', 'Virtus', 'Gol', 'Jetta', 'Polo', 'Saveiro', 'T-Cross', 'Up', 'Voyage'];

    var modelosGM = ['Camaro', 'Corsa', 'Cruze', 'Onix', 'Opala', 'S10', 'Spin', 'Joy'];




    var marcaCarro = document.getElementById("marca-index").value;
    var modeloCarro = document.getElementById("modelo-index");
    modeloCarro.innerHTML = ""
    var option = document.createElement("option");
    option.text = "";
    modeloCarro.add(option);



    var vetorModelos;

    if (marcaCarro == 'Fiat') {
        vetorModelos = modelosFiat;
    }


    else if (marcaCarro == 'GM') {

        vetorModelos = modelosGM;

    }
    else if (marcaCarro == 'Volkswagen') {

        vetorModelos = modelosVW;

    }


    for (let index = 0; index < vetorModelos.length; index++) {

        let element = vetorModelos[index];
        var option = document.createElement("option")
        option.text = element;
        modeloCarro.add(option);

    }





}


function cadastrarCarros() {


    var modelosFiat = ['Argo', 'Cronos', 'Ducato', 'Mobi', 'Palio', 'Strada', 'Toro', 'Uno', 'Sienna', 'Punto'];

    var modelosVW = ['Amarok', 'Fox', 'Golf', 'Virtus', 'Gol', 'Jetta', 'Polo', 'Saveiro', 'T-Cross', 'Up', 'Voyage'];

    var modelosGM = ['Camaro', 'Corsa', 'Cruze', 'Onix', 'Opala', 'S10', 'Spin', 'Joy'];



    var marcaCarro = document.getElementById("marca").value;
    var modeloCarro = document.getElementById("modelo");
    modeloCarro.innerHTML = ""



    var vetorModelos;
    if (marcaCarro == 'Fiat') {
        vetorModelos = modelosFiat;
    }


    else if (marcaCarro == 'GM') {

        vetorModelos = modelosGM;

    }
    else if (marcaCarro == 'Volkswagen') {

        vetorModelos = modelosVW;

    }


    for (let index = 0; index < vetorModelos.length; index++) {

        let element = vetorModelos[index];
        var option = document.createElement("option")
        option.text = element;
        modeloCarro.add(option);


    }
    modelo.removeAttribute("disabled")

}
//pega valores do formulario index filter para mostrar na tabela os dados filtrados
$('#index-filter').submit(function (e) {
    e.preventDefault()

    let dados = new FormData(this)

    $.ajax({
        type: 'POST',
        url: 'tabela.php',
        data: dados,
        processData: false,
        cache: false,
        contentType: false,
        success: function (data) {
            $('.tabela').html(data)
           

        }
    });
});


