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

/* vendor/symfony/mime/Header/Headers.php */
class __TwigTemplate_977b040cf9899078afc09fec63708acea1b2be770a90030330d3857fa4bc077d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/Headers.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/Headers.php"));

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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\NamedAddress;

/**
 * A collection of headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Headers
{
    private static \$uniqueHeaders = [
        'date', 'from', 'sender', 'reply-to', 'to', 'cc', 'bcc',
        'message-id', 'in-reply-to', 'references', 'subject',
    ];

    private \$headers = [];
    private \$lineLength = 76;

    public function __construct(HeaderInterface ...\$headers)
    {
        foreach (\$headers as \$header) {
            \$this->add(\$header);
        }
    }

    public function __clone()
    {
        foreach (\$this->headers as \$name => \$collection) {
            foreach (\$collection as \$i => \$header) {
                \$this->headers[\$name][\$i] = clone \$header;
            }
        }
    }

    public function setMaxLineLength(int \$lineLength)
    {
        \$this->lineLength = \$lineLength;
        foreach (\$this->all() as \$header) {
            \$header->setMaxLineLength(\$lineLength);
        }
    }

    public function getMaxLineLength(): int
    {
        return \$this->lineLength;
    }

    /**
     * @param (NamedAddress|Address|string)[] \$addresses
     *
     * @return \$this
     */
    public function addMailboxListHeader(string \$name, array \$addresses)
    {
        return \$this->add(new MailboxListHeader(\$name, Address::createArray(\$addresses)));
    }

    /**
     * @param NamedAddress|Address|string \$address
     *
     * @return \$this
     */
    public function addMailboxHeader(string \$name, \$address)
    {
        return \$this->add(new MailboxHeader(\$name, Address::create(\$address)));
    }

    /**
     * @param string|array \$ids
     *
     * @return \$this
     */
    public function addIdHeader(string \$name, \$ids)
    {
        return \$this->add(new IdentificationHeader(\$name, \$ids));
    }

    /**
     * @param Address|string \$path
     *
     * @return \$this
     */
    public function addPathHeader(string \$name, \$path)
    {
        return \$this->add(new PathHeader(\$name, \$path instanceof Address ? \$path : new Address(\$path)));
    }

    /**
     * @return \$this
     */
    public function addDateHeader(string \$name, \\DateTimeInterface \$dateTime)
    {
        return \$this->add(new DateHeader(\$name, \$dateTime));
    }

    /**
     * @return \$this
     */
    public function addTextHeader(string \$name, string \$value)
    {
        return \$this->add(new UnstructuredHeader(\$name, \$value));
    }

    /**
     * @return \$this
     */
    public function addParameterizedHeader(string \$name, string \$value, array \$params = [])
    {
        return \$this->add(new ParameterizedHeader(\$name, \$value, \$params));
    }

    public function has(string \$name): bool
    {
        return isset(\$this->headers[strtolower(\$name)]);
    }

    /**
     * @return \$this
     */
    public function add(HeaderInterface \$header)
    {
        static \$map = [
            'date' => DateHeader::class,
            'from' => MailboxListHeader::class,
            'sender' => MailboxHeader::class,
            'reply-to' => MailboxListHeader::class,
            'to' => MailboxListHeader::class,
            'cc' => MailboxListHeader::class,
            'bcc' => MailboxListHeader::class,
            'message-id' => IdentificationHeader::class,
            'in-reply-to' => IdentificationHeader::class,
            'references' => IdentificationHeader::class,
            'return-path' => PathHeader::class,
        ];

        \$header->setMaxLineLength(\$this->lineLength);
        \$name = strtolower(\$header->getName());

        if (isset(\$map[\$name]) && !\$header instanceof \$map[\$name]) {
            throw new LogicException(sprintf('The \"%s\" header must be an instance of \"%s\" (got \"%s\").', \$header->getName(), \$map[\$name], \\get_class(\$header)));
        }

        if (\\in_array(\$name, self::\$uniqueHeaders, true) && isset(\$this->headers[\$name]) && \\count(\$this->headers[\$name]) > 0) {
            throw new LogicException(sprintf('Impossible to set header \"%s\" as it\\'s already defined and must be unique.', \$header->getName()));
        }

        \$this->headers[\$name][] = \$header;

        return \$this;
    }

    public function get(string \$name): ?HeaderInterface
    {
        \$name = strtolower(\$name);
        if (!isset(\$this->headers[\$name])) {
            return null;
        }

        \$values = array_values(\$this->headers[\$name]);

        return array_shift(\$values);
    }

    public function all(string \$name = null): iterable
    {
        if (null === \$name) {
            foreach (\$this->headers as \$name => \$collection) {
                foreach (\$collection as \$header) {
                    yield \$name => \$header;
                }
            }
        } elseif (isset(\$this->headers[strtolower(\$name)])) {
            foreach (\$this->headers[strtolower(\$name)] as \$header) {
                yield \$header;
            }
        }
    }

    public function getNames(): array
    {
        return array_keys(\$this->headers);
    }

    public function remove(string \$name): void
    {
        unset(\$this->headers[strtolower(\$name)]);
    }

    public static function isUniqueHeader(string \$name): bool
    {
        return \\in_array(\$name, self::\$uniqueHeaders, true);
    }

    public function toString(): string
    {
        \$string = '';
        foreach (\$this->toArray() as \$str) {
            \$string .= \$str.\"\\r\\n\";
        }

        return \$string;
    }

    public function toArray(): array
    {
        \$arr = [];
        foreach (\$this->all() as \$header) {
            if ('' !== \$header->getBodyAsString()) {
                \$arr[] = \$header->toString();
            }
        }

        return \$arr;
    }

    /**
     * @internal
     */
    public function getHeaderBody(\$name)
    {
        return \$this->has(\$name) ? \$this->get(\$name)->getBody() : null;
    }

    /**
     * @internal
     */
    public function setHeaderBody(string \$type, string \$name, \$body): void
    {
        if (\$this->has(\$name)) {
            \$this->get(\$name)->setBody(\$body);
        } else {
            \$this->{'add'.\$type.'Header'}(\$name, \$body);
        }
    }

    /**
     * @internal
     */
    public function getHeaderParameter(string \$name, string \$parameter): ?string
    {
        if (!\$this->has(\$name)) {
            return null;
        }

        \$header = \$this->get(\$name);
        if (!\$header instanceof ParameterizedHeader) {
            throw new LogicException(sprintf('Unable to get parameter \"%s\" on header \"%s\" as the header is not of class \"%s\".', \$parameter, \$name, ParameterizedHeader::class));
        }

        return \$header->getParameter(\$parameter);
    }

    /**
     * @internal
     */
    public function setHeaderParameter(string \$name, string \$parameter, \$value): void
    {
        if (!\$this->has(\$name)) {
            throw new LogicException(sprintf('Unable to set parameter \"%s\" on header \"%s\" as the header is not defined.', \$parameter, \$name));
        }

        \$header = \$this->get(\$name);
        if (!\$header instanceof ParameterizedHeader) {
            throw new LogicException(sprintf('Unable to set parameter \"%s\" on header \"%s\" as the header is not of class \"%s\".', \$parameter, \$name, ParameterizedHeader::class));
        }

        \$header->setParameter(\$parameter, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/Headers.php";
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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\NamedAddress;

/**
 * A collection of headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Headers
{
    private static \$uniqueHeaders = [
        'date', 'from', 'sender', 'reply-to', 'to', 'cc', 'bcc',
        'message-id', 'in-reply-to', 'references', 'subject',
    ];

    private \$headers = [];
    private \$lineLength = 76;

    public function __construct(HeaderInterface ...\$headers)
    {
        foreach (\$headers as \$header) {
            \$this->add(\$header);
        }
    }

    public function __clone()
    {
        foreach (\$this->headers as \$name => \$collection) {
            foreach (\$collection as \$i => \$header) {
                \$this->headers[\$name][\$i] = clone \$header;
            }
        }
    }

    public function setMaxLineLength(int \$lineLength)
    {
        \$this->lineLength = \$lineLength;
        foreach (\$this->all() as \$header) {
            \$header->setMaxLineLength(\$lineLength);
        }
    }

    public function getMaxLineLength(): int
    {
        return \$this->lineLength;
    }

    /**
     * @param (NamedAddress|Address|string)[] \$addresses
     *
     * @return \$this
     */
    public function addMailboxListHeader(string \$name, array \$addresses)
    {
        return \$this->add(new MailboxListHeader(\$name, Address::createArray(\$addresses)));
    }

    /**
     * @param NamedAddress|Address|string \$address
     *
     * @return \$this
     */
    public function addMailboxHeader(string \$name, \$address)
    {
        return \$this->add(new MailboxHeader(\$name, Address::create(\$address)));
    }

    /**
     * @param string|array \$ids
     *
     * @return \$this
     */
    public function addIdHeader(string \$name, \$ids)
    {
        return \$this->add(new IdentificationHeader(\$name, \$ids));
    }

    /**
     * @param Address|string \$path
     *
     * @return \$this
     */
    public function addPathHeader(string \$name, \$path)
    {
        return \$this->add(new PathHeader(\$name, \$path instanceof Address ? \$path : new Address(\$path)));
    }

    /**
     * @return \$this
     */
    public function addDateHeader(string \$name, \\DateTimeInterface \$dateTime)
    {
        return \$this->add(new DateHeader(\$name, \$dateTime));
    }

    /**
     * @return \$this
     */
    public function addTextHeader(string \$name, string \$value)
    {
        return \$this->add(new UnstructuredHeader(\$name, \$value));
    }

    /**
     * @return \$this
     */
    public function addParameterizedHeader(string \$name, string \$value, array \$params = [])
    {
        return \$this->add(new ParameterizedHeader(\$name, \$value, \$params));
    }

    public function has(string \$name): bool
    {
        return isset(\$this->headers[strtolower(\$name)]);
    }

    /**
     * @return \$this
     */
    public function add(HeaderInterface \$header)
    {
        static \$map = [
            'date' => DateHeader::class,
            'from' => MailboxListHeader::class,
            'sender' => MailboxHeader::class,
            'reply-to' => MailboxListHeader::class,
            'to' => MailboxListHeader::class,
            'cc' => MailboxListHeader::class,
            'bcc' => MailboxListHeader::class,
            'message-id' => IdentificationHeader::class,
            'in-reply-to' => IdentificationHeader::class,
            'references' => IdentificationHeader::class,
            'return-path' => PathHeader::class,
        ];

        \$header->setMaxLineLength(\$this->lineLength);
        \$name = strtolower(\$header->getName());

        if (isset(\$map[\$name]) && !\$header instanceof \$map[\$name]) {
            throw new LogicException(sprintf('The \"%s\" header must be an instance of \"%s\" (got \"%s\").', \$header->getName(), \$map[\$name], \\get_class(\$header)));
        }

        if (\\in_array(\$name, self::\$uniqueHeaders, true) && isset(\$this->headers[\$name]) && \\count(\$this->headers[\$name]) > 0) {
            throw new LogicException(sprintf('Impossible to set header \"%s\" as it\\'s already defined and must be unique.', \$header->getName()));
        }

        \$this->headers[\$name][] = \$header;

        return \$this;
    }

    public function get(string \$name): ?HeaderInterface
    {
        \$name = strtolower(\$name);
        if (!isset(\$this->headers[\$name])) {
            return null;
        }

        \$values = array_values(\$this->headers[\$name]);

        return array_shift(\$values);
    }

    public function all(string \$name = null): iterable
    {
        if (null === \$name) {
            foreach (\$this->headers as \$name => \$collection) {
                foreach (\$collection as \$header) {
                    yield \$name => \$header;
                }
            }
        } elseif (isset(\$this->headers[strtolower(\$name)])) {
            foreach (\$this->headers[strtolower(\$name)] as \$header) {
                yield \$header;
            }
        }
    }

    public function getNames(): array
    {
        return array_keys(\$this->headers);
    }

    public function remove(string \$name): void
    {
        unset(\$this->headers[strtolower(\$name)]);
    }

    public static function isUniqueHeader(string \$name): bool
    {
        return \\in_array(\$name, self::\$uniqueHeaders, true);
    }

    public function toString(): string
    {
        \$string = '';
        foreach (\$this->toArray() as \$str) {
            \$string .= \$str.\"\\r\\n\";
        }

        return \$string;
    }

    public function toArray(): array
    {
        \$arr = [];
        foreach (\$this->all() as \$header) {
            if ('' !== \$header->getBodyAsString()) {
                \$arr[] = \$header->toString();
            }
        }

        return \$arr;
    }

    /**
     * @internal
     */
    public function getHeaderBody(\$name)
    {
        return \$this->has(\$name) ? \$this->get(\$name)->getBody() : null;
    }

    /**
     * @internal
     */
    public function setHeaderBody(string \$type, string \$name, \$body): void
    {
        if (\$this->has(\$name)) {
            \$this->get(\$name)->setBody(\$body);
        } else {
            \$this->{'add'.\$type.'Header'}(\$name, \$body);
        }
    }

    /**
     * @internal
     */
    public function getHeaderParameter(string \$name, string \$parameter): ?string
    {
        if (!\$this->has(\$name)) {
            return null;
        }

        \$header = \$this->get(\$name);
        if (!\$header instanceof ParameterizedHeader) {
            throw new LogicException(sprintf('Unable to get parameter \"%s\" on header \"%s\" as the header is not of class \"%s\".', \$parameter, \$name, ParameterizedHeader::class));
        }

        return \$header->getParameter(\$parameter);
    }

    /**
     * @internal
     */
    public function setHeaderParameter(string \$name, string \$parameter, \$value): void
    {
        if (!\$this->has(\$name)) {
            throw new LogicException(sprintf('Unable to set parameter \"%s\" on header \"%s\" as the header is not defined.', \$parameter, \$name));
        }

        \$header = \$this->get(\$name);
        if (!\$header instanceof ParameterizedHeader) {
            throw new LogicException(sprintf('Unable to set parameter \"%s\" on header \"%s\" as the header is not of class \"%s\".', \$parameter, \$name, ParameterizedHeader::class));
        }

        \$header->setParameter(\$parameter, \$value);
    }
}
", "vendor/symfony/mime/Header/Headers.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/Headers.php");
    }
}
