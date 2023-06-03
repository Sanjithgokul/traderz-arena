var services = {
    HOME_EMAIL_FUNCTION: "Traderzarena Function",
    CONTACT_EMAIL_FORM: "Traderzarena Contact",
    QUICK_CONTACT_EMAIL: "Traderzarena Quick Contact"
}

var invalidMessage = {
    STATUS_EMPTY_FIELD: "Please fill in the required field.",
    STATUS_INVALID_EMAIL: "Please enter a valid email.",
    STATUS_INVALID_PHONE: "Please enter a valid phone number.",
    SERVICE_EMPTY_FIELD: "Please select a service"
}

const navLinks = document.querySelectorAll('.nav-item-1')
const menuToggle = document.getElementById('collapsibleNavbar')
const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})
console.log("nav links", navLinks);
console.log("menu toggle", menuToggle);
console.log("Nav Links", navLinks)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { 
        if ( screen.width <= 576) {
            console.log("screen.width", screen.width); 
            console.log("nav item", l); 
            console.log("collapse", bsCollapse._config.toggle)
            // console.log("Is dropdown", l.classList.contains("dropdown-toggle"))
            if (!(l.classList.contains("dropdown-toggle"))) {
                bsCollapse.toggle(); 
            } else {
                if (!(bsCollapse._config.toggle)) {
                    // bsCollapse.toggle(); 
                }
            }
        }
    })
})

$('#navbar-nav-1 .nav-item a').on('click', function(){
    let el = $(this)
    setTimeout(function(){
        $('#navbar-nav-1 .nav-item a').removeClass('active');
        el.addClass('active');
    }, 400)
});


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
                    url: "https://traderzarena.com/api/common/homeContactForm",
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
   console.log("process contact form", service,$this)
    validation=validateForm($this, service);
    console.log(validation)
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
                    mobile_no: data["number"],
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
                    url: "https://traderzarena.com/api/common/contactUsForm",
                    data: JSON.stringify(sendInfo),
                    success: function(response, statusText, XHR) {
                        if(response.status ==='success' ) {
                            window.location.href = "/thankyou.php?email=" + data.email;
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


function processquickemail(service,$this){
    console.log("processquickemail", $this)
    validation=validateForm($this, service);
    console.log(validation)
     if (validation) {
         var data = jQuery($this).closest('#contact-form').serializeArray().reduce(function (obj, item) {
             obj[item.name] = item.value;
             return obj;
         }, {});
         if(service){
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
                        mobile_no: data["number"],
                        course_type : data["courses"],
                        ipAddress: ip,
                        url:$(location).attr('href'),
                        city: details.city,
                        region: details.region,
                        country: details.country,
                    };
                    console.log("data", data);

                    console.log("test", sendInfo);
                    
                
        
                        jQuery.ajax({
                        type: "POST",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        url: "https://traderzarena.com/api/common/quickContact",
                        data: JSON.stringify(sendInfo),
                        success: function(response, statusText, XHR) {
                            if(response.status ==='success' ) {
                                window.location.href = "/thankyou.php?email=" + data.email;
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



function validateForm($this, service='') {
    var isFormValid = true, isEmailValid = true, isPhoneValid = true, isFilePresent = true, isServiceValid = true;
    var requiredFields = $($this).parents("#contact-form").find('.required');
    console.log("requiredFields", requiredFields)
    $(requiredFields).each(function (index,field) {
        if ($(field).hasClass("required")) {
            isFormValid = checkEmptyInput(this) && isFormValid;
            let element = document.getElementById(field.id + "_err");
            if (!isFormValid) {
                if (element) {
                    element.style.visibility = "visible";
                }
            } else {
                if (element) {
                    element.style.visibility = "hidden";
                }
            }
        }
        if ($(field).hasClass("email")) {
            isEmailValid = checkEmptyInput(this) ? validateEmail(this) : false;
            let element = document.getElementById(field.id + "_err");
            if (!isEmailValid) {
                if (element) {
                    element.style.visibility = "visible";
                }
            } else {
                if (element) {
                    element.style.visibility = "hidden";
                }
            }
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
