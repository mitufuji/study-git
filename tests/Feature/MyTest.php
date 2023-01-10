<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = new AppUser;
        $user->name = "山田";
        $user->email = "yamada@test.com";
        $user->password = Hash::make('password');
        $user->save();
            
        $readUser = AppUser::where('name', '山田')->first();
        $this->assertNotNull($readUser);            // データが取得できたかテスト
        $this->assertTrue(Hash::check('password', $readUser->password)); // パスワードが一致しているかテスト
            
        AppUser::where('email', 'yamada@test.com')->delete(); // テストデータの削除
    }
}
