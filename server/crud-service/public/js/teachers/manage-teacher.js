$(function() {
    var teacherTable = $('#teachers');
    teacherTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/teacher/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'view', name: 'view'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    teacherTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/teacher/' + $id);
    });
})
