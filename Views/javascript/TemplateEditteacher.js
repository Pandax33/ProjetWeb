document.addEventListener('DOMContentLoaded', function () {
    const etudiantSelect = document.getElementById('Etudiant');
    const IDInput = document.getElementById('ID');
    const prenomInput = document.getElementById('Prenom');
    const nomInput = document.getElementById('Nom');
    const mailInput = document.getElementById('Mail');
    const centreSelect = document.getElementById('Centre');
    const competenceSelect = document.getElementById('Competence');
    const promotionSelect = document.getElementById('Promotion');
  
    etudiantSelect.addEventListener('change', function () {
      const selectedOption = this.options[this.selectedIndex];
      const id_p = selectedOption.getAttribute('data-id-p');
      const firstname = selectedOption.getAttribute('data-firstname');
      const lastname = selectedOption.getAttribute('data-lastname');
      const mail = selectedOption.getAttribute('data-mail');
      const name_center = selectedOption.getAttribute('data-name-center');
      const promotions = selectedOption.getAttribute('data-promotions');
      const competences = selectedOption.getAttribute('data-competences').split(',').map(item => item.trim());
  
      IDInput.value = id_p;
      prenomInput.value = firstname;
      nomInput.value = lastname;
      mailInput.value = mail;

    const centreOption = Array.from(centreSelect.options).find(option => option.textContent === name_center);
    if (centreOption) {
      centreSelect.value = centreOption.value;
    }

    console.log(centreOption);

    // Mettre à jour les options sélectionnées pour les compétences
    $(competenceSelect).val(competences).trigger('change');

    // Mettre à jour l'option sélectionnée pour la promotion
    const promotionOptions = Array.from(promotionSelect.options);
    
    // Désélectionner les options précédemment sélectionnées
    promotionOptions.forEach(option => {
      option.selected = false;
    });

    promotions.split(',').forEach(promotion => {
      const promotionOption = promotionOptions.find(option => option.textContent === promotion.trim());
      if (promotionOption) {
        promotionOption.selected = true;
      }
    });
    $(promotionSelect).trigger('change');
  });

  // Activer Select2 pour les champs compétences, centre et promotion
  $(competenceSelect).select2();
  $(promotionSelect).select2();

  const form = document.querySelector('form');
  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Empêcher l'envoi du formulaire
    if (validateForm()) {  form.submit(); // Soumettre le formulaire si les données sont valides
} else {
  alert('Le formulaire n\'est pas valide. Veuillez vérifier les champs obligatoires.');
}
});

function validateForm() {
// Vérifier si tous les champs requis sont remplis et valides
const inputs = [IDInput, prenomInput, nomInput, mailInput];
const selects = [centreSelect, competenceSelect, promotionSelect];
let isValid = true;

inputs.forEach(input => {
  if (!input.value.trim()) {
    isValid = false;
  }
});

selects.forEach(select => {
  if (!select.value) {
    isValid = false;
  }
});

console.log('isValid:', isValid);

return isValid;
}
});