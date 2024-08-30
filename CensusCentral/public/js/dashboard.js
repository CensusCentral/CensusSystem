const ctx = document.getElementById('myChart');
new Chart(ctx, {
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

// document.getElementById('logout-button').addEventListener('click', function() {
//   var confirmation = confirm('Are you sure you want to log out?');
//   if (confirmation) {
//       // Proceed with logout
//       window.location.href = "{{ url('/login/login') }}";
//   }
//   // If the user cancels, do nothing
// });

