<!--
#DC3D24
#232B2B
#FFFFFF
#E3AE57
--->
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Foliot | Администратор | Антикафе FreshTime</title>
	<style type="text/css" media="screen, print, projection">
	:root{
    --color-yellow: #E3AE57;
		--color-black-shadow: #404040;
		--color-fon: #E2EF70;
		--color-barrier: #f93073;
		--color-top-panel: #3772FF;
		--color-main: #70E4EF;
		--color-left-panel: #F038FF;
		--color-sidebar: #EF709D;
		--color-icons: #FFFFFF;
		--color-icon:  #3772FF;
		--color-icon-focus:  #0039bf;
  }
	@font-face {
    font-family: Amaltea; /* Гарнитура шрифта */
    src: url(fonts/11664.ttf); /* Путь к файлу со шрифтом */
  }
	body,
	html {
		margin:0;
		padding:0;
		color:#000;
		background: var(--color-fon);
	}
	#wrap {
		width: 100%;
		margin: 0 auto;
		float: left;
	  background: var(--color-sidebar);
	}

	#top-panel {
		float: left;
		width: 100%;
		height: 80;
		margin:0 auto;
	  background: var(--color-top-panel);
	}

	#left-panel {
		width: 70px;
		height: calc(100% + 28px);
		float: left;
		margin:0 auto;
	  background: var(--color-left-panel);
		border-right: 8px solid var(--color-barrier); /* Параметры линии */
		box-shadow: -2px 5px 31px 0px var(--color-black-shadow);
	}

	#nav ul {
		margin:0;
		padding:0;
		list-style:none;
    }
  #nav li {
		display:inline;
		margin:0;
		padding:0;
    }

	#icon-in-left-panel{
		/* Переход */
		-webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
		/**/
		padding: 10px 10px;
		margin: 10px 5px;
		background-color: var(--color-icon);
		border-radius: 5px;

	}

	#icon-in-left-panel:hover{
		background-color: var(--color-icon-focus);
		border-radius: 20px;
	}

	#icon-calendar{
		background: url("img/icons/calendar-and-clock.png");
		background-size: 40px 40px;
    width: 40px;
    height: 40px;
	}

	#header {
		padding: 20px 10px;
		margin: 15px, 15px; /*описывает верхний и нижний, правый и левый отступы*/
		width: auto;
		border-radius: 10px;
    }

  h1 {
		margin:0;
		color: #f499db;
		text-shadow: 1px 1px 10px var(--color-black-shadow);
		font-family: Amaltea, 'Amaltea One';
		font-size: 22pt;
    }

  #nav {
		padding:5px 10px;
		background: var(--color-navigation-bar);
    }

	#logo{
		float: left;
		padding:15px 37px 15px 10px;
		margin: 10px, 10px; /*описывает верхний и нижний, правый и левый отступы*/
		}

  #main {
		float:left;
		width: calc(100% - 385px);
		height: 100%;
		padding:10px;
		background: var(--color-main);
		color: #1f1f1f;
		border-top: 8px solid var(--color-barrier); /* Параметры линии */
		border-left: 8px solid var(--color-barrier); /* Параметры линии */
		border-right: 8px solid var(--color-barrier); /* Параметры линии */
		box-shadow: 5px 5px 31px 0px #404040;
    }
    h2 {
		argin:0 0 1em;
    }
  #sidebar {
		float:left;
		width: 250px;
		height: ;
		padding:10px;
		background: var(--color-sidebar);
		background: linear-gradient(to right, rgba(0, 0, 0, 0), var(--color-sidebar));
		border-top: 8px solid var(--color-barrier); /* Параметры линии */
    }

  #footer {
		clear:both;
		padding:5px 10px;
		background:#cc9;
    }
  #footer p {
		margin:0;
    }
	* html #footer {
		height:1px;
    }

	</style>

</head>
<body>


<div id="wrap">
 	 <div id="top-panel">
		 <img id="logo" src="img/foliot-60-60.png" border="0" width="50" height="50" alt="На главную" />
		 <div id="header">
			 <h1>Панель заказов</h1>
     </div>
   </div>
<div id="left-panel">
	 <a href="orders.php"><div id="icon-in-left-panel"> <div id="icon-calendar"> </div> </div> </a>
</div>

<!--
	<div id="nav">
		<ul>
			<li><a href="http://ruseller.com">Опция 1</a></li>
			<li><a href="http://ruseller.com">Опция 2</a></li>
			<li><a href="http://ruseller.com">Опция 3</a></li>
			<li><a href="http://ruseller.com">Опция 4</a></li>
			<li><a href="http://ruseller.com">Опция 5</a></li>
		</ul>
	</div>
