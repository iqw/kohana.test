$(function () {

    $('.hello').on('click', function () {

        $.soap({
            url: 'http://kohana.test/soap/service/',
            method: 'getLatestMessages',

            data: {
//                'username': 'vlad222',
//                'message': 'this is the first message, posted by soap!'
            },


            success: function (soapResponse) {

                var response = soapResponse.toXML();


             console.info($(response).find("item[type*='Map']"));

                return;

                var xmlText = $(response).find("soap\\:Envelope").find("soap\\:Body")
                    .find("getLatestMessagesResponse")
                    .find("getLatestMessagesResult")
                    .find("username").text();
                console.log(xmlText);
//                for (var i = 0; i < myObj.length; i++) {
//                    var x = myObj[i].find('id').text();
//                    var y = myObj[i]
//                    find('username').text();
//                }

                // do stuff with soapResponse
                // if you want to have the response as JSON use soapResponse.toJSON();
                // or soapResponse.toString() to get XML string
                // or soapResponse.toXML() to get XML DOM
            },
            error: function (SOAPResponse) {
                alert('error');
            }
        });
    });
});
