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

/* vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php */
class __TwigTemplate_6de789f0b40a141ebb99284ae48dbc0c8a4355aafee08bb4b8643b9ef635ffd6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class FixedFilterListener implements EventSubscriberInterface
{
    private \$mapping;

    public function __construct(array \$mapping)
    {
        \$this->mapping = array_merge([
            'preSubmit' => [],
            'onSubmit' => [],
            'preSetData' => [],
        ], \$mapping);
    }

    public function preSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['preSubmit'][\$data])) {
            \$event->setData(\$this->mapping['preSubmit'][\$data]);
        }
    }

    public function onSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['onSubmit'][\$data])) {
            \$event->setData(\$this->mapping['onSubmit'][\$data]);
        }
    }

    public function preSetData(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['preSetData'][\$data])) {
            \$event->setData(\$this->mapping['preSetData'][\$data]);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'preSubmit',
            FormEvents::SUBMIT => 'onSubmit',
            FormEvents::PRE_SET_DATA => 'preSetData',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php";
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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class FixedFilterListener implements EventSubscriberInterface
{
    private \$mapping;

    public function __construct(array \$mapping)
    {
        \$this->mapping = array_merge([
            'preSubmit' => [],
            'onSubmit' => [],
            'preSetData' => [],
        ], \$mapping);
    }

    public function preSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['preSubmit'][\$data])) {
            \$event->setData(\$this->mapping['preSubmit'][\$data]);
        }
    }

    public function onSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['onSubmit'][\$data])) {
            \$event->setData(\$this->mapping['onSubmit'][\$data]);
        }
    }

    public function preSetData(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (isset(\$this->mapping['preSetData'][\$data])) {
            \$event->setData(\$this->mapping['preSetData'][\$data]);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'preSubmit',
            FormEvents::SUBMIT => 'onSubmit',
            FormEvents::PRE_SET_DATA => 'preSetData',
        ];
    }
}
", "vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/FixedFilterListener.php");
    }
}
