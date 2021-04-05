jQuery(document).ready(function () {
 
    $("#create").click(function (event) {
        event.preventDefault();
       
        if (!$('#district').val() || $('#district').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select center name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#center').val() || $('#center').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter center name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

 
            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/php/center.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
//remove preloarder
                   

                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });
    
    
    
    $("#update").click(function (event) {
        event.preventDefault();
       
        if (!$('#district').val() || $('#district').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select center name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#center').val() || $('#center').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter center name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

 
            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/php/center.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
//remove preloarder
                   

                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });

  


});


