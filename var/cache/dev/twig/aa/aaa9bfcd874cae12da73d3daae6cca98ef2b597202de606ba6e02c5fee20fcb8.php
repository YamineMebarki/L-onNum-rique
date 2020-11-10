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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php */
class __TwigTemplate_086833a98cdcab743738b5ecdf427b82cb837c95bd01e2e89de2a9e9ae90c3dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php"));

        // line 1
        echo "<?php

// data source

namespace Faker\\Provider\\en_NG;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * An array of typical Nigerian male firstnames.
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$firstNameMale = array(
        'Abimbola','Abisola','Abisoye','Adeboye','Adedayo','Adegoke', 'Akande', 'Akanni', 'Alade', 'Ayinde', 'Azubuike',
        'Banji', 'Bankole', 'Buchi', 'Bukola',
        'Chinedu', 'Chisom', 'Chukwu',
        'Damilare', 'Damilola', 'Danjuma',
        'Ebiowei', 'Emeka', 'Emmanuel', 'Esse',
        'Funmilade', 'Funmilayo',
        'Gbeminiyi', 'Gbemisola',
        'Habiba', 'Ifeanyichukwu',
        'Ikenna', 'Ikhidie', 'Ireti',
        'Jadesola', 'Johnson',
        'Kayode', 'Kemi', 'Kubra', 'Kubura',
        'Lolade',
        'Makinwa', 'Mohammed', 'Musa', 'Muyiwa',
        'Nnamdi',
        'Olaide', 'Olufunmi', 'Olumide', 'Oluwunmi', 'Onoriode',
        'Remilekun', 'Rotimi',
        'Shade', 'Shalewa', 'Sname',
        'Tari', 'Temitope', 'Titilope', 'Tobiloba', 'Toke', 'Tomiloba', 'Tope',
        'Uzodimma',
        'Wale',
        'Yakubu', 'Yusuf', 'Yusuf',
    );

    /**
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$firstNameFemale = array(
        'Adaugo', 'Akunna', 'Aminat', 'Aminu', 'Augustina', 'Ayebatari',
        'Cherechi', 'Chiamaka', 'Chimamanda', 'Chinyere', 'Chizoba',
        'Ebiere', 'Efe',
        'Fatima', 'Ifeoma',
        'Ifunanya', 'Isioma',
        'Jolayemi',
        'Lola',
        'Obioma', 'Omawunmi', 'Omolara', 'Onome',
        'Rasheedah',
        'Sekinat', 'Simisola', 'Sumayyah',
        'Titi', 'Titilayo', 'Toluwani',
        'Zainab'
    );

    /**
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$lastName = array(
        'Abiodun', 'Abiola', 'Abodunrin', 'Abosede', 'Adaobi', 'Adebayo', 'Adegboye', 'Adegoke', 'Ademayowa', 'Ademola', 'Adeniyan', 'Adeoluwa', 'Aderinsola', 'Aderonke', 'Adesina', 'Adewale', 'Adewale', 'Adewale', 'Adewunmi', 'Adewura', 'Adeyemo', 'Afolabi', 'Afunku', 'Agboola', 'Agboola', 'Agnes', 'Aigbiniode', 'Ajakaiye', 'Ajose-adeogun', 'Akeem-omosanya', 'Akerele', 'Akintade', 'Aligbe', 'Amaechi', 'Aminat', 'Aremu', 'Atanda', 'Ayisat', 'Ayobami', 'Ayomide', 'Ayomide',
        'Babalola', 'Babatunde', 'Balogun', 'Bamisebi', 'Bello', 'Busari',
        'Chibike', 'Chibuike', 'Chidinma', 'Chidozie', 'Christian', 'Clare',
        'David', 'David',
        'Ebubechukwu', 'Egbochukwu', 'Ehigiator', 'Ekwueme', 'Elebiyo', 'Elizabeth', 'Elizabeth', 'Elizabeth', 'Emmanuel', 'Emmanuel', 'Esther',
        'Funmilayo',
        'Gbadamosi', 'Gbogboade', 'Grace',
        'Habeeb', 'Hanifat', 'Isaac',
        'Ismail', 'Isokun', 'Isreal', 'Iyalla',
        'Jamiu', 'Jimoh', 'Joshua', 'Justina',
        'Katherine', 'Kayode', 'Kayode', 'Kimberly',
        'Ladega', 'Latifat', 'Lawal', 'Leonard',
        'Makuachukwu', 'Maryam', 'Maryjane', 'Mayowa', 'Miracle', 'Mobolaji', 'Mogbadunade', 'Motalo', 'Muinat', 'Mukaram', 'Mustapha', 'Mutiat',
        'Ndukwu', 'Ngozi', 'Nojeem', 'Nwachukwu', 'Nwogu', 'Nwuzor',
        'Obiageli', 'Obianuju', 'Odunayo', 'Odunayo', 'Ogunbanwo', 'Ogunwande', 'Okonkwo', 'Okunola', 'Oladeji', 'Oladimeji', 'Olaoluwa', 'Olasunkanmi', 'Olasunkanmi-fasayo', 'Olawale', 'Olubukola', 'Olubunmi', 'Olufeyikemi', 'Olumide', 'Olutola', 'Oluwakemi', 'Oluwanisola', 'Oluwaseun', 'Oluwaseyi', 'Oluwashina', 'Oluwatosin', 'Omobolaji', 'Omobolanle', 'Omolara', 'Omowale', 'Onohinosen', 'Onose', 'Onyinyechukwu', 'Opeyemi', 'Osuagwu', 'Oyebola', 'Oyelude', 'Oyinkansola',
        'Peter',
        'Sabdat', 'Saheed', 'Salami', 'Samuel', 'Sanusi', 'Sarah', 'Segunmaru', 'Sekinat', 'Sulaimon', 'Sylvester',
        'Taiwo', 'Tamunoemi', 'Tella', 'Temitope', 'Tolulope',
        'Uchechi',
        'Wasiu', 'Wilcox', 'Wuraola',
        'Yaqub', 'Yussuf'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// data source

namespace Faker\\Provider\\en_NG;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}'
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}'
    );

    /**
     * An array of typical Nigerian male firstnames.
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$firstNameMale = array(
        'Abimbola','Abisola','Abisoye','Adeboye','Adedayo','Adegoke', 'Akande', 'Akanni', 'Alade', 'Ayinde', 'Azubuike',
        'Banji', 'Bankole', 'Buchi', 'Bukola',
        'Chinedu', 'Chisom', 'Chukwu',
        'Damilare', 'Damilola', 'Danjuma',
        'Ebiowei', 'Emeka', 'Emmanuel', 'Esse',
        'Funmilade', 'Funmilayo',
        'Gbeminiyi', 'Gbemisola',
        'Habiba', 'Ifeanyichukwu',
        'Ikenna', 'Ikhidie', 'Ireti',
        'Jadesola', 'Johnson',
        'Kayode', 'Kemi', 'Kubra', 'Kubura',
        'Lolade',
        'Makinwa', 'Mohammed', 'Musa', 'Muyiwa',
        'Nnamdi',
        'Olaide', 'Olufunmi', 'Olumide', 'Oluwunmi', 'Onoriode',
        'Remilekun', 'Rotimi',
        'Shade', 'Shalewa', 'Sname',
        'Tari', 'Temitope', 'Titilope', 'Tobiloba', 'Toke', 'Tomiloba', 'Tope',
        'Uzodimma',
        'Wale',
        'Yakubu', 'Yusuf', 'Yusuf',
    );

    /**
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$firstNameFemale = array(
        'Adaugo', 'Akunna', 'Aminat', 'Aminu', 'Augustina', 'Ayebatari',
        'Cherechi', 'Chiamaka', 'Chimamanda', 'Chinyere', 'Chizoba',
        'Ebiere', 'Efe',
        'Fatima', 'Ifeoma',
        'Ifunanya', 'Isioma',
        'Jolayemi',
        'Lola',
        'Obioma', 'Omawunmi', 'Omolara', 'Onome',
        'Rasheedah',
        'Sekinat', 'Simisola', 'Sumayyah',
        'Titi', 'Titilayo', 'Toluwani',
        'Zainab'
    );

    /**
     * @link https://andela-celisha-wigwe.github.io/names.html
     */
    protected static \$lastName = array(
        'Abiodun', 'Abiola', 'Abodunrin', 'Abosede', 'Adaobi', 'Adebayo', 'Adegboye', 'Adegoke', 'Ademayowa', 'Ademola', 'Adeniyan', 'Adeoluwa', 'Aderinsola', 'Aderonke', 'Adesina', 'Adewale', 'Adewale', 'Adewale', 'Adewunmi', 'Adewura', 'Adeyemo', 'Afolabi', 'Afunku', 'Agboola', 'Agboola', 'Agnes', 'Aigbiniode', 'Ajakaiye', 'Ajose-adeogun', 'Akeem-omosanya', 'Akerele', 'Akintade', 'Aligbe', 'Amaechi', 'Aminat', 'Aremu', 'Atanda', 'Ayisat', 'Ayobami', 'Ayomide', 'Ayomide',
        'Babalola', 'Babatunde', 'Balogun', 'Bamisebi', 'Bello', 'Busari',
        'Chibike', 'Chibuike', 'Chidinma', 'Chidozie', 'Christian', 'Clare',
        'David', 'David',
        'Ebubechukwu', 'Egbochukwu', 'Ehigiator', 'Ekwueme', 'Elebiyo', 'Elizabeth', 'Elizabeth', 'Elizabeth', 'Emmanuel', 'Emmanuel', 'Esther',
        'Funmilayo',
        'Gbadamosi', 'Gbogboade', 'Grace',
        'Habeeb', 'Hanifat', 'Isaac',
        'Ismail', 'Isokun', 'Isreal', 'Iyalla',
        'Jamiu', 'Jimoh', 'Joshua', 'Justina',
        'Katherine', 'Kayode', 'Kayode', 'Kimberly',
        'Ladega', 'Latifat', 'Lawal', 'Leonard',
        'Makuachukwu', 'Maryam', 'Maryjane', 'Mayowa', 'Miracle', 'Mobolaji', 'Mogbadunade', 'Motalo', 'Muinat', 'Mukaram', 'Mustapha', 'Mutiat',
        'Ndukwu', 'Ngozi', 'Nojeem', 'Nwachukwu', 'Nwogu', 'Nwuzor',
        'Obiageli', 'Obianuju', 'Odunayo', 'Odunayo', 'Ogunbanwo', 'Ogunwande', 'Okonkwo', 'Okunola', 'Oladeji', 'Oladimeji', 'Olaoluwa', 'Olasunkanmi', 'Olasunkanmi-fasayo', 'Olawale', 'Olubukola', 'Olubunmi', 'Olufeyikemi', 'Olumide', 'Olutola', 'Oluwakemi', 'Oluwanisola', 'Oluwaseun', 'Oluwaseyi', 'Oluwashina', 'Oluwatosin', 'Omobolaji', 'Omobolanle', 'Omolara', 'Omowale', 'Onohinosen', 'Onose', 'Onyinyechukwu', 'Opeyemi', 'Osuagwu', 'Oyebola', 'Oyelude', 'Oyinkansola',
        'Peter',
        'Sabdat', 'Saheed', 'Salami', 'Samuel', 'Sanusi', 'Sarah', 'Segunmaru', 'Sekinat', 'Sulaimon', 'Sylvester',
        'Taiwo', 'Tamunoemi', 'Tella', 'Temitope', 'Tolulope',
        'Uchechi',
        'Wasiu', 'Wilcox', 'Wuraola',
        'Yaqub', 'Yussuf'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_NG/Person.php");
    }
}
