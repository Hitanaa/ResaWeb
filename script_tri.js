document.getElementById('tri').addEventListener('change', function () {
    fetchMotos();
  });

  document.getElementById('search').addEventListener('input', function () {
    fetchMotos();
  });

  function fetchMotos() {
    var tri = document.getElementById('tri').value;
    var search = document.getElementById('search').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_motos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById('moto-container').innerHTML = xhr.responseText;
      }
    };
    xhr.send('tri=' + tri + '&search=' + search);
  }

  // Fetch motos initially
  fetchMotos();