<!DOCTYPE html>
<html >
  <head>
    <title>Ветклиника Purrfect</title>
    
    <link rel="stylesheet" href="glav1.css" />
    <link rel="icon" href="01.svg">

  </head>
  <body>
    <header class="header">
        <a href="http://localhost/kurs3/glav.php" class="logo">    
 Purrfect</a>
        
        <nav class="nav-items">
          <a href="#vetapteka">ВетАптека</a>
          <a href="#yslygi">Услуги и цены</a>
          <a href="#kartocghka">Наши специалисты</a>
          <a href="#stat">Полезные Статьи</a>
          <a href="#Contact">Контакты</a>

          <a href="tel:+7 (347) 800-23-32">+7 (347) 800-23-32</a>
        </nav>

 <style>








.btn {
  width: fit-content;
  display: flex;
  padding:15px 15px;
  gap: 0.4rem;
  border: none;
  font-weight: bold;
  border-radius: 70px;
  text-shadow: 2px 2px 3px rgb(136 0 136 / 50%);
  background: linear-gradient(316deg, #3e187a 0%, #994ecc 74%) no-repeat;
  background-size: 300%;
  background-position: left center;
  transition: background .3s ease;
  color: #fff;
  margin: 0px 0 150px ;

}

.btn:hover {
  background-size: 820%;
  background-position: right center;
}

.btn:hover svg {
  fill: #fff;
}


.btt {
  position: relative;
  justify-content: center;

  display: inline-block;
  margin: 15px;
  padding: 15px 30px;
  text-align: center;
  font-size: 18px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #3e187a;
  background: transparent;
  cursor: pointer;
  transition: ease-out 0.5s;
  border: 2px solid #643d88;
  border-radius: 50px;
  box-shadow: inset 0 0 0 0 #643d88;
}

.btt:hover {
  color: white;
  box-shadow: inset 0 -100px 0 0 #643d88;
}

.btt:active {
  transform: scale(0.9);
}



.overlay {
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 10;
  display: none;
  background-color: rgba(0, 0, 0, 0.65);
  position: fixed; 
  cursor: default; 
}
.overlay:target {
  display: block;
}
.popup {
  top: -100%;
  right: 0;
  left: 50%;
  font-size: 14px;
  z-index: 20;
  margin: 0;
  width: 85%;
  min-width: 320px;
  max-width: 600px;
  position: fixed;
  padding: 15px;
  border: 1px solid #3e187a;
  background: #fefefe;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  border-radius: 10px;
  font: 14px/18px 'Tahoma', Arial, sans-serif;
  box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
  -webkit-transform: translate(-50%, -500%);
  -ms-transform: translate(-50%, -500%);
  -o-transform: translate(-50%, -500%);
  transform: translate(-50%, -500%);
  
}
.overlay:target+.popup {
  -webkit-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  -o-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  top: 20%;
}
.close {
  top: -10px;
  right: -10px;
  width: 20px;
  height: 20px;
  position: absolute;
  padding: 0;
  border: 2px bold #ffffff;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  -ms-border-radius: 15px;
  -o-border-radius: 15px;
  border-radius: 15px;
  background-color: rgba(61, 61, 61, 0.8);
  -webkit-box-shadow: 0px 0px 10px #000;
  -moz-box-shadow: 0px 0px 10px #000;
  box-shadow: 0px 0px 10px #000;
  text-align: center;
  text-decoration: none;
  font: 13px/20px 'Tahoma', Arial, sans-serif;
  font-weight: bold;

}
.close:before {
  color: rgba(255, 255, 255, 0.9);
  content: "X";
  text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
  font-size: 12px;
}
.close:hover {
  background-color: rgba(196, 24, 208, 0.8);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);    
}
.popup img {
  width: 50%;
  height: auto;
}

.popup h2 { 
  margin: 0;
  color: rgb(90, 0, 128);
  padding: 5px 0px 10px;
  text-align: center;
  font-weight: 500;
  font-size: 2em;
  font-family: 'Tahoma', Arial, sans-serif;
  line-height: 1.3;
}
.popup p {margin: 0;
   padding: 5px 0;
   text-align: left;

}
.popup h3 { 
  margin: 0;
  color: rgb(90, 0, 128);
  padding: 5px 0px 10px;
  text-align: left;
  font-weight: 500;
  font-size: 1.4em;
  font-family: 'Tahoma', Arial, sans-serif;
  line-height: 1.3;
}
.popup h4 { 
  margin: 0;
  color: rgb(113, 113, 113);
  padding: 5px 0px 10px;
  text-align: center;
  font-weight: 500;
  font-size: 1.2em;
  font-family: 'Tahoma', Arial, sans-serif;
  line-height: 1.3;
}


