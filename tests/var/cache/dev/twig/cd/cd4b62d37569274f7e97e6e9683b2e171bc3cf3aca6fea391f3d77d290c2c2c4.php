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

/* vendor/symfony/http-foundation/HeaderBag.php */
class __TwigTemplate_435c3868b137e7d64c51bd909fd72223d485ba5931c8d859c6082664d0e4b7f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/HeaderBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/HeaderBag.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HeaderBag implements \\IteratorAggregate, \\Countable
{
    protected \$headers = [];
    protected \$cacheControl = [];

    /**
     * @param array \$headers An array of HTTP headers
     */
    public function __construct(array \$headers = [])
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns the headers as a string.
     *
     * @return string The headers
     */
    public function __toString()
    {
        if (!\$headers = \$this->all()) {
            return '';
        }

        ksort(\$headers);
        \$max = max(array_map('strlen', array_keys(\$headers))) + 1;
        \$content = '';
        foreach (\$headers as \$name => \$values) {
            \$name = ucwords(\$name, '-');
            foreach (\$values as \$value) {
                \$content .= sprintf(\"%-{\$max}s %s\\r\\n\", \$name.':', \$value);
            }
        }

        return \$content;
    }

    /**
     * Returns the headers.
     *
     * @return array An array of headers
     */
    public function all()
    {
        return \$this->headers;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->all());
    }

    /**
     * Replaces the current HTTP headers by a new set.
     *
     * @param array \$headers An array of HTTP headers
     */
    public function replace(array \$headers = [])
    {
        \$this->headers = [];
        \$this->add(\$headers);
    }

    /**
     * Adds new headers the current HTTP headers set.
     *
     * @param array \$headers An array of HTTP headers
     */
    public function add(array \$headers)
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns a header value by name.
     *
     * @param string      \$key     The header name
     * @param string|null \$default The default value
     * @param bool        \$first   Whether to return the first value or all header values
     *
     * @return string|string[]|null The first header value or default value if \$first is true, an array of values otherwise
     */
    public function get(\$key, \$default = null, \$first = true)
    {
        \$key = str_replace('_', '-', strtolower(\$key));
        \$headers = \$this->all();

        if (!\\array_key_exists(\$key, \$headers)) {
            if (null === \$default) {
                return \$first ? null : [];
            }

            return \$first ? \$default : [\$default];
        }

        if (\$first) {
            if (!\$headers[\$key]) {
                return \$default;
            }

            if (null === \$headers[\$key][0]) {
                return null;
            }

            return (string) \$headers[\$key][0];
        }

        return \$headers[\$key];
    }

