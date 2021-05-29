<?php

use Illuminate\Database\Seeder;
use App\Models\Property_images;
use Illuminate\Support\Facades\DB;

class dumpDataInPropertyImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_images')->truncate();
        $details = DB::table('property_location')->get();
        $images = false;
        foreach($details as $key => $detail) {

            $name   = time().'.jpg';
            $images[] = [
                'house_id'      => $detail->house_id,
                'user_id'       => $detail->user_id,
                'img_name'      => $name,
                'primary_image' => $name,
                'image_caption' => 'Image Caption '. $key,
                'created_at'    => $detail->created_at,
                'updated_at'    => $detail->created_at
             ];


        }

//        $Property_images = new Property_images();
//        $Property_images->house_id = '1';
//        $Property_images->user_id = '2';
//        $Property_images->img_name = '3';
//        $Property_images->primary_image = '4';
//        $Property_images->image_caption = '5';
//        $Property_images->save();
//
//        Property_images::create($images);
//        Propert_image::insert($images);




        // dump data in property_images table using insert batch

    }
}
