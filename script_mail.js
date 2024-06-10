document.querySelector('.menu-icon').addEventListener('click', () => {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
});

// Fonction pour envoyer l'email de confirmation
function sendConfirmationEmail() {
    const form = document.getElementById('confirmationForm');

    fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de l\'envoi de l\'email');
            }
            return response.json(); 
        })
        .then(data => {
            console.log('Réponse serveur:', data); 
            if (data.status === 'success') {
                alert('Email envoyé avec succès !');
            } else {
                throw new Error(data.message);
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue lors de l\'envoi de l\'email');
        });
}