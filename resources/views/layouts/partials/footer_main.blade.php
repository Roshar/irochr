<footer class="footer">
    <div class="container">
        <div class="row row--footer">
            <div class="footer__block footer__block--contacts">
                <h3 class="footer__heading">Контакты</h3>
                <p>ГБУ ДПО "ЧИПКРО"</p>
                <p>364037, Чеченская Республика</p>
                <p><i class="fas fa-map-marker-alt"></i>г. Грозный, ул. Х. Кишиевой, 30 </p>
                <p><i class="fas fa-phone-alt"></i>тел/факс +7 (8712) 21-22-24</p>
                <p><i class="fas fa-envelope"></i>E-mail: ipkro-chr@mail.ru</p>
                <p><i class="fas fa-envelope"></i>Техподдержка: support@govzalla.ru</p>
            </div>
            <div class="footer__block footer__block--social">
                <h3 class="footer__heading">Мы в соцсетях</h3>
                <div class="social">
                    <a href="https://www.youtube.com/channel/UC4JstR8NrXG0WcdtTWjRjrg"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/gangaelmurzaeva/?hl=ru"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/chipkro.official/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://vk.com/chipkro.official/"><i class="fab fa-vk"></i></a>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.1557982884488!2d45.714425555915135!3d43.328668331348894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4051d14388e57381%3A0x44959ec660c956b!2z0YPQuy4g0JbRg9C60L7QstGB0LrQvtCz0L4sIDEw0LIsINCT0YDQvtC30L3Ri9C5LCDQp9C10YfQtdC90YHQutCw0Y8g0KDQtdGB0L8uLCAzNjQwMzE!5e0!3m2!1sru!2sru!4v1598518335565!5m2!1sru!2sru" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="footer__block footer__block--links">
                <h3 class="footer__heading">Учредитель</h3>
                <a href="http://mon95.ru/">Министерство образования и науки Чеченской Республики</a>
                <a href="#">Сведения об образовательной организации</a>
                <a href="#">Карта сайта</a>
                <a href="#">Наши партнеры</a>
            </div>
        </div>
        <div class="institution">
            <div class="footer__logo"><img src="img/logo-mono.png" alt=""></div>
            <div class="copyright">
                <p>&copy; 2020 ГБУ ДПО Чеченский институт повышения квалификации работников образования.</p>
                <p>Все права защищены. При использовании материалов сайта активная ссылка на сайт https://www.govzalla.ru обязательна.</p>
            </div>
        </div>
    </div>
</footer>


<script>

    let slider = document.querySelector('.slider_section__items');
    let slides = document.querySelectorAll('.slider_section__item');

    slider.style.width = slides.length * 100 + '%';

    let toLeftButton = document.querySelector('.slider_section__controller--left');
    let toRightButton = document.querySelector('.slider_section__controller--right');
    let position = 1;
    let direction;

    function toRight() {
        if(direction === 'left'){position++};
        if(position > slides.length-1){
            position = 0;
        }

        slider.style.transform = `translateX(-${position*100/slides.length}%)`;
        position++;
        direction = 'right';
    }

    function toLeft() {
        if(direction === 'right'){position--}
        if(position < 1){
            position = slides.length;
        }

        slider.style.transform = `translateX(-${(position-1)*(100/slides.length)}%`;
        position--;
        direction = 'left';
    }


    toRightButton.addEventListener('click', event => {toRight() })
    document.addEventListener('keyup', event => {
        if (event.keyCode === 39) {toRight()}
    });

    toLeftButton.addEventListener('click', event => {toLeft()});
    document.addEventListener('keyup', event => {
        if (event.keyCode === 37) {toLeft()}
    });

    let newsLink = document.querySelector('.mobile_nav__item--news');
    let eventLink = document.querySelector('.mobile_nav__item--events');

    let news = document.querySelectorAll('.news');
    let cards = document.querySelector('.cards_section');
    let events = document.querySelectorAll('.event');

    function hideEvents() {
        events.forEach(eventsItem => {
            eventsItem.classList.add('hidden');
        })
        news.forEach(newsItem => {
            newsItem.classList.remove('hidden');
        })
        cards.classList.remove('hidden');
        newsLink.classList.add('mobile_nav__item--active');
        eventLink.classList.remove('mobile_nav__item--active');
    }

    function hideNews() {
        events.forEach(eventsItem => {
            eventsItem.classList.remove('hidden');
        });
        news.forEach(newsItem => {
            newsItem.classList.add('hidden');
        });
        cards.classList.add('hidden');
        newsLink.classList.remove('mobile_nav__item--active');
        eventLink.classList.add('mobile_nav__item--active');
    }

    /* hideEvents(); */

    /*  window.addEventListener('resize', ()=> {
         if (window.matchMedia("(min-width: 933px)").matches) {
             events.forEach(eventsItem => {
                 if(eventsItem.classList.contains('hidden')){
                     eventsItem.classList.remove('hidden');
                 }
             });
         }
     }); */

    window.addEventListener('resize', ()=> {
        if (window.matchMedia("(max-width: 933px)").matches) { hideEvents() }
        else {
            events.forEach(eventsItem => {
                if(eventsItem.classList.contains('hidden')){
                    eventsItem.classList.remove('hidden');
                }
            });
        }
    });

    if (window.matchMedia("(max-width: 933px)").matches) { hideEvents() }


    newsLink.addEventListener('click', ()=>{ hideEvents() });
    eventLink.addEventListener('click', ()=>{ hideNews() });
</script>

<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>