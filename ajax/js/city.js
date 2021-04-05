
$(document).ready(function () {
    
    $('#district').change(function () {

        $('.someBlock').preloader();
        //grab all form data  

        var disID = $(this).val();

        $('#city-bar').empty();
        
        $.ajax({
            url: "ajax/php/city.php",
            type: "POST",
            data: {
                district: disID,
                action: 'GETCITYSBYDISTRICT'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                var html = '<option value="" > - Select your City - </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#city-bar').empty();
                $('#city-bar').append(html);
            }
        });
    });
});

