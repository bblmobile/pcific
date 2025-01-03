<?php include "../sections/head.php";?>
<title> PCF Loita - PCIFIC ESPOR</title>
<?php include "../sections/header.php";?>
<style>
.team {
  display: flex;
  justify-content: center;
  gap: 10px; /* Oyuncular arasında boşluk */
}

.player {
  position: relative;
  width: 300px; /* Görsel boyutuna göre ayarlayın */
  height: 530px; /* Görsel boyutuna göre ayarlayın */
  margin: -20px;
  transition: filter 0.3s ease, opacity 0.3s ease;
}

.player img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: contain;
	    object-position: bottom;
}

/* Tüm oyuncular varsayılan durumda net görünür */
.team .player {
  opacity: 1;
  filter: grayscale(0%);
	z-index:1;
}

/* Hover durumunda diğer oyuncular gri ve %50 opak olur */
.team:hover .player {
  opacity: 0.5;
  filter: grayscale(100%);
	z-index:0;
}

/* Hover edilen oyuncu parlak ve net kalır */
.team .player:hover {
  opacity: 1;
  filter: grayscale(0%);
	z-index: 99;
    scale: 1.08;
}

/* Başlık ve metin için stil */
.info {
  position: absolute;
  bottom: -50px; /* Görselin hemen altına yerleştir */
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  opacity: 0; /* Varsayılan olarak görünmez */
  transition: opacity 0.3s ease-in-out;
  color: white; /* Metin rengi */
  background-color: rgba(0, 0, 0, 0.7); /* Şeffaf arka plan */
  padding: 10px;
  border-radius: 8px;
  font-size: 14px;
  width: 100%;
}

/* Hover edilen oyuncunun bilgisi görünsün */
.player:hover .info {
  opacity: 1;
}

</style>
<main>
	 	 <section class="section-hero-4 position-relative" style="margin:40px">
            <div class="container">
				<div class="row " style="margin-bottom:40px">
					<div class="text-center">
						<img src="/assets/icon-white.png" style="width:50px; margin-bottom:30px">
						</div>
					</div>
                <div class="row flex-nowrap">
					
					<div class="col-md-6 col-12 order-2 order-md-1 d-flex justify-content-center align-items-center">
					<h3>Utku "Loita" Kart</h3>
					</div>
					
					<div class="col-md-6 col-12 order-1 order-md-2 text-center">
					<img src="/valorant/p-1.png" alt="PCF Loita">
					</div>
					
                </div>
            </div>
        </section>   
	




    </main>
<?php include "../sections/footer.php";?>
<?php include "../sections/footer-scripts.php";?>