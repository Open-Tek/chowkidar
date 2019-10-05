$(function() {
    let subjectSelect = $('#subjects');

    // Select 2 initialization
    subjectSelect.select2({
        placeholder: 'Select a subject',
        theme: 'default',
        ajax: {
            url: '/subject/all',
            dataType: 'json',
            processResults: (data) => ({
                results: data.map((subject) => ({
                    id: subject.id,
                    text: subject.name
                }))
            })
        }
    })
});
