<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * @coversNothing
 */
class AppPagesTest extends TestCase
{
    public function getPages()
    {
        return [
            'Главная' => [
                'route'         => 'home',
                'assertViewIs'  => 'index',
                'assertViewHas' => 'messages',
            ],
            'Авторизация' => [
                'route'         => 'login',
                'assertViewIs'  => 'login',
                'assertViewHas' => null,
            ],
            'Регистрация' => [
                'route'         => 'register',
                'assertViewIs'  => 'reg',
                'assertViewHas' => null,
            ],
            'Страница успешной регистрации' => [
                'route'         => 'reg-success',
                'assertViewIs'  => 'reg_success',
                'assertViewHas' => null,
            ],
        ];
    }

    /**
     * Тестируем доступность страниц.
     *
     * @dataProvider getPages
     *
     * @param string  $route
     * @param string  $assertViewIs
     * @param ?string $assertViewHas
     *
     * @return void
     */
    public function testHomePage(string $route, string $assertViewIs, ?string $assertViewHas): void
    {
        $response = $this->get(route($route));

        $response->assertSuccessful();

        $response->assertViewIs($assertViewIs);
        if ($assertViewHas) {
            $response->assertViewHas($assertViewHas);
        }
    }
}
