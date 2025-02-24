<?php

namespace App\Console\Commands;

use App\Models\Attendance;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Command;

class AutoAbsensiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:absensi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menandai user yang tidak melakukan absensi sampai pukul 10:00';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tanggal = Carbon::now()->toDateString();
        $users = User::role('staff')->get();

        foreach ($users as $user) {
            $absensi = Attendance::where('user_id', $user->id)
                ->whereDate('tanggal', $tanggal)
                ->first();

            if (!$absensi) {
                // Menandai user sebagai absen otomatis
                Attendance::create([
                    'user_id' => $user->id,
                    'status' => 'Alpa',
                    'clock_in' => '-',
                    'clock_out' => '-',
                    'tanggal' => Carbon::now(),
                ]);
            }
        }

        $this->info('Absensi otomatis telah diisi untuk user yang tidak melakukan absensi');
    }
}
