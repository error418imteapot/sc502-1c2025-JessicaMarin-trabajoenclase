function calculate(){
    //vamos a obtener el item por el id con el .get
    //el value es una propiedad
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    //creamos otra variable que se llama operacion
    let operation = document.getElementById('operation').value;
    let result = 0;

    //utilizamos estructura switch para determinar cual es la operacion que la persona esta seleccionando
    switch(operation){
        case 'sum':
            result = num1 + num2;
            break;
            case 'sub':
            result = num1 - num2;
            break;
            case 'mul':
            result = num1 * num2;
            break;
            case 'div':
                if(num2 == 0){
                    alert("No se puede dividir entre cero");
                } else {
                    result = num1 / num2;
                }            
            break;
            default:
                alert('La operacion seleccionada no existe')
                
    }
    document.getElementById('result').innerText= result;

}