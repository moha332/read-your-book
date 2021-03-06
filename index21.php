<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M7</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta thttp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>




    <style>
        #result {
            position: absolute;
            width: 100%;
            max-width: 870px;
            max-height: 400px;
            box-sizing: border-box;
            z-index: 1001;
            left: 517px;
        }
        
        .link-class:hover {
            width: 900px;
            background-color: #ddd8d8;
        }
        
        .link-class {
            width: 870px;
            transition: background-color 0.3s, width 0.5s, transform 0.4s;
        }
    </style>
    <style>
    * {
            box-sizing: border-box;
        }
        
        body {
            font: 16px Arial;
        }
        /*the container must be positioned relative:*/
        
        .autocomplete {
            position: absolute;
            display: inline-block;
            border-radius: 70%;
            top: 90px;
        }
        
        input {
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
            border: outset 2px white;
            width: 2329px;
        }
        
        input[type=text] {
            background-color: #f1f1f1;
            height: 60px;
            width: 100%;
            border-style: 4%;
        }
        
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 111121;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            right: 0px;
        }
        
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
            width: 900px;
            transition: background-color 0.5s, width 0.5s, transform 0.4s;
            z-index: 111121;
        }
        /*when hovering an item:*/
        
        .autocomplete-items div:hover {
            background-color: #969696;
        }
        /*when navigating through the items using the arrow keys:*/
        
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
        
        .flickity-viewport {
            position: absolute;
        }
    }
    </style>


