const ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, {
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
        responsive: true,
        maintainAspectRatio: true, /* Keeps the chart from stretching vertically */
        aspectRatio: 2,            /* Adjust aspect ratio as needed */
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});


// document.getElementById('logout-button').addEventListener('click', function() {
//   var confirmation = confirm('Are you sure you want to log out?');
//   if (confirmation) {
//       // Proceed with logout
//       window.location.href = "{{ url('/login/login') }}";
//   }
//   // If the user cancels, do nothing
// });

