const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search-input");
const filterSelect = document.getElementById("filter");

console.log('chargé')

searchForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const searchText = searchInput.value.trim();
  const filter = filterSelect.value;
  searchAndFilterEnterprises(searchText, filter);
});

filterSelect.addEventListener("change", () => {
  const searchText = searchInput.value.trim();
  const filter = filterSelect.value;
  searchAndFilterEnterprises(searchText, filter);
});

function searchAndFilterEnterprises(searchText, filter) {
  fetch("index.php?p=enterprises/filter", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      searchText: searchText,
      filter: filter
    })
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      updateEnterprises(data);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}


function createEnterpriseCard(enterprise) {
    const col = document.createElement("div");
    col.className = "col-lg-4 col-md-6 col-sm-12 ecart";
  
    const card = document.createElement("div");
    card.className = "card";
    card.style.width = "18rem";
    card.style.backgroundColor = "rgba(255, 255, 255, 0.606)";
    col.appendChild(card);
  
    const img = document.createElement("img");
    img.src = "../Views/css/enterprise.png";
    img.className = "card-img-top";
    img.alt = "Image 1";
    card.appendChild(img);
  
    const cardBody = document.createElement("div");
    cardBody.className = "card-body";
    card.appendChild(cardBody);
  
    const cardTitle = document.createElement("h5");
    cardTitle.className = "card-title truncate-text";
    cardTitle.textContent = enterprise.Name_E;
    cardBody.appendChild(cardTitle);
  
    const cardSector = document.createElement("p");
    cardSector.className = "card-text sector";
    cardSector.textContent = enterprise.Activity_E;
    cardBody.appendChild(cardSector);
  
    const cardInterns = document.createElement("p");
    cardInterns.className = "card-text texte";
    cardInterns.textContent = `Stagiaires embauchés : ${enterprise.Intership_E}`;
    cardBody.appendChild(cardInterns);
    
    const cardTrustRate = document.createElement("p");
    cardTrustRate.className = "card-text texte";
    const smallText = document.createElement("small");
    smallText.className = "text-muted";
    smallText.textContent = `Niveau de confiance : ${enterprise.TrustRate_E} / 5`;
    cardTrustRate.appendChild(smallText);
    cardBody.appendChild(cardTrustRate);
    
    const btnDetails = document.createElement("a");
    btnDetails.href = `index.php?p=enterprises/detail/${enterprise.ID_E}`;
    btnDetails.className = "btn btn-orange";
    btnDetails.textContent = "En savoir plus";
    cardBody.appendChild(btnDetails);
    
    return col;
    }


  
    function updateEnterprises(enterprises) {
        const enterpriseContainer = document.querySelector(".container");
        
        // Changer le sélecteur pour cibler les cartes avec la classe 'ecart'
        const existingEnterprises = enterpriseContainer.querySelectorAll(".ecart");
        
        existingEnterprises.forEach((enterprise) => {
          enterprise.remove();
        });
      
        const enterprisesArray = Object.values(enterprises);
      
        enterprisesArray.forEach((enterprise) => {
          // Pas besoin de créer un élément 'li', car la fonction 'createEnterpriseCard' crée déjà une 'div' avec les classes appropriées
          const card = createEnterpriseCard(enterprise);
          enterpriseContainer.appendChild(card);
        });
      }