(function ($) {
  "use strict";


  var chartcolumnchart = new ApexCharts(
    document.querySelector("#chart-widget4"),
    optionscolumnchart
  );
  chartcolumnchart.render();

  // earning chart
  var options = {
    series: [70],
    chart: {
      height: 350,
      type: "radialBar",
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 15,
          size: "70%",
          image: "../assets/images/email-template/success.png",
          imageWidth: 64,
          imageHeight: 64,
          imageClipped: false,
        },
        dataLabels: {
          name: {
            show: false,
            color: "#fff",
          },
          value: {
            show: true,
            color: "#333",
            offsetY: 70,
            fontSize: "22px",
          },
        },
      },
    },
    fill: {
      type: "image",
      image: {
        src: ["../assets/images/user-card/5.jpg"],
      },
    },
    stroke: {
      lineCap: "round",
    },
    labels: ["Volatility"],
  };

  var chart = new ApexCharts(document.querySelector("#chart-widget5"), options);
  chart.render();

  // product chart
  var optionsproductchart = {
    chart: {
      height: 320,
      type: "area",
      toolbar: {
        show: false,
      },
    },
    stroke: {
      curve: "smooth",
      width: 0,
    },
    series: [
      {
        name: "TEAM A",
        data: [50, 120, 90, 100, 70, 95, 40, 55, 30, 0],
      },
      {
        name: "TEAM B",
        data: [35, 60, 40, 90, 70, 110, 90, 120, 60, 0],
      },
    ],
    fill: {
      colors: [CubaAdminConfig.primary, CubaAdminConfig.secondary],
      type: "gradient",
      gradient: {
        shade: "light",
        type: "vertical",
        shadeIntensity: 0.4,
        inverseColors: false,
        opacityFrom: 0.9,
        opacityTo: 0.8,
        stops: [0, 100],
      },
    },
    dataLabels: {
      enabled: false,
    },
    grid: {
      borderColor: "rgba(196,196,196, 0.3)",
      padding: {
        top: 0,
        right: -120,
        bottom: 10,
      },
    },
    colors: [CubaAdminConfig.primary, CubaAdminConfig.secondary],
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
    ],
    markers: {
      size: 0,
    },
    xaxis: {
      axisTicks: {
        show: false,
      },
      axisBorder: {
        color: "rgba(196,196,196, 0.3)",
      },
    },
    yaxis: [
      {
        title: {
          text: "Dollars in thounand",
        },
      },
    ],
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function (y) {
          if (typeof y !== "undefined") {
            return y.toFixed(0) + " points";
          }
          return y;
        },
      },
    },
  };

  var chartproductchart = new ApexCharts(
    document.querySelector("#chart-widget6"),
    optionsproductchart
  );
  chartproductchart.render();

  // Turnover chart
  var optionsturnoverchart = {
    chart: {
      toolbar: {
        show: false,
      },
      height: 300,
      type: "area",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 3,
      curve: "smooth",
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
      ],
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    grid: {
      borderColor: "rgba(196,196,196, 0.3)",
      padding: {
        top: -20,
        right: -55,
        bottom: 0,
      },
    },
    fill: {
      opacity: 0.2,
    },
    colors: [CubaAdminConfig.primary],
    series: [
      {
        data: [70, 60, 82, 80, 60, 90, 70, 120, 50, 60, 0],
      },
    ],
    tooltip: {
      x: {
        format: "dd/MM/yy HH:mm",
      },
    },
  };


})(jQuery);
