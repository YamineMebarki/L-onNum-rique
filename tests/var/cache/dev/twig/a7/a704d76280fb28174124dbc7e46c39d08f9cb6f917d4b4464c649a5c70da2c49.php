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

/* vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php */
class __TwigTemplate_f71b2bbd1b38358f4e96c3656004b9c0a2fac89cbc07de7a2daf89ee6102b11f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\nl_NL;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'zwart', 'kastanjebruin', 'donkergroen', 'marine', 'olijfgroen',
        'purper', 'groenblauw', 'limoen', 'blauw', 'zilver',
        'grijs', 'geel', 'fuchsia', 'cyaan', 'wit',
    );

    protected static \$allColorNames = array(
        'Cyaan', 'Aquamarijn', 'Aquamarijn', 'Ultramarijn', 'Beige',
        'Zwart', 'Blauw', 'Blauwviolet', 'Bruin', 'Groen', 'Chocoladebruin',
        'Koraal', 'Korenbloemblauw', 'Vermiljoen', 'Cyaan', 'Donkerblauw',
        'Donkercyaan', 'Donkergrijs', 'Donkergroen', 'Donkergrijs',
        'Donkerkaki', 'Donkermagenta', 'Donkerolijfgroen', 'Donkeroranje',
        'Donkerrood', 'Donkerzalm', 'Donkerzeegroen', 'Donkerleigrijs',
        'Donkerleigrijs', 'Donkerturkoois', 'Donkerviolet', 'Dieproze',
        'Diep hemelsblauw', 'Vuurvaste baksteen', 'Fluweelwit', 'Bosgroen',
        'Fuchsia', 'Goud', 'Grijs', 'Donkergroen', 'Groengeel', 'Grijs',
        'Acaciaroze', 'Indisch rood', 'Indigo', 'Ivoor', 'Kaki', 'Lavendel',
        'Grasgroen', 'Lichtblauw', 'Lichtkoraal', 'Lichtcyaan', 'Lichtgrijs',
        'Lichtgroen', 'Lichtgrijs', 'Lichtroze', 'Lichtzalm', 'Lichtzeegroen',
        'Lichthemelsblauw', 'Lichtleigrijs', 'Lichtleigrijs', 'Staalblauw',
        'Lichtgeel', 'Limoen', 'Limoengroen', 'Linnen', 'Magenta', 'Kastanjebruin',
        'Middenblauw', 'Midlentegroen', 'Middenvioletrood', 'Midnachtsblauw',
        'Mint', 'Marine', 'Kant', 'Olijfgroen', 'Oranje', 'Oranjerood', 'Oranjerood',
        'Orchidee', 'Bleekgroen', 'Lichtturkoois', 'Roze', 'Pruim', 'Purper',
        'Rood', 'Koningsblauw', 'Zalm', 'Zandbruin', 'Zeegroen', 'Schelp', 'Sienna',
        'Zilver', 'Hemelsblauw', 'Leigrijs', 'Leigrijs', 'Sneeuwwit', 'Lentegroen',
        'Donkerstaalblauw', 'Groenblauw', 'Distel', 'Tomaat', 'Transparant', 'Turkoois',
        'Violet', 'Wit', 'Rookwit', 'Geel', 'Groengeel',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\nl_NL;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'zwart', 'kastanjebruin', 'donkergroen', 'marine', 'olijfgroen',
        'purper', 'groenblauw', 'limoen', 'blauw', 'zilver',
        'grijs', 'geel', 'fuchsia', 'cyaan', 'wit',
    );

    protected static \$allColorNames = array(
        'Cyaan', 'Aquamarijn', 'Aquamarijn', 'Ultramarijn', 'Beige',
        'Zwart', 'Blauw', 'Blauwviolet', 'Bruin', 'Groen', 'Chocoladebruin',
        'Koraal', 'Korenbloemblauw', 'Vermiljoen', 'Cyaan', 'Donkerblauw',
        'Donkercyaan', 'Donkergrijs', 'Donkergroen', 'Donkergrijs',
        'Donkerkaki', 'Donkermagenta', 'Donkerolijfgroen', 'Donkeroranje',
        'Donkerrood', 'Donkerzalm', 'Donkerzeegroen', 'Donkerleigrijs',
        'Donkerleigrijs', 'Donkerturkoois', 'Donkerviolet', 'Dieproze',
        'Diep hemelsblauw', 'Vuurvaste baksteen', 'Fluweelwit', 'Bosgroen',
        'Fuchsia', 'Goud', 'Grijs', 'Donkergroen', 'Groengeel', 'Grijs',
        'Acaciaroze', 'Indisch rood', 'Indigo', 'Ivoor', 'Kaki', 'Lavendel',
        'Grasgroen', 'Lichtblauw', 'Lichtkoraal', 'Lichtcyaan', 'Lichtgrijs',
        'Lichtgroen', 'Lichtgrijs', 'Lichtroze', 'Lichtzalm', 'Lichtzeegroen',
        'Lichthemelsblauw', 'Lichtleigrijs', 'Lichtleigrijs', 'Staalblauw',
        'Lichtgeel', 'Limoen', 'Limoengroen', 'Linnen', 'Magenta', 'Kastanjebruin',
        'Middenblauw', 'Midlentegroen', 'Middenvioletrood', 'Midnachtsblauw',
        'Mint', 'Marine', 'Kant', 'Olijfgroen', 'Oranje', 'Oranjerood', 'Oranjerood',
        'Orchidee', 'Bleekgroen', 'Lichtturkoois', 'Roze', 'Pruim', 'Purper',
        'Rood', 'Koningsblauw', 'Zalm', 'Zandbruin', 'Zeegroen', 'Schelp', 'Sienna',
        'Zilver', 'Hemelsblauw', 'Leigrijs', 'Leigrijs', 'Sneeuwwit', 'Lentegroen',
        'Donkerstaalblauw', 'Groenblauw', 'Distel', 'Tomaat', 'Transparant', 'Turkoois',
        'Violet', 'Wit', 'Rookwit', 'Geel', 'Groengeel',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/Color.php");
    }
}
