let paragráfo = document.getElementById('mensagem');

window.addEventListener('blur',(saiu) => {
    paragráfo.innerHTML = "vc saiu da página!otávio vai lhe dar uma xiba😈😈😈";

    let formData = new FormData();
    formData.append('mensagem','fulano saiu da página');

    let fetchData = {
        method:'POST',
        body:formData,
        headers: new Headers()
    }

    let url = 'server.php';

    fetch(url,fetchData).then(
        (response) => {
            return response.text();
        }
    ).then((response) => {
        console.log(JSON.parse(response));
    });
});