$(function() {
    var teacherTable = $('#difficulties');
    teacherTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/difficulty/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    teacherTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/difficulty/' + $id);
    });
})
