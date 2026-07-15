<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

const opciones = {

    weekday:'long',

    year:'numeric',

    month:'long',

    day:'numeric'

};

document.getElementById("fecha").innerHTML =
new Date().toLocaleDateString("es-ES",opciones);

</script>


</body>

</html>