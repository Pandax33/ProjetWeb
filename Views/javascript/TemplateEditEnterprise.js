document.addEventListener('DOMContentLoaded', function () {
    const nameSelect = document.getElementById('inputNom');
    const activityInput = document.getElementById('inputSecteur d\'activité4');
    const descriptionInput = document.getElementById('inputDescription4');
    const nbStagiaireInput = document.getElementById('inputNbStagiaire');
    const localiteInput = document.getElementById('inputLocalite');
  
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
      const trustRate = parseInt(selectedOption.getAttribute('data-TrustRate'), 10);
      const visibility = parseInt(selectedOption.getAttribute('data-visibility'), 10);
      const localite= selectedOption.getAttribute('data-localite');
  
      activityInput.value = activity;
      descriptionInput.value = description;
      nbStagiaireInput.value = nbStagiaire;
    localiteInput.value = "Rouen";

      
  
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
  });