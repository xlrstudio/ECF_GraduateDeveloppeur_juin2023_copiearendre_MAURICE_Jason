    let Nom = document.getElementById('user_Nom')
    let Prenom = document.getElementById('user_Prenom')
    let Tel = document.getElementById('user_Tel')
    let email = document.getElementById('user_email')
    let Couverts = document.getElementById('user_Couverts')
    let Heure = document.getElementById('user_Heure')
    let Allergies = document.getElementById('user_Allergies')
    let Date = document.getElementById('user_Date')
    let plainPassword = document.getElementById('user_plainPassword')

    let form = document.querySelector('form')

    let error = '';

    function validNom(value) {
    if (value === '') {
    return 'l\'identifiant est obligatoire\n'
}

    return '';
}

    function validPassword(value) {
    if (value.length < 6) {
    return 'le mot de passe doit contenir au moins 6 caractères\n'
}

    return '';
}


    form.addEventListener('submit', (event) => {
    error = ''
    error += validEmail(email.value, emailConfirmation.value)
    for(let count=0; count<form.elements.length; count++) {
    if (form.elements[count].name === 'Nom') {
    error+= validIdentifiant(form.elements[count].value)
} else if (form.elements[count].name === 'plainPassword'){
    error += validPassword(form.elements[count].value)
}
}

    if (error !== '') {
    alert(error)
    event.preventDefault()
}
})
