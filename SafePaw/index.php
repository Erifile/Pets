<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafePaw | Главная</title>
    <link rel="stylesheet" href="css/indexStyle.css">
    <script src="js/theme-switcher.js" defer></script>
</head>
<body>

<header>
    <h1 class="logo">SavePaw | Приют для животных</h1>

    <?php if(isset($_SESSION['user'])): ?> 
        <p>Вы вошли как <?= $_SESSION['user']['userLogin']?></p>
        <a href="php/logout.php">Выйти</a>
        <?php else: ?>
        <a href="register.php">Зарегистрироваться</a> 
        <?php endif;?>
</header>
    <main>
        <!-- БЛОК 1-->
        <section class="about">
            <div>
                <h2>Кто мы?</h2>
                <p><strong>SafePaw</strong> — это современный частный приют, ставший временным домом для сотен собак и кошек. Мы не просто кормим и лечим питомцев, мы создаем для них условия, приближенные к домашним.</p>
                <p>Каждое животное у нас получает индивидуальный уход, социализацию с кинологами и море любви от наших волонтеров, чтобы путь в новую семью был максимально простым.</p>
            </div>
        </section>

        <!-- БЛОК 2 -->
        <section class="pets">
            <h2>Они ищут дом</h2>
            <div>
                <article>
                    <div>
                        <img src="media/pet1.png" alt="Арчи">
                    </div>
                    
                    <h3>Арчи</h3>
                    <p>Возраст: 3 года. Дружелюбный, активный пес, отлично ладит с детьми и обожает долгие прогулки.</p>
                </article>
                
                <article>
                    <div>
                        <img src="media/pet2.png" alt="Рекс">
                    </div>
                    
                    <h3>Рекс</h3>
                    <p>Возраст: 4 года. Прекрасный охранник и верный компаньон. Знает базовые команды.</p>
                </article>
            </div>
        </section>

        <!-- БЛОК 3-->
        <section class="donate">
            <h2>Не можете взять домой? Помогите иначе!</h2>
            <p>Приюту SafePaw всегда требуются корма, медикаменты, теплые пледы и просто рабочие руки. Даже небольшое пожертвование может спасти чью-то маленькую жизнь.</p>
            <a href="#donate">Сделать доброе дело</a>
        </section>
    </main>


</body>
</html>