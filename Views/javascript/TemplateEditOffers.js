document.addEventListener('DOMContentLoaded', function () {
    const intituleSelect = document.getElementById('Intitule');
    const IDOInput = document.getElementById('IDO');
    const dureeInput = document.getElementById('Duree');
    const salaireInput = document.getElementById('Salaire');
    const descriptionInput = document.getElementById('inputDescription4');
    const entrepriseSelect = document.getElementById('Entreprise');
    const competenceSelect = document.getElementById('Competence');
    const promotionSelect = document.getElementById('Promotion');
    const nbStagiaire = document.getElementById('inputNbStagiaire');
    const lieuxSelect = document.getElementById('Lieux');
    const IDEInput = document.getElementById('ID');
  
    intituleSelect.addEventListener('change', function () {
      const selectedOption = this.options[this.selectedIndex];
      const id_o = selectedOption.getAttribute('data-ID-O');
      const duration = selectedOption.getAttribute('data-duration');
      const salary = selectedOption.getAttribute('data-salary');
      const description = selectedOption.getAttribute('data-description');
      const space_o = selectedOption.getAttribute('data-space');
      const state = selectedOption.getAttribute('data-state');
      const id_e = selectedOption.getAttribute('data-IDE');
      const name_e = selectedOption.getAttribute('data-name');
      const enterpriseName= selectedOption.getAttribute('data-Name_Enterprise');
      const promotions = selectedOption.getAttribute('data-promotions').split(',').map(item => item.trim());
      const competences = selectedOption.getAttribute('data-competences').split(',').map(item => item.trim());
      console.log(promotions)
      

  
      IDOInput.value = id_o;
      dureeInput.value = duration;
      salaireInput.value = salary;
      descriptionInput.value = description;
      nbStagiaire.value = space_o;
      lieuxSelect.value = "";
        IDEInput.value = id_e;
        lieuxSelect.value = name_e;
    entrepriseSelect.value = enterpriseName;
  
      const entrepriseOption = Array.from(entrepriseSelect.options).find(option => option.textContent === name_e);
      if (entrepriseOption) {
        entrepriseSelect.value = entrepriseOption.value;
      }
      $(competenceSelect).val(competences).trigger('change');
      // Mettre à jour les options sélectionnées pour les compétences
      
  
      // Mettre à jour l'option sélectionnée pour la promotion
      $(promotionSelect).val(promotions).trigger('change');
      // Désélectionner les options précédemment sélectionnées
      
    });
    
    // Activer Select2 pour les champs compétences, entreprise et promotion
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
      // Vérifier si tous les champs requis sont remplis et valides
      const inputs = [IDOInput, dureeInput, salaireInput, descriptionInput];
      const selects = [intituleSelect, entrepriseSelect, competenceSelect, promotionSelect];
    
  
      inputs.forEach(input => {
        if (!input.value.trim()) {
            console.log(input.value)
          return false;
        }
      });
  
      selects.forEach(select => {
        if (!select.value) {
            console.log(select.value)
          return false;
        }
      }
      );return true;}});
  