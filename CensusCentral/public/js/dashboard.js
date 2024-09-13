document.addEventListener('DOMContentLoaded', function() {
    
    var chartDataElement = document.getElementById('chartData');
    //PINPAPARSE NITO YUNG DATA GALING SA DB
    var data = chartDataElement ? JSON.parse(chartDataElement.textContent) : [];

    //CALL YUN FUNCTION PARA MAGKARON NG LAMAN UNG GRAPH
    createPopulationChart(data);
});

function createPopulationChart(data) {
    var ctx = document.getElementById('populationChart').getContext('2d');

    var labels = data.map(item => item.barangay);
    var values = data.map(item => item.totalPopulation);

    var chart = new Chart(ctx, {
        type: 'bar', // Choose 'bar', 'line', 'pie', etc.
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Population',
                data: values,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },

            // FUNCTION PARA DUN SA REDIRECTION PAG PININDOT YUNG GRAPH
            onClick: function(event, elements) {
                if (elements.length > 0) {
                    var element = elements[0];
                    var index = element.index; 
                    var barangay = labels[index];

                    //REDIRECT DUN SA BARANGAY SECTION
                    window.location.href = '/barangay' ;
                }
            }
        }
    });
}






// TRY BAGONG METHOD


// document.addEventListener('DOMContentLoaded', function() {
//     const ctx = document.getElementById('populationChart').getContext('2d');
    
//     let chart = new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: [], // Will be updated based on the card clicked
//             datasets: [{
//                 label: '',
//                 data: [], // Will be updated based on the card clicked
//                 backgroundColor: 'rgba(54, 162, 235, 0.2)',
//                 borderColor: 'rgba(54, 162, 235, 1)',
//                 borderWidth: 1
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         }
//     });

//     function updateChart(chartType) {
//         fetch(`/data/${chartType}`)
//             .then(response => response.json())
//             .then(data => {
//                 chart.data.labels = data.labels;
//                 chart.data.datasets[0].data = data.values;
//                 chart.data.datasets[0].label = data.label;
//                 chart.update();
//             });
//     }

//     document.querySelectorAll('.card').forEach(card => {
//         card.addEventListener('click', function() {
//             const chartType = this.getAttribute('data-chart');
//             updateChart(chartType);
//             document.getElementById('chartTitle').textContent = `Chart for ${chartType.charAt(0).toUpperCase() + chartType.slice(1)}`;
//         });
//     });

//     // Load the default chart
//     updateChart('population');
// });

