<?php
$uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);
?>


<!-- Required vendors -->
<script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/deznav-init.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/apexchart/apexchart.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/svganimation/vivus.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/svganimation/svg.animation.js"></script>



<!--Notice-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/notice/js/jquery.notice.js"></script>
<script type="text/javascript">
$( "#demo-success" ).click(function() {

    $.notice({
      text: "Success Message Here!",
      type: "success"
    });
});
</script>
<!--END Notice-->



<!-- Form Validation Script -->
<script src="<?php echo base_url(); ?>assets/lib/validation-engine/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>assets/lib/validation-engine/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<script>
$(document).ready(function(){
     $("#formID-1").validationEngine();
     $("#formID-2").validationEngine();
   });
</script>
<!-- End Form Validation Script -->




  <!-- Fixed Column Table-->
  <!--<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
  <script src="<?php echo base_url(); ?>assets/lib/freezetable/freeze-table.js"></script>
  <script>
  $(document).ready(function() {


    $(".tablecolfixnill").freezeTable();


    $(".tablecolfix").freezeTable({
      'columnNum' : 1,
      //'columnKeep' : true,
      'scrollBar': true,
      //'freezeHead': true,
      'shadow' : true
    });

    $(".tablecolfix3").freezeTable({
      'columnNum' : 3,
      //'columnKeep' : true,
      'scrollBar': true,
      //'freezeHead': true,
      'shadow' : true
    });

    /*
    $(".table-scrollable").freezeTable({
      'scrollable': true,
    });

    $('#table-modal').one('shown.bs.modal', function (e) {

      $(this).find(".table-modal").freezeTable({
        'container': '#table-modal.modal',
      });
    });

    $(".table-columns-only").freezeTable({
      'freezeHead': false,
    });

    $(".table-head-only").freezeTable({
      'freezeColumn': false,
    });

    // 2 Columns to be fixed
    $(".table-multi-columns").freezeTable({
      'columnNum' : 2,
    });

    // Shadow enabled
    $(".table-shadow").freezeTable({
      'shadow' : true,
    });

    // Customized styles
    $(".table-wrap-styles").freezeTable({
      'headWrapStyles': {'box-shadow': '0px 9px 10px -5px rgba(159, 159, 160, 0.8)'},
    });

    $(".table-with-scrollbar").freezeTable({
      'scrollBar': true,
    });

    // Freeze Column(s) Keep
    $(".table-column-keep").freezeTable({
      'columnNum' : 2,
      'columnKeep' : true,
    });
    */


  });
  </script>
  <!--END Fixed Column Table-->


  <!--Table Sorting-->
   <script>
  $(document).on('click', '.tablesort t', function(){
  //$('.tablesort th').click(function(){
      var table = $(this).parents('table').eq(0)
      var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
      this.asc = !this.asc
      if (!this.asc){rows = rows.reverse()}
      for (var i = 0; i < rows.length; i++){table.append(rows[i])}
  })
  function comparer(index) {
      return function(a, b) {
          var valA = getCellValue(a, index), valB = getCellValue(b, index)
          return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
      }
  }
  function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
   </script>
  <!--END Table Sorting-->



  <!-- Select Combo Box-->
  <script src="<?php echo base_url(); ?>assets/lib/selectbox/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <!--
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/selectbox/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  -->
  <script type="text/javascript">
  $(document).ready(function () {
        $('select').selectize({
            sortField: 'text'
        });
    });
  </script>
  <!-- END Select Combo Box-->


  <script type="text/javascript">
     $(document).ready(function(){
          $('input[name="horizradio"]').change(function(){
              if($('.horizradio').prop('checked')){
                  $('#enbdisblur').removeClass('blurdiv');
                  $('#enbdisblur2').removeClass('blurdiv');
              }else{
                  //alert('Option 1 is unchecked!');
                  $('#enbdisblur').addClass('blurdiv');
                  $('#enbdisblur2').addClass('blurdiv');
              }
          });
      });
   </script>

   <script type="text/javascript">
      $(document).ready(function(){
           $('input[name="kaizensortlist"]').change(function(){
               if($('.sortlistclick').prop('checked')){
                   $('.isnohide').removeClass('blurdiv');
                }else{
                   //alert('Option 1 is unchecked!');
                   $('.isnohide').addClass('blurdiv');
                   $('.sortlistcommentscls').val('');
                }
           });
       });
    </script>


   <script type="text/javascript">
      $(document).ready(function(){
        //$('.hiddapprie').addClass('blurdiv');
        //$('.hiddappracc').addClass('blurdiv');

        var cs_cycletime = $('.cs_cycletime').val().length;
        var cs_manpower = $('.cs_manpower').val().length;
        if (cs_cycletime==0 && cs_manpower==0) {
          $('.hiddapprie').addClass('blurdiv');
        } else {
          $('.hiddapprie').removeClass('blurdiv');
        }


        var cs_costenter = $('.cs_costenter').val();
        if(cs_costenter=='') { $('.hiddappracc').addClass('blurdiv'); }
        if($.isNumeric(cs_costenter)) {
               if (cs_costenter<50000) {
                $('.hiddappracc').addClass('blurdiv');
              } else {
                $('.hiddappracc').removeClass('blurdiv');
              }
         }


        $('.inpchangecls').on('keyup', function() {
            var cs_cycletime = $('.cs_cycletime').val().length;
            var cs_manpower = $('.cs_manpower').val().length;
            if (cs_cycletime==0 && cs_manpower==0) {
              $('.hiddapprie').addClass('blurdiv');
            } else {

              var cs_cycletime_val = $('.cs_cycletime').val();
              var cs_manpower_val = $('.cs_manpower').val();
              if (cs_cycletime_val==0 && cs_manpower_val==0) {
                $('.hiddapprie').addClass('blurdiv');
              } else {
               $('.hiddapprie').removeClass('blurdiv');
             }
            }
       });

       $('.cs_costenter').on('keyup', function() {
           var cs_costenter = $('.cs_costenter').val();
           if($.isNumeric(cs_costenter)) {
                  if (cs_costenter<50000) {
                   $('.hiddappracc').addClass('blurdiv');
                 } else {
                   $('.hiddappracc').removeClass('blurdiv');
                 }
            }
       });



      });
    </script>


   <?php
     if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
   ?>

 <?php
   //$this->load->view('include/kaizen-chartjs-init');
   ?>
 <?php } ?>


 <!-- Resources
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
-->



