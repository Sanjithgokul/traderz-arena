var services = {
    HOME_EMAIL_FUNCTION: "Traderzarena Function",
    CONTACT_EMAIL_FORM: "Traderzarena Contact"
}

function processemailform(service,$this){
   
    validation=validateForm($this, service);
    if (validation) {
        var data = jQuery($this).closest('#contact-form').serializeArray().reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        if(service)
        data.service = services[service];
        console.log(data);
        let ip,details;
        $.getJSON("https://api.ipify.org/?format=json", function (e) {
            ip = e?.ip;
        }).done(function(){
            $.getJSON("https://ipinfo.io/"+ip+"/json?token=63e4ceaaaf0f5b", function (e) {
                details = e;
            }).done(function(){
                var sendInfo = {
                    name: data["name"],
                    phone: data["phone"],
                    email : data["email"],
                    description: data['message'],
                    ipAddress: ip,
                    url:$(location).attr('href'),
                    city: details.city,
                    region: details.region,
                    country: details.country,
                };

                
            
    
                    jQuery.ajax({
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    url: "http://13.234.243.107:3000/common/homeContactForm",
                    data: JSON.stringify(sendInfo),
                    success: function(response, statusText, XHR) {
                        if(response.status ==='success') {
                            window.location.href = "/thankyou.php?email=" + data.email;
                        } else {
                            console.log(data)
                            alert('Could not send email.');
                        }
                    },
                    error: function(response, statusText, XHR){
                        if(response.status ==='success' ) {
                            jQuery('#error').show(); 
                        } else {
                            alert('Something Went Wrong.');
                        }
                    }
                 });
            });
        });



        
    }


}

function processcontactemailform(service,$this){
   
    validation=validateForm($this, service);
    if (validation) {
        var data = jQuery($this).closest('#contact-form').serializeArray().reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        if(service)
        data.service = services[service];
        console.log(data);
        let ip,details;
        $.getJSON("https://api.ipify.org/?format=json", function (e) {
            ip = e?.ip;
        }).done(function(){
            $.getJSON("https://ipinfo.io/"+ip+"/json?token=63e4ceaaaf0f5b", function (e) {
                details = e;
            }).done(function(){
                var sendInfo = {
                    name: data["name"],
                    email : data["email"],
                    subject : data["subject"],
                    message: data['message'],
                    ipAddress: ip,
                    url:$(location).attr('href'),
                    city: details.city,
                    region: details.region,
                    country: details.country,
                };

                
            
    
                    jQuery.ajax({
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    url: "http://13.234.243.107:3000/common/contactUsForm",
                    data: JSON.stringify(sendInfo),
                    success: function(response, statusText, XHR) {
                        if(response.status ==='success' ) {
                            window.location.href = "/thank-you.php?email=" + data.email;
                        } else {
                            alert('Something Went Wrong.');
                        }
                    },
                    error: function(response, statusText, XHR){
                        if(response.status ==='success' ) {
                            jQuery('#error').show(); 
                        } else {
                            alert('Something Went Wrong.');
                        }
                    }
                 });
            });
        });



        
    }


}






var invalidMessage = {
    STATUS_EMPTY_FIELD: "Please fill in the required field.",
    STATUS_INVALID_EMAIL: "Please enter a valid email.",
    STATUS_INVALID_PHONE: "Please enter a valid phone number.",
    SERVICE_EMPTY_FIELD: "Please select a service"
}