    /**
     * Sets a header by name.
     *
     * @param string          \$key     The key
     * @param string|string[] \$values  The value or an array of values
     * @param bool            \$replace Whether to replace the actual value or not (true by default)
     */
    public function set(\$key, \$values, \$replace = true)
    {
        \$key = str_replace('_', '-', strtolower(\$key));

        if (\\is_array(\$values)) {
            \$values = array_values(\$values);

            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = \$values;
            } else {
                \$this->headers[\$key] = array_merge(\$this->headers[\$key], \$values);
            }
        } else {
            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = [\$values];
            } else {
                \$this->headers[\$key][] = \$values;
            }
        }

        if ('cache-control' === \$key) {
            \$this->cacheControl = \$this->parseCacheControl(implode(', ', \$this->headers[\$key]));
        }
    }

    /**
     * Returns true if the HTTP header is defined.
     *
     * @param string \$key The HTTP header
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(\$key)
    {
        return \\array_key_exists(str_replace('_', '-', strtolower(\$key)), \$this->all());
    }

    /**
     * Returns true if the given HTTP header contains the given value.
     *
     * @param string \$key   The HTTP header name
     * @param string \$value The HTTP value
     *
     * @return bool true if the value is contained in the header, false otherwise
     */
    public function contains(\$key, \$value)
    {
        return \\in_array(\$value, \$this->get(\$key, null, false));
    }

    /**
     * Removes a header.
     *
     * @param string \$key The HTTP header name
     */
    public function remove(\$key)
    {
        \$key = str_replace('_', '-', strtolower(\$key));

        unset(\$this->headers[\$key]);

        if ('cache-control' === \$key) {
            \$this->cacheControl = [];
        }
    }

    /**
     * Returns the HTTP header value converted to a date.
     *
     * @param string    \$key     The parameter key
     * @param \\DateTime \$default The default value
     *
     * @return \\DateTime|null The parsed DateTime or the default value if the header does not exist
     *
     * @throws \\RuntimeException When the HTTP header is not parseable
     */
    public function getDate(\$key, \\DateTime \$default = null)
    {
        if (null === \$value = \$this->get(\$key)) {
            return \$default;
        }

        if (false === \$date = \\DateTime::createFromFormat(DATE_RFC2822, \$value)) {
            throw new \\RuntimeException(sprintf('The %s HTTP header is not parseable (%s).', \$key, \$value));
        }

        return \$date;
    }

    /**
     * Adds a custom Cache-Control directive.
     *
     * @param string \$key   The Cache-Control directive name
     * @param mixed  \$value The Cache-Control directive value
     */
    public function addCacheControlDirective(\$key, \$value = true)
    {
        \$this->cacheControl[\$key] = \$value;

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns true if the Cache-Control directive is defined.
     *
     * @param string \$key The Cache-Control directive
     *
     * @return bool true if the directive exists, false otherwise
     */
    public function hasCacheControlDirective(\$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl);
    }

    /**
     * Returns a Cache-Control directive value by name.
     *
     * @param string \$key The directive name
     *
     * @return mixed|null The directive value if defined, null otherwise
     */
    public function getCacheControlDirective(\$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl) ? \$this->cacheControl[\$key] : null;
    }

    /**
     * Removes a Cache-Control directive.
     *
     * @param string \$key The Cache-Control directive
     */
    public function removeCacheControlDirective(\$key)
    {
        unset(\$this->cacheControl[\$key]);

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns an iterator for headers.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->headers);
    }

    /**
     * Returns the number of headers.
     *
     * @return int The number of headers
     */
    public function count()
    {
        return \\count(\$this->headers);
    }

    protected function getCacheControlHeader()
    {
        ksort(\$this->cacheControl);

        return HeaderUtils::toString(\$this->cacheControl, ',');
    }

    /**
     * Parses a Cache-Control HTTP header.
     *
     * @param string \$header The value of the Cache-Control HTTP header
     *
     * @return array An array representing the attribute values
     */
    protected function parseCacheControl(\$header)
    {
        \$parts = HeaderUtils::split(\$header, ',=');

        return HeaderUtils::combine(\$parts);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/HeaderBag.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HeaderBag implements \\IteratorAggregate, \\Countable
{
    protected \$headers = [];
    protected \$cacheControl = [];

    /**
     * @param array \$headers An array of HTTP headers
     */
    public function __construct(array \$headers = [])
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns the headers as a string.
     *
     * @return string The headers
     */
    public function __toString()
    {
        if (!\$headers = \$this->all()) {
            return '';
        }

        ksort(\$headers);
        \$max = max(array_map('strlen', array_keys(\$headers))) + 1;
        \$content = '';
        foreach (\$headers as \$name => \$values) {
            \$name = ucwords(\$name, '-');
            foreach (\$values as \$value) {
                \$content .= sprintf(\"%-{\$max}s %s\\r\\n\", \$name.':', \$value);
            }
        }

        return \$content;
    }

    /**
     * Returns the headers.
     *
     * @return array An array of headers
     */
    public function all()
    {
        return \$this->headers;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->all());
    }

    /**
     * Replaces the current HTTP headers by a new set.
     *
     * @param array \$headers An array of HTTP headers
     */
    public function replace(array \$headers = [])
    {
        \$this->headers = [];
        \$this->add(\$headers);
    }

    /**
     * Adds new headers the current HTTP headers set.
     *
     * @param array \$headers An array of HTTP headers
     */
    public function add(array \$headers)
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns a header value by name.
     *
     * @param string      \$key     The header name
     * @param string|null \$default The default value
     * @param bool        \$first   Whether to return the first value or all header values
     *
     * @return string|string[]|null The first header value or default value if \$first is true, an array of values otherwise
     */
    public function get(\$key, \$default = null, \$first = true)
    {
        \$key = str_replace('_', '-', strtolower(\$key));
        \$headers = \$this->all();

        if (!\\array_key_exists(\$key, \$headers)) {
            if (null === \$default) {
                return \$first ? null : [];
            }

            return \$first ? \$default : [\$default];
        }

        if (\$first) {
            if (!\$headers[\$key]) {
                return \$default;
            }

            if (null === \$headers[\$key][0]) {
                return null;
            }

            return (string) \$headers[\$key][0];
        }

        return \$headers[\$key];
    }

    /**
     * Sets a header by name.
     *
     * @param string          \$key     The key
     * @param string|string[] \$values  The value or an array of values
     * @param bool            \$replace Whether to replace the actual value or not (true by default)
     */
    public function set(\$key, \$values, \$replace = true)
    {
        \$key = str_replace('_', '-', strtolower(\$key));

        if (\\is_array(\$values)) {
            \$values = array_values(\$values);

            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = \$values;
            } else {
                \$this->headers[\$key] = array_merge(\$this->headers[\$key], \$values);
            }
        } else {
            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = [\$values];
            } else {
                \$this->headers[\$key][] = \$values;
            }
        }

        if ('cache-control' === \$key) {
            \$this->cacheControl = \$this->parseCacheControl(implode(', ', \$this->headers[\$key]));
        }
    }

    /**
     * Returns true if the HTTP header is defined.
     *
     * @param string \$key The HTTP header
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(\$key)
    {
        return \\array_key_exists(str_replace('_', '-', strtolower(\$key)), \$this->all());
    }

    /**
     * Returns true if the given HTTP header contains the given value.
     *
     * @param string \$key   The HTTP header name
     * @param string \$value The HTTP value
     *
     * @return bool true if the value is contained in the header, false otherwise
     */
    public function contains(\$key, \$value)
    {
        return \\in_array(\$value, \$this->get(\$key, null, false));
    }

    /**
     * Removes a header.
     *
     * @param string \$key The HTTP header name
     */
    public function remove(\$key)
    {
        \$key = str_replace('_', '-', strtolower(\$key));

        unset(\$this->headers[\$key]);

        if ('cache-control' === \$key) {
            \$this->cacheControl = [];
        }
    }

    /**
     * Returns the HTTP header value converted to a date.
     *
     * @param string    \$key     The parameter key
     * @param \\DateTime \$default The default value
     *
     * @return \\DateTime|null The parsed DateTime or the default value if the header does not exist
     *
     * @throws \\RuntimeException When the HTTP header is not parseable
     */
    public function getDate(\$key, \\DateTime \$default = null)
    {
        if (null === \$value = \$this->get(\$key)) {
            return \$default;
        }

        if (false === \$date = \\DateTime::createFromFormat(DATE_RFC2822, \$value)) {
            throw new \\RuntimeException(sprintf('The %s HTTP header is not parseable (%s).', \$key, \$value));
        }

        return \$date;
    }

    /**
     * Adds a custom Cache-Control directive.
     *
     * @param string \$key   The Cache-Control directive name
     * @param mixed  \$value The Cache-Control directive value
     */
    public function addCacheControlDirective(\$key, \$value = true)
    {
        \$this->cacheControl[\$key] = \$value;

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns true if the Cache-Control directive is defined.
     *
     * @param string \$key The Cache-Control directive
     *
     * @return bool true if the directive exists, false otherwise
     */
    public function hasCacheControlDirective(\$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl);
    }

    /**
     * Returns a Cache-Control directive value by name.
     *
     * @param string \$key The directive name
     *
     * @return mixed|null The directive value if defined, null otherwise
     */
    public function getCacheControlDirective(\$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl) ? \$this->cacheControl[\$key] : null;
    }

    /**
     * Removes a Cache-Control directive.
     *
     * @param string \$key The Cache-Control directive
     */
    public function removeCacheControlDirective(\$key)
    {
        unset(\$this->cacheControl[\$key]);

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns an iterator for headers.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->headers);
    }

    /**
     * Returns the number of headers.
     *
     * @return int The number of headers
     */
    public function count()
    {
        return \\count(\$this->headers);
    }

    protected function getCacheControlHeader()
    {
        ksort(\$this->cacheControl);

        return HeaderUtils::toString(\$this->cacheControl, ',');
    }

    /**
     * Parses a Cache-Control HTTP header.
     *
     * @param string \$header The value of the Cache-Control HTTP header
     *
     * @return array An array representing the attribute values
     */
    protected function parseCacheControl(\$header)
    {
        \$parts = HeaderUtils::split(\$header, ',=');

        return HeaderUtils::combine(\$parts);
    }
}
", "vendor/symfony/http-foundation/HeaderBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/HeaderBag.php");
    }
}
