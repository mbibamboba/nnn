<!DOCTYPE html>
<html >
  <head>
    <title>���������� Purrfect</title>
    
    <link rel="stylesheet" href="glav1.css" />
    <link rel="icon" href="01.svg">

  </head>
  <body>
    <header class="header">
        <a href="http://localhost/kurs3/glav.php" class="logo">    
 Purrfect</a>
        
        <nav class="nav-items">
          <a href="#vetapteka">���������</a>
          <a href="#yslygi">������ � ����</a>
          <a href="#kartocghka">���� �����������</a>
          <a href="#stat">�������� ������</a>
          <a href="#Contact">��������</a>

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
background:  url("��� �����-2.png");
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
          <h1>���������� �Purrfect�</h1>
          <p>������ ����� ������� � �������� ����������� ������������ ������ ������ �������. 
            ����� ������� �� ������� �������� �� ����������, ���� �����, ��������, ��� ����� ����� �� �������. �, �������, �������� ������ � ���� ������ � ������������� �������.</p>
            <a href="#work"> <button class="bb" >������ ������</button></a>
        </div>

        <a name="work">
            <h1 align="center"  >���� ������������</h1>
        <div class="achievements">
            

          <div class="work">
            
                <img src="mug.png" width="200" height="200" />
           
            <p class="work-heading">������������������</p>
            <p class="work-text">� ��� �������� ������ ����������������������� �����</p>
          </div>
          <div class="work">
            <img src="girl.png" width="200" height="200"  />
            <p class="work-heading">�����������</p>
            <p class="work-text">�������� �� ������� ������������� ���������</p>
          </div>
          <div class="work">
            <img src="notebook.png" width="200" height="200" />
            <p class="work-heading">������</p>
            <p class="work-text">�������������� ������ � ������� ��������� ���������</p>
          </div>
         
        </div>
    </a>

    <a name="kartocghka">
          <div >
          <h1 align="center" >���� �����������</h1>

            <div  class="kartocghka">
              <div class="card">
                <img class="cardimg" src="https://i.pinimg.com/originals/0a/84/60/0a846051c8eadd96d7770c9fe08f1cd7.jpg"  style="width:50%">
                <div class="container">
                  <h2>���������� ����� ����������</h2>
                  <p class="title">��������-������</p>
                  <p>������ ������: ��-�� 10:00�20:00;  �� 10:00�18:00</p>
                  <p>purrfect@yandex.ru</p>
                  <p> <a href="#win11"><button class="btt"> ������ </button>
 <a href="#win1" class="btt">� �����</a>  </p>


 
    <a href="#x" class="overlay" id="win1"></a>
    <div class="popup">
    <h2>���������� ����� ����������</h2>
    <h4>��������-������</h4>

<img  src="https://i.pinimg.com/originals/0a/84/60/0a846051c8eadd96d7770c9fe08f1cd7.jpg" align="right" width="150" height="150"/>
    <h3> � �����: </h3>
    <p> �������� � �������� ���������� ��������������� �������� ������������ �������� � ������������� ��. �.�.
         �������� � 2004�. � ������������ ������� "�����" �� ������� �������� � 2003�. ������ ���� �� ����������� �� 
         ����������� �������� ����� �������. ���������� �������� ����������� �������������� ������������� ���������, 
         ������������ ������������ �����������, �����-������������� ��������������� ����������� � ������ ������. 
         ��������� ������� � ������-������� �� ��� � �. �����-���������. ���������� ������ ����� ��������. ����������� ���� � ����. 
          </p>
     <a class="close" title="�������" href="#close"></a>
      </div>

          





          <a href="#x" class="overlay" id="win11"></a>
        <div class="popup">
    
                        <div id="form-container">
       <div id="form-inner-container">
      <div id="sign-up-container">
        <h2>������ � �����</h2>
        <form>
          <label >���</label>
          <input type="text" name="fio" placeholder="���" required>

          <label>�������</label>
          <input type="tel" name="tel"  placeholder="�������" required>
          <label>�������� �����</label>
          <br>
          <select class="selectvalue" id="selectvalue" name="ktov" align="center">
          <option>�������� �����</option>
<option>���������� ����� ���������� (��������-������)</option>

<option>������� �������� ����������(������)</option>

<option>�������� ������� ����������(������������ ����)</option>

<option>������������ ��������� �����������(������������)</option>

</select>
<br>

          <label >��������</label>
          <input type="text" name="problem" placeholder="�������� (������)">
          <input type="checkbox" name="sogl" id="terms">
          <label >�������� �� ��������� ������</label>


                <a href="#zz"> <button id="btnn" class="btnn">
        <p id="btnText">����������� ������</p>
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
        btnText.innerHTML = "������";
        btnn.classList.add("active");
    };
