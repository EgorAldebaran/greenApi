async function settings()
{
    const instance = document.getElementById('idInstance');
    const token = document.getElementById('apiToken');


    console.log ("----settings---");
    console.log (instance.value);
    console.log (token.value);

    try {
        const response = await fetch("./proxy/settings.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                instance: instance.value,
                token: token.value
            })
        });

        if (!response.ok) {
            throw new Error('Ошибка сети: ' + response.status);
        }

        const data = await response.json();
	document.getElementById('json-output').innerText = JSON.stringify(data, null, 2);
        console.log(data); // Обработка полученных данных

    } catch (error) {
        console.error('Ошибка:', error); // Обработка ошибок
    }

}

