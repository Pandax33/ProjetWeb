
document.addEventListener('DOMContentLoaded', function () {
    
    const competenceSelect = document.getElementById('Competence');
    const promotionSelect = document.getElementById('Promotion');
    
    $(competenceSelect).select2();
    $(promotionSelect).select2();
    
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
    });

    const enterpriseSelect = document.getElementById('Entreprise');
    const IDSelect = document.getElementById('ID');

    enterpriseSelect.addEventListener('change', function () {
        console.log('change');
        const selectedOption = this.options[this.selectedIndex];
        const Tempo = selectedOption.getAttribute('data-id');
        IDSelect.value = Tempo;
        });
    
    
    function validateForm() {
        const intituleInput = document.getElementById('Intitule');
        if (!intituleInput) {
            console.log('intituleInput');
            return false;
        }
        
        const dureeInput = document.getElementById('Duree');
        if (!dureeInput) {
            console.log('dureeInput');
            return false;
        }
        
        const salaireInput = document.getElementById('Salaire');
        if (!salaireInput) {
            console.log('salaireInput');
            return false;
        }
        
        const descriptionInput = document.getElementById('inputDescription4');
        if (!descriptionInput) {
            console.log('description');
            return false;
        }
        
        const nbStagiaireInput = document.getElementById('inputNbStagiaire');
        if (!nbStagiaireInput) {
            console.log('nbStagiaireInput');
            return false;
        }
        
        const entrepriseSelect = document.getElementById('Entreprise');
        if (!entrepriseSelect) {
            console.log('entrepriseSelect');
            return false;
        }
        
        const lieuxSelect = document.getElementById('Lieux');
        if (!lieuxSelect) {
            console.log('lieuxSelect');
            return false;
        }
        
        const visibleRadio = document.getElementById('Visible');
        if (!visibleRadio) {
            console.log('visibleRadio');
            return false;
        }
        
        const invisibleRadio = document.getElementById('Invisible');
        if (!invisibleRadio) {
            console.log('invisibleRadio');
            return false;
        }
        
        let isValid = true;
        
        if (intituleInput.value.trim() === '') {
            isValid = false;
        }
        
        if (dureeInput.value.trim() === '') {
            isValid = false;
        }
        
        if (salaireInput.value.trim() === '') {
            isValid = false;
        }
        
        if (descriptionInput.value.trim() === '') {
            isValid = false;
        }
        
        if (isNaN(parseInt(nbStagiaireInput.value))) {
            isValid = false;
        }
        
        if (entrepriseSelect.value.length === 0) {
            isValid = false;
        }
        
        if (lieuxSelect.value.length === 0) {
            isValid = false;
        }
        
        if (!visibleRadio.checked && !invisibleRadio.checked) {
            isValid = false;
        }
        
        console.log('isValid:', isValid);
        
        return isValid;
    }
});;