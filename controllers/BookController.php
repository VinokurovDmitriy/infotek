<?php

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class BookController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    // Гости только просмотр
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'top-authors'],
                        'roles' => ['?', '@'], // гость и авторизованный
                    ],
                    // Юзеры могут CRUD
                    [
                        'allow' => true,
                        'roles' => ['user'],
                    ],
                ],
            ],
        ];
    }
}
