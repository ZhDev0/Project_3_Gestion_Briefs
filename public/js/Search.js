$('#search').on('keyup', function () {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: 'search',
        // url : '{{URL::to('search')}}',
        data: { 'key': $value },
        success: function (data) {
            $('#tbody').html(data);
        }
    });
});
