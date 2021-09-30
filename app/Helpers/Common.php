<?php

namespace App\Helpers;

use Uuid;
use Illuminate\Support\Arr;

/**
 * Global Function for Application
 * use: \Common::instance()->myfunction();
 */

class Common
{
	public function welcome()
	{
		return 'Hello World.';
	}

	public static function room($slug)
	{
		$detail = array(
			'DELUXEDOUBLE' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' => trans('messages.detail-DeluxDouble'),
				'imgBlock1' => 'DeluxeDouble/3_1.jpg',
				'imgBlock2' => 'DeluxeDouble/6_1.jpg',
				'slug' => 'DELUXEDOUBLE',
				'detailBlock2' => trans('messages.amenities-deluxedouble'),
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '28 SQ.M.',
					),
					array(
						'img' => 'wifi.png',
						'detail' => 'Wifi',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'armchair.png',
						'detail' => 'Armchair',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
			'DELUXETWIN' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' => trans('messages.detail-DeluxeTwin'),
				'imgBlock1' => 'DeluxeTwin/5_1.jpg',
				'imgBlock2' => 'DeluxeTwin/6_1.jpg',
				'slug' => 'DELUXETWIN',
				'detailBlock2' => trans('messages.amenities-deluxetwin'),
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '28 SQ.M.',
					),
					array(
						'img' => 'wifi.png',
						'detail' => 'Wifi',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'armchair.png',
						'detail' => 'Armchair',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
			'DELUXEDOUBLEWITHBATHTUB' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' =>  trans('messages.detail-DeluxeDoubleWithBath'),
				'imgBlock1' => 'DeluxeDoubleWithBath/2_1.jpg',
				'imgBlock2' => 'DeluxeDoubleWithBath/7_1.jpg',
				'slug' => 'DELUXEDOUBLEWITHBATHTUB',
				'detailBlock2' => trans('messages.amenities-deluxedoublebath'),
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '28 SQ.M.',
					),
					array(
						'img' => 'wifi.png',
						'detail' => 'Wifi',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'iconbath.png',
						'detail' => 'Bathtub',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
			'DELUXETWINWITHBATHTUB' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' => trans('messages.detail-DeluxeTwinWithBath'),
				'imgBlock1' => 'DeluxeTwinWithBath/1.jpg',
				'imgBlock2' => 'DeluxeTwinWithBath/2.jpg',
				'slug' => 'DELUXETWINWITHBATHTUB',
				'detailBlock2' => trans('messages.amenities-deluxetwinbath'),
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '28 SQ.M.',
					),
					array(
						'img' => 'wifi.png',
						'detail' => 'Wifi',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'iconbath.png',
						'detail' => 'Bathtub',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
			'JUNIORSUITE' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' => trans('messages.detail-JuniorSuite'),
				'imgBlock1' => 'Suite/Suite2.jpg',
				'imgBlock2' => 'Suite/4_1.jpg',
				'slug' => 'JUNIORSUITE',
				'detailBlock2' => trans('messages.amenities-junior'),
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '37 SQ.M.',
					),
					array(
						'img' => 'iconbed.png',
						'detail' => 'King size',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'iconbath.png',
						'detail' => 'Bathtub',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
			'FAMILYSUITEWITHBATHTUB' => array(
				'title' => '<h1>Authentically Inviting</h1>',
				'subTitle' =>  trans('messages.detail-FamilyRoom'),
				'imgBlock1' => 'Family/2_1.jpg',
				'imgBlock2' => 'Family/3_1.jpg',
				'slug' => 'FAMILYSUITEWITHBATHTUB',
				'detailBlock2' => trans('messages.amenities-family'), 
				'icon' => array(
					array(
						'img' => 'iconsize.png',
						'detail' => '37 SQ.M.',
					),
					array(
						'img' => 'wifi.png',
						'detail' => 'Wifi',
					),
					array(
						'img' => 'icondesk.png',
						'detail' => 'Working Desk',
					),
					array(
						'img' => 'iconbath.png',
						'detail' => 'Bathtub',
					),
					array(
						'img' => 'icontv.png',
						'detail' => '42 LCD TV',
					),
					array(
						'img' => 'iconkey.png',
						'detail' => 'Eletric Keycord',
					)
				)
			),
		);

		return $detail[$slug];
	}

	public static function gallery($slug)
	{
		$detail = array(
			'INTERIOR' => array(
				'imgBlock1' => 'Interior/img-01.jpg',
				'imgBlock2' => array(
					array(
						'img' => 'Interior/img-02.jpg'
					),
					array(
						'img' => 'Interior/img-03.jpg'
					)
				),
				'imgBlock3' => 'Interior/img-04.jpg',
				'imgBlock4' => array(
					array(
						'img' => 'Interior/img-05.jpg'
					),
					array(
						'img' => 'Interior/img-06.jpg'
					)
				),
				'slug' => 'INTERIOR'
			),
			'FACILITIES' => array(
				'imgBlock1' => 'Facilities/img-01.jpg',
				'imgBlock2' => array(
					array(
						'img' => 'Facilities/img-02.jpg'
					),
					array(
						'img' => 'Facilities/img-03.jpg'
					)
				),
				'imgBlock3' => 'Facilities/img-04.jpg',
				'imgBlock4' => array(
					array(
						'img' => 'Facilities/img-05.jpg'
					),
					array(
						'img' => 'Facilities/img-06.jpg'
					)
				),
				'slug' => 'FACILITIES'
			),
			'EXTERIOR' => array(
				'imgBlock1' => 'Exterior/img-01.jpg',
				'imgBlock2' => array(
					array(
						'img' => 'Exterior/img-02.jpg'
					),
					array(
						'img' => 'Exterior/img-03.jpg'
					)
				),
				'imgBlock3' => 'Exterior/img-04.jpg',
				'imgBlock4' => array(
					array(
						'img' => 'Exterior/img-05.jpg'
					),
					array(
						'img' => 'Exterior/img-06.jpg'
					)
				),
				'slug' => 'EXTERIOR'
			)
		);

		return $detail[$slug];
	}

	public static function instance()
	{
		return new Common();
	}
}
