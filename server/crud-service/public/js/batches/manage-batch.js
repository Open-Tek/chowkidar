$(function() {
    var batchTable = $('#batches');
    batchTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/batch/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'start_date', name: 'start_date'},
            {data: 'end_date', name: 'end_date'},
            {data: 'enroll', name: 'enroll'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    batchTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/batch/' + $id);
    });
})
