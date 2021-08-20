
let Fuiyohadmin = {
    init: function () {
        Fuiyohadmin.createFaq();
        Fuiyohadmin.summernote();
    },

    createFaq: function () {
        let parent = $('#createFaq');
        let btn = parent.find('.add-row');
        let row = parent.find('tbody');
        let i = 0;
        btn.on('click', function (event) {
            event.preventDefault();
            ++i;
            row.append(
                '<tr>' +
                    '<td><input type="text" class="form-control" id="category" name="category['+ i +'][name]"></td>' +
                    '<td class="text-center">' +
                        '<a href="#0" class="btn btn-danger py-0 del-row"><span class="material-icons">remove</span></a>' +
                    '</td>' +
                '</tr>'
            );
            $(document).on('click', '.del-row', function(e) {
                e.preventDefault();
                $(this).parents('tr').remove();
            })
        })
    },

    summernote: function () {
        $('.summernote').summernote({
			height:250,
			focus:true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                // ['insert', ['link', 'picture']]
                ['insert', ['link']]
            ]
		});
    }
}

$(document).ready(function () {
    Fuiyohadmin.init();
});
