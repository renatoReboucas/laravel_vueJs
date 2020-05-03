<?php

namespace App\Imports;

use App\Model\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

// class UsersImport implements ToCollection
class UsersImport implements ToModel
{

    public function model(array $row)
    {
        // dd($row);
        return new Product([
            'name' => $row[0],
            'id_category' => $row[1],
            'price' => $row[2],
            'description' => $row[3],

            ]);
        }
        // public function collection(Collection $rows)
        // {
            //     foreach ($rows as $row)
            //     {
                //         dd($row);
                //         Product::create([
                    //             'name' => $row[0],
                    //             'id_category' => $row[1],
                    //             'price' => $row[2],
                    //             'description' => $row[3],
                    //             ]);
                    //         }
                    //     }
                    // }


                }
