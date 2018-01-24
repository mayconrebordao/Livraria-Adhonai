<footer id="foot" class="mdl-mega-footer"  >
  <div class="mdl-mega-footer__middle-section" >
    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class=" mdl-mega-footer__heading"><img src="imgs/ic_credit_card_24px.svg" alt=""></h1>
      <ul class="mdl-mega-footer__link-list">
        <?php 
          $iterator = new DirectoryIterator("imgs/pag/");

          foreach ($iterator as $content) {
            if($content->isFile()){
              $aux = explode('-', $content);
              echo '<li><img src="imgs/pag/'.$content.'" alt="">  '.$aux[0].'</li>';
            }
          }

         ?>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading"><img src="imgs/GitHub-Mark-64px.png" alt="" style="width: 24px; height: 24px;"></h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a target="_blank" href="https://github.com/mayconrebordao">Maycon Rebordão</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading"><img src="imgs/facebook-box.svg" ></h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a target="_blank" href="https://www.facebook.com/maycon.rebordao">Maycon Rebordão</a></li>
      </ul>
    </div>
    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading"><img src="../imgs/ic_contact_mail_24px.svg" ></h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a target="_blank" href="">r.maycon1122@gmail.com</a></li>
      </ul>
    </div>    

  </div>

</footer>



