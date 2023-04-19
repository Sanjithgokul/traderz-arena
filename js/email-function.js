var services = {
    HOME_EMAIL_FUNCTION: "Tranderzarena Function",
    
}



function processemailform(service,$this){
    validation=validateForm($this, service);
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
                    url: "https://www.softsuave.com/forms/enquires/freeQuote",
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
