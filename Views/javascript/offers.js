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
      const li = document.createElement("li");
      offerContainer.appendChild(li);
  
      const card = document.createElement("div");
      card.className = "card mb-3";
      card.style.maxWidth = "900px";
      li.appendChild(card);
  
      const row = document.createElement("div");
      row.className = "row g-0";
      card.appendChild(row);
  
      const colImg = document.createElement("div");
      colImg.className = "col-md-4";
      row.appendChild(colImg);
  
      const img = document.createElement("img");
      img.src = "../Views/css/enterprise.png";
      img.className = "img-fluid rounded-start";
      img.alt = "illustration d'entreprise";
      colImg.appendChild(img);
  
      const colContent = document.createElement("div");
      colContent.className = "col-md-8";
      row.appendChild(colContent);
  
      const cardBody = document.createElement("div");
      cardBody.className = "card-body";
      colContent.appendChild(cardBody);
  
      const cardTitle = document.createElement("h5");
      cardTitle.className = "card-title offer-title";
      cardTitle.textContent = `${offer.Entitled_O} /`;
      cardBody.appendChild(cardTitle);

const cardEnterprise = document.createElement("h5");
cardEnterprise.id = "enter";
cardEnterprise.textContent = offer.ent;
cardBody.appendChild(cardEnterprise);

const cardDuration = document.createElement("p");
cardDuration.className = "card-text";
cardDuration.textContent = `Durée du stage : ${offer.Duration_O}`;
cardBody.appendChild(cardDuration);

const cardDatePublish = document.createElement("p");
cardDatePublish.className = "card-text";
const smallText = document.createElement("small");
smallText.className = "text-muted";
smallText.textContent = offer.DatePublish_O;
cardDatePublish.appendChild(smallText);
cardBody.appendChild(cardDatePublish);

const buttonGroup = document.createElement("div");
buttonGroup.className = "button-group";
colContent.appendChild(buttonGroup);

const btnDetails = document.createElement("a");
btnDetails.href = `index.php?p=offers/detail/${offer.ID_O}`;
btnDetails.className = "btn btn-orange";
btnDetails.textContent = "En savoir plus";
buttonGroup.appendChild(btnDetails);

// Notez que le rôle doit être défini ou récupéré pour déterminer le bouton à afficher
const role = "student"; // Changer en fonction de la logique de récupération de rôle
if (offer.wish === 0 && role === "student") {
  const btnAddWishlist = document.createElement("a");
  btnAddWishlist.href = `index.php?p=offers/addWishlist/${offer.ID_O}`;
  btnAddWishlist.className = "btn btn-green";
  btnAddWishlist.textContent = "Ajouter à la Wishlist";
  buttonGroup.appendChild(btnAddWishlist);
} else if (offer.wish ===1 && role === "student") {
  const btnRemoveWishlist = document.createElement("a");
  btnRemoveWishlist.href = `index.php?p=offers/removeWishlist/${offer.ID_O}`;
  btnRemoveWishlist.className = "btn btn-red";
  btnRemoveWishlist.textContent = "Retirer de la Wishlist";
  buttonGroup.appendChild(btnRemoveWishlist);
  }
  });
  }