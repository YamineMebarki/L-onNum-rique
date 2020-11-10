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

/* vendor/symfony/cache/CacheItem.php */
class __TwigTemplate_b8ab6748c4c544df86d14cc0312c6ec396a3f3d9c1ac1b1d348b2b43a4690c23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/CacheItem.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/CacheItem.php"));

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

namespace Symfony\\Component\\Cache;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Exception\\LogicException;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class CacheItem implements ItemInterface
{
    private const METADATA_EXPIRY_OFFSET = 1527506807;

    protected \$key;
    protected \$value;
    protected \$isHit = false;
    protected \$expiry;
    protected \$defaultLifetime;
    protected \$metadata = [];
    protected \$newMetadata = [];
    protected \$innerItem;
    protected \$poolHash;
    protected \$isTaggable = false;

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return \$this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return \$this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function isHit()
    {
        return \$this->isHit;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function set(\$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function expiresAt(\$expiration)
    {
        if (null === \$expiration) {
            \$this->expiry = \$this->defaultLifetime > 0 ? microtime(true) + \$this->defaultLifetime : null;
        } elseif (\$expiration instanceof \\DateTimeInterface) {
            \$this->expiry = (float) \$expiration->format('U.u');
        } else {
            throw new InvalidArgumentException(sprintf('Expiration date must implement DateTimeInterface or be null, \"%s\" given', \\is_object(\$expiration) ? \\get_class(\$expiration) : \\gettype(\$expiration)));
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function expiresAfter(\$time)
    {
        if (null === \$time) {
            \$this->expiry = \$this->defaultLifetime > 0 ? microtime(true) + \$this->defaultLifetime : null;
        } elseif (\$time instanceof \\DateInterval) {
            \$this->expiry = microtime(true) + \\DateTime::createFromFormat('U', 0)->add(\$time)->format('U.u');
        } elseif (\\is_int(\$time)) {
            \$this->expiry = \$time + microtime(true);
        } else {
            throw new InvalidArgumentException(sprintf('Expiration date must be an integer, a DateInterval or null, \"%s\" given', \\is_object(\$time) ? \\get_class(\$time) : \\gettype(\$time)));
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function tag(\$tags): ItemInterface
    {
        if (!\$this->isTaggable) {
            throw new LogicException(sprintf('Cache item \"%s\" comes from a non tag-aware pool: you cannot tag it.', \$this->key));
        }
        if (!is_iterable(\$tags)) {
            \$tags = [\$tags];
        }
        foreach (\$tags as \$tag) {
            if (!\\is_string(\$tag)) {
                throw new InvalidArgumentException(sprintf('Cache tag must be string, \"%s\" given', \\is_object(\$tag) ? \\get_class(\$tag) : \\gettype(\$tag)));
            }
            if (isset(\$this->newMetadata[self::METADATA_TAGS][\$tag])) {
                continue;
            }
            if ('' === \$tag) {
                throw new InvalidArgumentException('Cache tag length must be greater than zero');
            }
            if (false !== strpbrk(\$tag, '{}()/\\@:')) {
                throw new InvalidArgumentException(sprintf('Cache tag \"%s\" contains reserved characters {}()/\\@:', \$tag));
            }
            \$this->newMetadata[self::METADATA_TAGS][\$tag] = \$tag;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata(): array
    {
        return \$this->metadata;
    }

    /**
     * Returns the list of tags bound to the value coming from the pool storage if any.
     *
     * @return array
     *
     * @deprecated since Symfony 4.2, use the \"getMetadata()\" method instead.
     */
    public function getPreviousTags()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the \"getMetadata()\" method instead.', __METHOD__), E_USER_DEPRECATED);

        return \$this->metadata[self::METADATA_TAGS] ?? [];
    }

    /**
     * Validates a cache key according to PSR-6.
     *
     * @param string \$key The key to validate
     *
     * @return string
     *
     * @throws InvalidArgumentException When \$key is not valid
     */
    public static function validateKey(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if ('' === \$key) {
            throw new InvalidArgumentException('Cache key length must be greater than zero');
        }
        if (false !== strpbrk(\$key, '{}()/\\@:')) {
            throw new InvalidArgumentException(sprintf('Cache key \"%s\" contains reserved characters {}()/\\@:', \$key));
        }

        return \$key;
    }

    /**
     * Internal logging helper.
     *
     * @internal
     */
    public static function log(LoggerInterface \$logger = null, \$message, \$context = [])
    {
        if (\$logger) {
            \$logger->warning(\$message, \$context);
        } else {
            \$replace = [];
            foreach (\$context as \$k => \$v) {
                if (is_scalar(\$v)) {
                    \$replace['{'.\$k.'}'] = \$v;
                }
            }
            @trigger_error(strtr(\$message, \$replace), E_USER_WARNING);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/CacheItem.php";
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

namespace Symfony\\Component\\Cache;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Exception\\LogicException;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class CacheItem implements ItemInterface
{
    private const METADATA_EXPIRY_OFFSET = 1527506807;

    protected \$key;
    protected \$value;
    protected \$isHit = false;
    protected \$expiry;
    protected \$defaultLifetime;
    protected \$metadata = [];
    protected \$newMetadata = [];
    protected \$innerItem;
    protected \$poolHash;
    protected \$isTaggable = false;

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return \$this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return \$this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function isHit()
    {
        return \$this->isHit;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function set(\$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function expiresAt(\$expiration)
    {
        if (null === \$expiration) {
            \$this->expiry = \$this->defaultLifetime > 0 ? microtime(true) + \$this->defaultLifetime : null;
        } elseif (\$expiration instanceof \\DateTimeInterface) {
            \$this->expiry = (float) \$expiration->format('U.u');
        } else {
            throw new InvalidArgumentException(sprintf('Expiration date must implement DateTimeInterface or be null, \"%s\" given', \\is_object(\$expiration) ? \\get_class(\$expiration) : \\gettype(\$expiration)));
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @return \$this
     */
    public function expiresAfter(\$time)
    {
        if (null === \$time) {
            \$this->expiry = \$this->defaultLifetime > 0 ? microtime(true) + \$this->defaultLifetime : null;
        } elseif (\$time instanceof \\DateInterval) {
            \$this->expiry = microtime(true) + \\DateTime::createFromFormat('U', 0)->add(\$time)->format('U.u');
        } elseif (\\is_int(\$time)) {
            \$this->expiry = \$time + microtime(true);
        } else {
            throw new InvalidArgumentException(sprintf('Expiration date must be an integer, a DateInterval or null, \"%s\" given', \\is_object(\$time) ? \\get_class(\$time) : \\gettype(\$time)));
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function tag(\$tags): ItemInterface
    {
        if (!\$this->isTaggable) {
            throw new LogicException(sprintf('Cache item \"%s\" comes from a non tag-aware pool: you cannot tag it.', \$this->key));
        }
        if (!is_iterable(\$tags)) {
            \$tags = [\$tags];
        }
        foreach (\$tags as \$tag) {
            if (!\\is_string(\$tag)) {
                throw new InvalidArgumentException(sprintf('Cache tag must be string, \"%s\" given', \\is_object(\$tag) ? \\get_class(\$tag) : \\gettype(\$tag)));
            }
            if (isset(\$this->newMetadata[self::METADATA_TAGS][\$tag])) {
                continue;
            }
            if ('' === \$tag) {
                throw new InvalidArgumentException('Cache tag length must be greater than zero');
            }
            if (false !== strpbrk(\$tag, '{}()/\\@:')) {
                throw new InvalidArgumentException(sprintf('Cache tag \"%s\" contains reserved characters {}()/\\@:', \$tag));
            }
            \$this->newMetadata[self::METADATA_TAGS][\$tag] = \$tag;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata(): array
    {
        return \$this->metadata;
    }

    /**
     * Returns the list of tags bound to the value coming from the pool storage if any.
     *
     * @return array
     *
     * @deprecated since Symfony 4.2, use the \"getMetadata()\" method instead.
     */
    public function getPreviousTags()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the \"getMetadata()\" method instead.', __METHOD__), E_USER_DEPRECATED);

        return \$this->metadata[self::METADATA_TAGS] ?? [];
    }

    /**
     * Validates a cache key according to PSR-6.
     *
     * @param string \$key The key to validate
     *
     * @return string
     *
     * @throws InvalidArgumentException When \$key is not valid
     */
    public static function validateKey(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if ('' === \$key) {
            throw new InvalidArgumentException('Cache key length must be greater than zero');
        }
        if (false !== strpbrk(\$key, '{}()/\\@:')) {
            throw new InvalidArgumentException(sprintf('Cache key \"%s\" contains reserved characters {}()/\\@:', \$key));
        }

        return \$key;
    }

    /**
     * Internal logging helper.
     *
     * @internal
     */
    public static function log(LoggerInterface \$logger = null, \$message, \$context = [])
    {
        if (\$logger) {
            \$logger->warning(\$message, \$context);
        } else {
            \$replace = [];
            foreach (\$context as \$k => \$v) {
                if (is_scalar(\$v)) {
                    \$replace['{'.\$k.'}'] = \$v;
                }
            }
            @trigger_error(strtr(\$message, \$replace), E_USER_WARNING);
        }
    }
}
", "vendor/symfony/cache/CacheItem.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/CacheItem.php");
    }
}
