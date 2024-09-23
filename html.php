<?php


session_start();

?>




<!DOCTYPE html>
<html>

<head>
    <title>
        html
    </title>

    <style>
    body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .header {
        position: sticky;
        top: 0;
        text-align: center;
        background-color: lightgray;
        padding: 20px;
    }

    .navigation ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .navigation li {
        display: inline;
        margin-right: 10px;
    }

    .navigation a {
        text-decoration: none;
        color: #333;
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: lightgray;
        padding: 10px;
        text-align: center;
    }

    .content {
        margin-bottom: 100px;
    }
    </style>
</head>

<body>
    <header class="header">
        <h1>Sticky Header</h1>
        <nav class="navigation">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="html.php">Html</a></li>
                <?php if(isset($_SESSION['user_role'])){ ?>
                <li><a href="html.php">My Profile</a></li>
                <?php } ?>
                <?php if(!isset($_SESSION['user_role'])){ ?>

                <li><a href="login.php">Login</a></li>
                <?php } ?>
                <?php if(isset($_SESSION['user_role'])){ ?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </nav>
    </header>

    <div class="content">
        <h2 style="text-align: center;" id="html">
            HTML
        </h2>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nemo mollitia asperiores consequuntur
            tempora dolorum eum impedit ullam laborum, provident nihil blanditiis itaque, cum est vel adipisci minima
            maxime iste quo laudantium! Vero exercitationem ex nostrum, repudiandae optio unde magnam magni, aliquam qui
            temporibus incidunt. Aperiam recusandae alias possimus ab itaque at optio id nemo placeat enim nobis, ullam
            excepturi, aliquid cumque quis saepe rerum voluptas explicabo voluptatum? Saepe voluptates, commodi beatae
            quos aut maiores unde deserunt ipsum dolorum, aspernatur nihil officiis sit natus facilis. Aperiam quidem,
            consequatur tempore cumque accusantium assumenda, voluptatum voluptate neque ducimus aliquid magnam deserunt
            rerum!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quaerat blanditiis odit molestiae.
            Temporibus exercitationem, suscipit id hic cupiditate alias dicta quam nostrum unde quisquam aperiam iusto
            amet sequi magni nobis incidunt molestias ad expedita delectus dolorem. Laborum, aperiam? Aliquam
            accusantium at alias sunt repudiandae sapiente quas voluptatem, corrupti asperiores sit saepe eveniet fugit
            adipisci ipsam odit sequi! Cum in, at ex consequuntur eius culpa aliquid laborum, optio ipsum reiciendis
            magnam recusandae quia iusto dolorem. Atque saepe nemo hic possimus ratione assumenda excepturi quis
            laboriosam asperiores, corporis laudantium cupiditate dolore vel fugiat nisi nesciunt illum voluptatibus
            quisquam distinctio dicta non quam temporibus facere pariatur! Quos labore deleniti unde sapiente officiis
            tempora quia pariatur consequuntur suscipit aspernatur optio iste, doloremque dolorum vel soluta, sequi
            vitae voluptas non veritatis sit porro! Similique commodi voluptatum beatae pariatur repellat reprehenderit
            molestiae? Quae, aliquid reprehenderit! Officiis earum natus ex animi, necessitatibus, deserunt, nemo soluta
            recusandae perspiciatis ea aliquam aliquid! At vitae autem doloremque et obcaecati, id beatae hic? Nisi sed
            perferendis sit eligendi molestiae reiciendis aliquid ad deserunt vero ducimus. Iusto odit pariatur eaque
            repellat quis est quibusdam dolore corrupti amet vitae? Pariatur inventore iusto, molestiae dolore beatae
            delectus alias? Nemo non corporis dolore officia!
        </p>



        <footer class="footer">
            <p>© 2023 GFG. All rights reserved.</p>
        </footer>
</body>

</html>