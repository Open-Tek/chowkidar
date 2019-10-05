$(function() {
    var batchTable = $('#society');
    batchTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/society/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    batchTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/batch/' + $id);
    });
})