<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) { /*
?>


<?php
$viv_user_type = $this->session->userdata('viv_user_type');
$viv_profile_id = $this->session->userdata('viv_profile_id');
$viv_email = $this->session->userdata('viv_email');
 ?>
 <?php
 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
 ?>

<script src="<?php echo base_url(); ?>assets/lib/bargraph/index.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bargraph/xy.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bargraph/Animated.js"></script>


<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([am5themes_Animated.new(root)]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(
  am5xy.XYChart.new(root, {
    panX: false,
    panY: false,
    wheelX: "panX",
    wheelY: "zoomX",
    layout: root.verticalLayout
  })
);

// Add scrollbar
// https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
chart.set(
  "scrollbarX",
  am5.Scrollbar.new(root, {
    orientation: "horizontal"
  })
);

var data = [
  {
    year: "Jan",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$dept_sub,'submitted'); ?>
  },
  {
    year: "Feb",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$dept_sub,'submitted'); ?>
  },
  {
    year: "Mar",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$dept_sub,'submitted'); ?>
  },
  {
    year: "Apr",
    value: "100",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$dept_sub,'submitted'); ?>
  },
  {
    year: "May",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Jun",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Jul",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
    *
  },
  {
    year: "Aug",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Sep",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Oct",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Nov",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  },
  {
    year: "Dec",
    approved: <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$dept_sub,'approved'); ?>,
    submitted: <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$dept_sub,'submitted'); ?>
    /* strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    } *
  }
  /*
  {
    year: "Jun",
    income: 34.1,
    expenses: 32.9,
    columnSettings: {
      strokeWidth: 1,
      strokeDasharray: [5],
      fillOpacity: 0.2
    },
    info: "(projection)"
  }
  *
];

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(
  am5xy.CategoryAxis.new(root, {
    categoryField: "year",
    renderer: am5xy.AxisRendererX.new(root, {}),
    tooltip: am5.Tooltip.new(root, {})
  })
);

xAxis.data.setAll(data);

var yAxis = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    min: 0,
    extraMax: 3,
    renderer: am5xy.AxisRendererY.new(root, {})
  })
);


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/

var series1 = chart.series.push(
  am5xy.ColumnSeries.new(root, {
    name: "Total Kaizen Approved",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "approved",
    categoryXField: "year",
     tooltip:am5.Tooltip.new(root, {
      pointerOrientation:"horizontal",
      labelText:"{name} in {categoryX}: {valueY} {info}"
    })
  })
);

series1.columns.template.setAll({
  tooltipY: am5.percent(10),
  templateField: "columnSettings"
});

series1.data.setAll(data);

var series2 = chart.series.push(
  am5xy.LineSeries.new(root, {
    name: "Total Kaizen Submitted",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "submitted",
    categoryXField: "year",
    tooltip:am5.Tooltip.new(root, {
      pointerOrientation:"horizontal",
      labelText:"{name} in {categoryX}: {valueY} {info}"
    })
  })
);

series2.strokes.template.setAll({
  strokeWidth: 3,
  templateField: "strokeSettings"
});


series2.data.setAll(data);

series2.bullets.push(function () {
  return am5.Bullet.new(root, {
    sprite: am5.Circle.new(root, {
      strokeWidth: 3,
      stroke: series2.get("stroke"),
      radius: 5,
      fill: root.interfaceColors.get("background")
    })
  });
});

chart.set("cursor", am5xy.XYCursor.new(root, {}));

// Add legend
// https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
var legend = chart.children.push(
  am5.Legend.new(root, {
    centerX: am5.p50,
    x: am5.p50
  })
);
legend.data.setAll(chart.series.values);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
chart.appear(1000, 100);
series1.appear();

}); // end am5.ready()
</script>
<?php  */ } ?>



