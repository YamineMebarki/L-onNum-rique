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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php */
class __TwigTemplate_288ab0b825f7feea38a093cdfbf350743b588eb915872f23d504fe4b61f6e91c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ODM\\PHPCR\\DocumentManagerInterface;
use Doctrine\\Common\\DataFixtures\\Purger\\PHPCRPurger;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 */
class PHPCRExecutor extends AbstractExecutor
{
    /**
     * @var DocumentManagerInterface
     */
    private \$dm;

    /**
     * @param DocumentManagerInterface \$dm     manager instance used for persisting the fixtures
     * @param PHPCRPurger              \$purger to remove the current data if append is false
     */
    public function __construct(DocumentManagerInterface \$dm, PHPCRPurger \$purger = null)
    {
        parent::__construct(\$dm);

        \$this->dm = \$dm;
        if (\$purger !== null) {
            \$purger->setDocumentManager(\$dm);
            \$this->setPurger(\$purger);
        }
    }

    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        \$that = \$this;

        \$function = function (\$dm) use (\$append, \$that, \$fixtures) {
            if (\$append === false) {
                \$that->purge();
            }

            foreach (\$fixtures as \$fixture) {
                \$that->load(\$dm, \$fixture);
            }
        };

        if (method_exists(\$this->dm, 'transactional')) {
            \$this->dm->transactional(\$function);
        } else {
            \$function(\$this->dm);
        }
    }
}

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ODM\\PHPCR\\DocumentManagerInterface;
use Doctrine\\Common\\DataFixtures\\Purger\\PHPCRPurger;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 */
class PHPCRExecutor extends AbstractExecutor
{
    /**
     * @var DocumentManagerInterface
     */
    private \$dm;

    /**
     * @param DocumentManagerInterface \$dm     manager instance used for persisting the fixtures
     * @param PHPCRPurger              \$purger to remove the current data if append is false
     */
    public function __construct(DocumentManagerInterface \$dm, PHPCRPurger \$purger = null)
    {
        parent::__construct(\$dm);

        \$this->dm = \$dm;
        if (\$purger !== null) {
            \$purger->setDocumentManager(\$dm);
            \$this->setPurger(\$purger);
        }
    }

    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        \$that = \$this;

        \$function = function (\$dm) use (\$append, \$that, \$fixtures) {
            if (\$append === false) {
                \$that->purge();
            }

            foreach (\$fixtures as \$fixture) {
                \$that->load(\$dm, \$fixture);
            }
        };

        if (method_exists(\$this->dm, 'transactional')) {
            \$this->dm->transactional(\$function);
        } else {
            \$function(\$this->dm);
        }
    }
}

", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/PHPCRExecutor.php");
    }
}
