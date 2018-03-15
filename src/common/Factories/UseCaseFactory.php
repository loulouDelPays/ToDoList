<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 10:17
 */

namespace common\Factories;


use \common\UseCases\UseCase;

interface UseCaseFactory
{
    public function getInstance(int $useCaseIndex): UseCase;
}