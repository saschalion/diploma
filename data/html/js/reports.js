google.load("visualization", "1", {packages:["corechart"]});  
google.setOnLoadCallback(drawChart);


function drawChart() {
  
    var data = new google.visualization.DataTable();

    data.addColumn('number', 'X');
    data.addColumn('number', 'Y');
    
    function V(x, A, B, C, D, E, F) {
      return Math.pow(x, 8) / 8
        + (A / 6) * Math.pow(x, 6)
        + (B / 5) * Math.pow(x, 5)
        + (C / 4) * Math.pow(x, 4)
        + (D / 3) * Math.pow(x, 3)
        + (E / 2) * Math.pow(x, 2)
        + F * x
      ;
    };
    

        for(F = -100; F <= 100; F++)
            for(D = -100; D <= 100; D++)
                data.addRows([[F, V(F, 0, 0, 50, 4, -24, D)]]);
    
    var options = {
        'title':'Top 5 Mentees in terms of mentoring efficiency last one week',
        'width':450,
        'height':240
    };

    chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
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