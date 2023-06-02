<!--Esto es bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script>

function limitarDigitos(input) {
  if (input.value < 1 || input.value > 110) {
    input.value = '';
    alert('El número debe ser mayor o igual a 1 y menor o igual a 110.');
  }
}

    function limitarDigitos(input) {
  if (input.value.length > 3) {
    input.value = input.value.slice(0, 3);
  }
}


</script>

</body>

</html>