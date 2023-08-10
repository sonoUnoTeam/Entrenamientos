const para = document.querySelector('.p1');
const para = document.querySelector('.p2');
const para = document.querySelector('.p3');
const para = document.querySelector('.p4');


let intentosCount = 1;

function rta() {
    
    if(intentosCount ==1){
    
        if (document.getElementById('#senoidal1').checked){
            const mensaje1 = document.getElementById(".p1");
            mensaje1.innerHTML = 'Correct!';
        } else {
            const mensaje1 = document.getElementById(".p1");
            mensaje1.innerHTML = 'Ooh!! This is not the displayed function.';
        }
        
        if (document.getElementById('#creciente2').checked){
            const mensaje2 = document.getElementById(".p2");
            mensaje2.innerHTML = 'Correct!';
        } else {
            const mensaje2 = document.getElementById(".p2");
            mensaje2.innerHTML = 'Ooh!! This is not the displayed function.';
        }
        
        if (document.getElementById('#cuadrada3').checked){
            const mensaje3 = document.getElementById(".p3");
            mensaje3.innerHTML = 'Correct!';
        } else {
            const mensaje3 = document.getElementById(".p3");
            mensaje3.innerHTML = 'Ooh!! This is not the displayed function.';
        }
        
        if (document.getElementById('#decreciente4').checked){
            const mensaje4 = document.getElementById(".p4");
            mensaje4.innerHTML = 'Correct!';
        } else {
            const mensaje4 = document.getElementById(".p4");
            mensaje4.innerHTML = 'Ooh!! This is not the displayed function.';
        }

        intentosCount -=intentosCount;
    } 
    else alert('No Attempts');
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
