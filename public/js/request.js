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
            dob: {
                required: true,
                minlength: 4
            },
            email_id: {
                required: true,
                minlength: 4
            },
            mobile_num: {
                required: true,
                minlength: 4
            },
            area: {
                required: true,
                minlength: 4
            },
            pincode: {
                required: true,
                minlength: 4
            },
            address: {
                required: true,
                minlength: 4
            },
            state: { required: true },
            country: { required: true }

        },
        messages: {
            first_name: " Please Enter Full Name",
            sur_name: " Please Enter Valid Email",
            gender: " Please Select Gender",
            dob: " Please Enter Valid DOB",
            email_id: " Please Enter Valid email_id",
            mobile_num: " Please Enter Valid mobile_num",
            area: " Please Enter Valid area",
            pincode: " Please Enter Valid pincode",
            address: " Please Enter Valid address",
            state: " Please Enter Valid state",
            country: " Please Enter Valid country",

        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.radio_check') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         },
        submitHandler: function (form, e) {
            // e.preventDefault();
            var a = document.getElementById('first_name').value;
            var b = document.getElementById('sur_name').value;
            var c = document.getElementById('gender').value;


            PatientInfo = {
                "name": a,
                "email": b,
                "mobile": c,
            };  
            // getStartedPost(PatientInfo);

            console.log("validated successfully", PatientInfo);

            return true;

        }
    });
});




//     $('.app-link-send').validate({ // initialize the plugin
//         rules: {
//             mobileNum: {
//                 required: true,
//                 number: true,
//                 minlength: 10
//             },
//         },
//         messages: {
//             mobileNum: " Please Enter Valid Mobile",
//         },
//         errorClass: "error-msg-label",
//         validClass: "has-error",
//         errorElement: "label",
//         highlight: function(element, errorClass, validClass) {
//             $(element).parents('.form-group').addClass('validClass');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.form-group').removeClass('has-error');
//             $(element).parents('.form-group').addClass('has-success');
//         },
//         submitHandler: function (form, e) {
//             e.preventDefault();
//             console.log("sibmit")

//             var mobileNum1 = document.getElementById('mobileNum').value;

//             MobileInfo = {
//                 "application": 'care',
//                 "mobile": mobileNum1,
//                 "country": '91',
//             };  
//             console.log(MobileInfo)
//             appLinkSend(MobileInfo);

//         }
//     });

// });
