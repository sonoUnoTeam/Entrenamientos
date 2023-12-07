<?php 
error_reporting(1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'disruptiva.ae@gmail.com';
$mail->Password = 'uequ lwyq hzde sdkh';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

if(isset($_POST['submit']))
{
    if($_POST['pregunta1'] == "senoidal") 
    {
        $type[0] = "succes"; 
        $message[0] = "Correct!";
    }
    else 
    {
        $type[0] = "warning"; 
        $message[0] = "Ooh!! This is not the displayed function.";
    }

    if($_POST['pregunta2'] == "creciente") 
    {
        $type[1] = "succes"; 
        $message[1] = "Correct!";
    }
    else 
    {
        $type[1] = "warning"; 
        $message[1] = "Ooh!! This is not the displayed function.";
    }

    if($_POST['pregunta3'] == "cuadrada") 
    {
        $type[2] = "succes"; 
        $message[2] = "Correct!";
    }
    else 
    {
        $type[2] = "warning"; 
        $message[2] = "Ooh!! This is not the displayed function.";
    }

    if($_POST['pregunta4'] == "decreciente") 
    {
        $type[3] = "succes"; 
        $message[3] = "Correct!";
    }
    else 
    {
        $type[3] = "warning"; 
        $message[3] = "Ooh!! This is not the displayed function.";
    }

    try
    {
        $mail->setFrom('disruptiva.ae@gmail.com');
        $mail->addAddress('alejopavon2021@gmail.com');    

        $mail->isHTML(true);                                 
        $mail->Subject = 'Training answers';
        $mail->Body    = '
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="arreglar">
        
            <script src="../javaScript/formulario.js"></script>
            <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
            <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        
            <title>entrenamientos</title>
        </head>
        <body>
            <header>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light barra">
                        <div class="container-fluid">
                            <a class="navbar-brand">
                                <img src="../img/iteda.jpeg" alt="logo ITeDA">
                                <img src="../img/ibio.jpeg" alt="logo Instituto de Bioingeniería">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </header>
        
            <main>
                <form action="entrenamientos.php" method="post">
                    <fieldset>
                        <section class="card-img-aud" style="width: 50rem">
                            <img src="../img/senoidal.png" class="card-img-top" alt="Imagen de una función senoidal">
                            <div class="card-body">
                                <figure>
                                    <figcaption>listen the sound:</figcaption>
                                    <audio controls>
                                        <source src="../img/sinusoidal_sound.mp3" type="audio/mp3"/>
                                    </audio>
                                </figure>
                            </div>
                        </section>
                        <section class="check" id="check-1">
                            <p>What you heard and saw was a function:</p>
                            <ul>
                                <li>
                                    <label class="check-label" for="senoidal1">Sinusoidal</label>
                                    <input class="check-input" type="radio" id="senoidal1" name="pregunta1" value="senoidal" />
                                </li>
                                <li>
                                    <label class="check-label" for="cuadrada1">Square</label>
                                    <input class="check-input" type="radio" id="cuadrada1" name="pregunta1" value="cuadrada" />
                                </li>
                                <li>
                                    <label class="check-label" for="creciente1">Lineal up</label>
                                    <input class="check-input" type="radio" id="creciente1" name="pregunta1" value="creciente" />
                                </li>
                                <li>
                                    <label class="check-label" for="decreciente1">Decreasing</label>
                                    <input class="check-input" type="radio" id="decreciente1" name="pregunta1" value="decreciente" />
                                </li>
                            </ul>
                            <p id="p1"><b> <strong class="succes">'.$message[0].'</strong> </b></p>
                        </section>
                    </fieldset>
                    <fieldset>
                        <section class="card-img-aud" style="width: 50rem">
                            <img src="../img/continua.creciente.png" class="card-img-top" alt="Imagen de una función senoidal">
                            <div class="card-body">
                                <figure>
                                    <figcaption>listen the sound:</figcaption>
                                    <audio controls>
                                        <source src="../img/lineal_up_sound.mp3" type="audio/mp3"/>
                                    </audio>
                                </figure>
                            </div>
                        </section>
                        <section class="check" id="check-2">
                            <p>What you heard and saw was a function:</p>
                            <ul>
                                <li>
                                    <label class="check-label" for="senoidal2">Sinusoidal</label>
                                    <input class="check-input" type="radio" id="senoidal2" name="pregunta2" value="senoidal" />
                                </li>
                                <li>
                                    <label class="check-label" for="cuadrada2">Square</label>
                                    <input class="check-input" type="radio" id="cuadrada2" name="pregunta2" value="cuadrada" />
                                </li>
                                <li>
                                    <label class="check-label" for="creciente2">Lineal up</label>
                                    <input class="check-input" type="radio" id="creciente2" name="pregunta2" value="creciente" />
                                </li>
                                <li>
                                    <label class="check-label" for="decreciente2">Decreasing</label>
                                    <input class="check-input" type="radio" id="decreciente2" name="pregunta2" value="decreciente" />
                                </li>
                            </ul>
                            <p id="p2"> <b> <strong class="succes">'.$message[1].'</strong> </b> </p>
                        </section>
                    </fieldset>
                    <fieldset>
                        <section class="card-img-aud" style="width: 50rem">
                            <img src="../img/square.png" class="card-img-top" alt="Imagen de una función senoidal">
                            <div class="card-body">
                                <figure>
                                    <figcaption>listen the sound:</figcaption>
                                    <audio controls>
                                        <source src="../img/square_sound.mp3" type="audio/mp3"/>
                                    </audio>
                                </figure>
                            </div>
                        </section>
                        <section class="check" id="check-3">
                            <p>What you heard and saw was a function:</p>
                            <ul>
                                <li>
                                    <label class="check-label" for="senoidal3">Sinusoidal</label>
                                    <input class="check-input" type="radio" id="senoidal3" name="pregunta3" value="senoidal" />
                                </li>
                                <li>
                                    <label class="check-label" for="cuadrada3">Square</label>
                                    <input class="check-input" type="radio" id="cuadrada3" name="pregunta3" value="cuadrada" />
                                </li>
                                <li>
                                    <label class="check-label" for="creciente3">Lineal up</label>
                                    <input class="check-input" type="radio" id="creciente3" name="pregunta3" value="creciente" />
                                </li>
                                <li>
                                    <label class="check-label" for="decreciente3">Decreasing</label>
                                    <input class="check-input" type="radio" id="decreciente3" name="pregunta3" value="decreciente" />
                                </li>
                            </ul>
                            <p id="p3"> <b> <strong class="succes">'.$message[2].'</strong> </b> </p>
                        </section>
                    </fieldset>
                    <fieldset>
                        <section class="card-img-aud" style="width: 50rem">
                            <img src="../img/decreciente.png" class="card-img-top" alt="Imagen de una función senoidal">
                            <div class="card-body">
                                <figure>
                                    <figcaption>listen the sound:</figcaption>
                                    <audio controls>
                                        <source src="../img/decrease_sound.mp3" type="audio/mp3"/>
                                    </audio>
                                </figure>
                            </div>
                        </section>
                        <section class="check" id="check-4">
                            <p>What you heard and saw was a function:</p>
                            <ul>
                                <li>
                                    <label class="check-label" for="senoidal4">Sinusoidal</label>
                                    <input class="check-input" type="radio" id="senoidal4" name="pregunta4" value="senoidal" />
                                </li>
                                <li>
                                    <label class="check-label" for="cuadrada4">Square</label>
                                    <input class="check-input" type="radio" id="cuadrada4" name="pregunta4" value="cuadrada" />
                                </li>
                                <li>
                                    <label class="check-label" for="creciente4">Lineal up</label>
                                    <input class="check-input" type="radio" id="creciente4" name="pregunta4" value="creciente" />
                                </li>
                                <li>
                                    <label class="check-label" for="decreciente4">Decreasing</label>
                                    <input class="check-input" type="radio" id="decreciente4" name="pregunta4" value="decreciente" />
                                </li>
                            </ul>
                            <p id="p4"> <b> <strong class="succes">'.$message[3].'</strong> </b> </p>
                        </section>
                    </fieldset>
                </form>
            </main>
        
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col contacto">
                            <p><strong>Contacto:</strong><br>n.bertaina@alumno.um.edu.ar<br>instituto.bioingenieria@um.edu.ar</p>
                            <p><br>750 Paseo Doctor Emilio Descotte, Mendoza M5500, Facultad de Ingenieria, Universidad de Mendoza</p>
                        </div>
                        <div class="col logosf">
                            <img src="../img/UM.png" alt="Logo iteda">
                            <img src="../img/reinforce.png" alt="Logo reinforce">
                        </div>
                    </div>
                </div>
            </footer>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
        </html>';

        $mail->send();
    }
    catch(Exception $e)
    {
        echo 'Mensaje '.$mail->ErrorInfo;
    }
    echo '<script>alert("Se envio un correo con tus respuestas.");</script>';
}
else for($i = 0; $i < 4; $i++) $message[$i] = "";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <script src="../javaScript/formulario.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <title>entrenamientos</title>
</head>
<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light barra">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="../img/iteda.jpeg" alt="logo ITeDA">
                        <img src="../img/ibio.jpeg" alt="logo Instituto de Bioingeniería">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../index.html">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./manual.html">MANUAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./entrenamientos.html">ENTRENAMIENTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <form action="entrenamientos.php" method="post">
            <fieldset>
                <section class="card-img-aud" style="width: 50rem">
                    <img src="../img/senoidal.png" class="card-img-top" alt="Imagen de una función senoidal">
                    <div class="card-body">
                        <figure>
                            <figcaption>listen the sound:</figcaption>
                            <audio controls>
                                <source src="../img/sinusoidal_sound.mp3" type="audio/mp3"/>
                            </audio>
                        </figure>
                    </div>
                </section>
                <section class="check" id="check-1">
                    <p>What you heard and saw was a function:</p>
                    <ul>
                        <li>
                            <label class="check-label" for="senoidal1">Sinusoidal</label>
                            <input class="check-input" type="radio" id="senoidal1" name="pregunta1" value="senoidal" />
                        </li>
                        <li>
                            <label class="check-label" for="cuadrada1">Square</label>
                            <input class="check-input" type="radio" id="cuadrada1" name="pregunta1" value="cuadrada" />
                        </li>
                        <li>
                            <label class="check-label" for="creciente1">Lineal up</label>
                            <input class="check-input" type="radio" id="creciente1" name="pregunta1" value="creciente" />
                        </li>
                        <li>
                            <label class="check-label" for="decreciente1">Decreasing</label>
                            <input class="check-input" type="radio" id="decreciente1" name="pregunta1" value="decreciente" />
                        </li>
                    </ul>
                    <p id="p1"><b> <strong class="<?php echo $type[0]; ?>"><?php echo $message[0]; ?></strong> </b></p>
                </section>
            </fieldset>
            <fieldset>
                <section class="card-img-aud" style="width: 50rem">
                    <img src="../img/continua.creciente.png" class="card-img-top" alt="Imagen de una función senoidal">
                    <div class="card-body">
                        <figure>
                            <figcaption>listen the sound:</figcaption>
                            <audio controls>
                                <source src="../img/lineal_up_sound.mp3" type="audio/mp3"/>
                            </audio>
                        </figure>
                    </div>
                </section>
                <section class="check" id="check-2">
                    <p>What you heard and saw was a function:</p>
                    <ul>
                        <li>
                            <label class="check-label" for="senoidal2">Sinusoidal</label>
                            <input class="check-input" type="radio" id="senoidal2" name="pregunta2" value="senoidal" />
                        </li>
                        <li>
                            <label class="check-label" for="cuadrada2">Square</label>
                            <input class="check-input" type="radio" id="cuadrada2" name="pregunta2" value="cuadrada" />
                        </li>
                        <li>
                            <label class="check-label" for="creciente2">Lineal up</label>
                            <input class="check-input" type="radio" id="creciente2" name="pregunta2" value="creciente" />
                        </li>
                        <li>
                            <label class="check-label" for="decreciente2">Decreasing</label>
                            <input class="check-input" type="radio" id="decreciente2" name="pregunta2" value="decreciente" />
                        </li>
                    </ul>
                    <p id="p2"> <b> <strong class="<?php echo $type[1]; ?>"><?php echo $message[1]; ?></strong> </b> </p>
                </section>
            </fieldset>
            <fieldset>
                <section class="card-img-aud" style="width: 50rem">
                    <img src="../img/square.png" class="card-img-top" alt="Imagen de una función senoidal">
                    <div class="card-body">
                        <figure>
                            <figcaption>listen the sound:</figcaption>
                            <audio controls>
                                <source src="../img/square_sound.mp3" type="audio/mp3"/>
                            </audio>
                        </figure>
                    </div>
                </section>
                <section class="check" id="check-3">
                    <p>What you heard and saw was a function:</p>
                    <ul>
                        <li>
                            <label class="check-label" for="senoidal3">Sinusoidal</label>
                            <input class="check-input" type="radio" id="senoidal3" name="pregunta3" value="senoidal" />
                        </li>
                        <li>
                            <label class="check-label" for="cuadrada3">Square</label>
                            <input class="check-input" type="radio" id="cuadrada3" name="pregunta3" value="cuadrada" />
                        </li>
                        <li>
                            <label class="check-label" for="creciente3">Lineal up</label>
                            <input class="check-input" type="radio" id="creciente3" name="pregunta3" value="creciente" />
                        </li>
                        <li>
                            <label class="check-label" for="decreciente3">Decreasing</label>
                            <input class="check-input" type="radio" id="decreciente3" name="pregunta3" value="decreciente" />
                        </li>
                    </ul>
                    <p id="p3"> <b> <strong class="<?php echo $type[2]; ?>"><?php echo $message[2]; ?></strong> </b> </p>
                </section>
            </fieldset>
            <fieldset>
                <section class="card-img-aud" style="width: 50rem">
                    <img src="../img/decreciente.png" class="card-img-top" alt="Imagen de una función senoidal">
                    <div class="card-body">
                        <figure>
                            <figcaption>listen the sound:</figcaption>
                            <audio controls>
                                <source src="../img/decrease_sound.mp3" type="audio/mp3"/>
                            </audio>
                        </figure>
                    </div>
                </section>
                <section class="check" id="check-4">
                    <p>What you heard and saw was a function:</p>
                    <ul>
                        <li>
                            <label class="check-label" for="senoidal4">Sinusoidal</label>
                            <input class="check-input" type="radio" id="senoidal4" name="pregunta4" value="senoidal" />
                        </li>
                        <li>
                            <label class="check-label" for="cuadrada4">Square</label>
                            <input class="check-input" type="radio" id="cuadrada4" name="pregunta4" value="cuadrada" />
                        </li>
                        <li>
                            <label class="check-label" for="creciente4">Lineal up</label>
                            <input class="check-input" type="radio" id="creciente4" name="pregunta4" value="creciente" />
                        </li>
                        <li>
                            <label class="check-label" for="decreciente4">Decreasing</label>
                            <input class="check-input" type="radio" id="decreciente4" name="pregunta4" value="decreciente" />
                        </li>
                    </ul>
                    <p id="p4"> <b> <strong class="<?php echo $type[3]; ?>"><?php echo $message[3]; ?></strong> </b> </p>
                </section>
            </fieldset>
            <input type="submit" name="submit" class="btn" id="finish"></button>
        </form>
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col contacto">
                    <p><strong>Contacto:</strong><br>n.bertaina@alumno.um.edu.ar<br>instituto.bioingenieria@um.edu.ar</p>
                    <p><br>750 Paseo Doctor Emilio Descotte, Mendoza M5500, Facultad de Ingenieria, Universidad de Mendoza</p>
                </div>
                <div class="col logosf">
                    <img src="../img/UM.png" alt="Logo iteda">
                    <img src="../img/reinforce.png" alt="Logo reinforce">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>