//
const $ctx1 = document.querySelector("#Chart1");
Chart1 = new Chart($ctx1, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      {
        label: "1",
        data: [107, 105, 100],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 0,
      },
      {
        label: "2",
        hidden: true,
        data: [100, 102, 98],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 0,
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';

        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                  .maxHeight;
            ctx.fillStyle = "white";
            //ctx.font = 'bold 12px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
            //debugger;
            var y_pos = model.y + 25;
            if ((scale_max - model.y) / scale_max >= 0.93) y_pos = model.y + 25;
            if (dataset.label == "1")
              if (dataset.data[i] > 0)
                //ctx.fillText(numberWithSpaces(dataset.data[i]), model.x, y_pos);
                ctx.fillText(
                  numberWithSpaces(Chart1.data.datasets[1].data[i]) + " %",
                  model.x,
                  y_pos
                );
            if (dataset.label == "2") {
              y_pos = scale_max - 10;
              if (dataset.data[i] > 0) {
                //ctx.fillText(numberWithSpaces(dataset.data[i])+" %", model.x, y_pos);
                ctx.fillText(
                  numberWithSpaces(Chart1.data.datasets[0].data[i]),
                  model.x,
                  y_pos
                );
              }
            }

            // ctx.fillText(dataset.data[i], model.x, y_pos);
          }
        });
        //debugger;
      },
    },
    legend: {
      display: false,
      labels: {
        fontColor: "white",
        fontSize: 20,
        padding: 1,
      },
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 24,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
    },
    annotation: {
      annotations: [
        {
          type: "line",
          mode: "horizontal",
          scaleID: "y-axis-0",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          display: false,
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 18,
          },
        },
      ],
      xAxes: [
        {
          // stacked: true,
          barPercentage: 0.55,
          ticks: {
            fontColor: "#2FA6DA",
            fontSize: 24,
          },
        },
      ],
    },
  },
});

//
const $ctx2 = document.querySelector("#Chart2");
Chart2 = new Chart($ctx2, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      {
        label: "1",
        data: [52000, 55000, 62000],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 0,
        //  "yAxisID":"left"
      },
      {
        label: "2",
        hidden: true,
        data: [100, 102, 106],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 0,
        //  "yAxisID":"right"
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                  .maxHeight;
            ctx.fillStyle = "white";
            var y_pos = model.y + 25;
            if ((scale_max - model.y) / scale_max >= 0.9) y_pos = model.y + 25;
            if (dataset.label == "1")
              if (dataset.data[i] > 0)
                //ctx.fillText(numberWithSpaces(dataset.data[i]), model.x, y_pos);
                ctx.fillText(
                  numberWithSpaces(Chart2.data.datasets[1].data[i]) + " %",
                  model.x,
                  y_pos
                );

            if (dataset.label == "2") {
              y_pos = scale_max - 10;
              //y_pos =  1;
              //debugger;
              if (dataset.data[i] > 0)
                //ctx.fillText(dataset.data[i]+" %", model.x, y_pos);
                ctx.fillText(
                  numberWithSpaces(Chart2.data.datasets[0].data[i]),
                  model.x,
                  y_pos
                );
            }

            // ctx.fillText(dataset.data[i], model.x, y_pos);
          }
        });
      },
    },
    legend: {
      display: false,
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 24,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
    },

    annotation: {
      annotations: [
        {
          type: "line",
          mode: "horizontal",
          scaleID: "left",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          //stacked: true,
          display: false,
          id: "left",
          position: "left",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
        {
          //	stacked: true,
          display: false,
          id: "right",
          position: "right",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
      ],
      xAxes: [
        {
          // stacked: true,
          barPercentage: 0.55,
          ticks: {
            fontColor: "#2FA6DA",
            fontSize: 24,
          },
        },
      ],
    },
  },
});

