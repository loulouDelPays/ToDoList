<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \contexts\TaskContext\src\UseCases\ListTasks\ListTaskRequest;
use \contexts\TaskContext\src\Presenters\ListTasksHtmlPresenter;
use \contexts\TaskContext\src\UseCases\DeleteTask\DeleteTaskRequest;
use Silex\Provider\UrlGeneratorServiceProvider;
use \contexts\TaskContext\src\UseCases\AddTask\AddTaskRequest;
use \contexts\TaskContext\src\Presenters\AddTaskHtmlPresenter;

use \contexts\TaskContext\src\Factories\TaskUseCaseFactory;

$taskUseCaseFactory = new TaskUseCaseFactory();


$app->get('/', function () use ($app, $taskUseCaseFactory) {

    $listTasksUseCase = $taskUseCaseFactory->getInstance(TaskUseCaseFactory::LIST_TASKS);

    $responseModel = $listTasksUseCase->process(new ListTaskRequest());

    $presenter = new ListTasksHtmlPresenter();

    return $app['twig']->render('index.html.twig', $presenter->present($responseModel));
})
->bind('homepage')
;

$app->post('/delete_task/{taskId}', function ($taskId) use ($app, $taskUseCaseFactory) {

    $deleteTaskUseCase = $taskUseCaseFactory->getInstance(TaskUseCaseFactory::DELETE_TASK);

    $deleteTaskUseCase->process(new DeleteTaskRequest($taskId));

    return $app->redirect($app['url_generator']->generate('homepage'));

})->bind('delete_task')
;

$app->get('/add_task', function () use ($app) {

    return $app['twig']->render('add_task.html.twig');

})->bind('add_task')
;

$app->post('/add_task', function (Request $request) use ($app, $taskUseCaseFactory) {

    $addTaskUseCase = $taskUseCaseFactory->getInstance(TaskUseCaseFactory::ADD_TASK);

    $response = $addTaskUseCase->process(new AddTaskRequest($request->get('title'), $request->get('description')));

    if($response->isRequestValid()){
        return $app->redirect($app['url_generator']->generate('homepage'));
    } else {
        $presenter = new AddTaskHtmlPresenter();
        return $app['twig']->render('add_task.html.twig', $presenter->present($response));
    }


})->bind('add_task_post_form')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
