
<style type="text/css">


#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/Chart.min.js"></script>




    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("saleschartdata.php",
                function (data)
                {
                    console.log(data);
                     var Date = [];
                    var Sales = [];

                    for (var i in data) {
                        Date.push(data[i].Date);
                        Sales.push(data[i].Sales);
                    }

                    var chartdata = {
                        labels: Date,
                        datasets: [
                            {
                                label: 'Sales',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Sales
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

