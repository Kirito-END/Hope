var cpaas = require('@avaya/cpass');
var enums = cpaas.enums;

var connector = new cpaas.Connector({
    accountSid: '{AC777c3e3240bc618f926a4337ac0d7138}',
    authToken: '{cc2dddd07971460db6d900443021bc15}'
});

var smsConnector = connector.sms;
var conferencesConnector = connector.conferences


function enviar() {
    smsConnector.sendSmsMessage({
        to: '+1 877-415-7035',
        from: '+1 844-341-2525',
        body: 'Este es el Mensaje',
        statusCallback: 'http://mycallback.url.com',
        statusCallbackMethod: enums.HttpMethod.GET,
        allowMultiple: true
    }).then(function(data) {
        console.log(data);
    });
}