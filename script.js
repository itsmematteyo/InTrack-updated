document.addEventListener('DOMContentLoaded', function () {
    const toggleSidebar = document.querySelector('.toggle-sidebar');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    const sidebarState = localStorage.getItem('sidebarCollapsed');
    if (sidebarState === 'true') {
        sidebar.classList.add('collapsed');
        content.classList.add('expanded');
    } else if (sidebarState === 'false') {
        sidebar.classList.remove('collapsed');
        content.classList.remove('expanded');
    }

    toggleSidebar.addEventListener('click', function () {
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('expanded');
        localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
    });

    function setActiveMenuItem() {
        const path = window.location.pathname;
        const currentPage = path.split('/').pop().split('.')[0];

        const aliases = {
            'job-listing_view': 'job-listing',
            'approvals_view': 'approvals',
            'edit_user' : 'users',
            'employer-info' : 'employer',
            'admin_profile' : 'dashboard'
        };
        const pageKey = aliases[currentPage] || currentPage;

        document.querySelectorAll('[data-page]').forEach(item => {
            item.classList.remove('active');
        });

        const match = document.querySelector(`[data-page="${pageKey}"]`);
        if (match) {
            match.classList.add('active');
        }
    }

    setActiveMenuItem();

    const chartElement = document.getElementById('myChart');
    if (chartElement) {
        chartElement.style.aspectRatio = '16 / 9';
        const ctx = chartElement.getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Internship Applications',
                    data: [15, 25, 30, 40, 35, 50, 45, 60, 55, 70, 65, 80],
                    backgroundColor: 'rgba(66, 133, 244, 0.2)',
                    borderColor: '#4285F4',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#4285F4',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#4285F4'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#333'
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        backgroundColor: 'rgba(0, 0, 0, 0.7)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Applications',
                            color: '#666'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            color: '#666'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month',
                            color: '#666'
                        },
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#666'
                        }
                    }
                }
            }
        });
    }

    function handleResize() {
        if (window.innerWidth < 768) {
            sidebar.classList.add('collapsed');
            content.classList.add('expanded');
            localStorage.setItem('sidebarCollapsed', true);
        } else {
            const savedState = localStorage.getItem('sidebarCollapsed');
            if (savedState === 'true') {
                sidebar.classList.add('collapsed');
                content.classList.add('expanded');
            } else if (savedState === 'false') {
                sidebar.classList.remove('collapsed');
                content.classList.remove('expanded');
            }
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize();
});