//<?php
//use_helper('sdInteractiveChart');
//$chart = InteractiveChart::newAreaChart();
//$chart->setWidthAndHeight('400', '240');
//$chart->setDataColors(array('#aa0000'));
//$chart->setBaselineColor('#ccc');
//$chart->inlineGraph(array('hits' => array(1,9,5)), array('Monday', 'Tuesday', 'Wednesday'), 'chart_div');
//$chart->render();
//?>
<!--

<div id="chart_div"></div>-->

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
<script>
      google.load('visualization', '1', {'packages':['motionchart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Fruit');
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Sales');
        data.addColumn('number', 'Expenses');
        data.addColumn('string', 'Location');
        data.addRows([
          ['Apples',new Date (1988,0,1),1000,300,'East'],
          ['Oranges',new Date (1988,0,1),1150,200,'West'],
          ['Bananas',new Date (1988,0,1),300,250,'West'],
          ['Apples',new Date (1989,6,1),1200,400,'East'],
          ['Oranges',new Date (1989,6,1),750,150,'West'],
          ['Bananas',new Date (1989,6,1),788,617,'West']
          ]);
        var chart = new google.visualization.MotionChart(document.getElementById('chart_div'));
        chart.draw(data, {width: 600, height:300});
      }
</script>

<script>
    
   google.load('visualization', '1', {'packages':['annotatedtimeline']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Sold Pencils');
        data.addColumn('string', 'title1');
        data.addColumn('string', 'text1');
        data.addColumn('number', 'Sold Pens');
        data.addColumn('string', 'title2');
        data.addColumn('string', 'text2');
        data.addRows([
          [new Date(2008, 1 ,1), 30000, undefined, undefined, 40645, undefined, undefined],
          [new Date(2008, 1 ,2), 14045, undefined, undefined, 20374, undefined, undefined],
          [new Date(2008, 1 ,3), 55022, undefined, undefined, 50766, undefined, undefined],
          [new Date(2008, 1 ,4), 75284, undefined, undefined, 14334, 'Out of Stock','Ran out of stock on pens at 4pm'],
          [new Date(2008, 1 ,5), 41476, 'Bought Pens','Bought 200k pens', 66467, undefined, undefined],
          [new Date(2008, 1 ,6), 33322, undefined, undefined, 39463, undefined, undefined],
          [new Date(2009, 1 ,6), 456, undefined, undefined, 39463, undefined, undefined],
          [new Date(2010, 1 ,6), 3332, undefined, undefined, 39463, undefined, undefined],
          [new Date(2011, 1 ,6), 333242, undefined, undefined, 39463, undefined, undefined]
        ]);


        var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div_2'));
        chart.draw(data, {displayAnnotations: true});
      

}
</script>

<div id="chart_div"></div>

<div id="chart_div3" style="float: left;"></div>
<div id="chart_div" style="float: left;"></div>
<div id="chart_div_2" style="clear: both; width: 800px; height: 500px;"></div>