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

/* vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php */
class __TwigTemplate_a4e7c5ad1a3784d02fc2ea76fc994a67b17b393728829a50a099efc5d850139e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Adds a protocol to a URL if it doesn't already have one.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FixUrlProtocolListener implements EventSubscriberInterface
{
    private \$defaultProtocol;

    /**
     * @param string|null \$defaultProtocol The URL scheme to add when there is none or null to not modify the data
     */
    public function __construct(?string \$defaultProtocol = 'http')
    {
        \$this->defaultProtocol = \$defaultProtocol;
    }

    public function onSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (\$this->defaultProtocol && \$data && \\is_string(\$data) && !preg_match('~^[\\w+.-]+://~', \$data)) {
            \$event->setData(\$this->defaultProtocol.'://'.\$data);
        }
    }

    public static function getSubscribedEvents()
    {
        return [FormEvents::SUBMIT => 'onSubmit'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Adds a protocol to a URL if it doesn't already have one.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FixUrlProtocolListener implements EventSubscriberInterface
{
    private \$defaultProtocol;

    /**
     * @param string|null \$defaultProtocol The URL scheme to add when there is none or null to not modify the data
     */
    public function __construct(?string \$defaultProtocol = 'http')
    {
        \$this->defaultProtocol = \$defaultProtocol;
    }

    public function onSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();

        if (\$this->defaultProtocol && \$data && \\is_string(\$data) && !preg_match('~^[\\w+.-]+://~', \$data)) {
            \$event->setData(\$this->defaultProtocol.'://'.\$data);
        }
    }

    public static function getSubscribedEvents()
    {
        return [FormEvents::SUBMIT => 'onSubmit'];
    }
}
", "vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/EventListener/FixUrlProtocolListener.php");
    }
}
