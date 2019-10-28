/*-----AreaChart2-----*/
var ctx = document.getElementById( "AreaChart2" );
ctx.height = 50;
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            data: [0, 83, 43, 67, 35, 76, 0],
            label: 'Conversion',
            backgroundColor: 'rgba(83, 18, 127,0.1)',
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            borderColor: 'rgba(83, 18, 127)',
        }, ]
    },
    options: {

        maintainAspectRatio: false,
        legend: {
            display: false
        },
        responsive: true,
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
        scales: {
            xAxes: [ {
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            } ],
            yAxes: [ {
                display:false,
                ticks: {
                    display: false,
                }
            } ]
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
} );

/*-----AreaChart3-----*/
var ctx = document.getElementById( "AreaChart3" );
ctx.height = 50;
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            data: [0, 67, 76, 83 ,35, 43, 0],
            label: 'Conversion',
            backgroundColor: 'rgba(245, 54, 92,0.1)',
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            borderColor: 'rgba(245, 54, 92)',
        }, ]
    },
    options: {

        maintainAspectRatio: false,
        legend: {
            display: false
        },
        responsive: true,
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
        scales: {
            xAxes: [ {
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            } ],
            yAxes: [ {
                display:false,
                ticks: {
                    display: false,
                }
            } ]
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
} );

/*-----AreaChart4-----*/
var ctx = document.getElementById( "AreaChart4" );
ctx.height = 50;
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            data: [0, 46, 55, 76, 63, 23,0],
            label: 'Conversion',
            backgroundColor: 'rgba(36, 226, 113,0.1)',
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            borderColor: 'rgba(36, 226, 113)',
        }, ]
    },
    options: {

        maintainAspectRatio: false,
        legend: {
            display: false
        },
        responsive: true,
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
        scales: {
            xAxes: [ {
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            } ],
            yAxes: [ {
                display:false,
                ticks: {
                    display: false,
                }
            } ]
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
} );
/*-----AreaChart4-----*/
var ctx = document.getElementById( "AreaChart5" );
ctx.height = 50;
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            data: [0, 67, 35, 76, 83, 43, 0],
            label: 'Conversion',
            backgroundColor: 'rgba(69, 170, 242,0.1)',
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            borderColor: 'rgba(69, 170, 242)',
        }, ]
    },
    options: {

        maintainAspectRatio: false,
        legend: {
            display: false
        },
        responsive: true,
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
        scales: {
            xAxes: [ {
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            } ],
            yAxes: [ {
                display:false,
                ticks: {
                    display: false,
                }
            } ]
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
} );
