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

/* vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php */
class __TwigTemplate_f3e8d4fad2be3646c26fa92f13fde3365584c1810f656670446095cce2256224 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\cs_CZ;

class Company extends \\Faker\\Provider\\Company
{
    /**
     * @var array Czech company name formats.
     */
    protected static \$formats = array(
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Czech catch phrase formats.
     */
    protected static \$catchPhraseFormats = array(
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["catchPhraseVerb"]) || array_key_exists("catchPhraseVerb", $context) ? $context["catchPhraseVerb"] : (function () { throw new RuntimeError('Variable "catchPhraseVerb" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseNoun"]) || array_key_exists("catchPhraseNoun", $context) ? $context["catchPhraseNoun"] : (function () { throw new RuntimeError('Variable "catchPhraseNoun" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseAttribute"]) || array_key_exists("catchPhraseAttribute", $context) ? $context["catchPhraseAttribute"] : (function () { throw new RuntimeError('Variable "catchPhraseAttribute" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["catchPhraseVerb"]) || array_key_exists("catchPhraseVerb", $context) ? $context["catchPhraseVerb"] : (function () { throw new RuntimeError('Variable "catchPhraseVerb" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseNoun"]) || array_key_exists("catchPhraseNoun", $context) ? $context["catchPhraseNoun"] : (function () { throw new RuntimeError('Variable "catchPhraseNoun" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseNoun"]) || array_key_exists("catchPhraseNoun", $context) ? $context["catchPhraseNoun"] : (function () { throw new RuntimeError('Variable "catchPhraseNoun" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseAttribute"]) || array_key_exists("catchPhraseAttribute", $context) ? $context["catchPhraseAttribute"] : (function () { throw new RuntimeError('Variable "catchPhraseAttribute" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["catchPhraseVerb"]) || array_key_exists("catchPhraseVerb", $context) ? $context["catchPhraseVerb"] : (function () { throw new RuntimeError('Variable "catchPhraseVerb" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseNoun"]) || array_key_exists("catchPhraseNoun", $context) ? $context["catchPhraseNoun"] : (function () { throw new RuntimeError('Variable "catchPhraseNoun" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseAttribute"]) || array_key_exists("catchPhraseAttribute", $context) ? $context["catchPhraseAttribute"] : (function () { throw new RuntimeError('Variable "catchPhraseAttribute" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseAttribute"]) || array_key_exists("catchPhraseAttribute", $context) ? $context["catchPhraseAttribute"] : (function () { throw new RuntimeError('Variable "catchPhraseAttribute" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        'Ne";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["catchPhraseVerb"]) || array_key_exists("catchPhraseVerb", $context) ? $context["catchPhraseVerb"] : (function () { throw new RuntimeError('Variable "catchPhraseVerb" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseNoun"]) || array_key_exists("catchPhraseNoun", $context) ? $context["catchPhraseNoun"] : (function () { throw new RuntimeError('Variable "catchPhraseNoun" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["catchPhraseAttribute"]) || array_key_exists("catchPhraseAttribute", $context) ? $context["catchPhraseAttribute"] : (function () { throw new RuntimeError('Variable "catchPhraseAttribute" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Czech nouns (used by the catch phrase format).
     */
    protected static \$noun = array(
        'bezpečnost', 'pohodlí', 'seo', 'rychlost', 'testování', 'údržbu', 'odebírání', 'výstavbu',
        'návrh', 'prodej', 'nákup', 'zprostředkování', 'odvoz', 'přepravu', 'pronájem'
    );

    /**
     * @var array Czech verbs (used by the catch phrase format).
     */
    protected static \$verb = array(
        'zajišťujeme', 'nabízíme', 'děláme', 'provozujeme', 'realizujeme', 'předstihujeme', 'mobilizujeme',
    );

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static \$attribute = array(
        'pro vás', 'pro vaší službu', 'a jsme jednička na trhu', 'pro lepší svět', 'zdarma', 'se zárukou',
        's inovací', 'turbíny', 'mrakodrapů', 'lampiónků a svíček', 'bourací techniky', 'nákupních košíků',
        'vašeho webu', 'pro vaše zákazníky', 'za nízkou cenu', 'jako jediní na trhu', 'webu', 'internetu',
        'vaší rodiny', 'vašich známých', 'vašich stránek', 'čehokoliv na světě', 'za hubičku'
    );

    /**
     * @var array Company suffixes.
     */
    protected static \$companySuffix = array('s.r.o.', 's.r.o.', 's.r.o.', 's.r.o.', 'a.s.', 'o.p.s.', 'o.s.');

    /**
     * Returns a random catch phrase noun.
     *
     * @return string
     */
    public function catchPhraseNoun()
    {
        return static::randomElement(static::\$noun);
    }

    /**
     * Returns a random catch phrase attribute.
     *
     * @return string
     */
    public function catchPhraseAttribute()
    {
        return static::randomElement(static::\$attribute);
    }

    /**
     * Returns a random catch phrase verb.
     *
     * @return string
     */
    public function catchPhraseVerb()
    {
        return static::randomElement(static::\$verb);
    }

    /**
     * @return string
     */
    public function catchPhrase()
    {
        \$format = static::randomElement(static::\$catchPhraseFormats);

        return ucfirst(\$this->generator->parse(\$format));
    }

    /**
     * Generates valid czech IČO
     *
     * @see http://phpfashion.com/jak-overit-platne-ic-a-rodne-cislo
     * @return string
     */
    public function ico()
    {
        \$ico = static::numerify('#######');
        \$split = str_split(\$ico);
        \$prod = 0;
        foreach (array(8, 7, 6, 5, 4, 3, 2) as \$i => \$p) {
            \$prod += \$p * \$split[\$i];
        }
        \$mod = \$prod % 11;
        if (\$mod === 0 || \$mod === 10) {
            return \"{\$ico}1\";
        } elseif (\$mod === 1) {
            return \"{\$ico}0\";
        }

        return \$ico . (11 - \$mod);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  109 => 23,  99 => 22,  91 => 21,  77 => 14,  69 => 13,  61 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\cs_CZ;

class Company extends \\Faker\\Provider\\Company
{
    /**
     * @var array Czech company name formats.
     */
    protected static \$formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} a {{lastName}} {{companySuffix}}',
    );

    /**
     * @var array Czech catch phrase formats.
     */
    protected static \$catchPhraseFormats = array(
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} a {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}} a {{catchPhraseAttribute}}',
        'Ne{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
    );

    /**
     * @var array Czech nouns (used by the catch phrase format).
     */
    protected static \$noun = array(
        'bezpečnost', 'pohodlí', 'seo', 'rychlost', 'testování', 'údržbu', 'odebírání', 'výstavbu',
        'návrh', 'prodej', 'nákup', 'zprostředkování', 'odvoz', 'přepravu', 'pronájem'
    );

    /**
     * @var array Czech verbs (used by the catch phrase format).
     */
    protected static \$verb = array(
        'zajišťujeme', 'nabízíme', 'děláme', 'provozujeme', 'realizujeme', 'předstihujeme', 'mobilizujeme',
    );

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static \$attribute = array(
        'pro vás', 'pro vaší službu', 'a jsme jednička na trhu', 'pro lepší svět', 'zdarma', 'se zárukou',
        's inovací', 'turbíny', 'mrakodrapů', 'lampiónků a svíček', 'bourací techniky', 'nákupních košíků',
        'vašeho webu', 'pro vaše zákazníky', 'za nízkou cenu', 'jako jediní na trhu', 'webu', 'internetu',
        'vaší rodiny', 'vašich známých', 'vašich stránek', 'čehokoliv na světě', 'za hubičku'
    );

    /**
     * @var array Company suffixes.
     */
    protected static \$companySuffix = array('s.r.o.', 's.r.o.', 's.r.o.', 's.r.o.', 'a.s.', 'o.p.s.', 'o.s.');

    /**
     * Returns a random catch phrase noun.
     *
     * @return string
     */
    public function catchPhraseNoun()
    {
        return static::randomElement(static::\$noun);
    }

    /**
     * Returns a random catch phrase attribute.
     *
     * @return string
     */
    public function catchPhraseAttribute()
    {
        return static::randomElement(static::\$attribute);
    }

    /**
     * Returns a random catch phrase verb.
     *
     * @return string
     */
    public function catchPhraseVerb()
    {
        return static::randomElement(static::\$verb);
    }

    /**
     * @return string
     */
    public function catchPhrase()
    {
        \$format = static::randomElement(static::\$catchPhraseFormats);

        return ucfirst(\$this->generator->parse(\$format));
    }

    /**
     * Generates valid czech IČO
     *
     * @see http://phpfashion.com/jak-overit-platne-ic-a-rodne-cislo
     * @return string
     */
    public function ico()
    {
        \$ico = static::numerify('#######');
        \$split = str_split(\$ico);
        \$prod = 0;
        foreach (array(8, 7, 6, 5, 4, 3, 2) as \$i => \$p) {
            \$prod += \$p * \$split[\$i];
        }
        \$mod = \$prod % 11;
        if (\$mod === 0 || \$mod === 10) {
            return \"{\$ico}1\";
        } elseif (\$mod === 1) {
            return \"{\$ico}0\";
        }

        return \$ico . (11 - \$mod);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Company.php");
    }
}
