<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Year');
    data.addColumn('number', 'Average Efficiency');
    data.addColumn('number', 'Line one');
    data.addColumn('number', 'Line two');
    data.addColumn('number', 'Line three');
    data.addColumn('number', 'Line four');
    data.addColumn('number', 'Line five');

    data.addRows([
        ['2008', 65, 20, 25,30,33,34],
        ['2009', 75, 20, 25,30,33,34], 
        ['2010', 78,20, 30,35,35,35],
        ['2011', 78,25, 30,35,35,35],
        ['2012', 80,25,30,40,35,35], 
        ['2013', 89,30,35,40,35,35]
    ]);

    var options = {
        width: 560, height: 340,
        title: 'Forest'
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div3'));
    chart.draw(data, options);
}
</script>

<table align="center">
    <tr>
        <td>
           <div id="chart_div1"></div>
        </td>
        <td>
            <div id="chart_div"></div>
        </td>
    </tr>
    <tr>
        <td>
            <div id="chart_div2"></div>
        </td>
        <td>
            <div id="chart_div3"></div>
        </td>
    </tr>
</table>