<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<title>Nivelamento</title>
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="faixa">
			<h1><img src="img/uk.png" alt="uk flag">   Placement Test   <img src="img/us.png" alt="us flag"></h1>
		</div>
		<div id="container">
			<form method="POST" action="resultado.php">
				<h2>Informações pessoais:</h2>
				<p>Digite seu Nome Completo: <input type="text" name="nome" placeholder="Nome completo"></p>
				<p>Informe sua data de nascimento: <input type="date" name="nascimento"></p>
				<p>Informe seu gênero:<select name="genero" placeholder="Escolha uma opção:">
						<option value="ND">Escolha uma opção:</option>
						<option value="M">Masculino</option>
						<option value="F">Feminino</option>
						<option value="ND">Não declarado</option>
					</select></p>
			<h2>Dados de Contato:</h2>
				<p>Informe seu endereço: <input type="text" name="endereco" placeholder="Endereço"></p>
				<p>Informe seu CEP: <input type="text" name="cep" placeholder="CEP"></p>
				<p>Infome seu endereço de E-Mail: <input type="text" name="email" placeholder="Melhor e-mail"></p>
				<p>Informe seu telefone: <input type="text" name="telefone" placeholder="Telefone para contato"></p>
		</div>
		<div id="faixa">
				<h2><strong>Mark the correct letter:</strong></h2>
		</div>		
		<div id="container">

				<strong><p>01 - I’m 18 and my brother is 20, so he’s ....... me.</p></strong>

				a) <input type="radio" name="questao01" value="a">the oldest of<br>
				b) <input type="radio" name="questao01" value="b">older than<br>
				c) <input type="radio" name="questao01" value="c">as old as<br>

				<strong><p>02 - Carl’s very ....... He’s never late, and he never forgets to do things.</p></strong>

				a) <input type="radio" name="questao02" value="a">reliable<br>
				b) <input type="radio" name="questao02" value="b">patient<br>
				c) <input type="radio" name="questao02" value="c">strict<br>

				<strong><p>03 - We stayed in a lovely villa ....... the sea.</p></strong>

				a) <input type="radio" name="questao03" value="a">it overlooks<br>
				b) <input type="radio" name="questao03" value="b">overlooked<br>
				c) <input type="radio" name="questao03" value="c">overlooking<br>

				<strong><p>04 - Not until the 1980s ....... for the average person to own a computer.</p></strong>

				a) <input type="radio" name="questao04" value="a">it was possible<br>
				b) <input type="radio" name="questao04" value="b">was it possible<br>
				c) <input type="radio" name="questao04" value="c">was possible<br>

				<strong><p>05 - Jan ....... her arm on a hot iron.</p></strong>

				a) <input type="radio" name="questao05" value="a">broke<br>
				b) <input type="radio" name="questao05" value="b">burned<br>
				c) <input type="radio" name="questao05" value="c">sprained<br>


				<strong><p>06 - Tomorrow's a holiday, so we ....... go to work.</p></strong>

				a) <input type="radio" name="questao06" value="a">have to<br>
				b) <input type="radio" name="questao06" value="b">mustn't<br>
				c) <input type="radio" name="questao06" value="c">don't have to<br>

				<strong><p>07 - I usually ....... swimming at least once a week.</p></strong>
				a) <input type="radio" name="questao07" value="a">go<br>
				b) <input type="radio" name="questao07" value="b">do<br>
				c) <input type="radio" name="questao07" value="c">play<br>

				<strong><p>08 - My friend Siena ....... to Russia last year. </p></strong>

				a) <input type="radio" name="questao08" value="a">went</br>
				b) <input type="radio" name="questao08" value="b">has gone<br>
				c) <input type="radio" name="questao08" value="c">as been<br>

				<strong><p>09 - This is ....... area, with a lot of factories and warehouses.</p></strong>

				a) <input type="radio" name="questao09" value="a">an agricultural</br>
				b) <input type="radio" name="questao09" value="b">an industrial<br>
				c) <input type="radio" name="questao09" value="c">a residential<br>

				<strong><p>10 - If I ....... well in my exams, I ....... to university.</p></strong>

				a) <input type="radio" name="questao10" value="a">will do; will go</br>
				b) <input type="radio" name="questao10" value="b">will do; go<br>
				c) <input type="radio" name="questao10" value="c">do; will go<br>

				<strong><p>11 - She was so upset that she burst ....... tears.</p></strong>

				a) <input type="radio" name="questao11" value="a">into</br>
				b) <input type="radio" name="questao11" value="b">out<br>
				c) <input type="radio" name="questao11" value="c">with<br>

				<strong><p>12 - Where did you go ....... holiday last year?</p></strong>

				a) <input type="radio" name="questao12" value="a">for</br>
				b) <input type="radio" name="questao12" value="b">on<br>
				c) <input type="radio" name="questao12" value="c">to<br>

				<strong><p>13 - Ocean currents ....... play an important part in regulating global climate.</p></strong>

				a) <input type="radio" name="questao13" value="a">are known to</br>
				b) <input type="radio" name="questao13" value="b">thought to<br>
				c) <input type="radio" name="questao13" value="c">are believed that they<br>


				<strong><p>14 - My cousin ....... getting a job in Bahrain.</p></strong>

				a) <input type="radio" name="questao14" value="a">would like<br>
				b) <input type="radio" name="questao14" value="b">is planning<br>
				c) <input type="radio" name="questao14" value="c">is thinking of<br>

				<strong><p>15 - I can’t ....... your hair, because I haven’t got any scissors.</p></strong>

				a) <input type="radio" name="questao15" value="a">brush<br>
				b) <input type="radio" name="questao15" value="b">cut<br>
				c) <input type="radio" name="questao15" value="c">wash<br>

				<strong><p>16 - I wish I ....... have an exam tomorrow!</p></strong>

				a) <input type="radio" name="questao16" value="a">don’t</br>
				b) <input type="radio" name="questao16" value="b">didn’t<br>
				c) <input type="radio" name="questao16" value="c">won’t<br>

				<strong><p>17 - The government plans ....... to	taxes on sales of luxury items.</p></strong>

				a) <input type="radio" name="questao17" value="a">increase </br>
				b) <input type="radio" name="questao17" value="b">expand<br>
				c) <input type="radio" name="questao17" value="c">go up<br>

				<strong><p>18 - When I first moved to Hong Kong, life in a different country was very strange, but now I’m used ....... here.</p></strong>

				a) <input type="radio" name="questao18" value="a">living</br>
				b) <input type="radio" name="questao18" value="b">to live<br>
				c) <input type="radio" name="questao18" value="c">to living<br>

				<strong><p>19 - There ....... milk in the fridge.</p></strong>

				a) <input type="radio" name="questao19" value="a">is some </br>
				b) <input type="radio" name="questao19questao19" value="b">are some<br>
				c) <input type="radio" name="questao19" value="c">is a<br>


				<strong><p>20 - Criminals are people who are guilty of ........ the law. </p></strong>

				a) <input type="radio" name="questao20" value="a">breaking </br>
				b) <input type="radio" name="questao20" value="b">cheating<br>
				c) <input type="radio" name="questao20" value="c">committing<br>
		

				<strong><p>21 - Why on earth isn’t Josh here yet? ....... for him for over an hour!</p></strong>

				a) <input type="radio" name="questao21" value="a">I’m waiting</br>
				b) <input type="radio" name="questao21" value="b">I’ve been waiting<br>
				c) <input type="radio" name="questao21" value="c">I’ve waited<br>


				<strong><p>22 - “It’s pouring down, and it’s freezing.” What are the weather conditions? </p></strong>

				a) <input type="radio" name="questao22" value="a">high winds and snow</br>
				b) <input type="radio" name="questao22" value="b">heavy rain and cold temperatures<br>
				c) <input type="radio" name="questao22" value="c">thick cloud but quite warm<br>

				
				<strong><p>23 - ....... feeling OK? You don’t look very well.</p></strong>

				a) <input type="radio" name="questao23" value="a">Do you</br>
				b) <input type="radio" name="questao23" value="b">You are<br>
				c) <input type="radio" name="questao23" value="c">Are you<br>


				<strong><p>24 - Daniel’s hair is getting far too long; he should ....... soon.</p></strong>

				a) <input type="radio" name="questao24" value="a">cut it</br>
				b) <input type="radio" name="questao24" value="b">have cut it<br>
				c) <input type="radio" name="questao24" value="c">have it cut<br>


				<strong><p>25 - Mandy works for a computer software company. She got ....... recently, and so now she’s an area manager.</p></strong>

				a) <input type="radio" name="questao25" value="a">made redundant</br>
				b) <input type="radio" name="questao25" value="b">promoted<br>
				c) <input type="radio" name="questao25" value="c">a raise<br>

			</div>
			<div align="center">
				<br><input type="Submit" id="submit" value="Finish Test">
			</div><br>
			
			<br><div id="logo">
				<img src="img/cosvib.png">
			</div>
		</form>
	</body>
</html>
