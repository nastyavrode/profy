

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Детский отдых в Алтайском крае</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Стили для формы регистрации */
        body {
            background: linear-gradient(135deg, #0a0a0a, #1a1a2e);
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
.container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: rgba(26, 26, 26, 0.9);
            border-radius: 15px;
            border: 2px solid #00a8ff;
            box-shadow: 0 10px 30px rgba(0, 168, 255, 0.2);
        }
        
        h1 {
            text-align: center;
            color: #00a8ff;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #aaa;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 8px;
            background: #1a1a1a;
            color: white;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus {
            outline: none;
            border-color: #00a8ff;
            box-shadow: 0 0 10px rgba(0, 168, 255, 0.3);
        }
        
        .btn {
            background: linear-gradient(135deg, #00a8ff, #0097e6);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 168, 255, 0.4);
        }
        
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .alert-error {
            background: rgba(255, 107, 107, 0.2);
            border: 1px solid #ff6b6b;
            color: #ff6b6b;
        }
        
        .alert-success {
            background: rgba(0, 255, 0, 0.2);
            border: 1px solid #00ff00;
            color: #00ff00;
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #aaa;
        }
        
        .login-link a {
            color: #00a8ff;
            text-decoration: none;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Регистрация на сайте</h1>
        <p style="text-align: center; color: #aaa; margin-bottom: 30px;">
            Зарегистрируйтесь, чтобы записываться на мероприятия
        </p>
        
        <!-- Вывод сообщений об ошибках -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <strong>Ошибки:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <!-- Вывод сообщения об успехе -->
        <?php if ($success): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>
        
        <!-- Форма регистрации -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">✉️ Email:</label>
                <input type="email" id="email" name="email" 
                       value="<?php echo htmlspecialchars($email ?? ''); ?>" 
                       required placeholder="ваш@email.ru">
            </div>
            
            <div class="form-group">
                <label for="first_name">👤 Имя:</label>
                <input type="text" id="first_name" name="first_name" 
                       value="<?php echo htmlspecialchars($first_name ?? ''); ?>" 
                       required placeholder="Иван">
            </div>
<div class="form-group">
                <label for="last_name">👥 Фамилия:</label>
                <input type="text" id="last_name" name="last_name" 
                       value="<?php echo htmlspecialchars($last_name ?? ''); ?>" 
                       required placeholder="Иванов">
            </div>
            
            <div class="form-group">
                <label for="patronymic">🔤 Отчество (если есть):</label>
                <input type="text" id="patronymic" name="patronymic" 
                       value="<?php echo htmlspecialchars($patronymic ?? ''); ?>" 
                       placeholder="Иванович">
            </div>
            
            <div class="form-group">
                <label for="birth_date">🎂 Дата рождения:</label>
                <input type="date" id="birth_date" name="birth_date" 
                       value="<?php echo htmlspecialchars($birth_date ?? ''); ?>" 
                       required>
            </div>
            
            <div class="form-group">
                <label for="password">🔒 Пароль:</label>
                <input type="password" id="password" name="password" 
                       required placeholder="Не менее 6 символов">
            </div>
            
            <div class="form-group">
                <label for="confirm_password">🔁 Подтверждение пароля:</label>
                <input type="password" id="confirm_password" name="confirm_password" 
                       required placeholder="Повторите пароль">
            </div>
            
            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>
        
        <div class="login-link">
            Уже есть аккаунт? <a href="login.php">Войти</a>
        </div>
    </div>
</body>
</html>
