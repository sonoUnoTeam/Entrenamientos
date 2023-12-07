
let countAttempts = 1;

function rta()
{

    if(countAttempts == 1)
    {
        if (document.getElementById('senoidal1').checked) message = '<b> <strong class="succes">Correct!</strong> </b>';
        else message = '<b><strong class="warning">Ooh!! This is not the displayed function.</strong></b>';

        document.getElementById("p1").innerHTML = message;

        if (document.getElementById('creciente2').checked) message = '<b><strong class="succes">Correct! </strong>';
        else message = '<b><strong class="warning"> Ooh!! This is not the displayed function. </strong></b>';

        document.getElementById("p2").innerHTML = message;

        if (document.getElementById('cuadrada3').checked) message = '<b><strong class="succes"> Correct! </strong>';
        else message = '<b><strong class="warning"> Ooh!! This is not the displayed function. </strong></b>';

        document.getElementById("p3").innerHTML = message;

        if (document.getElementById('decreciente4').checked) message = '<b><strong class="succes"> Correct! </strong></b>';
        else message = '<b><strong class="warning"> Ooh!! This is not the displayed function. </strong></b>';

        document.getElementById("p4").innerHTML = message;

        countAttempts = 0;
    }
    else alert('No Attempts');
}

// Universidad Tecnologica


