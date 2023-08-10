const para = document.querySelector('.p1');
const para = document.querySelector('.p2');
const para = document.querySelector('.p3');
const para = document.querySelector('.p4');
const btn = document.querySelector("button");

/*const btn = document.querySelector("button");



btn.addEventListener("click", () => {
  const rndCol = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
  document.body.style.backgroundColor = rndCol;
});
btn.addEventListener("click", changeBackground);*/

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

btn.addEventListener("click", rta);
