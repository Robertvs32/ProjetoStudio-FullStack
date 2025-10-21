const obj_form = document.getElementById('form');

const url = './backend/enviarFormulario.php';

obj_form.addEventListener('submit', async (event) => {
    
    event.preventDefault();
    const dadosForm = new FormData(obj_form);
    const dadosObject = Object.fromEntries(dadosForm.entries());
    const jsonDados = JSON.stringify(dadosObject);

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: jsonDados
        });

        console.log(jsonDados);

        const resultado = await response.json();
        
        if(response.ok){
            alert(`${resultado.mensagem}`);
        } else {
            console.log(`Erro ao enviar objeto do formulario! ${response.status} ${resultado.mensagem}`);
        }

    } catch(error){
        console.log(`Erro ao enviar formulario! Verifique a url! ${error}`);
    }



});