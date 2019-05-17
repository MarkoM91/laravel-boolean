<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Laravel Header</title>
        </head>
    <body>
      <div class="header">
          <div class="header-left">
              <img src="https://www.boolean.careers/images/common/logo.png">
          </div>
          <div class="header-rigth">
              <div class="navbar">
                  <ul>
                      <li>Home</li>
                      <li>Corso</li>
                      <li>Metodo</li>
                      <li>Dopo il Corso</li>
                      <li>Faq</li>
                      <li id="orange">Iscriviti</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="content">
          <div class="sviluppatore">
            <div class="sviluppatore-container">
                <h1>Sviluppatore web in 6 mesi</h1>
                <p>Un corso a tempo pieno per diventare un professionista del web.
                   Collegati ogni giorno da casa tua alla classe virtuale per seguire le lezioni in diretta</p>
            </div>
        </div>
          <div class="master">
            <div class="master-container">
                <div class="master-left">
                    <h2>Master Full Time</h2>
                    <p>Il corso full-time è proprio come una vera scuola con orari da rispettare, 5 giorni su 7.
                      Segui da casa tua le lezioni in diretta nella nostra aula virtuale</p>
                </div>
                <div class="master-right">

                </div>
            </div>
        </div>
      </div>
      <div class="footer">
          <div class="footer-container">
              <div class="footer-up">
                <div class="footer-left">
                  <img src="https://www.boolean.careers/images/common/logo.png">
              </div>
                <div class="footer-right">
                  <div class="footer-right-left">
                      <span><a href="">ciao@boolean.careers</a>/span>
                      <span><a href="#">02-40031288</a></span>
                      <span>+39 327-9578239</span>
                  </div>
                  <div class="footer-right-center">
                      <span>Privacy Policy</span>
                      <span>Lavora con noi!</span>
                  </div>
                  <div class="footer-right-right">
                      <span><i class="fab fa-facebook-square"></i></span>
                      <span><i class="fab fa-instagram"></i></span>
                      <span><i class="fab fa-whatsapp"></i></span>
                  </div>
              </div>
            </div>
            <div class="footer-down">
                <div class="footer-down-left">
                    <p>Boolean** (my_new_job > my_old_job) // returns true</p>
                </div>
                <div class="footer-down-right">
                    <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
                </div>
            </div>
          </div>
      </div>
    </body>
</html>
