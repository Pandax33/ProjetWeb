
document.addEventListener('DOMContentLoaded', function () {
    const prenomInput = document.getElementById('Prenom');
    const nomInput = document.getElementById('Nom');
    const mailInput = document.getElementById('Mail');
    const centreSelect = document.getElementById('Centre');
    const competenceSelect = document.getElementById('Competence');
    const promotionSelect = document.getElementById('Promotion');
    $(competenceSelect).select2();
    $(promotionSelect).select2();
  
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Empêcher l'envoi du formulaire
      if (validateForm()) {
        form.submit(); // Soumettre le formulaire si les données sont valides
      } else {
        alert('Le formulaire n\'est pas valide. Veuillez vérifier les champs obligatoires.');
      }
    });
  
    function validateForm() {
      const regex = /^[a-zA-ZÀ-ÿ\s]+$/;
      const mailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
      if (!prenomInput || !regex.test(prenomInput.value)) {
        alert('Veuillez remplir le champ Prénom avec des caractères alphabétiques et des espaces.');
        return false;
      }
  
      if (!nomInput || !regex.test(nomInput.value)) {
        alert('Veuillez remplir le champ Nom avec des caractères alphabétiques et des espaces.');
        return false;
      }
  
      if (!mailInput || !mailRegex.test(mailInput.value)) {
        alert('Veuillez fournir une adresse e-mail valide.');
        return false;
      }
  
      if (!centreSelect || centreSelect.value.length === 0) {
        alert('Veuillez sélectionner un centre.');
        return false;
      }
  
      if (!competenceSelect || competenceSelect.selectedOptions.length === 0) {
        alert('Veuillez sélectionner au moins une compétence.');
        return false;
      }
  
      if (!promotionSelect || promotionSelect.selectedOptions.length === 0) {
        alert('Veuillez sélectionner au moins une promotion.');
        return false;
      }
  
      return true;
    }
  });