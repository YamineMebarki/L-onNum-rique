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

/* vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php */
class __TwigTemplate_02356d9eb2d9724a2f89a0faf2057bd11d61fd6c04fe94fbab2a786266c68e03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\el_CY;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('Λευκωσία', 'Λεμεσός', 'Λάρνακα', 'Πάφος');
    protected static \$streetSuffix = array();
    protected static \$streetPrefix = array(
        'Όδος', 'Οδός', 'Λεωφόρος',
    );
    protected static \$cityFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " Αγίου ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " Βασιλέως ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$buildingNumber = array('##', '#');
    protected static \$postcode = array('####');
    protected static \$country = array(
        'Ανγκόλα', 'Αζερμπαϊτζάν', 'Αίγυπτος', 'Αιθιοπία', 'Αϊτή', 'Αλβανία', 'Αλγερία', 'Αργεντινή', 'Αρμενία', 'Αυστραλία', 'Αυστρία', 'Αφγανιστάν',
        'Βέλγιο', 'Βενεζουέλα', 'Βιετνάμ', 'Βολιβία', 'Βοσνία και Ερζεγοβίνη', 'Βουλγαρία', 'Βραζιλία',
        'Γαλλία', 'Γερμανία', 'Γεωργία', 'Γροιλανδία',
        'Δανία', 'Δομινικανή Δημοκρατία',
        'Ελβετία', 'Ελλάδα', 'Ερυθραία', 'Εσθονία',
        'ΗΠΑ', 'Ηνωμένο Βασίλειο',
        'Ιαπωνία', 'Ινδία', 'Ινδονησία', 'Ιορδανία', 'Ιράκ', 'Ιράν', 'Ιρλανδία', 'Ισλανδία', 'Ισπανία', 'Ισραήλ', 'Ιταλία',
        'Καζακστάν', 'Καμπότζη', 'Καναδάς', 'Κεντροαφρικανική Δημοκρατία', 'Κένυα', 'Κίνα', 'Κιργιζία', 'Κολομβία', 'Κομόρες', 'Δημοκρατία του Κονγκό', 'Λαϊκή Δημοκρατία του Κονγκό', 'Βόρεια Κορέα', 'Νότια Κορέα', 'Κόστα Ρίκα', 'Κουβέιτ', 'Κροατία', 'Κύπρος',
        'Λάος', 'Λεττονία', 'Λευκορωσία', 'Λίβανος', 'Λιβερία', 'Λιβύη', 'Λιθουανία', 'Λουξεμβούργο',
        'Μαδαγασκάρη', 'Μαλαισία', 'Μάλτα', 'Μαρόκο', 'Μαυρίκιος', 'Μαυριτανία', 'Μαυροβούνιο', 'Μεξικό', 'Μογγολία', 'Μοζαμβίκη', 'Μολδαβία', 'Μονακό', 'Μποτσουάνα', 'Μπουρούντι', 'Μπουτάν',
        'Νέα Ζηλανδία', 'Νεπάλ', 'Νίγηρας', 'Νιγηρία', 'Νικαράγουα', 'Νορβηγία', 'Νότια Αφρική',
        'Ολλανδία', 'Ουγγαρία', 'Ουγκάντα', 'Ουζμπεκιστάν', 'Ουκρανία', 'Ουρουγουάη',
        'Πακιστάν', 'Παλαιστίνη', 'Παναμάς', 'Παραγουάη', 'Περού', 'Πολωνία', 'Πουέρτο Ρίκο', 'Πορτογαλία', 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας',
        'Ρουάντα', 'Ρουμανία', 'Ρωσία',
        'Σαμόα', 'Σαουδική Αραβία', 'Σενεγάλη', 'Σερβία', 'Σιγκαπούρη', 'Σλοβακία', 'Σλοβενία', 'Σομαλία', 'Σουαζιλάνδη', 'Σουδάν', 'Σουηδία', 'Σουρινάμ', 'Συρία',
        'Ταϊβάν', 'Ταϊλάνδη', 'Τανζανία', 'Τατζικιστάν', 'Τζαμάικα', 'Τόγκο', 'Τόνγκα', 'Τουβαλού', 'Τουρκία', 'Τουρκμενιστάν', 'Τσεχία', 'Τυνησία',
        'Υεμένη',
        'Φιλιππίνες', 'Φινλανδία',
        'Χιλή',
    );

    /**
     * @example 'Όδος'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  83 => 19,  77 => 18,  69 => 17,  63 => 16,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\el_CY;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('Λευκωσία', 'Λεμεσός', 'Λάρνακα', 'Πάφος');
    protected static \$streetSuffix = array();
    protected static \$streetPrefix = array(
        'Όδος', 'Οδός', 'Λεωφόρος',
    );
    protected static \$cityFormats = array(
        '{{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{lastName}} {{lastName}}',
        '{{streetPrefix}} Αγίου {{lastName}}',
        '{{streetPrefix}} Βασιλέως {{lastName}}',
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}',
    );
    protected static \$buildingNumber = array('##', '#');
    protected static \$postcode = array('####');
    protected static \$country = array(
        'Ανγκόλα', 'Αζερμπαϊτζάν', 'Αίγυπτος', 'Αιθιοπία', 'Αϊτή', 'Αλβανία', 'Αλγερία', 'Αργεντινή', 'Αρμενία', 'Αυστραλία', 'Αυστρία', 'Αφγανιστάν',
        'Βέλγιο', 'Βενεζουέλα', 'Βιετνάμ', 'Βολιβία', 'Βοσνία και Ερζεγοβίνη', 'Βουλγαρία', 'Βραζιλία',
        'Γαλλία', 'Γερμανία', 'Γεωργία', 'Γροιλανδία',
        'Δανία', 'Δομινικανή Δημοκρατία',
        'Ελβετία', 'Ελλάδα', 'Ερυθραία', 'Εσθονία',
        'ΗΠΑ', 'Ηνωμένο Βασίλειο',
        'Ιαπωνία', 'Ινδία', 'Ινδονησία', 'Ιορδανία', 'Ιράκ', 'Ιράν', 'Ιρλανδία', 'Ισλανδία', 'Ισπανία', 'Ισραήλ', 'Ιταλία',
        'Καζακστάν', 'Καμπότζη', 'Καναδάς', 'Κεντροαφρικανική Δημοκρατία', 'Κένυα', 'Κίνα', 'Κιργιζία', 'Κολομβία', 'Κομόρες', 'Δημοκρατία του Κονγκό', 'Λαϊκή Δημοκρατία του Κονγκό', 'Βόρεια Κορέα', 'Νότια Κορέα', 'Κόστα Ρίκα', 'Κουβέιτ', 'Κροατία', 'Κύπρος',
        'Λάος', 'Λεττονία', 'Λευκορωσία', 'Λίβανος', 'Λιβερία', 'Λιβύη', 'Λιθουανία', 'Λουξεμβούργο',
        'Μαδαγασκάρη', 'Μαλαισία', 'Μάλτα', 'Μαρόκο', 'Μαυρίκιος', 'Μαυριτανία', 'Μαυροβούνιο', 'Μεξικό', 'Μογγολία', 'Μοζαμβίκη', 'Μολδαβία', 'Μονακό', 'Μποτσουάνα', 'Μπουρούντι', 'Μπουτάν',
        'Νέα Ζηλανδία', 'Νεπάλ', 'Νίγηρας', 'Νιγηρία', 'Νικαράγουα', 'Νορβηγία', 'Νότια Αφρική',
        'Ολλανδία', 'Ουγγαρία', 'Ουγκάντα', 'Ουζμπεκιστάν', 'Ουκρανία', 'Ουρουγουάη',
        'Πακιστάν', 'Παλαιστίνη', 'Παναμάς', 'Παραγουάη', 'Περού', 'Πολωνία', 'Πουέρτο Ρίκο', 'Πορτογαλία', 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας',
        'Ρουάντα', 'Ρουμανία', 'Ρωσία',
        'Σαμόα', 'Σαουδική Αραβία', 'Σενεγάλη', 'Σερβία', 'Σιγκαπούρη', 'Σλοβακία', 'Σλοβενία', 'Σομαλία', 'Σουαζιλάνδη', 'Σουδάν', 'Σουηδία', 'Σουρινάμ', 'Συρία',
        'Ταϊβάν', 'Ταϊλάνδη', 'Τανζανία', 'Τατζικιστάν', 'Τζαμάικα', 'Τόγκο', 'Τόνγκα', 'Τουβαλού', 'Τουρκία', 'Τουρκμενιστάν', 'Τσεχία', 'Τυνησία',
        'Υεμένη',
        'Φιλιππίνες', 'Φινλανδία',
        'Χιλή',
    );

    /**
     * @example 'Όδος'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/el_CY/Address.php");
    }
}