</head>
<style media="screen">
.carousel-cell {
        width: 66%;
        position: absolute;
        top: 76px;
        margin: 2px 10px;
    }
    /* cell number */
    
    .carousel-cell:before {
        display: block;
    }
    
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        z-index: 1111px;
    }
    
    nav {
        background: #9aa5ad;
        height: 75px;
        z-index: 1111;
        width: 100%;
        position: fixed;
        float: right;
    }
    
    label.logo {
        color: #f2f2f2;
        font-size: 40px;
        line-height: 80px;
        padding: 7px 40px;
        font-weight: 600px;
        z-index: 1111;
        font-family: 'Poppins', sans-serif;
    }
    
    nav ul {
        float: right;
        margin-right: 10px;
        z-index: 1111px;
    }
    
    nav ul li {
        display: inline-block;
        line-height: 80px;
        margin: 10px 2px;
        z-index: 1111px;
    }
    
    nav ul li a {
        color: #f2f2f2;
        font-weight: 500;
        font-size: 30px;
        padding: 7px 30px;
        z-index: 1111px;
        /* text-transform: uppercase; */
        font-family: 'Poppins', sans-serif;
        margin: ;
    }
    
    li a.active,
    li a:hover {
        background: #1b9bff;
        transition: .5s;
        z-index: 1111px;
    }
    
    .checkbtn {
        font-size: 50px;
        color: white;
        float: right;
        line-height: 80px;
        margin-left: 10px;
        cursor: pointer;
        display: none;
        z-index: 11111;
    }
    
    #check {
        display: none;
        position: absolute;
        l
    }
    
    @media only screen and (max-width:414px) {
        ul input[type=text] {
            width: 30%;
            left: -100px;
            top: -60px
        }
        .autocomplete-items {
            top: -8px;
            right: 730px;
        }
        .autocomplete-items div {
            width: 300px;
            right: 250px;
            top: -30px
        }
    }
    
    @media only screen and (max-width: 812px) {
        ul input[type=text] {
            width: 30%;
            display: inline;
            left: -50%;
        }
        .autocomplete-items {
            top: -8px;
            right: 730px;
        }
        .autocomplete-items div {
            width: 300px;
            right: 250px;
            top: -30px
        }
        .checkbtn {
            display: block;
            margin-right: 40px;
            z-index: 1111;
            position: fixed;
        }
        ul {
            width: 100%;
            height: 100vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 1111px;
        }
        nav ul li {
            margin: 20px 0;
            line-height: 10px;
            z-index: 1111px;
        }
        nav ul li a {
            font-size: 10px;
            z-index: 1111px;
        }
        a {
            border-bottom: violet;
        }
        a:active,
        {
            color: #ffffff;
            background-color: rgb(64, 110, 238);
        }
        #check:checked~ul {
            left: 0;
            z-index: 1111px;
        }
    }
}
@media only screen and (max-width: 1024px) {
    ul input[type=text] {
        width: 30%;
        top: -50px;
        left: -50%;
    }
    
    .autocomplete-items {
        top: -8px;
        right: 730px;
    }
    
    .autocomplete-items div {
        width: 300px;
        right: 250px;
        top: -30px
    }
    
    .checkbtn {
        display: block;
        margin-right: 40px;
        z-index: 1111;
        position: fixed;
    }
    
    ul {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2c3e50;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
        z-index: 1111px;
    }
    
    nav ul li {
        display: block;
        margin: 50px 0;
        line-height: 30px;
        z-index: 1111px;
    }
    
    nav ul li a {
        font-size: 30px;
        z-index: 1111px;
    }
    
    a {
        border-bottom: violet;
    }
    
    a:active,
    {
        color: #ffffff;
        background-color: rgb(64, 110, 238);
    }
    
    #check:checked~ul {
        left: 0;
        z-index: 1111px;
    }
}

}
@media only screen and (max-width: 952px) {
    .upper-bar {
        position: fixed;
        display: inline-block;
        background-color: yellow;
    }
    ul input[type=text] {
        width: 30%;
        top: -50px;
        left: -50%;
    }
    .autocomplete-items {
        top: -8px;
        right: 730px;
    }
    .autocomplete-items div {
        width: 300px;
        right: 250px;
        top: -30px
    }
    body {
        background-size: 500px;
    }
}
@media (max-width: 952px) {
    label.logo {
        font-size: 90px;
        padding: 20px;
    }
    nav ul li a {
        font-size: 16px;
        z-index: 1111px;
    }
}
@media (max-width: 858px) {
    .upper-bar {
        position: fixed;
        display: inline-block;
        background-color: yellow;
    }
    .checkbtn {
        display: block;
        margin-right: 40px;
        z-index: 1111;
        position: fixed;
    }
    .usu li {
        display: inline-block;
        position: fixed;
    }
    ul {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2c3e50;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
        z-index: 1111px;
    }
    nav ul li {
        display: block;
        margin: 50px 0;
        line-height: 30px;
        z-index: 1111px;
    }
    nav ul li a {
        font-size: 30px;
        z-index: 1111px;
    }
    a {
        border-bottom: violet;
    }
    a:active,
    {
        color: #ffffff;
        background-color: rgb(64, 110, 238);
    }
    #check:checked~ul {
        left: 0;
        z-index: 1111px;
    }
}

}
section {
    background: url(bg1.jpg) no-repeat;
    background-size: cover;
    height: calc(100vh - 80px);
    z-index: 1111px;
}
.w3-image {
    border: solid 3px blue;
    background-color: blue;
}
.wea {
    position: absolute;
    top: 830px;
    right: 30px;
    color: rgb(255,
    255,
    255);
    border-right: 9px solid rgb(255,
    12,
    12);
    background-color: rgba(0,
    0,
    0,
    0.301);
    width: 200px;
    text-shadow: -6px 3px 11px black;
    font-family: 'Roboto',
    sans-serif;
}

}
.qa {
    border: solid 0px rgba(0,
    0,
    0,
    0.329);
    position: absolute;
    top: 800px;
    right: 70px;
}
.qa2 {
    border: solid 0px rgba(0,
    0,
    0,
    0.329);
    position: absolute;
    top: 1350px;
    right: 70px;
}
button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
    position: absolute;
    top: 100px;
}
.ewe {
    position: absolute;
    top: 180%;
    right: 30px;
    color: rgb(18,
    5,
    77);
}
.carousel-cell {
    border: brown solid 0px;
}
.QS {
    border: black 2px solid;
}
.qq2 {
    border: blue 2px solid;
    transition: transform 0.2s,
    width 0.3s,
    border 0.2s;
}
.qq2:hover {
    widows: 360px;
    border: 11px outset rgb(20,
    3,
    116);
    width: 260px;
}
.qa>.QQ {
    margin: 0px 9px;
}
.qq2 {
    border-radius: 4%;
}
.qwe2 {
    border-radius: 4%;
}
.qwqw {
    margin: 2px 10px;
}

}
.qa2>.QQ {
    margin:0px 9px;
}
body {
    text-align: right;
    background-color:rgb(201,
    201,
    201);
    width: 100%;
    font-family: 'Franklin Gothic Medium',
    'Arial Narrow',
    Arial,
    sans-serif;
    font-weight: bold;
    font-family: 'Droid Arabic Kufi';
    font-style: normal;
}
.qewq {
    border: solid 0px rgba(0,
    0,
    0,
    0.562);
}

}
.data-title {
    font-family: 'Roboto',
    sans-serif;
}
.form-control {
    background-color: #d40000;
    color: #000;
    width: 20;
}
.flickity-enabled {
    position:relative
}
.flickity-enabled:focus {
    outline:0
}
.flickity-viewport {
    overflow:hidden;
    position:relative;
    height:100%
}
.flickity-slider {
    position:absolute;
    width:100%;
    height:100%
}
.flickity-enabled.is-draggable {
    -webkit-tap-highlight-color:transparent;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}
