<?php

namespace app\commands;

use Yii;
use yii\base\Exception;
use yii\helpers\Console;

class RbacController
{
    /**
     * @throws Exception
     * @throws \Exception
     */
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $guest = $auth->createRole('guest');
        $auth->add($guest);

        $user = $auth->createRole('user');
        $auth->add($user);

        $manageBooks = $auth->createPermission('manageBooks');
        $auth->add($manageBooks);

        $auth->addChild($user, $manageBooks);

        echo Console::output("RBAC инициализирован!\n");
    }
}
