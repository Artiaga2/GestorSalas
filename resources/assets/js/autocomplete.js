$( function() {
    var availableTags = [
        "Libre",
        "Ocupado",
        "Cerrado",


    ];
    $( "#disponibilidad" ).autocomplete({
        source: availableTags
    });
} );