</script>
  





                
        </form>
                </div>
                
            </div>
            
        </div>
      





      <a class="close" title="�������" href="#close"></a>
        </div>

    







                </div>
              </div>
            </div>
          
            <div class="kartocghka">
              <div class="card">
                <img src="https://doxx.care/assets/img/doctormock.png" class="cardimg" style="width:43%">
                <div class="container">
                  <h2>������� �������� ����������</h2>
                  <p class="title">������
                  </p>
                  <p>������ ������: ��-�� 10:00�20:00; �� 10:00�18:00</p>
                  <p>���� 20 ���</p>
                  <p> <a href="#win11"><button class="btt"> ������ </button> 
    <a href="#win2" class="btt">� �����</a>  </p>

    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
    <h2>������� �������� ����������</h2>
    <h4>������</h4>

<img  src="https://doxx.care/assets/img/doctormock.png" align="right" width="150" height="150"/>
<h3> � �����: </h3>
    <p> ���������������� � ������� ������� ����� � �������� ����. 
        �������� ���������� ��������������� ����������� ������� ����������� �� ���������� �������� ������������ ����������, ��������� � �������� �� ������������� 
        "������������ ����" � 2017 ����.
          </p>
    <a class="close" title="�������" href="#close"></a>
    </div>






                </div>
              </div>
            </div>
          
            <div class="kartocghka">
              <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/002/520/965/original/female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" class="cardimg" style="width: 150px;">
                <div class="container">
                  <h2>�������� ������� ����������</h2>
                  <p class="title">������������ ����</p>
                  <p>������ ������: ��-�� 10:00�20:00; ��,�� 10:00�18:00</p>
                  <p>���� 38 ���</p>
                  <p> <a href="#win11"><button class="btt"> ������ </button>

  <a href="#win3" class="btt">� �����</a>  </p>
    <a href="#x" class="overlay" id="win3"></a>
    <div class="popup">
    <h2>�������� ������� ����������</h2>
    <h4>������������ ����</h4>

<img  src="https://static.vecteezy.com/system/resources/previews/002/520/965/original/female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" align="right" width="150" height="150"/>
<h3> � �����: </h3>
    <p> � ������� ������ ����� ������������ ������. � 2017 ���� � ������� �������� �������� ���������� ��������������� 
        �������� ������������ �������� � ������������� ��. �.�. �������� (������� ��. �.�. ��������), �� �������������
         ������������� �����. � ������������ ������� ������ �������� � 2014 ����, ������ ���� �� ���������� �� ������������� �����. 
         � 2016 �� 2017 ��� ��������� ���������� �� ���� ������������ ������� �������������. � 2018 ���� �������� ����������� �� ���� ������� ������. 
         ������ �������� � ����������� ����� ������������ �������������� VASTA. ���� �������������������� ������������� �������� ��� �����. 
         ���������� ��������� � ������ ��������� ������������ �����������.
          </p>
    <a class="close" title="�������" href="#close"></a>
    </div>



                </div>
              </div>
            </div>

            
            <div class="kartocghka">
                <div class="card">
                  <img src="https://static.vecteezy.com/system/resources/previews/002/449/829/original/vaccination-and-injection-female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" class="cardimg" style="width:50%">
                  <div class="container">
                    <h2>������������ ��������� �����������</h2>
                    <p class="title">������������</p>
                    <p>������ ������: ��-�� 10:00�20:00; ��,�� 10:00�18:00</p>
                    <p>���� 5 ���</p>
                    <p> <a href="#win11">
                      
                    
                    
                    
                    
                    <button class="btt"> ������ </button>

  <a href="#win4" class="btt">� �����</a>  </p>
    <a href="#x" class="overlay" id="win4"></a>
    <div class="popup">
    <h2>������������ ��������� �����������</h2>
    <h4>������������</h4>

