document.addEventListener("DOMContentLoaded", function() {
    const lightModeButton = document.getElementById('light-mode-button');
    const darkModeButton = document.getElementById('dark-mode-button');
    const itemBlock = document.querySelector('.up-header');
    const filterLink = document.getElementById('filter-link');
    const filterMenu = document.getElementById('filter-menu');
    const cards = document.querySelectorAll('.card');
    const filterMenuLinks = document.querySelectorAll('.filter-menu-link');

    lightModeButton.addEventListener('click', setLightTheme);
    darkModeButton.addEventListener('click', setDarkTheme);

    function setLightTheme() {
        document.body.style.backgroundColor = '#aaa';
        document.body.style.color = 'black';
        up-header.style.color = '#fff';
        itemBlock.style.color = '#f6f6f6';
    }

    function setDarkTheme() {
        document.body.style.backgroundColor = '#141414';
        document.body.style.color = 'white';
        up-header.style.color = '#000';
        itemBlock.style.color = '#f6f6f6';
    }
    function filterCards(category) {
        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (category === 'all' || cardCategory === category) {
                card.style.display = 'block'; 
            } else {
                card.style.display = 'none'; 
            }
        });
    }
    filterMenuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const category = this.textContent.toLowerCase();
            filterCards(category);
        });
    });

    filterLink.addEventListener('click', function(event) {
        event.preventDefault();
        filterMenu.style.display = filterMenu.style.display === 'block' ? 'none' : 'block';
    });

    filterMenu.addEventListener('click', function(event) {
        event.stopPropagation();
    });

    document.addEventListener('click', function(event) {
        if (event.target !== filterLink) {
            filterMenu.style.display = 'none';
        }
    });

});
