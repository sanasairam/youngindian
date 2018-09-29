$(document).ready(function () {

    $('.volunteerRegistration').validate({ // initialize the plugin
        rules: {
            first_name: {
                required: true,
                minlength: 4
            },
            sur_name: {
                required: true,
                minlength: 4
            },
            gender: {
                required: true,
            },
            first_name: {
                required: true,
                minlength: 4
            },
            first_name: {
                required: true,
                minlength: 4
            },
            first_name: {
                required: true,
                minlength: 4
            },
            first_name: {
                required: true,
                minlength: 4
            },
            first_name: {
                required: true,
                minlength: 4
            },
            EmailId: {
                required: true,
                email: true
            },
            mobileNum1: {
                required: true,
                number: true,
                minlength: 10
            },
            address: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            fullName: " Please Enter Full Name",
            EmailId: " Please Enter Valid Email",
            mobileNum1: " Please Enter Valid Mobile",
            address: " Please Enter Contact Address",
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            console.log("sibmit")
            var a = document.getElementById('fullName').value;
            var b = document.getElementById('EmailId').value;
            var c = document.getElementById('mobileNum1').value;
            var d = document.getElementById('address').value;

            PatientInfo = {
                "name": a,
                "email": b,
                "mobile": c,
                "address": 'address',
                "title" : "title",
                "description" : d,
            };  
            getStartedPost(PatientInfo);

        }
    });

    // $('.mailSubscribe').validate({ // initialize the plugin
    //     rules: {
    //         EMAIL: {
    //             required: true,
    //             email: true
    //         },
    //     },
    //     messages: {
    //         EmailId: " Please Enter Valid Email",
    //     },
    //     submitHandler: function (form, e) {
    //         e.preventDefault();
    //         console.log("sibmit")

    //         var b = document.getElementById('EmailId').value;

    //         PatientInfo = {
    //             "name": '',
    //             "email": b,
    //             "mobile": c,
    //         };  
    //         getStartedPost(PatientInfo);

    //     }
    // });


    $('.app-link-send').validate({ // initialize the plugin
        rules: {
            mobileNum: {
                required: true,
                number: true,
                minlength: 10
            },
        },
        messages: {
            mobileNum: " Please Enter Valid Mobile",
        },
        errorClass: "error-msg-label",
        validClass: "has-error",
        errorElement: "label",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('validClass');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-success');
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            console.log("sibmit")

            var mobileNum1 = document.getElementById('mobileNum').value;

            MobileInfo = {
                "application": 'care',
                "mobile": mobileNum1,
                "country": '91',
            };  
            console.log(MobileInfo)
            appLinkSend(MobileInfo);

        }
    });

});


function getStartedPost(params){
    respmsg = document.getElementById("response-desc");
    
    $.ajax({
        type: "POST",
        url: "http://www.redheal.com/redheal/api/redheal/ticket/contact",
        dataType: "json",
        data : params, 
        success: function (response) {
            // console.log(response);
            console.log(response.status);
            if (response.status === "success") {
                $( "#response-desc" ).empty();
             txt = document.createTextNode(response.description);
             
            respmsg.appendChild(txt);
            
            } else {
                $( "#response-desc" ).empty();
            txt = document.createTextNode(response.description);
           
            respmsg.appendChild(txt);

            }
        },
    });
}

function appLinkSend(params){
    respmsgApplink = document.getElementById("response-msg-applink");
    console.log(params)
    $.ajax({
        type: "POST",
        url: "http://www.redheal.com/redheal/api/redheal/linkrequest",
        dataType: "json",
        data : params, 
        success: function (response) {
            // console.log(response);
            console.log(response.status);
            if (response.status === "success") {
                $( "#response-msg-applink" ).empty();
             txt = document.createTextNode(response.description);
             
             respmsgApplink.appendChild(txt);
            
            } else {
                $( "#response-msg-applink" ).empty();
            txt = document.createTextNode(response.description);
           
            respmsgApplink.appendChild(txt);

            }
        },
    });
}