.input-box{
  display: block;
  margin-bottom: 20px;
  border: 1px solid #E5E9F5;
  background-color: #F6F7FA;
  padding: 20px;
  margin-top: 10px;
  border-radius: 10px;
}

.input-box-bb{
  display: block;
  margin-bottom: 20px;
  border: 15px solid #E5E9F5;
  background-color: #F6F7FA;
  padding: 20px;
  margin-top: 10px;
  border-radius: 30px;
}

.input-box label, .input-box-bb label{
  position: absolute;
  margin-bottom: 20px 0 0 20px;

  color: #7369AB;

}



.input-box label input:focus~label,
.input-box label input:valid~label 
{ top: -5px;}



form input:not(:last-of-type) {
  display: block;
  margin-bottom: 20px;
  border: 1px solid #E5E9F5;
  background-color: #F6F7FA;
  padding: 10px;
  margin-top: 10px;
  border-radius: 5px;
  width: 100%;
}

#form-controls {
  margin-bottom: 20px;
}


label {
  color: #7369AB;
}

::placeholder {
  color: #C0C7DB;
  font-size: larger;
  letter-spacing: 1.2px;
}

#sign-up-container, #sign-in-container {
  width: 320px;
  display: inline-block;
}













 html
{
  background-color: #39254c;
 
}
main
{  background-color: #ffff;
}
 .about-mee {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px 80px;
  
  }
  
  .about-mee img {
  width: 900px;
  max-width: 100%;
  height: auto;
  border-radius: 50px;
  }
  
  .about-mee-texte h2 {
  font-size: 30px;
  color: #333333;
  text-transform: uppercase;
  margin: 0;
  }
  
  .about-mee-texte p {
  font-size: 15px;
  color: #585858;
  margin: 10px 0;
  }
  .about-me {
display: flex;
justify-content: center;
align-items: center;
padding: 40px 80px;
max-width: 100%;
background:  url("Без имени-2.png");
}



