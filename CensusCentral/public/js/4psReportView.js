
const highlightButton = (buttonType) => {
    const overallBtn = document.getElementById('overall-btn');
    const barangayBtn = document.getElementById('barangay-btn');

    if (buttonType === 'overall') {
        overallBtn.classList.add('active');
        barangayBtn.classList.remove('active');
    } else {
        overallBtn.classList.remove('active');
        barangayBtn.classList.add('active');
    }
}

const selectBarangay = (barangayName) => {
    highlightButton('barangay');
    document.getElementById('barangay-btn').innerHTML = `<span>${barangayName}</span> <i class="fas fa-angle-down"></i>`;
}

const ctx1 = document.getElementById('populationChart');

new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: [
      'Baclaran', 'Banay-Banay', 'Banlic', 'Bigaa', 'Butong', 'Casile',
      'Diezmo', 'Gulod', 'Mamatid', 'Marinig', 'Niugan', 'Pittland', 
      'Pulo', 'Sala', 'San Isidro', 'Brgy. I', 'Brgy. II', 'Brgy. III'
  ],
    datasets: [{
      label: '# of Population',
      data: [
        0, 1, 10, 20, 30, 40, 50, 
        60, 70, 80, 90, 100, 110,
        120, 130, 140, 150, 200
        // Add corresponding data values
    ],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});

const ctx2 = document.getElementById('beneficiariesChart');

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: [
      'Baclaran', 'Banay-Banay', 'Banlic', 'Bigaa', 'Butong', 'Casile',
      'Diezmo', 'Gulod', 'Mamatid', 'Marinig', 'Niugan', 'Pittland', 
      'Pulo', 'Sala', 'San Isidro', 'Brgy. I', 'Brgy. II', 'Brgy. III'
  ],
    datasets: [{
      label: '# of 4Ps Beneficiaries',
      data: [
        0, 1, 10, 20, 30, 40, 50, 
        60, 70, 80, 90, 100, 110,
        120, 130, 140, 150, 200
        // Add corresponding data values
    ],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});

const ctx3 = document.getElementById('pwdChart');

new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: [
      'Baclaran', 'Banay-Banay', 'Banlic', 'Bigaa', 'Butong', 'Casile',
      'Diezmo', 'Gulod', 'Mamatid', 'Marinig', 'Niugan', 'Pittland', 
      'Pulo', 'Sala', 'San Isidro', 'Brgy. I', 'Brgy. II', 'Brgy. III'
  ],
    datasets: [{
      label: '# of Person with Disabilities',
      data: [
        0, 1, 10, 20, 30, 40, 50, 
        60, 70, 80, 90, 100, 110,
        120, 130, 140, 150, 200
        // Add corresponding data values
    ],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});

const ctx4 = document.getElementById('seniorChart');

new Chart(ctx4, {
  type: 'bar',
  data: {
    labels: [
      'Baclaran', 'Banay-Banay', 'Banlic', 'Bigaa', 'Butong', 'Casile',
      'Diezmo', 'Gulod', 'Mamatid', 'Marinig', 'Niugan', 'Pittland', 
      'Pulo', 'Sala', 'San Isidro', 'Brgy. I', 'Brgy. II', 'Brgy. III'
  ],
    datasets: [{
      label: '# of Senior Citizens',
      data: [
        0, 1, 10, 20, 30, 40, 50, 
        60, 70, 80, 90, 100, 110,
        120, 130, 140, 150, 200
        // Add corresponding data values
    ],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});

const ctx5 = document.getElementById('ISFChart');

new Chart(ctx5, {
  type: 'bar',
  data: {
    labels: [
      'Baclaran', 'Banay-Banay', 'Banlic', 'Bigaa', 'Butong', 'Casile',
      'Diezmo', 'Gulod', 'Mamatid', 'Marinig', 'Niugan', 'Pittland', 
      'Pulo', 'Sala', 'San Isidro', 'Brgy. I', 'Brgy. II', 'Brgy. III'
  ],
    datasets: [{
      label: '# of Informal Settlers Families',
      data: [
        0, 1, 10, 20, 30, 40, 50, 
        60, 70, 80, 90, 100, 110,
        120, 130, 140, 150, 200
        // Add corresponding data values
    ],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});




