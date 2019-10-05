$(function () {
    var counter             =      0;
    var optionsTable        =      $("#options");
    var addOptionButton     =      $('#add-option');

    initializeSelect2('#subjects', '/subject/all', 'Select a subject');
    initializeSelect2('#chapters', '/chapter/subject/0/all', 'Select a chapter');
    initializeSelect2('#difficulties', '/difficulty/all', 'Select a difficulty');
    initializeTinyEditor(".editor");

    $('#subjects').change(function () {
        let id = $('#subjects').val();
        initializeSelect2('#chapters', '/chapter/subject/' + id + '/all', 'Select a chapter');
    });

    addOptionButton.click(() => addOption());

    function addOption() {
        counter++;
        let row = '<tr id="row-' + counter + '">\n' +
                        '<td class=\'col-md-6\'>\n' +
                            '<textarea name=\'option_statement[]\' id="option-' + counter + '" class=\'form-control editor\'></textarea>\n' +
                        '</td>\n' +
                        '<td>\n' +
                            '<input type=\'checkbox\' name=\'option_correct[' + counter  + ']\' value="1">\n' +
                            '<input type=\'hidden\' name=\'option_correct[' + counter  + ']\' value="0">\n' +
                        '</td>\n' +
                        '<td>\n' +
                            '<button class=\'btn btn-danger btn-icon\' id="' + counter + '">\n' +
                                '<i class=\'la la-trash\'></i>\n' +
                            '</button>\n' +
                        '</td>\n' +
                    '</tr>';
        optionsTable.append(row);
        initializeTinyEditor("#option-" + counter);
        $(`#${counter}`).click(function() {
            let id = $(this).attr("id");
            $('#row-' + id).remove();
        });
    }

    addOption();
})

