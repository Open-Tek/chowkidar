$(function() {
    var subjectTable = $('#subjects');
    subjectTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/subject/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    subjectTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/subject/' + $id);
    });
})
