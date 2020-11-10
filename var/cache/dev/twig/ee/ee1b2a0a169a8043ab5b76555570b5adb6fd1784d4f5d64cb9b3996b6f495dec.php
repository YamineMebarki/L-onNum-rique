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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php */
class __TwigTemplate_02b8f4902a759cf12d521337d7883fc79cf06e1f583242defc876302060153b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence;

use UnexpectedValueException;

/**
 * Contract for a Doctrine persistence layer ObjectRepository class to implement.
 */
interface ObjectRepository
{
    /**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed \$id The identifier.
     *
     * @return object|null The object.
     */
    public function find(\$id);

    /**
     * Finds all objects in the repository.
     *
     * @return object[] The objects.
     */
    public function findAll();

    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param mixed[]       \$criteria
     * @param string[]|null \$orderBy
     * @param int|null      \$limit
     * @param int|null      \$offset
     *
     * @return object[] The objects.
     *
     * @throws UnexpectedValueException
     */
    public function findBy(array \$criteria, ?array \$orderBy = null, \$limit = null, \$offset = null);

    /**
     * Finds a single object by a set of criteria.
     *
     * @param mixed[] \$criteria The criteria.
     *
     * @return object|null The object.
     */
    public function findOneBy(array \$criteria);

    /**
     * Returns the class name of the object managed by the repository.
     *
     * @return string
     */
    public function getClassName();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence;

use UnexpectedValueException;

/**
 * Contract for a Doctrine persistence layer ObjectRepository class to implement.
 */
interface ObjectRepository
{
    /**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed \$id The identifier.
     *
     * @return object|null The object.
     */
    public function find(\$id);

    /**
     * Finds all objects in the repository.
     *
     * @return object[] The objects.
     */
    public function findAll();

    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param mixed[]       \$criteria
     * @param string[]|null \$orderBy
     * @param int|null      \$limit
     * @param int|null      \$offset
     *
     * @return object[] The objects.
     *
     * @throws UnexpectedValueException
     */
    public function findBy(array \$criteria, ?array \$orderBy = null, \$limit = null, \$offset = null);

    /**
     * Finds a single object by a set of criteria.
     *
     * @param mixed[] \$criteria The criteria.
     *
     * @return object|null The object.
     */
    public function findOneBy(array \$criteria);

    /**
     * Returns the class name of the object managed by the repository.
     *
     * @return string
     */
    public function getClassName();
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php");
    }
}
