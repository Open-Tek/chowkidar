$(function() {
    var studentTable = $('#students');
    studentTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/student/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'view', name: 'view'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    studentTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/student/' + $id);
    });
})
