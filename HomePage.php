
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/86d70f53ac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.min.css">

  <style>
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    .view,
    body,
    html {
      height: 100%
    }

    .carousel {
      height: 50%
    }

    .carousel .carousel-inner,
    .carousel .carousel-inner .active,
    .carousel .carousel-inner .carousel-item {
      height: 100%
    }

    @media (max-width:776px) {
      .carousel {
        height: 100%
      }
    }

    .page-footer {
      background-color: #929FBA
    }

    #btn {
      position: fixed;
      right: 10px;
      bottom: 10px;
      display: none;
    }

    .mapouter {
      position: relative;
    }

    .gmap_canvas {
      overflow: hidden;
      background: none !important;
    }

    .color {
      background-color: rgb(56, 85, 248);
    }

    .text-color {
      color: white;
    }

    #header {
            text-align: center;
            background-color: crimson;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 5px;
            padding: 5px;
        }

        h1 {
            font-size: 35px;
            color: whitesmoke;
            text-decoration: italic;
            font-style: italic;
        }

        .khmer {
            font-family: 'Dangrek', cursive !important;
        }

        .img {
            width: 300px;
            height: 200px;
        }
  </style>
</head>

<body>


  
  <!--------------------------------------------------Header--------------------------------------------------------->
  <div >
    <img src="image/bcg3.png" alt="" width="100%" height="100px">
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark color ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <a href="#" class="brand-link">
        <img src="image/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8" width="80" height="40">
      </a>
    
        <ul class="navbar-nav mr-auto ">
        
          <li class="nav-item ">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display.php">Buy</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="AboutUs.html">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Dasboard.php">Admin</a>
          </li>
          
        </ul>
        <form class="form-inline">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
       
      </div>
     
    </div>
  </nav>
  <!-------------------------------------------------End Header--------------------------------------------------------->
  <!-------------------------------------------------Content------------------------------------------------------------>
  <div class="container-fluid">
    <div class="row">
      <!--Right Site -->
      <div class="col-md-2">
        <div style=" height: 800px;" class="">
          <img class="card-img-top img-thumbnail" src="image/s1.gif" style="height: inherit;" alt="Card image cap">
        </div>
      </div>
      <!--End Right Site -->
      <!--Middle Site -->
      <div class="col-md-8">
        <!-- Slide -->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="view">
                <img class="d-block w-100" src="image/bcg.png" width="100%" alt="First slide">
                <div class="mask rgba-black-light"></div>
              </div>

            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="image/c2.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="image/flat1.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- End Slide -->
        <!--Card-->
        <div class="card-deck mt-4">
          <!-- fist Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/c5.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Bentley </h4>
            </div>
          </div>
          <!-- End fist Card -->
          <!-- Second Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/c2.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Luxus lx570</h4>
            </div>
          </div>
          <!--End Second Card -->
          <!-- Third Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/p2.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Hawai</h4>
            </div>
          </div>
          <!--End Third Card -->
          <!-- fist Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/p3.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Iphone 11 Pro</h4>
            </div>
          </div>
          <!-- End fist Card -->
        </div>
        <!--End Card-->

        <!--Card-->
        <div class="card-deck ">
          <!-- fist Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/c1.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Porches</h4>
            </div>
          </div>
          <!-- End fist Card -->
          <!-- Second Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/computer4.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Computer MSI</h4>
            </div>
          </div>
          <!--End Second Card -->
          <!-- Third Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/h4.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Home</h4>
            </div>
          </div>
          <!--End Third Card -->
          <!-- fist Card -->
          <div class="card mb-4">
            <div class="view overlay">
              <img class="card-img-top" src="image/h5.jpg" height="100%" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Home</h4>
            </div>
          </div>

          <!-- End fist Card -->
        </div>
        <!--End Card-->
      </div>
      <!--Middle Site -->
      <!--Rigth Site -->
      <div class="col-md-2">
        <div style="height: 800px;" class="">
          <img class="card-img-top img-thumbnail" src="image/s2.gif" style="height: inherit;" alt="Card image cap">
        </div>
      </div>
      <!--End Rigth Site -->
    </div>
  </div>
  <div class="container">
    <h4 class="my-4 font-weight-bold">News</h4>
    <div class="grid">
      <div class="row">
        <div class="grid-sizer col-md-8"></div>
        <div class="grid-item col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mbappe ប្រាប់​ពី​មូលហេតុ​ដែល​ត្រូវធ្វើ​តាម Ronaldo ជា​ជាង​តាម Messi</h5>
              <img src="image/n1.jpg" alt="" width="100%">
              <p class="card-text">តាម​ប្រភព​ព័ត៌មាន Soccer Laduma បានឱ្យ​ដឹង​ថា ដោយ​មាន​មនុស្ស​ជា​ច្រើន​ជឿជាក់​ថា​
                Kylian Mbappe នឹង​អាច​ឡើង​គ្រប់គ្រង​ពាន Ballon d’Or ក្នុង​រយៈពេល​ប៉ុន្មាន​ឆ្នាំ​ក្រោយ​នេះ
                កំពូល​តារា​ឆ្នើម​វ័យក្មេង បាន​បង្ហើប​ប្រាប់​ពី​មូលហេតុ​ដែល​គាត់​មាន​អារម្មណ៍​ថា
                ​ខ្លួន​ត្រូវ​តែ​ធ្វើ​ត្រាប់​តាម Cristiano Ronaldo
                ជា​ជាង​គូប្រជែង​យូរអង្វែង​របស់​ប្រធាន​ក្រុម​ព័រ​ទុ​យ​ហ្កា​ល់​គឺ Lionel Messi​។</p>
              <a href="https://kohsantepheapdaily.com.kh/article/1021676.html" class="card-link">link</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3 mb-4">
          <div class="card">
            <div class="card-body">
              រថយន្ត Mini អគ្គិសនី​កំពុង​វាយលុក​ទីផ្សារ​ខ្លាំង​ទូ​ទាំង​ពិភពលោក
              <img src="image/n3.jpg" alt="" width="100%">
              <h6>រថយន្ត Mini Cooper SE ឆ្នាំ​២០២០ ដែល​មាន​ម៉ាស៊ីន​ប្រើ​អគ្គិសនី
                កំពុង​ទទួល​បានការ​ចាប់អារម្មណ៍​យ៉ាង​ខ្លាំង​នៅ​ទូ​ទាំង​ពិភពលោក
                ដោយ​ទទួល​បាន​អតិថិជន​ដែល​បាន​ចុះ​ឈ្មោះ​បញ្ជា​ទិញ​សរុប​ចំនួន ៩០០០០​នាក់ ដែល​កើនឡើង​ពី​ចំនួន​ប្រហែល ៤៥០០០
                នាក់​កាលពី​ខែសីហា​។ ដោយ​ពិចារណា​ថា​ការ​ចែកចាយ​ជា​សកល​សម្រាប់​យីហោ​ម៉ាក BMW Mini មាន​ចំនួន​ត្រឹមតែ ៣៤៦៦៣៩
                គ្រឿង​រហូត​ដល់​ឆ្នាំ ២០១៩ នោះ​គឺជា​ចំនួន​អ្នកទិញ​សក្តានុពល​ច្រើន។
              </h6>
            </div>

          </div>
        </div>
        <div class="grid-item col-md-3 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">វិស័យ​សំណង់​និង​អចលនទ្រព្យ​ស្ថិត​ក្នុង​ផែនការ​តាមដាន​ពី​ស្ថាប័ន​រូបិយ​វត្ថុ​ជាតិ
              </h5>
              <img src="image/n2.jpg" alt="" width="100%">

              ​</h6>
              <a href="https://kohsantepheapdaily.com.kh/article/1020521.html" class="card-link mr-3">link</a>

            </div>
          </div>
        </div>
        <div class="grid-item col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              ក្រុមហ៊ុន​វិនិយោគ​ចិន​ធំៗ និង​អ្នកវិនិយោគ​អចលនទ្រព្យ​សំរុកចូលរួម​សម្ពោធ​ការដ្ឋាន​សាងសង់​ទីក្រុង​រណប
              Emerald City
            </div>
            <div class="card-body">
              <img src="image/n4.jpg" alt="" width="100%">
              <blockquote class="blockquote mb-0">
                <p>លោក កែវ មុន្នីរ័ត្ន អគ្គ​នាយក​ Emerald City បាន​ឲ្យដឹង​ថា ទីក្រុង​រណប​ថ្មី Emerald City
                  ជា​លំនៅ​ឋាន​សម្រាប់​គ្រួសារ​សម័យ​ថ្មី មាន​ផ្លូវ​ក្នុង​បុរី​ធំ​ទូលាយ​ខ្លាំងមិន​ធ្លាប់មាន
                  ផ្លូវ​បែប​រុក្ខវិថី ១៦ម៉ែត្រ ផ្លូវ​បែប​ឧទ្យាន ៣៦ម៉ែត្រ មាន​ផ្សារ​ទំនើប ខុនដូ សាលារៀន មន្ទីរពេទ្យ
                  ធនាគារ ដែល​រួម​បញ្ចូល​នូវ​ការរចនា​ដ៏​ស្រស់ស្អាត គុណភាព​សំណង់​ដ៏​រឹងមាំ ព្រម​ទាំង​សោភ័ណភាព ប្រណិត​ភាព​។
                  លោក​អ្នក​អាច​ទំនាក់ទំនង​សាកសួរ​ព៏ត៌មាន​បន្ថែម​លើ​ផេក​ហ្វេសប៊ុក អ៊េមឺរ៉លដ៍ ស៊ីធី- Emerald City
                  ឬទំនាក់ទំនង​តាម​ទូរសព្ទ​លេខ 067/086/078 331 789 សម្រាប់​ព័ត៌មាន​លម្អិត​បន្ថែម។
                  ដោយ​មាន​ការ​គាំទ្រ​កាន់​តែ​ខ្លាំងពី​ក្រុមហ៊ុន​ដៃគូ​ជាច្រើន​មកពី​ប្រទេស​ចិន គម្រោង​ទីក្រុង​រណប​ថ្មី
                  Emerald City កំពុង​អភិវឌ្ឍន៍​លើ​ផ្ទៃដី​សរុប ២៤,៥ហិចតា
                  ដែល​ជា​ទីក្រុង​រណប​ដ៏​ធំ​មួយ​នៅ​ថ្ងៃ​អនាគត​ដ៏​ខ្លី ជា​ស្នាដៃ​ស្ថាបត្យកម្ម​ទាន់​សម័យ​តាម​បែប​ធម្មជាតិ
                  មាន​ទីធ្លា​មុខ​ផ្ទះ និង​ផ្លូវ​ធំទូលាយ គួរ​ឲ្យ​ចង់​រស់​នៅ។ លើស​ពី​នេះ​ទៅទៀត
                  តាមរយៈ​ភ្នាក់ងារ​លក់​របស់​បុរី បាន​ឲ្យ​ដឹង​ថា សន្ទុះ​នៃ​ការ​អភិវឌ្ឍន៍​អចលនទ្រព្យ​នៅ​តាម​ផ្លូវ​លេខ ៤១
                  គឺ​ខ្លាំងណាស់ គ្រាន់​តែ​ទិញ​ទុក​យក​ចំណេញ​ ក៏​កាក់កប​ដែរ។</p>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3 mb-4">
          <div class="card">
            <ul class="list-group list-group-flush">
              <h5 class="font-weight-bold mb-3">Link For Other News</h5>

              <a href="https://kohsantepheapdaily.com.kh/category/technology">
                <li class="list-group-item"></li>Koh Santepheab</li>
              </a>
              <a href="http://news.sabay.com.kh/">
                <li class="list-group-item">Sabay News</li>
              </a>
              <a href="https://www.cambodiadaily.com/">
                <li class="list-group-item">The Cambodia Daily</li>
              </a>
              <a href="https://www.dap-news.com/">
                <li class="list-group-item">Derm Ampel News</li>
              </a>
              <a href="https://tvfb.news/">
                <li class="list-group-item"> Tvfb News</li>
              </a>


            </ul>
          </div>
        </div>
        <div class="grid-item col-md-3 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold mb-3">​អាមេរិកព្រមាន ​មេបញ្ជាការ​​កងទ័ពថ្មីអ៊ីរ៉ង់
                អាចនឹងមានវាសនាដូចលោកSoleimani បើហ៊ានសម្លាប់ពលរដ្ឋ ឬកងទ័ពអាមេរិកណាម្នាក់</h5>
              <img src="image/N5.jpg" alt="" width="100%">
              <p class="mb-0">បរទេស៖ កាលពីដើមខែនេះ លោក Esmail Ghaani
                ដែលបានទទួលជោគជ័យក្លាយជាមេបញ្ជាការកងកម្លាំងបដិវត្តដ៏យូរអង្វែង បន្ទាប់ពីលោកឧត្តមសេនីយ៍ទោ Qasem Soleimani
                ត្រូវបានគេធ្វើឃាតនៅក្នុងការវាយប្រហារដោយយន្តហោះគ្មានមនុស្សបើករបស់សហរដ្ឋអាមេរិក បានសន្យាថា
                នឹងបន្តការងាររបស់មេបញ្ជា ការមុនរបស់លោក​។ នេះបើយោងតាមការចេញផ្សាយពីសារព័ត៌មាន Sputnik នៅថ្ងៃទី២៣ ខែមករា
                ឆ្នាំ២០២០។
                តំណាងពិសេសអាមេរិកទទួលបន្ទុកកិច្ចការអ៊ីរ៉ង់ លោក Brian Hook »។</p>
            </div>

            <div class="card-body">
              <a href="https://tvfb.news/article/31288" class="card-link mr-3">link</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  

  <!-------------------------------------------------End Content------------------------------------------------------------>
  <!-------------------------------------------------Footer----------------------------------------------------------------->
  <img src="image/footer1.png" alt="" width="100%">
  <footer class="page-footer font-small color pt-4">
    <div class="container text-center text-md-left mt-5">
      <div class="row mt-3 text-color">
        <div class="col-md-3 col-lg-2 col-xl-2 mb-4">
          <h6 class="text-uppercase font-weight-bold">Meng Sambath</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>We are here for discussing about Real Estate and Movable Property in Cambodia.</p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><i class="fas fa-phone"></i>088 3 034 561</p>
          <p><i class="fas fa-phone"></i>096 2 034 561</p>
          <p><i class="fas fa-envelope-square"></i>limengnara9999@gmail.com</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Location</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><i class="fas fa-home mr-3"></i>#87A,St265 Sangkat Toek Laork3,Khan Toul Kork,Phnom Penh City,Cambodia.</p>
          <p><i class="fas fa-map-marker-alt"></i> *Near Samnang 12 Market</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Map</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <div class="mapouter">
            <div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas"
                src="https://maps.google.com/maps?q=11.561205%2C104.891698&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright: Limeng Nara
    </div>
  </footer>
  <!-------------------------------------------------End Footer------------------------------------------------------------>
  <!---------------------------------------------------Script-------------------------------------------------------------->
  <a href="#" id="btn" onclick="scrollToTopScreen()"><i class="fa fa-2x fa-long-arrow-up" aria-hidden="true"></i></a>
  <script>
    window.onscroll = function () {
      scrollTopCheck()
    }
    let btn = document.getElementById('btn');
    function scrollTopCheck() {
      if (document.body.scrollTop >= 500 || document.documentElement.scrollTop >= 500) {
        btn.style.display = 'block'
      } else {
        btn.style.display = 'none'
      }
    }
    function scrollToTopScreen() {
      document.body.scrollTop = 0
      document.documentElement.scrollTop = 0
    }
    var key = document.getElementById('key')
    function testOnkey() {
      console.log(key.value)
    }
    $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });
  </script>
  <!-------------------------------------------------Script------------------------------------------------------------>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>