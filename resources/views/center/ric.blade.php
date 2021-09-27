@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/karaev.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Главный редактор <br>Караев Руслан Зубаирович</h2>
                    <p class="center_block__text--blue">эл. адрес:<br>rus269@yandex.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <p class="with-margin">Редакционно-издательский центр является структурным подразделением Института развития образования Чеченской Республики, осуществляющим подготовку и выпуск ведомственной литературы, внутриведомственных, межведомственных служебных материалов.</p>
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul>
                        <li class="center_block__text">Осуществляет подготовку к выпуску:
                            <ul class="center__list">
                                <li class="center_block__text">сборников научных трудов;</li>
                                <li class="center_block__text">материалов конференций и симпозиумов;</li>
                                <li class="center_block__text">текстов лекций, учебных пособий (только по узким специальным дисциплинам);</li>
                                <li class="center_block__text">ведомственной литературы;</li>
                                <li class="center_block__text">внутриведомственных и межведомственных служебных материалов за исключением приказов, распоряжений, циркуляров и т.п.</li>
                            </ul> </li>
                        <li class="center_block__text">Редакционно-издательский центр оформляет издания в соответствии с нормативными документами на редакционно-издательские процессы и обеспечивает контроль за сроками выхода печатной продукции и печатного органа института.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Печатный орган института</h2>
                    <p>Печатный орган института – журнал «Вестни-Геланча», выпускается два раза в год и содержит статьи научно-теоретического, учебно-методического характера.</p>
                    <p>В журнале публикуются:</p>
                    <ul class="center__list">
                        <li class="center_block__text">новые законодательные акты;</li>
                        <li class="center_block__text">образовательные стандарты;</li>
                        <li class="center_block__text">проекты и эксперименты, проводимые в образовательной системе РФ и ЧР;</li>
                        <li class="center_block__text">статьи, посвященные авторским методикам преподавания;</li>
                        <li class="center_block__text">разработки уроков и занятий;</li>
                        <li class="center_block__text">аналитические материалы и методические рекомендации;</li>
                        <li class="center_block__text">исследования, проводимые на кафедрах Института.-</li>
                    </ul>
                    <p>Журнал можно приобрести в библиотеке административного корпуса ИРО ЧР. Статьи в журнал принимаются по электронной почте malika_islamova@inbox.ru</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Караев Руслан Зубаирович - главный редактор</li>
                </ul>
            </div>

            {{--<div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Планы и отчеты<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($plans_reports as $plan)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($plan->content)!!}" target="_blank">
                                {{$plan->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>--}}

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Документы<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    {{--@foreach($documents as $doc)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                {{$doc->title}}
                            </a>
                        </li>
                    @endforeach--}}
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1VtXqXHauEbXZNmjFjJx88nb6pT2G2_HX/view?usp=sharing">Правила составления библиографических ссылок (Гост Р 7.0.5-2008)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1s0NeWQHTSGkZwQv6Yhcgv2d8s90dGytQ/view?usp=sharing">Правила для авторов публикаций журнала "Вестник-Геланча"</a></li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Новостной раздел <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @if(count($news))
                        @foreach($news as $post)
                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    @else
                        <li> нет записей</li>
                    @endif
                </ul>
            </div>

            <div class="center_block center_block--covers covers">
                <div class="row">
                    <a href="https://drive.google.com/file/d/1zwglubr9rPGEu7NFRiQ4X6_QIs3-RAOH/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2012.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1mva6RGAAVwOd-VcSp0ooBSmSmnj4ZD_H/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2012.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1QuTQI2PtKPUaKq8gSIHJhTeTADgZ9jjM/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2013.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    <a href="https://drive.google.com/file/d/1pOQ7vWcPzVHSOwEz4-oRD_FsZULApqri/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2013.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1ZVRpX-rlcg5ArayRLdub-YS3LTGK5HBS/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2014.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1RhczMcXZh_nmGR8_1m5DniGsolRZInAD/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2014.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    <a href="https://drive.google.com/file/d/1WtqAdJMZM_D6t84O_JrxSmtJFS-uLz6I/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2015.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1PL6VrDyJTdcWK6lrBa0_oaI6z3Fkl7cI/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2015.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1hGCDcrEMYY8fHHOdKHolc-ir_8522Akl/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2016.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    <a href="https://drive.google.com/file/d/1Hu0TQ2ITiUJMELnUbrjgVT0jDJ2fToOj/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2016.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1x4D7ahj4k_WZ02Z_lBTwq3jhfz_vTnOt/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2017.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1kTi_MNPSutV-n6H0U5AiYOmC64WVu2xp/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2017.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    <a href="https://drive.google.com/file/d/1rXxIqPCKqDIYdaoBYuJ6uN9Nx3qm6mwy/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2018.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1EJxHBVDV0bQ4wE-LaWCOHRMWvJjkBGSW/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2018.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/19SuIubRft4k8geBnjX0TqG6pPrGZdEr6/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2019.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    <a href="#" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2019.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1aPY9mGA7fzqEAtjoSh4EuC_wUy1QFGQE/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_1_2020.jpg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1uH1O_NL1xghy9WsXXO5MyHAO72v7Ledw/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/v_2_2020.jpg')}}" alt=""></a>
                </div>
                <div class="row">
                    {{--<a href="https://drive.google.com/file/d/1YNy7Te27hnq24bGC5gbRUUnf4oYFZpxu/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/pka.jpg')}}" alt=""></a>--}}
                    <a href="https://drive.google.com/file/d/1QHXwasOMR2SEZJj8CrwLeiMPclVEGTG9/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/PKE_ekzamen.jpeg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1cqtbAqko0UAyPzgdSCl9xyiOH3g6cAy7/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/rtb.jpeg')}}" alt=""></a>
                    <a href="https://drive.google.com/file/d/1P0R3lReFubnuWng8hbdVJpQ0hW_-P_1s/view?usp=sharing" class="covers__link"><img src="{{asset('assets/front/img/centers/vestnik/rtb2.jpeg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">

        let headings = document.querySelectorAll('.center_block__heading');

        headings.forEach(heading => {
            heading.addEventListener('click', event => {

                let list = event.currentTarget.nextElementSibling;
                let icon = event.currentTarget.firstElementChild.firstElementChild;

                list.classList.toggle('center__list--not_active');
                if (!list.classList.contains('center__list--not_active')) {
                    list.style.height = `${ list.scrollHeight / 16 + 1.8 }em`
                } else {
                    list.style.height = `${ list.scrollHeight / 16 }em`;
                    window.getComputedStyle(list, null).getPropertyValue("height");
                    list.style.height = "0";
                }

                if(heading.classList.contains('center_block__heading--blue')){
                    heading.classList.toggle('center_block__heading--no_margin')
                }

                if (list.classList.contains('center__list--not_active')){
                    icon.classList = 'fas fa-arrow-circle-down';
                } else {
                    icon.classList = 'fas fa-arrow-circle-up';
                }
            })
        })
    </script>
@endsection





