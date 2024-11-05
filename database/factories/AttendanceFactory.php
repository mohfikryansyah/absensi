<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Menghasilkan waktu clockIn antara 07:00 dan 07:30
        $clockInHour = rand(7, 7); // Hanya jam 7
        $clockInMinute = rand(0, 30); // Menit antara 0 dan 30
        $clockIn = sprintf('%02d:%02d:%02d', $clockInHour, $clockInMinute, 0); // Detik di-set ke 0

        // Menghasilkan waktu clockOut antara 16:00 dan 17:30
        $clockOutHour = rand(16, 17); // Jam 16 atau 17
        $clockOutMinute = rand(0, 30); // Menit antara 0 dan 30
        $clockOut = $this->faker->boolean(80) ? sprintf('%02d:%02d:%02d', $clockOutHour, $clockOutMinute, 0) : null;


        return [
            'user_id' => 3,
            'latitude' => $this->faker->latitude(-90, 90),
            'longitude' => $this->faker->longitude(-180, 180),
            'clock_in' => $clockIn,
            'clock_out' => $clockOut,
            'status' => $this->faker->randomElement(['Hadir', 'Izin', 'Sakit', 'Alpa']),
            'keterangan' => $this->faker->word,
            'tanggal' => $this->faker->date(),
            'total_jam_kerja' => $clockOut ? Carbon::parse($clockIn)->diffInSeconds(Carbon::parse($clockOut)) : null,
        ];
    }
}