//
const $ctx3 = document.querySelector("#Chart3");
Chart3 = new Chart($ctx3, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      // {
      //         label: '1',
      //       hidden: true,
      //         data: [54000,58000,63000],
      //         backgroundColor: '#548235',
      //         borderColor:   '#548235',
      //         borderWidth: 1,
      //         "yAxisID":"right"
      // },
      {
        label: "-Оклад.",
        data: [54, 45, 45],
        backgroundColor: "#548235",
        borderColor: "#548235",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: "-Комп.",
        data: [10, 18, 10],
        backgroundColor: "#bf9000",
        borderColor: "#bf9000",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: "-Стим.",
        data: [28, 32, 40],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: "-Проч.",
        data: [10, 15, 5, 9],
        backgroundColor: "#952101",
        borderColor: "#952101",
        borderWidth: 1,
        yAxisID: "left",
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
              dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
            scale_max =
              dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                .maxHeight;
            // scale_max2 = dataset._meta[Object.keys(dataset._meta)[0]].data[i];
            ctx.fillStyle = "white";
            var y_pos = model.y + 20;
            // var y_pos = (model.base - model.y) - 10;
            //debugger;
            // if ((scale_max - model.y) / scale_max >= 0.93)
            //    y_pos = model.y + 20;
            //if (model.label=='2023')
            // console.log(dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model);
            //ctx.fillText(dataset.data[i]+" %", model.x, y_pos);
            //if (dataset.label=="_")
            if (dataset.data[i] > 0) {
              y_pos = model.base - (model.base - model.y) / 2 + 10;
              x_pos = model.x;
              if (y_pos <= 15) {
                y_pos = model.y + 20;
                //x_pos = model.x +65;
              }
              if (dataset.data[i] < 10) {
                // y_pos = model.y + 20;
                x_pos = model.x + 65;
              }
              if (model.label == "2023") {
                //  console.log(dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model);
                // console.log(model.datasetLabel+" y_pos "+ y_pos);
              }
              ctx.fillText(dataset.data[i] + " %", x_pos, y_pos);
            }
          }
        });
      },
    },

    legend: {
      display: false,
      labels: {
        fontColor: "white",
        fontSize: 20,
        padding: 1,
      },
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 18,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
    },
    annotation: {
      annotations: [
        {
          type: "line",
          mode: "horizontal",
          scaleID: "left",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          stacked: true,
          display: false,
          id: "left",
          position: "left",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
        {
          stacked: true,
          display: false,
          id: "right",
          position: "right",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
      ],
      xAxes: [
        {
          stacked: true,
          barPercentage: 0.55,
          ticks: {
            fontColor: "#2FA6DA",
            fontSize: 24,
          },
        },
      ],
    },
  },
});

//
const $ctx4 = document.querySelector("#Chart4");
Chart4 = new Chart($ctx4, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      // {
      //     label: ' ',
      //     hidden: true,
      //     data: [54000,58000,63000],
      //	backgroundColor: 'red',
      //     borderColor:   '#3B3838',
      //     borderWidth: 1,
      //	"yAxisID":"right",
      //  },
      {
        label: "- ПДД    ",
        //  hidden: true,
        data: [20, 30, 80],
        backgroundColor: "#bf9000",
        borderColor: "#bf9000",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: " - Бюджет   ",
        // hidden: true,
        data: [88, 87, 82],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 1,
        yAxisID: "left",
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                  .maxHeight;
            ctx.fillStyle = "white";
            var y_pos = model.y - 5;
            //debugger;
            if ((scale_max - model.y) / scale_max >= 0.7) y_pos = model.y + 25;
            //if (dataset.label=="%")
            //ctx.fillText(dataset.data[i]+" %", model.x, y_pos);
            //if (dataset.label=="_")
            // if (dataset.data[i]>0)
            ctx.fillText(dataset.data[i] + " %", model.x, y_pos);
          }
        });
      },
    },
    legend: {
      display: false,
      labels: {
        fontColor: "white",
        fontSize: 20,
        padding: 1,
      },
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 18,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
      padding: 1,
    },
    annotation: {
      annotations: [
        {
          type: "line",
          mode: "horizontal",
          scaleID: "left",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          stacked: true,
          display: false,
          id: "left",
          position: "left",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
        {
          stacked: true,
          display: false,
          id: "right",
          position: "right",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
      ],
      xAxes: [
        {
          stacked: true,
          barPercentage: 0.55,
          ticks: {
            fontColor: "#2FA6DA",
            fontSize: 24,
          },
        },
      ],
    },
  },
});
//

