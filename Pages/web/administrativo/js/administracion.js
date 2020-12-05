function verInfoClienteR(data) {
    $('#example').DataTable({
        data: data,
        columns: [{
                title: 'Nombre',
                width: "90px",
                data: "7"
            },
            {
                title: "Cedula",
                width: "70px",
                data: "1"
            },
            {
                title: "Tipo de Cita",
                width: "95px",
                data: "2"
            },
            {
                title: "Fecha",
                width: "70px",
                data: "3"
            },
            {
                title: "Hora",
                width: "50px",
                data: "4"
            },
            {
                title: "Observación",
                data: "5"
            },
            {
                title: "Estado",
                width: "90px",
                data: "6",
                render: function(data, type, row, meta) {
                    if (data === "atendido") {
                        return '<div class="alert-success text-center text-dark h-25" role="alert"><i class="far fa-check-circle"></i><b> ' + data + '</b></div>';
                    }
                }
            },
        ],
        lengthMenu: "5",
        "language": {
            "lengthMenu": "Mostrar _MENU_ filas por paginas",
            "zeroRecords": "No encontrado - Lo sentimos",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "0 Entardas Disponibles",
            "infoFiltered": "(Filtrando: _MAX_ total de entradas)"
        }
    });
}

function verInfoClienteA(data) {
    $('#example2').DataTable({
        data: data,
        columns: [{
                title: 'Nombre',
                width: "90px",
                data: "7"
            },
            {
                title: "Cedula",
                width: "70px",
                data: "1"
            },
            {
                title: "Tipo de Cita",
                width: "90px",
                data: "2"
            },
            {
                title: "Fecha",
                width: "70px",
                data: "3"
            },
            {
                title: "Hora",
                width: "50px",
                data: "4"
            },
            {
                title: "Observación",
                data: "5"
            },
            {
                title: "Estado",
                width: "100px",
                data: "6",
                render: function(data, type, row, meta) {
                    if (data === "aprovado") {
                        return '<div class="alert-success text-center text-dark h-25" role="alert"><i class="far fa-check-circle"></i><b> ' + data + '</b></div>';
                    }
                }
            },
            {
                title: "Acción",
                width: "180px",
                data: "0",
                render: function(data, type, row, meta) {
                    return '<div class="col d-flex justify-content-center"><div class="w-50 rounded btn-success mr-1"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AA&id=' + data + '&estado=atendido" class=" text-center text-white h-25" ><b>Atendido</b></a></div><div class="w-50 rounded btn-warning"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AA&id=' + data + '&estado=ausente" class=" text-center text-white h-25" ><b>Ausente</b></a></div></div>';

                }
            }
        ],
        lengthMenu: "5",
        "language": {
            "lengthMenu": "Mostrar _MENU_ filas por paginas",
            "zeroRecords": "No encontrado - Lo sentimos",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "0 Entardas Disponibles",
            "infoFiltered": "(Filtrando: _MAX_ total de entradas)"
        }
    });
}