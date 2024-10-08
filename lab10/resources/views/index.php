<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ЛР10</title>
  <style>
    .up-header{
      background: #fff;
      text-align: center;
        padding: 0px 0;
        text-align: center;
      font-size: 25px; 
      margin-top: 35px;
      height: 150px;
      display: flex;
        align-items: center;
    }
    .up-header img {
        width: 100px; 
        margin-left: 20px; 
    }
    header
    {
      text-align: center;
          margin-left: 27%;
    }
    body 
    {
      margin: 0; 
        padding: 0; 
        background-color: #f0f0f0; 
        font-family: Comic Sans MC, cursive;
    }
    h1
    {
      text-align: left;
      margin-top: 0px;
      margin-left: 30px;
      text-decoration: underline;
    }
    #project-p
    {
      text-align: left;
      font-size: 35px;
    }
    ul
    {
      list-style: none;
      text-underline: none;
    }
    .project-list a
    {
      text-decoration: none;
    }
    .project-item span
    {
      font-size: 25px;
    }
    .element
    {
      display: flex;
        align-items: center;
    }
    #left
    {
        margin-left: 20px;
        margin-right: auto;
    }
    #right {
        margin-left: auto; 
        margin-right: 20px; 
    }
    nav
    {
      text-decoration: none;
        padding: 10px;
        text-align:center;
      background-color :  rgb(220, 220, 220);
        color :rgb(20,50,20);
        border-radius: 10px;
        font-size:24px;
        width:220px;
    }
    .project-list img {
        max-width: 100%;
        height: auto;
    }
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        padding: 0px 0;
        text-align: center;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        margin: 0 5px;
    }

    .navbar a:hover {
        background-color: #555;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header__buttons {
        margin-right: 10px; 
    }

    .navbar a {
        flex: 1; 
        text-align: center; 
    }
    .app__header button {
        background-color: #ccc; 
        color: white; 
        padding: 10px 20px; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer;  
    }

    button:hover {
        background-color: #999;  
    }
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 50px;
        margin-left: 150px;
        margin-right: 150px;
    }

    .card {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
    }

    .card img {
        max-width: 100%;
    }

    .details-btn {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .details-btn:hover {
        background-color: #0056b3;
    }
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        width: 100%;
        position: fixed;
        bottom: 0;
    }
    h1
    {
      text-align: center;
    }
    .filter-menu {
        display: none;
        position: absolute;
        background-color: #ccc; 
        border: 1px solid #ccc;
        top: 100%;
        right: 0;
        min-width: 31%; 
        text-align: center; 
    }

    .filter-menu button {
        display: block;
        text-decoration: none;
        color: #333;
        padding: 25px;
    }

    .filter-menu button:hover {
        background-color: #f0f0f0;
    }
    .filter-menu-link {
        display: block; 
        margin-bottom: 10px; 
        width: 100%;
    }

  </style>
</head>
<body>
  <div class="navbar">
    <section class="app__header">
            <div class="header__buttons">
                <button class="button" id="light-mode-button">Светлая</button>
                <button class="button" id="dark-mode-button">Темная</button>
      </div>
    </section>
        <a href="#about">Обо мне</a>
        <a href="#contact">Контакты</a>
        <a href="#filter" id="filter-link">Фильтр</a>
          <div class="filter-menu" id="filter-menu">
          <button class="filter-menu-link">Творчество</button>
        <button class="filter-menu-link">Разработка</button>
        <button class="filter-menu-link">Другие</button>
        </div>
    </div>
  <div class = "up-header">
    <header>Карибов Сайт-Портфолио</header>
  </div>
  <h1>Мои проекты</h1>
  <div class="grid-container">
      <div class="card" data-category="dnd">
        <img src="#" alt="тут должна быть картинка">
        <h3>Cry of Olympus</h3>
          <p>Моя первая игра</p>
          <button class="details-btn">Больше</button>
      </div>
      <div class="card" data-category="youtube">
          <img src="channel.jpg" alt="Картинка 2">
          <h3>YouTube канал</h3>
          <p>Когда-нибудь я его сделаю</p>
          <button class="details-btn">Больше</button>
      </div>=
  </div>
  <footer>
        &copy; 2024 Карибов Дионис МКИС21 | <a href="#contact">Контакты</a>
    </footer>
  <script>
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
            document.body.style.backgroundColor = '#f6f6f6';
            document.body.style.color = 'black';
            itemBlock.style.color = '#141414';
        }

        function setDarkTheme() {
            document.body.style.backgroundColor = '#141414';
            document.body.style.color = 'white';
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

  </script>
</body>
</html>