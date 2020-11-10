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

/* vendor/symfony/twig-bridge/Extension/WorkflowExtension.php */
class __TwigTemplate_486f17c116449dd885d21cfeaf1bb05ed4e770870c7cbb26f68ac4a0a36f66fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/WorkflowExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/WorkflowExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * WorkflowExtension.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class WorkflowExtension extends AbstractExtension
{
    private \$workflowRegistry;

    public function __construct(Registry \$workflowRegistry)
    {
        \$this->workflowRegistry = \$workflowRegistry;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('workflow_can', [\$this, 'canTransition']),
            new TwigFunction('workflow_transitions', [\$this, 'getEnabledTransitions']),
            new TwigFunction('workflow_has_marked_place', [\$this, 'hasMarkedPlace']),
            new TwigFunction('workflow_marked_places', [\$this, 'getMarkedPlaces']),
            new TwigFunction('workflow_metadata', [\$this, 'getMetadata']),
            new TwigFunction('workflow_transition_blockers', [\$this, 'buildTransitionBlockerList']),
        ];
    }

    /**
     * Returns true if the transition is enabled.
     *
     * @param object \$subject        A subject
     * @param string \$transitionName A transition
     * @param string \$name           A workflow name
     *
     * @return bool true if the transition is enabled
     */
    public function canTransition(\$subject, \$transitionName, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->can(\$subject, \$transitionName);
    }

    /**
     * Returns all enabled transitions.
     *
     * @param object \$subject A subject
     * @param string \$name    A workflow name
     *
     * @return Transition[] All enabled transitions
     */
    public function getEnabledTransitions(\$subject, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getEnabledTransitions(\$subject);
    }

    /**
     * Returns true if the place is marked.
     *
     * @param object \$subject   A subject
     * @param string \$placeName A place name
     * @param string \$name      A workflow name
     *
     * @return bool true if the transition is enabled
     */
    public function hasMarkedPlace(\$subject, \$placeName, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->has(\$placeName);
    }

    /**
     * Returns marked places.
     *
     * @param object \$subject        A subject
     * @param bool   \$placesNameOnly If true, returns only places name. If false returns the raw representation
     * @param string \$name           A workflow name
     *
     * @return string[]|int[]
     */
    public function getMarkedPlaces(\$subject, \$placesNameOnly = true, \$name = null)
    {
        \$places = \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->getPlaces();

        if (\$placesNameOnly) {
            return array_keys(\$places);
        }

        return \$places;
    }

    /**
     * Returns the metadata for a specific subject.
     *
     * @param object                 \$subject         A subject
     * @param string|Transition|null \$metadataSubject Use null to get workflow metadata
     *                                                Use a string (the place name) to get place metadata
     *                                                Use a Transition instance to get transition metadata
     */
    public function getMetadata(\$subject, string \$key, \$metadataSubject = null, string \$name = null): ?string
    {
        return \$this
            ->workflowRegistry
            ->get(\$subject, \$name)
            ->getMetadataStore()
            ->getMetadata(\$key, \$metadataSubject)
        ;
    }

    public function buildTransitionBlockerList(\$subject, string \$transitionName, string \$name = null): TransitionBlockerList
    {
        \$workflow = \$this->workflowRegistry->get(\$subject, \$name);

        return \$workflow->buildTransitionBlockerList(\$subject, \$transitionName);
    }

    public function getName()
    {
        return 'workflow';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/WorkflowExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * WorkflowExtension.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class WorkflowExtension extends AbstractExtension
{
    private \$workflowRegistry;

    public function __construct(Registry \$workflowRegistry)
    {
        \$this->workflowRegistry = \$workflowRegistry;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('workflow_can', [\$this, 'canTransition']),
            new TwigFunction('workflow_transitions', [\$this, 'getEnabledTransitions']),
            new TwigFunction('workflow_has_marked_place', [\$this, 'hasMarkedPlace']),
            new TwigFunction('workflow_marked_places', [\$this, 'getMarkedPlaces']),
            new TwigFunction('workflow_metadata', [\$this, 'getMetadata']),
            new TwigFunction('workflow_transition_blockers', [\$this, 'buildTransitionBlockerList']),
        ];
    }

    /**
     * Returns true if the transition is enabled.
     *
     * @param object \$subject        A subject
     * @param string \$transitionName A transition
     * @param string \$name           A workflow name
     *
     * @return bool true if the transition is enabled
     */
    public function canTransition(\$subject, \$transitionName, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->can(\$subject, \$transitionName);
    }

    /**
     * Returns all enabled transitions.
     *
     * @param object \$subject A subject
     * @param string \$name    A workflow name
     *
     * @return Transition[] All enabled transitions
     */
    public function getEnabledTransitions(\$subject, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getEnabledTransitions(\$subject);
    }

    /**
     * Returns true if the place is marked.
     *
     * @param object \$subject   A subject
     * @param string \$placeName A place name
     * @param string \$name      A workflow name
     *
     * @return bool true if the transition is enabled
     */
    public function hasMarkedPlace(\$subject, \$placeName, \$name = null)
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->has(\$placeName);
    }

    /**
     * Returns marked places.
     *
     * @param object \$subject        A subject
     * @param bool   \$placesNameOnly If true, returns only places name. If false returns the raw representation
     * @param string \$name           A workflow name
     *
     * @return string[]|int[]
     */
    public function getMarkedPlaces(\$subject, \$placesNameOnly = true, \$name = null)
    {
        \$places = \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->getPlaces();

        if (\$placesNameOnly) {
            return array_keys(\$places);
        }

        return \$places;
    }

    /**
     * Returns the metadata for a specific subject.
     *
     * @param object                 \$subject         A subject
     * @param string|Transition|null \$metadataSubject Use null to get workflow metadata
     *                                                Use a string (the place name) to get place metadata
     *                                                Use a Transition instance to get transition metadata
     */
    public function getMetadata(\$subject, string \$key, \$metadataSubject = null, string \$name = null): ?string
    {
        return \$this
            ->workflowRegistry
            ->get(\$subject, \$name)
            ->getMetadataStore()
            ->getMetadata(\$key, \$metadataSubject)
        ;
    }

    public function buildTransitionBlockerList(\$subject, string \$transitionName, string \$name = null): TransitionBlockerList
    {
        \$workflow = \$this->workflowRegistry->get(\$subject, \$name);

        return \$workflow->buildTransitionBlockerList(\$subject, \$transitionName);
    }

    public function getName()
    {
        return 'workflow';
    }
}
", "vendor/symfony/twig-bridge/Extension/WorkflowExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/WorkflowExtension.php");
    }
}
