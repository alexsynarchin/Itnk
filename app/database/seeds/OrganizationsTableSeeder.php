<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('organizations') -> delete();
		$organizations = array(
			array(
				'full_name' => 'Государственное бюджетное учреждение Республики Башкортостан "Конгресс-холл"',
				'short_name' => 'ГБУ РБ "Конгресс-холл"',
				'inn' => '0274903452',
				'kpp' => '027401001',
				'legal_address' => ' 450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'fact_address' => ' 450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'boss_position'=> 'Директор',
				'fio' => 'Байбулатов Ильдар Зинурович',
				'operate_foundation' => 'Устав',
				'rs' => '40601810400003000001',
				'ks' => '20112310410',
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'bik' => '048073001' ,
				'phone' => '276-55-48',
				'email' => 'Chall.76@mail.ru'
			)
		);
		DB::table('organizations') -> insert($organizations);
	}

}