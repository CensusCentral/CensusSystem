
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

/* Charts */

// const ctx1 = document.getElementById('populationChart').getContext('2d');
// const populationChart = new Chart(ctx1, {
//     type: 'bar',
//     data: {
//         labels: ['2020', '2021', '2022', '2023'],
//         datasets: [{
//             label: 'Population',
//             data: [1000, 1200, 1400, 1600],
//             backgroundColor: 'rgba(75, 192, 192, 0.2)',
//             borderColor: 'rgba(75, 192, 192, 1)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });

// const ctx2 = document.getElementById('beneficiariesChart').getContext('2d');
// const beneficiariesChart = new Chart(ctx2, {
//     type: 'bar',
//     data: {
//         labels: ['2020', '2021', '2022', '2023'],
//         datasets: [{
//             label: "4P's Beneficiaries",
//             data: [200, 250, 300, 350],
//             backgroundColor: 'rgba(153, 102, 255, 0.2)',
//             borderColor: 'rgba(153, 102, 255, 1)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });

// const ctx3 = document.getElementById('pwdChart').getContext('2d');
// const pwdChart = new Chart(ctx3, {
//     type: 'bar',
//     data: {
//         labels: ['2020', '2021', '2022', '2023'],
//         datasets: [{
//             label: 'Persons with Disabilities',
//             data: [50, 60, 70, 80],
//             backgroundColor: 'rgba(255, 159, 64, 0.2)',
//             borderColor: 'rgba(255, 159, 64, 1)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });

// const ctx4 = document.getElementById('seniorChart').getContext('2d');
// const seniorChart = new Chart(ctx4, {
//     type: 'bar',
//     data: {
//         labels: ['2020', '2021', '2022', '2023'],
//         datasets: [{
//             label: 'Senior Citizens',
//             data: [100, 110, 120, 130],
//             backgroundColor: 'rgba(255, 206, 86, 0.2)',
//             borderColor: 'rgba(255, 206, 86, 1)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });

const ctx1 = document.getElementById('populationChart');

new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
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
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
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
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
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
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {
    reponsive: true
  }
});

document.getElementById('logout-button').addEventListener('click', function() {
  var confirmation = confirm('Are you sure you want to log out?');
  if (confirmation) {
      // Proceed with logout
      window.location.href = "{{ url('') }}";
  }
  // If the user cancels, do nothing
});

// MENU
// MENU
// const allMenu = document.querySelectorAll('main .chart .head .menu');

// allMenu.forEach(item=> {
// 	const icon = item.querySelector('.icon');
// 	const menuLink = item.querySelector('.menu-link');

// 	icon.addEventListener('click', function () {
// 		menuLink.classList.toggle('show');
// 	})
// })//DI PA TO NAGANA



