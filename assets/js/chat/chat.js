
var host = 'local.test'; // Please, set your host, where service is it
$(function () {

    init();

    var currentChecking = setInterval(function () {
        init();
    }, 5000);

    $('#add-message').on('submit', function () {
        addMessage($('#name').val(), $('#message').val());

        return false;
    });
    $(".chat-toggle").click(function () {
        var state = $(this).data('toggleState');
        if (state) {
            $('.chat-widget').toggle('fast');
            $(this).text('Скрыть чат');

            currentChecking = setInterval(function () {
                init();
            }, 5000);

        } else {
            $('.chat-widget').toggle('fast');

            $(this).text('Показать чат');
            if (currentChecking) {
                clearInterval(currentChecking);
            }
        }

        $(this).data('toggleState', !state);
    });

});


function parseMessages(SOAPResponse) {
    var response = SOAPResponse.toString();

    var items = $(response).find('return > item');
    var all_records = [];
    $.each(items, function () {
        var one_record = {};

        $.each($(this).find('item'), function () {
            var key = $(this).find('key').text();
            var value = $(this).find('value').text();
            one_record[key] = value;
        });
        all_records.push(one_record);
    });


    return all_records;
}

function proceedRequest(method, params) {
    $.soap({
        url: 'http://'+host+'/soap/service/',
        method: method,

        data: params,


        success: function (soapResponse) {

            return { 'done': true, 'data': soapResponse};

        },
        error: function (SOAPResponse) {
            return {'done': false, 'data': SOAPResponse};
        }
    });
}

function addMessage(username, message) {
    $('#loading').show();
    $.soap({
        url: 'http://'+host+'/soap/service/',
        method: 'addMessage',

        data: {
            'username': username,
            'message': message
        },


        success: function (soapResponse) {

            init();
            $('#name').val('');
            $('#message').val('');
        },
        error: function (SOAPResponse) {
            //todo make some error handler
        }
    });
}
function init() {
    $('#loading').show();
    $.soap({
        url: 'http://'+host+'/soap/service/',
        method: 'getLatestMessages',

        data: {},


        success: function (soapResponse) {

            var messages = parseMessages(soapResponse);
            $('#loading').hide();
            if (messages.length > 0) {
                $('.message-items').html('');
                $.each(messages, function (key, item) {
                    $('.message-items').append("<div class='row message-item'> <div class='col-md-3'><b>" + item.username + "</b></div><div class='col-md-6'>" + item.message + "</div><div class='col-md-3'>" + item.datetime + "</div></div>");
                });

            }
        },
        error: function (SOAPResponse) {
            //todo make some error handler
        }
    });
    return true;

}


