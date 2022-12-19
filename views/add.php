<? require "includes/config.php";

	getHead("Добавить новый пост");

	function ifExists($getName, $getValue){
		if(isset($_GET[$getName]) and $_GET[$getName] == $getValue){
			echo 'checked';
		}
	}

?>
	<body>
		<? getHeader() ?>
		<div class="container">
			<form class="add" method="post" action="">
				<div class="add__block add__image">
					<label>
						<input accept="image/*" type='file' id="imgInp">
						<span class="add__title">Добавить изображение *</span>
						<button id="delbt" style="display: none;" onclick="deletephoto()">Удалить</button>
					</label>
					<img id="blah" src="#" onerror='this.style.display = "none"'/>
				</div>
				<div class="add__block">
					<h3 class="add__title pb-3">Основная информация *</h3>
					<div class="d-flex pt-3">
						<label class="i-r me-3">
							<input type="radio" name="status" value="lost" <? ifExists('status', 'lost')?>>
							<span>Потеряно</span>
						</label>
						<label class="i-r">
							<input type="radio" name="status" value="find" <? ifExists('status', 'find')?>>
							<span>Найдено</span>
						</label>
					</div>
					<div class="d-flex pt-3">
						<label class="i-r me-3">
							<input type="radio" name="type" value="cat" <? ifExists('type', 'cat')?>>
							<span>Кот</span>
						</label>
						<label class="i-r">
							<input type="radio" name="type" value="dog" <? ifExists('type', 'dog')?>>
							<span>Собака</span>
						</label>
					</div>
					<div class="add__select pt-3">
						<select name="r" class="add__select-magic" aria-describedby="rions" id="rions" required>
							<option selected value="" disabled>Выберите район</option>
							<? getR($r) ?>
						</select>
					</div>
					<div class="add__input">
						<label class="pt-3">
							<span>Дата потери</span>
							<input type="text">
						</label>

					</div>
					<div class="add__textarea">
						<label class="d-flex flex-column">
							<span>Описание</span>
							<textarea name="" id="textarea" cols="30" rows="10"></textarea>
							<p style="margin: 5px 0 0 auto; opacity: 0.5" id="count"></p>
						</label>
					</div>
				</div>
				<button class="btn-black">Отправить</button>
			</form>
		</div>
		
		<script src="js/app.min.js?_v=20221212174230"></script>
		<script>
			imgInp.onchange = evt => {
				const [file] = imgInp.files
				if (file) {
					blah.src = URL.createObjectURL(file);
					blah.style.display="block";
					delbt.style.display="inline";
				}
			}
			function deletephoto(){
				delbt.style.display="none";
				blah.src= 0;
			}
			document.getElementById('textarea').onkeyup = function () {
				if(this.value.length > 200){
					this.value = this.value.substr(0,200);
				}else{
					document.getElementById('count').innerHTML = "Осталось символов: " + (200 - this.value.length);
				}
				
			};
		</script>
		<script src="js/bootstrap.bundle.min.js?_v=20221212174230"></script>
	</body>
</html>