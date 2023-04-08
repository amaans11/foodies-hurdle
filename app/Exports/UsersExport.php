<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->facebook_id,
            $user->data?->get('hurdle_process'),
            $user->data?->get('source_id'),
            $user->data?->get('gender'),
            $user->data?->get('age'),
            $user->data?->get('city'),
            $user->data?->get('state'),
            implode('|', $user->data?->get('lookingFor') ?? []),
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Email',
            'Facebook id',
            'Hurdle process',
            'Source id',
            'Gender',
            'Age',
            'City',
            'State',
            'Looking for',
        ];
    }
}
