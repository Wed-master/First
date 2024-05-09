<head>
      <title>State Defence 2</title>
      <link rel="icon" href="ikon.ico">

  </head>

  <body>
  !ошибка!
  <script src=script.js type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
      });

      document.body.onkeydown = function(e) {
          if(event.keyCode == 123) {
              console.log('You cannot inspect Element');
              return false;
          }
          if(e.ctrlKey && e.shiftKey && e.keyCode == 'i'.charCodeAt(0)) {
              console.log('You cannot inspect Element');
              return false;
          }
          if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
              console.log('You cannot inspect Element');
              return false;
          }
          if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
              console.log('You cannot inspect Element');
              return false;
          }
          if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
              console.log('You cannot inspect Element');
              return false;
          }
      }
      // prevents right clicking
      document.addEventListener('contextmenu', e => e.preventDefault());
      var JON, JONK, pers = [], hod = 0, comp, cheL = [-100], cheL2 = [-100], chel, chel2, pl = [];
      var tor = ((parseInt(window.innerHeight) - 275) / 2), left = ((parseInt(window.innerWidth) - 610) / 2)
      function out(a) {
          scren.innerHTML += a;
      }
      function rand(min, max) {
          return Math.trunc(min + Math.random() * (max + 1 - min));
      }
      function findB(x, y) {
          for (var i = 0; i < 8; i++) {
              if (yo[i][0] == x && yo[i][1] == y) {
                  return i;
              }
          }
          return -1;
      }
      var gift2 = ['<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=cup.png width=45 height=45><br>x15</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=cup.png width=45 height=45><br>x15</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x2</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mega.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x2</br>', '<img src=mony.png width=45 height=45><br>x6</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mega.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=big.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=leg.png width=60 height=60>'], gift3 = ['<img src=mony.png width=45 height=45><br>x10</br>', '<img src=prof2.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=small.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=big.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=gem.png width=45 height=45><br>x5</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=prof0.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=gem.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=small.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=big.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=gem.png width=45 height=45><br>x5</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=prof1.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=small.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=big.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=gem.png width=45 height=45><br>x5</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=ord.png width=45 height=45><br>x3</br>', '<img src=prof3.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>','<img src=mony.png width=45 height=45><br>x10</br>','<img src=small.png width=70 height=70>','<img src=big.png width=70 height=70>','<img src=ord.png width=45 height=45><br>x3</br>','<img src=small.png width=70 height=70>','<img src=prof27.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mony.png width=45 height=45><br>x10</br>', '<img src=mega.png width=70 height=70>', '<img src=mega.png width=70 height=70>','<img src=mony.png width=45 height=45><br>x10</br>','<img src=small.png width=70 height=70>','<img src=big.png width=70 height=70>','<img src=ord.png width=45 height=45><br>x3</br>','<img src=small.png width=70 height=70>','<img src=leg.png width=70 height=70>'], gift = ['<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=cup.png width=45 height=45><br>x15</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=cup.png width=45 height=45><br>x15</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x2</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mega.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x2</br>', '<img src=mony.png width=45 height=45><br>x6</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=small.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mega.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=big.png width=60 height=60>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=mony.png width=45 height=45><br>x5</br>', '<img src=ord.png width=45 height=45><br>x1</br>', '<img src=leg.png width=60 height=60>'], bnb = [], bnb2 = [], bnb3 = [], prof = ['prof5.png', 'prof2.png', 'prof0.png', 'prof1.png', 'prof3.png', 'prof4.png', 'prof7.png', 'prof8.png', 'prof9.png', 'prof10.png', 'prof11.png', 'prof13.png', 'prof14.png', 'prof15.png', 'prof16.png', 'prof17.png', 'prof18.png', 'prof19.png', 'prof20.png','prof21.png','prof22.png','prof23.png','prof24.png','prof26.png','prof27.png','prof29.png','prof31.png'], img = ['hero5.png', 'hero2.png', 'hero0.png', 'hero1.png', 'hero3.png', 'hero4.png', 'hero7.png', 'hero8.png', 'hero9.png', 'hero10.png', 'hero11.png', 'hero13.png', 'hero14.png', 'hero15.png', 'hero16.png', 'hero17.png', 'hero18.png', 'hero19.png', 'hero20.png','hero21.png','hero22.png','hero23.png','hero24.png','hero26.png','hero27.png','hero29.png','hero31.png'], nam = ['Рыцарь', 'Эль Джоно', 'Король змей', 'Риндз', 'Джо', 'Cенсей', 'Сёгун', 'Опустошитель', 'Странник', 'Стальной', 'Фил', 'Джинн', 'Некрос', 'Буревестник', 'Адский воин', 'Анубис', 'Шериф', 'Клевенс', 'Призрак', 'Страж леса', 'Шаман','Капитан','Взрывной','Оверлорд','Колдун','Эйс','Рыцарь тьмы','Легионер','Воин льдов','Скала','Ниндзя-кот','Зевс','Охотник','Фейс','Вождь-Друид','Золотой мастер','Царь моря','Турбо'], red = ['обычный', 'обычный', 'эпический', 'эпический', 'обычный', 'мифический', 'эпический', 'легендарный', 'мифический', 'эпический', 'обычный', 'эпический', 'мифический', 'обычный', 'мифический', 'легендарный', 'эпический', 'мифический', 'эпический', 'мифический', 'обычный','эпический','обычный','легендарный','эпический','мифический','легендарный','страж','страж','страж','обычный','страж','мифический','обычный','генерал','генерал','мифический','легендарный'], clas = ['рукопашка', 'странник', 'маг', 'убийца', 'убийца', 'странник', 'полководец', 'воин', 'полководец', 'убийца', 'изобретатель', 'рукопашка', 'маг', 'воин', 'нечисть', 'бог', 'убийца', 'изобретатель', 'нечисть','маг','маг','странник','убийца','рукопашка','маг','рукопашка','повелитель','убийца','странник','поддержка','рукопашка','бог','убийца','поддержка','воин','маг','повелитель','изобретатель'], bio = ['Рыцарь - бестрашный и благородный воин. Очень силён.', 'Эль Джоно - странник блуждающий по миру и поющий везде свои песни. Его песни зачарованные и лечат раны.', 'Король змей - великий владыка змей. Очень самолюбив и горд. Его способность отравляет противника.', 'Риндз - великий воин','','','','','','','','','','','','','','','','','','','','','','','','Легионер - страж первой гильдии. Как и все стражи он особен: никогда не атакует, а только появляется во время способности.'], foto = 'profile.png', time = 0, date = new Date, gem = 0, mony = 10000, ord = 0, who, have = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17], skill = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], k = 0, pal = -1, PUSK = 0, DW = 0, X, Y, X1, Y1, pal1 = -1, pal2 = -1, tor = 0, left = 0, kop = 4, xh = [140], yh = [305], AT = false, at = [400, 320, 100, 450, 80, 380, 400, 200, 400, 200, 220, 410, 300, 350, 300, 110, 340, 380], hp = [3800, 4300, 4000, 4200, 3200, 4100, 3600, 5200, 3700, 4000, 4000, 3900, 4200, 4100, 4000, 3900, 3800, 4000], V = [2.1, 1.5, 0.6, 2.2, 0.5, 1.8, 1.6, 1.6, 1.7, 1, 1.3, 2.1, 1.5, 1.7, 1.5, 1.3, 2.2, 1.9,1.7,1.7,1.6, 1.8, 1.5, 1.3, 1.95,1.7,1.5,6,7,6,1,8,1.6,0.6,4,5,1.85,2.3], zas = [100, 50, 10, 10, 200, 20, 50, 20, 50, 100, 150, 120, 50, 100, 110, 150, 120, 50, 100, 110, 150, 200, 100], hpB = [], hpP = 0, hpP1, pkol = 0, dal = [1.7, 2.3, 0.9, 1, 1.2, 1.2, 1.6, 1.5, 1.3, 0.9, 1, 0.85, 0.8, 0.8, 0.6, 0.8, 0.8, 2, 0.9, 0.5, 0.9, 0.9, 0.6, 1.08, 0.67,1,0.9,1.15,1,1.7,1.3,2.4,0.6,0.8,0.9,1.1,0.6,1.5], PX = [], PY = [], voper = [], X2, Y2, ultN = ['Ярость', 'Песня', 'Змеиный яд', 'Неуязвимость', 'Бронирежим', 'Ускорение', 'В атаку!', 'Бессмертие', 'Буря', 'Тайный удар', 'Заморозка', 'Кража жизни', 'Восстание мертвецов', 'Гнев богов', 'Призыв', 'Геошторм', 'Залп', 'Взлом','Изгнание','Исцеление','Мотивация','На обордаж!','Бум','Истребление','Магия','Пауза','Пробитие','Супер-удар','Обморожение','Сила гор','Смертельный рёв','Молниевой шторм','Ядовитая стрела','Золотой удар','Сила дракона','Яростный кулак','Сила моря','Робот Защитник'], ult = ['Рыцарь впадает в ярость и увеличивает свой урон на 90% и защиту 20% в течении 4 сек.', 'Эль Джоно начинает петь и поднимает дух команды. Атака увеличиваеться на 50%, защита на 50%  у всех союзников и Джоно в течении 2 сек.', 'Король змей отравляет любого врага и наносит 800% от атаки и восстанавливает себе 250% от атаки.', 'Риндз становиться неуязвимым на 2сек и восстанавливает 50% от атаки.', 'Джо увеличивает защиту на 300% в течении 2сек и наносит любому врагу 250% от атаки.', 'Сенсей увеличивает скорость атаки вдвое в течении 3 сек.', 'Сёгун увеличивает атаку всем союзникам и себе на 50% в течении 2 сек. И наносит случайному врагу 45% от атаки', 'Опустошитель, после удара, восстанавливает 25% жизни.', 'Странник наносит 15% от атаки всем врагам и оглушает их на 1 сек.', 'Стальной наносит 500% от урона любому противнику и восстанавливает 500% от атаки.', 'Замороживает всех противников на 1,2 сек.', 'Джинн забирает у всех противников 25% от своей атаки и воостанавливает себе и союзникам столько же здоровья соответственно.', 'Если все союзники живы, то оглушает ближайшего противника на 3 сек. Если один или нескоько союзников мертвы, то воскрешает одного из них с 30% жизни', 'Буревестник пускает молот, который наносит каждому противнику 55% от атаки.', 'Адский воин запускает метеорит в противников, который оглушает их на 1 сек и восстанавливает Адскому воину 50% от атаки.', 'Анубис запускает воронку которая лечит союзникам и Анубису 120% от атки Анубиса и наносит противникам 140% от атаки.', 'Шериф - наносит град выстрелов по врагу. После каждого выстрела наносит 25% от атаки и лечит себе 12% от атаки.', 'Клевенс взламывает противника и переводит его на свою сторону в течениии 4 сек.','Призрак изганяет душу из рандомного противника на 5 сек.','Страж леса восстанавливает каждому союзнику 70% от атаки.','Шаман переносит свою энергию союзнику. После чего союзник мгновенно применяет способность и начинает копить энергию быстрее.','Капитан призывает свой корабль, который проплывает по полю и наносит урон противникам и союзникам в размере 100% (союзники получают вдвое меньше урона) от атаки каждому, кроме самого Капитана.','Взрывной создаёт взрыв рядом с рандомным противником, который наносит противнику 100% от атаки взрывного и оглушает на 2 сек всех рядом стоячих противников','Оверлорд запускает молнии в каждого противника, каждые из которых наносят 50% от атаки.','Колдун изпользует заклинание, которое либо делает Колдуна неуязвимым на 3,5 сек, либо наносит 240% от атаки любому врагу, либо восстанавливает 30% от жизни.','Эйс останавливает время на 3 сек. Также увеичивает свою атаку на 100% в течении 4 сек.','Тёмный лорд обнуляет защиту всех противников в течении 2,5 сек.','Легионер наносит мощный удар, который наносит всем врагам 80% от атаки и уменьшает их защиту в два раза в течении 3 сек.','Воин льдов наносит рассекающий удар, который наносит противникам 40%, и уменьшает их атаку в два раза в течении 3.5 сек.','Скала наносит удар топором! Все враги получают урон в размере 60% от атаки Скалы и увеличивает защиту союзников в 2 раза в течении 3 сек.','Ниндзя-кот оглушает всех героев на 1 сек своим рёвом, а также с шансом 10% один из героев противника может умереть.','Зевс пускает массовый удар молниями по врагам, которые наносят 3 по 25% от атаки каждому врагу.','Пускакет в любого противника ядовитую стрелу, которая его отравляет. Яд наносит противнику 20% от атаки в каждую секунду, пока противник не умирает.','Фейс паралезует противника на 2 сек, также наносит 150% от атаки. А также восстанавливает 250% от атаки','1. Вождь-Друид выпускает зелёных драконов. Они наносят всем врагам 10% от атаки, также лечат союзникам 5% от атаки. <br>2. После полета драконов Вождь-Друид делает двух союзников неуязвивыми на 2 сек.','1. Золотой мастер наносит мощный удар кулаками. Они наносят всем врагам 10% от атаки, также уменьшают защиту на 50% на 2 сек. <br>2. Лечит союзника рандомного героя на 25% от его жизни.','Царь моря оглушает одного противника на 3 сек и увеличивает свой урон на 50% в течении 4сек.','Турбо начинает кружиться и наносит 2 раза по 50% от атаки ближнему противнику, а также лечит себе 50% от атаки. Также после того, когда робот Турбо сломается Турбо выйдет из робота и продолжит бой.'], zv = ['⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐'], sezon = 5000, pas = 0, why, bull = 1000000, SI = 0, teef = 1, block = "cube.png", mapi = [], num = 'Эксперт', upg1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], upg2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], upg3 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], upg3 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], fonch = 0, cel = [], cel2 = [], def = 0, X3, Y3, zard = [], crow = [17, 12, 7, 8], hpB = [], atB = [], color = [], h1 = 0, a1 = 0, kol = 26, hj1, hj2, numi = 'Игрок', kv = 1, kv1 = 2, kv2 = 6, hb = [], hb1 = [], plo, plo1, plo2, ur = [], jj = 0, you = 3, k = 1, k1 = 0, k2 = 0, vol = 1, at1 = [], sup = [], ho, v1, v2, v3, v4, yo = [], ULTA = [], zasB = [], GOO = [], arteN = ['Артефакт', 'Мечи огня', 'Золотой дракон', 'Красный дракон', 'Магия огня', 'Тёмная материя', 'Броня бога', 'Луч жизни', 'Шар льда'],arteN2=['Артефакт','Молния','Стойкость','Энерго-куб'], arte = ['', 'Наносит всем врагам урон и восстанавливает жизнь владельцу.', 'Призывает Золотого дракона, который лечит союзников.', 'Призывает Красного дракона, который наносит урон противникам.', 'Наносит огромный урон любому противнику', 'Оглушает всех противников.', 'Увеличивает защиту владельца в течении 2 сек.', 'Восстанавливает жизнь владельцу.', 'Наносит огромный урон противнику и лечит владельца'], arte2=['','Когда жизнь владельца падает ниже 2000 запускает молнию во врага, которая наносит ему урон и оглушает его.','Когда жизнь владельца падает ниже 2000 увеличивает защиту в течении времени.','Когда жизнь владельца падает ниже 2000 лечит владельца и владелец начинает копить энергию быстрее в течении времени.'], namP = ['Драко', 'Феникс','Полярный','Землярой'], atP = [30, 40,20,30], hpP = [160, 120, 240,170], eneP = [5600, 5400, 7000,6000], ultNP = ['Энерго шар', 'Луч','Холодный порыв','Каменная оболочка'], ultP = ['Пускает энергечиский шар который наносит противникам урон и отбрасывает их.', 'Извергает луч которой лечит союзников и наносит урон врагам','Полярный пускает ледяную волну, которая замораживает противников','Землярой делает всех союзников неуязвивыми'], bioP = ['Драко - зелёный дракон. Он спустился с Великого утёса. Его способность огромный энерго шар, который рассталкивает противников.', 'Феникс - дракон из пепла.','Полярный - великий дракон с далёкого Севера.'], clasP = ['атака', 'поддержка','гибрид','поддержка'], AR = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], haveAr = [1, 1, 1, 1, 0, 0], mpit = 0, crowP = [-1, -1, -1, -1], upg4=[], haveAr2=[1, 1, 1, 1, 0, 0], AR2, upgA1, upgA2, namePass, friend=[], neus=[], rang=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], hpStart=[3800,4300,4000,4200,3200,4100,3600,5200,3700,4000,4000,3900,4200,4100,4000,3900,3800,4000,3900,4200, 3950,3820,4000,3000,3800,2800,4100,0,0,0,3000,0,5600,3900,0,0,4500,4000], atStart=[400,320,100,450,80,380,400,200,400,200,220,410,300,350,300,110,440,380,360,330,350,350,300,450,420,400,300,450,300,625,300,400,200,150,450,300,340,300], zasStart=[100,50,10,10,200,20,50,20,50,100,150,120,50,100,110,150,120,50,100,110,150,200,100,95,90,120,95,0,0,0,80,0,100,120,0,0,80,70], crowI=[], hprIsn=[], atIsn=[], zasIsn=[], primen=[], ARB=[], ABR2=[], upgB=[], upgB2=[], skin=[], stop=['stop1','stop2','stop3','stop4','stop5','stop6','stop7','stop8','stop9','stop10','stop11','stop12','stop13','stop14','stop15','stop16','stop17','stop18','stop19','stop20','stop21','stop22','stop23','stop24','stop25','stop26','stop27','stop28','stop29','stop30','stop31','stop32','stop33','stop34','stop35','stop36','stop37','stop38','stop39'], udar2=['udar1','udar2','udar3','udar4','udar5','udar6','udar7','udar8','udar9','udar10','udar11','udar12','udar13','udar14','udar15','udar16','udar17','udar18','udar19','udar20','udar21','udar22','udar23','udar24','udar25','udar26','udar27','udar28','udar29','udar30','udar31','udar32','udar33','udar34','udar35','udar36','udar37','udar38','udar39'], ulta=['ulta1','ulta2','ulta3','ulta4','ulta5','ulta6','ulta7','ulta8','ulta9','ulta10','ulta11','ulta12','ulta13','ulta14','ulta15','ulta16','ulta17','ulta18','ulta19','ulta20','ulta21','ulta22','ulta23','ulta24','ulta25','ulta26','ulta27','ulta28','ulta29','ulta30','ulta31','ulta32','ulta33','ulta34','ulta35','ulta36','ulta37','ulta38','ulta39'], profS = ['prof5.png', 'prof2.png', 'prof0.png', 'prof1.png', 'prof3.png', 'prof4.png', 'prof7.png', 'prof8.png', 'prof9.png', 'prof10.png', 'prof11.png', 'prof13.png', 'prof14.png', 'prof15.png', 'prof16.png', 'prof17.png', 'prof18.png', 'prof19.png', 'prof20.png','prof21.png','prof22.png','prof23.png','prof24.png','prof26.png','prof27.png','prof29.png','prof31.png','prof32.png','prof33.png','prof34.png','prof35.png','prof36.png','prof37.png','prof38.png','prof39.png','prof40.png','prof41.png','prof42.png'], imgS = ['hero5.png', 'hero2.png', 'hero0.png', 'hero1.png', 'hero3.png', 'hero4.png', 'hero7.png', 'hero8.png', 'hero9.png', 'hero10.png', 'hero11.png', 'hero13.png', 'hero14.png', 'hero15.png', 'hero16.png', 'hero17.png', 'hero18.png', 'hero19.png', 'hero20.png','hero21.png','hero22.png','hero23.png','hero24.png','hero26.png','hero27.png','hero29.png','hero31.png','hero32.png','hero33.png','hero34.png','hero35.png','hero36.png','hero37.png','hero38.png','hero39.png','hero40.png','hero41.png','hero42.png'], stopB=[], udarB=[], ultaB=[], crowPB=[], pitomB=[], haveP=[], zvP=['⭐','⭐','⭐','⭐','⭐','⭐','⭐'], crowS=[], kmen=0, sov=[], atPB=[], hpPB=[], pitB, atStr=[], PERSON=[], PERSONHP=[], PERSONAT=[], block, crowS2=[], atStr2=[];
      // //localStorage.clear();
      //document.write('<span style="position:fixed;top:0;left:0;background:#111;width:' + ((parseInt(window.innerWidth) - 610) / 2) + ';height:100%;z-index:1000000;"></span>')
      //document.write('<span style="position:fixed;top:0;right:0;background:#111;width:' + ((parseInt(window.innerWidth) - 610) / 2) + ';height:100%;z-index:1000000;"></span>')
      //document.write('<span style="position:fixed;top:0;left:0;background:#111;height:' + ((parseInt(window.innerHeight) - 275) / 2) + ';width:100%;z-index:1000000;"></span>')
      //document.write('<span style="position:fixed;bottom:0;left:0;background:#111;height:' + ((parseInt(window.innerHeight) - 275) / 2) + ';width:100%;z-index:1000000;"></span>')
     /* var folder = "";
      $.ajax({
          url : folder,
          success: function (data) {
              $(data).find("a").attr("href", function (i, val) {
                  if( val.match(/\.(jpe?g|png|gif)$/) ) {
                      $("body").append( "<img src='"+ folder + val +"'>" );
                  }
              });
          }
      });*/
      tor = (parseInt(window.innerHeight) - 275) / 2;
      left = (parseInt(window.innerWidth) - 610) / 2;
      tor=0;
      left=0;
      document.write('<audio src=bat.mp3 style="position:absolute;top:0;left:0;" loop id=batMus></audio>')
      document.write('<audio src=musCard.mp3 style="position:absolute;top:0;left:0;" loop id=carMus></audio>')
      document.write('<audio src=priz.mp3 style="position:absolute;top:0;left:0;" id=prizMus></audio>')
      document.write('<audio src=win.mp3 style="position:absolute;top:0;left:0;" id=winMus></audio>')
      document.write('<audio src=lose.mp3 style="position:absolute;top:0;left:0;" id=loseMus></audio>')


      /*Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {
          alert('images finished loading');
      });*/

      document.write('<audio src=menu.mp3 style="position:absolute;top:0;left:0;" autoplay loop id=menuMus></audio>')
      document.write('<dwww style="position:absolute;top:' + tor + ';left:' + left + ';width:610;height:275;"  onselectstart="return false" id=scren></dwww>')
      for (var i = 0; i < 60; i++) {
          mapi[i] = [];
          for (var j = 0; j < 60; j++) {
              mapi[i][j] = ' ';
          }
      }
      //out('<span id=screen>')
      function fon() {
          scren.innerHTML = '';

          out('<img src=fon.png width=100% height=100% style="position:fixed;top:0;left:0;">')
      }
      function fon2() {
          scren.innerHTML = '';

          out('<img src=fon.png width=100% height=100% style="position:fixed;top:0;left:0;"><span style="position:absolute;top:0;left:0;width:100%;height:100%;background:#ff000077"></span>')
      }
      function pro() {

          out('<span style="position:absolute;top:20;left:0;">0</span>')
          fon();
          if (foto == "profile.png") {
              foto = "";
          }
          out(`<span style="position:absolute;top:5;left:0;width:100%;text-align:center;"><img src=профиль.png width=130 height=50></span><span style="position:absolute;top:70;left:100;background:#303030;color:grey;font-size:20;">Имя: ` + num + `</span><span style="position:absolute;top:70;left:400;background:#303030;color:grey;font-size:20;" >Аватар: <input style="width:130" placeholder="URL ссылка" id=a value=` + foto + `></span><span style="position:absolute;top:120;left:100;background:#303030;color:grey;font-size:20;">Побед: 0</span><span style="position:absolute;top:120;left:400;background:#303030;color:grey;font-size:20;">Поражений: 0</span><span style="position:absolute;top:170;left:100;background:#303030;color:grey;font-size:20;">Героев: 1</span><span style="position:absolute;top:170;left:400;background:#303030;color:grey;font-size:20;">Трофеев: 0</span><span style="position:absolute;top:220;left:100;background:#303030;color:grey;font-size:20;">Уровень: LOL</span><span style="position:absolute;top:220;left:400;background:#303030;color:grey;font-size:20;">Время в игре: ` + Math.trunc(parseInt(localStorage.getItem("time")) / 1440) + `д ` + Math.trunc(parseInt(localStorage.getItem("time")) / 60) % 24 + `ч ` + parseInt(localStorage.getItem("time")) % 60 + `м</span><img src=str.png style="position:absolute;top:0;left:0;width:60;height:50;" onclick=men()>`)
      }
      function men() {
          foto = document.getElementById("a").value;
          if (foto == '') {
              foto = 'profile.png';
          }
          menu();
      }
      function tim(h) {
          if (!h) {
              h = 0;
          }
          h++;
          localStorage.setItem("time", h);
          setTimeout(tim, 60000, h);
      }
      function save() {
          for (var i = 0; i < skill.length; i++) {
              skill[i]*=10;
          }
          out('<w style="position:absolute;top:-1000;left:-1500000;" id=war class=unbroken>'+namePass+'||#'+foto+'#'+time+'#'+gem+'#'+mony+'#'+ord+'#'+have.join()+'#'+skill.join()+'#'+at.join()+'#'+hp.join()+'#'+vol+'#'+zas.join()+'#'+skin.join()+'#'+zv.join()+'#'+sezon+'#'+bull+'#'+crow.join()+'#'+upg1.join()+'#'+upg2.join()+'#'+upg3.join()+'#'+upg4.join()+'#'+atP.join()+'#'+hpP.join()+'#'+eneP.join()+'#'+rang.join()+'#'+haveAr.join()+'#'+haveAr2.join()+'#'+AR.join()+'#'+AR2.join()+'#'+upgA1.join()+'#'+upgA2.join()+'#'+bnb.join()+'#'+bnb2.join()+'#'+bnb3.join()+'#'+crowP.join()+'#'+friend.join()+'#'+pas+'#'+stop.join()+'#'+udar2.join()+'#'+ulta.join()+'#'+prof.join()+'#'+img.join()+'#'+mpit+'#'+zvP.join()+'#'+haveP.join()+'#'+crowS[0]+'#'+kmen+'#'+sov.join()+'#'+crowS2[0]+'</w><w style="position:absolute;top:-1000;left:-100000;" id=war2 class=broken></w>');
         // document.getElementById("war").innerHTML='';
          for (var i = 0; i < 7; i++) {
              //document.getElementById("war").innerHTML+='#'+mapi[i].join();
          }
          for (var i = 0; i < skill.length; i++) {
                skill[i]/=10;
            }
          $.ajax({
              method: "POST",
              url: "serv.php",
              data: { text: $("w.unbroken").text() }
            })
              .done(function( response ) {
                $("w.broken").html(response);
              });

      }
      function menu() {
          V[37]=2.3;
          JON=0;
          JONK=0;
          scroll(0);
          var highestTimeoutId = setTimeout(";");
          for (var i = 0 ; i < highestTimeoutId ; i++) {
              clearTimeout(i);
          }
          crowI=[];
          menuMus.play();
          batMus.pause();
          carMus.pause();
          document.body.style.overflow = 'hidden';
          fon();
          save();
          /*localStorage.setItem(num + "mony", mony);
          localStorage.setItem(num + "vol", vol);
          localStorage.setItem(num + "ord", ord);
          localStorage.setItem(num + "gem", gem);
          localStorage.setItem(num + "bull", bull);
          localStorage.setItem(num + "sezon", sezon);
          localStorage.setItem(num + "pas", pas);
          localStorage.setItem(num + "foto", foto);
          localStorage.setItem(num + "haveL", have.length);
          for (var i = 0; i < have.length; i++) {
              localStorage.setItem(num + "have" + i, have[i]);
          }
          for (var i = 0; i < skill.length; i++) {
              localStorage.setItem(num + "skill" + i, skill[i]);
          }
          for (var i = 0; i < zv.length; i++) {
              localStorage.setItem(num + "zv" + i, zv[i]);
          }
          for (var i = 0; i < img.length; i++) {
              localStorage.setItem(num + "upg1" + i, upg1[i]);
          }
          for (var i = 0; i < gift.length; i++) {
              localStorage.setItem(num + "bnb" + i, bnb[i]);
              localStorage.setItem(num + "bnb2" + i, bnb2[i]);
          }
          for (var i = 0; i < gift3.length; i++) {
              localStorage.setItem(num + "bnb3" + i, bnb3[i]);
          }
          for (var i = 0; i < img.length; i++) {
              localStorage.setItem(num + "upg3" + i, upg3[i]);
          }
          for (var i = 0; i < img.length; i++) {
              localStorage.setItem(num + "at" + i, at[i]);
              localStorage.setItem(num + "hp" + i, hp[i]);
              localStorage.setItem(num + "zas" + i, zas[i]);
          }*/
          if (time == 0) {
              tim(parseInt(localStorage.getItem("time")));
          }
          time = 1;
          out('<span style="position:absolute;top:75;left:170;border:2px ridge black;width:60;height:60;background:'+col(red[crow[0]])+'"><span style="position:absolute;top:-8;left:0;width:60;text-align:center;font-size:8;">'+zv[crow[0]]+'</span><img src=' + prof[crow[0]] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[crow[0]] + '</span></span>')
          out('<span style="position:absolute;top:75;left:240;border:2px ridge black;width:60;height:60;background:'+col(red[crow[1]])+'"><span style="position:absolute;top:-8;left:0;width:60;text-align:center;font-size:8;">'+zv[crow[1]]+'</span><img src=' + prof[crow[1]] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[crow[1]] + '</span></span>')
          out('<span style="position:absolute;top:75;left:310;border:2px ridge black;width:60;height:60;background:'+col(red[crow[2]])+'"><span style="position:absolute;top:-8;left:0;width:60;text-align:center;font-size:8;">'+zv[crow[2]]+'</span><img src=' + prof[crow[2]] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[crow[2]] + '</span></span>')
          out('<span style="position:absolute;top:75;left:380;border:2px ridge black;width:60;height:60;background:'+col(red[crow[3]])+'"><span style="position:absolute;top:-8;left:0;width:60;text-align:center;font-size:8;">'+zv[crow[3]]+'</span><img src=' + prof[crow[3]] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[crow[3]] + '</span></span>')
          out('<img src=' + foto + ' style="position:absolute;top:0;left:0;width:35;height:35;border: 0.7px solid black;background:#303030;" onclick=pro()>')
          out('<b style="position:absolute;top:0;left:35;border:0.3px solid black;font-size:20px;color:gold;background:#303030;border-bottom-right-radius:10px;" onclick=way()><img src=cup.png width=20 height=20>' + bull + '<font color=#303030>"</font></b>')
          out(`<span style="position:absolute;top:-255;left:200;width:210;height:250;border-radius:3px;border:2px ridge black;background:#303030;z-index:1000;color:white;text-shadow:1px 2px 2px grey;" id=chatik1><span style="position:absolute;top:2;left:0;text-align:center;font-size:10;width:210;"><span onclick=drug()>Друзья</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span onclick=drug2()>Поиск</span></span><input placeholder="Поиск игроков" style="width:210;position:absolute;top:20;left:0;" id=fInD oninput="search()"><span style="position:absolute;top:-1000;left:-2000;" id=podstr class=unbroken></span><span style="position:absolute;top:42;left:2;width:206;" class=broken></span></span><span style="position:absolute;top:-0.5;left:275;width:60;text-align:center;background:#303030;border-bottom-left-radius:5px;border-bottom-right-radius:5px;fint-size:12;border:0.5px;color:white;z-index:1000;" id=chatik2 onclick=chatik()>чат</span>`)
          out('<span style="position:absolute;top:0;right:0;background:#303030;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:15;">&nbsp;<img src=gem.png width=15 height=15>' + gem + '&nbsp;</span><span style="position:absolute;top:0;right:70;background:#303030;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:15;">&nbsp;<img src=ord.png width=15 height=15>' + ord + '&nbsp;</span><span style="position:absolute;top:0;right:140;background:#303030;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:15;">&nbsp;<img src=mony.png width=15 height=15>' + mony + '&nbsp;</span><span style="position:absolute;top:0;left:140;background:#303030;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:15;">&nbsp;<img src=kmen.png width=15 height=15>' + kmen + '&nbsp;</span>')
          out('<img src=block_pass.png style="position:absolute;bottom:0;left:0;width:150;height:47;" onclick=pass()>')
          out('<button style="position:absolute;bottom:0;right:0;width:130;height:60;font-family: sans-serif;text-shadow: 1px 2px 3px grey;color:white;background:gold;font-size:25px;" onclick=battleRas()><b>В бой</b></button>')
          out('<img src=sob' + teef + '.png style="position:absolute;bottom:0;right:130;width:120;height:50;" onclick=loker()>')
          out('<img src=shop.png style="position:absolute;bottom:170;left:0;width:50;height:50;" onclick=shop()>')
          out('<img src=heroes.png style="position:absolute;bottom:70;left:0;width:50;height:50;" onclick=hero(1,0,0,0,0,0,0)>')
          out('<img src=dop.png style="position:absolute;bottom:170;right:0;width:50;height:50;" onclick=vetvi()><img src=akaunt.png onclick=akaunt() id=aksel style="position:absolute;right:60;bottom:-1000;width:50;height:50;"><img src=maping.png onclick=map() id=aksel1 style="position:absolute;right:120;bottom:-1000;width:50;height:50;">')
          out('<img src=питом.png style="position:absolute;bottom:70;right:0;width:50;height:50;" onclick=pitom()>')

      }
      function vetvi() {
          aksel.style.bottom = 170;
          aksel1.style.bottom = 170;
      }
      function battleRas() {
          crowS2[1]=false;
          ARB=AR;
          ABR2=AR2;
          upgB=upgA1;
          upgB2=upgA2;
            pitB=false;
          atStr=[at[crowS[0]]]
          atStr2=[at[crowS2[0]]]
          var x1=-1, x2=-1, x3=-1, x4=-1;
          if (teef == 1) {
              if (!rang[crow[0]]) {
                  rang[crow[0]]=0;
              }
              if (!rang[crow[1]]) {
                  rang[crow[1]]=0;
              }
              if (!rang[crow[2]]) {
                  rang[crow[2]]=0;
              }
              if (!rang[crow[3]]) {
                  rang[crow[3]]=0;
              }
              var SrArfm=(rang[crow[0]]+rang[crow[1]]+rang[crow[2]]+rang[crow[3]])/4;
              var newArr = [];
              for (var i = 0; i < prof.length; i++) {
                  if (red[i] != 'страж' && red[i] != 'генерал') {
                      newArr.push(i);
                  }
              }
              x1=newArr[rand(0,newArr.length-1)];
              if (SrArfm > 15) {
                x2=newArr[rand(0,newArr.length-1)];
              }
              if (SrArfm > 40) {
                  x3=newArr[rand(0,newArr.length-1)];
                }
              if (SrArfm > 60) {
                  x4=newArr[rand(0,newArr.length-1)];
                }
              if (SrArfm > 80) {
                  var sheep=[];
                  for (var i = 0; i < red.length; i++) {
                      if (red[i] == 'страж') {
                          sheep.push(i);
                      }
                  }
                crowS[1]=sheep[rand(0,sheep.length-1)];
                  atStr[1]=at[crowS[1]];
              }
              if (SrArfm > 100) {
                    var sheep=[];
                    for (var i = 0; i < red.length; i++) {
                        if (red[i] == 'генерал') {
                            sheep.push(i);
                        }
                    }
                  crowS2[1]=sheep[rand(0,sheep.length-1)];
                  atStr2[1]=at[crowS2[1]];
                }
              stopB=[stop[crow[0]],stop[crow[1]],stop[crow[2]],stop[crow[3]],stop[x1],stop[x2],stop[x3],stop[x4]]
                udarB=[udar2[crow[0]],udar2[crow[1]],udar2[crow[2]],udar2[crow[3]],udar2[x1],udar2[x2],udar2[x3],udar2[x4]]
                ultaB=[ulta[crow[0]],ulta[crow[1]],ulta[crow[2]],ulta[crow[3]],ulta[x1],ulta[x2],ulta[x3],ulta[x4]]
              battle(x1,x2,x3,x4,[(atStart[x1]+Math.floor(SrArfm/3)*2+rand(0,30)-18),(atStart[x2]+Math.floor(SrArfm/3)*2+rand(0,30)-18),(atStart[x3]+Math.floor(SrArfm/3)*2+rand(0,30)-18),(atStart[x4]+Math.floor(SrArfm/3)*2+rand(0,30)-18)],[hpStart[x1]+Math.floor(SrArfm/3)*10+rand(0,200)-120,hpStart[x2]+Math.floor(SrArfm/3)*10+rand(0,200)-120,hpStart[x3]+Math.floor(SrArfm/3)*10+rand(0,200)-120,hpStart[x4]+Math.floor(SrArfm/3)*10+rand(0,200)-120],[zasStart[x1]+Math.floor(SrArfm/3)*3+rand(0,50)-25,zasStart[x2]+Math.floor(SrArfm/3)*3+rand(0,50)-25,zasStart[x3]+Math.floor(SrArfm/3)*3+rand(0,50)-25,zasStart[x4]+Math.floor(SrArfm/3)*3+rand(0,50)-25]);
          }
          if (teef == 4) {
              x1=-1, x2=-1, x3=-1, x4=-1
              x2='scelet';
              if (vol > 10) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                x2='wscelet';
              }
              if (vol > 12) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                  x2='wscelet';
                  x3='scelet';
                }
              if (vol > 14) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                  x3='wscelet';
                  x2='scelet';
                  x1='scelet';
                }
              if (vol > 16) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                  x3='wscelet';
                    x2='scelet';
                    x1='scelet';
                  x4='scelet';
                }
              if (vol > 18) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                x3='wscelet';
                  x2='wscelet';
                  x1='scelet';
                x4='scelet';
              }
              if (vol > 20) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                x2='wscelet';
                  x1='wscelet';
                  x3='wscelet';
                x4='scelet';
              }
              if (vol > 22) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                x1='wscelet';
                  x2='wscelet';
                  x3='wscelet';
                x4='wscelet';
              }
              if (vol > 24) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='scelet';
                }
              if (vol > 26) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='kscelet';
                  x3='wscelet';
              }
              if (vol > 28) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='kscelet';
                  x3='wcelet';
                  x1='scelet';
                  x4='scelet';
              }
              if (vol > 30) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='wcelet';
                    x1='wscelet';
                    x4='scelet';
                }
              if (vol > 32) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='wcelet';
                    x1='wscelet';
                    x4='wscelet';
                }
              if (vol > 34) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='kcelet';
                    x1='wscelet';
                    x4='wscelet';
                }
              if (vol > 36) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='kcelet';
                    x1='kscelet';
                    x4='scelet';
                }
              if (vol > 38) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='kcelet';
                    x1='kscelet';
                    x4='wscelet';
                }
              if (vol > 40) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='kscelet';
                    x3='kscelet';
                    x1='kscelet';
                    x4='kscelet';
                }
              if (vol > 42) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='lscelet';
              }
              if (vol > 44) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='lscelet';
                  x3='wscelet';
              }
              if (vol > 46) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='lscelet';
                  x3='wscelet';
                  x1='wscelet';
              }
              if (vol > 48) {
                  x1=-1, x2=-1, x3=-1, x4=-1
                  x2='lscelet';
                  x3='wscelet';
                  x1='wscelet';
                  x4='wscelet';
              }
              if (vol > 50) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='kscelet';
                    x1='wscelet';
                    x4='wscelet';
                }
              if (vol > 51) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='kscelet';
                    x1='kscelet';
                    x4='wscelet';
                }
              if (vol > 52) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='kscelet';
                    x1='kscelet';
                    x4='kscelet';
                }
              if (vol > 53) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='lscelet';
                    x1='lscelet';
                    x4='scelet';
                }
              if (vol > 54) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='lscelet';
                    x1='lscelet';
                    x4='kscelet';
                }
              if (vol > 55) {
                    x1=-1, x2=-1, x3=-1, x4=-1
                    x2='lscelet';
                    x3='lscelet';
                    x1='lscelet';
                    x4='lscelet';
                }
              if (vol > 56) {
                  alert('Подземелья очищены!')
                  return 0;
              }
              udar2['scelet']='udarscelet1';
               ulta['scelet']='ultascelet1';
               stop['scelet']='stopscelet1';
              udar2['wscelet']='udarwscelet1';
                 ulta['wscelet']='ultawscelet1';
                 stop['wscelet']='stopwscelet1';
              udar2['kscelet']='udarkscelet1';
                 ulta['kscelet']='ultakscelet1';
                 stop['kscelet']='stopkscelet1';
              udar2['lscelet']='udarlscelet1';
               ulta['lscelet']='ultalscelet1';
               stop['lscelet']='stoplscelet1';
              stopB=[stop[crow[0]],stop[crow[1]],stop[crow[2]],stop[crow[3]],stop[x1],stop[x2],stop[x3],stop[x4]]
              udarB=[udar2[crow[0]],udar2[crow[1]],udar2[crow[2]],udar2[crow[3]],udar2[x1],udar2[x2],udar2[x3],udar2[x4]]
              ultaB=[ulta[crow[0]],ulta[crow[1]],ulta[crow[2]],ulta[crow[3]],ulta[x1],ulta[x2],ulta[x3],ulta[x4]]
              battle(x1,x2,x3,x4,[],[],[]);
          }
          if (teef == 2) {
              battleIsl();
          }
          if (teef == 5) {
              cards();
          }
      }
      function drug() {
          chatik1.innerHTML='<span style="position:absolute;top:2;left:0;text-align:center;font-size:10;width:210;"><span onclick=drug()>Друзья</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span onclick=drug2()>Поиск</span></span><input placeholder="Поиск игроков" style="width:210;position:absolute;top:20;left:0;" id=fInD oninput="search()"><span style="position:absolute;top:-1000;left:-2000;" id=podstr class=unbroken></span><span style="position:absolute;top:42;left:2;width:206;" class=broken></span></span>';
          fInD.disabled=true;
          podstr.innerHTML=friend.join();
          $.ajax({
            method: "POST",
            url: "fren.php",
            data: { text: $("span.unbroken").text() }
          })
            .done(function( response ) {
              $("span.broken").html(response);
            });
      }
      function drug2() {
          chatik1.innerHTML='<span style="position:absolute;top:2;left:0;text-align:center;font-size:10;width:210;"><span onclick=drug()>Друзья</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span onclick=drug2()>Поиск</span></span><input placeholder="Поиск игроков" style="width:210;position:absolute;top:20;left:0;" id=fInD oninput="search()"><span style="position:absolute;top:-1000;left:-2000;" id=podstr class=unbroken></span><span style="position:absolute;top:42;left:2;width:206;" class=broken></span></span>';
      }
      function MESS(x) {
          var chatPor = [namePass.split('|')[0],x.split('|')[0]];
          chatPor.sort();
           chatik1.innerHTML=`<span style="position:absolute;top:2;left:0;text-align:center;font-size:10;width:210;"><span onclick=drug()>Друзья</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span onclick=drug2()>Поиск</span></span><b style="width:210;position:absolute;top:20;left:0;text-align:center;" onclick=imban("`+x+`")>`+x.split('|')[0]+`</b><span style="position:absolute;top:40;left:0;width:210;font-size:13;" class=pole></span><span style="position:absolute;top:40;left:0;" id=imran><iframe src=chats/`+chatPor[0]+`-to-`+chatPor[1]+`.txt style="width:210;height:200;border:none;color:white;"></iframe></span><input style="position:absolute;bottom:0;left:0;width:180;" id=fInD placeholder="Сообщение"><button style="position:absolute;bottom:0;left:180;width:30;text-align:center;" onclick=newMessage("`+x+`")>=&gt;</button><span style="position:absolute;top:-1000;left:-100000;" class=unpole id=VIPN></span>`;
      }
      function imban(x) {
          try {
              var chatPor = [namePass.split('|')[0],x.split('|')[0]];
                chatPor.sort();
              imran.innerHTML='<iframe src=chats/'+chatPor[0]+'-to-'+chatPor[1]+'.txt style="width:210;height:200;border:none;color:white;"></iframe>';
          } catch{}
      }
      function newMessage(x) {
          var chatPor = [namePass.split('|')[0],x.split('|')[0]];
          chatPor.sort();
          var ret = "";
          for (var i = 0; i < 4; i++) {
              if (namePass.split('|')[0][i]) {
                  ret += namePass.split('|')[0][i];
              }
          }
          VIPN.innerHTML=ret+": "+fInD.value+'🧙‍♂️🧕👰👨‍🚒👨‍🚀👩‍🚒👩‍🚒👩‍🚀👩‍💻'+chatPor[0]+'-to-'+chatPor[1];
          fInD.value="";
          $.ajax({
              method: "POST",
              url: "chat.php",
              data: { text: $("span.unpole").text() }
            })
              .done(function( response ) {
                $("span.pole").html(response);
              });
      }
      function search() {
          podstr.innerHTML=fInD.value;
          $.ajax({
              method: "POST",
              url: "wrap2.php",
              data: { text: $("span.unbroken").text() }
            })
              .done(function( response ) {
                $("span.broken").html(response);
              });
      }
      function ATAK(x) {
          pitB='false'
          stopB=[stop[crow[0]],stop[crow[1]],stop[crow[2]],stop[crow[3]]]
            udarB=[udar2[crow[0]],udar2[crow[1]],udar2[crow[2]],udar2[crow[3]]]
            ultaB=[ulta[crow[0]],ulta[crow[1]],ulta[crow[2]],ulta[crow[3]]]
          var y = x.split('#')[16], chert1=x.split('#')[8].split(','), chert2=x.split('#')[9].split(','), chert3=x.split('#')[11].split(','), Ogo=x.split('#')[27].split(','), Ogo2=x.split('#')[28].split(','), Ogo3=x.split('#')[29].split(','), Ogo4=x.split('#')[30].split(','), stope=x.split('#')[37].split(','), stope2=x.split('#')[38].split(','), stope3=x.split('#')[39].split(',');
          crowS2[1]=parseInt(x.split('#')[48].split(','));
          pitB=x.split('#')[34].split(',');
          atPB=x.split('#')[21].split(',');
          hpPB=x.split('#')[22].split(',');
          for (var i = 0; i < 4; i++) {
              pitB[i]=parseInt(pitB[i]);
          }
          for (var i = 0; i < atPB.length; i++) {
              atPB[i]=parseInt(atPB[i]);
              hpPB[i]=parseInt(hpPB[i]);
          }
          y=y.split(',');
          for (var i = 0; i < y.length; i++) {
              y[i] = parseInt(y[i]);
          }
          for (var i = 0; i < chert1.length; i++) {
                chert1[i] = parseInt(chert1[i]);
              chert2[i] = parseInt(chert2[i]);
              chert3[i] = parseInt(chert3[i]);
            }
          for (var i = 0; i < Ogo.length; i++) {
                Ogo[i]=parseInt(Ogo[i]);
          }
          for (var i = 0; i < Ogo2.length; i++) {
                  Ogo2[i]=parseInt(Ogo2[i]);
            }
          for (var i = 0; i < Ogo3.length; i++) {
                Ogo3[i]=parseInt(Ogo3[i]);
          }
          for (var i = 0; i < Ogo4.length; i++) {
                Ogo4[i]=parseInt(Ogo4[i]);
          }
          teef=-1;
          crowS[1]=parseInt(x.split('#')[45]);
          atStr=[at[crowS[0]], chert1[crowS[1]]];
          atStr2=[at[crowS2[0]], chert1[crowS2[1]]];
          ARB=[AR[pers[0]],AR[pers[1]],AR[pers[2]],AR[pers[3]],Ogo[pers[4]],Ogo[pers[5]],Ogo[pers[6]],Ogo[pers[7]]];
          ABR2=[AR2[pers[0]],AR2[pers[1]],AR2[pers[2]],AR2[pers[3]],Ogo2[pers[4]],Ogo2[pers[5]],Ogo2[pers[6]],Ogo2[pers[7]]];
          upgB=[upgA1[pers[0]],upgA1[pers[1]],upgA1[pers[2]],upgA1[pers[3]],Ogo3[pers[4]],Ogo3[pers[5]],Ogo3[pers[6]],Ogo3[pers[7]]]
          upgB2=[upgA2[pers[0]],upgA2[pers[1]],upgA2[pers[2]],upgA2[pers[3]],Ogo4[pers[4]],Ogo4[pers[5]],Ogo4[pers[6]],Ogo4[pers[7]]]
            upgB=upgA1;
            upgB2=upgA2;
          for (var i = 0; i < 4; i++) {
              stopB[i+4]=stope[y[i]];
              udarB[i+4]=stope2[y[i]];
              ultaB[i+4]=stope3[y[i]];
          }
          battle(y[0],y[1],y[2],y[3],[chert1[y[0]],chert1[y[1]],chert1[y[2]],chert1[y[3]]],[chert2[y[0]],chert2[y[1]],chert2[y[2]],chert2[y[3]]],[chert3[y[0]],chert3[y[1]],chert3[y[2]],chert3[y[3]]]);
      }
      function friends(x) {
          friend.push(x);
      }
      function chatik() {
          chatik1.style.top=5;
          chatik2.style.top=255;
      }
      function akaunt() {
          fon();
          out('<w style="position:absolute;top:-1000;left:0;" id=war class=unbroken></w><w style="position:absolute;top:-1000;left:-100000;" id=war2 class=broken></w><span style="position:absolute;top:70;left:160;text-align:center;width:290;">Введите имя: <input id=houm><p>Введите пароль: <input id=password><p><button onclick=ak2()>войти</button></p></p></span>')
      }
      function inputpass() {
          var a = "";
          for (var i = 0; i < password.value.length; i++) {
              a+="*";
          }
          password.value=a;
      }
      function ak() {
          num = houm.value;
          if (localStorage.getItem(num + "was") == "1") {
              mony = parseInt(localStorage.getItem(num + "mony"));
              ord = parseInt(localStorage.getItem(num + "ord"));
              gem = parseInt(localStorage.getItem(num + "gem"));
              bull = parseInt(localStorage.getItem(num + "bull"));
              sezon = parseInt(localStorage.getItem(num + "sezon"));
              foto = localStorage.getItem(num + "foto");
              pas = parseInt(localStorage.getItem(num + "pas"));
              for (var i = 0; i < parseInt(localStorage.getItem(num + "haveL")); i++) {
                  have[i] = parseInt(localStorage.getItem(num + "have" + i));
              }
              for (var i = 0; i < img.length; i++) {
                  skill[i] = parseInt(localStorage.getItem(num + "skill" + i));
              }
              for (var i = 0; i < img.length; i++) {
                  zv[i] = localStorage.getItem(num + "zv" + i);
              }
              for (var i = 0; i < img.length; i++) {
                  upg1[i] = parseInt(localStorage.getItem(num + "upg1" + i));
              }
              for (var i = 0; i < img.length; i++) {
                  upg2[i] = parseInt(localStorage.getItem(num + "upg2" + i));
              }
              for (var i = 0; i < img.length; i++) {
                  upg3[i] = parseInt(localStorage.getItem(num + "upg3" + i));
              }
              for (var i = 0; i < img.length; i++) {
                  at[i] = parseInt(localStorage.getItem(num + "at" + i));
                  hp[i] = parseInt(localStorage.getItem(num + "hp" + i));
                  zas[i] = parseInt(localStorage.getItem(num + "zas" + i));
              }
              for (var i = 0; i < gift.length; i++) {
                  bnb[i] = parseInt(localStorage.getItem(num + "bnb" + i));
                  bnb2[i] = parseInt(localStorage.getItem(num + "bnb2" + i));
              }
              for (var i = 0; i < gift3.length; i++) {
                  bnb3[i] = parseInt(localStorage.getItem(num + "bnb3" + i));
              }
          }
          else {
              localStorage.setItem(num + "was", "1");
              mony = 10;
              ord = 0;
              gem = 0;
              bull = 0;
              foto = "profile.png";
              sezon = 0;
              pas = 0;
              at = [400, 320, 100, 450, 80, 380, 400, 200, 400, 200, 220, 410, 300, 350, 300, 110, 440, 380], hp = [3800, 4300, 4000, 4200, 3200, 4100, 3600, 5200, 3700, 4000, 4000, 3900, 4200, 4100, 4000, 3900, 3800, 4000], V = [2.1, 1.5, 0.6, 2.2, 0.5, 1.8, 1.6, 1.6, 1.7, 1, 1.3, 2.1, 1.5, 1.7, 1.5, 1.3, 2.2, 1.9], zas = [100, 50, 10, 10, 200, 20, 50, 20, 50, 100, 150, 120, 50, 100, 110, 150, 120, 50, 100, 110, 150, 200, 100], hpB = [], hpP = 0, hpP1, pkol = 0, dal = [1.7, 2.3, 0.9, 1, 1.2, 1.2, 1.6, 1.5, 1.3, 0.9, 1, 0.85, 0.8, 0.8, 0.6, 0.8, 0.8, 1.4, 0.9]
              crow = [0, -1, -1, -1]
              have = [0], skill = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], zv = ['⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐', '⭐'];
              upg1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], upg2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], upg3 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
              vol = 1;
          }
          //have=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,19]

          menu()
      }
      function ak2() {
          skin=[];
          haveP=[];
          haveAr=[];
          haveAr2=[];
          crowS=[];
          crowS2=[];
          crowP=[-1,-1,-1,-1];
          war.innerHTML="<br>"+houm.value+'|'+password.value;
          namePass=houm.value+'|'+password.value;
          $.ajax({
            method: "POST",
            url: "wrap.php",
            data: { text: $("w.unbroken").text() }
          })
            .done(function( response ) {
              $("w.broken").html(response);
            });
          setTimeout(function() {
              var res = war2.innerHTML;
              foto=res.split('#')[1];
              time=parseInt(res.split('#')[2]);
              gem=parseInt(res.split('#')[3]);
              mony=parseInt(res.split('#')[4]);
              ord=parseInt(res.split('#')[5]);
              have=res.split('#')[6];
              have=have.split(',');
              for (var i = 0; i < have.length; i++) {
                  have[i]=parseInt(have[i])
              }
              skill=res.split('#')[7];
              skill=skill.split(',');
              for (var i = 0; i < skill.length; i++) {
                  skill[i]=parseInt(skill[i])/10;
              }
              at=res.split('#')[8];
              at=at.split(',');
              for (var i = 0; i < at.length; i++) {
                  at[i]=parseInt(at[i])
              }
              hp=res.split('#')[9];
              hp=hp.split(',');
              for (var i = 0; i < hp.length; i++) {
                  hp[i]=parseInt(hp[i])
              }
              /*V=res.split('#')[10];
              V=V.split(',');
              for (var i = 0; i < V.length; i++) {
                  V[i]=parseInt(V[i])
              }*/
              vol=res.split('#')[10];
              vol = parseInt(vol);
              zas=res.split('#')[11];
              zas=zas.split(',');
              for (var i = 0; i < zas.length; i++) {
                  zas[i]=parseInt(zas[i])
              }
              if (hp.length < hpStart.length) {
                    for (var i = hp.length; i < hpStart.length; i++) {
                        at[i]=atStart[i];
                        zas[i]=zasStart[i];
                        hp[i]=hpStart[i];
                    }
                }
              skin=res.split('#')[12];
                skin=skin.split(',');
                for (var i = 0; i < skin.length; i++) {
                      skin[i]=parseInt(skin[i]);
                  }
              /*dal=res.split('#')[12];
              dal=dal.split(',');
              for (var i = 0; i < dal.length; i++) {
                  dal[i]=parseInt(dal[i])
              }*/
              zv=res.split('#')[13];
              zv=zv.split(',');
              sezon=parseInt(res.split('#')[14]);
              bull=parseInt(res.split('#')[15]);
              crow=res.split('#')[16];
              crow=crow.split(',');
              for (var i = 0; i < crow.length; i++) {
                  crow[i]=parseInt(crow[i])
              }
              upg1=res.split('#')[17];
              upg1=upg1.split(',');
              upg2=res.split('#')[18];
              upg2=upg2.split(',');
              upg3=res.split('#')[19];
              upg3=upg3.split(',');
              upg4=res.split('#')[20];
              upg4=upg4.split(',');
              for (var i = 0; i < upg1.length; i++) {
                  upg1[i]=parseInt(upg1[i]);
                  upg2[i]=parseInt(upg2[i]);
                  upg3[i]=parseInt(upg3[i]);
                  upg4[i]=parseInt(upg4[i]);
              }
              for (var i = upg1.length; i < imgS.length; i++) {
                  upg1[i]=0;
                    upg2[i]=0;
                    upg3[i]=0;
                    upg4[i]=0;
              }
              var atP2, hpP2, eneP2;
              atP2=res.split('#')[21];
              atP2=atP2.split(',');
              hpP2=res.split('#')[22];
              hpP2=hpP2.split(',');
              eneP2=res.split('#')[23];
              eneP2=eneP2.split(',');
              for (var i = 0; i < atP2.length; i++) {
                  atP[i]=parseInt(atP2[i]);
                  hpP[i]=parseInt(hpP2[i]);
                  eneP[i]=parseInt(eneP2[i]);
              }
              rang=res.split('#')[24];
              rang=rang.split(',');
              for (var i = 0; i < rang.length; i++) {
                  rang[i]=parseInt(rang[i])
              }
              haveAr=res.split('#')[25];
              haveAr=haveAr.split(',');
              for (var i = 0; i < haveAr.length; i++) {
                  haveAr[i]=parseInt(haveAr[i])
              }
              haveAr2=res.split('#')[26];
              haveAr2=haveAr2.split(',');
              for (var i = 0; i < haveAr2.length; i++) {
                  haveAr2[i]=parseInt(haveAr2[i])
              }
              AR=res.split('#')[27];
              AR=AR.split(',');
              for (var i = 0; i < AR.length; i++) {
                  AR[i]=parseInt(AR[i])
              }
              AR2=res.split('#')[28];
              AR2=AR2.split(',');
              for (var i = 0; i < AR2.length; i++) {
                  AR2[i]=parseInt(AR2[i])
              }
              upgA1=res.split('#')[29];
              upgA1=upgA1.split(',');
              for (var i = 0; i < upgA1.length; i++) {
                  upgA1[i]=parseInt(upgA1[i])
              }
              upgA2=res.split('#')[30];
              upgA2=upgA2.split(',');
              for (var i = 0; i < upgA2.length; i++) {
                  upgA2[i]=parseInt(upgA2[i])
              }
              bnb=res.split('#')[31];
              bnb=bnb.split(',');
              for (var i = 0; i < bnb.length; i++) {
                  bnb[i]=parseInt(bnb[i])
              }
              bnb2=res.split('#')[32];
              bnb2=bnb2.split(',');
              for (var i = 0; i < bnb2.length; i++) {
                  bnb2[i]=parseInt(bnb2[i])
              }
              bnb3=res.split('#')[33];
              bnb3=bnb3.split(',');
              for (var i = 0; i < bnb3.length; i++) {
                  bnb3[i]=parseInt(bnb3[i])
              }
              crowP=res.split('#')[34];
              crowP=crowP.split(',');
              for (var i = 0; i < crowP.length; i++) {
                  crowP[i]=parseInt(crowP[i])
              }
              friend=res.split('#')[35];
              friend=friend.split(',');
              pas=res.split('#')[36];
              pas=parseInt(pas);
              if (res.split('#').length > 40) {
                  var STOP, UDAR2, ULTA;
              STOP=res.split('#')[37];
              STOP=STOP.split(',');
              UDAR2=res.split('#')[38];
                UDAR2=UDAR2.split(',');
              ULTA=res.split('#')[39];
                ULTA=ULTA.split(',');
                  for (var c = 0; c < STOP.length; c++) {
                      stop[c]=STOP[c];
                      udar2[c]=UDAR2[c];
                      ulta[c]=ULTA[c];
                  }
                  prof=res.split('#')[40];
                  prof=prof.split(',');
                  img=res.split('#')[41];
                  img=img.split(',');
              }
              if (res.split('#').length > 42) {
                  var zvP2;
                  mpit=res.split('#')[42];
                  mpit=parseInt(mpit);
                  zvP2=res.split('#')[43];
                  zvP2=zvP2.split(',');
                  for (var i = 0; i < zvP2.length; i++) {
                      zvP[i]=zvP2[i];
                  }
                  haveP=res.split('#')[44];
                  haveP=haveP.split(',');
                  for (var i = 0; i < haveP.length; i++) {
                      haveP[i]=parseInt(haveP[i])
                  }
              }
              if (res.split('#').length > 45) {
                    crowS=[parseInt(res.split('#')[45])];
                }
              if (res.split('#').length > 46) {
                  kmen=parseInt(res.split('#')[46]);
                  sov=res.split('#')[47].split(',');
                  for (var i = 0; i < sov.length; i++) {
                      sov[i]=parseInt(sov[i]);
                  }
              }
              if (res.split('#').length > 48)crowS2[0]=parseInt(res.split('#')[48]);
              if (res.split('#').length > 2349) {
                  for (var i = 0; i < 7; i++) {
                      mapi[i]=res.split('#')[48+i];
                      var newArr=[]
                      for (var j = 0; j < mapi[i].length; j++) {
                          var word;
                          if (mapi[i][j] != ',') {
                              word+=mapi[i][j];
                          } else {
                              newArr.push(word);
                              word="";
                          }
                      }
                      mapi[i]=newArr;
                      //alert(mapi[i])
                  }
              }
              if (profS.length > prof.length) {
                  for (var i = prof.length; i < profS.length; i++) {
                      prof[i]=profS[i];
                      img[i]=imgS[i];
                  }
              }
              if (atStart.length > at.length) {
                    for (var i = at.length; i < atStart.length; i++) {
                        at[i]=atStart[i];
                        hp[i]=hpStart[i];
                        zas[i]=zasStart[i]
                    }
                }
              for (var i = 0; i < imgS.length; i++) {
                  if (upg1[i]==undefined) {
                        upg1[i]=0;
                  }
                  if (upg2[i]==undefined) {
                          upg2[i]=0;
                    }
                  if (upg3[i]==undefined) {
                          upg3[i]=0;
                    }
                  if (upg4[i]==undefined) {
                          upg4[i]=0;
                    }
                  if (zv[i]==undefined) {
                          zv[i]='⭐';
                    }
                  if (skill[i]==undefined) {
                        skill[i]=0;
                  }
                  if (AR[i]==undefined) {
                        AR[i]=0;
                  }
                  if (AR2[i]==undefined) {
                        AR2[i]=0;
                  }
                  if (upgA1[i]==undefined) {
                        upgA1[i]=0;
                  }
                  if (upgA2[i]==undefined) {
                          upgA2[i]=0;
                    }
                  if (rang[i]==undefined) {
                          rang[i]=0;
                    }
              }
              
              menu();
              //save();
          },1000)
      }
      function pass() {
          document.body.style.overflow = '';
          fon();
          why = 1;
          x = 150;
          var mavr = sezon;
          for (var i = 0; i < gift.length; i++) {
              if (bnb[i] == 1) {
                  out('<span style="position:absolute;bottom:10;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift[i] + '</span><img src=https://www.pngarts.com/files/9/Vector-Green-Tick-PNG-Free-Download.png style="position:absolute;bottom:10;left:' + x + ';width:70;height:70;">')
              }
              else if (mavr >= 100) {

                  out('<span style="position:absolute;bottom:10;left:' + x + ';font-size:20px;background:lime;width:70;text-align:center;height:70;color:white;" onclick=ope(' + i + ')>' + gift[i] + '</span>')

              }
              else {
                  out('<span style="position:absolute;bottom:10;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift[i] + '</span>')
              }
              if (bnb2[i] == 1) {
                  out('<span style="position:absolute;top:70;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift2[i] + '</span><img src=https://www.pngarts.com/files/9/Vector-Green-Tick-PNG-Free-Download.png style="position:absolute;top:70;left:' + x + ';width:70;height:70;">')
              }
              else if (pas == 1 && mavr >= 100) {
                  out('<span style="position:absolute;top:70;left:' + x + ';font-size:20px;background:lime;width:70;text-align:center;height:70;color:white;" onclick=ope2(' + i + ')>' + gift2[i] + '</span>')
              }
              else {
                  out('<span style="position:absolute;top:70;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift2[i] + '</span>')
              }

              x += 100;
              mavr -= 100;
          }
          out('<span style="position:fixed;top:' + (170 + tor) + ';left:' + left + ';width:610;background:black;height:2;"></span><span style="position:absolute;top:170;left:0;width:' + (sezon + 50) + ';background:gold;height:2;"></span><span style="position:fixed;top:' + (55 + tor) + ';left:' + left + ';width:100;height:220;background:url(fon.png);background-size:360px 220px;"><span style="position:absolute;top:0;left:0;width:100;height:220;background:#852fff88;"></span><b style="position:absolute;top:30;left:20;color:gold;text-align:center;" onclick=mainp()>Master<br>pass</br></b><b style="position:absolute;top:140;left:20;color:grey;text-align:center;">Free<br>pass</br></b></span><w style="position:fixed;top:80;left:40;width:70;height:60;" onclick=mainp()></w><B style="position:fixed;top:' + tor + ';left:' + left + ';width:610;height:60;background:#630fdf;text-align:center;font-size:40px;color:white;">Block Pass</B><img src=str.png style="position:fixed;top:' + tor + ';left:' + left + ';width:40;height:40;" onclick=menu()><span style="position:fixed;top:'+tor+';right:'+left+';background:blue;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;font-size:15;">&nbsp;<img src=sezon.png width=15 height=15>' + sezon + '&nbsp;</span>')
          if (sezon > 5000) {
              out('<b style="position:absolute;top:140;left:20;color:white;text-align:center;" onclick=replayPass()><button>Обновить</button></br>')
          }
      }
      function replayPass() {
          sezon=0;
          pas=0;
          bnb=[];
          bnb2=[];
          menu();
      }
      function box_l(i) {
          prizMus.currentTime = 0.0;
              menuMus.pause();
                prizMus.play();
            fon2();
            if (i == 0) {
                var ky = rand(10, 13);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
                mony += ky;
            }
            if (i == 1) {
                var ky = rand(0, 2);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ord.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
                ord += ky;
            }
            if (i == 2 && rand(1, 4) == 3) {
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=gem.png style="width:140;height:140;"><br>x1</br></span>')
                gem++;
            }
            else if (i == 2) {
                i++;
            }
            var redHe = [], epiHe = [], mifHe = [], legHe = [];
            for (var j = 0; j < red.length; j++) {
                if (red[j] == 'обычный') {
                    redHe[redHe.length] = j;
                }
                if (red[j] == 'эпический') {
                    epiHe[epiHe.length] = j;
                }
                if (red[j] == 'мифический') {
                    mifHe[mifHe.length] = j;
                }
                if (red[j] == 'легендарный') {
                    legHe[legHe.length] = j;
                }
            }
            if (i == 3 && rand(1, 1) == 1) {
                who = rand(0, legHe.length - 1);
                who = legHe[who];
                out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
                have[have.length] = who;
                setTimeout(ytt, 300, 0);
            }
            else if (i == 3) {
                i++;
            }
            if (i == 4) {

            }
            if (i == 4) {
                prizMus.pause();
                if (why == 1) {
                    pass();
                } else if (why == 2) {
                    shop()
                } else {
                    way();
                }
            }
            pov(document.getElementById("j"), -80)
            out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=box_l(' + (i + 1) + ') oncontextmenu="return false;"></span>')
      }
      function ope(x) {
          bnb[x] = 1;
          if (gift[x] == '<img src=mony.png width=45 height=45><br>x6</br>') {
              mony += 6;
          }
          if (gift[x] == '<img src=mony.png width=45 height=45><br>x5</br>') {
              mony += 5;
          }
          if (gift[x] == '<img src=ord.png width=45 height=45><br>x1</br>') {
              ord += 1;
          }
          if (gift[x] == '<img src=ord.png width=45 height=45><br>x2</br>') {
              ord += 2;
          }
          if (gift[x] == '<img src=cup.png width=45 height=45><br>x15</br>') {
              bull += 15;
          }
          if (gift[x].indexOf('small') != -1) {
              small(0);
          }
          else if (gift[x].indexOf('big') != -1) {
              big(0);
          }
          else if (gift[x].indexOf('mega') != -1) {
              mega(0);
          }
          else if (x == 49) {
              box_l(0);
          }
          else pass()
      }
      function ope2(x) {
          bnb2[x] = 1;
          if (gift2[x] == '<img src=mony.png width=45 height=45><br>x6</br>') {
              mony += 6;
          }
          if (gift2[x] == '<img src=mony.png width=45 height=45><br>x5</br>') {
              mony += 5;
          }
          if (gift2[x] == '<img src=ord.png width=45 height=45><br>x1</br>') {
              ord += 1;
          }
          if (gift2[x] == '<img src=ord.png width=45 height=45><br>x2</br>') {
              ord += 2;
          }
          if (gift2[x] == '<img src=cup.png width=45 height=45><br>x15</br>') {
              bull += 15;
          }
          if (gift2[x].indexOf('small') != -1) {
              small(0);
          }
          else if (gift2[x].indexOf('big') != -1) {
              big(0);
          }
          else if (gift2[x].indexOf('mega') != -1) {
              mega(0);
          }
          else if (x == 49) {
              box_l(0);
          }
          else pass()
      }
      function ope3(x) {
          bnb3[x] = 1;
          if (gift3[x] == '<img src=mony.png width=45 height=45><br>x10</br>') {
              mony += 10;
          }
          if (gift3[x] == '<img src=ord.png width=45 height=45><br>x3</br>') {
              ord += 3;
          }
          if (gift3[x] == '<img src=gem.png width=45 height=45><br>x5</br>') {
              gem += 5;
          }
          if (gift3[x].indexOf(prof[1]) != -1) {
              have[have.length] = 1;
          }
          if (gift3[x].indexOf(prof[2]) != -1) {
              have[have.length] = 2;
          }
          if (gift3[x].indexOf(prof[3]) != -1) {
              have[have.length] = 3;
          }
          if (gift3[x].indexOf(prof[4]) != -1) {
              have[have.length] = 4;
          }
          if (gift3[x].indexOf('prof27.png') != -1) {
                have[have.length] = 24;    
            }
          if (gift3[x].indexOf('small') != -1) {
              small(0);
          }
          else if (gift3[x].indexOf('big') != -1) {
              big(0);
          }
          else if (gift3[x].indexOf('mega') != -1) {
              mega(0);
          }
              else if (gift3[x].indexOf('leg') != -1) {
                    box_l(0);
                }
          else way()
      }
      function mainp() {
          fon()
          out('<span style="position:absolute;top:0;left:0;">0</span>')
          out('<img src=post2.png width=100% height=100% style="position:absolute;top:0;left:0;background:#b4b3ff;">')
          out('<img src=str.png style="position:absolute;top:0;left:0;width:40;height:40;" onclick=pass()>')
          out('<button style="background:lime;border-radius:8px;position:absolute;bottom:10;left:300;color:white;font-size:30;color:white;" onclick=buy_pass()>70<img src=gem.png width=30 height=30></button>')
      }
      function buy_pass() {
          if (gem >= 70) {
              gem-=70;
              pas=1;
              pass();
          }
      }
      function OFF(a) {
          out('<span style="font-size:10;color:red;position:fixed;top:100;left:0;width:100%;text-align:center;z-index:999999999;" id=f' + SI + '>' + a + '</span>')
          setTimeout(vniii, 1000, 1);
      }
      function vniii(r) {
          document.getElementById("f" + SI).style.top = parseInt(document.getElementById("f" + SI).style.top) + 1;

          document.getElementById("f" + SI).style.opacity = r;
          if (r > 0) {setTimeout(vniii, 50, r - 0.05)}
          else {
              SI++;
          }
      }
      function map() {
          batMus.currentTime = 0.0;
          menuMus.pause();
            batMus.play();
          document.body.style.overflow = 'hidden';
          scren.innerHTML = '';
          out('<img src=pole5.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          out('<img src=str.png style="position:absolute;top:0;left:0;width:20;height:20;z-index:1000;" onclick=menu()><span style="position:absolute;bottom:0;left:0;width:50;height:50;border-radius:10px;border:1px ridge black;background:#c6c760;z-index:1000;"><img src=атака.png style="position:absolute;bottom:0;left:0;width:50;heihgt:50;"></span><span style="position:absolute;bottom:0;right:0;width:50;height:50;border-radius:10px;border:1px ridge black;background:#c6c760;z-index:1000;"><img src=молот.png style="position:absolute;bottom:0;left:0;width:50;heihgt:50;" onclick=raft()></span>')
          for (var i = 0; i < 7; i++) {
              for (var j = 0; j < 18; j++) {
                  var word = mapi[i][j], word2 = "";
                  word='<'+word+'>';
                  alert(word)
                  out('<span style="position:absolute;top:'+i*40+';left:'+j*40+';width:40;height:40;" id=box'+(i*60+j)+'>'+word+'</span><span style="position:absolute;top:'+i*40+';left:'+j*40+';width:40;height:40;" id=fon'+(i*60+j)+'></span>');
              }
          }
          out('<span style="position:absolute;top:-10000;left:50;width:510;height:220;background:url(fon.png);background-size:100% 100%;border-radius:12px;border:2px solid black;" id=craft><span style="position:absolute;top:0;left:0;width:510;height:220;border-radius:12px;background:#c6c760ac;"></span><span style="position:absolute;top:15;left:20;width:120;height:190;border:1px ridge black;border-radius:10px;background:#c6c760ac;"><img src=b1.png style="position:absolute;top:-5;left:-40;width:200;height:130;"><button style="position:absolute;bottom:10;left:10;width:100;text-align:center;" onclick=stroit("b1.png")>Строить за 15<img src=ord.png width=12 height=12></button></span><span style="position:absolute;top:15;left:195;width:120;height:190;border:1px ridge black;border-radius:10px;background:#c6c760ac;"><img src=b2.png style="position:absolute;top:-5;left:-40;width:200;height:130;"><button style="position:absolute;bottom:10;left:10;width:100;text-align:center;" onclick=stroit("b2.png")>Строить за 30<img src=ord.png width=12 height=12></button></span><span style="position:absolute;top:15;right:20;width:120;height:190;border:1px ridge black;border-radius:10px;background:#c6c760ac;"><img src=b3.png style="position:absolute;top:-5;left:-40;width:200;height:130;"><button style="position:absolute;bottom:10;left:10;width:100;text-align:center;" onclick=stroit("b3.png")>Строить за 120<img src=ord.png width=12 height=12></button></span></span>')
      }
      function stroit(x) {
          block = x;
          x = 'b1.png'
          craft.style.top=-1000;
          for (var i = 0; i < 7; i++) {
              for (var j = 0; j < 18; j++) {
                  document.getElementById("fon"+(i*60+j)).onclick=function() {
                      put(this.id);
                  }
              }
          }
          
      }
      function put(x) {
          if (block.indexOf(1) != -1) {
              ord-=15
          }
          if (block.indexOf(2) != -1) {
                ord-=30
            }
          if (block.indexOf(3) != -1) {
                ord-=120
            }
          var Y = "";
          for (var i = 0; i < x.length; i++) {
              if (parseInt(x[i])+1) {
                  Y+=x[i];
              }
          }
          x = parseInt(Y);
          document.getElementById("box"+x).innerHTML='<img src='+block+' style="position:absolute;top:0;left:-12.5;width:65;height:40;">';
          mapi[Math.trunc(x/60)][x%60]='img src='+block+' style="position:absolute;top:0;left:-12.5;width:65;height:40;"';
          for (var i = 0; i < 7; i++) {
                for (var j = 0; j < 18; j++) {
                    document.getElementById("fon"+(i*60+j)).onclick=function() {}
                }
            }
      }
      function raft() {
          if (parseInt(craft.style.top)!=25) {
              craft.style.top=25;
          } else {
              craft.style.top=-10000;
          }
      }
      function main(x) {
          document.getElementById("block" + x).innerHTML = '<img src=' + block + ' width=30 height=30>';
          mapi[Math.trunc(x / 60)][x % 60] = '<img src=' + block + ' width=30 height=30>';
          if (block == "krest.png") {
              document.getElementById("block" + x).innerHTML = ' ';
              mapi[Math.trunc(x / 60)][x % 60] = ' ';
          }
      }
      function mainb(y, z) {
          block = y;
          for (var i = 1; i < 5; i++) {
              document.getElementById("c" + i).style.border = "2px solid black";
          }
          document.getElementById("c" + z).style.border = "2px solid gold";
      }
      function setka() {
          for (var i = 0; i < 40; i++) {
              for (var j = 0; j < 40; j++) {
                  if (document.getElementById("block" + (i * 60 + j)).style.border != "0.1px solid black") {
                      document.getElementById("block" + (i * 60 + j)).style.border = "0.1px solid black";

                  }
                  else {
                      document.getElementById("block" + (i * 60 + j)).style.border = "0px solid black";

                  }
              }
          }
      }
      function loker() {
          fon();
          out('<img src=sob1.png width=180 height=75 style="position:absolute;top:20;left:100;" onclick=compl(1)>')
          out('<img src=sob2.png width=180 height=75 style="position:absolute;top:20;right:100;" onclick=compl(2)>')
          out('<img src=sob3.png width=180 height=75 style="position:absolute;top:120;left:100;" onclick=compl(3)>')
          out('<img src=sob4.png width=180 height=75 style="position:absolute;top:120;right:100;" onclick=compl(4)>')
          out('<img src=sob5.png width=180 height=75 style="position:absolute;top:220;left:100;" onclick=compl(5)>')
      }
      function compl(Z) {
          teef = Z;
          menu();
      }
      function way() {
          document.body.style.overflow = '';
          fon();
          why = 3;
          x = 20;
          var mavr = bull, HIHI = 50;
          out('<B style="position:fixed;top:0;left:0;width:100%;height:60;background:#630fdf;text-align:center;font-size:40px;color:white;">Путь наград</B><img src=str.png style="position:fixed;top:' + tor + ';left:' + left + ';width:40;height:40;" onclick=menu()>')
          for (var i = 0; i < gift3.length; i++) {
              if (bnb3[i] == 1) {
                  out('<span style="position:absolute;bottom:70;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift3[i] + '</span><img src=https://www.pngarts.com/files/9/Vector-Green-Tick-PNG-Free-Download.png style="position:absolute;bottom:70;left:' + x + ';width:70;height:70;">')
              }
              else if (mavr >= HIHI) {


                  out('<span style="position:absolute;bottom:70;left:' + x + ';font-size:20px;background:lime;width:70;text-align:center;height:70;color:white;" onclick=ope3(' + i + ')>' + gift3[i] + '</span>')

              }
              else {
                  out('<span style="position:absolute;bottom:70;left:' + x + ';font-size:20px;background:grey;width:70;text-align:center;height:70;color:white;">' + gift3[i] + '</span>')
              }


              x += 100;
              mavr -= HIHI;
              if (i == 40) {
                  HIHI = 100;
              }
              if (i == 60) {
                  HIHI = 250;
              }
              if (i == 80) {
                  HIHI = 500;
              }
          }

      }
      function shop() {
          save();
          document.body.style.overflow = '';
          date = new Date;
          fon();
          why = 2;
          out('<img src=https://barnaul.blsew.ru/upload/medialibrary/076/076eef8b5d407c4cf9b1cb64991fa31b.png style="position:fixed;top:'+tor+';right:'+left+';width:50;height:50;z-index:2;" onclick=menu()>')
          out(`<span style="position:absolute;top:20;left:360;width:100;height:200;background:grey;"><span style="position:absolute;top:65;left:10">Еже-<br>дневный</br></span></span>
          <span style="position:absolute;top:20;left:480;width:100;height:200;background:grey;"><span style="position:absolute;top:65;left:10">Еже-<br>месячный</br></span></span>
          <span style="position:absolute;top:20;left:600;width:100;height:200;background:grey;"><span style="position:absolute;top:65;left:10">Еже-<br>годный</br></span></span>
          <span style="position:absolute;top:20;left:720;width:100;height:200;background:grey;"><span style="position:absolute;top:65;left:20">Бонус</span></span>
          <span style="position:absolute;top:20;left:840;width:100;height:200;background:grey;"><span style="position:absolute;top:65;left:10">Акции дня</span></span>
          <span style="position:absolute;top:20;left:960;width:100;height:200;background:grey;"><span style="position:absolute;top:75;left:20">Рынок</span>
          </span>
          <span style="position:absolute;top:20;left:1080;width:100;height:200;background:grey;"><span style="position:absolute;top:75;left:20">События</span></span>
          <span style="position:absolute;top:20;left:1200;width:100;height:200;background:grey;"><span style="position:absolute;top:75;left:30">Скины</span>
          </span>`)
          out(`<span style="position:absolute;top:20;left:0;width:100;height:200;background:gold;">
          <img src=small.png onclick=jojo(10) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:30;color:white;">30<img src=mony.png width=15 height=15></strong>
          </span>`)
          out(`<span style="position:absolute;top:20;left:120;width:100;height:200;background:gold;">
          <img src=big.png onclick=jojo(11) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:30;color:white;">50<img src=mony.png width=15 height=15></strong>
          </span>`)
          out(`<span style="position:absolute;top:20;left:240;width:100;height:200;background:gold;">
          <img src=mega.png onclick=jojo(12) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:30;color:white;">110<img src=mony.png width=15 height=15></strong>
          </span>`)
          if (parseInt(localStorage.getItem(num + "day")) != date.getDate()) {

              out(`<span style="position:absolute;top:20;left:360;width:100;height:200;background:lime;">
          <img src=small.png onclick=jojo(0) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:5;color:red;">Бесплатно</strong>
          </span>`)
          }
          if (parseInt(localStorage.getItem(num + "month")) != date.getMonth() && date.getDate() == 1) {

              out(`<span style="position:absolute;top:20;left:480;width:100;height:200;background:lime;">
          <img src=big.png onclick=jojo(1) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:5;color:red;">Бесплатно</strong>
          </span>`)
          }
          if (parseInt(localStorage.getItem(num + "year")) != date.getFullYear() && date.getDate() == 1 && date.getMonth() == 0) {

              out(`<span style="position:absolute;top:20;left:600;width:100;height:200;background:lime;">
          <img src=mega.png onclick=jojo(2) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:5;color:red;">Бесплатно</strong>
          </span>`)
          }
          if (parseInt(localStorage.getItem(num + "nohh")) != "1") {

              out(`<span style="position:absolute;top:20;left:720;width:100;height:200;background:lime;">
          <img src=big.png onclick=jojo(3) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:5;color:red;">Бесплатно</strong>
          </span>`)
          }
          if (date.getDate() >= 20 && date.getMonth() < 5) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=mega.png onclick=jojo(4) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:25;color:red;font-size:20px;">11<img src=gem.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDate() >= 10 && date.getMonth() > 5) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=big.png onclick=jojo(5) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:20;color:red;font-size:20px;"><s style="color:black;">50</s> 47<img src=mony.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDate() <= 5 && date.getHours() < 10) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=big.png onclick=jojo(6) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:20;color:red;font-size:20px;"><s style="color:black;">50</s> 40<img src=mony.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDate() < 20 && date.getHours() > 12 && date.getHours() < 20 && date.getMonth() % 2 == 0) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=mega.png onclick=jojo(7) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:20;color:red;font-size:20px;"><s style="color:black;">110</s> 105<img src=mony.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDate() < 20 && date.getHours() > 8 && date.getHours() < 13 && date.getMonth() % 2 == 1) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=small.png onclick=jojo(8) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:20;color:red;font-size:20px;"><s style="color:black;">30</s> 27<img src=mony.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDate() < 20 && date.getHours() > 21 && date.getMonth() % 2 == 1) {
              out(`<span style="position:absolute;top:20;left:840;width:100;height:200;background:gold;">
          <img src=small.png onclick=jojo(9) width=80 height=80 style="position:absolute;top:50;left:10;">
          <strong style="position:absolute;top:140;left:20;color:red;font-size:20px;"><s style="color:black;">30</s> 24<img src=mony.png width=20 height=20></strong>
          </span>`)
          }
          if (date.getDay() == 1) {
                out(`<span style="position:absolute;top:20;left:1080;width:100;height:200;background:gold;" onclick=rul()>
            <strong style="position:absolute;top:80;left:5;color:red;font-size:20px;">Рулетка</strong>
            </span>`)
            }

          if (date.getDay() == 5 && date.getDate() > 5 && date.getDate() < 16) {
              out(`<span style="position:absolute;top:20;left:1080;width:100;height:200;background:gold;" onclick=yach()>
          <strong style="position:absolute;top:80;left:5;color:red;font-size:20px;">Инкубатор</strong>
          </span>`)
          }
          if (date.getDay() == 0) {
              out(`<span style="position:absolute;top:20;left:1080;width:100;height:200;background:gold;" onclick=sunduk()>
          <strong style="position:absolute;top:80;left:5;color:red;font-size:20px;">Хранилище</strong>
          </span>`)
          }
          //alert(date.getDate())
          if (date.getMonth() % 2 == 0 && date.getHours() <= 8) {
              out('<span style="position:absolute;top:20;left:960;width:100;height:200;background:gold;" onclick=trade(0)><span style="position:absolute;top:40;left:5;color:red;font-size:30px;">15<img src=gem.png width=30 height=30><br><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30></br>150<img src=mony.png width=30 height=30></span></span>')

          }
          else if (date.getMonth() % 2 == 0 && date.getHours() <= 16) {
              out('<span style="position:absolute;top:20;left:960;width:100;height:200;background:gold;" onclick=trade(1)><span style="position:absolute;top:40;left:5;color:red;font-size:30px;">45<img src=ord.png width=30 height=30><br><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30></br>15<img src=gem.png width=30 height=30></span></span>')

          }
          else if (date.getMonth() % 2 == 0) {
              out('<span style="position:absolute;top:20;left:960;width:100;height:200;background:gold;" onclick=trade(2)><span style="position:absolute;top:40;left:5;color:red;font-size:30px;">30<img src=gem.png width=30 height=30><br><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30><img src=https://dshi43.krd.muzkult.ru/media/2022/06/02/1296427386/giphy.gif width=30 height=30></br>80<img src=ord.png width=30 height=30></span></span>')

          }


      }
      function yach() {
          fon();
          out('<img src=choOp.png width=30 heihgt=30><img src=choOp1.png width=30 heihgt=30><img src=cho.png style="position:absolute;bottom:70;left:100;width:80;height:120;" onclick=openYach(0) id=egg0><img src=cho.png style="position:absolute;bottom:70;left:265;width:80;height:120;" onclick=openYach(1) id=egg1><img src=cho.png style="position:absolute;bottom:70;right:100;width:80;height:120;" onclick=openYach(2) id=egg2><span style="position:absolute;bottom:20;left:255;color:white;border:2px ridge black;border-radius:10px;background:#303030;width:100px;text-align:center;">&nbsp;Цена: 10<img src=mpit.png width=10 height=10>&nbsp;</span><img src=str.png style="position:absolute;top:0;left:0;width:30;height:30;" onclick=menu()>')
      }
      function openYach(index) {
          if (mpit >= 10) {
              mpit-=10;
          } else {
              return 0;
          }
          var eggs=0;
          document.getElementById("egg"+index).style.height=150;
          if (rand(1,3) == 2) {
              eggs=1;
            document.getElementById("egg"+index).src="choOp1.png";
          } else {
              document.getElementById("egg"+index).src="choOp.png";
          }
          setTimeout(function() {
              document.getElementById("egg"+index).style.height=120;
              document.getElementById("egg"+index).src="cho.png";
              if (eggs == 1) {
                  fon2();
                  who = rand(0, namP.length - 1);
                  out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:-20;left:40;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=pitom' + who + '.png style="width:450;height:300;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
                  haveP[haveP.length] = who;
                  setTimeout(ytt2, 300, 0);
                  pov(document.getElementById("j"), -80)
                  out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=yach() oncontextmenu="return false;"></span>')
              }
          }, 500);
      }
      function jojo(x) {
          if (x == 0) {
              small(0);
              localStorage.setItem(num + "day", date.getDate());
          }
          if (x == 1) {
              big(0);
              localStorage.setItem(num + "month", date.getMonth());
          }
          if (x == 2) {
              mega(0);
              localStorage.setItem(num + "year", date.getFullYear());
          }
          if (x == 3) {
              big(0);
              localStorage.setItem(num + "nohh", 1);
          }
          if (x == 4 && gem > 10) {
              mega(0);
              gem -= 11;
          }
          else if (x == 4) {
              OFF('Недостаточно средств')
          }
          if (x == 5 && mony > 46) {
              big(0);
              mony -= 47;
          }
          else if (x == 5) {
              OFF('Недостаточно средств')
          }
          if (x == 6 && mony > 39) {
              big(0);
              mony -= 40;
          }
          else if (x == 6) {
              OFF('Недостаточно средств')
          }
          if (x == 7 && mony > 104) {
              mega(0);
              mony -= 105;
          }
          else if (x == 7) {
              OFF('Недостаточно средств')
          }
          if (x == 8 && mony > 26) {
              small(0);
              mony -= 27;
          }
          else if (x == 8) {
              OFF('Недостаточно средств')
          }
          if (x == 9 && mony > 23) {
              small(0);
              mony -= 24;
          }
          else if (x == 9) {
              OFF('Недостаточно средств')
          }
          if (x == 10 && mony > 29) {
              small(0);
              mony -= 30;
          }
          else if (x == 10) {
              OFF('Недостаточно средств')
          }
          if (x == 11 && mony > 49) {
              big(0);
              mony -= 50;
          }
          else if (x == 11) {
              OFF('Недостаточно средств')
          }
          if (x == 12 && mony > 109) {
              mega(0);
              mony -= 110;
          }
          else if (x == 12) {
              OFF('Недостаточно средств')
          }
          if (x == 13 && gem >= 300) {
              have[have.length] = 18;
              gem -= 300;
          }
          else if (x == 13) {
              OFF('Недостаточно средств')
          }
      }
      function trade(w) {
          if (w == 0 && gem > 14) {
              gem -= 15;
              mony += 150;
          }
          if (w == 1 && ord > 44) {
              ord -= 45;
              gem += 15;
          }
          if (w == 2 && gem > 29) {
              gem -= 30;
              ord += 80;
          }
      }
      function rul() {
          fon();
          out('<span style="position:absolute;top:20;left:205;width:200;height:200;"><img src="ruletka.png"  style="position:absolute;top:20;left:205;width:200;height:200;" width=200 height=200 id=rule></span><img src=rul.png style="position:absolute;top:5;width:30;height:40;left:290;"><button style="position:absolute;top:245;left:200;" onclick=krute()>Крутить за 12<img src=gem.png width=10 height=10></button><img src=str.png style="position:absolute;top:0;left:0;width:30;height:30;" onclick=menu()>')
          rule.style.transform = "rotate(" + 0 + "deg)";
      }
      function krute() {
          if (gem < 12) {
              return 0;
          }
          gem-=12;
          v1 = rand(0, 360);
          v2 = rand(0, 30);
          v3 = rand(0, 30);
          v4 = rand(0, 30);
          krut(0, 5)
      }
      function krut(t, h) {
          rule.style.transform = "rotate(" + t + "deg)";
          if (t > 2600 + v1) {
              var POV = t%360;
              if (POV >= 0 && POV < 45) {
                  have.push(6);
              }
              if (POV >= 45 && POV < 90) {

              }
              if (POV >= 90 && POV < 135) {

                }
              if (POV >= 135 && POV < 180) {

                }
              if (POV >= 180 && POV < 225) {

                }
              if (POV >= 225 && POV < 270) {
                    ord+=35;
                }
              if (POV >= 270 && POV < 315) {
                    mony+=100;
                }
              if (POV >= 45 && POV < 90) {
                    haveAr.push(1);
                }
          }
          else if (t > 2400 + v2) {
              setTimeout(krut, Math.trunc(h), t + 1, h);
          }
          else if (t > 1700 + v3) {
              setTimeout(krut, Math.trunc(h), t + 2, h);
          }
          else if (t > 900 + v4) {
              setTimeout(krut, Math.trunc(h), t + 3, h);
          }
          else setTimeout(krut, Math.trunc(h), t + 4, h);
      }
      function krut2(t, h) {
                    rule.style.transform = "rotate(" + t + "deg)";
                    if (t > 720 + v1) {
                        setTimeout(function() {
                            var POV = t%360;
                            rule.style.top=-10000;
                            rule2.style.top=-10000;
                            if (POV >= 0 && POV < 180) {
                                setInterval(function() {
                                      line.style.width=parseInt(line.style.width)-1;
                                      if (parseInt(line.style.width) == 0) {
                                          compiC();
                                      }
                                  }, 30)
                                compiC();
                            }
                            if (POV >= 180 && POV < 360) {
                                setInterval(function() {
                                      line.style.width=parseInt(line.style.width)-1;
                                      if (parseInt(line.style.width) == 0) {
                                          compiC();
                                      }
                                  }, 30)
                                
                            }
                        }, 1500);
                    }
                    else if (t > 400 + v2) {
                        setTimeout(krut2, Math.trunc(h), t + 1, h);
                    }
                    else if (t > 210 + v3) {
                        setTimeout(krut2, Math.trunc(h), t + 2, h);
                    }
                    else if (t > 90 + v4) {
                        setTimeout(krut2, Math.trunc(h), t + 3, h);
                    }
                    else setTimeout(krut2, Math.trunc(h), t + 4, h);
      }
      function pitom() {
          fon();
          out('<img src=box.png style="position:absolute;top:-10;left:-10;width:400;height:230;"><span style="position:absolute;bottom:40;left:-10;width:400;text-align:center;"><button onclick=box_p(0)>Открыть за 5<img src=ord.png width=10 height=10></button></span><img src=krest.png style="position:absolute;top:22;left:0;width:30;height:30;" onclick=menu()>')
          out('<img src=str.png style="position:absolute;right:150;top:80;width:75;height:75;transform:scale(-1,1);" onclick=pitom2(0)><b style="position:absolute;top:0;left:0;width:610;height:20;text-shadow:1px 1x 1px;color:white;text-align:center;text-shadow: 1px 1px 2px gray;font-size:18;background:blue;border-bottom:2px solid grey;">Магазин питомцев</b>')
      }
      function box_p() {
          if (ord >= 5) {
              ord-=5;
              boxp(0);
          }
      }
      function pitom2(x) {
          fon();
          //out('<b style="position:absolute;top:0;left:0;width:610;height:20;text-shadow:1px 1x 1px;color:white;text-align:center;text-shadow: 1px 1px 2px gray;font-size:18;background:blue;border-bottom:2px solid grey;">Питомцы</b>')
          out('<img src=pitom' + x + '.png style="position:absolute;top:13;left:120;width:380;height:210;">')
          if (haveP.indexOf(x) == -1) {
              out('<img src=dont.png style="position:absolute;top:43;left:210;width:180;height:180;">')
          }
          out('<span style="position:absolute;top:0;left:0;width:100%;text-align:center;font-size:30;"><b>' + namP[x] + '</b></span>')
          out('<span style="position:absolute;top:50;left:8;"><i style="color:blue;"><b>питомец</b></i><br><i style="font-size:10px;"><b>' + clasP[x] + '</b></i></br><p><div style="font-size:6;width:120;color:grey;text-shadow: 1px 1px 2px gray;;font-weight:700">' + bioP[x] + '</div></span></p></span>')
          out('<span style="position:absolute;top:0;right:0;background:#303030;color:white;border: 0.3px solid black;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:15;">&nbsp;<img src=mpit.png width=15 height=15>' + mpit + '&nbsp;</span>')

          out('<span style="position:absolute;top:50;right:20;width:150;height:190;background:#003F9B22;border:0.3px solid blue;"><span style="position:absolute;top:5;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=атак.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + atP[x] + '</span></span><span style="position:absolute;top:35;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=жизнь.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + hpP[x] + '</span></span><span style="position:absolute;top:65;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=щит.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + eneP[x] + '</span></span><span style="position:absolute;top:95;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;" onclick=ul2(2,' + x + ')><img src=ульта.png width=20 height=20><span style=" position:absolute;right:5;top:5;color:grey;font-size:10;">' + ultNP[x] + '</span></span></span>')
          if (haveP.indexOf(x) != -1) {
              out('<img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:5;transform:rotate(180deg);border-right:1px solid black;border-top:1px solid black;border-top-right-radius:10%;" onclick=crq2(0,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:35;transform:rotate(180deg);border-top:1px solid black;" onclick=crq2(1,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:65;transform:rotate(180deg);border-top:1px solid black;" onclick=crq2(2,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:95;transform:rotate(180deg);border-left:1px solid black;border-top:1px solid black;border-top-left-radius:10%;" onclick=crq2(3,' + x + ')><span style="position:absolute;bottom:30;left:5;width:119;color:white;text-align:center;text-shadow: 1px 1px 2px gray;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;border-top-left-radius:10%;border-top-right-radius:10%;">выбрать хозяина</span>');
              out('<img src=str.png style="position:absolute;bottom:5;height:40;left:190;width:40;" onclick=pitom2(' + (x - 1) + ')><button style="position:absolute;bottom:10;left:235;color:white;width:140;text-align:center;background:lime;border:0.2 solid black;text-shadow: 1px 1px 2px gray;" onclick=ul2(1,' + x + ')>Прокачка</button><img src=str.png style="position:absolute;bottom:5;height:40;left:380;width:40;transform:scale(-1,1);" onclick=pitom2(' + (x + 1) + ')>');

          }
          else out('<img src=str.png style="position:absolute;bottom:5;height:40;left:190;width:40;" onclick=pitom2(' + (x - 1) + ')><img src=str.png style="position:absolute;bottom:5;height:40;left:380;width:40;transform:scale(-1,1);" onclick=pitom2(' + (x + 1) + ')>');
          //out('<img src=испы.png style="position:absolute;bottom:55;left:0;width:100;height:30;" onclick=minibattle('+x+')>');
          out('<img src=str.png style="position:fixed;top:'+tor+';left:'+left+';width:40;height:35;" onclick=pitom()>')
          //out('<img src=krest.png style="position:absolute;bottom:0;right:0;width:25;height:25;" onclick=del('+x+')>')
      }
      function ul2(i, x) {
          //#117be5
          out('<span style="position:absolute;top:15;left:80;width:450;height:250;background:url(fon.png);background-size:450px 250px;border:1px solid black;"><span style="position:absolute;top:0;left:0;width:450;height:250;background:#117be577;"></span><b style="position:absolute;top:0;left:0;width:100%;height:30;font-size:20;background:blue;text-align:center;color:white;border-bottom:2px solid grey;text-shadow: 1px 1px 2px gray;">Прокачка</b><img src=krest.png style="position:absolute;top:0;right:0;width:30;height:30;" onclick=pitom2(' + x + ')><img src=pitom' + x + '.png width=340 height=200 style="position:absolute;top:20;left:-80;"><son style="position:absolute;top:65;right:40;width:240;height:150;background:#00c6fe;border:1px solid blue;">')
          if (i == 0 && haveP.indexOf(x) != -1) {
              if (!upg4[x]) {
                  upg4[x]=0;
              }
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Сила</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + atP[x] + '<font color=green>+' + 2 + '</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Жизнь:</b> ' + hpP[x] + '<font color=green>+' + 10 + '</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upg4[x] + '<font color=green>+1</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 3<img src=mpit.png width=10 height=10></br><p>')
              if (upg4[x] == 200) {
                  bo.innerHTML += '<button onclick=upgrade2(0,' + x + ') disabled>макс</button></p></span>'
              } else {
                  bo.innerHTML += '<button   onclick=upgrade2(0,' + x + ')>Улучшить</button></p></span>';
              }
          }
          if (i == 1 && haveP.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Прорыв</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + atP[x] + '<font color=green>+' + 45 + '</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Жизнь:</b> ' + hpP[x] + '<font color=green>+110</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + zvP[x].length + '<font color=green>+1</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 1повторка</br><p>')
                if (zvP[x].length==5) {
                    bo.innerHTML += '<button onclick=upgrade2(3,' + x + ') disabled>макс</button></p></span>'
                } else {
                    bo.innerHTML += '<button onclick=upgrade2(3,' + x + ')>Улучшить</button></p></span>';
                }
          }
          if (i == 2) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">' + ultNP[x] + '</b><b style="position:absolute;top:103;right:125;width:230;height:100;font-size:10px;text-shadow: 1px 1px 2px gray;color:white;text-align:left;">' + ultP[x] + '</b>')
          }
          out('<img src=mot.png style="position:absolute;top:100;left:30;width:40;height:60;transform:scale(-1,1);" onclick=motr2(' + (i - 1) + ',' + x + ')>')
          out('<img src=mot.png style="position:absolute;top:100;right:30;width:40;height:60;" onclick=motr2(' + (i + 1) + ',' + x + ')>')
          out('</son></span>')
      }
      function fonar() {
          fon();
          out('<img src=fonar.png  style="position:absolute;top:60;left:195;width:220;height:140;" id=rule><button style="position:absolute;top:245;left:245;" onclick=krutin(0)>Открыть за 10<img src=ogon.png width=8 height=10></button><span style="position:absolute;top:5;left:0;width:610;text-shadow:1px 1px 2px;text-align:center;color:white;font-size:25;">Фонарь героев</span>')
      }
      function krutin(t) {
          rule.style.transform = "rotate(" + t + "deg)";
          if (t < 720) setTimeout(krutin, 5, t + 5);
      }
      function sunduk() {
          fon();
          out('<span style="position:absolute;top:60;left:190;width:230;height:140;"><img src=ultra.png width=230 height=140></span><button style="position:absolute;top:245;left:245;" onclick=ultraCheck()>Открыть за 50<img src=ord.png width=12 height=12></button><span style="position:absolute;top:5;left:0;width:610;text-shadow:1px 1px 2px;text-align:center;color:white;font-size:25;">Алмазный ящик</span><img src=str.png style="position:absolute;top:0;left:0;width:30;height:30;" onclick=menu()>')
      }
      function ultraCheck() {
          if (ord >= 50) {
              ord-=50;
              ultra(0);
          }
      }
      function ultra(i) {

            prizMus.currentTime = 0.0;
              menuMus.pause();
                prizMus.play();
            fon2();
            if (i == 0) {
                var ky = rand(70, 120);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
                mony += ky;
            }
            if (i == 1) {
                var ky = rand(9, 14);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ord.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
                ord += ky;
            }
            if (i == 2) {
                var ky = rand(5, 8);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=gem.png style="width:140;height:140;"><br>x'+ky+'</br></span>')
                gem+=ky;
            }
            else if (i == 2) {
                i++;
            }
            var redHe = [], epiHe = [], mifHe = [], legHe = [], strHe = [];
            for (var j = 0; j < red.length; j++) {
                if (red[j] == 'обычный') {
                    redHe[redHe.length] = j;
                }
                if (red[j] == 'эпический') {
                    epiHe[epiHe.length] = j;
                }
                if (red[j] == 'мифический') {
                    mifHe[mifHe.length] = j;
                }
                if (red[j] == 'легендарный') {
                    legHe[legHe.length] = j;
                }
                if (red[j] == 'страж') {
                    strHe[strHe.length] = j;
                }
            }
          if (i == 3 && rand(1,4) == 1) {
              who = rand(0, strHe.length - 1);
                who = strHe[who];
                out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
                have[have.length] = who;
                setTimeout(ytt, 300, 0);
          } else if (i == 3) {
              i++;
          }
            if (i == 4) {
                prizMus.pause();
                if (why == 1) {
                    pass();
                } else if (why == 2) {
                    shop()
                } else {
                    way();
                }
            }
            pov(document.getElementById("j"), -80)
            out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=ultra(' + (i + 1) + ') oncontextmenu="return false;"></span>')
        }
      function boxp(i) {
          prizMus.currentTime = 0.0;
          menuMus.pause();
            prizMus.play();
          fon2();
          if (i == 0) {
              var ky = rand(5, 10);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              mony += ky;
          }
          if (i == 1) {
              var ky = rand(1, 3);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mpit.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              mpit += ky;
          }

          if (i == 2) {
              prizMus.pause();
              pitom();

          }
          pov(document.getElementById("j"), -80)
          out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=boxp(' + (i + 1) + ') oncontextmenu="return false;"></span>')
      }
      function small(i) {

          prizMus.currentTime = 0.0;
            menuMus.pause();
              prizMus.play();
          fon2();
          if (i == 0) {
              var ky = rand(10, 13);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              mony += ky;
          }
          if (i == 1) {
              var ky = rand(0, 2);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ord.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              ord += ky;
          }
          if (i == 2 && rand(1, 4) == 3) {
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=gem.png style="width:140;height:140;"><br>x1</br></span>')
              gem++;
          }
          else if (i == 2) {
              i++;
          }
          var redHe = [], epiHe = [], mifHe = [], legHe = [];
          for (var j = 0; j < red.length; j++) {
              if (red[j] == 'обычный') {
                  redHe[redHe.length] = j;
              }
              if (red[j] == 'эпический') {
                  epiHe[epiHe.length] = j;
              }
              if (red[j] == 'мифический') {
                  mifHe[mifHe.length] = j;
              }
              if (red[j] == 'легендарный') {
                  legHe[legHe.length] = j;
              }
          }
          if (i == 3 && rand(1, 40) == 13) {
              who = rand(0, redHe.length - 1);
              who = redHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 3 && rand(1, 66) == 17) {
              who = rand(0, epiHe.length - 1);
              who = epiHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 3 && rand(1, 200) == 89) {
              who = rand(0, mifHe.length - 1);
              who = mifHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 3) {
              i++;
          }
          if (i == 4) {

          }
          if (i == 4) {
              prizMus.pause();
              if (why == 1) {
                  pass();
              } else if (why == 2) {
                  shop()
              } else {
                  way();
              }
          }
          pov(document.getElementById("j"), -80)
          out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=small(' + (i + 1) + ') oncontextmenu="return false;"></span>')
      }
      function big(i) {
          prizMus.currentTime = 0.0;
          menuMus.pause();
            prizMus.play();
          fon2();
          if (i == 0) {
              var ky = rand(15, 23);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              mony += ky;
          }
          if (i == 1) {
              var ky = rand(1, 3);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ord.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              ord += ky;
          }
          if (i == 2 && rand(1, 100) < 70) {
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=gem.png style="width:140;height:140;"><br>x1</br></span>')
              gem++;
          }
          else if (i == 2) {
              i++;
          }
          if (i == 3 && rand(1,4) == 2) {
              var rady = rand(0,2);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=as'+rady+'.png style="width:140;height:140;"><br>Артефакт</br></span>')
              haveAr2.push(rady+1);

          } 
          else if (i == 3) {
              i++;
          }
          var redHe = [], epiHe = [], mifHe = [], legHe = [];
          for (var j = 0; j < red.length; j++) {
              if (red[j] == 'обычный') {
                  redHe[redHe.length] = j;
              }
              if (red[j] == 'эпический') {
                  epiHe[epiHe.length] = j;
              }
              if (red[j] == 'мифический') {
                  mifHe[mifHe.length] = j;
              }
              if (red[j] == 'легендарный') {
                  legHe[legHe.length] = j;
              }
          }
          if (i == 4 && rand(1, 33) == 13) {
              who = rand(0, redHe.length - 1);
              who = redHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4 && rand(1, 66) == 17) {
              who = rand(0, epiHe.length - 1);
              who = epiHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4 && rand(1, 100) == 2) {
              who = rand(0, mifHe.length - 1);
              who = mifHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4) {
              i++;
          }
          if (i == 5) {

          }
          if (i == 5) {
              prizMus.pause();
              if (why == 1) {
                  pass();
              } else if (why == 2) {
                  shop()
              } else {
                  way();
              }
          }
          pov(document.getElementById("j"), -80)
          out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=big(' + (i + 1) + ') oncontextmenu="return false;"></span>')
      }
      function mega(i) {
          prizMus.currentTime = 0.0;
          menuMus.pause();
            prizMus.play();
          fon2();
          if (i == 0) {
              var ky = rand(30, 45);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=mony.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              mony += ky;
          }
          if (i == 1) {
              var ky = rand(2, 7);
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ord.png style="width:140;height:140;"><br>x' + ky + '</br></span>')
              ord += ky;
          }
          if (i == 2) {
              out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=gem.png style="width:140;height:140;"><br>x1</br></span>')
              gem += 2;
          }
          else if (i == 2) {
              i++;
          }
          if (i == 3 && rand(1,4) == 2) {
                var rady = rand(0,7);
                out('<span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=ar'+rady+'.png style="width:140;height:140;"><br>Артефакт</br></span>')
                haveAr.push(rady+1);

            } 
            else if (i == 3) {
                i++;
            }
          var redHe = [], epiHe = [], mifHe = [], legHe = [];
          for (var j = 0; j < red.length; j++) {
              if (red[j] == 'обычный') {
                  redHe[redHe.length] = j;
              }
              if (red[j] == 'эпический') {
                  epiHe[epiHe.length] = j;
              }
              if (red[j] == 'мифический') {
                  mifHe[mifHe.length] = j;
              }
              if (red[j] == 'легендарный') {
                  legHe[legHe.length] = j;
              }
          }
          if (i == 4 && rand(1, 12) == 5) {
              who = rand(0, redHe.length - 1);
              who = redHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4 && rand(1, 40) == 17) {
              who = rand(0, epiHe.length - 1);
              who = epiHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4 && rand(1, 50) == 9) {
              who = rand(0, mifHe.length - 1);
              who = mifHe[who];
              out('<img src=блик.png style="position:absolute;top:0;left:-100;width:100%;height:100%;opacity:0.1;"><span style="position:absolute;top:30;left:0;width:100%;text-align:center;color:red;font-size:40;" id=j><img src=' + img[who] + ' style="width:330;height:200;" id=o></span><span style="position:absolute;top:10;right:40;width:250;" id=h></span>')
              have[have.length] = who;
              setTimeout(ytt, 300, 0);
          }
          else if (i == 4) {
              i++;
          }
          if (i == 5) {

          }
          if (i == 5) {
              prizMus.pause();
              if (why == 1) {
                  pass();
              } else if (why == 2) {
                  shop()
              } else {
                  way();
              }
          }
          pov(document.getElementById("j"), -80)
          out('<span style="position:absolute;top:0;left:0;width:100%;height:100%;" onclick=mega(' + (i + 1) + ') oncontextmenu="return false;"></span>')
      }
      function ytt(u) {
          u -= 4;
          document.getElementById("j").style.left = u;
          if (u > -150) setTimeout(ytt, 10, u)
          else {
              h.innerHTML = '<br><i style="color:white;font-weight:900;font-size:35px;">Новый Боец!</i></br><t style="color:red;font-size:40px;position:relative;left:30;">' + nam[who] + '</t>'
          }
      }
      function ytt2(u) {
            u -= 4;
            document.getElementById("j").style.left = u;
            if (u > -150) setTimeout(ytt2, 10, u)
            else {
                h.innerHTML = '<br><i style="color:white;font-weight:900;font-size:35px;">Новый Питомец!</i></br><t style="color:red;font-size:40px;position:relative;left:30;">' + namP[who] + '</t>'
            }
        }
      function pov(l, r) {
          document.getElementById("j").style.transform = "rotate3d(0,1,0," + r + "deg)";
          if (r != 0) setTimeout(pov, 10, l, r + 4)
      }
      function col(c) {
          if (c == 'обычный') {
              return "green";
          }
          if (c == 'эпический') {
              return "#a203a5";
          }
          if (c == 'мифический') {
              return "red";
          }
          if (c == 'легендарный') {
              return "gold";
          }
          if (c == 'страж') {
                return "blue";
            }
          if (c == 'генерал') {
              return "#ffd6fe";
          }
      }
      function hero(p, oll, r, e, m, l, s, g) {
          document.body.style.overflow='';
          fon();
          var q = 130, u = 20;
          out('<img src=str.png style="position:fixed;top:'+tor+';left:'+left+';width:40;height:35;z-index:2;" onclick=menu()>')
         // alert(tor+" "+left)
          out('<img src=dopmenu.png style="position:fixed;top:'+tor+';right:'+left+';width:40;height:40;z-index:2;" onclick=dopMenu()>')
          var redHe = [], epiHe = [], mifHe = [], legHe = [], strHe = [], gerHe= [];
          for (var i = 0; i < red.length; i++) {
              if (red[i] == 'обычный') {
                  redHe[redHe.length] = i;
              }
              if (red[i] == 'эпический') {
                  epiHe[epiHe.length] = i;
              }
              if (red[i] == 'мифический') {
                  mifHe[mifHe.length] = i;
              }
              if (red[i] == 'легендарный') {
                  legHe[legHe.length] = i;
              }
              if (red[i] == 'страж') {
                    strHe[strHe.length] = i;
                }
              if (red[i] == 'генерал') {
                  gerHe[gerHe.length] = i;
              }
          }
          if (p == 1) {
              for (var i = 0; i < redHe.length; i++) {
                  if (have.indexOf(redHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:green;" id=bg' + i + ' onclick=horo(' + redHe[i] + ')><img src=' + prof[redHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[redHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[redHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=blG' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[redHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(redHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[redHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[redHe[i]]/50)+'</b></span></span>')
                      if (skill[redHe[i]] == 100) {
                          document.getElementById("blG" + i).style.background = '#776707';
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
              for (var i = 0; i < epiHe.length; i++) {
                  if (have.indexOf(epiHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:#a203a5;" id=bg' + i + ' onclick=horo(' + epiHe[i] + ')><img src=' + prof[epiHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[epiHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[epiHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=ble' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[epiHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(epiHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[epiHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[epiHe[i]]/50)+'</b></span></span>')
                      if (skill[epiHe[i]] == 100) {
                          document.getElementById("ble" + i).style.background = '#776707';
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
              for (var i = 0; i < mifHe.length; i++) {
                  if (have.indexOf(mifHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:red;" id=bg' + i + ' onclick=horo(' + mifHe[i] + ')><img src=' + prof[mifHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[mifHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[mifHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=blm' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[mifHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(mifHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[mifHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[mifHe[i]]/50)+'</b></span></span>')
                      if (skill[mifHe[i]] == 100) {
                          document.getElementById("blm" + i).style.background = '#776707';
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
              for (var i = 0; i < legHe.length; i++) {
                  if (have.indexOf(legHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:gold;" id=bg' + i + ' onclick=horo(' + legHe[i] + ')><img src=' + prof[legHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[legHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[legHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bll' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[legHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(legHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[epiHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[legHe[i]]/50)+'</b></span></span>')
                      if (skill[legHe[i]] == 100) {
                          document.getElementById("bll" + i).style.background = '#776707';
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
              for (var i = 0; i < strHe.length; i++) {
                    if (have.indexOf(strHe[i]) != -1) {
                        out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:blue;" id=bg' + i + ' onclick=horo(' + strHe[i] + ')><img src=' + prof[strHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[strHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[strHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bll' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[strHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(strHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[strHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[strHe[i]]/50)+'</b></span></span>')
                        if (skill[strHe[i]] == 100) {
                            document.getElementById("bll" + i).style.background = '#776707';
                        }
                        q += 110;
                        if (q > 460) {
                            u += 110;
                            q = 130;
                        }
                    }
                }
              for (var i = 0; i < gerHe.length; i++) {
                  if (have.indexOf(gerHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);" id=bg' + i + ' onclick=horo(' + gerHe[i] + ')><img src=' + prof[gerHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[gerHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[gerHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bll' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[gerHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(gerHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[gerHe[i]] / 10) + '</b><span style="position:absolute;top:-8;right:-8;width:25;height:25;"><img src=rang.png width=25 height=25><b style="position:absolute;top:7.5;left:0;width:25;font-size:9;text-align:center;">'+Math.trunc(rang[gerHe[i]]/50)+'</b></span></span>')
                      if (skill[gerHe[i]] == 100) {
                          document.getElementById("bll" + i).style.background = '#776707';
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
          }
          if (oll + r > 0) {
              out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:green;font:size:30;">Обычные</b>')
              u += 40;
              q = 130;
              for (var i = 0; i < redHe.length; i++) {
                  if (have.indexOf(redHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:green;" onclick=horo(' + redHe[i] + ')><img src=' + prof[redHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[redHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[redHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[redHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(redHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[redHe[i]] / 10) + '</b></span>')
                      if (skill[redHe[i]] == 100) {
                          document.getElementById("bl" + i).style.background = '#776707';
                      }
                  }
                  else {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:green;" onclick=horo(' + redHe[i] + ')><img src=' + prof[redHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[redHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                  }
                  q += 110;
                  if (q > 460) {
                      u += 110;
                      q = 130;
                  }
              }
              u += 100;
          }
          if (oll + e > 0) {
              out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:#a203a5;font:size:30;">Эпические</b>')
              u += 40;
              q = 130;
              for (var i = 0; i < epiHe.length; i++) {
                  if (have.indexOf(epiHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:#a203a5;" onclick=horo(' + epiHe[i] + ')><img src=' + prof[epiHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[epiHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[epiHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=blE' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[epiHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(epiHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[epiHe[i]] / 10) + '</b></span>')
                      if (skill[epiHe[i]] == 100) {
                          document.getElementById("blE" + i).style.background = '#776707';
                      }
                  }
                  else {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:#a203a5;" onclick=horo(' + epiHe[i] + ')><img src=' + prof[epiHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[epiHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                  }
                  q += 110;
                  if (q > 460) {
                      u += 110;
                      q = 130;
                  }
              }
              u += 100;
          }
          if (oll + m > 0) {
              out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:red;font:size:30;">Мифические</b>')
              u += 40;
              q = 130;
              for (var i = 0; i < mifHe.length; i++) {
                  if (have.indexOf(mifHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:red;" onclick=horo(' + mifHe[i] + ')><img src=' + prof[mifHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[mifHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[mifHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[mifHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(mifHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[mifHe[i]] / 10) + '</b></span>')
                      if (skill[mifHe[i]] == 100) {
                          document.getElementById("bl" + i).style.background = '#776707';
                      }
                  }
                  else {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:red;" onclick=horo(' + mifHe[i] + ')><img src=' + prof[mifHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[mifHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                  }
                  q += 110;
                  if (q > 460) {
                      u += 110;
                      q = 130;
                  }
              }
              u += 100;
          }
          if (oll + l > 0) {
              out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:gold;font:size:30;">Легендарные</b>')
              u += 40;
              q = 130;
              for (var i = 0; i < legHe.length; i++) {
                  if (have.indexOf(legHe[i]) != -1) {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:gold;" onclick=horo(' + legHe[i] + ')><img src=' + prof[legHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[legHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[legHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[legHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(legHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[legHe[i]] / 10) + '</b></span>')
                      if (skill[legHe[i]] == 100) {
                          document.getElementById("bl" + i).style.background = '#776707';
                      }
                  }
                  else {
                      out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:gold;" onclick=horo(' + legHe[i] + ')><img src=' + prof[legHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[legHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                  }
                  q += 110;
                  if (q > 460) {
                      u += 110;
                      q = 130;
                  }
              }
              u+=100;
          }
          if (oll + s > 0) {
                out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:blue;font:size:30;">Стражи</b>')
                u += 40;
                q = 130;
                for (var i = 0; i < strHe.length; i++) {
                    if (have.indexOf(strHe[i]) != -1) {
                        out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:blue;" onclick=horo(' + strHe[i] + ')><img src=' + prof[strHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[strHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[strHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[strHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(strHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[strHe[i]] / 10) + '</b></span>')
                        if (skill[strHe[i]] == 100) {
                            document.getElementById("bl" + i).style.background = '#776707';
                        }
                    }
                    else {
                        out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:blue;" onclick=horo(' + strHe[i] + ')><img src=' + prof[strHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[strHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                    }
                    q += 110;
                    if (q > 460) {
                        u += 110;
                        q = 130;
                    }
                }
            }
            if (oll + g > 0) {
                  out('<b style="position:absolute;top:' + u + ';left:0;text-align:center;width:100%;color:#ffd6fe;font:size:30;">Генералы</b>')
                  u += 40;
                  q = 130;
                  for (var i = 0; i < gerHe.length; i++) {
                      if (have.indexOf(gerHe[i]) != -1) {
                          out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);" onclick=horo(' + gerHe[i] + ')><img src=' + prof[gerHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">' + zv[gerHe[i]] + '</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[gerHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl' + i + '></span><span style="position:absolute;bottom:-12;left:0;color:white;width:' + Math.trunc(skill[gerHe[i]] % 10) * 6 + ';height:6;background:#776707;"></span><img src='+nums(gerHe[i])+'.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">' + Math.trunc(skill[gerHe[i]] / 10) + '</b></span>')
                          if (skill[gerHe[i]] == 100) {
                              document.getElementById("bl" + i).style.background = '#776707';
                          }
                      }
                      else {
                          out('<span style="position:absolute;top:' + u + ';left:' + q + ';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);" onclick=horo(' + gerHe[i] + ')><img src=' + prof[gerHe[i]] + ' width=120 height=70 style="position:absolute;top:0;left:-25;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">' + nam[gerHe[i]] + '</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
                      }
                      q += 110;
                      if (q > 460) {
                          u += 110;
                          q = 130;
                      }
                  }
              }
          /*out('<b style="position:absolute;top:'+u+';left:0;text-align:center;width:100%;color:green;font:size:30;">Обычные</b>')
          u+=40;
          q=130;
          for (var i = 0; i < 5; i++) {
          if(have.indexOf(i) != -1) {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:green;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">'+zv[i]+'</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl'+i+'></span><span style="position:absolute;bottom:-12;left:0;color:white;width:'+Math.trunc(skill[i]%10)*6+';height:6;background:#776707;"></span><img src=num.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">'+Math.trunc(skill[i]/10)+'</b></span>')
          if (skill[i] == 100) {
          document.getElementById("bl"+i).style.background='#776707';
          }
          }
          else {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:green;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
          }
          q+=110;
          if (q > 460) {
          u+=110;
          q=130;
          }
          }
          u+=100;
          out('<b style="position:absolute;top:'+u+';left:0;text-align:center;width:100%;color:#a203a5;font:size:30;">Эпические</b>')
          u+=40;
          q=130;
          for (var i = 5; i < 11; i++) {
          if(have.indexOf(i) != -1) {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:#a203a5;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">'+zv[i]+'</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl'+i+'></span><span style="position:absolute;bottom:-12;left:0;color:white;width:'+Math.trunc(skill[i]%10)*6+';height:6;background:#776707;"></span><img src=num.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">'+Math.trunc(skill[i]/10)+'</b></span>')
          if (skill[i] == 100) {
          document.getElementById("bl"+i).style.background='#776707';
          }
          }
          else {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:#a203a5;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
          }
          q+=110;
          if (q > 460) {
          u+=110;
          q=130;
          }
          }
          u+=100
          out('<b style="position:absolute;top:'+u+';left:0;text-align:center;width:100%;color:red;font:size:30;">Мифические</b>')
          u+=40;
          q=130;
          for (var i = 11; i < 16; i++) {
          if(have.indexOf(i) != -1) {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:red;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">'+zv[i]+'</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl'+i+'></span><span style="position:absolute;bottom:-12;left:0;color:white;width:'+Math.trunc(skill[i]%10)*6+';height:6;background:#776707;"></span><img src=num.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">'+Math.trunc(skill[i]/10)+'</b></span>')
          if (skill[i] == 100) {
          document.getElementById("bl"+i).style.background='#776707';
          }
          }
          else {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:red;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
          }
          q+=110;
          if (q > 460) {
          u+=110;
          q=130;
          }
          }
          u+=100;
          out('<b style="position:absolute;top:'+u+';left:0;text-align:center;width:100%;color:gold;font:size:30;">Легендарные</b>')
          u+=40;
          q=130;
          for (var i = 16; i < 19; i++) {
          if(have.indexOf(i) != -1) {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:gold;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><span style="position:absolute;top:-5;left:0;width:70;font-size:7;text-align:center;">'+zv[i]+'</span><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;" id=bl'+i+'></span><span style="position:absolute;bottom:-12;left:0;color:white;width:'+Math.trunc(skill[i]%10)*6+';height:6;background:#776707;"></span><img src=num.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"><b style="position:absolute;bottom:-13.8;right:0;font-size:10;text-align:center;width:15;color:#4f4105;">'+Math.trunc(skill[i]/10)+'</b></span>')
          if (skill[i] == 100) {
          document.getElementById("bl"+i).style.background='#776707';
          }
          }
          else {
          out('<span style="position:absolute;top:'+u+';left:'+q+';border:0.7px solid black;width:70;height:70;border-bottom:15px solid black;background:gold;" onclick=horo('+i+')><img src='+prof[i]+' width=70 height=70 style="position:absolute;top:0;left:0;"><b style="position:absolute;bottom:0;left:0;font-size:10;color:white;">'+nam[i]+'</b><span style="position:absolute;bottom:-12;left:0;color:white;width:70;height:6;background:grey;"></span><img src=dont.png style="position:absolute;bottom:-15;right:0;width:15;height:15;"></span>')
          }
          q+=110;
          if (q > 460) {
          u+=110;
          q=130;
          }
          }*/
      }
      function nums(x) {
          if (sov[x] == 1 && skill[x] >= 139.9) {
              return "num3";
          } else if (sov[x] == 1) {
              return "num2";
          } else {
              return "num";
          }
      }
      function dopMenu() {
          out('<span style="position:fixed;z-index:3;top:0;left:0;width:100%;height:100%;" onclick=dopMenu2()></span>')
          out(`<span style="position:fixed;top:0;right:0;border:1px solid black;width:100;color:white;font-size:10;z-index:3;background:#303030;">
          <input style="width:15;height:15;" type=radio name=w id=r1>Полученные
          <br><input style="width:15;height:15;" type=radio name=w id=r2>Все</br>
          <input style="width:15;height:15;" 
          type=radio name=w id=r3>Обычные
          <br><input style="width:15;height:15;" style="width:15;height:15;" type=radio name=w id=r4>Эпические</br>
          <input style="width:15;height:15;" type=radio name=w id=r5>Мифические
          <br><input style="width:15;height:15;" type=radio name=w id=r6>Легендарные</br>
          <input style="width:15;height:15;" type=radio name=w id=r7>Стражи<br>
          <input style="width:15;height:15;" type=radio name=w id=r8>Генералы
          </span>`)
      }
      function dopMenu2() {
          var p = 0, oll = 0, r = 0, e = 0, m = 0, l = 0, s=0, g=0;
          if (r1.checked) {
              p = 1;
          }
          else if (r2.checked) {
              oll = 1;
          }
          else if (r3.checked) {
              r = 1;
          }
          else if (r4.checked) {
              e = 1;
          }
          else if (r5.checked) {
              m = 1;
          }
          else if (r6.checked) {
              l = 1;
          }
              else if (r7.checked) {
                    s = 1;
                }
                  else if (r8.checked) {
                      g = 1;
                  }
          else {
              p = 1;
          }
          hero(p, oll, r, e, m, l, s, g);

      }
      function horo(x) {
          fon();
          if (red[x] == 'страж' || red[x] == 'генерал') {
              out('<img src=' + img[x] + ' style="position:absolute;top:13;left:120;width:380;height:210;">')
              
              if ((skill[x] >= 70 && sov[x] != 1) || (sov[x] == 1 && skill[x] >= 139.9)) {
                    out('<button style="background:lime;color:white;width:200;position:absolute;top:140;left:210;font-size:10px;" onclick=usover('+x+')>усовершенствовать за 50<img src=kmen.png width=8 height=8></button>')
                }
              out('<span style="position:absolute;top:0;left:0;width:100%;text-align:center;font-size:30;"><b>' + nam[x] + '</b></span>')
              out('<span style="position:absolute;top:50;left:8;"><i style="color:' + col(red[x]) + '"><b>'+red[x]+'</b></i><br><i style="font-size:10px;"><b>' + clas[x] + '</b></i></br><p><div style="font-size:6;width:120;color:grey;text-shadow: 1px 1px 2px gray;;font-weight:700">' + bio[x] + '</div></span></p></span>')

              out('<span style="position:absolute;top:50;right:20;width:150;height:190;background:#003F9B22;border:0.3px solid blue;"><span style="position:absolute;top:5;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=атак.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + at[x] + '</span></span><span style="position:absolute;top:35;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=жизнь.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + hp[x] + '</span></span><span style="position:absolute;top:65;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=щит.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + zas[x] + '</span></span><span style="position:absolute;top:95;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=дал.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + dal[x] + '</span></span><span style="position:absolute;top:125;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=скорость.png width=20 height=20><span style=" position:absolute;right:5;top:2;color:grey;font-size:12;">' + V[x] + '</span></span><span style="position:absolute;top:155;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;" onclick=ul(6,' + x + ')><img src=ульта.png width=20 height=20><span style=" position:absolute;right:5;top:5;color:grey;font-size:10;">' + ultN[x] + '</span></span></span>')
              if (have.indexOf(x) != -1) {
                  out('<button style="position:absolute;bottom:5;left:5;width:119;color:white;text-align:center;text-shadow: 1px 1px 2px gray;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;border-top-left-radius:10%;border-top-right-radius:10%;background:yellow;" onclick=stown('+x+')>выбрать</button>');
                  out('<button style="position:absolute;bottom:10;left:215;color:white;width:23;text-align:center;background:black;border:0.2 solid black;text-shadow: 1px 1px 2px gray;height:18;" onclick=vesh(' + x + ')><img src=vesh.png width=20 height=15 style="position:absolute;top:0;left:0;width:20;height:15;"></button><button style="position:absolute;bottom:10;left:245;color:white;width:140;text-align:center;background:lime;border:0.2 solid black;text-shadow: 1px 1px 2px gray;" onclick=ul(1,' + x + ')>Прокачка</button>');
              }
              //out('<img src=испы.png style="position:absolute;bottom:55;left:0;width:100;height:30;" onclick=minibattle('+x+')>');
              out('<img src=str.png style="position:fixed;top:'+tor+';left:'+left+';width:40;height:35;" onclick=hero(1,0,0,0,0,0,0,0)>')
              out('<img src=krest.png style="position:absolute;bottom:0;right:0;width:25;height:25;" onclick=del(' + x + ')>')
          } else {
              out('<img src=' + img[x] + ' style="position:absolute;top:13;left:120;width:380;height:210;">')
              if ((skill[x] >= 70 && sov[x] != 1) || (sov[x] == 1 && upg1[x]==100 && upg2[x]==50)) {
                  out('<button style="background:lime;color:white;width:200;position:absolute;top:140;left:210;font-size:10px;" onclick=usover('+x+')>усовершенствовать за 50<img src=kmen.png width=8 height=8></button>')
              }
                out('<span style="position:absolute;top:0;left:0;width:100%;text-align:center;font-size:30;"><b>' + nam[x] + '</b></span>')
                out('<span style="position:absolute;top:50;left:8;"><i style="color:' + col(red[x]) + '"><b>' + red[x] + ' боец</b></i><br><i style="font-size:10px;"><b>' + clas[x] + '</b></i></br><p><div style="font-size:6;width:120;color:grey;text-shadow: 1px 1px 2px gray;;font-weight:700">' + bio[x] + '</div></span></p></span>')

                out('<span style="position:absolute;top:50;right:20;width:150;height:190;background:#003F9B22;border:0.3px solid blue;"><span style="position:absolute;top:5;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=атак.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + at[x] + '</span></span><span style="position:absolute;top:35;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=жизнь.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + hp[x] + '</span></span><span style="position:absolute;top:65;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=щит.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + zas[x] + '</span></span><span style="position:absolute;top:95;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=дал.png width=20 height=20><span style=" position:absolute;right:5;top:0;color:grey;">' + dal[x] + '</span></span><span style="position:absolute;top:125;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;"><img src=скорость.png width=20 height=20><span style=" position:absolute;right:5;top:2;color:grey;font-size:12;">' + V[x] + '</span></span><span style="position:absolute;top:155;left:5;border:0.1px solid black;border-bottom:1.2px solid grey;font-size:15;width:140;height:20;background:#303030;" onclick=ul(6,' + x + ')><img src=ульта.png width=20 height=20><span style=" position:absolute;right:5;top:5;color:grey;font-size:10;">' + ultN[x] + '</span></span></span>')
                if (have.indexOf(x) != -1) {
                    out('<img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:5;transform:rotate(180deg);border-right:1px solid black;border-top:1px solid black;border-top-right-radius:10%;" onclick=crq(0,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:35;transform:rotate(180deg);border-top:1px solid black;" onclick=crq(1,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:65;transform:rotate(180deg);border-top:1px solid black;" onclick=crq(2,' + x + ')><img src=gal.png width=30 height=30 style="position:absolute;bottom:0;left:95;transform:rotate(180deg);border-left:1px solid black;border-top:1px solid black;border-top-left-radius:10%;" onclick=crq(3,' + x + ')><span style="position:absolute;bottom:30;left:5;width:119;color:white;text-align:center;text-shadow: 1px 1px 2px gray;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;border-top-left-radius:10%;border-top-right-radius:10%;">выбрать</span>');
                    out('<button style="position:absolute;bottom:10;left:215;color:white;width:23;text-align:center;background:black;border:0.2 solid black;text-shadow: 1px 1px 2px gray;height:18;" onclick=vesh(' + x + ')><img src=vesh.png width=20 height=15 style="position:absolute;top:0;left:0;width:20;height:15;"></button><button style="position:absolute;bottom:10;left:245;color:white;width:140;text-align:center;background:lime;border:0.2 solid black;text-shadow: 1px 1px 2px gray;" onclick=ul(1,' + x + ')>Прокачка</button>');
                }
                //out('<img src=испы.png style="position:absolute;bottom:55;left:0;width:100;height:30;" onclick=minibattle('+x+')>');
                out('<img src=str.png style="position:fixed;top:'+tor+';left:'+left+';width:40;height:35;" onclick=hero(1,0,0,0,0,0,0)>')
                out('<img src=krest.png style="position:absolute;bottom:0;right:0;width:25;height:25;" onclick=del(' + x + ')>')
          }
      }
      function usover(x) {
          if (kmen >= 50 && upg1[x] == 100 && upg2[x] == 50 && sov[x] != 1) {
              kmen-=50;
              upg1[x]=0;
              upg2[x]=0;
              sov[x]=1;
              horo(x);
          } else if (kmen >= 50 && upg1[x] == 100 && upg2[x] == 50) {
              kmen-=50;
              upg1[x]=101
              zas[x]*=2;
              skill[x]=150;
              horo(x);
          } else {
              OFF('Недостаточно камней совершенства или прокачки!');
          }
      }
      function stown(x) {
          if (red[x] == 'страж') {crowS[0]=x;}
          else {crowS2[0]=x;}
      }
      function vesh(x) {
          if (skin.indexOf(x) != -1 && prof[x].indexOf('skin') == -1) {
              prof[x]='skinprof'+x+'.png';
              img[x]='skinhero'+x+'.png';
              stop[x]='skinstop'+x;
              udar2[x]='skinudar'+x;
              ulta[x]='skinulta'+x;
              horo(x);
          } else {
              prof[x]=profS[x];
                img[x]=imgS[x];
                stop[x]='stop'+(x+1);
                udar2[x]='udar'+(x+1);
                ulta[x]='ulta'+(x+1);
              horo(x);
          }
      }
      function crq(x, h) {
          for (var i = 0; i < crow.length; i++) {
              if (crow[i] == h) {
                  crow[i] = -1;
              }
          }
          crow[x] = h
      }
      function crq2(x, h) {
          for (var i = 0; i < crowP.length; i++) {
              crowP[i] = -1;
          }
          crowP[x] = h
      }
      function del(x) {
          out('<span style="position:absolute;top:100;left:240;width:200;background:#303030;border:1.5px solid black;text-align:center;">Удалить героя?<br><button style="background:green;" onclick=horo(' + x + ')>Нет</button> <button style="background:red;" onclick=del2(' + x + ')>Да</button></br></span>')

      }
      function del2(x) {

          if (find(x) > 1) {mony+=100;have.splice(have.indexOf(x), 1); hero(1, 0, 0, 0, 0, 0);}
          else {hero(1, 0, 0, 0, 0, 0); OFF('Данного героя нельзя удалить')}

      }
      function ul(i, x) {
          //#117be5
          out('<span style="position:absolute;top:15;left:80;width:450;height:250;background:url(fon.png);background-size:450px 250px;border:1px solid black;"><span style="position:absolute;top:0;left:0;width:450;height:250;background:#117be577;"></span><b style="position:absolute;top:0;left:0;width:100%;height:30;font-size:20;background:blue;text-align:center;color:white;border-bottom:2px solid grey;text-shadow: 1px 1px 2px gray;">Прокачка</b><img src=krest.png style="position:absolute;top:0;right:0;width:30;height:30;" onclick=horo(' + x + ')><img src=' + img[x] + ' width=340 height=200 style="position:absolute;top:20;left:-80;"><son style="position:absolute;top:65;right:40;width:240;height:150;background:#00c6fe;border:1px solid blue;">')
          if (i == 1 && have.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Сила</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + at[x] + '<font color=green>+' + Math.trunc(at[x] * 0.005) + '</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Жизнь:</b> ' + hp[x] + '<font color=green>+' + Math.trunc(hp[x] * 0.005) + '</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upg1[x] + '<font color=green>+1</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> '+upg1[x]+'<img src=mony.png width=10 height=10></br><p>')
              if (upg1[x] >= 100) {
                  bo.innerHTML += '<button onclick=upgrade(0,' + x + ') disabled>макс</button></p></span>'
              } else {
                  bo.innerHTML += '<button   onclick=upgrade(0,' + x + ')>Улучшить</button></p></span>';
              }
          }
          if (i == 2 && have.indexOf(x) != -1 && red[x] != 'страж') {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Экипировка</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + at[x] + '<font color=green>+'+Math.trunc(atStart[x]*0.02)+'</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Защита:</b> ' + zas[x] + '<font color=green>+'+Math.trunc(zasStart[x]*0.05)+'</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upg2[x] + '<font color=green>+1</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 6<img src=ord.png width=10 height=10><p>')
              if (upg2[x] == 50) {
                  bo.innerHTML += '<button onclick=upgrade(1,' + x + ') disabled>макс</button></p></span>'
              } else {
                  bo.innerHTML += '<button onclick=upgrade(1,' + x + ')>Улучшить</button></p></span>';
              }
          } else if (i == 2 && have.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Экипировка</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + at[x] + '<font color=green>+'+Math.trunc(atStart[x]*0.02)+'</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Защита:</b> ' + zas[x] + '<font color=green>+'+Math.trunc(zasStart[x]*0.03)+'</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upg2[x] + '<font color=green>+1</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 2<img src=kmen.png width=10 height=10><p>')
                if (upg2[x] == 50) {
                    bo.innerHTML += '<button onclick=upgrade(1,' + x + ') disabled>макс</button></p></span>'
                } else {
                    bo.innerHTML += '<button onclick=upgrade(1,' + x + ')>Улучшить</button></p></span>';
                }
          }
          if (i == 3 && have.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">' + arteN[AR[x]] + '</b><img src=ar' + (AR[x] - 1) + '.png style="position:absolute;top:100;right:230;width:30;height:30;" onclick=smenAr(' + x + ',' + i + ')><span style="position:absolute;top:130;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;color:white;"><span style="font-size:7;">' + arte[AR[x]] + '</span></b><p><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upg3[x] + '<font color=green>+1</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 2<img src=gem.png width=10 height=10></p>')
              if (upgA1[x] == 5) {
                  bo.innerHTML += '<button onclick=upgrade(2,' + x + ') disabled>макс</button></p></span>'
              } else if (red[x] != 'страж') {
                  bo.innerHTML += '<button onclick=upgrade(2,' + x + ')>Улучшить</button></p></span>';
                  } else {
                   bo.innerHTML += '<button onclick=upgrade(2,' + x + ') disabled>Улучшить</button></p></span>';
                  }
          }
          if (i == 4 && have.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">' + arteN2[AR2[x]] + '</b><img src=as' + (AR2[x] - 1) + '.png style="position:absolute;top:100;right:230;width:30;height:30;" onclick=smenAr2(' + x + ',' + i + ')><span style="position:absolute;top:130;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;color:white;"><span style="font-size:7;">' + arte2[AR2[x]] + '</span></b><p><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + upgA2[x] + '<font color=green>+1</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 2<img src=gem.png width=10 height=10></p>')
              if (upgA2[x] == 5) {
                    bo.innerHTML += '<button onclick=upgrade(4,' + x + ') disabled>макс</button></p></span>'
                } else if (red[x] != 'страж') {
                    bo.innerHTML += '<button onclick=upgrade(4,' + x + ')>Улучшить</button></p></span>';
                    } else {
                     bo.innerHTML += '<button onclick=upgrade(4,' + x + ') disabled>Улучшить</button></p></span>';
                    }
          }
          if (i == 5 && have.indexOf(x) != -1 && red[x] != 'страж') {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Прорыв</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + at[x] + '<font color=green>+' + 45 + '</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Жизнь:</b> ' + hp[x] + '<font color=green>+110</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + zv[x].length + '<font color=green>+1</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 1повторка</br><p>')
              if (zv[x].length==5) {
                  bo.innerHTML += '<button onclick=upgrade(3,' + x + ') disabled>макс</button></p></span>'
              } else {
                  bo.innerHTML += '<button onclick=upgrade(3,' + x + ')>Улучшить</button></p></span>';
              }
          } else if (i == 5 && have.indexOf(x) != -1) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">Прорыв</b><span style="position:absolute;top:110;right:125;text-align:center;width:230;font-size:12;" id=bo><b style="text-shadow: 1px 1px 2px gray;;color:white;">Атака:</b> ' + at[x] + '<font color=green>+' + 65 + '</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Жизнь:</b> ' + hp[x] + '<font color=green>+0</font></br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Уровень:</b> ' + zv[x].length + '<font color=green>+1</font><br><b style="text-shadow: 1px 1px 2px gray;;color:white;">Цена:</b> 1повторка</br><p>')
                if (zv[x].length==5) {
                    bo.innerHTML += '<button onclick=upgrade(3,' + x + ') disabled>макс</button></p></span>'
                } else {
                    bo.innerHTML += '<button onclick=upgrade(3,' + x + ')>Улучшить</button></p></span>';
                }
          }
          if (i == 6) {
              out('<b style="position:absolute;top:80;right:125;width:240;text-align:center;color:#f0d924;text-shadow: 1px 1px 2px gray;">' + ultN[x] + '</b><b style="position:absolute;top:103;right:125;width:230;height:100;font-size:10px;text-shadow: 1px 1px 2px gray;color:white;text-align:left;">' + ult[x] + '</b>')
          }
          out('<img src=mot.png style="position:absolute;top:100;left:30;width:40;height:60;transform:scale(-1,1);" onclick=motr(' + (i - 1) + ',' + x + ')>')
          out('<img src=mot.png style="position:absolute;top:100;right:30;width:40;height:60;" onclick=motr(' + (i + 1) + ',' + x + ')>')
          out('</son></span>')
      }
      function findAr(x) {
          if (AR[x] == 0) {
              return 1;
          }
          var sum1=0, sum2=0;
          for (var i = 0; i < AR.length; i++) {
              if (AR[i] == AR[x]) {
                  sum1++;
              }
          }
          for (var i = 0; i < haveAr.length; i++) {
                if (haveAr[i] == AR[x]) {
                    sum2++;
                }
            }
          if (sum1 <= sum2) {
              return 1;
          } else {
              return 0;
          }
      }
      function findAr2(x) {
            if (AR2[x] == 0) {
                return 1;
            }
            var sum1=0, sum2=0;
            for (var i = 0; i < AR2.length; i++) {
                if (AR2[i] == AR2[x]) {
                    sum1++;
                }
            }
            for (var i = 0; i < haveAr2.length; i++) {
                  if (haveAr2[i] == AR2[x]) {
                      sum2++;
                  }
              }
            if (sum1 <= sum2) {
                return 1;
            } else {
                return 0;
            }
        }
      function smenAr(x, i) {
          AR[x]++;
          if (AR[x] > 8) {
              AR[x] = 0;
          }
          if (haveAr.indexOf(AR[x]) == -1 || findAr(x) == 0) {
              smenAr(x, i);
          } else {
              ul(i,x)
          }
      }
      function smenAr2(x, i) {
          AR2[x]++;
            if (AR2[x] > 8) {
                AR2[x] = 0;
            }
            if (haveAr2.indexOf(AR2[x]) == -1 || findAr2(x) == 0) {
                smenAr2(x, i);
            } else {
                ul(i,x)
            }
        }
      function motr(y, x) {
          horo(x);
          if (y > 0 && y < 7) {
              ul(y, x);
          } else {
              if (y == 0) {
                  y = 6
              } else {
                  y = 1;
              }
              ul(y, x);
          }
      }
      function motr2(y, x) {
          pitom2(x);
          if (y > -1 && y < 3) {
              ul2(y, x);
          } else {
              if (y == -1) {
                  y = 2
              } else {
                  y = 0;
              }
              ul2(y, x);
          }
      }
      function upgrade(t, x) {
          horo(x);
          if (t == 0 && mony >= upg1[x] && upg1[x] < 100) {
              at[x] += Math.trunc(at[x] * 0.005);
              hp[x] += Math.trunc(hp[x] * 0.005);
              skill[x] += 0.2;
              mony -= upg1[x];
              upg1[x]++;
              ul(1, x)
          }
          else if (t == 1 && ord >= 6 && upg2[x] < 50 && red[x] != "страж") {
              at[x] += Math.trunc(atStart[x]*0.02);
              zas[x] += Math.trunc(zasStart[x]*0.05);
              skill[x] += 0.4;
              ord -= 6;
              upg2[x]++;
              ul(2, x)
          } else if (t == 1 && kmen >= 2 && upg2[x] < 50) {
              at[x] += Math.trunc(atStart[x]*0.02);
                zas[x] += Math.trunc(zasStart[x]*0.03);
                  skill[x] += 0.2;
                  kmen-=2;
                  upg2[x]++;
                  ul(2, x)
              }
          else if (t == 2 && gem >= 2 && upgA1[x] < 5) {
              upgA1[x]++;
              skill[x] += 2;
              gem -= 2;
              upg3[x]++;
              ul(3, x)
          }
          else if (t == 4 && gem >= 2 && upgA2[x] < 5) {
                upgA2[x]++;
                skill[x] += 2;
                gem -= 2;
                ul(4, x)
            }
          else if (t == 3 && find(x) > 1 && zv[x].length < 5) {
              zv[x] += '⭐'
              skill[x] += 10;
              if (red[x] != 'страж') {
              at[x]+=45;
              hp[x]+=110;
              } else {
                  at[x]+=65;
              }
              have.splice(have.indexOf(x), 1)
              ul(5, x)
          }
            else {
                if (t== 0) {ul(1, x);}
                if (t== 1) {ul(2, x);}
                if (t== 2) {ul(3, x);}
                if (t== 3) {ul(5, x);}
                if (t== 4) {ul(4, x);}
            }
      }
      function upgrade2(t, x) {
            pitom2(x);
            if (t == 0 && mpit >= 3 && upg4[x] < 200) {
                atP[x] += 2;
                hpP[x] += 10;
                mpit -= 3;
                upg4[x]++;
                ul2(0, x)
            }
            else if (t == 3 && findPi(x) > 1 && zvP[x].length < 5) {
                alert()
                zvP[x] += '⭐'
                atP[x]+=45;
                hpP[x]+=110;
                haveP.splice(haveP.indexOf(x), 1)
                ul2(1, x)
            }
              else {
                  if (t== 0) {ul2(0, x);}
                  if (t== 1) {ul2(2, x);}
                  if (t== 2) {ul2(3, x);}
                  if (t== 3) {ul2(1, x);}
                  if (t== 4) {ul2(4, x);}
              }
        }
      function find(s) {
          var cnt = 0;
          for (var i = 0; i < have.length; i++) {
              if (have[i] == s) {
                  cnt++;
              }
          }
          return cnt;
      }
      function findPi(s) {
            var cnt = 0;
            for (var i = 0; i < haveP.length; i++) {
                if (haveP[i] == s) {
                    cnt++;
                }
            }
            return cnt;
        }
      function bor(x) {
          k = x;
      }
      function outS(a) {
          document.write(a);
      }
      function battleIsl() {
          out('<img src=pole4.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          var arr=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
          for (var i = 0; i < 4; i++) {
              let a = rand(0,arr.length-1);
              let OKOK=arr[rand(0,arr.length-1)];
              arr.splice(a, 1);
              out('<span style="position:absolute;top:35;left:'+(95+i*120)+';border:2px ridge black;width:60;height:60;background:'+col(red[OKOK])+'" onclick=cyes('+OKOK+')><img src=' + prof[OKOK] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[OKOK] + '</span></span>')
          }
          for (var i = 0; i < 4; i++) {
                let OKOK=rand(0,23);
                out('<span style="position:absolute;top:140;left:'+(95+i*120)+';border:2px ridge black;width:60;height:60;background:'+col(red[OKOK])+'" onclick=cyes('+OKOK+')><img src=' + prof[OKOK] + ' width=106 height=65 style="position:absolute;top:-5;left:-23;"><span style="position:absolute;bottom:-10;left:-2;width:60.3;height:10;font-size:9;background:#303030;color:white;border-bottom:2px ridge black;border-left:2px ridge black;border-right:2px ridge black;text-align:center;">' + nam[OKOK] + '</span></span>')
            }
      }
      function cyes(x) {
          crowI.push(x);
          if (crowI.length==4) {
              battle2();
          }
          else battleIsl();
      }
      function cards() {
          carMus.currentTime = 0.0;
          menuMus.pause();
            carMus.play();
          v1 = rand(0, 360);
            v2 = rand(0, 30);
            v3 = rand(0, 30);
            v4 = rand(0, 30);
          scren.innerHTML='';
          out('<img src=fon3.png style="position:absolute;top:0;left:0;width:100%;height:100%;">');
          out('<span style="position:absolute;top:20;left:205;width:200;height:200;z-index:2;" id=rule><img src="rul2.png"  style="position:absolute;top:20;left:205;width:200;height:200;z-index:2;" width=200 height=200 ></span><img src=rul.png style="position:absolute;top:5;width:30;height:40;left:290;z-index:2;" id=rule2>')
          krut2(0,3);
          out('<img src=flag.png style="position:absolute;top:0;left:30;width:50;height:240;"><img src=flag.png style="position:absolute;top:0;right:30;width:50;height:240;">')
          out('<span style="position:absolute;top:25;left:200;width:210;height:210;border:2px solid black;background:url(table.png);background-size:210px 210px;">')
          for (var i = 0; i < 3; i++) {
                for (var j = 0; j < 3; j++) {
                    if (rand(1,4) == 2) {
                        out('<span style="position:absolute;top:'+(i*70+25)+';left:'+(j*70+200)+';width:70;height:70;" id=xxl'+(j+i*3)+'><img src=tresh'+rand(0,1)+'.png width=70 height=70></span>')
                    }
                    else out('<span style="position:absolute;top:'+(i*70+25)+';left:'+(j*70+200)+';width:70;height:70;" id=xxl'+(j+i*3)+'></span>')
                }
            }
          out('</span>')
          var caps = rand(0,prof.length-1);
          out('<span style="position:absolute;top:-10000;left:130;width:50;height:50;border:2px solid black;background:#a08966;" id=person3 onclick=KARPA(3)><img src='+prof[caps]+' width=80 height=50 style="position:absolute;top:-5;left:-15;"></span>')
          PERSON[3]=prof[caps];
            var direction=10;
            PERSONAT[3]=[];
            for (var j = 0; j < 8; j++) {
                if (rand(1,3) == 1) { 
                  if (j == 0) {
                      var gi=rand(1,2), zna = rand(1,2)+2-gi;
                      if (direction - zna > 0) {
                      direction-=zna;
                          if (gi == 2) {
                              PERSONAT[i][j] = -1*zna;
                            } else {
                                PERSONAT[i][j] = zna;
                            }
                          document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                      }
                  }
                if (j == 1) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                            direction-=zna;
                            if (gi == 2) {
                              PERSONAT[i][j] = -1*zna;
                            } else {
                                PERSONAT[i][j] = zna;
                            }
                            document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                            }
                }
                if (j == 2) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
                if (j == 3) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
                if (j == 4) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:19;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
                if (j == 5) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:19;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
                if (j == 6) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }
                            document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:17.5;" width=15 height=15><b style="position:absolute;top:-6;left:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
                if (j == 7) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }
                            document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:17.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                }
              }
          }
            PERSONHP[3]=Math.trunc((2+direction)/2);
          for (var i = 0; i < 3; i++) {
              var caps = rand(0,prof.length-1);
              out('<span style="position:absolute;top:'+(30+i*75)+';left:130;width:50;height:50;border:2px solid black;background:#a08966;" id=person'+i+' onclick=KARPA('+i+')><img src='+prof[caps]+' width=80 height=50 style="position:absolute;top:-5;left:-15;"></span>')
              PERSON[i]=prof[caps];
              var direction=10;
              PERSONAT[i]=[];
              for (var j = 0; j < 8; j++) {
                  if (rand(1,3) == 1) { 
                    if (j == 0) {
                        var gi=rand(1,2), zna = rand(1,2)+2-gi;
                        if (direction - zna > 0) {
                        direction-=zna;
                            if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }
                            document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                        }
                    }
                  if (j == 1) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                              direction-=zna;
                              if (gi == 2) {
                                PERSONAT[i][j] = -1*zna;
                              } else {
                                  PERSONAT[i][j] = zna;
                              }
                              document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                              }
                  }
                  if (j == 2) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                  if (j == 3) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                  if (j == 4) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:19;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                  if (j == 5) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:19;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                  if (j == 6) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }
                              document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:17.5;" width=15 height=15><b style="position:absolute;top:-6;left:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                  if (j == 7) {
                          var gi=rand(1,2), zna = rand(1,2)+2-gi;
                          if (direction - zna > 0) {
                          direction-=zna;
                              if (gi == 2) {
                                  PERSONAT[i][j] = -1*zna;
                                } else {
                                    PERSONAT[i][j] = zna;
                                }
                              document.getElementById("person"+i).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:17.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                  }
                  }
                }
            }
              PERSONHP[i]=Math.trunc((2+direction)/2);
          }
          for (var i = 0; i < 3; i++) {
                out('<span style="position:absolute;top:'+(30+i*75)+';right:130;width:50;height:50;border:2px solid black;"><img src=quit.png width=50 height=50></span>')
            }
          for (var i = 0; i < 8; i++) {
              out('<b style="position:absolute;top:-1000;left:0;width:70;height:70;color:red;text-align:center;morgin:20;font-size:20;" id=focus'+i+'></b>')
          }
          out('<span style="position:absolute;bottom:10;left:200;width:210;height:20;background:black;border:2px ridge black;"></span><span style="position:absolute;bottom:12;left:202;width:210;height:20;background:#4ddbff;" id=line></span>')
          
      }    
      function KARPA(x) {
          
          for (var i = 0; i < 3; i++) {
              document.getElementById("person"+i).style.border="2px solid black"; 
          }
          document.getElementById("person"+x).style.border="2px solid gold"; 
          for (var i = 0; i < 3; i++) {
              for (var j = 0; j < 3; j++) {
                  document.getElementById("xxl"+(i*3+j)).name=i*3+j;
                  if (document.getElementById("xxl"+(i*3+j)).innerHTML == '') document.getElementById("xxl"+(i*3+j)).onclick=function() {
                      line.style.width=210;
                       line.style.background="red";
                      this.style.border="2px solid black"
                      this.innerHTML=document.getElementById("person"+x).innerHTML;
                      var TINA = this;
                      setTimeout(function() {
                          setTimeout(compiC, 1200);
                          TINA.style.background="#a08966";
                          TINA.innerHTML='<img src='+PERSON[x]+' width=100 height=70 style="position:absolute;top:-5;left:-15;"><img src=duel3.png style="position:absolute;bottom:2;right:2;width:15;height:15;"><b style="position:absolute;bottom:3.5;right:2;width:15;text-align:center;font-size:10;" id=perHp'+TINA.id+'>'+PERSONHP[x]+'</b>'
                          var num = 0, XX="", spaceX = [0,6,1,4,-1,5,2,7,3];
                            for (var k = 0; k < TINA.id.length; k++) {
                                if (parseInt(TINA.id[k])) {
                                    XX+=TINA.id[k];
                                } else if (parseInt(TINA.id[k]) === 0) {
                                    XX+=TINA.id[k];
                                }
                            }
                            XX = parseInt(XX);
                            for (var i2 = Math.trunc(XX/3)-1; i2 < Math.trunc(XX/3)+2; i2++) {
                                for (var j2 = XX%3-1; j2 < XX%3+2; j2++) { 
                                   try { if (PERSONAT[x][spaceX[num]] && i2*3+j2 != XX && i2 >= 0 && j2 >= 0) {
                                                document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML=parseInt(document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML)-PERSONAT[x][spaceX[num]];
                                       if (parseInt(document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML) <= 0) {
                                           document.getElementById("xxl"+(i2*3+j2)).innerHTML='';
                                           document.getElementById("xxl"+(i2*3+j2)).style.border='none';
                                           document.getElementById("xxl"+(i2*3+j2)).style.background='none';
                                           
                                       }
                                    } }catch(e){}
                                    num++;
                                 }
                            }
                          for (var c = 0; c < 8; c++) {
                              uron(PERSONAT[x][c],c,TINA,x)
                          }
                      }, 200)
                  }
              }
          }
          
      }
      function compiC() {
          
          var pusto=[]
          for (var i = 0; i < 9; i++) {
              if (document.getElementById("xxl"+i).innerHTML == '') {
                  pusto.push(i);
              }
          }
          if (pusto.length == 0) {
              var MIR = 0, VRA = 0;
              for (var i = 0; i < 9; i++) {
                  if (document.getElementById("xxl"+i).innerHTML.indexOf("duel3.png") != -1) {
                      MIR++;
                  } 
                  if (document.getElementById("xxl"+i).innerHTML.indexOf("duel4.png") != -1) {
                      VRA++;
                  }
              }
              if (MIR > VRA) {
                  win();
              }
              else if (VRA > MIR) {
                  lose();
              }
              else {
                  lose()
              }
          }
          var mayUron = [];
          var locate, x = 3, spaceX = [0,6,1,4,-1,5,2,7,3], num=0;
          for (var i = 0; i < pusto.length; i++) {
              var XX = pusto[i];
              mayUron[i]=0;
              num=0;
              for (var i2 = Math.trunc(XX/3)-1; i2 < Math.trunc(XX/3)+2; i2++) {
                    for (var j2 = XX%3-1; j2 < XX%3+2; j2++) { 
                       try { if (PERSONAT[x][spaceX[num]] && i2*3+j2 != XX && i2 >= 0 && j2 >= 0) {
                           document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML=document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML;
                            mayUron[i]+=Math.abs(PERSONAT[x][spaceX[num]]);
                        } }catch(e){}
                        num++;
                     }
                }
          }
          var max = -1, IM;
          for (var i = 0; i < mayUron.length; i++) {
                if (mayUron[i] > max) {
                    max=mayUron[i];
                    IM = i;
                }
          }
          locate = pusto[IM];
          var TINA = document.getElementById("xxl"+locate);
                TINA.style.border="2px solid black"
                    TINA.innerHTML=document.getElementById("person"+x).innerHTML;
          line.style.width=210;
            line.style.background="#4ddbff";
                setTimeout(function() {
                    TINA.style.background="#a08966";
                    TINA.innerHTML='<img src='+PERSON[x]+' width=100 height=70 style="position:absolute;top:-5;left:-15;"><img src=duel4.png style="position:absolute;bottom:2;right:2;width:15;height:15;"><b style="position:absolute;bottom:3.5;right:2;width:15;text-align:center;font-size:10;" id=perHp'+TINA.id+'>'+PERSONHP[x]+'</b>'
                    var num = 0, XX="", spaceX = [0,6,1,4,-1,5,2,7,3];
                      for (var k = 0; k < TINA.id.length; k++) {
                          if (parseInt(TINA.id[k])) {
                              XX+=TINA.id[k];
                          } else if (parseInt(TINA.id[k]) === 0) {
                              XX+=TINA.id[k];
                          }
                      }
                      XX = parseInt(XX);
                      for (var i2 = Math.trunc(XX/3)-1; i2 < Math.trunc(XX/3)+2; i2++) {
                          for (var j2 = XX%3-1; j2 < XX%3+2; j2++) { 
                             try { if (PERSONAT[x][spaceX[num]] && i2*3+j2 != XX && i2 >= 0 && j2 >= 0) {
                                          document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML=parseInt(document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML)-PERSONAT[x][spaceX[num]];
                                 if (parseInt(document.getElementById("perHpxxl"+(i2*3+j2)).innerHTML) <= 0) {
                                     document.getElementById("xxl"+(i2*3+j2)).innerHTML='';
                                     document.getElementById("xxl"+(i2*3+j2)).style.border='none';
                                     document.getElementById("xxl"+(i2*3+j2)).style.background='none';
                                     
                                 }
                              } }catch(e){}
                              num++;
                           }
                      }
                    for (var c = 0; c < 8; c++) {
                        uron(PERSONAT[x][c],c,TINA,x)
                    }
                }, 200)
      }
      function uron(x,c,p,t) {
          
          document.getElementById("focus"+c).innerHTML=-x;
          if (x < 0) {
              document.getElementById("focus"+c).style.color="lime";
              document.getElementById("focus"+c).innerHTML="+"+Math.abs(x);
          } else {
              document.getElementById("focus"+c).style.color="red";
          }
          if (c == 0 && x && p.innerHTML != '') {
            document.getElementById("focus"+c).style.left=parseInt(p.style.left)-70;
              document.getElementById("focus"+c).style.top=parseInt(p.style.top)-70;
          }
          if (c == 1 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)+70;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)-70;
            }
          if (c == 2 && x && p.innerHTML != '') {
            document.getElementById("focus"+c).style.left=parseInt(p.style.left)-70;
              document.getElementById("focus"+c).style.top=parseInt(p.style.top)+70;
          }
          if (c == 3 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)+70;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)+70;
            }
          if (c == 4 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)-70;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)-0;
            }
          if (c == 5 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)+70;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)+0;
            }
          if (c == 6 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)-0;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)-70;
            }
          if (c == 7 && x && p.innerHTML != '') {
              document.getElementById("focus"+c).style.left=parseInt(p.style.left)-0;
                document.getElementById("focus"+c).style.top=parseInt(p.style.top)+70;
            }
          
          focus(c,0);

          if (c == 7) {
                    var caps = rand(0,prof.length-1);
                      document.getElementById("person"+t).innerHTML='<img src='+prof[caps]+' width=80 height=50 style="position:absolute;top:-5;left:-15;">';
                document.getElementById("person"+t).style.border='2px solid black';
                      PERSON[t]=prof[caps];
                      var direction=10;
                      PERSONAT[t]=[];
                      for (var j = 0; j < 8; j++) {
                          if (rand(1,3) == 1) { 
                            if (j == 0) {
                                var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                if (direction - zna > 0) {
                                direction-=zna;
                                    if (gi == 2) {
                                        PERSONAT[t][j] = -1*zna;
                                      } else {
                                          PERSONAT[t][j] = zna;
                                      }
                                    document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                }
                            }
                          if (j == 1) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                      direction-=zna;
                                      if (gi == 2) {
                                        PERSONAT[t][j] = -1*zna;
                                      } else {
                                          PERSONAT[t][j] = zna;
                                      }
                                      document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                      }
                          }
                          if (j == 2) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;left:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                          if (j == 3) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:-7.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                          if (j == 4) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;left:-7.5;" width=15 height=15><b style="position:absolute;top:19;left:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                          if (j == 5) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:17.5;right:-7.5;" width=15 height=15><b style="position:absolute;top:19;right:-7.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                          if (j == 6) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }
                                      document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;top:-7.5;left:17.5;" width=15 height=15><b style="position:absolute;top:-6;left:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                          if (j == 7) {
                                  var gi=Math.ceil(rand(1,3)/2), zna = rand(1,2)+2-gi;
                                  if (direction - zna > 0) {
                                  direction-=zna;
                                      if (gi == 2) {
                                          PERSONAT[t][j] = -1*zna;
                                        } else {
                                            PERSONAT[t][j] = zna;
                                        }
                                      document.getElementById("person"+t).innerHTML+='<img src=duel'+gi+'.png style="position:absolute;bottom:-7.5;right:17.5;" width=15 height=15><b style="position:absolute;bottom:-6;right:17.5;font-size:10;width:15;text-align:center;">'+zna+'</b>'
                                          }
                          }
                        }
                    }
                      PERSONHP[t]=Math.trunc((2+direction)/2);
                for (var i = 0; i < 9; i++) {
                    document.getElementById("xxl"+i).onclick=function(){};
                }
            }
      }
      function focus(c,i) {
          document.getElementById("focus"+c).style.top=parseInt(document.getElementById("focus"+c).style.top)+2;
          document.getElementById("focus"+c).style.opacity=1-(i/10);
          if (i < 10) {setTimeout(focus, 30, c, i+1)}
          else {
              document.getElementById("focus"+c).style.top=-1000;
          }
      }
      
      akaunt();
  </script>
  </body>