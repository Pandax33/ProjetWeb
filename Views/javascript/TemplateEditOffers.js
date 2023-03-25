$(document).ready(function () {
    var intituleSelect = $("#Intitule");
    var dureeInput = $("#Duree");
    var salaireInput = $("#Salaire");
    var descriptionInput = $("#inputDescription4");
    var nbStagiaireInput = $("#inputNbStagiaire");
    var entrepriseSelect = $("#Entreprise");
    var lieuxSelect = $("#Lieux");
    var idInput = $("#ID");
    var idOInput = $("#IDO");
    var visibleRadio = $("#Visible");
    var invisibleRadio = $("#Invisible");

    function updateEntreprise(idE) {
        entrepriseSelect.find('option').each(function () {
            if ($(this).data("id") === idE) {
                $(this).prop('selected', true);
            }
        });
    }

    intituleSelect.on("change", function () {
        var selectedOption = $(this).find(":selected");
        var idO = selectedOption.data("id-o");
        var duration = selectedOption.data("duration");
        var salary = selectedOption.data("salary");
        var description = selectedOption.data("description");
        var space = selectedOption.data("space");
        var state = selectedOption.data("state");
        var idE = selectedOption.data("ide");
        var name = selectedOption.data("name");

        idOInput.val(idO);
        dureeInput.val(duration);
        salaireInput.val(salary);
        descriptionInput.val(description);
        nbStagiaireInput.val(space);
        lieuxSelect.val(name);
        idInput.val(idE);

        updateEntreprise(idE);

        if (state === "Visible") {
            visibleRadio.prop("checked", true);
        } else {
            invisibleRadio.prop("checked", true);
        }
    });
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        console.log('submit')
        event.preventDefault(); // Empêcher l'envoi du formulaire

        const submitBtn = document.getElementById('submitBtn');
        submitBtn.addEventListener('click', function (event) {
            event.preventDefault(); // Empêcher l'envoi du formulaire

            if (validateForm()) {
                form.submit();} else {
                    alert('Le formulaire n\'est pas valide. Veuillez vérifier les champs obligatoires.');
                }
            });
        
            function validateForm() {
                let isValid = true;
        
                if (dureeInput.val().trim() === '') {
                    console.log('dureeInput');
                    isValid = false;
                }
        
                if (salaireInput.val().trim() === '') {
                    console.log('salaireInput');
                    isValid = false;
                }
        
                if (descriptionInput.val().trim() === '') {
                    console.log('descriptionInput');
                    isValid = false;
                }
        
                if (entrepriseSelect.val().trim() === 'Choisir...') {
                    console.log('entrepriseSelect');
                    isValid = false;
                }
        
                if (!visibleRadio.prop("checked") && !invisibleRadio.prop("checked")) {
                    console.log('visibleRadio');
                    isValid = false;
                }
        
                console.log('isValid:', isValid);
        
                return isValid;
            }
        });
        });