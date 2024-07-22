<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $test = "select";
        $users = User::query()
            ->where('role', User::ROLE_ADMIN)
            ->join()
            ->get();
        /*$users = User::query()
            ->where('role', User::ROLE_ADMIN)
            ->whereHas('order', function ($query) {
                $query->where('count_order', '>', 2)
                ->where('status', 'Подтверждённый');
            })
            ->with(['order' => function ($query) {
                $query->where('count_order', '>', 2)
                    ->where('status', 'Подтверждённый');
            }])
            ->get();*/
        //$baskets = $users->order()
        dd($users);
    }
}
