$( function() {
    var availableTags = [
        "Libre",
        "Ocupado",
        "Cerrado",


    ];
    $( "#tags" ).autocomplete({
        source: availableTags
    });
} );