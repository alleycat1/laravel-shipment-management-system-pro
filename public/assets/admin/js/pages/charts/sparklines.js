var SparklineCharts = (function () {
  var barWidth
  var width
  if ($(window).width() > 440) {
    barWidth = $(window).width() / 70
    width = Math.floor(($(window).width()) / 5)
  } else {
    barWidth = $(window).width() / 50
    width = Math.floor(($(window).width()) / 4)
  }

  var handledrawMouseSpeedChart = function () {
    var mrefreshinterval = 500 // update display every 500ms
    var lastmousex = -1
    var lastmousey = -1
    var lastmousetime
    var mousetravel = 0
    var mpoints = []
    var mpointsMax = 30
    $('html').mousemove(function (e) {
      var mousex = e.pageX
      var mousey = e.pageY
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
      }
      lastmousex = mousex
      lastmousey = mousey
    })
    var mdraw = function () {
      var md = new Date()
      var timenow = md.getTime()
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
        mpoints.push(pps)
        if (mpoints.length > mpointsMax) {
          mpoints.splice(0, 1)
          mousetravel = 0
        }
        $('.spl-mousespeed').sparkline(mpoints, {
          width: mpoints.length * 2,
          tooltipSuffix: ' pixels per second',
          height: '100'
        })
      }
      lastmousetime = timenow
      setTimeout(mdraw, mrefreshinterval)
    }
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval)
  }

  var handlePieChrt = function () {
    $('.spl-pie-chart').sparkline('html', {
      type: 'pie',
      width: '100%',
      height: '300'
    })
  }

  var handleLineChart = function () {
    $('.spl-line-chart').sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
      type: 'line',
      width: '100%',
      height: '100'
    })
  }

  var handleBarChart = function () {
    $('.spl-bar-chart').sparkline('html', {
      type: 'bar',
      height: '100',
      barWidth: barWidth,
      barSpacing: 3
    })
  }

  var handleCompositBarChart = function () {
    $('.spl-cp-bar-chart').sparkline('html', {
      type: 'bar',
      barColor: '#aaf',
      height: '100',
      barWidth: barWidth,
      barSpacing: 3
    })
    $('.spl-cp-bar-chart').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7], {
      composite: true,
      fillColor: false,
      lineColor: 'red',
      width: '100%',
      height: '100'
    })
  }

  var handleCompositeInline = function () {
    $('.spl-cp-inline').sparkline('html', {
      fillColor: false,
      changeRangeMin: 0,
      chartRangeMax: 10,
      width: '100%',
      height: '100'
    })

    $('.spl-cp-inline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7], {
      composite: true,
      fillColor: false,
      lineColor: 'red',
      changeRangeMin: 0,
      chartRangeMax: 10,
      width: '100%',
      height: '100'
    })
  }

  var handleInlineChart = function () {
    $('.spl-inline').sparkline('html', {
      width: '100%',
      height: '100'
    })
  }

  var handleBarNegativeChart = function () {
    $('.spl-bar-negative').sparkline('html', {
      type: 'bar',
      barWidth: '100%',
      barSpacing: 3,
      height: '100'
    })
  }

  var handleDiscreateChart = function () {
    $('.spl-discreate1').sparkline('html', {
      type: 'discrete',
      height: '100',
      width: width
    })
  }

  var handleDiscreateWithThresholdChart = function () {
    $('.spl-discreate2').sparkline('html', {
      type: 'discrete',
      lineColor: 'blue',
      thresholdColor: 'red',
      thresholdValue: 4,
      width: width,
      height: '100'
    })
  }

  var handleTristateChart = function () {
    $('.spl-tristate').sparkline('html', {
      type: 'tristate',
      barWidth: barWidth,
      barSpacing: 3,
      height: '100'
    })
  }

  var handleTristateColorChart = function () {
    $('.spl-tristate-color').sparkline('html', {
      type: 'tristate',
      colorMap: {'-2': '#fa7', '2': '#44f'},
      barWidth: barWidth,
      barSpacing: 3,
      height: '100'
    })
  }

  var handleBoxplotChart = function () {
    $('.spl-boxplot').sparkline('html', {
      type: 'box',
      target: 6,
      width: '80%',
      height: '70'
    })
  }

  var handleBoxPlotRawChart = function () {
    $('.spl-boxplotraw').sparkline('html', {
      type: 'box',
      raw: true,
      showOutliers: true,
      target: 6,
      width: '80%',
      height: '70'
    })
  }

  var handleBulletChart = function () {
    $('.spl-bullet').sparkline('html', {
      type: 'bullet',
      width: '80%',
      height: '30'
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handledrawMouseSpeedChart()
      handlePieChrt()
      handleLineChart()
      handleBarChart()
      handleCompositBarChart()
      handleCompositeInline()
      handleInlineChart()
      handleBarNegativeChart()
      handleDiscreateChart()
      handleDiscreateWithThresholdChart()
      handleTristateChart()
      handleTristateColorChart()
      handleBoxplotChart()
      handleBoxPlotRawChart()
      handleBulletChart()
    }
  }
})()

jQuery(document).ready(function () {
  SparklineCharts.init()
})
