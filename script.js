const generateInternsList = (limit) => {
    const dataList = document.getElementById('interns-list');
    for (let i = 1; i <= limit; i++) {
      const option = document.createElement('option');
      option.value = i;
      dataList.appendChild(option);
 }
 };
  
generateInternsList(100);
  
  const ratingContainer = document.getElementById('rating');
  let rating = 0;
  
  // Add event listeners to each star
  ratingContainer.querySelectorAll('.star').forEach((star, index) => {
    star.addEventListener('click', () => {
      rating = index + 1;
      updateRating();
    });
  });
  
  function updateRating() {
    ratingContainer.querySelectorAll('.star').forEach((star, index) => {
      if (index < rating) {
        star.classList.add('selected');
      } else {
        star.classList.remove('selected');
      }
    });
  }
  
  function loadScript(url) {
    return new Promise((resolve, reject) => {
      const script = document.createElement('script');
      script.src = url;
      script.onload = resolve;
      script.onerror = reject;
      document.head.appendChild(script);
    });
  }
  
  async function loadJQueryAndRun() {
    try {
      await loadScript('https://code.jquery.com/jquery-3.6.0.min.js');
      const $ = window.jQuery;
  const getCities = async () => {
      const username = 'ibRa14'; // Your Geonames username
      const response = await fetch(`http://api.geonames.org/searchJSON?country=FR&maxRows=1000&username=${username}`);
      const cities = await response.json();
      const locationSelect = $('#locations-select');
      for (let i = 0; i < cities.geonames.length; i++) {
        const option = new Option(cities.geonames[i].name, cities.geonames[i].name, false, false);
        locationSelect.append(option);
      }
      locationSelect.select2({
        placeholder: 'Select locations',
        allowClear: true,
        closeOnSelect: false,
        multiple: true,
        maximumSelectionLength: 5
      });
    };
    
    $(document).ready(() => {
      getCities();
    });
  } catch (error) {
    console.error('Error loading jQuery:', error);
  }
}

loadJQueryAndRun();