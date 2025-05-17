    const ctx = document.getElementById('BarChart').getContext('2d');
    new Chart(ctx, {
    type: 'bar', // You can change to 'pie' or 'doughnut'
    data: {
        labels: ['1st Year', '2nd Year', '3rd Year', '4th Year'],
        datasets: [{
            label: 'Number of Students',
            data: [year1, year2, year3, year4],
            backgroundColor: [
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});

    const ctxLine = document.getElementById('LineChart').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['1st Year', '2nd Year', '3rd Year', '4th Year'],
            datasets: [{
                label: 'Number of Students',
                data: [year1, year2, year3, year4],
                fill: true,
                borderColor: '#D12BGF',
                backgroundColor: 'rgba(36, 202, 97, 0.2)',
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'top' } }
        }
    });

    const ctxPie = document.getElementById('PieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['1st Year', '2nd Year', '3rd Year', '4th Year'],
            datasets: [{
                label: 'Number of Students',
                data: [year1, year2, year3, year4],
                backgroundColor: ['#D12B1F', '#007D37', '#F6C300', '#00000F'],
                borderColor: '#ffffff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'top' } }
        }
    });
