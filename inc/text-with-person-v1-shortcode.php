<?php 
function text_with_person_1_shortcode()
{
?>


<section class="text-with-person-custom-1">
  <div class="text-with-person-custom-1__container">
  <!-- <h2 class="h2-styled">IHR QUALITÄTS-IMMOBILIENMAKLER NEBENAN</h2>
  <h3 class="h3-styled">IMMOBILIENBEWERTUNG | EXPERTE WOHNEN IM ALTER | GUTACHTEN | PROFESSIONELLER IMMOBILIENVERKAUF</h3> -->
    <div class="text-with-person-custom-1__image-container">
      <img src="http://localhost/worldliner-custom/wp-content/uploads/2019/11/depositphotos_181120810-stock-photo-businesswoman-looking-at-camera_PLATZHALTER.png" alt="">
    </div>
    <div class="text-with-person-custom-1__content">
      <p>
        Lieber Leser und Leserinnen,
        <br />
        <br />
        auch als Nicht Mitglied können Sie hier den digitalen Unternehmenscheckup durchführen!
      </p>
      <p style="font-size: 18px;">Carolin Hegenbarth</p>
      <div class="text-with-person-custom-1__icons">
        <a href="#" class="text-with-person-custom-1__icons-item">
          <div class="text-with-person-custom-1__icon-container">
            <img src="http://localhost/worldliner-custom/wp-content/uploads/2019/11/ic_group_add_24px.png">
          </div>
          <div class="text-with-person-custom-1__text-container">
            Erfahren Sie, wie der Digitalkompass funktioniert
          </div>
        </a>
        <a href="#" class="text-with-person-custom-1__icons-item">
          <div class="text-with-person-custom-1__icon-container">
            <img src="http://localhost/worldliner-custom/wp-content/uploads/2019/11/Artboard-11.png">
          </div>
          <div class="text-with-person-custom-1__text-container">
            Erfahren Sie, wie der Digitalkompass funktioniert
          </div>
        </a>
        <a href="#" class="text-with-person-custom-1__icons-item">
          <div class="text-with-person-custom-1__icon-container">
            <img src="http://localhost/worldliner-custom/wp-content/uploads/2019/11/Artboard-11.png">
          </div>
          <div class="text-with-person-custom-1__text-container">
            Erfahren Sie, wie der Digitalkompass funktioniert
          </div>
        </a>
        <a href="#" class="text-with-person-custom-1__icons-item">
          <div class="text-with-person-custom-1__icon-container">
            <img src="http://localhost/worldliner-custom/wp-content/uploads/2019/11/Artboard-11.png">
          </div>
          <div class="text-with-person-custom-1__text-container">
            Erfahren Sie, wie der Digitalkompass funktioniert
          </div>
        </a>


      </div>
    </div>

  </div>
</section>

<style>
.text-with-person-custom-1 {
  position: relative;
  margin-bottom: 100px;
  background-color: #f2f2f2;
}
.text-with-person-custom-1 h2 {
  text-align: center;
}
.text-with-person-custom-1__container {
  position: relative;
  padding-top: 50px;
  padding-bottom: 50px;
  padding: 50px 15px 50px 15px;
  max-width: 1200px;
  margin: 0 auto;
}
@media (max-width: 1024px) {
  .text-with-person-custom-1__container {
    display: flex;
  }
}
@media (max-width: 700px) {
  .text-with-person-custom-1__container {
    display: block;
    padding-top: 20px;
  }
}
.text-with-person-custom-1__content {
  max-width: 650px;
  font-weight: 600;
}
.text-with-person-custom-1__content p {
  font-weight: 600;
  color: #051749;
}
@media (max-width: 1024px) {
  .text-with-person-custom-1__content {
    max-width: 60%;
  }
}
@media (max-width: 700px) {
  .text-with-person-custom-1__content {
    max-width: 100%;
    margin-top: 50px;
  }
}
.text-with-person-custom-1__image-container {
  position: absolute;
  bottom: 0;
  right: 150px;
}
.text-with-person-custom-1__image-container img {
  display: block;
  width: 360px;
}
@media (max-width: 1200px) {
  .text-with-person-custom-1__image-container {
    right: 20px;
  }
}
@media (max-width: 1024px) {
  .text-with-person-custom-1__image-container {
    width: 40%;
  }
}
@media (max-width: 700px) {
  .text-with-person-custom-1__image-container {
    position: static;
    width: 100%;
    border-bottom: 1px solid #051749;
  }
  .text-with-person-custom-1__image-container img {
    display: block;
    margin: 0 auto;
  }
}
.text-with-person-custom-1__icons {
  display: flex;
  flex-wrap: wrap;
  padding-top: 40px;
  border-top: 1px solid #051749;
  margin-top: 30px;
}
.text-with-person-custom-1__icons-item {
  width: 50%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  margin-bottom: 30px;
  text-decoration: none;
  padding-right: 10px;
}
.text-with-person-custom-1__icons-item:hover {
  text-decoration: none;
}
@media (max-width: 800px) {
  .text-with-person-custom-1__icons-item {
    width: 100%;
  }
}
.text-with-person-custom-1__icon-container {
  background: #051749;
  width: 60px;
  height: 60px;
  padding: 10px;
  flex-shrink: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.text-with-person-custom-1__icon-container img {
  max-width: 100%;
}
.text-with-person-custom-1__text-container {
  padding-left: 15px;
  color: #051749;
}
</style>

<?php

}
add_shortcode('text-with-person-custom-1', 'text_with_person_1_shortcode');