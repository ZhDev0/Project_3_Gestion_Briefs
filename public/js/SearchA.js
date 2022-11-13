$('#searcha').on('keyup', function () {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: 'searcha',
        // url : '{{URL::to('searcha')}}',
        data: { 'key': $value },
        success: function (data) {
            $('#tbodyy').html(data);
        }
    });
});
