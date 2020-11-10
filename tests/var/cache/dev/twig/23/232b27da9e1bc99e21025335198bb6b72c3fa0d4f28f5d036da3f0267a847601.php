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

/* vendor/symfony/mime/Message.php */
class __TwigTemplate_7c0e06bd5fc16348d035e95a224970fd564c63a18e4cb29ecde66e74cc827d50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Message.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Message.php"));

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

use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class Message extends RawMessage
{
    private \$headers;
    private \$body;

    public function __construct(Headers \$headers = null, AbstractPart \$body = null)
    {
        \$this->headers = \$headers ? clone \$headers : new Headers();
        \$this->body = \$body;
    }

    public function __clone()
    {
        if (null !== \$this->headers) {
            \$this->headers = clone \$this->headers;
        }

        if (null !== \$this->body) {
            \$this->body = clone \$this->body;
        }
    }

    /**
     * @return \$this
     */
    public function setBody(AbstractPart \$body = null)
    {
        \$this->body = \$body;

        return \$this;
    }

    public function getBody(): ?AbstractPart
    {
        return \$this->body;
    }

    /**
     * @return \$this
     */
    public function setHeaders(Headers \$headers)
    {
        \$this->headers = \$headers;

        return \$this;
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;

        if (!\$headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        \$headers->addTextHeader('MIME-Version', '1.0');

        if (!\$headers->has('Date')) {
            \$headers->addDateHeader('Date', new \\DateTimeImmutable());
        }

        // determine the \"real\" sender
        \$senders = \$headers->get('From')->getAddresses();
        \$sender = \$senders[0];
        if (\$headers->has('Sender')) {
            \$sender = \$headers->get('Sender')->getAddress();
        } elseif (\\count(\$senders) > 1) {
            \$headers->addMailboxHeader('Sender', \$sender);
        }

        if (!\$headers->has('Message-ID')) {
            \$headers->addIdHeader('Message-ID', \$this->generateMessageId(\$sender->getAddress()));
        }

        // remove the Bcc field which should NOT be part of the sent message
        \$headers->remove('Bcc');

        return \$headers;
    }

    public function toString(): string
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        return \$this->getPreparedHeaders()->toString().\$body->toString();
    }

    public function toIterable(): iterable
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        yield \$this->getPreparedHeaders()->toString();
        yield from \$body->toIterable();
    }

    private function generateMessageId(string \$email): string
    {
        return bin2hex(random_bytes(16)).strstr(\$email, '@');
    }

    public function __serialize(): array
    {
        return [\$this->headers, \$this->body];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->headers, \$this->body] = \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Message.php";
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

use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class Message extends RawMessage
{
    private \$headers;
    private \$body;

    public function __construct(Headers \$headers = null, AbstractPart \$body = null)
    {
        \$this->headers = \$headers ? clone \$headers : new Headers();
        \$this->body = \$body;
    }

    public function __clone()
    {
        if (null !== \$this->headers) {
            \$this->headers = clone \$this->headers;
        }

        if (null !== \$this->body) {
            \$this->body = clone \$this->body;
        }
    }

    /**
     * @return \$this
     */
    public function setBody(AbstractPart \$body = null)
    {
        \$this->body = \$body;

        return \$this;
    }

    public function getBody(): ?AbstractPart
    {
        return \$this->body;
    }

    /**
     * @return \$this
     */
    public function setHeaders(Headers \$headers)
    {
        \$this->headers = \$headers;

        return \$this;
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;

        if (!\$headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        \$headers->addTextHeader('MIME-Version', '1.0');

        if (!\$headers->has('Date')) {
            \$headers->addDateHeader('Date', new \\DateTimeImmutable());
        }

        // determine the \"real\" sender
        \$senders = \$headers->get('From')->getAddresses();
        \$sender = \$senders[0];
        if (\$headers->has('Sender')) {
            \$sender = \$headers->get('Sender')->getAddress();
        } elseif (\\count(\$senders) > 1) {
            \$headers->addMailboxHeader('Sender', \$sender);
        }

        if (!\$headers->has('Message-ID')) {
            \$headers->addIdHeader('Message-ID', \$this->generateMessageId(\$sender->getAddress()));
        }

        // remove the Bcc field which should NOT be part of the sent message
        \$headers->remove('Bcc');

        return \$headers;
    }

    public function toString(): string
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        return \$this->getPreparedHeaders()->toString().\$body->toString();
    }

    public function toIterable(): iterable
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        yield \$this->getPreparedHeaders()->toString();
        yield from \$body->toIterable();
    }

    private function generateMessageId(string \$email): string
    {
        return bin2hex(random_bytes(16)).strstr(\$email, '@');
    }

    public function __serialize(): array
    {
        return [\$this->headers, \$this->body];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->headers, \$this->body] = \$data;
    }
}
", "vendor/symfony/mime/Message.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Message.php");
    }
}
