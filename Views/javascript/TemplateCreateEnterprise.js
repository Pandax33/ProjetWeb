document.addEventListener('DOMContentLoaded', function () {
    
  
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Empêcher l'envoi du formulaire
      
      const submitBtn = document.getElementById('submitBtn');
submitBtn.addEventListener('click', function (event) {
event.preventDefault(); // Empêcher l'envoi du formulaire

if (validateForm()) {
form.submit(); // Soumettre le formulaire si les données sont valides
} else {
alert('Le formulaire n\'est pas valide. Veuillez vérifier les champs obligatoires.');
}
});
  
    
    function validateForm() {
    
        const nameInput = document.getElementById('Nom');
        if (!nameInput) {
            console.log('nameInput');
          return false;
        }
        
        const activityInput = document.getElementById('inputSecteur d\'activité4');
        if (!activityInput) {
            console.log('activity');
          return false;
        }
        
        const descriptionInput = document.getElementById('inputDescription4');
        if (!descriptionInput) {
            console.log('description');
          return false;
        }
        
        const nbStagiaireInput = document.getElementById('inputNbStagiaire');
        if (!nbStagiaireInput) {
            console.log('stagiaire');
          
          return false;
        }
        
        const localiteSelect = document.getElementById('inputLocalite');
        if (!localiteSelect) {
            console.log('Localite');
          return false;
        }
        
        const starInputs = document.querySelectorAll('.rating input[type="radio"]');
        if (!starInputs || starInputs.length === 0) {
          
          return false;
        }
        
        const visibleRadio = document.getElementById('Visible');
        if (!visibleRadio) {
          
          return false;
        }
        
        const invisibleRadio = document.getElementById('Invisible');
        if (!invisibleRadio) {
          
          return false;
        }
  
  
      let isValid = true;
  
      const regex = /^[a-zA-Z0-9\sàâäéèêëîïôöùûüç&'".,-]*$/;
    if (!regex.test(descriptionInput.value)) {
      alert('Le champ description ne peut contenir que des caractères alphanumériques, des espaces, des virgules, des points, des tirets, des apostrophes, des guillemets, des accents et des caractères spéciaux (&, \', ", ., -).');
      return false;
    }
    
    if (!regex.test(activityInput.value)) {
      alert('Le champ secteur d\'activité ne peut contenir que des caractères alphanumériques, des espaces, des virgules, des points, des tirets, des apostrophes, des guillemets, des accents et des caractères spéciaux (&, \', ", ., -).');
      return false;
    }
    
      if (nameInput.value.trim() === '') {
        isValid = false;
      }
    
      if (activityInput.value.trim() === '') {
        isValid = false;
      }
    
      if (descriptionInput.value.trim() === '') {
        isValid = false;
      }
    
      if (isNaN(parseInt(nbStagiaireInput.value))) {
        isValid = false;
      }
    
      if (localiteSelect.value.length === 0) {
        isValid = false;
      }
    
      if (!Array.from(starInputs).some(input => input.checked)) {
        isValid = false;
      }
    
      if (!visibleRadio.checked && !invisibleRadio.checked) {
        isValid = false;
      }
    
      console.log('isValid:', isValid);
      
      return isValid;
    }
  });});