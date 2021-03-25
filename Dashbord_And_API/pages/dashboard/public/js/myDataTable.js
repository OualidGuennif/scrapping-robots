$(document).ready(function() {
    $('#dataTableId').DataTable({
        "lengthMenu": [ [5, 10, 25, -1], [5, 10, 25, "Tous"] ],
        language:{
            "sInfo": "Affichage de l'élément _START_ à _END_ sur _MAX_",
            "sLengthMenu":     "Afficher par _MENU_",
            "sEmptyTable":     "Aucune donnée disponible",
            "sSearch" : "Rechercher",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "sProcessing":     "Traitement...",
            "sLoadingRecords": "Chargement...",
            "sInfoEmpty":      "Affichage d'aucun élément",
            paginate: {
                "sFirst": "Premier",
                "sLast": "Dernier",
                "sNext": "Suivant",
                "sPrevious": "Précédent"
            }
        }
    });

    $('#dataTableId2').DataTable({
        "lengthMenu": [ [5, 10, 25, -1], [5, 10, 25, "Tous"] ],
        language:{
            "sInfo": "Affichage de l'élément _START_ à _END_ sur _MAX_",
            "sLengthMenu":     "Afficher par _MENU_",
            "sEmptyTable":     "Aucune donnée disponible",
            "sSearch" : "Rechercher",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "sProcessing":     "Traitement...",
            "sLoadingRecords": "Chargement...",
            "sInfoEmpty":      "Affichage d'aucun élément",
            paginate: {
                "sFirst": "Premier",
                "sLast": "Dernier",
                "sNext": "Suivant",
                "sPrevious": "Précédent"
            }
        }
    });
});