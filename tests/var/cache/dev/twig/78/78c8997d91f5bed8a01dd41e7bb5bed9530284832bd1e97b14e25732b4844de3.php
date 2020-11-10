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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php */
class __TwigTemplate_9f8431b6fc6cdf60ba1170995fd426f41deb63f4821f5a317dea9eddd9742a69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ODM\\PHPCR\\DocumentManager;
use Doctrine\\ODM\\PHPCR\\DocumentManagerInterface;
use PHPCR\\Util\\NodeHelper;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 */
class PHPCRPurger implements PurgerInterface
{
    /**
     * @var DocumentManagerInterface
     */
    private \$dm;

    public function __construct(DocumentManagerInterface \$dm = null)
    {
        \$this->dm = \$dm;
    }

    public function setDocumentManager(DocumentManager \$dm)
    {
        \$this->dm = \$dm;
    }

    public function getObjectManager()
    {
        return \$this->dm;
    }

    /**
     * @inheritDoc
     */
    public function purge()
    {
        \$session = \$this->dm->getPhpcrSession();
        NodeHelper::purgeWorkspace(\$session);
        \$session->save();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ODM\\PHPCR\\DocumentManager;
use Doctrine\\ODM\\PHPCR\\DocumentManagerInterface;
use PHPCR\\Util\\NodeHelper;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 */
class PHPCRPurger implements PurgerInterface
{
    /**
     * @var DocumentManagerInterface
     */
    private \$dm;

    public function __construct(DocumentManagerInterface \$dm = null)
    {
        \$this->dm = \$dm;
    }

    public function setDocumentManager(DocumentManager \$dm)
    {
        \$this->dm = \$dm;
    }

    public function getObjectManager()
    {
        return \$this->dm;
    }

    /**
     * @inheritDoc
     */
    public function purge()
    {
        \$session = \$this->dm->getPhpcrSession();
        NodeHelper::purgeWorkspace(\$session);
        \$session->save();
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/PHPCRPurger.php");
    }
}
