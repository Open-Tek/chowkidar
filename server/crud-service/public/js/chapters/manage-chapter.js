$(function() {
    var chapterTable = $('#chapters');
    chapterTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/chapter/datatables',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'subject', name: 'subject'},
            {data: 'weightage', name: 'weightage'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    chapterTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/chapter/' + $id);
    });
})
