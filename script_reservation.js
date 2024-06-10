// REGLES 88 // OPQUAST - L'utilisateur est averti de la perte d'information en cas d'utilisation de l'historique de son navigateur dans un processus complexe.
// Message "êtes vous sûr de vouloir quitter cette page ?"
document.addEventListener('DOMContentLoaded', (event) => {
    let formChanged = false;

    const form = document.getElementById('reservationForm');
    const inputs = form.querySelectorAll('input, select');

    inputs.forEach(input => {
        input.addEventListener('change', () => {
            formChanged = true; // Indique qu'un changement a été fait dans le formulaire
        });
    });

    window.addEventListener('beforeunload', (e) => {
        if (formChanged) { // Si le formulaire a été modifié
            const confirmationMessage = 'Êtes-vous sûr de vouloir quitter cette page ?';
            (e || window.event).returnValue = confirmationMessage; // Affiche un message de confirmation
            return confirmationMessage;
        }
    });

    form.addEventListener('submit', () => {
        formChanged = false; // Réinitialise l'indicateur de changement lors de la soumission du formulaire
    });
});

// REGLES 80 // OPQUAST - Les messages d'erreur personnalisés sont exprimés dans la langue du formulaire
// Message d'erreurs / conditions
function checkDates() {
    const jourDebut = document.getElementById('jourDebut').value;
    const moisDebut = document.getElementById('moisDebut').value;
    const anneeDebut = document.getElementById('anneeDebut').value;

    const jourRetour = document.getElementById('jourRetour').value;
    const moisRetour = document.getElementById('moisRetour').value;
    const anneeRetour = document.getElementById('anneeRetour').value;

    const errorMessage = document.getElementById('errorMessage');

    if (!jourDebut || !moisDebut || !anneeDebut || !jourRetour || !moisRetour || !anneeRetour) {
        errorMessage.textContent = "";
        return;
    }

    const dateDebut = new Date(anneeDebut, moisDebut - 1, jourDebut);
    const dateRetour = new Date(anneeRetour, moisRetour - 1, jourRetour);

    if (dateRetour <= dateDebut) {
        errorMessage.textContent = "La date de retour doit être postérieure à la date de début.";
    } else {
        errorMessage.textContent = "";
    }
}

document.getElementById('jourDebut').addEventListener('change', checkDates);
document.getElementById('moisDebut').addEventListener('change', checkDates);
document.getElementById('anneeDebut').addEventListener('change', checkDates);
document.getElementById('jourRetour').addEventListener('change', checkDates);
document.getElementById('moisRetour').addEventListener('change', checkDates);
document.getElementById('anneeRetour').addEventListener('change', checkDates);

document.getElementById('reservationForm').addEventListener('submit', function(event) {
    const jourDebut = document.getElementById('jourDebut').value;
    const moisDebut = document.getElementById('moisDebut').value;
    const anneeDebut = document.getElementById('anneeDebut').value;

    const jourRetour = document.getElementById('jourRetour').value;
    const moisRetour = document.getElementById('moisRetour').value;
    const anneeRetour = document.getElementById('anneeRetour').value;

    const dateDebut = new Date(anneeDebut, moisDebut - 1, jourDebut);
    const dateRetour = new Date(anneeRetour, moisRetour - 1, jourRetour);

    const checkbox = document.getElementById('confirm-checkbox');
    const errorMessage = document.getElementById('errorMessage');

    if (!jourDebut || !moisDebut || !anneeDebut || !jourRetour || !moisRetour || !anneeRetour || dateRetour <= dateDebut) {
        event.preventDefault(); // Empêche la soumission du formulaire si les dates sont incorrectes
        errorMessage.textContent = "Veuillez remplir toutes les dates correctement et assurez-vous que la date de retour est postérieure à la date de début.";
    } else if (!checkbox.checked) {
        event.preventDefault(); // Empêche la soumission du formulaire si les conditions générales ne sont pas acceptées
        errorMessage.textContent = "Vous devez accepter les conditions générales de vente.";
    }
});

// Emails temporaires
const tempDomains = [
    'uooos.com', 'nthrw.com', 'bbitq.com', 'alldrys.com', 'moabuild.com',
    '20minutemail.it', 'diolang.com', 'aosod.com', 'sharklasers.com', 'guerrillamail.info',
    'grr.la', 'guerrillamail.biz', 'guerrillamail.com', 'guerrillamail.de', 'guerrillamail.net',
    'guerrillamail.org', 'guerrillamailblock.com', 'pokemail.net', 'spam4.me', 'musiccode.me',
    'lyricspad.net', 'vusra.com', 'gufum.com', 'best-john-boats.com', 'trickyfucm.com',
    'smartinbox.online', 'goonby.com', 'plexfirm.com', '10mail.org', 'firste.ml',
    'zeroe.ml', 'vintomaper.com', 'fillallin.com', 'mailsac.com', 'mails.omvvim.edu.in',
    'onetimeusemail.com', 'midiharmonica.com', 'yopmail.com', 'crazymailing.com', 'wemel.site',
    'mybx.site', 'emeil.top', 'mywrld.top', 'matra.top', 'memsg.site', 'emailnax.com',
    'inboxbear.com', 'trashmail.fr', 'trashmail.se', 'my10minutemail.com'
];

document.querySelector('.email-input').addEventListener('input', function() {
    const emailField = this;
    const emailValue = emailField.value;
    const domain = emailValue.split('@')[1];

    if (domain && tempDomains.includes(domain)) {
        emailField.classList.add('invalid-domain');
        document.getElementById('errorMessage').textContent = 'Veuillez utiliser une adresse email valide.';
    } else {
        emailField.classList.remove('invalid-domain');
        document.getElementById('errorMessage').textContent = '';
    }
});
