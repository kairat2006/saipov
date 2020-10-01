<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umtul</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="/assets/css/index/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://use.fontawesome.com/3720f0817e.js"></script>
</head>

<body>
    <header class="main__header">
        <div class="container">
            <div class="main__header-wrapper">
                <img class="main__logo" src="/assets/images/index/logo.png" alt="umtul">
                <nav class="navbar">
                    <ul class="navbar__list">
                        <li class="navbar__item"><a href="#"
                                class="navbar__item__link navbar__item__link--active">Главная</a>
                        </li>
                        <li class="navbar__item"><a href="subjects.html" class="navbar__item__link">Предметы</a></li>
                        <li class="navbar__item"><a href="#" class="navbar__item__link">Репетиторы</a></li>
                    </ul>
                    <div class="sign__item" id="btnSigning"><a href="{{route('admin.dashboard')}}" class="sign__item__link">Вход</a>
                        <div class="authorization" id="authorization">
                            <h3 class="authorization__title">Авторизация</h3>
                            <form class="authorization__signing" action="#">
                                <input class="authorization__signing-login" type="text" placeholder="Введите ваш email">
                                <input class="authorization__signing-login" type="password" placeholder="Пароль">
                                <button class="authorization__signing-button">Войти</button>
                                <p class="authorization__signing__forgot"><a href="#"
                                        class="authorization__signing__forgot-link">Забыли
                                        пароль?</a></p>
                                <p class="authorization__signing__title">Впервые в Umtul?</p>
                                <p class="authorization__signing__discript">Бесплатная регистрация</p>
                                <a href="registration.html" class="authorization__signing__registration">Регистрация</a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <h1 class="banner__title">UMTUL</h1>
            <hr>
            <h1 class="banner__subtitle">Получить знания индивидуально - просто, легко и эффективно</h1>
            <form class="main__search" action="#">
                <input class="main__search-item" type="text" placeholder="Поиск предмета или репетитора">
                <button class="main__search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <ul class="banner__cards">
                <li class="banner__cards__item first__card">
                    <h4 class="cards__item-title">Lorem, ipsum.</h4>
                    <p class="cards__item-discript">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Explicabo
                        hic
                        libero, esse provident reprehenderit vero maxime molestiae voluptatem.</p>
                </li>
                <li class="banner__cards__item second__card">
                    <h4 class="cards__item-title">Lorem, ipsum.</h4>
                    <p class="cards__item-discript">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Explicabo
                        hic
                        libero, esse provident reprehenderit vero maxime molestiae voluptatem.</p>
                </li>
                <li class="banner__cards__item third__card">
                    <h4 class="cards__item-title">Доступно 24/7</h4>
                    <p class="cards__item-discript">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Explicabo
                        hic
                        libero, esse provident reprehenderit vero maxime molestiae voluptatem.</p>
                </li>
            </ul>
            <!-- TUTORS -->
            <div class="tutors">
                <div class="tutors__title-wrapper">
                    <h1 class="tutors__title">Найдите лучших репетиторов онлайн</h1>
                    <p class="tutors__discript">Наше интерактивное онлайн-обучение помогает поддерживать учебу вашего
                        ребенка и является идеальным подспорьем для домашнего обучения. Все наши репетиторы тщательно
                        отбираются, проходят собеседование и проходят обучение.</p>
                </div>
                <ul class="tutors__list">
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="/assets/images/index/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>

                    </li>
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="/assets/images/index/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>

                    </li>
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="/assets/images/index/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>

                    </li>
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="/assets/images/index/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>

                    </li>
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="/assets/images/index/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>

                    </li>
                    <li class="tutors__card">
                        <a href="#" class="tutors__card-link">
                            <img src="images/christopher-campbell-rDEOVtE7vOs-unsplash 1.png" alt=""
                                class="tutors__card-img">
                            <h3 class="tutors__card-name">Майрамбекова Айдай</h3>
                            <h4 class="tutors__card__subject-name">Репетитор по географии</h4>
                        </a>
                        <div class="tutors__card__evaluation">
                            <div class="tutors__card__evaluation-wrapper">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" class="tutors__card__go-more"><svg width="25" height="13" viewBox="0 0 25 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1L23.5 6.5L16 12.5" stroke="black" />
                                    <path d="M22.5 6.5H0" stroke="black" />
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="directions">
                <div class="tutors__title-wrapper">
                    <h1 class="tutors__title">Подготовка ко всему по всем направлениям</h1>
                    <p class="tutors__discript">Изучайте начиная от дошкольных подготовительных программ до
                        профессиональных деловых навыков вместе с профессиональными репетиторами</p>
                </div>
                <ul class="directions__list">
                    <li class="directions__item"><a href="" class="directions__item-link">Подготовка к ОРТ</a></li>
                    <li class="directions__item"><a href="" class="directions__item-link">Языки</a></li>
                    <li class="directions__item"><a href="" class="directions__item-link">Музыка</a></li>
                    <li class="directions__item"><a href="" class="directions__item-link">Маркетинг и бизнес</a></li>
                    <li class="directions__item"><a href="" class="directions__item-link">Разработка и IT</a></li>
                    <li class="directions__item"><a href="" class="directions__item-link">Академическая поддержка</a>
                    </li>
                    <li class="directions__item"><a href="" class="directions__item-link">Подготовка к TOEFL</a>
                    </li>
                </ul>
                <p class="directions__button"><a href="#" class="directions__button-link">Найти репетитора</a></p>
            </div>
            <div class="easy">
                <div class="tutors__title-wrapper">
                    <h1 class="tutors__title">Как это работает?</h1>
                </div>
                <div class="easy__steps">
                    <div class="easy__step first__step">
                        <h4 class="easy__step-title">Найдите идеального учителя в Umtul</h4>
                        <p class="easy__step-discript">Среди многих наших учителей вы найдете своего идеального
                            учителя.
                            Он
                            адаптируется к вашим потребностям и поможет достичь ваших целей.
                        </p>
                    </div>
                    <div class="easy__step second__step">
                        <h4 class="easy__step-title">Совместите занятия со своей жизнью</h4>
                        <p class="easy__step-discript">Выберите онлайн-учителя в зависимости от вашего свободного
                            времени и наслаждайтесь гибкостью онлайн-уроков.
                        </p>
                    </div>
                    <div class="easy__step thirth__step">
                        <h4 class="easy__step-title">Учитесь в нашем онлайн классе</h4>
                        <p class="easy__step-discript">В нашем онлайн классе есть все необходимое для занятий:
                            видеоконференция, классная доска, онлайн-редактирование документов

                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="tutors__title-wrapper">
                    <h1 class="tutors__title">Эти студенты начинали как ты</h1>
                    <p class="tutors__discript">Тысячи студентов уже достигли своих целей благодаря Umtul</p>
                </div>
                <div class="sliders">
                    <div class="slider fade">
                        <div class="slider__item">
                            <div class="slider__item-wrapper">
                                <img src="/assets/images/index/kelly-sikkema-JN0SUcTOig0-unsplash 1.png" alt=""
                                    class="slider__item-img">
                                <h5 class="slider__item-name">Айгул Бердибекова</h5>
                            </div>
                            <blockquote class="slider__item-response">"Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Facilis, doloribus quaerat sapiente fuga enim ullam rem fugiat dolore, perspiciatis quia
                                qui! Modi cupiditate consequuntur omnis quisquam similique eum eveniet officia.Lorem
                                ipsum
                                dolor sit amet consectetur, adipisicing elit. Commodi blanditiis corporis a dignissimos
                                cum
                                facilis sit, tenetur perferendis quisquam maxime."
                            </blockquote>
                        </div>
                    </div>
                    <div class="slider fade">
                        <div class="slider__item">
                            <div class="slider__item-wrapper">
                                <img src="/assets/images/index/ava-1.jpg" alt="" class="slider__item-img">
                                <h5 class="slider__item-name">Акылбекова Айсулуу</h5>
                            </div>
                            <blockquote class="slider__item-response">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Aspernatur impedit deleniti, odit quod harum aut animi, sit debitis dolore quis
                                amet quisquam?
                            </blockquote>
                        </div>
                    </div>
                    <div class="slider fade">
                        <div class="slider__item">
                            <div class="slider__item-wrapper">
                                <img src="/assets/images/index/ava-2.jpg" alt="" class="slider__item-img">
                                <h5 class="slider__item-name">Асылбек Кочкоров</h5>
                            </div>
                            <blockquote class="slider__item-response">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Odit eaque eveniet quis laboriosam porro harum aperiam corrupti.
                                Debitis accusantium, ipsa dicta molestiae ipsam laboriosam adipisci esse ratione
                                voluptas illo quisquam.
                            </blockquote>
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="circles">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <footer>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="index.html" class="footer__item-link">Главная</a>
                </li>
                <li class="footer__item">
                    <a href="subject.html" class="footer__item-link">Предметы</a>
                </li>
                <li class="footer__item">
                    <a href="tutors.html" class="footer__item-link">Репетиторы</a>
                </li>
            </ul>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="" class="footer__item-link">Преподавать в Umtul</a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__item-link">О нас</a>
                </li>
                <li class="footer__item">
                    <a href="mailto:umtul@info.kg" class="footer__item-link"><i class="fa fa-envelope-o"
                            aria-hidden="true"></i> Написать на почту</a>
                </li>
                <li class="footer__item">
                    <a href="tel:+996555000000" class="footer__item-link"><i class="fa fa-phone" aria-hidden="true"></i>
                        +996555000000</a>
                </li>
            </ul>
            <ul class="footer__list social-list">
                <li class="footer__item">
                    <a href="" class="footer__item-link"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__item-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__item-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__item-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </li>
            </ul>
        </footer>
    </main>
    <script src="/assets/js/index/script.js"></script>
</body>

</html>