.flickity-enabled.is-draggable .flickity-viewport {
    cursor:move;
    cursor:-webkit-grab;
    cursor:grab
}
.flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
    cursor:-webkit-grabbing;
    cursor:grabbing
}
.flickity-button {
    position:absolute;
    background:hsla(0,
    0%,
    100%,
    .75);
    border:none;
    color:#333;
    transition:width 0.3s,
    border 0.4s;
}
.flickity-button:hover {
    width: 60px;
    background:rgb(255,
    255,
    255);
    cursor:pointer
}
.flickity-button:focus {
    outline:0;
    box-shadow:0 0 0 5px #19f
}
.flickity-button:active {
    opacity:.6
}
.flickity-button:disabled {
    opacity:.3;
    cursor:auto;
    pointer-events:none
}
.flickity-button-icon {
    fill:currentColor
}
.flickity-prev-next-button {
    top:50%;
    width:44px;
    height:44px;
    border-radius:20%;
    transform:translateY(-50%)
}
.flickity-prev-next-button.previous {
    left:34px
}
.flickity-prev-next-button.next {
    right:10px
}
.flickity-rtl .flickity-prev-next-button.previous {
    left:auto;
    right:10px
}
.flickity-rtl .flickity-prev-next-button.next {
    right:auto;
    left:10px
}
.flickity-prev-next-button .flickity-button-icon {
    position:absolute;
    left:20%;
    top:20%;
    width:60%;
    height:60%
}
.flickity-page-dots {
    position:absolute;
    width:100%;
    bottom:-25px;
    padding:0;
    margin:0;
    list-style:none;
    text-align:center;
    line-height:1
}
.flickity-rtl .flickity-page-dots {
    direction:rtl
}
.flickity-page-dots .dot.is-selected {
    opacity:8
}
{
    background-color: thistle;
}
a {
    text-decoration:none;
}
@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
    .textOverImage {
        background-size:cover!important;
    }
}
.textOverImage {
    position:relative;
    width:260px;
    height:350px;
    float:left;
    margin:4px;
    background-size:115%;
    background-position:center;
    transition:0.5s;
    overflow:hidden;
    border-radius:8px;
    box-shadow:0 0 4px #000;
}
.textOverImage:hover {
    background-size:120%;
}
.textOverImage:before {
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    right:0;
    transform:translateY(90%);
    /*use transform:translateY(100%); to remove footer*/
    background-color:rgba(88,
    88,
    88,
    0.849);
    color:#fff;
    padding:0 8px;
    content:attr(data-title);
    transition:0.5s 0.1s;
    color:rgb(255,
    255,
    255);
    font-weight:bold;
    font-size:1.5em;
    float: right;
}
.data-text {
    font-style: normal;
    font-family: 'Roboto',
    sans-serif;
}

}
.background-image>.url {
    width: 270px;
}
.textOverImage:after {
    position:absolute;
    float: right;
    top:0;
    bottom:0;
    font-weight:bold;
    left:0;
    right:0;
    color:rgb(255,
    255,
    255);
    padding:10px;
    content:attr(data-text);
    transition:0.5s;
    padding-top:3em;
    margin-top:20px;
    transform:translateY(110%);
    opacity:0;
    font-size: 18px;
    font-weight: bold;
}
.textOverImage:hover:after {
    transform:translateY(0);
    transition:0.5s 0.1s;
    opacity:1;
}
.textOverImage:hover:before {
    transform:translateY(0);
    padding:10px;
    background-color:rgba(117,
    116,
    122,
    0.856);
    transition:0.7s;
}
.form-control {
    background-color: teal;
}

}
.mr-sm-2 {
    background-color: teal;
}
body,
html {
    height: 100%;
    margin: 0;
}
.box {
    border:solid rgb(141,
    141,
    141) 1px;
    margin:3px 4px;
}
.box2 {
    border:solid rgb(141,
    141,
    141) 1px;
}
.box2 p {
    border-right: 0px solid rgb(99,
    99,
    99);
    background-color:rgba(122,
    122,
    122,
    0.733) 122,
    122);
    color: rgb(255,
    255,
    255);
    text-shadow: -6px 3px 11px black;
    font-family: 'Roboto',
    sans-serif;
    font-size:40px;
    background-color:rgba(112,
    112,
    112,
    0.664);
    border:0.2px outset rgb(145,
    145,
    145);
}
.box p {
    background-color:rgba(112,
    112,
    112,
    0.664);
    border:0.2px outset rgb(145,
    145,
    145);
    color: rgb(255,
    255,
    255);
    border-right: 0px solid rgb(99,
    99,
    99);
    text-shadow: -6px 3px 11px black;
    font-family: 'Roboto',
    sans-serif;
    font-size:40px;
}
body {
    margin:0px;
    padding:0px;
    width:100%;
    display: block;
}
.qewq .wea {
    background-color: rgb(138,
    135,
    135);
    border: 2px solid rgb(90,
    90,
    90);
    margin: 10px;
}
.upper-bar a {
    color:white;
    font-size:22px;
}
.upper-bar {
    color:white;
    border:0px sandybrown solid;
    font-size:25px;
    background-color:rgb(85,
    85,
    85);
    z-index:10001;
    position :fixed;
    width :1902px;
    height:27px;
}
</style>

