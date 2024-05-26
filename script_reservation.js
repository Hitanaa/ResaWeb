document.addEventListener('DOMContentLoaded', (event) => {
    let formChanged = false;

    const form = document.getElementById('reservationForm');
    const inputs = form.querySelectorAll('input, select');

    inputs.forEach(input => {
        input.addEventListener('change', () => {
            formChanged = true;
        });
    });

    window.addEventListener('beforeunload', (e) => {
        if (formChanged) {
            const confirmationMessage = 'Êtes-vous sûr de vouloir quitter cette page ?';
            (e || window.event).returnValue = confirmationMessage;
            return confirmationMessage;
        }
    });

    form.addEventListener('submit', () => {
        formChanged = false;
    });
});
