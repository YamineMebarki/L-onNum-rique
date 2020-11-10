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

/* vendor/symfony/console/Helper/FormatterHelper.php */
class __TwigTemplate_aee364a7c08367e2cde6c74a55a781020e2e2c67200000fe89b5243c2609b429 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/FormatterHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/FormatterHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @param string \$section The section name
     * @param string \$message The message
     * @param string \$style   The style to apply to the section
     *
     * @return string The format section
     */
    public function formatSection(\$section, \$message, \$style = 'info')
    {
        return sprintf('<%s>[%s]</%s> %s', \$style, \$section, \$style, \$message);
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array \$messages The message to write in the block
     * @param string       \$style    The style to apply to the whole block
     * @param bool         \$large    Whether to return a large block
     *
     * @return string The formatter message
     */
    public function formatBlock(\$messages, \$style, \$large = false)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }

        \$len = 0;
        \$lines = [];
        foreach (\$messages as \$message) {
            \$message = OutputFormatter::escape(\$message);
            \$lines[] = sprintf(\$large ? '  %s  ' : ' %s ', \$message);
            \$len = max(\$this->strlen(\$message) + (\$large ? 4 : 2), \$len);
        }

        \$messages = \$large ? [str_repeat(' ', \$len)] : [];
        for (\$i = 0; isset(\$lines[\$i]); ++\$i) {
            \$messages[] = \$lines[\$i].str_repeat(' ', \$len - \$this->strlen(\$lines[\$i]));
        }
        if (\$large) {
            \$messages[] = str_repeat(' ', \$len);
        }

        for (\$i = 0; isset(\$messages[\$i]); ++\$i) {
            \$messages[\$i] = sprintf('<%s>%s</%s>', \$style, \$messages[\$i], \$style);
        }

        return implode(\"\\n\", \$messages);
    }

    /**
     * Truncates a message to the given length.
     *
     * @param string \$message
     * @param int    \$length
     * @param string \$suffix
     *
     * @return string
     */
    public function truncate(\$message, \$length, \$suffix = '...')
    {
        \$computedLength = \$length - \$this->strlen(\$suffix);

        if (\$computedLength > \$this->strlen(\$message)) {
            return \$message;
        }

        if (false === \$encoding = mb_detect_encoding(\$message, null, true)) {
            return substr(\$message, 0, \$length).\$suffix;
        }

        return mb_substr(\$message, 0, \$length, \$encoding).\$suffix;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/FormatterHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @param string \$section The section name
     * @param string \$message The message
     * @param string \$style   The style to apply to the section
     *
     * @return string The format section
     */
    public function formatSection(\$section, \$message, \$style = 'info')
    {
        return sprintf('<%s>[%s]</%s> %s', \$style, \$section, \$style, \$message);
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array \$messages The message to write in the block
     * @param string       \$style    The style to apply to the whole block
     * @param bool         \$large    Whether to return a large block
     *
     * @return string The formatter message
     */
    public function formatBlock(\$messages, \$style, \$large = false)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }

        \$len = 0;
        \$lines = [];
        foreach (\$messages as \$message) {
            \$message = OutputFormatter::escape(\$message);
            \$lines[] = sprintf(\$large ? '  %s  ' : ' %s ', \$message);
            \$len = max(\$this->strlen(\$message) + (\$large ? 4 : 2), \$len);
        }

        \$messages = \$large ? [str_repeat(' ', \$len)] : [];
        for (\$i = 0; isset(\$lines[\$i]); ++\$i) {
            \$messages[] = \$lines[\$i].str_repeat(' ', \$len - \$this->strlen(\$lines[\$i]));
        }
        if (\$large) {
            \$messages[] = str_repeat(' ', \$len);
        }

        for (\$i = 0; isset(\$messages[\$i]); ++\$i) {
            \$messages[\$i] = sprintf('<%s>%s</%s>', \$style, \$messages[\$i], \$style);
        }

        return implode(\"\\n\", \$messages);
    }

    /**
     * Truncates a message to the given length.
     *
     * @param string \$message
     * @param int    \$length
     * @param string \$suffix
     *
     * @return string
     */
    public function truncate(\$message, \$length, \$suffix = '...')
    {
        \$computedLength = \$length - \$this->strlen(\$suffix);

        if (\$computedLength > \$this->strlen(\$message)) {
            return \$message;
        }

        if (false === \$encoding = mb_detect_encoding(\$message, null, true)) {
            return substr(\$message, 0, \$length).\$suffix;
        }

        return mb_substr(\$message, 0, \$length, \$encoding).\$suffix;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
", "vendor/symfony/console/Helper/FormatterHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/FormatterHelper.php");
    }
}