<body>
    <div class="upper-bar">

        <a href="login.php">تسجيل الدخول</a>

        </a>
    </div>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <ul>

            <li><a href="#">معلومات عنا</a></li>
            <li><a href="https://www.instagram.com/m7_elctro/">الدعم الفني</a></li>
            <li><a href="#">الانستجرام</a></li>
            <li><a href="index1.html">اهم الكتب</a></li>
            <li><a class="active" href="index21.html">الرئيسية</a></li>
            <label class="logo">M7</label>

        </ul>
    </nav>
    <section></section>



    <br><br />
    <br><br />
    <br><br />
    <div class="usu">
        <li>
            <div>
                <form method="GET" autocomplete="off" action="/action_page.php">
                    <div class="autocomplete" style="width:900px; position: absolute;top: 90px; left:550px ;z-index: 4;
                    ">
                        <input id="myInput" type="text" name="myCountry" required="" id="search" placeholder="ابحث" style="position: relative;">
                    </div>

                </form>
            </div>
        </li>
    </div>
    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />








    <ol class="flickity-page-dots">
        <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
        <li class="dot" aria-label="Page dot 2"></li>
        <li class="dot" aria-label="Page dot 3"></li>
    </ol>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


















    </ul>


    <div class="box">


        <h1>
            <P>كتب سياسية</P>
        </h1>



        <div class="qewq" data-flickity='{ "wrapAround": true, "autoPlay": true }'>




            <div class="qwqw">
                <a href="pdf/إحدى عشرة دقيقة - مكتبة زاد.pdf" class="textOverImage" data-title="احدى عشر دقيقة" style="background-image:url(jr/0.JPG" width=280px) data-text=" تتناول الرواية حياة فتاة تعيش في إحدى القرى النائية في البرازيل تحلم بتكوين ثروة صغيرة وانشاء مزرعة تعيلها وتعيل عائلتها. تنتقل الفتاة إلي ريوديجانيرو ومن هناك تتعرف على رجل أوروبي تنتقل معه إلى جنيف في سويسرا حيث تعمل هناك في أحد الملاهي الليلية كمومس. هنا تظهر براعة الكاتب باولو كويلو في الكشف للقارئ عن هذا العالم الغامض

      "> <img class="qwe2" width="280PX" height="380px" style="width:600px padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="pdf/الاب الغني و الاب الفقير.pdf" class="textOverImage" data-title="الأب الغني و الأب الفقير" style="background-image:url(jr/5.JPG" width=280px) data-text="   ولد روبرت كيوزاكي في هاواي وهو ٱبن المدرس غالف أش كيوزاكي (1919 - 1991). ذكر في كتبه أنه خدم خلال حرب الفايتنام كجندي طيار لمروحية الهيليكوبتر مع قوات المارينز الأمريكية إلى حدود سنة 1975 حيث تركها وعمل في إكسغوكس كوربوريشن كبائع ألات طباعة.
      "> <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="pdf/إرادتي هزمت إعاقتي.pdf" class="textOverImage" data-title="إرادتي هزمت إعاقتي
      " style="background-image:url(jr/545454545454.JPG" width=280px) data-text="  إذا وجِدَ كتاب يستحق أن يقرأه المراهقون وأولياء الأمور (وأي شخص آخر)، فهو هذا الكتاب - صحيفة دنفر بوست. ميلودي، 11 عامًا، تملك ذاكرة مرآتية، ورأسها مثل آلة تصوير سينمائية تسجل طوال الوقت، ولكن لا يوجد فيها زر للحذف؛ كانت أذكى طفلة في مدرستها، ولكن لم يكن أي إنسان يعرف ذلك؛ فقد اعتقد معظم الناس، ومنهم المعلمون والأطباء، أنها غير قادرة على التعلُّم،      ">
                    <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="القائد الخفي" style="background-image:url(jr/54.JPG" width=280px) data-text="كتاب القائد الخفى هو ثانى كتب الكاتب وائل نيل القائد الخفى ليس كمثل باقى كتب التنمية البشرية التى قرأتها فى الماضى بل هو مختلف تماما سواء فى اختيار الالفاظ والمعانى او طريقة عرض المواضيع ترى ماهو القائد الخفى ؟هل هو ذلك الشئ الذى نستدل به على مصباح علاء الدين ؟ام هى تلك العلامة التى تقودنا الى احدى البطاقات الرابحة من بطاقات اليانصيب؟؟

      "> <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>



            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="البراعة في تأسيس المشاريع
      " style="background-image:url(jr/545.JPG" width=280) data-text="   يتوقُ كثيرٌ من الأفرادِ الذين يبدأونَ مشاريعَهم الخاصَّةَ إلى الحصولِ على وصفةٍ تفصيليَّة، أو مجموعةٍ محدَّدةٍ من الخطواتِ أو التعليمات لاتِّباعها من أجل تحقيق أهدافهم. غير أنَّ الحقيقةَ هي أنَّه لا يوجدُ شيءٌ من هذا القبيل. بدلًا من ذلك، هناك طريقةُ تفكيرٍ تُمَكِّنُ المرءَ من التَّعامُل مع حالاتٍ متنوِّعةٍ وكثيرة، ... المزيد
      "> <img width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>




            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title=" انشودة المقهى الحزين" style="background-image:url(jr/1.JPG" width=280) data-text="بطلة الرواية إميليا إيفانز تمتلك جسداً بمواصفات أجساد الرجال، تسلك سلوكهم وتمارس أعمالهم. تعيش إميليا قصتي حب مختلفتين: في الأولى أحبها مارفن ميسي حباً غير حياته. لم يدم زواجهما سوى عشرة أيام، لم تسمح له إميليا خلالهما بلمسها، وطردته بعدها من منزلها. في الثانية تحب إميليا ابن خالتها الأحدب النوع الوحيد من الحب الذي تجيد منحه؛ الحب الأمومي.

      "> <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="قوة التحفيز" style="background-image:url(jr/545454.JPG" width=280) data-text=" التحفيز هو مولد النشاط والفاعلية في العمل ، وهو من الطرق النشطة للحصول على أفضل ما لدى الغير ؛ سواء كان ذلك يتعلق بالأمور المادية أم المعنوية ولكي تصل لى ذلك لابد من الإهتمام بالكيفية الناجمة للتحفيز ، وذلك عن طريق اتباع أفضل السبل وأسرعها ، وأكثرها جدوى لتحقيق ذلك ، ومن المفيد أن يتم التركيز على الأساليب التحفيزية التي تؤدي إلى إيجاد نوع من الديمومة في الإنتاج ">
                    <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="pdf/البحار مندي.pdf" class="textOverImage" data-title="البحار مندي" style="background-image:url(jr/111.JPG" width=280) data-text="   إنه الكاتب الأديب، صاحب الروائع، الأستاذ صالح مرسي يسبر أغوار النفس، في زمن الاستعمار، حيث يتجلى الصراع بين الخضوع للأمر الواقع وبين رفضه والثورة عليه وأيًا ما كانت النتائج «البحار مندي»، «زغدانة»، «شبيطة»، «روبي» وغيرهم من أبطال هذه الرواية، هم رموز لهذا الصراع بشتى أشكاله ووسائله.">
                    <img class="qwe2" width="280PX" height="380px" style="padding:1px 0.5px ;"></a>
            </div>

        </div>
        <ol class="flickity-page-dots">
            <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
            <li class="dot" aria-label="Page dot 2"></li>
            <li class="dot" aria-label="Page dot 3"></li>
        </ol>


    </div>
    </div>
    </div>


    <br><br />
    <br><br />
    <br><br />
    <br><br />
    <br><br />




    <div class="box2">
        <h1>
            <P>كتب الاداب</P>
        </h1>



        <div class="qy" data-flickity='{ "wrapAround": true, "autoPlay": true }'>

            <div class="qwqw">
                <a href="pdf/الطنطاوية.pdf" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/6.JPG" width=280) data-text="الطنطورية رواية للأديبة المصرية رضوى عاشور، صدرت سنة 2010، عن دار الشروق المصرية. تسرد الرواية سيرة متخيلة لعائلة فلسطينية، منتسبة إلى قرية الطنطورة، بين سنتي 1947 و 2000، تم اقتلاعها من أرضها بعد اجتياح العصابات الصهيونية للقرية، لتعيش تجارب اللجوء في لبنان و الإمارات و مصر. تنتظم الرواية حول خط من الأحداث و الوقائع التاريخية كالنكبة و اللجوء الفلسطيني و الحرب الأهلية اللبنانية و الاجتياح الإسرائيلي للبنان.
    "> <img class="qwe2" width="280PX" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
                <a href="file:///C:/Users/sautm/OneDrive/%D8%B3%D8%B7%D8%AD%20%D8%A7%D9%84%D9%85%D9%83%D8%AA%D8%A8/m7/jr/121212.pdf" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/7.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول">
                    <img class="qwe2" width="280PX" src="" style="padding:1px 0.5px ;"></a>
            </div>
            <div class="qwqw">
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/3333.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"> </a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/777.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"></a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/444.JPEG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"></a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/555.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"> </a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/666.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"> </a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/13.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"> </a>
            </div>
            <div class="qwqw">
                <a href="https://www.instagram.com/sautma223/" class="textOverImage" data-title="الطنطورية" style="background-image:url(jr/15.JPG" width=280) data-text="   كتاب اللغة العربية للصف الثاني عشر الفصل الدراسي الاول"> </a>
            </div>

        </div>
        <ol class="flickity-page-dots">
            <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
            <li class="dot" aria-label="Page dot 2"></li>
            <li class="dot" aria-label="Page dot 3"></li>
        </ol>


    </div>
    </div>
    </div>






</body>








<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
<div class="hiddendiv common"></div>




<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keycode", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var countries = ["ارادتي هزمت اعاقتي", "الاب الغني و الاب الفقير", "زنجبار", "عمان الحضارة", "الطنطورية",
        "إرادتي هزمت إعاقتي", "قابوس", "بيل جيتس", "البراعة في تأسيس المشاريع", "انشودة المقهى الحزين", "التحفيز", "جيتس",
        "البحار مندي", "قوة التحفيز", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
        "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria",
        "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic",
        "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao",
        "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea",
        "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies",
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau",
        "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica",
        "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya",
        "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania",
        "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal",
        "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan",
        "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion",
        "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia",
        "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan",
        "Spain", "Sri Lanka", "St Kitts & Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
        "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos",
        "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",
        "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"
    ];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), countries);
</script>
</html>


