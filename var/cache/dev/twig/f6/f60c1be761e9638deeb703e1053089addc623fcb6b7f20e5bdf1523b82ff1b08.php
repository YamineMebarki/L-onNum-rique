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

/* vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php */
class __TwigTemplate_cba55ae7076e7660b00525cc9150e1994d30824704773311a3b082e1a763dc96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fi_FI;

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
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$catchPhraseWords = array(
        array(
            'Ainoa', 'Adaptiivinen', 'Automatisoitu', 'Avoin', 'Avoimen lähdekoodin', 'Digitalisoitu', 'Dynaaminen', 'Erikoistunut', 'Ennakoiva', 'Ergonominen', 'Hallittu', 'Hajautettu', 'Horisontaalinen', 'Integroitu', 'Innovatiivinen', 'Jaettava', 'Keskittynyt', 'Käyttäjäystävällinen', 'Laajenettu', 'Laajennettava', 'Lievittävä', 'Maailmanlaajuinen', 'Muokattava', 'Monitoroitu', 'Monikerroksinen', 'Ohjelmoitava', 'Optimoitu', 'Organisoitu', 'Orgaaninen', 'Rinnastettava', 'Räätälöitävä', 'Saumaton', 'Tasapainotettava', 'Täysin yhteensopiva', 'Yhteensopiva', 'Yksinomainen', 'Vaiheittainen', 'Virtuaalinen', 'Visionäärinen', 'Valinnainen', 'Verkostoitunut'
        ),
        array(
            '24/7', '3. sukupolven', '4. sukupolven', '5. sukupolven', '6. sukupolven', 'alueellinen', 'analysoiva', 'assymmetrinen', 'asynkroninen', 'asiakaslähtöinen', 'dynaaminen', 'globaali', 'heuristinen', 'hybridi', 'inkrementaalinen', 'interaktiivinen', 'kahtiajakautuva', 'kaksisuuntainen', 'konkreettinen', 'korkean tason', 'logistinen', 'johdonmukainen', 'maksimaalinen', 'moniajettava', 'multimedia', 'optimaalinen', 'optimoiva', 'omistautunut', 'paikallinen', 'reaaliaikainen', 'seuraavan sukupolven', 'skaalautuva', 'systeeminen'
        ),
        array(
            'algoritmi', 'yhteisö', 'analysaattori', 'sovellus', 'lähestymistapa', 'arkkitehtuuri', 'arkisto', 'ryhmä', 'sovitin', 'benchmark', 'kapasiteetti', 'tietokanta', 'piiri', 'emulaatio', 'konsepti', 'firmware', 'rakenne', 'funktio', 'rauta', 'help-desk', 'hierarkia', 'hubi', 'implementaatio', 'intranet', 'malli', 'ohjelmisto', 'ratkaisu', 'strategia', 'menestys', 'projekti', 'tuote', 'tuki', 'www-sivusto', 'synergia', 'protokolla', 'koodaus', 'ennuste', 'joustavuus', 'extranet', 'salaus', 'kompleksisuus', 'ydin', 'asenne', 'liitto', 'internetratkaisu', 'asennus', 'monitorointi', 'infrastruktuuri'
        )
    );

    protected static \$bsWords = array(
        array(
            'implementoi', 'käyttää', 'integroi', 'optimoi', 'kehittää', 'muuntaa', 'omaksuu', 'mahdollistaa', 'orkestoi', 'uudelleenkeksii', 'kerää', 'kokoaa', 'kasvattaa', 'parantaa', 'helpottaa', 'toimittaa', 'antaa', 'täyttää', 'vapauttaa', 'ajaa', 'jatkaa', 'mullistaa', 'iteroi', 'generoi', 'hyödyntää', 'brandaa', 'muokkaa', 'kasvattaa', 'kytkee', 'innovoi', 'viljelee', 'visualisoi'
        ),
        array(
            'maailmanluokan', '24/7', 'maailmanlaajuisia', 'interaktiivisia', 'seksikkäitä', 'rikkaita', 'visionäärisiä', 'parhaita', 'viraaleja', 'dynaamisia', 'strategisia', 'vallankumouksellisia', '24/365', 'e-bisnes', 'virtuaalisia', 'intuitiivisia', 'ennakoivia', 'kitkattomia', 'jaettuja', 'reaaliaikaisia', 'huippuluokan', 'tehokkaita', 'suorituskykyisiä', 'pystyviä', 'laajennettavissa olevia', 'venyviä', 'yhteisvaikutteisia', 'seuraavan sukupolven', 'plug-and-play', 'yhteistyökykyisiä', 'kustomoituja', 'langattomia', 'selkeitä', 'avoimen lähdekoodin'
        ),
        array(
            'kanavia', 'silmämunia', 'ratkaisuja', 'e-palveluja', 'portaaleja', 'teknologioita', 'käyttäjiä', 'verkkoja', 'palveluita', 'ohjelmia', 'web-ohjelmistoja', 'kokemuksia', 'systeemejä', 'rajapintoja', 'yhteisöjä', 'markkinarakoja', 'skeemoja', 'arkkitehtuureja', 'malleja', 'sisältöä', 'mainoksia'
        )
    );

    protected static \$companySuffix = array('OY', 'AB', 'OY AB', 'RY', 'OYj', 'Tmi.', 'Inc.', 'Ltd');

    /**
     * @example 'Ainoa 3.sukupolven ohjelmisto'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'hyödyntää maailmanlaajuisia yhteisöjä'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fi_FI;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}}, {{lastName}} and {{lastName}}'
    );

    protected static \$catchPhraseWords = array(
        array(
            'Ainoa', 'Adaptiivinen', 'Automatisoitu', 'Avoin', 'Avoimen lähdekoodin', 'Digitalisoitu', 'Dynaaminen', 'Erikoistunut', 'Ennakoiva', 'Ergonominen', 'Hallittu', 'Hajautettu', 'Horisontaalinen', 'Integroitu', 'Innovatiivinen', 'Jaettava', 'Keskittynyt', 'Käyttäjäystävällinen', 'Laajenettu', 'Laajennettava', 'Lievittävä', 'Maailmanlaajuinen', 'Muokattava', 'Monitoroitu', 'Monikerroksinen', 'Ohjelmoitava', 'Optimoitu', 'Organisoitu', 'Orgaaninen', 'Rinnastettava', 'Räätälöitävä', 'Saumaton', 'Tasapainotettava', 'Täysin yhteensopiva', 'Yhteensopiva', 'Yksinomainen', 'Vaiheittainen', 'Virtuaalinen', 'Visionäärinen', 'Valinnainen', 'Verkostoitunut'
        ),
        array(
            '24/7', '3. sukupolven', '4. sukupolven', '5. sukupolven', '6. sukupolven', 'alueellinen', 'analysoiva', 'assymmetrinen', 'asynkroninen', 'asiakaslähtöinen', 'dynaaminen', 'globaali', 'heuristinen', 'hybridi', 'inkrementaalinen', 'interaktiivinen', 'kahtiajakautuva', 'kaksisuuntainen', 'konkreettinen', 'korkean tason', 'logistinen', 'johdonmukainen', 'maksimaalinen', 'moniajettava', 'multimedia', 'optimaalinen', 'optimoiva', 'omistautunut', 'paikallinen', 'reaaliaikainen', 'seuraavan sukupolven', 'skaalautuva', 'systeeminen'
        ),
        array(
            'algoritmi', 'yhteisö', 'analysaattori', 'sovellus', 'lähestymistapa', 'arkkitehtuuri', 'arkisto', 'ryhmä', 'sovitin', 'benchmark', 'kapasiteetti', 'tietokanta', 'piiri', 'emulaatio', 'konsepti', 'firmware', 'rakenne', 'funktio', 'rauta', 'help-desk', 'hierarkia', 'hubi', 'implementaatio', 'intranet', 'malli', 'ohjelmisto', 'ratkaisu', 'strategia', 'menestys', 'projekti', 'tuote', 'tuki', 'www-sivusto', 'synergia', 'protokolla', 'koodaus', 'ennuste', 'joustavuus', 'extranet', 'salaus', 'kompleksisuus', 'ydin', 'asenne', 'liitto', 'internetratkaisu', 'asennus', 'monitorointi', 'infrastruktuuri'
        )
    );

    protected static \$bsWords = array(
        array(
            'implementoi', 'käyttää', 'integroi', 'optimoi', 'kehittää', 'muuntaa', 'omaksuu', 'mahdollistaa', 'orkestoi', 'uudelleenkeksii', 'kerää', 'kokoaa', 'kasvattaa', 'parantaa', 'helpottaa', 'toimittaa', 'antaa', 'täyttää', 'vapauttaa', 'ajaa', 'jatkaa', 'mullistaa', 'iteroi', 'generoi', 'hyödyntää', 'brandaa', 'muokkaa', 'kasvattaa', 'kytkee', 'innovoi', 'viljelee', 'visualisoi'
        ),
        array(
            'maailmanluokan', '24/7', 'maailmanlaajuisia', 'interaktiivisia', 'seksikkäitä', 'rikkaita', 'visionäärisiä', 'parhaita', 'viraaleja', 'dynaamisia', 'strategisia', 'vallankumouksellisia', '24/365', 'e-bisnes', 'virtuaalisia', 'intuitiivisia', 'ennakoivia', 'kitkattomia', 'jaettuja', 'reaaliaikaisia', 'huippuluokan', 'tehokkaita', 'suorituskykyisiä', 'pystyviä', 'laajennettavissa olevia', 'venyviä', 'yhteisvaikutteisia', 'seuraavan sukupolven', 'plug-and-play', 'yhteistyökykyisiä', 'kustomoituja', 'langattomia', 'selkeitä', 'avoimen lähdekoodin'
        ),
        array(
            'kanavia', 'silmämunia', 'ratkaisuja', 'e-palveluja', 'portaaleja', 'teknologioita', 'käyttäjiä', 'verkkoja', 'palveluita', 'ohjelmia', 'web-ohjelmistoja', 'kokemuksia', 'systeemejä', 'rajapintoja', 'yhteisöjä', 'markkinarakoja', 'skeemoja', 'arkkitehtuureja', 'malleja', 'sisältöä', 'mainoksia'
        )
    );

    protected static \$companySuffix = array('OY', 'AB', 'OY AB', 'RY', 'OYj', 'Tmi.', 'Inc.', 'Ltd');

    /**
     * @example 'Ainoa 3.sukupolven ohjelmisto'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'hyödyntää maailmanlaajuisia yhteisöjä'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Company.php");
    }
}
