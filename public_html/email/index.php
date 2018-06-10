<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <title>envio de emails con archivos adjuntos</title>
        
        <link rel="stylesheet" href="../email/estiloFormEmail.css"/>
        
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div id="container">
            <h1>Envio de emails con archivos adjuntos - <a href="mairelis.arroyo@gmail.com">MABB</a></h1>
            <?php
                    //si se ha enviado el correo
                    if(isset($_REQUEST['s'])){
                            $ok = $_REQUEST['s'];
                            if($ok == 'si'){
                                    echo "<div class='msn-ok'>¡Mensaje enviado correctamente!</div>";
                            }
                            elseif($ok == 'no'){
                                    echo "<div class='msn-ko'>Ha habido un error de envio...</div>";
                            }
                    }
            ?>
        <form action="send.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>rellena el formulario</legend>
                <ul>
                        <li>
                            <label for="nombre">Nombre:</label>
                            <br>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        </li>
                        <li>
                            <label for="mail">E-mail:</label>
                            <br>
                            <input type="email" id="mail" name="email" placeholder="E-mail del emisor" required>
                        </li>
                        <li>
                            <label for="mailr">E-mail del receptor:</label>
                            <br>
                            <input type="email" id="mailr" name="emailr" placeholder="E-mail del receptor" required>
                        </li>
                        <li>
                            <label for="adjunto">Archivo adjunto</label>
                            <br>
                            <input type="file" id="adjunto" name="adjunto" required>
                        </li>
                        <li>
                            <label for="asunto">Asunto:</label>
                            <br>
                            <input type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                        </li>
                        <li>
                            <label for="msn">Mensaje:</label>
                            <br>
                            <textarea name="msn" id="msn" rows="10" required></textarea>
                        </li>
                        <li>
                            <input type="submit" value="Enviar">
                        </li>
                    </ul>
            </fieldset>
        </form>
    </div>

    <!-- jQuery -->
   
    <script>
    $(document).ready(function(){
            $('form').submit(function(){
                    if($('input[type="text"]').val() == '' || $('input[type="email"]').val() == '' || $('input[type="file"]').val() == '' || $('textarea').val() == ''){
                            alert('Rellena todos los campos');
                            return false;
                    }
            });
    });
    </script>

</body>
</html>