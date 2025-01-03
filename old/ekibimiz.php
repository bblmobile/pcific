<?php include "sections/head.php";?>
<title> Ekibimiz - PCIFIC ESPOR</title>
<?php include "sections/header.php";?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


<style>
	
.user-main
{
  background-color:#505050;
  width: 100%;
    border-radius: 10px;
    display: inline-block;
    padding: 70px 15px 20px;
    -webkit-transition: 0.4s all ease-in-out;
    -o-transition: 0.4s all ease-in-out;
    transition: 0.4s all ease-in-out;
    -webkit-box-shadow: 0 12px 43px 0 rgba(0,0,0,.13);
    box-shadow: 0 12px 43px 0 rgba(0,0,0,.13);
}

.user-img
{
  width: 130px;
    height: 130px;
    overflow: hidden;
    border-radius: 100%;
    position: absolute;
    top: -75px;
    left: 25px;
}

.user-img:after {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    border-radius: 100%;
    border: 3px solid #42C1DD;
    z-index: 1;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
}

.user-name
{
  
}

.user_social
{
  bottom: 30px;
    right: 25px;
    position: absolute;
    z-index: 0;
}

.user_social ul {
    opacity: 0;
    margin-bottom: 15px;
    font-size: 14px;
    padding-top: 10px;
    visibility: hidden;
    position: relative;
    top: -50px;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
}

.ul-li-block ul {
    margin: 0;
    padding: 0;
}

.user_social li {
    color: #fff;
    text-align: center;
    margin-top: 15px;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
}

.user_social ul li {
    list-style: none;
    display: block;
}

.user-main:hover {
    -webkit-box-shadow: 0 23px 43px 0 rgba(0,0,0,.26);
    box-shadow: 0 23px 43px 0 rgba(0,0,0,.26);
}

.user-main:hover ul {
    top: 0;
    -webkit-transition-delay: 0.5s;
    -o-transition-delay: 0.5s;
    transition-delay: 0.5s;
    opacity: 1;
    visibility: visible;
}

.s2-mem_social {
    bottom: 30px;
    right: 15px;
    position: absolute;
    z-index: 0;
}

.user-main ::selection {
    color: #fff;
    background-color: #6e3ebf;
}

.user_social:after {
    bottom: 20px;
    z-index: -1;
    content: "";
    width: 50px;
    height: 0%;
    opacity: 0;
    border-radius: 35px;
    position: absolute;
    visibility: hidden;
    background-color: #53117f;
    -webkit-transition: 0.5s all ease-in-out;
    -o-transition: 0.5s all ease-in-out;
    transition: 0.5s all ease-in-out;
}

.s2-team_img_text:hover .s2-share_btn {
    background-color: #42C1DD;
}

.s2-share_btn {
    height: 50px;
    width: 50px;
    line-height: 50px;
    border-radius: 100%;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
    background-color: #42C1DD;
}

.s2-share_btn i {
    color: #fff;
}

.user_social:after {
    bottom: 20px;
    z-index: -1;
    content: "";
    width: 50px;
    height: 0%;
    opacity: 0;
    border-radius: 35px;
    position: absolute;
    visibility: hidden;
    background-color: #53117f;
    -webkit-transition: 0.5s all ease-in-out;
    -o-transition: 0.5s all ease-in-out;
    transition: 0.5s all ease-in-out;
}

.user-designation {
    font-size: 15px;
    font-weight: 500;
    color: #42C1DD;
}

.user-headline h3 {
    font-size: 22px;
    padding-bottom: 5px;
}

.user_contact span i {
    color: #42C1DD;
    margin-right: 8px;
}

.user_contact span {
    font-size: 15px;
    color: #737272;
    display: block;
    margin-bottom: 5px;
}

.user_contact {
    padding-top: 25px;
}

.user_img:before
{
  position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    border-radius: 100%;
    border: 3px solid #42C1DD;
    z-index: 1;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
}

.user-main:hover .user-img::after
{
  opacity: 1;
    visibility: visible;
}

.user_social::after {
    bottom: 20px;
    z-index: -1;
    content: "";
    width: 50px;
    height: 0%;
    opacity: 0;
    border-radius: 35px;
    position: absolute;
    visibility: hidden;
    background-color: #53117f;
    -webkit-transition: 0.5s all ease-in-out;
    -o-transition: 0.5s all ease-in-out;
    transition: 0.5s all ease-in-out;
  background-image: radial-gradient(circle at top right, rgb(36, 9, 119) 0%, rgb(36, 9, 119) 48%,rgb(72, 7, 149) 48%, rgb(72, 7, 149) 53%,rgb(109, 5, 178) 53%, rgb(109, 5, 178) 56%,rgb(145, 2, 208) 56%, rgb(145, 2, 208) 69%,rgb(181, 0, 237) 69%, rgb(181, 0, 237) 100%);
}

