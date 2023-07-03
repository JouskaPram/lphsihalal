function initDataTable() {
    let initTable = $("#table_init").DataTable({
        ordering: false,
        scrollX: true,
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
        dom: `
        <'row'<'col-sm-12'tr>>
        <'row'<'col-sm-6 col-md-6 'l><'col-sm-6 col-md-6 dataTables_pager'p>>`,
        buttons: [
            {
                extend: "excelHtml5",
                text: '<i class="fas fa-file-excel"></i> Export Excel',
                title: "Halal Registrasi",
            },
        ],
    });

    $("#search-table").keyup(function () {
        let value = $(this).val();
        initTable.search(value).draw();
    });
}

initDataTable();
