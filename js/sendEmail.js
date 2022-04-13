const form = document.getElementById('sendEmail')

const showAlert = (alert) => {
    alert.removeAttribute('d-none')
    alert.setAttribute('show')
    setTimeout(() => {
        alert.removeAttribute('show')
        alert.setAttribute('d-none')
    }, 5000)
}

form.addEventListener('submit', (event) => {
    event.preventDefault()
    let nameValue = document.getElementById('name').value
    let emailValue = document.getElementById('email').value
    let messageValue = document.getElementById('message').value
    fetch(root_path + '/controllers/contactEmail.php', {
            method: "post",
            body: JSON.stringify({
                message: "<b>" + nameValue + "</b> tiene la siguiente duda: " + messageValue + "<br>Contéstale escribiendo al siguiente email: <b>" + emailValue + "</b>",
            }),
            headers: {
                'Content-type': 'application/json; charset=UTF-8'
            }
        })
        .then(res => res.json())
        .then(data => {
            let alert = null
            if (data.hasOwnProperty('valid')) {
                alert = document.getElementById('emailAlertOk')
            } else {
                alert = document.getElementById('emailAlertError')
            }
            showAlert(alert)
        })
})