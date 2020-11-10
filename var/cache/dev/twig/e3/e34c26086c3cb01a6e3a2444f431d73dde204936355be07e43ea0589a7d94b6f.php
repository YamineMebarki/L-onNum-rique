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

/* vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php */
class __TwigTemplate_357de433b0769b7ce9dbfcdcc62edbd8b0a2bb2c7e79936d8c3d48f5fbe15c3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

/**
 * Class BaseUser.
 */
class BaseUser
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$username;

    private \$enabled;

    /**
     * BaseUser constructor.
     *
     * @param int    \$id
     * @param string \$username
     */
    public function __construct(int \$id, string \$username)
    {
        \$this->id = \$id;
        \$this->username = \$username;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return \$this->username;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

/**
 * Class BaseUser.
 */
class BaseUser
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$username;

    private \$enabled;

    /**
     * BaseUser constructor.
     *
     * @param int    \$id
     * @param string \$username
     */
    public function __construct(int \$id, string \$username)
    {
        \$this->id = \$id;
        \$this->username = \$username;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return \$this->username;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Fixtures/BaseUser.php");
    }
}
