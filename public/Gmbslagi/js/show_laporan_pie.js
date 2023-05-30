 // Chart 3: Pie
var options3 = {
   chart: {
       height: 300,
       type: "donut",
       toolbar: {
         show: true,
         tools: {
           download: true,
           selection: false,
           zoom: false,
           zoomin: false,
           zoomout: false,
           pan: false,
           reset: false
         },
         exportMenu: {
           csv: false,
           png: false,
           svg: false,
           jpeg: false,
           pdf: false,
           customItems: [{
             title: 'Download',
             iconClass: 'fas fa-download',
             onclick: function () {
               // Logika yang dijalankan saat opsi "Download" diklik
               console.log('Download clicked');
             }
           }]
         }
       }
     },
   series: [44, 55, 13, 33, 20],
   labels: ["Apple", "Mango", "Orange", "Banana", "Pineapple"],
   colors: ["#99C2A2", "#C5EDAC", "#66C7F4", "#FEBF63", "#FF7F7F"],
   legend: {
       horizontalAlign: "left",
       offsetX: -5
   }
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

   //chart ke 2 yang 2 bar
   var options = {
    chart: {
        height: 350,
        type: "bar",
        toolbar: {
          show: true,
          tools: {
            download: true,
            selection: false,
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            reset: false
          },
          exportMenu: {
            csv: false,
            png: false,
            svg: false,
            jpeg: false,
            pdf: false,
            customItems: [{
              title: 'Download',
              iconClass: 'fas fa-download',
              onclick: function () {
                // Logika yang dijalankan saat opsi "Download" diklik
                console.log('Download clicked');
              }
            }]
          }
        }
      },
    dataLabels: {
      enabled: false
    },
    colors: ['#99C2A2', '#C5EDAC'],
    series: [

      {
        name: 'Column A',
        type: 'column',
        data: [21.1, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5,98,56,23,11]
      },
    ],
    stroke: {
      width: [10, 10, 10]
    },
    plotOptions: {
      bar: {
        columnWidth: "40%"
      }
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
    },
    yaxis: [
      {
        seriesName: 'Column A',
        axisTicks: {
          show: true
        },
        axisBorder: {
          show: true,
        },
        title: {
          text: "Columns"
        }
      },
      {
        seriesName: 'Column A',
        show: false
      }
    ],
    tooltip: {
      shared: false,
      intersect: true,
      x: {
        show: false
      }
    },
    legend: {
      horizontalAlign: "left",
      offsetX: 40
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart1"), options);

  chart.render();
