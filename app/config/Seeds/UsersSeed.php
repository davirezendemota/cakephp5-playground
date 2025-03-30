<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Users seed.
 */
class UsersSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'email' => 'usuarioteste@gmail.com',
                'password' => '$2y$12$C0YLKajQFs2HDVRBlBTzUer3DMtCpzWU6FusRCzI64Cyg11wuzeIi',
                'created' => '2025-03-30 05:12:29',
                'modified' => '2025-03-30 05:12:29',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
