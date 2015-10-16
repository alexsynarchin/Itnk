<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('organizations') -> delete();
		$organizations = array(
			array(
				'last_document_number'=>'1',
				'contract_number'=> '',
				'inn' => '0274903452',
				'kpp' => '027401001',
				'date' => '',
				'short_name' => 'ГБУ РБ "Конгресс-холл"',
				'full_name' => 'Государственное бюджетное учреждение Республики Башкортостан "Конгресс-холл"',
				'legal_address' => ' 450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'fact_address' => ' 450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '20112310410',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '276-55-48',
				'email' => 'Chall.76@mail.ru',
				'fio' => 'Байбулатов Ильдар Зинурович',
				'operate_foundation' => 'Устав',
				'boss_position'=> 'Директор'
			),
			//2
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150503',
				'inn' => '0277046397',
				'kpp' => '027701001',
				'date' => '20.05.2015',
				'short_name' => ' ГБУК РМБС МК РБ (Музей Боевой Славы)',
				'full_name' => 'Государственное Бюджетное Учреждение Культуры Республиканский Музей Боевой Славы Министерства Культуры Республики Башкортостан',
				'legal_address' => '450044, г Уфа, ул. Комарова, 7',
				'fact_address' => ' 450044, г Уфа, ул. Комарова, 7',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8(347) 260 44 40',
				'email' => 'buhrmbs@mail.ru',
				'fio' => 'Утяев Ильшат Исламович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//3
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150504',
				'inn' => '0267011814',
				'kpp' => '027601001',
				'date' => '27.05.2015',
				'short_name' => ' ГБОУ Споки РБ Сибайский Колледж Искусств',
				'full_name' => 'Государственное бюджетное Образовательное учреждение Среднего Профессионального Образования Культуры и Искусства Республики Башкортостан Сибайский Колледж Искусств',
				'legal_address' => '453833, г. Сибай, пр. Горняков, 14',
				'fact_address' => '453833, г. Сибай, пр. Горняков, 14',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8 (34775) 2 32 15',
				'email' => 'galina-rezepkina@yandex.ru',
				'fio' => 'Камбулатов Азат Гайнитдинович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//4
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150605',
				'inn' => '0274037845',
				'kpp' => '027401001',
				'date' => '15.06.2015',
				'short_name' => 'ГБУКиИ РБ БГХМ им. М.В.Нестерова 22июля',
				'full_name' => 'государственное бюджетное учреждение культуры и искусства Республики Башкортостан Башкирский государственный художественный музей имени М.В. Нестерова',
				'legal_address' => 'РБ, 450076, г. Уфа, ул. Гоголя, 27',
				'fact_address' => 'РБ, 450076, г. Уфа, ул. Гоголя, 27',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '2-72-13-38',
				'email' => 'musnesterova@mail.ru',
				'fio' => 'Исмагилов Файзрахман Абдрахманович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//5
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150606',
				'inn' => '0274037980',
				'kpp' => '027401001',
				'date' => '15.06.2015',
				'short_name' => 'ГБУК РБ РЦНТ (Центр народного творчества)',
				'full_name' => 'Государственное бюджетное учреждение культуры Республики Башкортостан Республиканский центр народного творчества',
				'legal_address' => '450103, г. Уфа, ул Зайнаб Биишевой, 17/2',
				'fact_address' => '450103, г. Уфа, ул Зайнаб Биишевой, 17/2',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8(347)2896200, 289 62 12 ',
				'email' => 'rcnt1@mail.ru',
				'fio' => 'Ишбердин Байрас Валиевич',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Генеральный директор'
			),
			//6
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150607',
				'inn' => '0269003417',
				'kpp' => '',
				'date' => '15.06.2015',
				'short_name' => 'ГАУКиИ РБ ТГТДТ (Татарский драм театр г. Туймазы) 1 Июля',
				'full_name' => 'Государственное автономное учреждение культуры и искусства Республики Башкортостан Туймазинский государственный татарский драматический театр',
				'legal_address' => '452750, г. Туймазы, пл. Октября, 3',
				'fact_address' => '452750, г. Туймазы, пл. Октября, 3',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '272-60-87, 8-9659353434 8-3478271478 ',
				'email' => 't_dramteatr@mail.ru',
				'fio' => 'Габидуллин Фирзат Фаридович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//7
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150608',
				'inn' => '0274035894',
				'kpp' => '027401001',
				'date' => '16.06.2015',
				'short_name' => 'Национальный музей Республики Башкортостан',
				'full_name' => 'Государственное бюджетное учреждение культуры и искусства Республики Башкортостан Национальный музей Республики Башкортостан',
				'legal_address' => '450000, г. Уфа, ул. Советская, 14',
				'fact_address' => '450000, г. Уфа, ул. Советская, 14',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '2733577, 2720473',
				'email' => 'nmrb@mail.ru',
				'fio' => 'Валиуллин Гали Файзрахманович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Генеральный руководитель'
			),
			//8
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150609',
				'inn' => '0267001478',
				'kpp' => '026701001',
				'date' => '16.06.2015',
				'short_name' => 'ГБУКиИ РБ Сибайский госбашдрамтеатр им.А.Мубарякова ',
				'full_name' => 'Государственное бюджетное учреждение Культуры и Искусства Республики Башкортостан Сибайский Государственный Башкирский Театр Драмы Имени Арслана Мубарякова',
				'legal_address' => '453830, г. Сибай, ул. Заки Валиди, 26',
				'fact_address' => '453830, г. Сибай, ул. Заки Валиди, 26',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(34775) 2-39-67',
				'email' => 'sibdramteatr@mail.ru',
				'fio' => 'Галимов Дамир Мазитович ',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Руководитель'
			),
			//9
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150610',
				'inn' => '0274037595',
				'kpp' => '027401001',
				'date' => '17.06.2015',
				'short_name' => 'ГБУКИ РБ Башкирский государственный театр оперы и балета',
				'full_name' => 'Государственное бюджетное учреждение Культуры и Искусства Республики Башкортостан Башкирский Государственный Театр Оперы и Балета',
				'legal_address' => '450000,г.Уфа, ул.Ленина д.5/1',
				'fact_address' => '450000,г.Уфа, ул.Ленина д.5/1',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '272-60-87, 8-9659353434',
				'email' => 'buhm_opern@ufanet.ru',
				'fio' => 'Самойлов Владислав Анатольевич',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Генеральный директор'
			),
			//10
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150611',
				'inn' => '0267005137',
				'kpp' => '026701001',
				'date' => '18.06.2015',
				'short_name' => 'Сибайское концертно-театральное объединение',
				'full_name' => 'Государственное бюджетное учреждение Культуры и Искусства Республики Башкортостан Сибайское Концертно-Театральное Объединение',
				'legal_address' => '453830, г. Сибай, ул. Горького, 27',
				'fact_address' => '453830, г. Сибай, ул. Горького, 27',
				'rs' => '40601810400003000001',
				'ls' => '20112310370',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(34775) 5-79-36, 5-79-92,5-74-61, 5-74-32',
				'email' => 'sibay-concert@mail.ru',
				'fio' => 'Юсупов Вакиль Бареевич',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//11
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150612',
				'inn' => '0274005843',
				'kpp' => '027401001',
				'date' => '17.06.2015',
				'short_name' => 'Национальная библиотека имени Ахмет-Заки Валиди Республики Башкортостан',
				'full_name' => 'Государствееное бюджетное учреждение культуры Национальная библиотека имени Ахмет-Заки Валиди Республики Башкортостан',
				'legal_address' => '450000, г.Уфа , ул.Ленина 4',
				'fact_address' => '450000, г.Уфа , ул.Ленина 4',
				'rs' => '40601810400003000001',
				'ls' => '20112310240',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347)2723412',
				'email' => 'suleiman_venera@mail.ru',
				'fio' => 'Муратова Айгуль Динисламовна',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//12
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150613',
				'inn' => '0274035799',
				'kpp' => '027401001',
				'date' => '18.06.2015',
				'short_name' => 'Государственное бюджетное учреждение Дом дружбы народов Республики Башкортостан',
				'full_name' => 'Государственное бюджетное учреждение Дом дружбы народов Республики Башкортостан',
				'legal_address' => '450077, г. Уфа, ул. Ленина, 56',
				'fact_address' => '450077, г. Уфа, ул. Ленина, 56',
				'rs' => '40601810400003000001',
				'ls' => '20112310120',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8(347) 272 57 42',
				'email' => 'ddnrb@yandex.ru',
				'fio' => 'Ибрагимов Азат Ахметович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//13
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150614',
				'inn' => '0274019500',
				'kpp' => '027701001',
				'date' => '24.06.2015',
				'short_name' => 'Государственное бюджетное учреждение культуры и искусства Республиканский учебно-методический центр по образованию Министерства культуры Республики Башкортостан',
				'full_name' => 'Государственное бюджетное учреждение культуры и искусства Республиканский учебно-методический центр по образованию Министерства культуры Республики Башкортостан',
				'legal_address' => '450055, Республика Башкортостан, город Уфа, улица Ладыгина, дом 21',
				'fact_address' => '450055, Республика Башкортостан, город Уфа, улица Ладыгина, дом 21',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => 'Тел. (347) 235-78-16, 233-59-00, 277-02-60(бух.) 235-78-15 (факс)',
				'email' => ' rumcrb09@mail.ru',
				'fio' => 'Марешова Лариса Алексеевна',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//14
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150615',
				'inn' => '0264053710',
				'kpp' => '026401001',
				'date' => '23.06.2015',
				'short_name' => 'Нефтекамская государственная филармония',
				'full_name' => 'Государственное автономное учреждение культуры и искусства Нефтекамская государственная филармония',
				'legal_address' => '452680, Республика Башкортостан, г. Нефтекамск, ул. Ленина, д.9',
				'fact_address' => '452680, Республика Башкортостан, г. Нефтекамск, ул. Ленина, д.9',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8 (34783) 435-97',
				'email' => 'nfbgf@neftekamsk.ru',
				'fio' => 'Исмагилов Раис Абдрахманович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//15
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150616',
				'inn' => '0274146788',
				'kpp' => '027401001',
				'date' => '23.06.2015',
				'short_name' => 'Государственный концертный зал "Башкортостан"',
				'full_name' => 'Государственное бюджетное учреждение культуры Республики Башкортостан Государственный концертный зал "Башкортостан"',
				'legal_address' => '450077, г.Уфа, ул. Ленина, 50',
				'fact_address' => '450077, г.Уфа, ул. Ленина, 50',
				'rs' => '40601810400003000001',
				'ls' => '21112310150',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '2738487',
				'email' => '2738487@mail.ru',
				'fio' => 'Саетов Алмаз Расихович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//16
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150617',
				'inn' => '0277021681',
				'kpp' => '027701001',
				'date' => '06.07.2015',
				'short_name' => 'Башкирский государственный театр кукол',
				'full_name' => 'Государственное бюджетное учреждение культуры и искусства Республики Башкортостан Башкирский государственный театр кукол',
				'legal_address' => '450055,РБ г.Уфа, ул.Проспект Октября, д.158',
				'fact_address' => '450055,РБ г.Уфа, ул.Проспект Октября, д.158',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347) 284-36-12',
				'email' => 'teatrcucol70@mail.ru',
				'fio' => 'Альмухаметов Ильмар Разинович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//17
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150718',
				'inn' => '0275073412',
				'kpp' => '027501001',
				'date' => '06.07.2015',
				'short_name' => 'ГБУ РИКМЗ «Древняя Уфа»',
				'full_name' => 'Государственное бюджетное учреждение Республиканский историко-культурный музей-заповедник «Древняя Уфа» ',
				'legal_address' => '450077, РБ, г. Уфа, ул. Мустая Карима, д.45',
				'fact_address' => '450077, РБ, г. Уфа, ул. Мустая Карима, д.45',
				'rs' => '40601810400003000001',
				'ls' => '20112310220',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347) 2727743 ',
				'email' => 'drevnayaufa@mail.ru',
				'fio' => 'Батталова Гаухар Тимерхановна',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//18
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150719',
				'inn' => '0274052988',
				'kpp' => '027401001',
				'date' => '06.07.2015',
				'short_name' => 'Молодежный театр Республики Башкортостан им. Мустая Карима',
				'full_name' => 'Государственное бюджетное учреждение культуры и искусства Национальный молодежный театр Республики Башкортостан им. Мустая Карима',
				'legal_address' => '450077 РБ г.Уфа, ул.Ленина,62',
				'fact_address' => '450077 РБ г.Уфа, ул.Ленина,62',
				'rs' => '40601810400003000001',
				'ls' => '20112310290',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '272-37-84',
				'email' => 'nmt_rb@bk.ru',
				'fio' => 'Зиганшин Азат Надирович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//19
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150720',
				'inn' => '0274112690',
				'kpp' => '',
				'date' => '06.07.2015',
				'short_name' => 'ГУП Республики Башкортостан Киностудия "Башкортостан"',
				'full_name' => 'ГУП Республики Башкортостан Киностудия "Башкортостан"',
				'legal_address' => '450103, РБ, г. Уфа, ул. Высотная, д. 10/1',
				'fact_address' => '450103, РБ, г. Уфа, ул. Высотная, д. 10/1',
				'rs' => '40602810000000000270',
				'ls' => '',
				'ks' => '30101810600000000770',
				'bik' => '048073770' ,
				'bank' => 'Филиал ОАО «УралСиб» в г. Уфа',
				'phone' => '8 (347) 216-42-59',
				'email' => 'bashfilm@mail.ru',
				'fio' => 'Хужахметов Азамат Шарифович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//20
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150821',
				'inn' => '0274903453',
				'kpp' => '027401001',
				'date' => '14.08.2015',
				'short_name' => 'ГБУ РБ "Конгресс-холл"',
				'full_name' => 'Государственное бюджетное учреждение Республики Башкортостан "Конгресс-холл"',
				'legal_address' => '450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'fact_address' => '450076, Республика Башкортостан, г. Уфа, ул. Заки Валиди, д. 2',
				'rs' => '40601810400003000001',
				'ls' => '20112310410',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347)276 55 48',
				'email' => 'chall.76@mail.ru',
				'fio' => 'Байбулатов Ильдар Зинурович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//21
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150822',
				'inn' => '0276006338',
				'kpp' => '027601001',
				'date' => '14.08.2015',
				'short_name' => 'ГБУКиИ ГАРДТ РБ',
				'full_name' => 'Государственное бюджетное учреждение культуры и искусства Государственный академический русский драматический театр Республики Башкортостан',
				'legal_address' => '450075, г. Уфа, Проспект Октября,79',
				'fact_address' => '450075, г. Уфа, Проспект Октября,79',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347) 233 51 24',
				'email' => 'rusdram@mail.ru',
				'fio' => 'Рабинович Михаил Исакович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Художественный Руководитель'
			),
			//22
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150823',
				'inn' => '0275009960',
				'kpp' => '027501001',
				'date' => '14.08.2015',
				'short_name' => 'ГАУКиИ РБ Башкирская государственная филармония имени Хусаина Ахметова',
				'full_name' => 'Государственное автономное учреждение культуры и искусства Республики Башкортостан Башкирская государственная филармония имени Хусаина Ахметова',
				'legal_address' => '450052, Башкортостан Респ, Уфа г, Гоголя ул,58',
				'fact_address' => '450052, Башкортостан Респ, Уфа г, Гоголя ул,58',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347) 250 11 02',
				'email' => 'buhgalter-bgf@mail.ru',
				'fio' => 'Зубайдуллин Айдар Хизбуллович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//23
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150824',
				'inn' => '270000273',
				'kpp' => '27001001',
				'date' => '17.08.2015',
				'short_name' => 'ГБПОУ РБ УКИиК им. С. Низаметдинова',
				'full_name' => 'Государственное бюджетное профессиональное образовательное учреждение Республики Башкортостан Учалинский коледж искусств и культуры имени Салавата Низаметдинова',
				'legal_address' => '453700, РБ, г.Учалы, ул.Ленинского.Комсомола, 6',
				'fact_address' => '453700, РБ, г.Учалы, ул.Ленинского.Комсомола, 6',
				'rs' => '40601810400003000001',
				'ls' => '20112310070 ',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '34791)6-16-90 (приемная) факс.(34791)6-12-90(директор),6-14-60(гл.бухгалтер,6-17-90(бухгалтерия)',
				'email' => 'uch_uiik@mail.ru ',
				'fio' => 'Гимазитдинова Айгуль Хамидулловна',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//24
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150825',
				'inn' => '0274037250',
				'kpp' => '',
				'date' => '14.08.2015',
				'short_name' => 'ГБОУ СПО РБ Средний специальный музыкальный коледж',
				'full_name' => 'ГБОУ СПО РБ Средний специальный музыкальный коледж ',
				'legal_address' => '450077, г. Уфа, ул. Ленина, 104',
				'fact_address' => '450077, г. Уфа, ул. Ленина, 104',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '8 (347) 272 10 51',
				'email' => 'ccmk.buh@yandex.ru',
				'fio' => 'Сафин Минивалий Карамович',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//25
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150926',
				'inn' => '0275002411',
				'kpp' => '',
				'date' => '16.09.2015',
				'short_name' => 'ГБУК и И ГААНТ им. Ф. Гаскарова РБ',
				'full_name' => 'Государственное Бюджетное Учреждение Культуры и Искуства Государственный Академический Ансамбль Народного Танца имени Файзи Гаскарова Республики Башкортостан',
				'legal_address' => '450076, г. Уфа, ул. Заки Валиди, 34',
				'fact_address' => '450076, г. Уфа, ул. Заки Валиди, 34',
				'rs' => '40601810400003000001',
				'ls' => '',
				'ks' => '',
				'bik' => '048073001' ,
				'bank' => 'в Отделении - НБ Республика Башкортостан г. Уфа',
				'phone' => '(347)2761817, 2761860',
				'email' => 'gaant-glavbuh@mail.ru',
				'fio' => 'Ф.Х. Казакбаев',
				'operate_foundation' => 'Устава',
				'boss_position'=> 'Директор'
			),
			//26
			array(
				'last_document_number'=>'1',
				'contract_number'=> '150502',
				'inn' => '0275071849',
				'kpp' => '',
				'date' => '27.05.2015',
				'short_name' => 'Министерство культуры Республики Башкортостан',
				'full_name' => 'Министерство культуры Республики Башкортостан',
				'legal_address' => '',
				'fact_address' => '',
				'rs' => '',
				'ls' => '',
				'ks' => '',
				'bik' => '' ,
				'bank' => '',
				'phone' => '',
				'email' => '',
				'fio' => '',
				'operate_foundation' => '',
				'boss_position'=> ''
			),
			//27
			array(
				'last_document_number'=>'1',
				'contract_number'=> '',
				'inn' => '',
				'kpp' => '',
				'date' => '',
				'short_name' => 'ИТНК',
				'full_name' => 'ИТНК',
				'legal_address' => '',
				'fact_address' => '',
				'rs' => '',
				'ls' => '',
				'ks' => '',
				'bik' => '' ,
				'bank' => '',
				'phone' => '',
				'email' => '',
				'fio' => '',
				'operate_foundation' => '',
				'boss_position'=> ''
			)
		);
		DB::table('organizations') -> insert($organizations);
	}

}