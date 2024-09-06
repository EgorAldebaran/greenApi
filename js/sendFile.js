async function sendFile()
{
    const phone = document.getElementById('phoneNumber');
 
    console.log ("----message---")
    console.log (phoneNumber.value)
    console.log (message)

    try {
        const response = await fetch("./proxy/sendFile.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                phoneNumber: phoneNumber.value
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

