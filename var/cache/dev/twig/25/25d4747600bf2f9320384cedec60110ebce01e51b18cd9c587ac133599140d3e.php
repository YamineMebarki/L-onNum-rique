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

/* vendor/symfony/mime/RawMessage.php */
class __TwigTemplate_9bbffb6995155d09af18986898d818db7ed816fdf2253733827fd736b7183847 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/RawMessage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/RawMessage.php"));

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

namespace Symfony\\Component\\Mime;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class RawMessage implements \\Serializable
{
    private \$message;

    /**
     * @param iterable|string \$message
     */
    public function __construct(\$message)
    {
        \$this->message = \$message;
    }

    public function toString(): string
    {
        if (\\is_string(\$this->message)) {
            return \$this->message;
        }

        return \$this->message = implode('', iterator_to_array(\$this->message, false));
    }

    public function toIterable(): iterable
    {
        if (\\is_string(\$this->message)) {
            yield \$this->message;

            return;
        }

        \$message = '';
        foreach (\$this->message as \$chunk) {
            \$message .= \$chunk;
            yield \$chunk;
        }
        \$this->message = \$message;
    }

    /**
     * @internal
     */
    final public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    /**
     * @internal
     */
    final public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized));
    }

    public function __serialize(): array
    {
        return [\$this->message];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->message] = \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/RawMessage.php";
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

namespace Symfony\\Component\\Mime;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class RawMessage implements \\Serializable
{
    private \$message;

    /**
     * @param iterable|string \$message
     */
    public function __construct(\$message)
    {
        \$this->message = \$message;
    }

    public function toString(): string
    {
        if (\\is_string(\$this->message)) {
            return \$this->message;
        }

        return \$this->message = implode('', iterator_to_array(\$this->message, false));
    }

    public function toIterable(): iterable
    {
        if (\\is_string(\$this->message)) {
            yield \$this->message;

            return;
        }

        \$message = '';
        foreach (\$this->message as \$chunk) {
            \$message .= \$chunk;
            yield \$chunk;
        }
        \$this->message = \$message;
    }

    /**
     * @internal
     */
    final public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    /**
     * @internal
     */
    final public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized));
    }

    public function __serialize(): array
    {
        return [\$this->message];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->message] = \$data;
    }
}
", "vendor/symfony/mime/RawMessage.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/RawMessage.php");
    }
}
