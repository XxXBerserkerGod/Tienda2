const animalSelector = document.getElementById('especie');
const gatoForm = document.getElementById('gato-form');
const perroForm = document.getElementById('perro-form');

animalSelector.addEventListener('change', (event) => {
  if (event.target.value === 'G') {
    gatoForm.style.display = 'block';
    perroForm.style.display = 'none';
  } else if (event.target.value === 'P') {
    gatoForm.style.display = 'none';
    perroForm.style.display = 'block';
  } else {
    gatoForm.style.display = 'none';
    perroForm.style.display = 'none';
  }
});