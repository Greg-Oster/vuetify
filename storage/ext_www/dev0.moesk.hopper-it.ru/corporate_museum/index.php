<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Корпоративный музей");
?>

<style>

#workarea-content {
    background-color: transparent;
}

.workarea-content-paddings  {
    padding:0;
}

.corporate_museum {
    background-color:#fff;
    border-radius:5px;
    padding:30px 40px;
}

.corporate_museum__section
{
    margin-bottom:45px;
}

.corporate_museum__section h2{
    margin-bottom:30px;
}

.corporate_museum__section h2 a {
    color:inherit;
}

.corporate_museum__section p
{
    font-size:1.3rem;
    line-height:1.3;
}

.corporate_museum__news-list {
    display:flex;
    justify-content: space-between;
    margin-left:-10px;
    margin-right:-10px;
}

/* Новостная секция */
.news-card {
    flex:1 1 25%;
    background-color:#f2f3f5;
    margin:0 10px;
    padding:15px;
    border-radius:15px;
}
.news-card p{
    font-size:1.2rem;
}

.news-card__img {
    height:155px;
    border-radius:15px;
    margin-bottom:8px;
    overflow:hidden;
    position:relative;
}

.news-card__img img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    min-width: 50%;
    min-height: 50%;
}

.news-card__date {
    margin-bottom:20px;
}

.news-card__description a{
    color:#4b4b4b;
    font-size:1.2rem;
    line-height:1.3;
    transition:color 0.3s;
}

.news-card__description a:hover {
    color:#000;
}

/* Слайдер общие стили */
.slick-list {
    max-width:960px;
    margin: 0 auto;
}

.m-gallery-slide {
    height:180px;
    border-radius:10px;
    background-position:center;
    background-size:cover;
}

.corporate_museum__video-slider .m-gallery-slide {
    height:280px;
    border-radius:0px;
}

.slick-slide {
    margin: 0 15px;
}

/* Слайдер - видео */
.corporate_museum__visitor-info-text {
    margin-bottom:25px;
}

.corporate_museum__video-link {
    display: block;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.corporate_museum__video-preview {
    position: absolute;
    height:100%;
    left: 50%; 
    top: 50%;
    transform: translate(-50%, -50%); 
}

.playpause {
    background-image:url(play_arrow.svg);
    background-repeat:no-repeat;
    background-color:rgba(0,0,0,0.2);
    border-radius:50%;
    width:50px;
    height:50px; 
    position:absolute;
    left:0%;
    right:0%;
    top:0%;
    bottom:0%;
    margin:auto;
    background-size:80%;
    background-position: center;
}

/* Слайдер - фотогалерея */
.m-gallery-slide__photo-link {
    display:block;
    position:relative;
    height:100%;
    overflow:hidden;
    border-radius:10px;
}

.m-gallery-slide__photo-link:focus {
    outline:none;
}

.m-gallery-slide__img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    min-width: 50%;
    min-height: 50%;
}

