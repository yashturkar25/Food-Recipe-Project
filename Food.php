<html>
<head>
    <title>luxxera</title>
    <style>
        :root{
    --red:#fcf804;
  }
  
  *{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition:all .2s linear;
  }
  
  *::selection{
    background:var(--red);
    color:#d0b3b3;
  }
  
  html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
  }
  
  body{
    background:rgb(245, 229, 11);
  }
  
  section{
    padding:2rem 9%;
  }
  
  .heading{
    text-align: center;
    font-size: 3.5rem;
    padding:1rem;
    color:#666;
  }

  .btn{
    display: inline-block;
    padding:.8rem 3rem;
    border:.2rem solid var(--red);
    color:var(--red);
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
  }

  header{
    position: fixed;
    top:0; left: 0; right:0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background:#fff;
    padding:2rem 9%;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  }
  
  header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color:#666;
  }
  
  header .logo i{
    padding-right: .5rem;
    color:var(--red);
  }
  
  header .navbar a{
    font-size: 2rem;
    margin-left: 2rem;
    color:#666;
  }
  
  header .navbar a:hover{
    color:var(--red);
  }
  
  #menu-bar{
    font-size: 3rem;
    cursor: pointer;
    color:#666;
    border:.1rem solid #666;
    border-radius: .3rem;
    padding:.5rem 1.5rem;
    display: none;
  }
  
  .Home{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    min-height: 100vh;
    align-items: center;
    background:url(../images/Home-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
  }
  
  .Home .content{
    flex:1 1 40rem;
    padding-top: 6.5rem;
  }
  
  .Home .image{
    flex:1 1 40rem;
  }
  
  .Home .image img{
    width:100%;
    padding:1rem;
  }

  .Home .content h3{
    font-size: 5rem;
    color:#333;
  }
  
  .Home .content p{
    font-size: 1.7rem;
    color:#666;
    padding:1rem 0;
  }

  .Gallery .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
  }
  
  .Gallery .box-container .box{
    height:25rem;
    flex:1 1 30rem;
    border:1rem solid #fff;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
  }
  
  .Gallery .box-container .box img{
    height:100%;
    width:100%;
    object-fit: cover;
  }

.Contact p{
    font-size: 2rem;
    text-align: center;
}  
.footer{
    background:#000;
    text-align: center;
  }
  
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Food Recipe</a>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#AboutUs">About Us</a>
            <a href="#Gallery">Gallery</a>
            <a href="#Contact">Contact</a>
            <a href="/login_cs/login.php">Login</a>

        </nav>
    </header>

    <section class="Home" id="Home">
        <div class="content">
            <h3>Are you hungry ?</h3>
            <p>Welcome to our Food Recipe Website! We are passionate about cooking and believe that a great meal can bring joy and happiness to people's lives. Our mission is to provide you with a vast collection of delicious recipes, culinary inspiration, and helpful cooking tips.</p>
            
        </div>
        <div class="image">
            <img src="/login_cs/home-img.png" alt="">
        </div>
    </section>

    <section class="#AboutUs" id="AboutUs">
        <h1 class="heading">About Us</h1>
            <div class="content">
            <p style="font-size: 1.7rem;color:#666;padding:1rem 0;text-align: justify">Welcome to our Food Recipe Website, your ultimate destination for culinary inspiration and delicious recipes! We are dedicated to bringing you a wide variety of mouthwatering dishes from around the world.
                At our website, we believe that cooking should be enjoyable and accessible to everyone. Whether you're a seasoned chef or a beginner in the kitchen, we've got you covered with easy-to-follow recipes that will tantalize your taste buds.
                Our extensive collection of recipes covers various cuisines, dietary preferences, and cooking styles. From comforting classics to innovative creations, you'll find recipes that suit every occasion and satisfy every palate.
                Looking for a quick weeknight dinner idea or planning a special feast for a gathering? Our search feature allows you to explore recipes based on ingredients, cooking time, and difficulty level, ensuring you find the perfect recipe to fit your needs.
                In addition to our diverse recipe database, we provide helpful cooking tips, techniques, and ingredient substitutions to enhance your culinary skills. Our blog section features articles on nutrition, kitchen hacks, and the latest food trends, keeping you informed and inspired on your cooking journey.
                Join our vibrant community of food enthusiasts, where you can connect with fellow home cooks, share your favorite recipes, and exchange cooking tips. Our interactive forums and social media channels provide a platform for food lovers to engage, learn, and celebrate the joys of cooking together.
                Whether you're seeking new flavors, exploring different cuisines, or simply looking to expand your recipe repertoire, our Food Recipe Website is your go-to resource. Get ready to embark on a culinary adventure with us and create unforgettable meals that will delight your family and friends!
              
            </p>
            </div>
        </div>
    </section>
    
    <section class="Gallery" id="Gallery">
        <h1 class="heading"> our food <span> Gallery </span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="/login_cs/g-1.jpg" alt="">               
            </div>
            <div class="box">
                <img src="/login_cs/g-2.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-3.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-4.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-5.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-6.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-7.jpg" alt="">
            </div>
            <div class="box">
                <img src="/login_cs/g-8.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="Contact" id="Contact">
        <h1 class="heading"> <span>Contact</span> now </h1>
        <br><p><b>Contact us : +91 88888 88888 / 89</b></p>
        <p><b>Email : foodrecipe@gmail.com</b></p>
    </section>

    <section class="footer">
        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">pinterest</a>
            <a href="#" class="btn">linkedin</a>
        </div>
    </section>

</body>
</html>