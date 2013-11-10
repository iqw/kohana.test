<html>
<head>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.soap.js"></script>
    <script type="text/javascript" src="/assets/js/chat/chat.js"></script>
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="chat-widget"
             style="width: 550px; height: 600px; float: right; border:1px solid black; border-radius: 5px;">

            <div class="message-add" style=" clear: both; height: 200px;">
                <form id="add-message" role="form" class="form-inline">
                    <label>Имя</label>

                    <input type="text" class="form-control" name="name" id="name" required/>


                    <label>Сообщение</label>

                    <input type="text" class="form-control " name="message" id="message" required
                           maxlength="100"/>

                    <input type="submit" class="form-control btn btn-warning" value="Добавить"/>
                </form>
            </div>
            <div class="chat-content">
                <p id="loading" style="display: none;">
                    <img src="/assets/img/loader.GIF"/> Загрузка...
                </p>

                <div class="message-items" style="height: 400px;  overflow-y: scroll; overflow-x: hidden;">


                </div>


            </div>


        </div>


    </div>

</div>
<a href="javascript:;" class="btn btn-primary chat-toggle" style="float: right;">Скрыть чат</a>

</body>
</html>