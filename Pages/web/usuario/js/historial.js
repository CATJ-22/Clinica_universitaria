function verInfoCliente(data) {
    $('#example').DataTable({
        data: data,
        columns: [
            {
                title: '<i class="far fa-calendar-times"></i>',
                width: "5px",
                data: "6",
                render: function(data, type, row, meta) {
                    if (row[5] === "ausente") {
                        return '<a class=" rounded text-center text-danger" style="font-size: 20px;" href="../../../Procesos/usuario/eliminarCita_P.php?id='+data+'"><i class="far fa-calendar-times"></i></a>';
                    }else{
                        return '<a class=" rounded text-center text-danger" href="../../../Procesos/usuario/eliminarCita_P.php?id='+data+'" hidden><i class="far fa-calendar-times"></i></a>';
                    }
                }
            },
            {
                title: "Cedula",
                width: "70px",
                data: "0"
            },
            {
                title: "Tipo de Cita",
                data: "1"
            },
            {
                title: "Fecha",
                width: "70px",
                data: "2"
            },
            {
                title: "Hora",
                width: "50px",
                data: "3"
            },
            {
                title: "Observación",
                data: "4"
            },
            {
                title: "Estado",
                width: "90px",
                data: "5",
                render: function(data, type, row, meta) {
                    if (data === "atendido") {
                        return '<div class="alert-warning text-center text-dark h-25" role="alert"><i class="fas fa-user-check"></i><b> ' + data + '</b></div>';
                    } else if (data === "aprovado") {
                        return '<div class="alert-success text-center text-dark h-25" role="alert"><i class="far fa-check-circle"></i><b> ' + data + '</b></div>';
                    } else if (data === "ausente") {
                        return '<div class="alert-danger text-center text-dark h-25" role="alert"><i class="fas fa-user-times"></i><b> ' + data + '</b></div>';
                    }
                }
            }
        ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ filas por paginas",
            "zeroRecords": "No encontrado - Lo sentimos",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "0 Entardas Disponibles",
            "infoFiltered": "(Filtrando: _MAX_ total de entradas)"
        }
    });
}