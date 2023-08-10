const para = document.querySelector('.p1');
const para = document.querySelector('.p2');
const para = document.querySelector('.p3');
const para = document.querySelector('.p4');


let intentosCount = 1;

function rta() {
    let mensaje;
    
    if (document.getElementById('#senoidal1').checked){
        mensaje = 'Correct!';
        document.getElementById('.p1').innerHTML = mensaje;
    } else {
        mensaje = 'Ooh!! This is not the displayed function.';
        document.getElementById('.p1').innerHTML = mensaje;
    }
    
    if (document.getElementById('#creciente2').checked){
        mensaje = 'Correct!';
        document.getElementById('.p2').innerHTML = mensaje;
    } else {
        mensaje = 'Ooh!! This is not the displayed function.';
        document.getElementById('.p2').innerHTML = mensaje;
    }
    
    if (document.getElementById('#cuadrada3').checked){
        mensaje = 'Correct!';
        document.getElementById('.p3').innerHTML = mensaje;
    } else {
        mensaje = 'Ooh!! This is not the displayed function.';
        document.getElementById('.p3').innerHTML = mensaje;
    }
    
    if (document.getElementById('#decreciente4').checked){
        mensaje = 'Correct!';
        document.getElementById('.p4').innerHTML = mensaje;
    } else {
        mensaje = 'Ooh!! This is not the displayed function.';
        document.getElementById('.p4').innerHTML = mensaje;
    }
}

/*let countAttempts = 1;

function rta()
{

    if(countAttempts == 1)
    {
        if (document.getElementById('senoidal1').checked) message = '<b><font color="#65FC03"> Correct! </font>';
        else message = '<b><font color="#FC0303"> Ooh!! This is not the displayed function. </font></b>';

        document.getElementById("p1").innerHTML = message;

        if (document.getElementById('creciente2').checked) message = '<b><font color="#65FC03"> Correct! </font>';
        else message = '<b><font color="#FC0303"> Ooh!! This is not the displayed function. </font></b>';

        document.getElementById("p2").innerHTML = message;

        if (document.getElementById('cuadrada3').checked) message = '<b><font color="#65FC03"> Correct! </font>';
        else message = '<b><font color="#FC0303"> Ooh!! This is not the displayed function. </font></b>';

        document.getElementById("p3").innerHTML = message;

        if (document.getElementById('decreciente4').checked) message = '<b><font color="#65FC03"> Correct! </font></b>';
        else message = '<b><font color="#FC0303"> Ooh!! This is not the displayed function. </font></b>';

        document.getElementById("p4").innerHTML = message;

        countAttempts = 0;
    }
    else alert('No Attempts');
}
*/