.btnn{
  width: 270px;
  height: 80px;
  border: none;
  outline: none;
  background: #39254c;
  color: #fff;
  font-size: 22px;
  border-radius: 40px;
  text-align: center;
  box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

.check-box{
  width: 80px;
  height: 80px;
  border-radius: 40px;
  box-shadow: 0 0 12px -2px rgba(0,0,0,0.5);
  position: absolute;
  top: 0;
  right: -40px;
  opacity: 0;
}

.check-box svg{
  width: 40px;
  margin: 20px;
}

svg path{
  stroke-width: 3;
  stroke: #fff;
  stroke-dasharray: 34;
  stroke-dashoffset: 34;
  stroke-linecap: round;
}

.active{
  background: #ff2b75;
  transition: 0,1s;
}

.active .check-box{
  right: 0;
  opacity: 1;
  transition: 0,1s;
}

.active p{
  margin-right: 125px;
  transition: 0,1s;
}

.active svg path{
  stroke-dashoffset: 0;
  transition: 0,1s;
  transition-delay: 0,1s;
}

.selectvalue
{
  display: block;
    margin-bottom: 20px;
    border: 1px solid #E5E9F5;
    background-color: #F6F7FA;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    width: 100%;

}
  </style>
      </header>


      <main>
        <div class="intro">
          <h1>Ветклиника «Purrfect»</h1>
          <p>Миссия нашей клиники — оказание максимально качественной помощи вашему питомцу. 
            Врачи борются за каждого пациента до последнего, даже когда, казалось, его жизнь висит на волоске. И, конечно, радуются вместе с вами победе и выздоровлению питомца.</p>
            <a href="#work"> <button class="bb" >Узнать больше</button></a>
        </div>

        <a name="work">
            <h1 align="center"  >Наши преимущества</h1>
        <div class="achievements">
            

          <div class="work">
            
                <img src="mug.png" width="200" height="200" />
           
            <p class="work-heading">Профессиональность</p>
            <p class="work-text">У нас работают только высококвалифицированные врачи</p>
          </div>
          <div class="work">
            <img src="girl.png" width="200" height="200"  />
            <p class="work-heading">Необычность</p>
            <p class="work-text">Работаем со многими экзотическими животными</p>
          </div>
          <div class="work">
            <img src="notebook.png" width="200" height="200" />
            <p class="work-heading">Забота</p>
            <p class="work-text">Индивидуальный подход к каждому домашнему животному</p>
          </div>
         
        </div>
    </a>

    <a name="kartocghka">
          <div >
          <h1 align="center" >Наши специалисты</h1>

            <div  class="kartocghka">
              <div class="card">
                <img class="cardimg" src="https://i.pinimg.com/originals/0a/84/60/0a846051c8eadd96d7770c9fe08f1cd7.jpg"  style="width:50%">
                <div class="container">
                  <h2>Куприянова Дарья Викторовна</h2>
                  <p class="title">Директор-хирург</p>
                  <p>График работы: пн-пт 10:00–20:00;  сб 10:00–18:00</p>
                  <p>purrfect@yandex.ru</p>
                  <p> <a href="#win11"><button class="btt"> Запись </button>
 <a href="#win1" class="btt">О враче</a>  </p>


 
    <a href="#x" class="overlay" id="win1"></a>
    <div class="popup">
    <h2>Куприянова Дарья Викторовна</h2>
    <h4>Директор-хирург</h4>

<img  src="https://i.pinimg.com/originals/0a/84/60/0a846051c8eadd96d7770c9fe08f1cd7.jpg" align="right" width="150" height="150"/>
    <h3> О враче: </h3>
    <p> Окончила с отличием Московскую Государственную Академию Ветеринарной Медицины и Биотехнологии им. К.И.
         Скрябина в 2004г. В ветеринарной клинике "Центр" на Цветном бульваре с 2003г. Прошла путь от практиканта до 
         заместителя главного врача клиники. Постоянный участник Московского международного ветеринарного Конгресса, 
         Национальной Ветеринарной Конференции, Санкт-Петербуржской Неврологической конференции и многих других. 
         Принимала участие в мастер-классах по МРТ в г. Санкт-Петербург. Постоянный лектор Школы интернов. Воспитывает сына и дочь. 
          </p>
     <a class="close" title="Закрыть" href="#close"></a>
      </div>

          





          <a href="#x" class="overlay" id="win11"></a>
        <div class="popup">
    
                        <div id="form-container">
       <div id="form-inner-container">
      <div id="sign-up-container">
        <h2>Запись к врачу</h2>
        <form>
          <label >ФИО</label>
          <input type="text" name="fio" placeholder="ФИО" required>

          <label>Телефон</label>
          <input type="tel" name="tel"  placeholder="Телефон" required>
          <label>Выберите врача</label>
          <br>
          <select class="selectvalue" id="selectvalue" name="ktov" align="center">
          <option>Выберите врача</option>
<option>Куприянова Дарья Викторовна (Директор-хирург)</option>

<option>Аскаров Владимир Актаирович(Хирург)</option>

<option>Ишмакова Альбина Робертовна(Ветеринарный врач)</option>

<option>Доброгорская Екатерина Анатольевна(Анестезиолог)</option>

</select>
<br>

          <label >Проблема</label>
          <input type="text" name="problem" placeholder="Проблема (кратко)">
          <input type="checkbox" name="sogl" id="terms">
          <label >Согласен на обработку данных</label>


                <a href="#zz"> <button id="btnn" class="btnn">
        <p id="btnText">Подтвердить запись</p>
        <div class="check-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
        </div>
    </button>

<script type="text/javascript">
    const btnn = document.querySelector("#btnn");
    const btnText = document.querySelector("#btnText");

    btnn.onclick = () => {
        btnText.innerHTML = "Готово";
        btnn.classList.add("active");
    };
</script>
  





                
        </form>
                </div>
                
            </div>
            
        </div>
      





      <a class="close" title="Закрыть" href="#close"></a>
        </div>

    







                </div>
              </div>
            </div>
          
            <div class="kartocghka">
              <div class="card">
                <img src="https://doxx.care/assets/img/doctormock.png" class="cardimg" style="width:43%">
                <div class="container">
                  <h2>Аскаров Владимир Актаирович</h2>
                  <p class="title">Хирург
                  </p>
                  <p>График работы: пн-пт 10:00–20:00; вс 10:00–18:00</p>
                  <p>Стаж 20 лет</p>
                  <p> <a href="#win11"><button class="btt"> Запись </button> 
    <a href="#win2" class="btt">О враче</a>  </p>

    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
    <h2>Аскаров Владимир Актаирович</h2>
    <h4>Хирург</h4>

<img  src="https://doxx.care/assets/img/doctormock.png" align="right" width="150" height="150"/>
<h3> О враче: </h3>
    <p> Специализируется в области лечения диких и домашних птиц. 
        Закончил Московский Государственный Университет Пищевых Производств на факультете Институт Ветеринарной Экспертизы, Санитарии и Экологии по специальности 
        "Ветеринарный врач" в 2017 году.
          </p>
    <a class="close" title="Закрыть" href="#close"></a>
    </div>






                </div>
              </div>
            </div>
          
            <div class="kartocghka">
              <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/002/520/965/original/female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" class="cardimg" style="width: 150px;">
                <div class="container">
                  <h2>Ишмакова Альбина Робертовна</h2>
                  <p class="title">Ветеринарный врач</p>
                  <p>График работы: пн-пт 10:00–20:00; сб,вс 10:00–18:00</p>
                  <p>Стаж 38 лет</p>
                  <p> <a href="#win11"><button class="btt"> Запись </button>

  <a href="#win3" class="btt">О враче</a>  </p>
    <a href="#x" class="overlay" id="win3"></a>
    <div class="popup">
    <h2>Ишмакова Альбина Робертовна</h2>
    <h4>Ветеринарный врач</h4>

<img  src="https://static.vecteezy.com/system/resources/previews/002/520/965/original/female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" align="right" width="150" height="150"/>
<h3> О враче: </h3>
    <p> С детства хотела стать ветеринарным врачом. В 2017 году с красным дипломом окончила Московскую Государственную 
        Академию ветеринарной медицины и биотехнологии им. К.И. Скрябина (МГАВМиБ им. К.И. Скрябина), по специальности
         «ветеринарный врач». В Ветеринарной клинике «Центр» работает с 2014 года, прошла путь от ассистента до ветеринарного врача. 
         С 2016 по 2017 год проходила стажировку на базе Ветеринарной клиники «Биоконтроль». В 2018 году окончила интернатуру на базе клиники «Центр». 
         Прошла обучение в Швейцарской школе ветеринарной анестезиологии VASTA. Член анестезиологического ветеринарного общества АНО ВИТАР. 
         Постоянный слушатель и лектор различных ветеринарных конференций.
          </p>
    <a class="close" title="Закрыть" href="#close"></a>
    </div>



                </div>
              </div>
            </div>

            
            <div class="kartocghka">
                <div class="card">
                  <img src="https://static.vecteezy.com/system/resources/previews/002/449/829/original/vaccination-and-injection-female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" class="cardimg" style="width:50%">
                  <div class="container">
                    <h2>Доброгорская Екатерина Анатольевна</h2>
                    <p class="title">Анестезиолог</p>
                    <p>График работы: пн-пт 10:00–20:00; сб,вс 10:00–18:00</p>
                    <p>Стаж 5 лет</p>
                    <p> <a href="#win11">
                      
                    
                    
                    
                    
                    <button class="btt"> Запись </button>

  <a href="#win4" class="btt">О враче</a>  </p>
    <a href="#x" class="overlay" id="win4"></a>
    <div class="popup">
    <h2>Доброгорская Екатерина Анатольевна</h2>
    <h4>Анестезиолог</h4>

<img  src="https://static.vecteezy.com/system/resources/previews/002/449/829/original/vaccination-and-injection-female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" align="right" width="150" height="150"/>
<h3> О враче: </h3>
    <p> Ветеринарный врач-анестезиолог. В 2012 году закончила ФГБОУ ВПО Чувашскую ГСХА, по специальности «Ветеринарный врач». 
        С 2015 года работала в должности ассистента, а с 2017 года стала врачом анестезиологом-реаниматологом. В 2017 году окончила 
        интернатуру на базе клиники «Центр». Прошла обучение в Швейцарской школе ветеринарной анестезиологии VASTA. Постоянный слушатель 
        «Всероссийской конференции по анестезиологии, реанимации и интенсивной терапии», конференций по анестезиологии «ОРИОН», а также 
        конгрессов MVC и NVC. В свободное время увлекаюсь спортом, чтением.
          </p>
    <a class="close" title="Закрыть" href="#close"></a>
    </div>

  

                  </div>
                </div>
              </div>
          </div>
  </a>

    
 
        <div class="about-mee"><a name="yslygi">
        <img align="left" src="1121.png" >

          <div class="about-mee-text">
 
            <h1 name="yslygi">Услуги и цены</h1>
            <br>
            <p >Качественно, быстро, выгодно! Всегда доступные цены.
            Мы ежедневно помогаем многим домашним питомцам, потому что для нас домашние животные - это не просто работа!


            </p>
            <br>
            <br>
            
            <a href="http://localhost/kurs3/yslu.php">
                <button class="btn">Перейти на сайт</button></a>
              
            <br>
          </div>
        </div>
    </a>  


    <a name="vetapteka">
        <div class="about-me">
          <div class="about-me-text">

            <h2 name="vetapteka">ВетАптека</h2>
            <br>
            <p >Каждый день мы работаем для того, чтобы ваши питомцы были здоровы и счастливы!
              Наши специалисты могут помочь в любом ветеринарном вопросе. Мы ежедневно помогаем многим домашним питомцам, потому что для нас домашние животные - это не просто работа!
            </p>
            <br>
            <br>
            
            <a href="#">
                <button class="btn">Перейти на сайт</button></a>
              
            <br>
          </div>
          <img src="112.png" >
        </div>
    </a>  
    
        




  <a name="stat">
        <div class="about-mee">
        <img align="left" src="https://i10.fotocdn.net/s115/485fc3c7e7131356/public_pin_l/2609132791.jpg" >

          <div class="about-mee-texte">

            <h2>Полезные статьи и интересные видео!</h2>
            <br>
            <p >Каждый день мы работаем для того, чтобы ваши питомцы были здоровы и счастливы!
            Здесь собраны самые интересные факты и статьи, которые расширят ваш кругозор и даже заставят удивиться.
            </p>
            <br>
            <br>
            <a href="http://localhost/kurs3/stat.php">
                <button class="btn">Перейти на сайт</button></a>
              
            <br>
          </div>
        </div>
    </a>  
    </main>

 
   


      <footer class="footer">
        <div class="copy">&copy; 2023 Purrfect</div>
        <div class="bottom-links">
          <div class="links">
            <span >Навигация
            </span>
            <a  href="#">Наверх</a>
            <a href="#vetapteka">ВетАптека</a>
            <a href="#">Услуги и цены</a>
            <a href="#kartocghka">Наши специалисты</a>
            <a href="#">Поддержка</a>
          </div>
          <div class="links">
            <span >Социальные сети </span>
            <span align="center">
            <a name="Contact" href="https://vk.com/vetklinika_aibolit"><i>VK</i></a>
            <a href="https://www.youtube.com/watch?v=-452p_9ESbM&ab_channel=FANVIDOS-%D0%9C%D0%B8%D0%BB%D1%8B%D0%B5%D0%BA%D0%BE%D1%82%D0%B8%D0%BA%D0%B8"><i>YOUTUBE</i></a>
            <a href="tel:+7 (347) 263-72-60"><i>WHATSAPP</i></a><br>
            <a  href="http://localhost/kurs3/pv.php"><i>Скачать БД врачей</i></a>
            <a  href="http://localhost/kurs3/pys.php"><i>Скачать БД услуг</i></a>


          </span>
            
          </div>
        </div>
      </footer>


 




  </body>
  
</html>


<?php
   $date = date('m/d/Y h:i:s a', time());
   $sdb_name = "localhost"; $user_name="root"; $user_pass = "";
$db_name = "purrfect"; // Соединение с сервером
$connect=mysql_connect($sdb_name,$user_name,$user_pass);
if (!$connect) 
{ 
   // echo "Not connect MySQL-server"."<br>";

} 





$fio=$_REQUEST['fio'];
$tel=$_REQUEST['tel'];
$ktov=$_REQUEST['ktov'];

$problem=$_REQUEST['problem'];

$datadan=date('Y-m-d H:i:s');
$time=time();



if (!$fio  || !$tel|| !$ktov|| !$problem  || !$datadan ) {
    echo "<p style=font-size:25 align=center >";

 //echo "<font style=font-size:25 align=center color=#ffffff> Вы внесли не все данные для ввода.</font><br>" ."<font style=font-size:25 align=center color=#ffffff> Пожалуйста, вернитесь и попробуйте снова.</font>";
 exit;
 }
 $id = addslashes($id);

 $fio = addslashes($fio);
 $tel = addslashes($tel);
 $ktov = addslashes($ktov);

 $problem = addslashes($problem);
 
 $datadan = addslashes($datadan);


 @$db = mysql_pconnect("localhost", "root", "");
 if (!$db) {
 //echo "<font style=font-size:25 align=center color=#ffffff> Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже.</font>";
 exit;
 }

 mysql_select_db("purrfect");
 $query = "insert into doctors values ('".$id."','".$fio."', '".$tel."','".$ktov."', '".$problem."', '".$datadan."')"; 
 //echo "<p style=font-size:25 align=center color=#ffffff>";
 $result = mysql_query($query);
 if ($result)
 
//echo mysql_affected_rows()."<font style=font-size:25 align=center color=#000000> Вы записаны.</font>"; 
 //echo "<p style=font-size:25 align=center color=#000000>";
 

?>

