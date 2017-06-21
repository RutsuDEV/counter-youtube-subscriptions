			<div class="jumbotron">
			  <h1 class="display-3">Witamy na stronie</h1>
			  <p class="lead">Serwis powstał aby pokazywać subskrybcje innych użytkowników</p>
			  <hr class="my-4">
			  <p>Wystarczy że wpiszesz nazwę użytkownika lub ID konta a wyświetlimy je</p>
			  <p>ID konta jest umiejscowione w np. w adresie (http://www.youtube.pl/channel/<b>{ID}</b>)</p>
			  <div class="lead center">
					<form class="form-inline" action="subs.php" method="get">
						<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">http://youtube.com/c/</span>
						<input type="text" class="form-control" placeholder="Nazwa użytkownika" aria-describedby="sizing-addon2" name="username">
						</div>
						<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">http://youtube.com/channel/</span>
						<input type="text" class="form-control" placeholder="ID Kanału" aria-describedby="sizing-addon2" name="id">
						</div>
					  <button class="btn btn-block bg-primary text-white" type="submit">Sprawdź <span class="fa fa-search"></span></button>
					</form>
			  </div>
			</div>