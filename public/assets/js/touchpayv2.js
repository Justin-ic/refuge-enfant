function calltouchpay(agency_code, secure_code, domain_name, 
    url_on_success, url_on_failed, city, montant,  email, name){
    sendPaymentInfos(
        new Date().getTime(),
       agency_code,secure_code, 
       domain_name,  
       url_on_success, 
       url_on_failed, 
       montant, 
       city, 
       email,
       name, 
       '',  
       '');
}