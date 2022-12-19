<?

require "includes/config.php";

getHead("Главная");

?>
	<body>
		<?getHeader()?>
		<div class="container">
			<div class="main">
				<h2 class="main__title">Новые объявления</h2>
				<div class="main__new row row-cols-6">
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover5.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="lost">Потерян</p>
								<p>12.11.22 в 12:02</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover2.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="find">Найден</p>
								<p>16.11.22 в 20:03</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover3.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="lost">Потерян</p>
								<p>23.11.22 в 14:45</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover6.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="lost">Потерян</p>
								<p>27.11.22 в 17:15</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover4.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="find">Найден</p>
								<p>09.12.22 в 14:12</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="main__new-body">
							<img src="assets/img/cover.jpg" alt="" class="main__new-img">
							<div class="main__new-text">
								<p class="lost">Потерян</p>
								<p>15.12.22 в 15:41</p>
							</div>
						</div>
					</div>
				</div>
				<div class="main__half row">
					<div class="col-6">
						<h2 class="main__title">Добавить объявление</h2>
						<form class="main__add" method="GET" action="/add" style="flex-grow">
							<div class="main__add-radio">
								<label class="i-r">
									<input type="radio" name="status" value="find">
									<span>Найдено</span>
								</label>
								<label class="i-r">
									<input type="radio" name="status" value="lost">
									<span>Потеряно</span>
								</label>
							</div>
							<div class="main__add-radio">
								<label class="i-r">
									<input type="radio" name="type" value="dog">
									<span>Собака</span>
								</label>
								<label class="i-r">
									<input type="radio" name="type" value="cat">
									<span>Кот</span>
								</label>
							</div>
							<button>Продолжить</button>
						</form>
					</div>
					<div class="col-6">
						<h2 class="main__title">Недавно просмотренные</h2>
						<div class="row row-cols-3">
							<style>
								header,.main__add,.main__new-text{
									background: #fff;
									border-radius: 14px;
								}
								
								body{
									background-color: #fdfdfd;
    background-image: radial-gradient(circle, #ddd 1px, rgba(0,0,0,0) 1px);
    background-size: 1rem 1rem
								}
								.main__new-img{
									height: 150px;
									object-fit: cover;
								}
								.main__story img{
									height: 150px;
									object-fit: cover;
									border: 1px solid rgb(210,210,210);
								}
							</style>
							<a href="#" class="main__story col">
								<img src="assets/img/cover2.jpg" alt="">
							</a>
							<a href="#" class="main__story col">
								<img src="assets/img/cover5.jpg" alt="">
							</a>
							<a href="#" class="main__story col">
								<img src="assets/img/cover6.jpg" alt="">
							</a>
							<a href="#" class="main__story col">
								<img src="assets/img/cover4.jpg" alt="">
							</a>
							<a href="#" class="main__story col">
								<img src="assets/img/cover3.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/app.min.js"></script>
	</body>
</html>