</style>

    <div class="corporate_museum">

    <div class="corporate_museum__section corporate_museum__hero">
        <img src="img1.png" alt="корпоративный музей" class="corporate_museum__img">
    </div>

    <div class="corporate_museum__section corporate_museum__info">
        <h2>Информация о музее</h2>
        <div class="corporate_museum__info-text">
            <p>Музей «Развитие электрических сетей Московского региона» создан для отображения истории развития электросетевого комплекса в Московском регионе и представляет из себя зал с интерактивными зонами, где посетители могут почувствовать себя частью истории.</p>
        </div>
    </div>

    <!-- Новости музея -->
    <div class="corporate_museum__section corporate_museum__news">
        <h2><a href="/museum_news">Новости музея</a></h2>
        <div class="corporate_museum__news-list">
            <div class="corporate_museum__news-card news-card">
                <div class="news-card__img">
                    <img src="g01.jpg" alt="">
                </div>
                <div class="news-card__date">
                    <span>28 января 2021</span>
                </div>
                <div class="news-card__description">
                    <a href="/museum_news/1234">«Академия Пушкинского» и Mastercard. Цикл дискуссий в рамках курса «Импрессионизм. Ракурсы»</a>
                </div>
            </div>

            <div class="corporate_museum__news-card news-card">
                <div class="news-card__img">
                    <img src="g02.jpg" alt="">
                </div>
                <div class="news-card__date">
                    <span>28 января 2021</span>
                </div>
                <div class="news-card__description">
                    <a href="/museum_news/1234">Новые циклы в онлайн-лектории</a>
                </div>
            </div>

            <div class="corporate_museum__news-card news-card">
                <div class="news-card__img">
                    <img src="g03.jpg" alt="">
                </div>
                <div class="news-card__date">
                    <span>22 января 2021</span>
                </div>
                <div class="news-card__description">
                    <a href="/museum_news/1234">Ушла из  жизни Елена Борисовна Мурина</a>
                </div>
            </div>

            <div class="corporate_museum__news-card news-card">
                <div class="news-card__img">
                    <img src="g04.jpg" alt="">
                </div>
                <div class="news-card__date">
                    <span>21 января 2021</span>
                </div>
                <div class="news-card__description">
                    <a href="/museum_news/1234">Ушел из жизни Александр Наумович Володчинский</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Фотогалерея -->
    <div class="corporate_museum__section corporate_museum__gallery">
        <h2>Фотогалерея</h2>
        <div class="corporate_museum__gallery-slider slick-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
            <div class="m-gallery-slide">
                <a href="g01.jpg" class="m-gallery-slide__photo-link" data-fancybox="someid2232" tabindex="0">
                    <img src="g01.jpg" class="m-gallery-slide__img">
                </a>
            </div>
            <div class="m-gallery-slide">
                <a href="g02.jpg" class="m-gallery-slide__photo-link" data-fancybox="someid2233" tabindex="0">
                    <img src="g02.jpg" class="m-gallery-slide__img">
                </a>
            </div>
            <div class="m-gallery-slide">
                <a href="g03.jpg" class="m-gallery-slide__photo-link" data-fancybox="someid2234" tabindex="0">
                    <img src="g03.jpg" class="m-gallery-slide__img">
                </a>
            </div>
            <div class="m-gallery-slide">
                <a href="g04.jpg" class="m-gallery-slide__photo-link" data-fancybox="someid2235" tabindex="0">
                    <img src="g04.jpg" class="m-gallery-slide__img">
                </a>
            </div>
        </div>
    </div>

    <!-- Видеоархив -->
    <div class="corporate_museum__section corporate_museum__video">
        <h2>Видеоархив</h2>
        <div class="corporate_museum__video-slider slick-slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>

            <div class="m-gallery-slide">
                <a href="#11112" data-fancybox="someid1111" tabindex="0" class="corporate_museum__video-link"> 
                    <video width="1358" height="766" controls="" id="11112" style="display: none;"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video> 
                    <video class="corporate_museum__video-preview" id="11112"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video>
                    <div class="playpause"></div>
                </a>
            </div>
            <div class="m-gallery-slide">
                <a href="#1111" data-fancybox="someid1111" tabindex="0" class="corporate_museum__video-link"> 
                    <video width="1358" height="766" controls="" id="1111" style="display: none;"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video> 
                    <video class="corporate_museum__video-preview" id="1111"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video>
                    <div class="playpause"></div>
                </a>
            </div>
            <div class="m-gallery-slide">
                <a href="#11113" data-fancybox="someid1111" tabindex="0" class="corporate_museum__video-link"> 
                    <video width="1358" height="766" controls="" id="11113" style="display: none;"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video> 
                    <video class="corporate_museum__video-preview" id="11113"> 
                        <source src="/upload/test/videoplayback (3).mp4" type="video/mp4"> 
                    </video>
                    <div class="playpause"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="corporate_museum__section corporate_museum__visitor-info">
        <h2>Информация для посетителей</h2>
        <div class="corporate_museum__visitor-info-text">
            <p>Если Вы хотите посетить музей<br>
            Предоставить экспонаты<br>
            Добавить факты по истории электросетей</p>
        </div>
        <div class="corporate_museum__adress">
            <p><strong>Адрес: </strong>Москва, ул. Вавилова, д. 7б<br>
            <strong>Электронный адрес: </strong><a class="mailto" href="mailto:museum@rossetimr.ru">museum@rossetimr.ru</a><br>
            (музей работает по предварительной записи)<br>
            Ждем Вас, коллег и Ваши семьи в нашем музее!
            </p>
        </div>
    </div>
    </div>

    <script>
        $(".corporate_museum__gallery-slider")[0].slick()
    </script>

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
