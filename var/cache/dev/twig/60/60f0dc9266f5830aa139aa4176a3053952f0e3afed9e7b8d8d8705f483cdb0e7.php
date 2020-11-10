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

/* vendor/fzaninotto/faker/src/autoload.php */
class __TwigTemplate_35aa91a8dd80a4999113d359b7a68786ef1bb0933c777239a034c65d67f630ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/autoload.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/autoload.php"));

        // line 1
        echo "<?php

/**
 * Simple autoloader that follow the PHP Standards Recommendation #0 (PSR-0)
 * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md for more informations.
 *
 * Code inspired from the SplClassLoader RFC
 * @see https://wiki.php.net/rfc/splclassloader#example_implementation
 */
spl_autoload_register(function (\$className) {
    \$className = ltrim(\$className, '\\\\');
    \$fileName = '';
    if (\$lastNsPos = strripos(\$className, '\\\\')) {
        \$namespace = substr(\$className, 0, \$lastNsPos);
        \$className = substr(\$className, \$lastNsPos + 1);
        \$fileName = str_replace('\\\\', DIRECTORY_SEPARATOR, \$namespace) . DIRECTORY_SEPARATOR;
    }
    \$fileName = __DIR__ . DIRECTORY_SEPARATOR . \$fileName . \$className . '.php';
    if (file_exists(\$fileName)) {
        require \$fileName;

        return true;
    }

    return false;
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/autoload.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * Simple autoloader that follow the PHP Standards Recommendation #0 (PSR-0)
 * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md for more informations.
 *
 * Code inspired from the SplClassLoader RFC
 * @see https://wiki.php.net/rfc/splclassloader#example_implementation
 */
spl_autoload_register(function (\$className) {
    \$className = ltrim(\$className, '\\\\');
    \$fileName = '';
    if (\$lastNsPos = strripos(\$className, '\\\\')) {
        \$namespace = substr(\$className, 0, \$lastNsPos);
        \$className = substr(\$className, \$lastNsPos + 1);
        \$fileName = str_replace('\\\\', DIRECTORY_SEPARATOR, \$namespace) . DIRECTORY_SEPARATOR;
    }
    \$fileName = __DIR__ . DIRECTORY_SEPARATOR . \$fileName . \$className . '.php';
    if (file_exists(\$fileName)) {
        require \$fileName;

        return true;
    }

    return false;
});
", "vendor/fzaninotto/faker/src/autoload.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/autoload.php");
    }
}
