<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>هادی</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-rtl.css">



        <!-- Font Awesome link -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
               <a class="navbar-brand" href="#">لولو آپ</a>
            </div>
              <ul class="nav navbar-nav col-aps">
                <li class="active"><a href="#">خانه</a></li>
                <li><a href="#">آموزش های برنامه نویسی</a></li>
                <li><a href="#">آموزش های مهم</a></li>
                <li><a href="#">تماس با ما</a></li>
              </ul>
        </div>
    </nav>

      <div class="row">
        <div class="col-sm-12 contain">
          <div class="row">
            <div class="col-sm-6 ">
              <div class="box">
                <h1>آپلود سنتر لولو آپ</h1>
                <!-- <form class="form" action="index.html" method="post">
                  <label for="">فایل های خود را وارد کنید</label>
                  <input type="file" class="custom-file-input">
                  <input type="file" name="" value="">
                  <input type="file" name="" value="">
                  <input type="submit" name="submit" value="آپلود کنید ..">
                </form> -->

                <form action="#">
                  <div class="input-file-container">
                    <p>در این قسمت شما باید یک فایل برای آپلود انتخاب کنید.</p>
                    <input class="input-file" id="my-file" type="file">
                    <label tabindex="0" for="my-file" class="input-file-trigger">یک فایل انتخاب کنید ..</label>
                    
                  </div>
                  <p class="file-return"></p>
                </form>
                <script type="text/javascript">
                    document.querySelector("html").classList.add('js');
                    var fileInput  = document.querySelector( ".input-file" ),
                      button     = document.querySelector( ".input-file-trigger" ),
                      the_return = document.querySelector(".file-return");

                    button.addEventListener( "keydown", function( event ) {
                      if ( event.keyCode == 13 || event.keyCode == 32 ) {
                          fileInput.focus();
                      }
                    });
                    button.addEventListener( "click", function( event ) {
                     fileInput.focus();
                     return false;
                    });
                    fileInput.addEventListener( "change", function( event ) {
                      the_return.innerHTML = this.value;
                    });
                </script>


              </div>
            </div>
            <div class="col-sm-6 ">
              <div class="box">
                <div class="intro">
                  <h1>در مورد ما</h1>
                  <p>سلام ما بر آن شدیم تا آپلود سنتری را راه اندازی کنیم برای خدمت رسانی به شما و همه ی دوستان و لطفا در توسعه ی آن به ما کمک کنید . و از شما میخواهیم برای مشکلات پیش آمده ما را همراهی کنید</p>
                  <p>سلام ما بر آن شدیم تا آپلود سنتری را راه اندازی کنیم برای خدمت رسانی به شما و همه ی دوستان و لطفا در توسعه ی آن به ما کمک کنید . و از شما میخواهیم برای مشکلات پیش آمده ما را همراهی کنید</p>
                    <a href=""><button>عضویت</button></a>
                    <a href=""><button>وارد شوید</button></a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
  </div>
</body>
</html>
