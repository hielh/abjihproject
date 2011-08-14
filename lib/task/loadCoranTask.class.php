<?php

class loadCoranTask extends sfBaseTask
{
  protected function configure()
  {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
    new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
    new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
    new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
    // add your own options here
    ));

    $this->namespace        = 'islam';
    $this->name             = 'loadCoran';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [loadCoran|INFO] task does things.
Call it with:

  [php symfony loadCoran|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();

    // add your code here
    $nomSourat =array('الفاتحة',
'البقرة',
'آل عمران',
'النساء',
'المائدة',
'الأنعام',
'الأعراف',
'الأنفال',
'التوبة',
'يونس',
'هود',
'يوسف',
'الرعد',
'إبراهيم',
'الحجر',
'النحل',
'الإسراء',
'الكهف',
'مريم',
'طه',
'الأنبياء',
'الحج',
'المؤمنون',
'النور',
'الفرقان',
'الشعراء',
'النمل',
'القصص',
'العنكبوت',
'الروم',
'لقمان',
'السجدة',
'الأحزاب',
'سبأ',
'فاطر',
'يس',
'الصافات',
'ص',
'الزمر',
'غافر',
'فصلت',
'الشورى',
'الزخرف',
'الدخان',
'الجاثية',
'الأحقاف',
'محمد',
'الفتح',
'الحجرات',
'ق',
'الذاريات',
'الطور',
'النجم',
'القمر',
'الرحمن',
'الواقعة',
'الحديد',
' المجادلة',
'الحشر',
'الممتحنة',
'الصف',
'الجمعة',
'المنافقون',
'التغابن',
'الطلاق',
'التحريم',
'الملك',
'القلم',
'الحاقة',
'المعارج',
'نوح',
'الجن',
'المزمل',
'المدثر',
'القيامة',
'الإنسان',
'المرسلات',
'النبأ',
'النازعات',
'عبس',
'التكوير',
'الإنفطار',
'المطففين',
'الإنشقاق',
'البروج',
'الطارق',
'الأعلى',
'الغاشية',
'الفجر',
'البلد',
'الشمس',
'الليل',
'الضحى',
'الشرح',
'التين',
'العلق',
'القدر',
'البينة',
'الزلزلة',
'العاديات',
'القارعة',
'التكاثر',
'العصر',
'الهمزة',
'الفيل',
'قريش',
'الماعون',
'الكوثر',
'الكافرون',
'النصر',
'المسد',
'الإخلاص',
'الفلق',
'الناس',
    );
    foreach ($nomSourat as $key=>$value)
    {
      $key = $key+1;
      $otrack = new track();
      $otrack->setUserId(1);
      $otrack->setPlayListId(1);
      $otrack->setName($value);
      if(strlen($key) == 1) $key = '00'.$key;
      if(strlen($key) == 2) $key = '0'.$key;
      $url = 'http://www.archive.org/download/TvQuran.com__Alafasi/'.$key.'.mp3';
      $otrack->setUrl($url);
      $otrack->save();
    }

  }
}
