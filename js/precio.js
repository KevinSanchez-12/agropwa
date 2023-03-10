var precio = document.getElementById('precio');

precio.value = precio.valueAsNumber.toFixed(2);

precio.addEventListener('input', precioDecimal());

function precioDecimal(event) {
    event.target.value = event.target.valueAsNumber.toFixed(2);
}