<?php
  /* if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
?>




<script src="<?php echo base_url(); ?>assets/lib/bargraph/index.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bargraph/xy.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bargraph/Animated.js"></script>


<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([am5themes_Animated.new(root)]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(
  am5xy.XYChart.new(root, {
    panX: false,
    panY: false,
    wheelX: "panX",
    wheelY: "zoomX",
    layout: root.verticalLayout
  })
);

// Add scrollbar
// https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
chart.set(
  "scrollbarX",
  am5.Scrollbar.new(root, {
    orientation: "horizontal"
  })
);

var data = [
  {
    year: "Jan",
    approved: 35,
    submitted: 50
  },
  {
    year: "Feb",
    approved: 30,
    submitted: 40
  },
  {
    year: "Mar",
    approved: 50,
    submitted: 55
  },
  {
    year: "Apr",
    approved: 40,
    submitted: 60
  },
  {
    year: "May",
    approved: 30,
    submitted: 45,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Jun",
    approved: 50,
    submitted: 55,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Jul",
    approved: 20,
    submitted: 30,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Aug",
    approved: 30,
    submitted: 40,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Sep",
    approved: 55,
    submitted: 60,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Oct",
    approved: 40,
    submitted: 70,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Nov",
    approved: 30,
    submitted: 60,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  },
  {
    year: "Dec",
    approved: 40,
    submitted: 50,
    strokeSettings: {
      stroke: chart.get("colors").getIndex(1),
      strokeWidth: 3,
      strokeDasharray: [5, 5]
    }
  }
  /*
  {
    year: "Jun",
    income: 34.1,
    expenses: 32.9,
    columnSettings: {
      strokeWidth: 1,
      strokeDasharray: [5],
      fillOpacity: 0.2
    },
    info: "(projection)"
  }
  *
];

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(
  am5xy.CategoryAxis.new(root, {
    categoryField: "year",
    renderer: am5xy.AxisRendererX.new(root, {}),
    tooltip: am5.Tooltip.new(root, {})
  })
);

xAxis.data.setAll(data);

var yAxis = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    min: 0,
    extraMax: 0.1,
    renderer: am5xy.AxisRendererY.new(root, {})
  })
);


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/

var series1 = chart.series.push(
  am5xy.ColumnSeries.new(root, {
    name: "Total Kaizen Approved",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "approved",
    categoryXField: "year",
    tooltip:am5.Tooltip.new(root, {
      pointerOrientation:"horizontal",
      labelText:"{name} in {categoryX}: {valueY} {info}"
    })
  })
);

series1.columns.template.setAll({
  tooltipY: am5.percent(10),
  templateField: "columnSettings"
});

series1.data.setAll(data);

var series2 = chart.series.push(
  am5xy.LineSeries.new(root, {
    name: "Total Kaizen Submitted",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "submitted",
    categoryXField: "year",
    tooltip:am5.Tooltip.new(root, {
      pointerOrientation:"horizontal",
      labelText:"{name} in {categoryX}: {valueY} {info}"
    })
  })
);

series2.strokes.template.setAll({
  strokeWidth: 3,
  templateField: "strokeSettings"
});


series2.data.setAll(data);

series2.bullets.push(function () {
  return am5.Bullet.new(root, {
    sprite: am5.Circle.new(root, {
      strokeWidth: 3,
      stroke: series2.get("stroke"),
      radius: 5,
      fill: root.interfaceColors.get("background")
    })
  });
});

chart.set("cursor", am5xy.XYCursor.new(root, {}));

// Add legend
// https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
var legend = chart.children.push(
  am5.Legend.new(root, {
    centerX: am5.p50,
    x: am5.p50
  })
);
legend.data.setAll(chart.series.values);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
chart.appear(1000, 100);
series1.appear();

}); // end am5.ready()
</script>
<?php  } */ ?>


