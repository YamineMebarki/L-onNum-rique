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

/* vendor/symfony/translation/Formatter/IntlFormatter.php */
class __TwigTemplate_bb2281ee1b19fe5cdc89cb65eb9bc9e0314ab92dcace4c77c25fb8bca7e26f6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/IntlFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/IntlFormatter.php"));

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

namespace Symfony\\Component\\Translation\\Formatter;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\LogicException;

/**
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class IntlFormatter implements IntlFormatterInterface
{
    private \$hasMessageFormatter;
    private \$cache = [];

    /**
     * {@inheritdoc}
     */
    public function formatIntl(string \$message, string \$locale, array \$parameters = []): string
    {
        // MessageFormatter constructor throws an exception if the message is empty
        if ('' === \$message) {
            return '';
        }

        if (!\$formatter = \$this->cache[\$locale][\$message] ?? null) {
            if (!(\$this->hasMessageFormatter ?? \$this->hasMessageFormatter = class_exists(\\MessageFormatter::class))) {
                throw new LogicException('Cannot parse message translation: please install the \"intl\" PHP extension or the \"symfony/polyfill-intl-messageformatter\" package.');
            }
            try {
                \$this->cache[\$locale][\$message] = \$formatter = new \\MessageFormatter(\$locale, \$message);
            } catch (\\IntlException \$e) {
                throw new InvalidArgumentException(sprintf('Invalid message format (error #%d): %s.', intl_get_error_code(), intl_get_error_message()), 0, \$e);
            }
        }

        foreach (\$parameters as \$key => \$value) {
            if (\\in_array(\$key[0] ?? null, ['%', '{'], true)) {
                unset(\$parameters[\$key]);
                \$parameters[trim(\$key, '%{ }')] = \$value;
            }
        }

        if (false === \$message = \$formatter->format(\$parameters)) {
            throw new InvalidArgumentException(sprintf('Unable to format message (error #%s): %s.', \$formatter->getErrorCode(), \$formatter->getErrorMessage()));
        }

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Formatter/IntlFormatter.php";
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

namespace Symfony\\Component\\Translation\\Formatter;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\LogicException;

/**
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class IntlFormatter implements IntlFormatterInterface
{
    private \$hasMessageFormatter;
    private \$cache = [];

    /**
     * {@inheritdoc}
     */
    public function formatIntl(string \$message, string \$locale, array \$parameters = []): string
    {
        // MessageFormatter constructor throws an exception if the message is empty
        if ('' === \$message) {
            return '';
        }

        if (!\$formatter = \$this->cache[\$locale][\$message] ?? null) {
            if (!(\$this->hasMessageFormatter ?? \$this->hasMessageFormatter = class_exists(\\MessageFormatter::class))) {
                throw new LogicException('Cannot parse message translation: please install the \"intl\" PHP extension or the \"symfony/polyfill-intl-messageformatter\" package.');
            }
            try {
                \$this->cache[\$locale][\$message] = \$formatter = new \\MessageFormatter(\$locale, \$message);
            } catch (\\IntlException \$e) {
                throw new InvalidArgumentException(sprintf('Invalid message format (error #%d): %s.', intl_get_error_code(), intl_get_error_message()), 0, \$e);
            }
        }

        foreach (\$parameters as \$key => \$value) {
            if (\\in_array(\$key[0] ?? null, ['%', '{'], true)) {
                unset(\$parameters[\$key]);
                \$parameters[trim(\$key, '%{ }')] = \$value;
            }
        }

        if (false === \$message = \$formatter->format(\$parameters)) {
            throw new InvalidArgumentException(sprintf('Unable to format message (error #%s): %s.', \$formatter->getErrorCode(), \$formatter->getErrorMessage()));
        }

        return \$message;
    }
}
", "vendor/symfony/translation/Formatter/IntlFormatter.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Formatter/IntlFormatter.php");
    }
}
