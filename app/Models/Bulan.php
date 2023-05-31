<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    use HasFactory;

    protected $table = 'bulan';

    public $timestamps = false;

    protected $fillable = ['bulan'];

    public static function fromQuery()
    {
        return static::query()
            ->selectRaw('1 as bulan')
            ->unionAll(static::query()->selectRaw('2'))
            ->unionAll(static::query()->selectRaw('3'))
            ->unionAll(static::query()->selectRaw('4'))
            ->unionAll(static::query()->selectRaw('5'))
            ->unionAll(static::query()->selectRaw('6'))
            ->unionAll(static::query()->selectRaw('7'))
            ->unionAll(static::query()->selectRaw('8'))
            ->unionAll(static::query()->selectRaw('9'))
            ->unionAll(static::query()->selectRaw('10'))
            ->unionAll(static::query()->selectRaw('11'))
            ->unionAll(static::query()->selectRaw('12'));
    }
}