.user-main:hover .user_social::after {
    height: 100%;
    bottom: 0;
    opacity: 1;
    visibility: visible;
}

.user_social li a {
    color: #fff !important;
    text-align: center;
    margin-top: 15px;
    -webkit-transition: 0.3s all ease-in-out;
    -o-transition: 0.3s all ease-in-out;
    transition: 0.3s all ease-in-out;
}


.user-img svg

{
  padding: 10px;
    background-image: radial-gradient(circle at bottom left, rgb(242, 242, 242) 0%, rgb(242, 242, 242) 6%,rgb(238, 238, 238) 6%, rgb(238, 238, 238) 15%,rgb(234, 234, 234) 15%, rgb(234, 234, 234) 47%,rgb(230, 230, 230) 47%, rgb(230, 230, 230) 54%,rgb(225, 225, 225) 54%, rgb(225, 225, 225) 56%,rgb(221, 221, 221) 56%, rgb(221, 221, 221) 90%,rgb(217, 217, 217) 90%, rgb(217, 217, 217) 100%);
}
	</style>
<main>
        <section class="section-hero-4 position-relative  bg-black-2 pt-120 pb-120">
          
			  <div class="container">

    <div class="row">
      <div class="col-sm-12 col-md-12 text-center mb-5 mt-5">
		  <h3> Ekibimiz </h3>
      </div>
    </div>
    
    <div class="row">

      <div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/kaan.jpg">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Kaan Karapınar</h3>
              <span class="user-designation">Founder</span>
              
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		 <div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/derya.jpg">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Derya Üçpınar</h3>
              <span class="user-designation">General Manager</span>
            
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		
		 <div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/osman.jpg">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Osman Kamış</h3>
              <span class="user-designation">General Coordinator</span>
              
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		 <div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/berke.png">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Berke Özmen</h3>
              <span class="user-designation">Director of Operations</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/tunay.png">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Tunay Baybüre</h3>
              <span class="user-designation">Project Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/efe.jpg">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Efe Avkar</h3>
              <span class="user-designation">Valorant Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/berkay.png">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Berkay Ortanca</h3>
              <span class="user-designation">Scout & Performance Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/baha.jpg">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Baha Şengül</h3>
              <span class="user-designation">League of Legends Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/ayhan.png">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Ayhan Kasapoğlu</h3>
              <span class="user-designation">EA FC Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
		
		<div class="col-sm-3 col-md-3 mt-10 position-relative">
        <div class="user-main">

          <div class="user-img">
            <img src="/assets/team/ahmet.png">
          </div>

          <div class="user-name">
            <div class="user-headline">
              <h3>Ahmet İslam Güney</h3>
              <span class="user-designation">Digital Product Manager</span>
             
            </div>
          </div>

          <div class="user_social ul-li-block">
            <ul>
     <li><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="s2-share_btn text-center"><i class="fas fa-user"></i></div>
          </div>
          

        </div>
      </div>
      
     
   
      
      

    </div>

  </div>
			
        </section>


	
        <!-- Insta 1 -->
        <div class="section-insta-1 position-relative">
            <div class="position-relative z-0">
                <!-- Swiper -->
                <div class="swiper slider-5">
                    <div class="swiper-wrapper z-1">
                        <div class="swiper-slide">
                    <img src="assets/imgs/insta/insta-1/img-1.png" alt="pcific">
                </div> 
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-2.png" alt="pcific">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-3.png" alt="pcific">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-4.png" alt="pcific">
                        </div>
						<div class="swiper-slide">
                    <img src="assets/imgs/insta/insta-1/img-5.png" alt="pcific">
                </div> 
						  <div class="swiper-slide">
                    <img src="assets/imgs/insta/insta-1/img-1.png" alt="pcific">
                </div> 
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-2.png" alt="pcific">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-3.png" alt="pcific">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/imgs/insta/insta-1/img-4.png" alt="pcific">
                        </div>
						<div class="swiper-slide">
                    <img src="assets/imgs/insta/insta-1/img-5.png" alt="pcific">
                </div> 
                    </div>
                </div>
                <!-- Swiper JS -->
                <div class="position-absolute top-50 start-50 translate-middle z-2">
                    <a href="https://www.instagram.com/" class="btn btn-primary">
                        <i class="bi bi-instagram me-1"></i>
                       Instagram'da Bizi Takip Edin
                    </a>
                </div>
            </div>
        </div>

    </main>
<?php include "sections/footer.php";?>
<?php include "sections/footer-scripts.php";?>