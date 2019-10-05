function initializeSelect2(selector, url, placeholder = "") {
    let select = $(selector);
    select.select2({
        placeholder: placeholder,
        theme: "default",
        ajax: {
            url: url,
            method: 'GET',
            processResults: (data) => ({
                results: data.map((element) => ({
                    id: element.id,
                    text: element.name,
                }))
            })
        }
    })
}
