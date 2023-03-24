document.addEventListener('DOMContentLoaded', function () {
  const nameSelect = document.getElementById('inputNom');
  const IDSelect = document.getElementById('ID');
  const activityInput = document.getElementById('inputSecteur d\'activité4');
  const descriptionInput = document.getElementById('inputDescription4');
  const nbStagiaireInput = document.getElementById('inputNbStagiaire');
  const localiteSelect = document.getElementById('inputLocalite');

  $(localiteSelect).select2({
    multiple: true
  });

  const star1 = document.getElementById('star1');
  const star2 = document.getElementById('star2');
  const star3 = document.getElementById('star3');
  const star4 = document.getElementById('star4');
  const star5 = document.getElementById('star5');

  const visibleRadio = document.getElementById('Visible');
  const invisibleRadio = document.getElementById('Invisible');

  nameSelect.addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    const activity = selectedOption.getAttribute('data-activity');
    const description = selectedOption.getAttribute('data-description');
    const nbStagiaire = selectedOption.getAttribute('data-Intership');
    const ID = parseInt(selectedOption.getAttribute('data-ID'), 10);
    const trustRate = parseInt(selectedOption.getAttribute('data-TrustRate'), 10);
    const visibility = parseInt(selectedOption.getAttribute('data-visibility'), 10);
    const localiteArray = selectedOption.getAttribute('data-localite').split(',').map(function(item) {
      return item.trim();
    });
  
    IDSelect.value = ID;
    activityInput.value = activity;
    descriptionInput.value = description;
    nbStagiaireInput.value = nbStagiaire;

    $(localiteSelect).val(localiteArray).trigger('change'); // Change les valeurs sélectionnées et informe Select2 que les options ont été modifiées

    star1.checked = false;
    star2.checked = false;
    star3.checked = false;
    star4.checked = false;
    star5.checked = false;

    switch (trustRate) {
      case 1:
        star1.checked = true;
        break;
      case 2:
        star2.checked = true;
        break;
      case 3:
        star3.checked = true;
        break;
      case 4:
        star4.checked = true;
        break;
      case 5:
        star5.checked = true;
        break;
    }

    if (visibility === 1) {
      visibleRadio.checked = true;
    } else {
      invisibleRadio.checked = true;
    }
  });

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
  
      const nameInput = document.getElementById('inputNom');
      if (!nameInput) {
        return false;
      }
      
      const activityInput = document.getElementById('inputSecteur d\'activité4');
      if (!activityInput) {
        return false;
      }
      
      const descriptionInput = document.getElementById('inputDescription4');
      if (!descriptionInput) {
        
        return false;
      }
      
      const nbStagiaireInput = document.getElementById('inputNbStagiaire');
      if (!nbStagiaireInput) {
        
        return false;
      }
      
      const localiteSelect = document.getElementById('inputLocalite');
      if (!localiteSelect) {
       
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
  
    if (nameInput.value.trim() === 'Choose...') {
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
});