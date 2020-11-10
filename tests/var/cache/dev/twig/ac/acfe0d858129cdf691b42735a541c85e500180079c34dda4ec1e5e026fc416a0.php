<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php */
class __TwigTemplate_ea0516b34eeac85c03571061cb05ac61ba3c8a8c97be6ddb46aa319b34d6f3b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\tr_TR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "oğlu ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companySuffix = array('A.Ş.', 'Ltd. Şti.');

    protected static \$companyField = array(
        'Akaryakıt', 'Beyaz Eşya', 'Bilgi İşlem', 'Bilgisayar', 'Bilişim Hizmetleri',
        'Biracılık ve Malt Sanayii', 'Cam Sanayii', 'Çimento', 'Demir ve Çelik',
        'Dış Ticaret', 'Eczacılık', 'Elektrik İletim', 'Elektrik Üretim', 'Elektronik',
        'Emlak', 'Enerji', 'Giyim', 'Gıda', 'Holding', 'Isıtma ve Soğutma Sistemleri',
        'İletişim Hizmetleri', 'İnşaat ve Sanayi', 'İthalat ve İhracat', 'Kimya',
        'Kurumsal Hizmetler', 'Lojistik', 'Madencilik', 'Makina', 'Mağazalar', 'Nakliyat',
        'Otomotiv', 'Pazarlama', 'Perakende Ticaret', 'Petrol', 'Petrolcülük', 'Sanayi',
        'Sağlık Hizmetleri', 'Servis ve Ticaret', 'Süt Ürünleri', 'Tarım Sanayi',
        'Tavukçuluk', 'Tekstil', 'Telekomunikasyon', 'Tersane ve Ulaşım Sanayi',
        'Ticaret', 'Ticaret ve Sanayi', 'Ticaret ve Taahhüt', 'Turizm', 'Yatırım'
    );

    /**
    * @link https://tr.wikipedia.org/wiki/Meslekler_listesi
    * @note Randomly took 300 from this list
    */
    protected static \$jobTitleFormat = array(
        'Acil tıp teknisyeni', 'Agronomist', 'Aile hekimi', 'Aktar', 'Aktör', 'Aktüer',
        'Akustikçi', 'Albay', 'Ambarcı', 'Ambulans şoförü', 'Amiral', 'Analist',
        'Antika satıcısı', 'Araba tamircisi', 'Arabacı', 'Araştırmacı', 'Armatör', 'Artist',
        'Asker', 'Astrofizikçi', 'Astrolog', 'Astronom', 'Astronot', 'Atlet', 'Avukat',
        'Ayakkabı boyacısı', 'Ayakkabı tamircisi', 'Ayakçı', 'Ağ yöneticisi', 'Aşçıbaşı',
        'Bacacı', 'Badanacı', 'Baharatçı', 'Bahçe bitkileri uzmanı', 'Bakkal', 'Bakteriyolog',
        'Balon pilotu', 'Bankacı', 'Banker', 'Barmeyd', 'Başdümenci', 'Başpiskopos',
        'Başçavuş', 'Bebek Bakıcısı', 'Belediye başkanı', 'Belediye meclisi üyesi', 'Besteci',
        'Biletçi', 'Bilgi İşlemci', 'Bilgisayar mühendisi', 'Binicilik', 'Biyografi yazarı',
        'Bobinajcı', 'Borsacı', 'Boyacı', 'Bulaşıkçı', 'Börekç', 'Çamaşırcı', 'Çantacı',
        'Çevik Kuvvet', 'Çevirmen', 'Çevre Mühendisi', 'Çevrebilimci', 'Çeyizci',
        'Çiftlik işletici', 'Çiftçi', 'Çinici', 'Çoban', 'Çırak', 'Dadı', 'Daktilograf',
        'Dalgıç', 'Dansöz', 'Dedektif', 'Derici', 'Değirmen işçisi', 'Değirmenci', 'Dilci',
        'Diplomat', 'Doktor', 'Dokumacı', 'Dondurmacı', 'Doğramacı', 'Dövizci', 'Döşemeci',
        'Elektrik mühendisi', 'Elektronik mühendisi', 'Elektronik ve Haberleşme mühendisi',
        'Embriyolog', 'Emniyet amiri', 'Emniyet genel müdürü', 'Ergonomist', 'Eskici', 'Fahişe',
        'Fizikçi', 'Fizyoterapist', 'Fotoğrafçı', 'Fıçıcı', 'Galerici', 'Garson',
        'Gazete dağıtıcısı', 'Gazete satıcısı', 'Gazeteci', 'Gelir uzman yardımcısı', 'General',
        'Genetik mühendisi', 'Gezici vaiz', 'Gondolcu', 'Guru', 'Gökbilimci', 'Gözlükçü',
        'Güfteci', 'Gümrük uzmanı', 'Haham', 'Hakem', 'Halkbilimci', 'Hamal', 'Hamurkâr',
        'Hareket memuru', 'Hava trafikçisi', 'Havacı', 'Hayvan terbiyecisi', 'Hesap uzmanı',
        'Heykeltıraş', 'Hokkabaz', 'Irgat', 'İcra memuru', 'İllüzyonist', 'İmam',
        'İnsan kaynakları uzmanı', 'İplikçi', 'İthalatçı', 'İş ve uğraşı terapisti', 'İşaretçi',
        'Jimnastikçi', 'Jokey', 'Kabin görevlisi', 'Kabuk soyucusu', 'Kadın berberi', 'Kahveci',
        'Kalaycı', 'Kaplamacı', 'Kapı satıcısı', 'Kardinal', 'Kardiyolog', 'Karikatürist',
        'Kat görevlisi', 'Kaymakam', 'Kayıkçı', 'Kazıcı', 'Klarnetçi', 'Konserveci',
        'Konveyör operatörü', 'Koramiral', 'Korgeneral', 'Kozmolog', 'Kuaför', 'Kumaşçı', 'Kumcu',
        'Kuruyemişçi', 'Kurye', 'Kuyumcu', 'Kâğıtçı', 'Köpek eğiticisi', 'Köşe yazarı', 'Kürkçü',
        'Kırtasiyeci', 'Laborant', 'Laboratuar işçisi', 'Lahmacuncu', 'Lehimci', 'Levazımcı',
        'Lobici', 'Lokantacı', 'Lokman', 'Lostracı', 'Madenci', 'Makastar', 'Makine mühendisi',
        'Makine zabiti', 'Makyajcı', 'Mali hizmetler uzmanı', 'Manastır baş rahibesi',
        'Manifaturacı', 'Manikürcü', 'Masör', 'Matematikçi', 'Memur', 'Mermerci',
        'Meteoroloji uzmanı', 'Misyoner', 'Model', 'Modelci', 'Modelist', 'Montajcı', 'Montör',
        'Muallim', 'Muhafız', 'Mumyalayıcı', 'Müzik yönetmeni', 'Müşavir', 'Nalbant', 'Nalbur',
        'Oduncu', 'Orgcu', 'Ornitolog', 'Oto elektrikçisi', 'Oto lastik tamircisi', 'Oyuncakçı',
        'Oyuncu', 'Ön muhasebe yardımcı elemanı', 'Ön muhasebeci', 'Öğretim elemanı',
        'Öğretim görevlisi', 'Öğretim üyesi', 'Papaz', 'Paramedik', 'Pastörizör', 'Pencereci',
        'Perukçu', 'Peyzaj teknikeri', 'Peçeteci', 'Pideci', 'Pilot', 'Piyanist', 'Politikacı',
        'Pompacı', 'Psikolog', 'Radyolog', 'Radyoloji teknisyeni/teknikeri', 'Rejisör',
        'Reklamcı', 'Rektör', 'Rot balansçı', 'Saat tamircisi', 'Sanat yönetmeni', 'Saraç',
        'Saz şairi', 'Sekreter', 'Ses teknisyeni', 'Sicil memuru', 'Sihirbaz', 'Sistem mühendisi',
        'Sosyal hizmet uzmanı', 'Sosyolog', 'Soğuk demirci', 'Stenograf', 'Stilist', 'Striptizci',
        'Sucu', 'Sunucu', 'Susuz araç yıkama', 'Sünnetçi', 'Sürveyan', 'Şapel papazı',
        'Şarkı sözü yazarı', 'Şehir Plancısı', 'Şekerci', 'Şimşirci', 'Şoför', 'Tahsildar',
        'Tarihçi', 'Tasarımcı', 'Taşlayıcı', 'Taşçı', 'Tekniker', 'Teknisyen', 'Teknoloji uzmani',
        'Televizyon tamircisi', 'Terapist', 'Tesisatçı', 'Teşrifatçı', 'Tornacı', 'Tuğgeneral',
        'Ulaşım sorumlusu', 'Ustabaşı', 'Uydu antenci', 'Üst Düzey Yönetici', 'Ütücü',
        'Uzay bilimcisi', 'Vali', 'Veri hazırlama ve kontrol işletmeni', 'Veteriner hekim',
        'Veteriner sağlık teknikeri', 'Veznedar', 'Vinç operatörü', 'Vitrinci', 'Yarbay',
        'Yardımcı pilot', 'Yargıç', 'Yazar', 'Yazı işleri müdürü', 'Yazılım mühendisi',
        'Yer gösterici', 'Yol bekçisi', 'Yorgancı', 'Yoğurtçu', 'Yıkıcı', 'Zabıta', 'Zoolog'
    );

    /**
     * Returns a random company field.
     *
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::\$companyField);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  88 => 13,  80 => 12,  72 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\tr_TR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}oğlu {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} {{companyField}} {{companySuffix}}',
        '{{lastName}} {{companyField}} {{companySuffix}}',
        '{{lastName}} {{companyField}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companyField}} {{companySuffix}}',
    );

    protected static \$companySuffix = array('A.Ş.', 'Ltd. Şti.');

    protected static \$companyField = array(
        'Akaryakıt', 'Beyaz Eşya', 'Bilgi İşlem', 'Bilgisayar', 'Bilişim Hizmetleri',
        'Biracılık ve Malt Sanayii', 'Cam Sanayii', 'Çimento', 'Demir ve Çelik',
        'Dış Ticaret', 'Eczacılık', 'Elektrik İletim', 'Elektrik Üretim', 'Elektronik',
        'Emlak', 'Enerji', 'Giyim', 'Gıda', 'Holding', 'Isıtma ve Soğutma Sistemleri',
        'İletişim Hizmetleri', 'İnşaat ve Sanayi', 'İthalat ve İhracat', 'Kimya',
        'Kurumsal Hizmetler', 'Lojistik', 'Madencilik', 'Makina', 'Mağazalar', 'Nakliyat',
        'Otomotiv', 'Pazarlama', 'Perakende Ticaret', 'Petrol', 'Petrolcülük', 'Sanayi',
        'Sağlık Hizmetleri', 'Servis ve Ticaret', 'Süt Ürünleri', 'Tarım Sanayi',
        'Tavukçuluk', 'Tekstil', 'Telekomunikasyon', 'Tersane ve Ulaşım Sanayi',
        'Ticaret', 'Ticaret ve Sanayi', 'Ticaret ve Taahhüt', 'Turizm', 'Yatırım'
    );

    /**
    * @link https://tr.wikipedia.org/wiki/Meslekler_listesi
    * @note Randomly took 300 from this list
    */
    protected static \$jobTitleFormat = array(
        'Acil tıp teknisyeni', 'Agronomist', 'Aile hekimi', 'Aktar', 'Aktör', 'Aktüer',
        'Akustikçi', 'Albay', 'Ambarcı', 'Ambulans şoförü', 'Amiral', 'Analist',
        'Antika satıcısı', 'Araba tamircisi', 'Arabacı', 'Araştırmacı', 'Armatör', 'Artist',
        'Asker', 'Astrofizikçi', 'Astrolog', 'Astronom', 'Astronot', 'Atlet', 'Avukat',
        'Ayakkabı boyacısı', 'Ayakkabı tamircisi', 'Ayakçı', 'Ağ yöneticisi', 'Aşçıbaşı',
        'Bacacı', 'Badanacı', 'Baharatçı', 'Bahçe bitkileri uzmanı', 'Bakkal', 'Bakteriyolog',
        'Balon pilotu', 'Bankacı', 'Banker', 'Barmeyd', 'Başdümenci', 'Başpiskopos',
        'Başçavuş', 'Bebek Bakıcısı', 'Belediye başkanı', 'Belediye meclisi üyesi', 'Besteci',
        'Biletçi', 'Bilgi İşlemci', 'Bilgisayar mühendisi', 'Binicilik', 'Biyografi yazarı',
        'Bobinajcı', 'Borsacı', 'Boyacı', 'Bulaşıkçı', 'Börekç', 'Çamaşırcı', 'Çantacı',
        'Çevik Kuvvet', 'Çevirmen', 'Çevre Mühendisi', 'Çevrebilimci', 'Çeyizci',
        'Çiftlik işletici', 'Çiftçi', 'Çinici', 'Çoban', 'Çırak', 'Dadı', 'Daktilograf',
        'Dalgıç', 'Dansöz', 'Dedektif', 'Derici', 'Değirmen işçisi', 'Değirmenci', 'Dilci',
        'Diplomat', 'Doktor', 'Dokumacı', 'Dondurmacı', 'Doğramacı', 'Dövizci', 'Döşemeci',
        'Elektrik mühendisi', 'Elektronik mühendisi', 'Elektronik ve Haberleşme mühendisi',
        'Embriyolog', 'Emniyet amiri', 'Emniyet genel müdürü', 'Ergonomist', 'Eskici', 'Fahişe',
        'Fizikçi', 'Fizyoterapist', 'Fotoğrafçı', 'Fıçıcı', 'Galerici', 'Garson',
        'Gazete dağıtıcısı', 'Gazete satıcısı', 'Gazeteci', 'Gelir uzman yardımcısı', 'General',
        'Genetik mühendisi', 'Gezici vaiz', 'Gondolcu', 'Guru', 'Gökbilimci', 'Gözlükçü',
        'Güfteci', 'Gümrük uzmanı', 'Haham', 'Hakem', 'Halkbilimci', 'Hamal', 'Hamurkâr',
        'Hareket memuru', 'Hava trafikçisi', 'Havacı', 'Hayvan terbiyecisi', 'Hesap uzmanı',
        'Heykeltıraş', 'Hokkabaz', 'Irgat', 'İcra memuru', 'İllüzyonist', 'İmam',
        'İnsan kaynakları uzmanı', 'İplikçi', 'İthalatçı', 'İş ve uğraşı terapisti', 'İşaretçi',
        'Jimnastikçi', 'Jokey', 'Kabin görevlisi', 'Kabuk soyucusu', 'Kadın berberi', 'Kahveci',
        'Kalaycı', 'Kaplamacı', 'Kapı satıcısı', 'Kardinal', 'Kardiyolog', 'Karikatürist',
        'Kat görevlisi', 'Kaymakam', 'Kayıkçı', 'Kazıcı', 'Klarnetçi', 'Konserveci',
        'Konveyör operatörü', 'Koramiral', 'Korgeneral', 'Kozmolog', 'Kuaför', 'Kumaşçı', 'Kumcu',
        'Kuruyemişçi', 'Kurye', 'Kuyumcu', 'Kâğıtçı', 'Köpek eğiticisi', 'Köşe yazarı', 'Kürkçü',
        'Kırtasiyeci', 'Laborant', 'Laboratuar işçisi', 'Lahmacuncu', 'Lehimci', 'Levazımcı',
        'Lobici', 'Lokantacı', 'Lokman', 'Lostracı', 'Madenci', 'Makastar', 'Makine mühendisi',
        'Makine zabiti', 'Makyajcı', 'Mali hizmetler uzmanı', 'Manastır baş rahibesi',
        'Manifaturacı', 'Manikürcü', 'Masör', 'Matematikçi', 'Memur', 'Mermerci',
        'Meteoroloji uzmanı', 'Misyoner', 'Model', 'Modelci', 'Modelist', 'Montajcı', 'Montör',
        'Muallim', 'Muhafız', 'Mumyalayıcı', 'Müzik yönetmeni', 'Müşavir', 'Nalbant', 'Nalbur',
        'Oduncu', 'Orgcu', 'Ornitolog', 'Oto elektrikçisi', 'Oto lastik tamircisi', 'Oyuncakçı',
        'Oyuncu', 'Ön muhasebe yardımcı elemanı', 'Ön muhasebeci', 'Öğretim elemanı',
        'Öğretim görevlisi', 'Öğretim üyesi', 'Papaz', 'Paramedik', 'Pastörizör', 'Pencereci',
        'Perukçu', 'Peyzaj teknikeri', 'Peçeteci', 'Pideci', 'Pilot', 'Piyanist', 'Politikacı',
        'Pompacı', 'Psikolog', 'Radyolog', 'Radyoloji teknisyeni/teknikeri', 'Rejisör',
        'Reklamcı', 'Rektör', 'Rot balansçı', 'Saat tamircisi', 'Sanat yönetmeni', 'Saraç',
        'Saz şairi', 'Sekreter', 'Ses teknisyeni', 'Sicil memuru', 'Sihirbaz', 'Sistem mühendisi',
        'Sosyal hizmet uzmanı', 'Sosyolog', 'Soğuk demirci', 'Stenograf', 'Stilist', 'Striptizci',
        'Sucu', 'Sunucu', 'Susuz araç yıkama', 'Sünnetçi', 'Sürveyan', 'Şapel papazı',
        'Şarkı sözü yazarı', 'Şehir Plancısı', 'Şekerci', 'Şimşirci', 'Şoför', 'Tahsildar',
        'Tarihçi', 'Tasarımcı', 'Taşlayıcı', 'Taşçı', 'Tekniker', 'Teknisyen', 'Teknoloji uzmani',
        'Televizyon tamircisi', 'Terapist', 'Tesisatçı', 'Teşrifatçı', 'Tornacı', 'Tuğgeneral',
        'Ulaşım sorumlusu', 'Ustabaşı', 'Uydu antenci', 'Üst Düzey Yönetici', 'Ütücü',
        'Uzay bilimcisi', 'Vali', 'Veri hazırlama ve kontrol işletmeni', 'Veteriner hekim',
        'Veteriner sağlık teknikeri', 'Veznedar', 'Vinç operatörü', 'Vitrinci', 'Yarbay',
        'Yardımcı pilot', 'Yargıç', 'Yazar', 'Yazı işleri müdürü', 'Yazılım mühendisi',
        'Yer gösterici', 'Yol bekçisi', 'Yorgancı', 'Yoğurtçu', 'Yıkıcı', 'Zabıta', 'Zoolog'
    );

    /**
     * Returns a random company field.
     *
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::\$companyField);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Company.php");
    }
}
