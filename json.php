<?php
  session_start();
if ( isset($_POST[ 'reset'])) {
    $_SESSION[ 'chats' ] = Array();
    header("Location: json.php");
    return;
}
if ( isset($_POST['message'])) {
    if ( !isset ($_SESSION['chats'])) $_SESSION['chats'] = Array();
    $_SESSION[ 'chats'] [] = array($_POST ['message'], date(DATE_RFC2822));
    header("Location: json.php");
    return;
}
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <h1><b>Chat</b></h1>
    <form method="post" action="json.php">
    <p>
    <input type="text" name="message" size="60" />
    <input type="submit" value="chat" />
    <input type="submit" name="reset" value="Reset"/>
    </p>
    </form>
    <div id="chatcontent">
        <img src="spinner.gif" alt="Cumming..."/>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    function updateMsag() {
        window.console && console.log( 'Requesting JSON');
        $.ajax({
            url: "chatlist.php",
            cache: false,
            success: function(data){
            window.console && console.log( 'JSON Received');
            window.console && console.log(data)
            $('#chatcontent').empty();
             for (var i = 0; i < data.length; i++) {
                 entry = data[i];
                 $('#chatcontent').append('<p>'+entry[0] +
                   '<br/>&nbsp;nbsp;'+entry[1]+"</p>\n");
             }
             setTimeout( 'updateMsg()', 4000);
           }
        });
    }

    window.console && console.log("Startup complete");

    updateMsg();
});

