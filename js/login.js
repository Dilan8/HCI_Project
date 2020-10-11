const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = []
    if (name.value == '' || name.value == null) {
        message.push('name is required');
    }
    if (password.value.length <= 6) {
        message.push('password must be longer than 6 charactres')
    }
    if (password.value.length >= 6) {
        message.push('password must be longer than 6 charactres')
    }
    if (message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(',')
    }


});