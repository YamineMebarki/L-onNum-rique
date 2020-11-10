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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php */
class __TwigTemplate_7bffe4d21d0cd709a5bb9034209a11ffe10cdf97969a5e8c633553f48f28a712 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

/**
 * Interface for collections that allow efficient filtering with an expression API.
 *
 * Goal of this interface is a backend independent method to fetch elements
 * from a collections. {@link Expression} is crafted in a way that you can
 * implement queries from both in-memory and database-backed collections.
 *
 * For database backed collections this allows very efficient access by
 * utilizing the query APIs, for example SQL in the ORM. Applications using
 * this API can implement efficient database access without having to ask the
 * EntityManager or Repositories.
 *
 * @psalm-template TKey as array-key
 * @psalm-template T
 */
interface Selectable
{
    /**
     * Selects all elements from a selectable that match the expression and
     * returns a new collection containing these elements.
     *
     * @return Collection
     *
     * @psalm-return Collection<TKey,T>
     */
    public function matching(Criteria \$criteria);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

/**
 * Interface for collections that allow efficient filtering with an expression API.
 *
 * Goal of this interface is a backend independent method to fetch elements
 * from a collections. {@link Expression} is crafted in a way that you can
 * implement queries from both in-memory and database-backed collections.
 *
 * For database backed collections this allows very efficient access by
 * utilizing the query APIs, for example SQL in the ORM. Applications using
 * this API can implement efficient database access without having to ask the
 * EntityManager or Repositories.
 *
 * @psalm-template TKey as array-key
 * @psalm-template T
 */
interface Selectable
{
    /**
     * Selects all elements from a selectable that match the expression and
     * returns a new collection containing these elements.
     *
     * @return Collection
     *
     * @psalm-return Collection<TKey,T>
     */
    public function matching(Criteria \$criteria);
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php");
    }
}
