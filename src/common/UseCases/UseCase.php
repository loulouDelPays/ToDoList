<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 09:31
 */

namespace common\UseCases;

interface UseCase
{
    public function process(Request $request): Response;
}