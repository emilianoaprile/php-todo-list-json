<?php

$title = 'To Do List';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <main>
            <section>
                <div class="container">
                    <h1>{{ title }}</h1>
                </div>
                <form action="">
                    <input type="text">
                </form>
                
            </section>

            <section>
                <div class="container">
                    <ul>
                        <li v-for="(todo, index) in todos" :key="index">{{ todo }}</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>



    <script src="./js/app.js"></script>
</body>
</html>