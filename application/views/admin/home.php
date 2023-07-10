
<?php
    $this->load->view("templates/header.php");
    $this->load->view("templates/sidebar.php");
    $this->load->view("templates/footer.php");
?>

<body>
<main id="main" class="main">
    <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Line Chart</h5>

            <!-- Line Chart -->
            <canvas id="lineChart" style="max-height: 400px;"></canvas>
            <script>
            document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#lineChart'), {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                    label: 'Line Chart',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
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
            });
            </script>
            <!-- End Line CHart -->

        </div>
        </div>
    </div>
</main>