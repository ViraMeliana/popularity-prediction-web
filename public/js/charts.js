/* global Chart */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (v4.1.0): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

// random Numbers
const random = () => Math.round(Math.random() * 100)

// eslint-disable-next-line no-unused-vars
const barChart = new Chart(document.getElementById('canvas-2'), {
  type: 'bar',
  data: {
    labels: ['Library MLP', 'Random Forest', 'Manual MLP'],
    datasets: [
      {
        label: 'Accuracy',
        backgroundColor: 'rgba(51, 107, 255, 0.5)',
        borderColor: 'rgba(51, 107, 255, 0.8)',
        highlightFill: 'rgba(51, 107, 255, 0.75)',
        highlightStroke: 'rgba(51, 107, 255, 1)',
        data: [76, 70, 75, 0],
      },
    ],
  },
  options: {
    responsive: true,
  },
})
