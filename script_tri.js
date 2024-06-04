// Tri
document.getElementById('tri').addEventListener('change', function() {
    fetchMotos(); // Appelle la fonction fetchMotos() lorsque la sélection de tri change
});

function fetchMotos() {
    var tri = document.getElementById('tri').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_motos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('moto-container').innerHTML = xhr.responseText;
        }
    };
    xhr.send('tri=' + tri); // Envoie la requête avec la valeur de tri sélectionnée
}

// Fetch motos initially
fetchMotos();