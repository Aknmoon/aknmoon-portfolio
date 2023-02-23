<?php

session_start();
// session_start();が無いとmenu.phpが機能しない



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

      <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css -->
  <link rel="stylesheet" href="../assets/main-styles.css">
  <link rel="stylesheet" href="../assets/footer.css">



  
    <link rel="stylesheet" href="../assets/about-us.css">
    
</head>

  <body>
    <header>
      <?php include "menu.php"; ?>
    </header>

    
    <main>
      

      <section id="iloom-about">
        <div class="img">
          <img src="../images/banner3.png" alt="">
        </div>

        <div class="text">
          <h2 class="section-title">
            <span class="en">ABOUT US</span>
            <span class="ja">iloom</span>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sunt ducimus dolores in soluta illum ratione, non maiores, est et fuga consequatur sapiente quos expedita earum asperiores tenetur ut repudiandae.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates harum aliquam ex et a dolores quidem suscipit commodi ratione at dolorum alias, facilis rem blanditiis ipsa asperiores repellat natus. Voluptatibus!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid distinctio magni architecto blanditiis officia, neque doloribus amet. Non asperiores officia voluptatum minus nemo autem fuga beatae sapiente. Ab, neque nesciunt.
          </p>
        </div>
      </section>

      <section id="iloom-stores" class="wrapper">
        <h2 class="section-title">
          <span class="en">ILOOM STORES</span>
          <span class="ja">location</span>
        </h2>

        <div class="flex">
          <div class="left">
            <div class="item-a mb-5">
              <p class="title">London</p>
              <img src="../images/banner14.png" alt="">
            </div>
            <div class="item-a mb-5">
              <p class="title">France</p>
              <img src="../images/banner16.png" alt="">
            </div>
          </div>

          <div class="right">
            <div class="item-a mb-5">
              <p class="title">New York</p>
              <img src="../images/banner15.png" alt="">
            </div>
            <div class="item-a mb-5">
              <p class="title">Tokyo</p>
              <img src="../images/banner18.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="company" class="wrapper">
        <div class="text">
          <h2 class="section-title">
            <span class="en">COMPANY</span>
            <span class="ja">Company information</span>
          </h2>

          <!-- <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div>

          <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div>

          <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div>

          <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div>

          <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div>

          <div class="row info mb-2">
              <div class="col-3">Company Name</div>
              <div class="col-9">iloom</div>
          </div> -->



          <dl class="info">
            <dt>Company Name</dt>
            <dd>ILOOM</dd>
            <dt>location</dt>
            <dd>1-3-6, Koraku, Bunkyo Ku, Tokyo To, 112-0004, Japan</dd>
            <dt>Establishment</dd>
            <dd>December 15, 2022</dd>
            <dt>Capital</dt>
            <dd>3,000,000円</dd>
            <dt>Business Development</dt>
            <dd>・Tokyo - January, 2020</dd>
            <dd class="add">・New York - June, 2021</dd>
            <dd class="add">・London - August, 2022</dd>
            <dd class="add">・France - November, 2022</dd>
          </dl>
        </div>

        <div class="img">
          <img src="../images/banner10.png" alt="">
        </div>
      </section>
    </main>

    <footer>
      <?php include "footer.php"; ?>
    </footer>
  </body>
</html>