function validateInquiryForm($this, service='',type) {
    var isFormValid = true, isEmailValid = true, isPhoneValid = true, isFilePresent = true, isServiceValid = true;
    var requiredFields = $($this).parents("#contact-form").find('.required');
    var namecheck,emailcheck,companycheck,phonecheck,descriptioncheck;
    if(type == "inquiry") {
        namecheck = document.getElementById("inquiryName");
        emailcheck = document.getElementById("inquiryEmail");
        companycheck = document.getElementById("inquiryCompany");
        phonecheck = document.getElementById("inquiryPhone");
        descriptioncheck = document.getElementById("inquiryDesc");
    }else {
        namecheck = document.getElementById("inquiryName-1");
        emailcheck = document.getElementById("inquiryEmail-1");
        companycheck = document.getElementById("inquiryCompany-1");
        phonecheck = document.getElementById("inquiryPhone-1");
        descriptioncheck = document.getElementById("inquiryDesc-1");
    }
    if (namecheck.value === "") {
        namecheck.style.borderBottom = '1px solid red';
        namecheck=false;
    } else {
        namecheck.style.borderBottom = '1px solid #909090';
        namecheck=true;
    }
    if (companycheck.value === "") {
        companycheck.style.borderBottom = '1px solid red';
        companycheck=false;
    } else {
        companycheck.style.borderBottom = '1px solid #909090';
        companycheck=true;
    }
    if (descriptioncheck.value === "") {
        descriptioncheck.style.borderBottom = '1px solid red';
        descriptioncheck=false;
    } else {
        descriptioncheck.style.borderBottom = '1px solid #909090';
        descriptioncheck=true;
    }

    if (!validatingEmail(emailcheck.value,this)) {
        emailcheck.style.borderBottom = '1px solid red';
        emailcheck=false;
    } else {
        emailcheck.style.borderBottom = '1px solid #909090';
        emailcheck=true;
    }

    if (!validatingPhone(phonecheck.value,this)) {
        phonecheck.style.borderBottom = '1px solid red';
        phonecheck=false;
    } else {
        phonecheck.style.borderBottom = '1px solid #909090';
        phonecheck = true;
    }

    if(emailcheck != false && phonecheck != false &&  namecheck!= false  && descriptioncheck != false &&  companycheck!= false) {
        return true;
    }else {
        return false;
    }
}

// function validateInquiryForm($this, service='') {
//     var isFormValid = true, isEmailValid = true, isPhoneValid = true, isFilePresent = true, isServiceValid = true;
//     var requiredFields = $($this).parents("#contact-form-mob").find('.required');
//     var namecheck = document.getElementById("inquiryName-1").value;
//     var emailcheck = document.getElementById("inquiryEmail-1").value;
//     var companycheck = document.getElementById("inquiryCompany-1").value;
//     var phonecheck = document.getElementById("inquiryPhone-1").value;
//     var descriptioncheck = document.getElementById("inquiryDesc-1").value;
//
//     if (namecheck === "") {
//         document.getElementById('inquiryName-1').style.borderBottom = '1px solid red';
//         namecheck=false;
//     } else {
//         document.getElementById('inquiryName-1').style.borderBottom = '1px solid #909090';
//         namecheck=true;
//     }
//     if (companycheck === "") {
//         document.getElementById('inquiryCompany-1').style.borderBottom = '1px solid red';
//         companycheck=false;
//     } else {
//         document.getElementById('inquiryCompany-1').style.borderBottom = '1px solid #909090';
//         companycheck=true;
//     }
//     if (descriptioncheck === "") {
//         document.getElementById('inquiryDesc-1').style.borderBottom = '1px solid red';
//         descriptioncheck=false;
//     } else {
//         document.getElementById('inquiryDesc-1').style.borderBottom = '1px solid #909090';
//         descriptioncheck=true;
//     }
//
//     if (!validatingEmail(emailcheck,this)) {
//         document.getElementById('inquiryEmail-1').style.borderBottom = '1px solid red';
//         emailcheck=false;
//     } else {
//         document.getElementById('inquiryEmail-1').style.borderBottom = '1px solid #909090';
//         emailcheck=true;
//     }
//
//     if (!validatingPhone(phonecheck,this)) {
//         document.getElementById('inquiryPhone-1').style.borderBottom = '1px solid red';
//         phonecheck=false;
//     } else {
//         document.getElementById('inquiryPhone-1').style.borderBottom = '1px solid #909090';
//         phonecheck = true;
//     }
//
//     if(emailcheck != false && phonecheck != false &&  namecheck!= false  && descriptioncheck != false &&  companycheck!= false) {
//         return true;
//     }else {
//         return false;
//     }
// }