var chartData = {
  labels: [
    "до 20",
    "21-25",
    "26-30",
    "31-35",
    "36-40",
    "41-45",
    "46-50",
    "51-60",
    "61-70",
    "от 71",
  ],
};
const $ctx5 = document.querySelector("#Chart5");
Chart5 = new Chart($ctx5, {
  type: "line",
  data: {
    labels: [
      "до 20",
      "21-25",
      "26-30",
      "31-35",
      "36-40",
      "40-45",
      "50-60",
      "60-70",
      "от 71",
    ],
    datasets: [
      {
        data: [
          { x: 1, y: 12 },
          { x: 2, y: 3 },
          { x: 3, y: 2 },
          { x: 4, y: 1 },
          { x: 5, y: 8 },
          { x: 6, y: 12 },
          { x: 7, y: 3 },
          { x: 8, y: 2 },
          { x: 9, y: 1 },
          { x: 10, y: 8 },
        ],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 3,
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                  .maxHeight;
            ctx.fillStyle = "white";
            var y_pos = model.y + 20;

            if ((scale_max - model.y) / scale_max >= 0.93) y_pos = model.y + 20;
            //if (dataset.label=="_")
            // ctx.fillText(dataset.data[i]+" %", model.x, y_pos);
            //if (dataset.label=="2")
            ctx.fillText(dataset.data[i].y, model.x, y_pos);

            // debugger;
          }
        });
      },
    },
    legend: {
      display: false,
      labels: {
        fontColor: "white",
        fontSize: 20,
        padding: 1,
      },
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 18,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
    },
    annotation: {
      annotations: [
        {
          type: "line",
          mode: "vertical",
          scaleID: "x-axis-0",
          value: 1.8,
          borderWidth: 3,
          borderColor: "yellow",
        },
        {
          type: "line",
          mode: "horizontal",
          scaleID: "left",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          stacked: true,
          display: false,
          id: "left",
          position: "left",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
        {
          stacked: true,
          display: false,
          id: "right",
          position: "right",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
      ],
      xAxes: [
        {
          type: "linear",
          position: "bottom",
          ticks: {
            max: 5,
            min: 1,
            stepSize: 1,
            fontColor: "#2FA6DA",
            fontSize: 24,
            callback: function (value, index, values) {
              return chartData.labels[index];
              //  return this.datasets[0].labels[index];
            },
          },
        },
      ],
    },
  },
});

//debugger;
//
const $ctx6 = document.querySelector("#Chart6");
Chart6 = new Chart($ctx6, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      // {
      //     label: ' ',
      //     hidden: true,
      //     data: [54000,58000,63000],
      //	backgroundColor: 'red',
      //     borderColor:   '#3B3838',
      //     borderWidth: 1,
      //	"yAxisID":"right",
      //  },
      {
        label: "2",
        data: [20, 30, 80],
        backgroundColor: "#bf9000",
        borderColor: "#bf9000",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: "%",
        data: [88, 87, 82],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 1,
        yAxisID: "left",
      },
      {
        label: "3",
        hidden: true,
        data: [88, 87, 82],
        backgroundColor: "#fe5f35",
        borderColor: "#fe5f35",
        borderWidth: 1,
        yAxisID: "left",
      },
    ],
  },
  options: {
    hover: {
      animationDuration: 1,
    },
    animation: {
      duration: 500,
      easing: "easeOutQuart",
      onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(
          Chart.defaults.global.defaultFontFamily,
          "normal",
          Chart.defaults.global.defaultFontFamily
        );
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.font =
          'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
        this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
            var model =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max =
                dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale
                  .maxHeight;
            ctx.fillStyle = "white";
            var y_pos = model.y + 25;
            // var procent  = this.data.datasets[2];
            //debugger;
            if ((scale_max - model.y) / scale_max >= 0.93) y_pos = model.y + 25;
            if (dataset.label == "%") {
              if (dataset.data[i] > 0)
                ctx.fillText(numberWithSpaces(dataset.data[i]), model.x, y_pos);
            }
            if (dataset.label == "2") {
              // if (dataset.data[i]>0)
              y_pos = model.y - 10;
              ctx.fillText(dataset.data[i], model.x, y_pos);
            }
            if (dataset.label == "3") {
              y_pos = scale_max - 3;
              ctx.fillText(dataset.data[i] + " %", model.x + 65, y_pos);
            }
          }
        });
      },
    },
    legend: {
      display: false,
      labels: {
        fontColor: "white",
        fontSize: 20,
        padding: 1,
      },
    },
    tooltips: {
      enabled: false,
    },
    title: {
      display: false,
      text: "",
      position: "top",
      fontSize: 18,
      padding: 1,
      fontColor: "white",
      fontStyle: "normal",
      padding: 1,
    },
    annotation: {
      annotations: [
        {
          type: "line",
          mode: "horizontal",
          scaleID: "left",
          value: 0,
          borderColor: "#2FA6DA",
          borderWidth: 3,
        },
      ],
    },
    scales: {
      yAxes: [
        {
          stacked: true,
          display: false,
          id: "left",
          position: "left",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
        {
          stacked: true,
          display: false,
          id: "right",
          position: "right",
          ticks: {
            beginAtZero: true,
            fontColor: "#2FA6DA",
            fontSize: 14,
          },
        },
      ],
      xAxes: [
        {
          stacked: true,
          barPercentage: 0.55,
          ticks: {
            fontColor: "#2FA6DA",
            fontSize: 24,
          },
        },
      ],
    },
  },
});
//
