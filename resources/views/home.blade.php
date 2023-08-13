@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Стоимось</h1>
  <p class="lead"> Быстро и качественно разрабатываю сайты</p>
  <body>
    




<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-dark ">Так себе сайт</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title text-dark">$50</h1>
        <ul class="list-unstyled mt-3 mb-4 text-dark" >
          <li>Одностраничник</li>
          <li>Распростаненный дизайн</li>
          <li>Должен работать</li>
          <li>Хвастаться им не получится</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-dark">Хороший сайт</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title text-dark">$500 </h1>
        <ul class="list-unstyled mt-3 mb-4 text-dark">
          <li>2-3 Странички</li>
          <li>Картинки с интерета</li>
          <li>Без цыганщины</li>
          <li>Работать будет, но завидовать никто не будет</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-dark">Великолепный сайт</h4>
      </div>
      <div class="card-body">
       <h1 class="card-title pricing-card-title text-dark">$2000 </h1>
        <ul class="list-unstyled mt-3 mb-4 text-dark">
          <li>Динамический</li>
          <li>С авторскими картинками</li>
          <li>В разработке учавствует искуственный интеллект</li>
          <li>Илон Маск будет завидовать</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button> -->
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <!-- <img class="mb-2" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24"> -->
        <small class="d-block mb-3 text-muted">© 2023</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  

</body>
  
</div>
@endsection