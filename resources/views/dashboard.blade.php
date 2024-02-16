<!DOCTYPE html>
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

=======
<html lang="en">
>>>>>>> f204c4ec4a3d4b01d4745850a2b9de88a0469186
<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <div style="width: 20%">
        <canvas id="bar_chart"></canvas>
    </div>


</body>
<script>
    var ctx = document.getElementById('bar_chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: ['rgba(75, 192, 192, 1)',
                'rgba(100, 192, 0, 1)',
                'rgba(20, 0, 192, 1)',
                'rgba(100, 192, 61, 1)'],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
=======
</head>
<body>

</body>
>>>>>>> f204c4ec4a3d4b01d4745850a2b9de88a0469186
</html>
