    document.addEventListener('DOMContentLoaded', function () {
        const burger = document.querySelector('.header__burger');
        const sidebar = document.querySelector('.sidebar');

        if (burger && sidebar) {
            burger.addEventListener('change', function () {
                if (burger.checked) {
                    sidebar.classList.add('sidebar_open');
                } else {
                    sidebar.classList.remove('sidebar_open');
                }
            });
        }
    });