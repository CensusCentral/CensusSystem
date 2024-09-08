document.addEventListener('DOMContentLoaded', function() {
    // Get the JSON data from the inline script
    var chartDataElement = document.getElementById('chartData');
    var data = chartDataElement ? JSON.parse(chartDataElement.textContent) : [];

    // Create the chart with the parsed data
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
            onClick: function(event, elements) {
                if (elements.length > 0) {
                    var element = elements[0];
                    var index = element.index; // Index of the clicked element
                    var barangay = labels[index];

                    // Redirect to the barangay section
                    window.location.href = '/barangay' ;
                }
            }
        }
    });
}
