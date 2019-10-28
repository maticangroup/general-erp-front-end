(function ($) {
    "use strict";

    //Team chart
    var ctx = document.getElementById("team-chart");
    if (ctx != null) {
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                type: 'line',
                defaultFontFamily: 'Montserrat',
                datasets: [{
                    data: [0, 7, 3, 5, 2, 10, 7],
                    label: "Expense",
                    backgroundColor: 'rgba(83,18,127,.6)',
                    borderColor: 'rgba(83,18,127,0.6)',
                    borderWidth: 3.5,
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'rgba(83,18,127,0.9)',
                },]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#7886a0',
                    bodyFontColor: '#7886a0',
                    backgroundColor: '#fff',
                    titleFontFamily: 'Montserrat',
                    bodyFontFamily: 'Montserrat',
                    cornerRadius: 3,
                    intersect: false,
                },
                legend: {
                    display: false,
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        fontFamily: 'Montserrat',
                    },


                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: false,
                            labelString: 'Year'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Number'
                        }
                    }]
                },
                title: {
                    display: false,
                }
            }
        });

    }
    //Sales chart
    var ctx = document.getElementById("sales-chart");
    if (ctx != null) {
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                type: 'line',
                defaultFontFamily: 'Montserrat',
                datasets: [{
                    label: "Deals",
                    data: [0, 30, 10, 120, 50, 63, 10],
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(242,87,76,0.75)',
                    borderWidth: 3,
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'rgba(242,87,76,0.75)',
                }, {
                    label: "Contracts",
                    data: [0, 50, 40, 80, 40, 79, 120],
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(83,18,127,0.75)',
                    borderWidth: 3,
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'rgba(83,18,127,0.75)',
                },
                    {
                        label: "Projects",
                        data: [0, 20, 15, 45, 11, 80, 20],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(158,230,84,0.75)',
                        borderWidth: 3,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(158,230,84,0.75)',
                    }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#7886a0',
                    bodyFontColor: '#7886a0',
                    backgroundColor: '#fff',
                    titleFontFamily: 'Montserrat',
                    bodyFontFamily: 'Montserrat',
                    cornerRadius: 3,
                    intersect: false,
                },
                legend: {
                    display: false,
                    labels: {
                        usePointStyle: true,
                        fontFamily: 'Montserrat',
                    },
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Year'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Number'
                        }
                    }]
                },
                title: {
                    display: false,
                    text: 'Normal Legend'
                }
            }
        });
    }

    //line chart
    var ctx = document.getElementById("lineChart");
    if (ctx != null) {
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        borderColor: "rgba(242,87,76,.9)",
                        borderWidth: "1",
                        backgroundColor: "rgba(242,87,76,.7)",
                        data: [22, 44, 67, 43, 76, 45, 12]
                    },
                    {
                        label: "My Second dataset",
                        borderColor: "rgba(83,18,127, 0.9)",
                        borderWidth: "1",
                        backgroundColor: "rgba(83,18,127, 0.7)",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [16, 32, 18, 26, 42, 33, 44]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }

            }
        });

    }
    //bar chart
    var ctx = document.getElementById("barChart");

    if (ctx != null) {
        //    ctx.height = 200;
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Asked from customers",
                        data: [65, 59, 80, 81, 56, 55, 40],
                        borderColor: "rgba(83,18,127, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(83,18,127, 0.7)"
                    },
                    {
                        label: "Asked in projects",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        borderColor: "rgba(242,87,76,0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(242,87,76,0.7)"
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
    //radar chart
    var ctx = document.getElementById("radarChart");
    if (ctx != null) {
        ctx.height = 160;
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                datasets: [
                    {
                        label: "My First dataset",
                        data: [65, 59, 66, 45, 56, 55, 40],
                        borderColor: "rgba(83,18,127, 0.6)",
                        borderWidth: "1",
                        backgroundColor: "rgba(83,18,127, 0.4)"
                    },
                    {
                        label: "My Second dataset",
                        data: [28, 12, 40, 19, 63, 27, 87],
                        borderColor: "rgba(242,87,76, 0.7",
                        borderWidth: "1",
                        backgroundColor: "rgba(242,87,76, 0.8)"
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'top'
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    //pie chart
    var ctx = document.getElementById("pieChart");
    if (ctx != null) {
        ctx.height = 300;
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [45, 25, 20, 10],
                    backgroundColor: [
                        "#4cf257",
                        "#5C6C7C",
                        "#f2574c",
                        "#f2aa4c"
                    ],
                    hoverBackgroundColor: [
                        "#4cf257",
                        "#5C6C7C",
                        "#f2574c",
                        "#f2aa4c"
                    ]

                }],
                labels: [
                    "Server 1",
                    "Server 2",
                    "Server 3",
                    "Server 4",
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    }
    //doughut chart
    var ctx = document.getElementById("doughutChart");
    if (ctx != null) {
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [45, 25, 20, 10],
                    backgroundColor: [
                        "#4cf257",
                        "#5C6C7C",
                        "#f2574c",
                        "#f2aa4c"
                    ],
                    hoverBackgroundColor: [
                        "#4cf257",
                        "#5C6C7C",
                        "#f2574c",
                        "#f2aa4c"
                    ]

                }],
                labels: [
                    "Server 1",
                    "Server 2",
                    "Server 3",
                    "Server 4",
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    }
    //polar chart
    var ctx = document.getElementById("polarChart");
    if (ctx != null) {
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                datasets: [{
                    data: [15, 18, 9, 6, 19],
                    backgroundColor: [
                        "#4cf257",
                        "#5C6C7C",
                        "#f2574c",
                        "#f2aa4c",
                        "#67e095"
                    ]

                }],
                labels: [
                    "Data1",
                    "Data2",
                    "Data3",
                    "Data4",
                    "Data5"
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    }
    // single bar chart
    var ctx = document.getElementById("singelBarChart");
    if (ctx != null) {
        ctx.height = 100;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Apr", "Mar", "Dec", "Oct", "Sep"],
                datasets: [
                    {
                        label: "Customers entry in months",
                        data: [40, 55, 75, 81, 56, 55, 40],
                        borderColor: "rgba(83,18,127, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(83,18,127, 0.8)"
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
})(jQuery);