-->
	<div id="sidebar">
		<h2>Дата брони</h2>
		<p>Выберите дату для проверки брони.</p>
		<ul>
			<li><a href="http://ruseller.com">25 Марта</a></li>
			<li><a href="http://ruseller.com">26 Марта</a></li>
			<li><a href="http://ruseller.com">27 Марта</a></li>
			<li><a href="http://ruseller.com">Ссылка 4</a></li>
			<li><a href="http://ruseller.com">Ссылка 5</a></li>
			<li><a href="http://ruseller.com">Ссылка 6</a></li>
			<li><a href="http://ruseller.com">Ссылка 7</a></li>
			<li><a href="http://ruseller.com">Ссылка 8</a></li>
			<li><a href="http://ruseller.com">Ссылка 9</a></li>
			<li><a href="http://ruseller.com">Ссылка 10</a></li>
			<li><a href="http://ruseller.com">Ссылка 11</a></li>
			<li><a href="http://ruseller.com">Ссылка 12</a></li>
			<li><a href="http://ruseller.com">Ссылка 13</a></li>
			<li><a href="http://ruseller.com">Ссылка 14</a></li>
			<li><a href="http://ruseller.com">Ссылка 15</a></li>
		</ul>
	</div>
	<div id="main">
		<h2>Колонка 1</h2>
		<p><a href="http://ruseller.com" target="_blank">RUSELLER.COM</a></p>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris
vel magna. Mauris risus nunc, tristique varius, gravida in, lacinia vel,
 elit. Nam ornare, felis non faucibus molestie, nulla augue adipiscing
mauris, a nonummy diam ligula ut risus. Praesent varius. Cum sociis
natoque penatibus et magnis dis parturient montes, nascetur ridiculus
mus.</p>
		<p>Nulla a lacus. Nulla facilisi. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Fusce pulvinar lobortis purus. Cum sociis
natoque penatibus et magnis dis parturient montes, nascetur ridiculus
mus. Donec semper ipsum et urna. Ut consequat neque vitae felis.
Suspendisse dapibus, magna quis pulvinar laoreet, dolor neque lacinia
arcu, et luctus mi erat vestibulum sem. Mauris faucibus iaculis lacus.
Aliquam nec ante in quam sollicitudin congue. Quisque congue egestas
elit. Quisque viverra. Donec feugiat elementum est. Etiam vel lorem.</p>
		<p>Aenean tempor. Mauris tortor quam, elementum eu, convallis a,
semper quis, purus. Cras at tortor in purus tincidunt tristique. In hac
habitasse platea dictumst. Ut eu lectus eu metus molestie iaculis. In
ornare. Donec at enim vel erat tempor congue. Nullam varius. Lorem ipsum
 dolor sit amet, consectetuer adipiscing elit. Nulla feugiat hendrerit
risus. Integer enim velit, gravida id, sollicitudin at, consequat sit
amet, leo. Fusce imperdiet condimentum velit. Phasellus nonummy interdum
 est. Pellentesque quam.</p>
		<h3>Consectetuer adipiscing elit</h3>
		<p>Nulla dictum. Praesent turpis libero, pretium in, pretium ac,
malesuada sed, ligula. Sed a urna eu ipsum luctus faucibus. Curabitur
fringilla. Suspendisse sit amet quam. Sed vel pede id libero luctus
fermentum. Vestibulum volutpat tempor lectus. Vivamus convallis tempus
ante. Nullam adipiscing dui blandit ipsum. Nullam convallis lacus ut
quam. Mauris semper elit at ante. Vivamus tristique. Pellentesque
pharetra ante at pede. In ultrices arcu vitae purus. In rutrum, erat at
mollis consequat, leo massa consequat libero, ac vestibulum libero
tellus sed risus. Lorem ipsum dolor sit amet, consectetuer adipiscing
elit.</p>
		<p>Maecenas eu velit nec magna venenatis consequat. In neque. Vivamus
pellentesque, lacus eu aliquet semper, lorem metus rhoncus metus, a
ornare orci ante a diam. Nunc sem nisl, aliquet quis, elementum nec,
imperdiet in, wisi. Proin in lorem. Etiam molestie diam eget ante. Morbi
 quis tortor id lacus mollis venenatis. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Aliquam vel orci sit amet tellus mollis
eleifend. Donec urna diam, viverra eget, ultricies gravida, ultrices eu,
 erat. Proin vel arcu. Sed diam. Cras hendrerit arcu sed augue. Sed
justo felis, luctus a, accumsan in, tincidunt facilisis, libero.
Phasellus eu eros.</p>

	</div>

	<div id="footer">
		<p>Сервис онлайн-бронирования Foliot.</p>
	</div>
</div>

</body></html>
