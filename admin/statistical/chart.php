
<main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <!-- <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div> -->
    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Italy', 54.8],
                ['France', 48.6],
                ['Spain', 44.4],
                ['USA', 23.9],
                ['Argentina', 14.5]
            ]);

            const options = {
                title: 'World Wide Wine Production'
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</main>
</div>