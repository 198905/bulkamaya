<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
       
    </script>
    <title>Docnumet</title>
</head>
        <div class="messages">
        </div>

        <div class="messagesType">
            <form  method="post"  id="form" name="message">
                <div class="textArea">
                    <h1><br>:_</h1>
                    <input type="text" name="message" class="messageC">
                </div>
                <input type="submit" value="Envoyer" class="messageEnvoyer" style="display:none;">
            </form>
            <div class="MicroAndFiles">
                <div class="micro">
                    *
                </div>
                <div class="files">
                    
                </div>
            </div>
            <form action="/id" method="post">
                <button type="submit" name="sessionD">Deconnexion</button>
            </form>
        </div>
        
    </div>    
    <script src='js.js'></script>
</body>
<!--php-->
</html>
<?php