<img  src="https://static.vecteezy.com/system/resources/previews/002/449/829/original/vaccination-and-injection-female-nurse-in-a-medical-mask-and-gloves-with-vaccine-vector.jpg" align="right" width="150" height="150"/>
<h3> � �����: </h3>
    <p> ������������ ����-������������. � 2012 ���� ��������� ����� ��� ��������� ����, �� ������������� ������������� �����. 
        � 2015 ���� �������� � ��������� ����������, � � 2017 ���� ����� ������ ��������������-��������������. � 2017 ���� �������� 
        ����������� �� ���� ������� ������. ������ �������� � ����������� ����� ������������ �������������� VASTA. ���������� ��������� 
        �������������� ����������� �� ��������������, ���������� � ����������� �������, ����������� �� �������������� �����ͻ, � ����� 
        ���������� MVC � NVC. � ��������� ����� ��������� �������, �������.
          </p>
    <a class="close" title="�������" href="#close"></a>
    </div>

  

                  </div>
                </div>
              </div>
          </div>
  </a>

    
 
        <div class="about-mee"><a name="yslygi">
        <img align="left" src="1121.png" >

          <div class="about-mee-text">
 
            <h1 name="yslygi">������ � ����</h1>
            <br>
            <p >�����������, ������, �������! ������ ��������� ����.
            �� ��������� �������� ������ �������� ��������, ������ ��� ��� ��� �������� �������� - ��� �� ������ ������!


            </p>
            <br>
            <br>
            
            <a href="http://localhost/kurs3/yslu.php">
                <button class="btn">������� �� ����</button></a>
              
            <br>
          </div>
        </div>
    </a>  


    <a name="vetapteka">
        <div class="about-me">
          <div class="about-me-text">

            <h2 name="vetapteka">���������</h2>
            <br>
            <p >������ ���� �� �������� ��� ����, ����� ���� ������� ���� ������� � ���������!
              ���� ����������� ����� ������ � ����� ������������ �������. �� ��������� �������� ������ �������� ��������, ������ ��� ��� ��� �������� �������� - ��� �� ������ ������!
            </p>
            <br>
            <br>
            
            <a href="#">
                <button class="btn">������� �� ����</button></a>
              
            <br>
          </div>
          <img src="112.png" >
        </div>
    </a>  
    
        




  <a name="stat">
        <div class="about-mee">
        <img align="left" src="https://i10.fotocdn.net/s115/485fc3c7e7131356/public_pin_l/2609132791.jpg" >

          <div class="about-mee-texte">

            <h2>�������� ������ � ���������� �����!</h2>
            <br>
            <p >������ ���� �� �������� ��� ����, ����� ���� ������� ���� ������� � ���������!
            ����� ������� ����� ���������� ����� � ������, ������� �������� ��� �������� � ���� �������� ���������.
            </p>
            <br>
            <br>
            <a href="http://localhost/kurs3/stat.php">
                <button class="btn">������� �� ����</button></a>
              
            <br>
          </div>
        </div>
    </a>  
    </main>

 
   


      <footer class="footer">
        <div class="copy">&copy; 2023 Purrfect</div>
        <div class="bottom-links">
          <div class="links">
            <span >���������
            </span>
            <a  href="#">������</a>
            <a href="#vetapteka">���������</a>
            <a href="#">������ � ����</a>
            <a href="#kartocghka">���� �����������</a>
            <a href="#">���������</a>
          </div>
          <div class="links">
            <span >���������� ���� </span>
            <span align="center">
            <a name="Contact" href="https://vk.com/vetklinika_aibolit"><i>VK</i></a>
            <a href="https://www.youtube.com/watch?v=-452p_9ESbM&ab_channel=FANVIDOS-%D0%9C%D0%B8%D0%BB%D1%8B%D0%B5%D0%BA%D0%BE%D1%82%D0%B8%D0%BA%D0%B8"><i>YOUTUBE</i></a>
            <a href="tel:+7 (347) 263-72-60"><i>WHATSAPP</i></a><br>
            <a  href="http://localhost/kurs3/pv.php"><i>������� �� ������</i></a>
            <a  href="http://localhost/kurs3/pys.php"><i>������� �� �����</i></a>


          </span>
            
          </div>
        </div>
      </footer>


 




  </body>
  
</html>


<?php
   $date = date('m/d/Y h:i:s a', time());
   $sdb_name = "localhost"; $user_name="root"; $user_pass = "";
$db_name = "purrfect"; // ���������� � ��������
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

 //echo "<font style=font-size:25 align=center color=#ffffff> �� ������ �� ��� ������ ��� �����.</font><br>" ."<font style=font-size:25 align=center color=#ffffff> ����������, ��������� � ���������� �����.</font>";
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
 //echo "<font style=font-size:25 align=center color=#ffffff> ������: �� ���� ���������� � ����� ������. ����������, ���������� ��� ��� �����.</font>";
 exit;
 }

 mysql_select_db("purrfect");
 $query = "insert into doctors values ('".$id."','".$fio."', '".$tel."','".$ktov."', '".$problem."', '".$datadan."')"; 
 //echo "<p style=font-size:25 align=center color=#ffffff>";
 $result = mysql_query($query);
 if ($result)
 
//echo mysql_affected_rows()."<font style=font-size:25 align=center color=#000000> �� ��������.</font>"; 
 //echo "<p style=font-size:25 align=center color=#000000>";
 

?>