<!-- SAMPLE

  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[4, 4, 4],
    [2, 4, 6],
    [8, 2, 0],
    [<?php /* echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$dept_sub,'submitted'); ?>, <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$dept_sub,'rejected'); ?>, <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$dept_sub,'approved'); */ ?>],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3],
    [3, 1, 3]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Approved"], // for stacked bar charts
    legendColors: ["yellow", "pink", "lightgreen"], // bar colors
    barLabels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
      //  $(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
      //  $(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

-->


<?php
$viv_user_type = $this->session->userdata('viv_user_type');
$viv_profile_id = $this->session->userdata('viv_profile_id');
$viv_email = $this->session->userdata('viv_email');
 ?>
 <?php
 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = 'ALL'; }
 ?>


<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMADMIN') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>


<?php
  if($uri3=='dashboardcadre' || ($uri3=='dashboardcadre' && $uri4=='index')) {
  if($viv_user_type=='TRMMADMIN') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["C1", "C2", "C3", "C4"], // for stacked bar charts
    legendColors: ["lightblue", "pink", "yellow", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Cadre Graph", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDivcadre"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>




<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMADMIN') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_ideagen('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_ideagen('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_ideagen('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_ideagen('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Ideas Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Ideas Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>




<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMEMP') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_emp('',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('',$year_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_emp('01',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('01',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('01',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('01',$year_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_emp('02',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('02',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('02',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('02',$year_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_emp('03',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('03',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('03',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp('03',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('04',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('04',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('04',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('04',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('05',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('05',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('05',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('05',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('06',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('06',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('06',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('06',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('07',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('07',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('07',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('07',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('08',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('08',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('08',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('08',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('09',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('09',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('09',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('09',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('10',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('10',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('10',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('10',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('11',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('11',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('11',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('11',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp('12',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('12',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('12',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp('12',$year_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>



<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMEMP') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('',$year_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('01',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('01',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('01',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('01',$year_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('02',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('02',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('02',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('02',$year_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('03',$year_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('03',$year_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('03',$year_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('03',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('04',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('04',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('04',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('04',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('05',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('05',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('05',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('05',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('06',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('06',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('06',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('06',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('07',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('07',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('07',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('07',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('08',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('08',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('08',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('08',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('09',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('09',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('09',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('09',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('10',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('10',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('10',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('10',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('11',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('11',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('11',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('11',$year_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('12',$year_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('12',$year_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('12',$year_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_emp_ideagen('12',$year_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Idea Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>




<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMMANG') {
 $findmydomainbypid =  $this->mapi->findmydomainbypid($viv_profile_id);
 $domain_sub_mang =  $this->input->post('domain'); if(empty($domain_sub_mang)) { $domain_sub_mang = $findmydomainbypid; }
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_mang('',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_mang('01',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('01',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('01',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('01',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_mang('02',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('02',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('02',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('02',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_mang('03',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('03',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('03',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang('03',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('04',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('04',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('04',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('04',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('05',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('05',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('05',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('05',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('06',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('06',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('06',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('06',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('07',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('07',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('07',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('07',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('08',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('08',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('08',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('08',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('09',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('09',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('09',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('09',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('10',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('10',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('10',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('10',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('11',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('11',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('11',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('11',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang('12',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('12',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('12',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang('12',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>



<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMMANG') {
 $findmydomainbypid =  $this->mapi->findmydomainbypid($viv_profile_id);
 $domain_sub_mang =  $this->input->post('domain'); if(empty($domain_sub_mang)) { $domain_sub_mang = $findmydomainbypid; }
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('01',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('01',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('01',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('01',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('02',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('02',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('02',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('02',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('03',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('03',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('03',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('03',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('04',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('04',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('04',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('04',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('05',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('05',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('05',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('05',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('06',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('06',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('06',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('06',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('07',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('07',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('07',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('07',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('08',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('08',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('08',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('08',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('09',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('09',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('09',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('09',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('10',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('10',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('10',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('10',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('11',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('11',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('11',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('11',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('12',$year_sub,$domain_sub_mang,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('12',$year_sub,$domain_sub_mang,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('12',$year_sub,$domain_sub_mang,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_mang_ideagen('12',$year_sub,$domain_sub_mang,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Idea Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>



<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMIEDEPT') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_iedept('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_iedept('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_iedept('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_iedept('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>



<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMIEDEPT') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_iedept_ideagen('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Idea Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>




<?php
  if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMFINANCE') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_finance('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_finance('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_finance('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_finance('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Kaizen Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>


<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
  if($viv_user_type=='TRMMFINANCE') {
?>
  <script>
 $(document).ready(function() {
  // Specify data, options, and element in which to create the chart
  let data = {
    dataValues: [[<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],


      [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('01',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('01',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('01',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('01',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('02',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('02',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('02',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('02',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

      [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('03',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('03',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('03',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
      <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('03',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('04',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('04',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('04',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('04',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('05',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('05',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('05',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('05',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('06',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('06',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('06',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('06',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('07',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('07',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('07',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('07',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('08',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('08',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('08',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('08',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('09',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('09',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('09',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('09',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('10',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('10',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('10',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('10',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('11',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('11',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('11',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('11',$year_sub,$domain_sub,$dept_sub,'approved'); ?>],

    [<?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('12',$year_sub,$domain_sub,$dept_sub,'submitted'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('12',$year_sub,$domain_sub,$dept_sub,'rejected'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('12',$year_sub,$domain_sub,$dept_sub,'pendingapproval'); ?>,
    <?php echo $this->mapi->count_totalmonthbyyear_finance_ideagen('12',$year_sub,$domain_sub,$dept_sub,'approved'); ?>]],
    // for a normal bar chart use multiple arrays with 1 value in each array
    legend: ["Total Submitted", "Rejected", "Pending Approval", "Approved"], // for stacked bar charts
    legendColors: ["white", "pink", "lightgray", "lightgreen"], // bar colors
    barLabels: ["<?php echo $year_sub; ?>", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // x-axis labels
    labelColors: ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"] // x-axis label colors
  };

  let options = {
    chartWidth: "60%", // use valid css sizing
    chartHeight: "60%", // use valid css sizing
    chartTitle: "Kaizen Form", // enter chart title
    chartTitleColor: "black", // enter any valid css color
    chartTitleFontSize: "2rem", // enter a valid css font size
    yAxisTitle: "Total Number of Idea Submitted", // enter title for y-axis
    xAxisTitle: "Year : 2022", // enter title for x-axis
    barValuePosition: "center", // "flex-start" (top), "center", or "flex-end" (bottom)
    barSpacing: "1%" // "1%" (small), "3%" (medium), "5%" (large)
  };

  let element = "#testDiv"; // Use a jQuery selector to select the element to put the chart into

  // Generate chart
  drawBarChart(data, options, element);

  // Draws individual chart components
  function drawBarChart(data, options, element) {
    drawChartContainer(element);
    drawChartTitle(options);
    drawChartLegend(data);
    drawYAxisTitle(options);
    drawYAxis(data);
    drawChartGrid(data, options);
    drawXAxis(data, options);
    drawXAxisTitle(options);
  }

  // Adds chart container to selected element
  function drawChartContainer(element) {
    $(element).prepend("<div class='chartContainer'></div>");
    $(element).css("height", "100%");
  }

  // Draws chart title
  function drawChartTitle(options) {
    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
    //$(".chartContainer").append("<input type='text' placeholder='Chart Title...' name='chartTitle' class='chartTitle' ></input>");
    $(".chartTitle").css("color", options.chartTitleColor);
    $(".chartTitle").css("font-size", options.chartTitleFontSize);
  }

  // Draws chart legend
  function drawChartLegend(data) {
    $(".chartContainer").append("<div class='chartLegend'></div>");
    for (let i = 0; i < data.legend.length; i++) {
      $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
      $(".legendKey" + i).css("background-color", data.legendColors[i]);
      $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
    }
  }

  // Draws y-axis title
  function drawYAxisTitle(options) {
    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
  }

  // Draws y-axis labels that are properly scaled to the data and have an
  // appropriate number of decimal places
  function drawYAxis(data) {
    $(".chartContainer").append("<div class='yAxis'></div>");
    let maximum = maxScale(tallestBar(data));
    let order = Math.floor(Math.log(maximum) / Math.LN10
                       + 0.000000001);
    for (let i = 1; i > 0; i = i - 0.2) {
      if (order < 0) {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order-1)) + "</div>");
      } else {
        //$(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
      }
    }
  }

  // Finds the array with the largest sum and returns the sum of that array
  function tallestBar(data) {
    let sum = 0;
    for (let i = 0; i < data.dataValues.length; i++) {
      let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
      if (sumArray > sum) {
        sum = sumArray;
      }
    return sum;
    }
  }

  // Calculates a maximum value for the y-axis scale that is slightly larger
  // than the largest value in the dataset and is rounded suitably
  function maxScale(n) {
    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001);
    let multiple = Math.pow(10,order);
    let result = Math.ceil(n * 1.1 / multiple) * multiple;
    if (order > 0) {
      return result;
    } else if (order == 0) {
      return result.toFixed(1);
    } else {
      return result.toFixed(Math.abs(order));
    }
  }

  // Draws chart grid and all data bars
  function drawChartGrid(data, options) {
    // Add container for data
    $(".chartContainer").append("<div class='chartGrid'></div>");

    // Calculate maximum y-axis label value
    let maximum = maxScale(tallestBar(data));

    // Calculate bar width
    let barWidth = 100 / (data.dataValues.length + 2);

    // Add data bars to grid
    for (let i = 0; i < data.dataValues.length; i++) {
      $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
      $(".bar" + i).css("height", "100%");
      $(".bar" + i).css("width", barWidth + "%");
      // Add inner bars
      for (let j = 0; j < data.dataValues[i].length; j++) {

        // Create an inner bar if the value is non-zero
        if (data.dataValues[i][j]) {
          $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");

          // Calculate height of the bar, set color, and show data value inside the bar
          let height = data.dataValues[i][j] / maximum * 100;
          $(".innerBar" + i + j).css("height", height + "%");
          $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
          $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
          $(".barValue").css("align-self", options.barValuePosition);
          $(".barValue").css("margin", "0");
        }
      }
    }
    // Set spacing of data bars
    $(".bar").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis labels
  function drawXAxis(data, options) {
    $(".chartContainer").append("<div class='emptyBox'></div>");
    $(".chartContainer").append("<div class='xAxis'></div>");

    // Calculate width of the x-axis label to be the same as the bar width
    let barWidth = 100 / (data.barLabels.length + 2);

    for (let i = 0; i < data.barLabels.length; i++) {
      $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
      $(".xAxisLabel").css("width", barWidth + "%");
      $(".xAxisLabel" + i).css("color", data.labelColors[i]);
    }

    // Set spacing of x-axis labels
    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
  }

  // Draws x-axis title
  function drawXAxisTitle(options) {
    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
  }

});
 </script>

<?php } } ?>

<script>
    var date = new Date().toISOString().slice(0,10);
    $('#origi_date').attr('min', date);
    $('#approv_date').attr('min', date);
</script>


<?php
  if($uri3=='ideamang' || ($uri3=='ideagen' && $uri4=='postidea')) {
 ?>
<!--<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/jquery-2.1.3.js"></script>-->
<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/jspdf.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/html2canvas.js"></script>

<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/convert.js"></script>

<?php } ?>
