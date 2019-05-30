<div class="footer">

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">

    <li class="list-inline-item">
      <a target="_blank" href="https://www.facebook.com/profile.php?id=100003067061584" class="img-link btn-floating btn-fb mx-1">
        <img width="50" height="50" src="{{asset('images/social_icons/facebook.png')}}" alt="Facebook">
      </a>
    </li>
    <li class="list-inline-item">
      <a target="_blank" href="https://www.instagram.com/marina__shapoval/?hl=ru" class="img-link btn-floating btn-tw mx-1">
        <img width="50" height="50" src="{{asset('images/social_icons/instagram.png')}}" alt="Instagram">
      </a>
    </li>
    
    <li class="list-inline-item">
      <a class="img-link btn-floating btn-tw mx-1 pointer">
        <img data-toggle="modal" data-target="#modal-mail" width="50" height="50" src="{{asset('images/social_icons/mail.png')}}" alt="Mail">
      </a>
    </li>
    
    <li class="list-inline-item">
      <a class="img-link btn-floating btn-tw mx-1 pointer">
        <img data-toggle="modal" data-target="#modal-phone" width="50" height="50" src="{{asset('images/social_icons/phone.png')}}" alt="Phone">
      </a>
    </li>
    
  </ul>
  <!-- Social buttons -->
</div>

<!-- Mail -->
<div class="modal fade" id="modal-mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Адреса моєї поштової скриньки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p >marinashapoval5@gmail.com</p>
      </div>
    </div>
  </div>
</div>

<!-- Phone -->
<div class="modal fade" id="modal-phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Мій номер телефону</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        +38 (099) 388 29 24
      </div>
    </div>
  </div>
</div>
