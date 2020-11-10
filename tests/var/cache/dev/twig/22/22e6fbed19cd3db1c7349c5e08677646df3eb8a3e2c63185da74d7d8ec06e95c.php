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

/* vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php */
class __TwigTemplate_de261cd8d5a92bf54a9cd965177db723580dc5304dd1541d506dd4c413321ede extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\tr_TR;

class Color extends \\Faker\\Provider\\Color
{
    /**
     * @link http://tr.wikipedia.org/wiki/Renkler_listesi
     */
    protected static \$safeColorNames = array(
        'siyah', 'kırmızı', 'sarı', 'mavi', 'turuncu',
        'yeşil', 'mor', 'gümüş', 'gri', 'pembe',
    );

    protected static \$allColorNames = array(
        'Alev kırmızısı', 'Alice mavisi', 'Alizarin', 'Altunî', 'Ametist', 'Armut',
        'Akuamarin', 'Asker yeşili', 'Bakır', 'Barut', 'Bataklık yeşili',
        'Bebek mavisi', 'Bej', 'Beyaz', 'Bondi mavisi', 'Bordo',
        'Bronz', 'Buğday', 'Burgonya', 'Camgöbeği', 'Çam yeşili', 'Çay yeşili',
        'Çelik mavisi', 'Çikolata', 'Çivit', 'Deniz mavisi', 'Deniz yeşili',
        'Devedikeni', 'Eğrelti yeşili', 'Elektrik mavisi', 'Elektrik çivit', 'Elektrik lime', 'Elektrik mor',
        'Falu kırmızısı', 'Fildişi', 'Fransız gül', 'Galibarda', 'Gece mavisi', 'Gök mavisi',
        'Gri', 'Gri-kuşkonmaz', 'Gül', 'Gümüşi', 'Haki', 'Hardal',
        'Havuç', 'Horozibiği', 'İlkbahar yeşili', 'İslam yeşili', 'Kabak', 'Kahverengi',
        'Kahverengimsi gri', 'Kamuflâj yeşili', 'Karanfil pembesi', 'Karanfil', 'Kardinal',
        'Karolina mavisi', 'Kayısı', 'Kehribar', 'Kestane',
        'Keten', 'Kırmızı', 'Kırmızımsı kahverengi', 'Kırmızı-menekşe', 'Kiraz kırmızısı',
        'Kobalt', 'Kobalt mavisi', 'Koyu galibarda', 'Koyu haki', 'Koyu kahverengi',
        'Koyu kestane', 'Koyu kırmızı', 'Koyu kızıl kahverengi', 'Koyu leylak', 'Koyu magenta',
        'Koyu mandalina', 'Koyu mavi', 'Koyu menekşe', 'Koyu mercan',
        'Koyu mor', 'Koyu pastel yeşil', 'Koyu pembe', 'Koyu şeftali', 'Koyu turkuaz',
        'Koyu toz mavi', 'Koyu turkuaz', 'Koyu yeşil', 'Kösele', 'Krem',
        'Kum kahverengisi', 'Kuşkonmaz', 'Lacivert', 'Lacivert',
        'Lavanta', 'Lavanta mavisi', 'Lavender pembesi', 'Lavender greisi',
        'Lavender magenta', 'Lavanta pembesi', 'Lavanta mor', 'Lavanta gül', 'Limoni', 'Açık Limon',
        'Leylak', 'Lime', 'Mandalina', 'Malakit', 'Mavi',
        'Menekşe', 'Menekşe-patlıcan', 'Mısır', 'Mor', 'Morsalkım',
        'Nane yeşili', 'Nar', 'Navajo beyazı', 'Okul otobüsü sarısı', 'Parlak mor',
        'Pas', 'Pastel pembe', 'Pastel yeşili', 'Patlıcan', 'Pembe',
        'Pembe-turuncu', 'Peygamber çiçeği', 'Prusya mavisi', 'Safran', 'Safir',
        'Sarımsı kahverengi', 'Sarımsı pembe', 'Sarı', 'Sarı',
        'Siyahımsı koyu kahverengi', 'Soluk sarı', 'Şeftali', 'Şeftali-turuncu', 'Şeftali-sarı',
        'Tarçın', 'Teal', 'Toz mavi', 'Turkuaz',
        'Turuncumsu sarı', 'Turuncu', 'Turuncumsu sarı', 'Yeşil', 'Yeşil-sarı', 'Yonca yeşili',
        'Yosun yeşili', 'Zeytuni', 'Zümrüt yeşili', 'Yanık turuncu', 'Yanık Toprak',
        'Kardinal', 'Şarap', 'Celadon', 'Berrak mavi',
        'Gök mavisi', 'Gül', 'Mercan', 'Mercan Kırmızısı', 'Kıpkırmızı', 'Hile mavisi',
        'Altınımsı', 'Soytarı', 'Siğil otu', 'Holivod kırmızısı', 'Sıcak Magenta',
        'Sıcak pembe', 'Uluslararası Klein mavisi', 'Enternasyonal turuncu', 'Yeşim', 'Orta şarap',
        'Orta Mor', 'Dağ pembesi', 'Aşı boyası', 'Eski altın', 'Eski iplik', 'Eski Lavanta',
        'Eski gül', 'Zeytin Kahverengisi', 'Donuk turuncu', 'Papaya',
        'Periwinkle', 'Pers mavisi', 'Pers yeşili', 'Persian lacivert', 'Pers pembesi',
        'Persian kırmızısı', 'Pers gülü', 'Ham toprak', 'Kızıl yumurta mavisi',
        'Kraliyet mavisi', 'Kırmızı şarap', 'Kırmızı', 'Deniz kabuğu', 'Ayrık sarı',
        'Vurgun pembe', 'Salamura grisi', 'Tenné (Tawny)', 'Küçük kara', 'Lacivert', 'Viridian',
        'Zinnwaldite',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\tr_TR;

class Color extends \\Faker\\Provider\\Color
{
    /**
     * @link http://tr.wikipedia.org/wiki/Renkler_listesi
     */
    protected static \$safeColorNames = array(
        'siyah', 'kırmızı', 'sarı', 'mavi', 'turuncu',
        'yeşil', 'mor', 'gümüş', 'gri', 'pembe',
    );

    protected static \$allColorNames = array(
        'Alev kırmızısı', 'Alice mavisi', 'Alizarin', 'Altunî', 'Ametist', 'Armut',
        'Akuamarin', 'Asker yeşili', 'Bakır', 'Barut', 'Bataklık yeşili',
        'Bebek mavisi', 'Bej', 'Beyaz', 'Bondi mavisi', 'Bordo',
        'Bronz', 'Buğday', 'Burgonya', 'Camgöbeği', 'Çam yeşili', 'Çay yeşili',
        'Çelik mavisi', 'Çikolata', 'Çivit', 'Deniz mavisi', 'Deniz yeşili',
        'Devedikeni', 'Eğrelti yeşili', 'Elektrik mavisi', 'Elektrik çivit', 'Elektrik lime', 'Elektrik mor',
        'Falu kırmızısı', 'Fildişi', 'Fransız gül', 'Galibarda', 'Gece mavisi', 'Gök mavisi',
        'Gri', 'Gri-kuşkonmaz', 'Gül', 'Gümüşi', 'Haki', 'Hardal',
        'Havuç', 'Horozibiği', 'İlkbahar yeşili', 'İslam yeşili', 'Kabak', 'Kahverengi',
        'Kahverengimsi gri', 'Kamuflâj yeşili', 'Karanfil pembesi', 'Karanfil', 'Kardinal',
        'Karolina mavisi', 'Kayısı', 'Kehribar', 'Kestane',
        'Keten', 'Kırmızı', 'Kırmızımsı kahverengi', 'Kırmızı-menekşe', 'Kiraz kırmızısı',
        'Kobalt', 'Kobalt mavisi', 'Koyu galibarda', 'Koyu haki', 'Koyu kahverengi',
        'Koyu kestane', 'Koyu kırmızı', 'Koyu kızıl kahverengi', 'Koyu leylak', 'Koyu magenta',
        'Koyu mandalina', 'Koyu mavi', 'Koyu menekşe', 'Koyu mercan',
        'Koyu mor', 'Koyu pastel yeşil', 'Koyu pembe', 'Koyu şeftali', 'Koyu turkuaz',
        'Koyu toz mavi', 'Koyu turkuaz', 'Koyu yeşil', 'Kösele', 'Krem',
        'Kum kahverengisi', 'Kuşkonmaz', 'Lacivert', 'Lacivert',
        'Lavanta', 'Lavanta mavisi', 'Lavender pembesi', 'Lavender greisi',
        'Lavender magenta', 'Lavanta pembesi', 'Lavanta mor', 'Lavanta gül', 'Limoni', 'Açık Limon',
        'Leylak', 'Lime', 'Mandalina', 'Malakit', 'Mavi',
        'Menekşe', 'Menekşe-patlıcan', 'Mısır', 'Mor', 'Morsalkım',
        'Nane yeşili', 'Nar', 'Navajo beyazı', 'Okul otobüsü sarısı', 'Parlak mor',
        'Pas', 'Pastel pembe', 'Pastel yeşili', 'Patlıcan', 'Pembe',
        'Pembe-turuncu', 'Peygamber çiçeği', 'Prusya mavisi', 'Safran', 'Safir',
        'Sarımsı kahverengi', 'Sarımsı pembe', 'Sarı', 'Sarı',
        'Siyahımsı koyu kahverengi', 'Soluk sarı', 'Şeftali', 'Şeftali-turuncu', 'Şeftali-sarı',
        'Tarçın', 'Teal', 'Toz mavi', 'Turkuaz',
        'Turuncumsu sarı', 'Turuncu', 'Turuncumsu sarı', 'Yeşil', 'Yeşil-sarı', 'Yonca yeşili',
        'Yosun yeşili', 'Zeytuni', 'Zümrüt yeşili', 'Yanık turuncu', 'Yanık Toprak',
        'Kardinal', 'Şarap', 'Celadon', 'Berrak mavi',
        'Gök mavisi', 'Gül', 'Mercan', 'Mercan Kırmızısı', 'Kıpkırmızı', 'Hile mavisi',
        'Altınımsı', 'Soytarı', 'Siğil otu', 'Holivod kırmızısı', 'Sıcak Magenta',
        'Sıcak pembe', 'Uluslararası Klein mavisi', 'Enternasyonal turuncu', 'Yeşim', 'Orta şarap',
        'Orta Mor', 'Dağ pembesi', 'Aşı boyası', 'Eski altın', 'Eski iplik', 'Eski Lavanta',
        'Eski gül', 'Zeytin Kahverengisi', 'Donuk turuncu', 'Papaya',
        'Periwinkle', 'Pers mavisi', 'Pers yeşili', 'Persian lacivert', 'Pers pembesi',
        'Persian kırmızısı', 'Pers gülü', 'Ham toprak', 'Kızıl yumurta mavisi',
        'Kraliyet mavisi', 'Kırmızı şarap', 'Kırmızı', 'Deniz kabuğu', 'Ayrık sarı',
        'Vurgun pembe', 'Salamura grisi', 'Tenné (Tawny)', 'Küçük kara', 'Lacivert', 'Viridian',
        'Zinnwaldite',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Color.php");
    }
}
