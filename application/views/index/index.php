<html>
<head>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.soap.js"></script>
    <script type="text/javascript">
        $(function () {

            $('.hello').on('click', function () {

                $.soap({
                    url: 'http://kohana.test/soap/service/',
                    method: 'getSomething',

                    data: {

                        'string': 'hello'

                    },


                    success: function (soapResponse) {
                        alert('success');
                        console.info(soapResponse.toXML());


                        // do stuff with soapResponse
                        // if you want to have the response as JSON use soapResponse.toJSON();
                        // or soapResponse.toString() to get XML string
                        // or soapResponse.toXML() to get XML DOM
                    },
                    error: function (SOAPResponse) {
                        alert('error');
                    }
                });
            })
            ;


        })
        ;

    </script>
</head>
<body>
<div class="btn btn-primary hello">hello</div>
</body>
</html>