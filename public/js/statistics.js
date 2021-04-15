 // ---------------------------- Website Consultation -----------------------------//
 const el1 = document.getElementById('toastConnection');

 console.log(connectionPerHour);

 const dataConnectionLogPerHour = {
     categories: ['Connection'],
     series: connectionPerHour
 }
 const optionsConnectionLog = {
     chart: {
         title: '',
         width: 400,
         height: 400
     },
     legend: {
         visible: false
     },
     series: {
         dataLabels: {
             visible: true,
             anchor: 'outer',
             formatter: (value) => value,
             pieSeriesName: {
                 visible: true,
             },
         },
         radiusRange: {
             inner: '60%',
             outer: '100%',
         }
     }

 };
 const chartConection = toastui.Chart.pieChart({
     el: el1,
     data: dataConnectionLogPerHour,
     options: optionsConnectionLog
 });