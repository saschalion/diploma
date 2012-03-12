google.load("visualization", "1", {packages:["corechart"]});  
google.setOnLoadCallback(drawChart);


function drawChart() {
  
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'Name');
    data.addColumn('number', 'Activity');
    
    data.addRows([
        ['Jeff Jones', 0.45],
        ['John Baker', 55],
        ['Jen Yang', 0.85], 
        ['Mike Gertz', 23.45],
        ['Victoria Saint', 45]
    ]);

    var options = {
        'title':'Top 5 Mentees in terms of mentoring efficiency last one week',
        'width':250,
        'height':140
    };

    chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
}

google.setOnLoadCallback(drawChartSecond);

function drawChartSecond() {
    var dataSecond = new google.visualization.DataTable();
    dataSecond.addColumn('string', 'Name');
    dataSecond.addColumn('number', 'Activity');
    dataSecond.addRows([
        ['Jeff Jones', 39],
        ['John Baker', 12],
        ['Jen Yang', 14], 
        ['Mike Gertz', 1],
        ['Victoria Saint', 2]
    ]);

    var options = {
        'title':'Top 5 Mentees in terms of mentoring activity in last week',
        'width':250,
        'height':140
    };

    chartSecond = new google.visualization.PieChart(document.getElementById('chart_div'));
    chartSecond.draw(dataSecond, options);
}

google.setOnLoadCallback(drawChartThird);

function drawChartThird() {
    var dataThird = new google.visualization.DataTable();
    dataThird.addColumn('string', 'Month');
    dataThird.addColumn('number', 'Overall Efficiency Percentage');
    dataThird.addRows([
        ['Jan', 45],
        ['Feb', 50],
        ['Mar', 52], 
        ['Apr', 52],
        ['May', 60],
        ['June', 65],
        ['July', 65],
        ['Aug', 75], 
        ['Sep', 78],
        ['Oct', 78],
        ['Nov', 80], 
        ['Dec', 89]
    ]);

    var options = {
        'title':'Mentoring Efficiency at Program Level',
        'width':250,
        'height':140
    };

    chartThird = new google.visualization.BarChart(document.getElementById('chart_div1'));
    chartThird.draw(dataThird, options);
}

google.setOnLoadCallback(drawChartFouth);

function drawChartFouth() {
    var dataFouth = new google.visualization.DataTable();
    dataFouth.addColumn('string', 'Month');
    dataFouth.addColumn('number', 'Average Efficiency');
    dataFouth.addColumn('number', 'Joe Giglio');
    dataFouth.addColumn('number', 'John White');
    dataFouth.addColumn('number', 'John Wright');
    dataFouth.addColumn('number', 'Jeff Dujon');
    dataFouth.addColumn('number', 'Mike Kaiser');

    dataFouth.addRows([
        ['July', 65, 20, 25,30,33,34],
        ['Aug', 75, 20, 25,30,33,34], 
        ['Sep', 78,20, 30,35,35,35],
        ['Oct', 78,25, 30,35,35,35],
        ['Nov', 80,25,30,40,35,35], 
        ['Dec', 89,30,35,40,35,35]
    ]);

    var options = {
        width: 250, height: 140,
        title: 'Top 5 Mentees Needing Improvement'
    };

    chartFouth = new google.visualization.LineChart(document.getElementById('chart_div3'));
    chartFouth.draw(dataFouth, options);
}      


$(function(){
  $('.edit-profile-form input[type="text"]').keyup(function() {
   
    A = $('#name').val() - 0;
    B = $('#last_name').val() - 0; 
    C = $('#fax').val() - 0; 
    D = $('#telephone').val() - 0;

//    $('#result').empty()      
    $('#result').html(Math.floor((((A * B) / 2)+C)/D));
   
    var data = new google.visualization.DataTable();
    
    data.addColumn('string', 'Name');
    data.addColumn('number', 'Activity');
    
    data.addRows([
        ['Jeff Jones', A],
        ['John Baker', B],
        ['Jen Yang', C], 
        ['Mike Gertz', D],
        ['Victoria Saint', B]
    ]);
    
    var dataSecond = new google.visualization.DataTable();
    
    dataSecond.addColumn('string', 'Name');
    dataSecond.addColumn('number', 'Activity');
    dataSecond.addRows([
        ['Jeff Jones', A],
        ['John Baker', B],
        ['Jen Yang', C], 
        ['Mike Gertz', D],
        ['Victoria Saint', B]
    ]);
    
    var dataThird = new google.visualization.DataTable();
    
    dataThird.addColumn('string', 'Month');
    dataThird.addColumn('number', 'Overall Efficiency Percentage');
    dataThird.addRows([
        ['Jan', A],
        ['Feb', B],
        ['Mar', C], 
        ['Apr', D],
        ['May', B],
        ['June', D],
        ['July', A],
        ['Aug', B], 
        ['Sep', C],
        ['Oct', A],
        ['Nov', B], 
        ['Dec', D]
    ]);
    
    var dataFouth = new google.visualization.DataTable();
    
    dataFouth.addColumn('string', 'Month');
    dataFouth.addColumn('number', 'Average Efficiency');
    dataFouth.addColumn('number', 'Joe Giglio');
    dataFouth.addColumn('number', 'John White');
    dataFouth.addColumn('number', 'John Wright');
    dataFouth.addColumn('number', 'Jeff Dujon');
    dataFouth.addColumn('number', 'Mike Kaiser');

    dataFouth.addRows([
        ['July', A, B, C,D,B,A],
        ['Aug', A, B, C,D,B,A], 
        ['Sep', A, C, C,D,B,A],
        ['Oct', A, B, A,D,B,A],
        ['Nov', A, B, C,D,B,A], 
        ['Dec', A, D, C,D,B,A]
    ]);
    
    chart.draw(data, null);
    chartSecond.draw(dataSecond, null);
    chartThird.draw(dataThird, null);
    chartFouth.draw(dataFouth, null);
    
    return false;
  }); 
});