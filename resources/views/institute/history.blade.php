@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="info">
            <div class="info__block">
                <div style="padding-bottom: 20px">
                    <h2 class="info__heading" style="text-align: center">История становления института повышения квалификации работников образования в Чеченской Республике</h2>
                    <img src="{{asset('assets/front/img/history/grozny.jpeg')}}" style="display: block;margin-left: auto;margin-right: auto;width: 50%;" alt="">
                    <div style="font-size: .8em; text-align: center;margin-left: auto;margin-right:auto;"> <strong>Здание Чечено-Ингушского института усовершенствования учителей г. Грозный, пр. Революции</strong></div>
                </div>

                <p>
                    В начале 1920-х годов, после перехода к мирному строительству, новые власти в Чечне столкнулись с проблемой нехватки квалифицированных кадров. Особую тревогу вызывал дефицит учителей.
                    Специалисты из коренного народа исчислялись десятками. До революции окончили учительские семинарии Т.Э.Эльдарханов, Х.Яндаров, М.Джанхотов, М.Цокиев, Б.Хакишев, Ш. Газуев, X. Бейбулатов и др. Стало очевидно, что такое незначительное их количество не могло удовлетворить все возрастающие потребности народного образования Чечни в работниках педагогического труда. В связи с этим к преподаванию в школах привлекались лица, не имевшие педагогического образования. В школах Чечни, созданных в 1920-1921 г.г., работали в основном бывшие учителя медресе и просто лица, владевшие арабским языком (до 1925 г. в Чечне использовалась письменность на арабской графической основе), многие из которых не имели элементарной педагогической и методической подготовки. Была дана установка в национальных районах идти на уступки в использовании всех специалистов, за исключением контрреволюционной оппозиции. Это было связано с тем, что «роль местной интеллигенции в республиках и областях во многих отношениях иная, чем роль интеллигенции в центральных районах страны. Окраины настолько бедны местными интеллигентными работниками, что каждый из них должен быть привлекаем на сторону советской власти всеми силами».
                    Итак, проблема обеспечения школ педагогическими кадрами встала особенно остро. В связи с развитием школьной сети их требовалось большое количество, особенно коренной национальности. Новые власти принимают экстренные меры. Началась массовая подготовка учителей, которая в рассматриваемый период была организована в следующих формах: 1) направление абитуриентов по специальной брони в вузы и техникумы в различные регионы страны; 2) обучение в профессиональных учебных заведениях (по мере их создания) в самой Чечне; 3) организация курсов по подготовке и переподготовке.
                </p>
                    <p>
                        Первые такие курсы в Чечне были открыты еще в конце 1920 года. Здесь, в течение 1,5 — 2 месяцев шло обучение на родном языке, методике преподавания, знакомство с азбукой чеченского языка на основе арабской графики. В дальнейшем сеть краткосрочных курсов по подготовке и переподготовке учителей получила широкий размах. Увеличивается продолжительность их обучения. В 1925 году курсы в Горячеводске продолжались в течение 5 месяцев.
                    </p>
                    <p>
                        Некоторая напряженность в обеспечении школ учителями была снята с созданием в 1925 году Грозненского педагогического техникума. Однако, выпуск его был незначительным и курсы по прежнему оставались основной формой подготовки и переподготовки учителей, число которых росло с каждым годом по мере роста школ и учащихся. Только за период с 1929 по 1932 г.г. было подготовлено 1153 учителя чеченской национальности.
                    </p>
                    <p>
                        Однако этого было недостаточно. Возникла необходимость в создании единого центра, который осуществлял бы организацию повышения квалификации, совершенствование знаний педагогических работников Чечни.
                        В связи с отсутствием необходимых условий в те годы не удалось открыть институт, 23 июня 1925 года Чеченский облисполком принял постановление об открытии в Грозном отделения Северо-Кавказского краевого института повышения квалификации учителей. Так, в тяжелейшие 1920-е годы, несмотря на трудности восстановительного периода в Чечне, была начала подготовка, переподготовка педагогических кадров, а также организовано повышение их квалификации.
                    </p>
                    <p>
                        7 февраля 1938 г. на базе небольших педагогических курсов был открыт двухгодичный учительский институт в составе двух факультетов: физико-математического и филологического. В сентябре того же года открывается педагогический институт, в стенах которого на трех факультетах началась подготовка учителей с высшим педагогическим образованием - физиков, математиков, историков, учителей русского языка и литературы, чеченского языка и литературы и ингушского языка и литературы.
                    </p>
                    <p>
                        Новые задачи были поставлены и перед Грозненским педагогическим училищем по обеспечению кадровых потребностей республики в педагогических кадрах среднего звена и совершенствования уровня их подготовки. Вместе с тем педагогические учебные заведения республики не покрывали дефицит учителей. По-прежнему огромное количество учителей оставались объективно, вне возможности сесть за студенческую скамью и получить высшее или среднее педагогическое образование в очной или заочной форме обучения. Поэтому в 1930-х гг. для многих педагогических работников Чечни единственно приемлемой формой совершенствования педагогического мастерства оставалось повышение квалификации. Однако, формы и методы этой работы в тот период оказались недостаточно эффективными. Сложившаяся здесь ситуация потребовала существенного пересмотра существующей системы повышения квалификации, а также содержания программ подготовки и технологии их реализации. Необходимо было в целом обновить не только содержание, но и организацию повышения квалификации педагогических кадров.
                    </p>
                    <p>
                        Итак, назрела объективная необходимость перехода к более высокой форме организации повышения квалификации и переподготовки педагогических кадров. В этих целях Грозненское отделение СКИПРО в 1938 году было реорганизовано в Чечено-Ингушский институт усовершенствования учителей (ЧИИУУ). Основной целью института явилась организация повышения квалификации педагогических кадров и руководителей образовательных учреждений, а также проведение методической работы.
                        С первых дней организации системы повышения квалификации сначала в Грозненском филиале СКИПРО, а затем и в ЧИИУУ началась целенаправленная работа, направленная на повышение профессионального уровня учителей и оказание им методической помощи.
                    </p>
                    <p>
                        Формы и методика организации этой работы были различными. В начале деятельности Грозненского филиала СКИПРО преобладающей формой явились курсы - конференции как для учителей-предметников, так и для руководителей школ. При этом, контингент обучающихся разбивался на несколько категорий в зависимости от уровня их образовательной подготовки. Так, в 1927-1928 учебном году курсы-конференции проходили по программе, рассчитанной на 40 рабочих дней или 420 часов, которая предполагала, в частности, предоставить учителю, не имеющему педагогического опыта работы в школе, возможность овладения достаточным минимумом общеобразовательных и специальных знаний, а также некоторыми навыками по частным методикам. В дальнейшем организационные формы повышения квалификации совершенствовались в зависимости от изменений, происходивших в целом в сфере образования республики. Опираясь на опыт и продолжая лучшие традиции Грозненского филиала СКИПРО, в ЧИИУУ была развернута большая работа по оптимизации форм и методов организации повышения квалификации и переподготовки педагогических кадров для республики. Первые успехи не заставили ждать и 1938 году курсы повышения квалификации ЧИИУУ окончили 400 учителей, а в следующем, 1939 году-уже 772 человека. Одновременно с организацией повышения квалификации работников образования ЧИИУУ проводил работу по изучению, обобщению наиболее результативного педагогического опыта. На основе его анализа институт разрабатывал механизм его внедрения в массовую педагогическую практику, в учебно-воспитательный процесс школы.
                    </p>
                    <p>
                        Осуществлялась методическая помощь школе, учителю, а также руководство методическими кабинетами. С этой целью сотрудники института регулярно выезжали в самые отдаленные школы Чечни для обследования учебно-воспитательного процесса и оказания им на месте методической помощи. В результате этой работы институт подготовил ряд практических рекомендаций, информационно- методических материалов, учебно-методических разработок для руководителей и учителей школ.
                    </p>
                    <p>
                        В институте шла интенсивная работа по составлению учебных планов и программ, учебников и учебных пособий, на чеченском и ингушском языках. ЧИИУУ проводил различные конференции, семинары и совещания по актуальным для того времени проблемам образования. Сотрудники института привлекались к разработке и выполнению перспективных и текущих планов развития образования в республике. Кроме того, ЧИИУУ поддерживал плодотворные связи с аналогичными институтами различных регионов страны. Таким образом, еще в довоенный период в Чечне были заложены прочные основы для формирования системы подготовки, переподготовки и повышения квалификации управленческих и педагогических кадров. С открытием Грозненского филиала СКИПРО, а затем и Чечено-Ингушского института усовершенствования учителей открылись широкие перспективы для совершенствования педагогического мастерства и профессионального роста учительских кадров. В основе многогранной деятельности института приоритетными направлениями являлись - оказание образовательным учреждениям республики методической помощи на высоком научном уровне, а также создания для них программной литературы национально-регионального компонента и различных учебно-методических разработок.
                    </p>
                    <p class="bold">Основные этапы становления Института:</p>
                    <ul>
                        <li>первые курсы повышения квалификации работников образования прошли в 1925 году в станице Горячеводской, которые продолжались в течение 5 месяцев.</li>
                        <li>1925 году был создан Грозненский педагогический техникум.</li>
                        <li>23 июня 1925 года Чеченским облисполкомом было принято постановление об открытии в Грозном отделения Северо-Кавказского краевого института повышения квалификации учителей.</li>
                        <li>сентябрь 1938 года - открывается педагогический институт, на трех факультетах которого началась подготовка учителей с высшим педагогическим образованием: физиков, математиков, историков, учителей русского языка и литературы, чеченского языка и литературы, ингушского языка и литературы.
                        </li>
                        <li>в 1938 году Грозненское отделение СККИПКУ было реорганизовано в Чечено-Ингушский Институт Усовершенствования Учителей (ЧИИУУ).</li>
                        <li>2000 год - год окончания активных военных действий. В г. Грозном создается Государственное Учреждение «Чеченский Институт Повышения Квалификации Работников Образования» (ЧИПКРО).</li>
                        <li>в декабре 2009 года ГУ «ЧИПКРО» преобразовано в государственное учреждение дополнительного профессионального образования «Чеченский институт повышения квалификации работников образования».</li>
                    </ul>
                    <p>
                        Распоряжением Правительства Чеченской Республики от 26 мая 2015 года №129-р «О переименовании образовательных организаций, подведомственных Министерству образования и науки Чеченской Республики» государственное бюджетное образовательное учреждение дополнительного профессионального образования «Чеченский институт повышения квалификации работников образования» переименовано в государственное бюджетное учреждение дополнительного профессионального образования «Чеченский институт повышения квалификации работников образования»
                    </p>
                    <p >
                        <a href="https://drive.google.com/file/d/1MZVbjyC0lV1XzWITtKJ-nCDg_7aGRiCi/view?usp=sharing">
                            Скачать статью "ЧИПКРО - форпост модернизации образования в Чеченской Республике", опубликована в журнале "Резонанс" за 2014 год. Автор: Эльмурзаева Г.Б. – ректор ЧИПКРО, кандидат исторических наук, доцент, заслуженный учитель ЧР.
                        </a>
                    </p>
                </div>
            </div>
            <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
        </main>
@endsection

