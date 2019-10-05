$(function() {
    var studentTable = $('#questions');
    studentTable.DataTable({
        processing: true,
        serverSide: true,
        ajax: '/question/datatable',
        columns: [
            {data: 'question', name: 'question'},
            {data: 'chapter', name: 'chapter'},
            {data: 'marks', name: 'marks'},
            {data: 'edit', name: 'edit'},
            {data: 'delete', name: 'delete'},
        ]
    });

    studentTable.on('click', '.delete', function(e) {
        $id = $(this).attr('id');
        $('#delete_form').attr('action', '/student/' + $id);
    });
})
