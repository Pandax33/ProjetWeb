const generateInternsList = (limit) => {
    const dataList = document.getElementById('interns-list');
    for (let i = 1; i <= limit; i++) {
      const option = document.createElement('option');
      option.value = i;
      dataList.appendChild(option);
    }
  };
  
  generateInternsList(100);
  
  
  
  