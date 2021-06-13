let screen = document.getElementById('screen');
buttons = document.querySelectorAll('button');
let screenValue = '';
var pi_val = Math.PI;
var sine_val = Math.sin(30);
for (item of buttons) {
    item.addEventListener('click', (e) => {
        buttonText = e.target.innerText;
        console.log('Button text is ', buttonText);
        
         if (buttonText == 'C') {
            screenValue = "";
            screen.value = screenValue;
        }
        else if (buttonText == '=') {
            screen.value = eval(screenValue);
        }
        else if(buttonText== 'D')
        {
            screenValue -= buttonText;
            screenValue -= buttonText;
            screen.value = screenValue;
           
        }

        else {
            screenValue += buttonText;
            screen.value = screenValue;
        }

    })
}

