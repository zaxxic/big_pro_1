  // Initialize doughnut chart
  var ctxDoughnut = document.getElementById('myDoughnutChart').getContext('2d');
  var doughnutChart = new Chart(ctxDoughnut, {
      type: 'doughnut',
      data: {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
              label: '# of Votes',
              data: [10, 20, 30],
              backgroundColor: ['red', 'blue', 'yellow'],
              borderColor: ['red', 'blue', 'yellow'],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false
      }
  });

  // Initialize bar chart
  var ctxBar = document.getElementById('myBarChart').getContext('2d');
  var barChart = new Chart(ctxBar, {
      type: 'bar',
      data: {
          labels: ['A', 'B', 'C', 'D', 'E'],
          datasets: [{
              label: '# of Votes',
              data: [50000000000000, 40000000000000, 3000000000000, 2000000000000, 10],
              backgroundColor: ['red', 'blue', 'yellow', 'green', 'orange'],
              borderColor: ['red', 'blue', 'yellow', 'green', 'orange'],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false
      }
  });
