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

/* vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php */
class __TwigTemplate_3ca63fa0d626c7d0456d8a55f213c1251a4f40b0b7fafdfdbfa4668bb9e0a068 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php"));

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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\NamedAddress;
use Twig\\Environment;

/**
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class WrappedTemplatedEmail
{
    private \$twig;
    private \$message;

    public function __construct(Environment \$twig, TemplatedEmail \$message)
    {
        \$this->twig = \$twig;
        \$this->message = \$message;
    }

    public function toName(): string
    {
        \$to = \$this->message->getTo()[0];

        return \$to instanceof NamedAddress ? \$to->getName() : '';
    }

    public function image(string \$image, string \$contentType = null): string
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$image);
        if (\$path = \$file->getPath()) {
            \$this->message->embedFromPath(\$path, \$image, \$contentType);
        } else {
            \$this->message->embed(\$file->getCode(), \$image, \$contentType);
        }

        return 'cid:'.\$image;
    }

    public function attach(string \$file, string \$name = null, string \$contentType = null): void
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$file);
        if (\$path = \$file->getPath()) {
            \$this->message->attachFromPath(\$path, \$name, \$contentType);
        } else {
            \$this->message->attach(\$file->getCode(), \$name, \$contentType);
        }
    }

    /**
     * @return \$this
     */
    public function setSubject(string \$subject)
    {
        \$this->message->subject(\$subject);

        return \$this;
    }

    public function getSubject(): ?string
    {
        return \$this->message->getSubject();
    }

    /**
     * @return \$this
     */
    public function setReturnPath(string \$address)
    {
        \$this->message->returnPath(\$address);

        return \$this;
    }

    public function getReturnPath(): string
    {
        return \$this->message->getReturnPath();
    }

    /**
     * @return \$this
     */
    public function addFrom(string \$address, string \$name = null)
    {
        \$this->message->addFrom(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getFrom(): array
    {
        return \$this->message->getFrom();
    }

    /**
     * @return \$this
     */
    public function addReplyTo(string \$address)
    {
        \$this->message->addReplyTo(\$address);

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getReplyTo(): array
    {
        return \$this->message->getReplyTo();
    }

    /**
     * @return \$this
     */
    public function addTo(string \$address, string \$name = null)
    {
        \$this->message->addTo(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getTo(): array
    {
        return \$this->message->getTo();
    }

    /**
     * @return \$this
     */
    public function addCc(string \$address, string \$name = null)
    {
        \$this->message->addCc(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getCc(): array
    {
        return \$this->message->getCc();
    }

    /**
     * @return \$this
     */
    public function addBcc(string \$address, string \$name = null)
    {
        \$this->message->addBcc(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getBcc(): array
    {
        return \$this->message->getBcc();
    }

    /**
     * @return \$this
     */
    public function setPriority(int \$priority)
    {
        \$this->message->setPriority(\$priority);

        return \$this;
    }

    public function getPriority(): int
    {
        return \$this->message->getPriority();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php";
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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\NamedAddress;
use Twig\\Environment;

/**
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class WrappedTemplatedEmail
{
    private \$twig;
    private \$message;

    public function __construct(Environment \$twig, TemplatedEmail \$message)
    {
        \$this->twig = \$twig;
        \$this->message = \$message;
    }

    public function toName(): string
    {
        \$to = \$this->message->getTo()[0];

        return \$to instanceof NamedAddress ? \$to->getName() : '';
    }

    public function image(string \$image, string \$contentType = null): string
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$image);
        if (\$path = \$file->getPath()) {
            \$this->message->embedFromPath(\$path, \$image, \$contentType);
        } else {
            \$this->message->embed(\$file->getCode(), \$image, \$contentType);
        }

        return 'cid:'.\$image;
    }

    public function attach(string \$file, string \$name = null, string \$contentType = null): void
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$file);
        if (\$path = \$file->getPath()) {
            \$this->message->attachFromPath(\$path, \$name, \$contentType);
        } else {
            \$this->message->attach(\$file->getCode(), \$name, \$contentType);
        }
    }

    /**
     * @return \$this
     */
    public function setSubject(string \$subject)
    {
        \$this->message->subject(\$subject);

        return \$this;
    }

    public function getSubject(): ?string
    {
        return \$this->message->getSubject();
    }

    /**
     * @return \$this
     */
    public function setReturnPath(string \$address)
    {
        \$this->message->returnPath(\$address);

        return \$this;
    }

    public function getReturnPath(): string
    {
        return \$this->message->getReturnPath();
    }

    /**
     * @return \$this
     */
    public function addFrom(string \$address, string \$name = null)
    {
        \$this->message->addFrom(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getFrom(): array
    {
        return \$this->message->getFrom();
    }

    /**
     * @return \$this
     */
    public function addReplyTo(string \$address)
    {
        \$this->message->addReplyTo(\$address);

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getReplyTo(): array
    {
        return \$this->message->getReplyTo();
    }

    /**
     * @return \$this
     */
    public function addTo(string \$address, string \$name = null)
    {
        \$this->message->addTo(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getTo(): array
    {
        return \$this->message->getTo();
    }

    /**
     * @return \$this
     */
    public function addCc(string \$address, string \$name = null)
    {
        \$this->message->addCc(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getCc(): array
    {
        return \$this->message->getCc();
    }

    /**
     * @return \$this
     */
    public function addBcc(string \$address, string \$name = null)
    {
        \$this->message->addBcc(\$name ? new NamedAddress(\$address, \$name) : new Address(\$address));

        return \$this;
    }

    /**
     * @return (Address|NamedAddress)[]
     */
    public function getBcc(): array
    {
        return \$this->message->getBcc();
    }

    /**
     * @return \$this
     */
    public function setPriority(int \$priority)
    {
        \$this->message->setPriority(\$priority);

        return \$this;
    }

    public function getPriority(): int
    {
        return \$this->message->getPriority();
    }
}
", "vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php");
    }
}
