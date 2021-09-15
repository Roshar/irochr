<footer class="footer">
    <div class="container">
        <div class="row row--footer">
            <div class="footer__block footer__block--contacts">
                <h3 class="footer__heading">Контакты</h3>
                <p>ГБУ ДПО "ИРО ЧР"</p>
                <p>364031, Чеченская Республика</p>
                <p><i class="fas fa-map-marker-alt"></i>г. Грозный, ул. им. Жуковского, д. 10В. </p>
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
                <a href="http://mon95.ru/" target="_blank">Министерство образования и науки Чеченской Республики</a>
                <a href="{{route('institute.index')}}">Сведения об образовательной организации</a>
                <a href="#">Карта сайта</a>
                <a href="{{route('home')}}">Наши партнеры</a>
            </div>
        </div>
        <div class="institution">
            <div class="footer__logo"><img src={{asset('assets/front/img/logo-mono.png')}} alt=""></div>
            <div class="copyright">
                <p>&copy; 2021  ГБУ ДПО Институт развития образования Чеченской Республики.</p>
                <p>Все права защищены. При использовании материалов сайта активная ссылка на сайт https://www.govzalla.ru обязательна.</p>
            </div>
        </div>
    </div>
</footer>


<script type="text/javascript" src="{{asset('assets/front/js/slider.js')}}"></script>
@if(Request::is('/'))
    <script>

        {
            let slider = document.querySelector('.slider_section__items');
            let slides = document.querySelectorAll('.slider_section__item');
            let prevButton = document.querySelector('.slider_section__controller--left');
            let nextButton = document.querySelector('.slider_section__controller--right');

            createSlider({
                slider: slider,
                slides: slides,
                prevButton: prevButton,
                nextButton: nextButton,
                slidesNumberPerPage: 1
            });
        }


        {
            let slider = document.querySelector('.testimonials');
            let testimonials = document.querySelectorAll('.testimonial');
            let prevButton = document.querySelector('.testimonials_controller--left');
            let nextButton = document.querySelector('.testimonials_controller--right');

            createSlider({
                slider: slider,
                slides: testimonials,
                prevButton: prevButton,
                nextButton: nextButton,
                slidesNumberPerPage: 3,
                margin: '4em'
            });
        }

        {
            let slider = document.querySelector('.links');
            let links = document.querySelectorAll('.links__link');
            let prevButton = document.querySelector('.links_section__controller--left');
            let nextButton = document.querySelector('.links_section__controller--right');

            createSlider({
                slider: slider,
                slides: links,
                prevButton: prevButton,
                nextButton: nextButton,
                slidesNumberPerPage: 4,
                margin: '2em',
                autoscroll: true
            });
        }

        let cshButtons = document.querySelectorAll('button.csh');
        let cards = document.querySelectorAll('.cards');
        let toAllLinks = document.querySelectorAll('.cards_section .to_all_link');

        cshButtons.forEach(item => {
            item.addEventListener('click', event => {
                if(event.target.classList.contains('csh--disable')){
                    cshButtons.forEach(item => item.classList.toggle('csh--disable'));
                    cards.forEach(item => {item.classList.toggle('cards--disable')})
                    toAllLinks.forEach(item => item.classList.toggle('to_all_link--disable'));
                }
            });
        });

    </script>
@endif


<script type="text/javascript" src="{{asset('assets/front/js/scripts.js')}}"></script>
</body>
</html>
