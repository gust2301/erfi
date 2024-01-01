function submitForm() {
    const form = document.getElementById('contactForm');

    // Utiliser reportValidity pour afficher les messages d'erreur et mettre en surbrillance les champs invalides
    if (!form.reportValidity()) {
    // Le formulaire n'est pas valide, vous pouvez ajouter des actions ici si nécessaire
    return;
}

    const formData = new FormData(form);

    $.ajax({
    type: 'POST',
    url: 'database/contact.php',
    data: formData,
    contentType: false,
    processData: false,
    cache: false,
    success: function(response) {
    console.log('Réponse du serveur :', response);
    // Mettre à jour la section de message avec la réponse du serveur
    $('#messageContainer').html('<p>' + response + '</p>');

    // Afficher ou masquer la section en fonction de la présence de message
    if (response.trim() !== '') {
    $('#messageContainer').show(); // Afficher la section
} else {
    $('#messageContainer').hide(); // Masquer la section
}
}
});
}