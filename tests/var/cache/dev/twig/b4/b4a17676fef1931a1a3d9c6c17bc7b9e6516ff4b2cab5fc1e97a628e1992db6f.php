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

/* vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php */
class __TwigTemplate_8ac5c6fd615a9eb02da250011969c52767285aebd61bb9a12f68999c773a0dc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php"));

        // line 1
        echo "<?php namespace Faker\\Provider\\el_GR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companySuffix = array(
        'Ο.Ε',
        'Ε.Ε',
        'Α.Ε',
        'Ε.Π.Ε'
    );

    protected static \$companyFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$grafm = array('#########');


    protected static \$doy = array(
        'Α\\' Αθήνας',
        'Β\\' Αθήνας',
        'Γ\\' Αθήνας',
        'ΣΤ\\' Αθήνας',
        'Γαλάτσιου',
        'Α\\' Πειραιά',
        'Β\\' Πειραιά',
        'Γ\\' Πειραιά',
        'Α\\' Θεσσαλονίκης',
        'Β\\' Θεσσαλονίκης',
        'Γλυφάδας',
        'Ωροπού',
        'Καλιθέας',
        'Αγίου Δημητρίου',
        'Νέας Σμύρνης',
        'Αμαρουσίου',
        'Θήρας',
        'Αμοργού',
        'Πατρών',
        'ΔΟΥ ΠΛΟΙΩΝ',
        'ΦΑΕΕ ΑΘΗΝΩΝ'
    );


    protected static \$object = array(
        'Προγραμματιστής',
        'Δικηγόρος',
        'Γιατρός',
        'Γραφίστας',
        'Αρχαιολόγος',
        'Εκπαιδευτικός',
        'Μεταφραστής',
        'Μηχανολόγος-μηχανικός',
        'Αρχιτέκτονας',
        'Δημοσιογράφος',
        'Υπηρεσίες Διαδικτύου',
        'Ραδιοφωνικές παραγωγές',
        'Καραγκιοζοπαίχτης',
        'Κουλουράς',
        'Κομπάρσος',
        'Καλλιτεχνικός πράκτορας',
        'Εισαγωγαί-εξαγωγαί',
        'Ωρολογοποιός',
        'Καθεκλοποιός',
    );

    /**
     * @example 'Αθήνας'
     */
    public static function doy()
    {
        return static::randomElement(static::\$doy);
    }

    /**
     * Return The profession of a company
     *
     * @example 'Δημοσιογράφος'
     */
    public static function object()
    {
        return static::randomElement(static::\$object);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php namespace Faker\\Provider\\el_GR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companySuffix = array(
        'Ο.Ε',
        'Ε.Ε',
        'Α.Ε',
        'Ε.Π.Ε'
    );

    protected static \$companyFormats = array(
        '{{lastName}} {{firstName}} {{companySuffix}}',
        '{{lastName}}-{{firstName}}'
    );

    protected static \$grafm = array('#########');


    protected static \$doy = array(
        'Α\\' Αθήνας',
        'Β\\' Αθήνας',
        'Γ\\' Αθήνας',
        'ΣΤ\\' Αθήνας',
        'Γαλάτσιου',
        'Α\\' Πειραιά',
        'Β\\' Πειραιά',
        'Γ\\' Πειραιά',
        'Α\\' Θεσσαλονίκης',
        'Β\\' Θεσσαλονίκης',
        'Γλυφάδας',
        'Ωροπού',
        'Καλιθέας',
        'Αγίου Δημητρίου',
        'Νέας Σμύρνης',
        'Αμαρουσίου',
        'Θήρας',
        'Αμοργού',
        'Πατρών',
        'ΔΟΥ ΠΛΟΙΩΝ',
        'ΦΑΕΕ ΑΘΗΝΩΝ'
    );


    protected static \$object = array(
        'Προγραμματιστής',
        'Δικηγόρος',
        'Γιατρός',
        'Γραφίστας',
        'Αρχαιολόγος',
        'Εκπαιδευτικός',
        'Μεταφραστής',
        'Μηχανολόγος-μηχανικός',
        'Αρχιτέκτονας',
        'Δημοσιογράφος',
        'Υπηρεσίες Διαδικτύου',
        'Ραδιοφωνικές παραγωγές',
        'Καραγκιοζοπαίχτης',
        'Κουλουράς',
        'Κομπάρσος',
        'Καλλιτεχνικός πράκτορας',
        'Εισαγωγαί-εξαγωγαί',
        'Ωρολογοποιός',
        'Καθεκλοποιός',
    );

    /**
     * @example 'Αθήνας'
     */
    public static function doy()
    {
        return static::randomElement(static::\$doy);
    }

    /**
     * Return The profession of a company
     *
     * @example 'Δημοσιογράφος'
     */
    public static function object()
    {
        return static::randomElement(static::\$object);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/el_GR/Company.php");
    }
}
