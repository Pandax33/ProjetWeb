const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search-input");
const filterSelect = document.getElementById("filter");

console.log('chargé')

searchForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const searchText = searchInput.value.trim();
  const filter = filterSelect.value;
  searchAndFilterOffers(searchText, filter);
});

filterSelect.addEventListener("change", () => {
  const searchText = searchInput.value.trim();
  const filter = filterSelect.value;
  searchAndFilterOffers(searchText, filter);
});

function searchAndFilterOffers(searchText, filter) {
    fetch("index.php?p=offers/filter", {
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
        updateOffers(data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  }
  
  function createOfferCard(offer) {
    const card = document.createElement("div");
    card.classList.add("card", "mb-3");
  
    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");
    cardHeader.textContent = `${offer.Entitled_O} - ${offer.ent}`;
    card.appendChild(cardHeader);
  
    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");
  
    const offerInfo = document.createElement("ul");
    offerInfo.innerHTML = `
      <li>Durée: ${offer.Duration_O}</li>
      <li>Salaire: ${offer.Salary_O}</li>
      <li>Date de publication: ${offer.DatePublish_O}</li>
      <li>Localisation: ${offer.Name}</li>
    `;
    cardBody.appendChild(offerInfo);
  
    const offerDescription = document.createElement("p");
    offerDescription.textContent = offer.Description;
    cardBody.appendChild(offerDescription);
  
    card.appendChild(cardBody);
  
    return card;
  }
  
  function updateOffers(offers) {
    const offerContainer = document.querySelector(".container");
    const existingOffers = offerContainer.querySelectorAll(".card.mb-3");
    existingOffers.forEach((offer) => {
      offer.remove();
    });
  
    const offersArray = Object.values(offers);
  
    offersArray.forEach((offer) => {
      const card = document.createElement("div");
      card.className = "card mb-3";
  
      const cardBody = document.createElement("div");
      cardBody.className = "card-body";
  
      const cardTitle = document.createElement("h5");
      cardTitle.className = "card-title";
      cardTitle.textContent = offer.Entitled_O;
  
      const cardSubtitle = document.createElement("h6");
      cardSubtitle.className = "card-subtitle mb-2 text-muted";
      cardSubtitle.textContent = `Durée : ${offer.Duration_O}, Salaire : ${offer.Salary_O}`;
  
      const cardText = document.createElement("p");
      cardText.className = "card-text";
      cardText.textContent = offer.Description;

      cardBody.appendChild(cardTitle);
      cardBody.appendChild(cardSubtitle);
      cardBody.appendChild(cardText);
      card.appendChild(cardBody);
      
      offerContainer.appendChild(card);
      });
      }  