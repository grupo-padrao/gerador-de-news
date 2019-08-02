$(document).on("keyup", "#titulo2", function () {
    var caracteresRestantes = 104;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracteres2").text(caracteresRestantes);
});

$(document).on("keyup", "#titulo3", function () {
    var caracteresRestantes = 104;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracteres3").text(caracteresRestantes);
});

$(document).on("keyup", "#titulo4", function () {
    var caracteresRestantes = 104;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracteres4").text(caracteresRestantes);
});

$(document).on("keyup", "#titulo5", function () {
    var caracteresRestantes = 104;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracteres5").text(caracteresRestantes);
});

/******************************************************************************/


$(document).on("keyup", "#linhaFina1", function () {
    var caracteresRestantes = 179;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracter1").text(caracteresRestantes);
});
$(document).on("keyup", "#linhaFina2", function () {
    var caracteresRestantes = 179;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracter2").text(caracteresRestantes);
});
$(document).on("keyup", "#linhaFina3", function () {
    var caracteresRestantes = 179;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracter3").text(caracteresRestantes);
});
$(document).on("keyup", "#linhaFina4", function () {
    var caracteresRestantes = 179;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracter4").text(caracteresRestantes);
});
$(document).on("keyup", "#linhaFina5", function () {
    var caracteresRestantes = 179;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    
    $(".caracter5").text(caracteresRestantes);
});

