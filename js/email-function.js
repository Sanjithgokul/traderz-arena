var services = {
    HOME_EMAIL_FUNCTION: "Traderzarena Function",
    CONTACT_EMAIL_FORM: "Traderzarena Contact"
}



function processemailform(service,$this){
   let  validation=validateForm($this, service);
    if (validation) {
        var data = jQuery($this).closest('#contact-form').serializeArray().reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        if(service)
        data.service = services[service];
        let ip,details;
        $.getJSON("https://api.ipify.org/?format=json", function (e) {
            ip = e?.ip;
        }).done(function(){
            $.getJSON("https://ipinfo.io/"+ip+"/json?token=63e4ceaaaf0f5b", function (e) {
                details = e;
            }).done(function(){
                var sendInfo = {
                    email : data["email"],
                    typeOfService: data["projType2"],
                    designation: data["website"],
                    company: data["companyname"],
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
                        if(response.status ==='success' ) {
                        } else {
                            alert('Something Went Wrong.');
                        }
                    },
                    error: function(response, statusText, XHR){ 
                        if(response.status ==='success') {
                        } else {
                            console.log(data)
                            alert('Could not send email.');
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
                        projectDescription: data["message"],
                        typeOfService: data["projType2"],
                        designation: data["website"],
                        company: data["companyname"],
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
                        url: "https://www.softsuave.com/forms/enquires/freeQuote",
                        data: JSON.stringify(sendInfo),
                        success: function(response, statusText, XHR) {
                            jQuery('.ajax-loader').hide();
                            jQuery(".hidden_button").hide();
                            jQuery(".button_submit").show();
                            if(response.status ==='success' ) {
                                window.location.href = "/thank-you.php?email=" + data.email;
                            } else {
                                alert('Something Went Wrong.');
                            }
                        },
                        error: function(response, statusText, XHR){ 
                            jQuery('.ajax-loader').hide();
                            jQuery(".hidden_button").hide();
                            jQuery(".button_submit").show();
                            if(response.status ==='success') {
                                window.location.href = "/thank-you.php?email=" + data.email;
                            } else {
                                console.log(data)
                                alert('Could not send email.');
                            }
                        }
                     });
                });
            });
        }
    }

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
