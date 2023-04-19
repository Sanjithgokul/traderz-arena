var services = {
    HOME_EMAIL_FUNCTION: "Traderzarena Function",
    CONTACT_EMAIL_FORM: "Traderzarena Contact"
}



function processemailform(service,$this){
    // validation=validateForm($this, service);
    if (validation) {
        var data = jQuery($this).closest('#emailForm').serializeArray().reduce(function (obj, item) {
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
                    url: "http://13.234.243.107:3000/",
                    data: JSON.stringify(sendInfo),
                    success: function(response, statusText, XHR) {
                        if(response.status ==='success' ) {
                        } else {
                            alert('Something Went Wrong.');
                        }
                    },
                    error: function(response, statusText, XHR){ 
                        if(rresponse.status ==='success') {
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
            jQuery('.ajax-loader').show();
            jQuery(".button_submit").hide();
            jQuery(".button_close").hide();
            jQuery(".hidden_button").show();
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
                            if(rresponse.status ==='success') {
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
