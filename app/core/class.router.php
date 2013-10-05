<?php

class Router {

    public static function route(Request $request) {

        $controller = $request->getController();
        $method = $request->getMethod();
        $args = $request->getArgs();

        // Файл контроллера
        $controllerFile = CTRLDIR . 'controller.' . $controller . '.php';
        // Файл модели (может и не быть)
        $modelFile = MODELDIR . 'model.' . $controller . '.php';

        /*
         * Проверка на существование файла контроллера
         * в случае его отсутсвие будем возвращать ошибку
         */
        if (is_readable($controllerFile)) {


            // Подключаем файл контроллера
            include_once ($controllerFile);

            // Покдлючаем файл модели, если есть.
            if (is_readable($modelFile)) {
                include_once $modelFile;
            }

            // Имя класса контроллера
            $controllerClassName = $controller . 'Controller';

            // Создаем объект класса контроллера
            $controller = new $controllerClassName;

            // Проверяем на существование метода в классе
            if (!method_exists($controller, $method)) {
                // Если нет, то задаем стандартный существующий
                $method = 'index';
            }
            // Вызываем метод
            if (!empty($args)) {
                call_user_func_array(array($controller, $method), $args);
            } else {
                call_user_func(array($controller, $method));
            }
        } else {
            throw new Exception('404 - ' . $request->getController() . ' не найден');
        }
    }

}