function validateForm($this, service='') {
    var isFormValid = true, isEmailValid = true, isPhoneValid = true, isFilePresent = true, isServiceValid = true;
    var requiredFields = $($this).parents("#contact-form").find('.required');
    $(requiredFields).each(function (index,field) {
        if ($(field).hasClass("required")) {
            isFormValid = checkEmptyInput(this) && isFormValid;
        }
        if ($(field).hasClass("email")) {
            isEmailValid = checkEmptyInput(this) ? validateEmail(this) : false;
        }
        if ($(field).hasClass("phone")) {
            isPhoneValid = checkEmptyInput(this) ? validatePhone(this) : false;
        }
        if ($(field).hasClass("attachment-file")) {
            isFilePresent = checkEmptyInput(this);
            if(!isFilePresent && $("#file-upload-error").length){
                $("#file-upload-error").show();

            }
            else{
                if($("#file-upload-error").length)
                $("#file-upload-error").hide()

            }
        }
        
    });
    if(service === "FREE_QUOTE") {
        let data = jQuery($this).closest('#contact-form').serializeArray().reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        if(!(data.projType1 || data.projType2 || data.projType3)) {
            // $(this).closest(".quote-checkbox").find('span[role="alert"]').text(invalidMessage.SERVICE_EMPTY_FIELD);
            $('.quote-checkbox').find('span[role="alert"]').text(invalidMessage.SERVICE_EMPTY_FIELD);
            $('.quote-checkbox').find('span[role="alert"]').css({'display': 'block'});
            isServiceValid = false;
        } else {
            $('.quote-checkbox').find('span[role="alert"]').text("");
            $('.quote-checkbox').find('span[role="alert"]').css({'display': 'none'});
            isServiceValid = true;
        }
    }
    return isFormValid && isEmailValid && isPhoneValid && isFilePresent && isServiceValid;
}

function checkEmptyInput(obj) {
    if ($(obj).val() === "") {
        $(obj).closest(".form-group").find('span[role="alert"]').text(invalidMessage.STATUS_EMPTY_FIELD);
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'table'});
        return false;
    } else {
        $(obj).closest(".form-group").find('span[role="alert"]').text("")
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'none'});
        return true;
    }
}
function validatingEmail(email,obj) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (! re.test(String(email).toLowerCase())) {
        $(obj).closest(".form-group").find('span[role="alert"]').text(invalidMessage.STATUS_INVALID_EMAIL)
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'table'});

        return false;
    } else {

        return true;
    }
}
function validateEmail(obj) {
    var x = $(obj).val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        // document.getElementById('email').style.borderColor = 'red';
        $(obj).closest(".form-group").find('span[role="alert"]').text(invalidMessage.STATUS_INVALID_EMAIL);
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'table'});
        return false;
    } else {
        $(obj).closest(".form-group").find('span[role="alert"]').text("");
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'none'});
        return true;
    }
}

function validatePhone(phone) {
    //var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if ((/^\d{10,}$/).test(phone.value.replace(/[\s()+\-\.]|ext/gi, ''))) {
        // document.getElementById('phone').style.borderColor = 'red';
        return true;
    } else {
        $(phone).closest(".form-group").find('span[role="alert"]').text(invalidMessage.STATUS_INVALID_PHONE);
        $(phone).closest(".form-group").find('span[role="alert"]').css({'display': 'table'});
        return false;
    }
}
function validatingPhone(phone,obj) {
    //var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!(/^\d{10,}$/).test(phone)) {
        $(obj).closest(".form-group").find('span[role="alert"]').text(invalidMessage.STATUS_INVALID_PHONE);
        $(obj).closest(".form-group").find('span[role="alert"]').css({'display': 'table'});

        return false;

    } else {

        return true;
    }
}
