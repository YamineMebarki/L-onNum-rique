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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php */
class __TwigTemplate_cdd5a8a4c0780903e1d0a5174c240063d4b4bf0e9b8934d0a138f0106fb5b6dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php"));

        // line 1
        echo "<?php


namespace Doctrine\\Common\\DataFixtures\\Event\\Listener;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;
use Doctrine\\ORM\\Event\\LifecycleEventArgs;

/**
 * Reference Listener populates identities for
 * stored references
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
final class ORMReferenceListener implements EventSubscriber
{
    /**
     * @var ReferenceRepository
     */
    private \$referenceRepository;

    /**
     * Initialize listener
     *
     * @param ReferenceRepository \$referenceRepository
     */
    public function __construct(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [
            'postPersist' // would be better to use onClear, but it is supported only in 2.1
        ];
    }

    /**
     * Populates identities for stored references
     *
     * @param LifecycleEventArgs \$args
     */
    public function postPersist(LifecycleEventArgs \$args)
    {
        \$object = \$args->getEntity();

        if ((\$names = \$this->referenceRepository->getReferenceNames(\$object)) !== false) {
            foreach (\$names as \$name) {
                \$identity = \$args->getEntityManager()
                    ->getUnitOfWork()
                    ->getEntityIdentifier(\$object);

                \$this->referenceRepository->setReferenceIdentity(\$name, \$identity);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Doctrine\\Common\\DataFixtures\\Event\\Listener;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;
use Doctrine\\ORM\\Event\\LifecycleEventArgs;

/**
 * Reference Listener populates identities for
 * stored references
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
final class ORMReferenceListener implements EventSubscriber
{
    /**
     * @var ReferenceRepository
     */
    private \$referenceRepository;

    /**
     * Initialize listener
     *
     * @param ReferenceRepository \$referenceRepository
     */
    public function __construct(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [
            'postPersist' // would be better to use onClear, but it is supported only in 2.1
        ];
    }

    /**
     * Populates identities for stored references
     *
     * @param LifecycleEventArgs \$args
     */
    public function postPersist(LifecycleEventArgs \$args)
    {
        \$object = \$args->getEntity();

        if ((\$names = \$this->referenceRepository->getReferenceNames(\$object)) !== false) {
            foreach (\$names as \$name) {
                \$identity = \$args->getEntityManager()
                    ->getUnitOfWork()
                    ->getEntityIdentifier(\$object);

                \$this->referenceRepository->setReferenceIdentity(\$name, \$identity);
            }
        }
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Event/Listener/ORMReferenceListener.php");
    }
}
