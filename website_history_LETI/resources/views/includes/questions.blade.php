<!DOCTYPE html>
<html lang="ru">
<head>
@if(!session('user_name'))
     <script>window.location.href = '{{ url('/login') }}';</script>
     @endif
  <meta charset="UTF-8">
  <title>Викторина о ЛЭТИ</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f0f2f5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .question {
      margin-bottom: 25px;
      padding: 20px;
      border-radius: 12px;
      background: #f9f9f9;
      border-left: 5px solid #3498db;
    }

    .question-title {
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    label {
      display: block;
      margin: 6px 0;
      cursor: pointer;
      transition: 0.2s;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    label:hover {
      background: #e6f2ff;
      padding-left: 5px;
      border-radius: 4px;
    }

    button {
      padding: 12px 24px;
      font-size: 16px;
      background: #3498db;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      display: block;
      margin: 20px auto 0;
    }

    button:hover {
      background: #2980b9;
    }

    #endBtn {
      background: #e74c3c;
      display: none;
    }

    #endBtn:hover {
      background: #c0392b;
    }

    .result {
      margin-top: 30px;
      font-size: 20px;
      font-weight: bold;
      color: #27ae60;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🧠 Викторина о ЛЭТИ</h1>
    <form id="quizForm">
      <!-- Các câu hỏi (q1 -> q10) giữ nguyên từ phiên bản trước nhé -->
      <!-- Dán nguyên 10 câu hỏi ở đây nếu cần -->

      <!-- Để ví dụ ngắn gọn anh để 1 câu mẫu thôi -->
      <div class="question">
        <div class="question-title">1. В каком году был основан ЛЭТИ?</div>
        <label><input type="radio" name="q1" value="A"> A. 1886</label>
        <label><input type="radio" name="q1" value="B"> B. 1905</label>
        <label><input type="radio" name="q1" value="C"> C. 1917</label>
        <label><input type="radio" name="q1" value="D"> D. 1945</label>
      </div>

      <div class="question">
            <div class="question-title">2. Какой статус имеет ЛЭТИ?</div>
            <label><input type="radio" name="q2" value="A"> A. Частный университет</label><br>
            <label><input type="radio" name="q2" value="B"> B. Государственный университет</label><br>
            <label><input type="radio" name="q2" value="C"> C. Международная школа</label><br>
            <label><input type="radio" name="q2" value="D"> D. Колледж</label>
        </div>

        <div class="question">
            <div class="question-title">3. Кто из этих учёных связан с историей ЛЭТИ?</div>
            <label><input type="radio" name="q3" value="A"> A. А. С. Попов</label><br>
            <label><input type="radio" name="q3" value="B"> B. И. Ньютон</label><br>
            <label><input type="radio" name="q3" value="C"> C. М. Кюри</label><br>
            <label><input type="radio" name="q3" value="D"> D. А. Эйнштейн</label>
        </div>

        <div class="question">
            <div class="question-title">4. Какой город является домом ЛЭТИ?</div>
            <label><input type="radio" name="q4" value="A"> A. Москва</label><br>
            <label><input type="radio" name="q4" value="B"> B. Новосибирск</label><br>
            <label><input type="radio" name="q4" value="C"> C. Санкт-Петербург</label><br>
            <label><input type="radio" name="q4" value="D"> D. Екатеринбург</label>
        </div>

        <div class="question">
            <div class="question-title">5. Какую роль играл ЛЭТИ во время Второй мировой войны?</div>
            <label><input type="radio" name="q5" value="A"> A. Не участвовал</label><br>
            <label><input type="radio" name="q5" value="B"> B. Исследования и технологии для фронта</label><br>
            <label><input type="radio" name="q5" value="C"> C. Эвакуация в Сибирь</label><br>
            <label><input type="radio" name="q5" value="D"> D. Был закрыт</label>
        </div>

        <div class="question">
            <div class="question-title">6. Что произошло с ЛЭТИ после войны?</div>
            <label><input type="radio" name="q6" value="A"> A. Ликвидация</label><br>
            <label><input type="radio" name="q6" value="B"> B. Переезд</label><br>
            <label><input type="radio" name="q6" value="C"> C. Восстановление и развитие</label><br>
            <label><input type="radio" name="q6" value="D"> D. Объединение с другим вузом</label>
        </div>

        <div class="question">
            <div class="question-title">7. Какие технологии стали важными для ЛЭТИ после 2000-х годов?</div>
            <label><input type="radio" name="q7" value="A"> A. Механика</label><br>
            <label><input type="radio" name="q7" value="B"> B. Информационные технологии</label><br>
            <label><input type="radio" name="q7" value="C"> C. Химия</label><br>
            <label><input type="radio" name="q7" value="D"> D. Строительство</label>
        </div>

        <div class="question">
            <div class="question-title">8. Какой международный подход развивает ЛЭТИ?</div>
            <label><input type="radio" name="q8" value="A"> A. Только русские студенты</label><br>
            <label><input type="radio" name="q8" value="B"> B. Сотрудничество с зарубежными вузами</label><br>
            <label><input type="radio" name="q8" value="C"> C. Отказ от иностранных связей</label><br>
            <label><input type="radio" name="q8" value="D"> D. Онлайн-обучение только</label>
        </div>

        <div class="question">
            <div class="question-title">9. Что представляет собой миссия ЛЭТИ?</div>
            <label><input type="radio" name="q9" value="A"> A. Стать бизнес-школой</label><br>
            <label><input type="radio" name="q9" value="B"> B. Развитие науки и технологий</label><br>
            <label><input type="radio" name="q9" value="C"> C. Коммерциализация образования</label><br>
            <label><input type="radio" name="q9" value="D"> D. Поддержка искусства</label>
        </div>

        <div class="question">
            <div class="question-title">10. Какое направление НЕ является основным в ЛЭТИ?</div>
            <label><input type="radio" name="q10" value="A"> A. Радиотехника</label><br>
            <label><input type="radio" name="q10" value="B"> B. Электроника</label><br>
            <label><input type="radio" name="q10" value="C"> C. Философия</label><br>
            <label><input type="radio" name="q10" value="D"> D. Информационные технологии</label>
        </div>


      <button type="button" onclick="calculateScore()">Завершить тест</button>
    </form>
    <div id="result" class="result"></div>
    <a href="{{route('home')}}"><button id="endBtn" onclick="alert('Спасибо за участие!')">Завершить</button></a>
  </div>

  <script>
    function calculateScore() {
      const answers = {
        q1: 'A',
        q2: 'B',
        q3: 'A',
        q4: 'C',
        q5: 'B',
        q6: 'C',
        q7: 'B',
        q8: 'B',
        q9: 'B',
        q10: 'C'
      };

      let score = 0;
      for (let key in answers) {
        const radios = document.getElementsByName(key);
        for (let radio of radios) {
          if (radio.checked && radio.value === answers[key]) {
            score++;
          }
        }
      }

      document.getElementById("result").innerText = `🎉 Вы набрали ${score} из 10 баллов!`;
      document.getElementById("endBtn").style.display = 'inline-block';
      window.scrollTo(0, document.body.scrollHeight);
    }
  </script>
</body>
</html>
