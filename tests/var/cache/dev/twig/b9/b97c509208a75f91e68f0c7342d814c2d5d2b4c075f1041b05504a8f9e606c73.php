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

/* vendor/symfony/console/Formatter/OutputFormatterStyle.php */
class __TwigTemplate_9619d66e838125cff51c17371f72c91aacd057835b06ef298cb954c562cb36f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterStyle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterStyle.php"));

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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Formatter style class for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class OutputFormatterStyle implements OutputFormatterStyleInterface
{
    private static \$availableForegroundColors = [
        'black' => ['set' => 30, 'unset' => 39],
        'red' => ['set' => 31, 'unset' => 39],
        'green' => ['set' => 32, 'unset' => 39],
        'yellow' => ['set' => 33, 'unset' => 39],
        'blue' => ['set' => 34, 'unset' => 39],
        'magenta' => ['set' => 35, 'unset' => 39],
        'cyan' => ['set' => 36, 'unset' => 39],
        'white' => ['set' => 37, 'unset' => 39],
        'default' => ['set' => 39, 'unset' => 39],
    ];
    private static \$availableBackgroundColors = [
        'black' => ['set' => 40, 'unset' => 49],
        'red' => ['set' => 41, 'unset' => 49],
        'green' => ['set' => 42, 'unset' => 49],
        'yellow' => ['set' => 43, 'unset' => 49],
        'blue' => ['set' => 44, 'unset' => 49],
        'magenta' => ['set' => 45, 'unset' => 49],
        'cyan' => ['set' => 46, 'unset' => 49],
        'white' => ['set' => 47, 'unset' => 49],
        'default' => ['set' => 49, 'unset' => 49],
    ];
    private static \$availableOptions = [
        'bold' => ['set' => 1, 'unset' => 22],
        'underscore' => ['set' => 4, 'unset' => 24],
        'blink' => ['set' => 5, 'unset' => 25],
        'reverse' => ['set' => 7, 'unset' => 27],
        'conceal' => ['set' => 8, 'unset' => 28],
    ];

    private \$foreground;
    private \$background;
    private \$href;
    private \$options = [];
    private \$handlesHrefGracefully;

    /**
     * Initializes output formatter style.
     *
     * @param string|null \$foreground The style foreground color name
     * @param string|null \$background The style background color name
     * @param array       \$options    The style options
     */
    public function __construct(string \$foreground = null, string \$background = null, array \$options = [])
    {
        if (null !== \$foreground) {
            \$this->setForeground(\$foreground);
        }
        if (null !== \$background) {
            \$this->setBackground(\$background);
        }
        if (\\count(\$options)) {
            \$this->setOptions(\$options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setForeground(\$color = null)
    {
        if (null === \$color) {
            \$this->foreground = null;

            return;
        }

        if (!isset(static::\$availableForegroundColors[\$color])) {
            throw new InvalidArgumentException(sprintf('Invalid foreground color specified: \"%s\". Expected one of (%s)', \$color, implode(', ', array_keys(static::\$availableForegroundColors))));
        }

        \$this->foreground = static::\$availableForegroundColors[\$color];
    }

    /**
     * {@inheritdoc}
     */
    public function setBackground(\$color = null)
    {
        if (null === \$color) {
            \$this->background = null;

            return;
        }

        if (!isset(static::\$availableBackgroundColors[\$color])) {
            throw new InvalidArgumentException(sprintf('Invalid background color specified: \"%s\". Expected one of (%s)', \$color, implode(', ', array_keys(static::\$availableBackgroundColors))));
        }

        \$this->background = static::\$availableBackgroundColors[\$color];
    }

    public function setHref(string \$url): void
    {
        \$this->href = \$url;
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(\$option)
    {
        if (!isset(static::\$availableOptions[\$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: \"%s\". Expected one of (%s)', \$option, implode(', ', array_keys(static::\$availableOptions))));
        }

        if (!\\in_array(static::\$availableOptions[\$option], \$this->options)) {
            \$this->options[] = static::\$availableOptions[\$option];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetOption(\$option)
    {
        if (!isset(static::\$availableOptions[\$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: \"%s\". Expected one of (%s)', \$option, implode(', ', array_keys(static::\$availableOptions))));
        }

        \$pos = array_search(static::\$availableOptions[\$option], \$this->options);
        if (false !== \$pos) {
            unset(\$this->options[\$pos]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array \$options)
    {
        \$this->options = [];

        foreach (\$options as \$option) {
            \$this->setOption(\$option);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function apply(\$text)
    {
        \$setCodes = [];
        \$unsetCodes = [];

        if (null === \$this->handlesHrefGracefully) {
            \$this->handlesHrefGracefully = 'JetBrains-JediTerm' !== getenv('TERMINAL_EMULATOR') && !getenv('KONSOLE_VERSION');
        }

        if (null !== \$this->foreground) {
            \$setCodes[] = \$this->foreground['set'];
            \$unsetCodes[] = \$this->foreground['unset'];
        }
        if (null !== \$this->background) {
            \$setCodes[] = \$this->background['set'];
            \$unsetCodes[] = \$this->background['unset'];
        }

        foreach (\$this->options as \$option) {
            \$setCodes[] = \$option['set'];
            \$unsetCodes[] = \$option['unset'];
        }

        if (null !== \$this->href && \$this->handlesHrefGracefully) {
            \$text = \"\\033]8;;\$this->href\\033\\\\\$text\\033]8;;\\033\\\\\";
        }

        if (0 === \\count(\$setCodes)) {
            return \$text;
        }

        return sprintf(\"\\033[%sm%s\\033[%sm\", implode(';', \$setCodes), \$text, implode(';', \$unsetCodes));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Formatter/OutputFormatterStyle.php";
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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Formatter style class for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class OutputFormatterStyle implements OutputFormatterStyleInterface
{
    private static \$availableForegroundColors = [
        'black' => ['set' => 30, 'unset' => 39],
        'red' => ['set' => 31, 'unset' => 39],
        'green' => ['set' => 32, 'unset' => 39],
        'yellow' => ['set' => 33, 'unset' => 39],
        'blue' => ['set' => 34, 'unset' => 39],
        'magenta' => ['set' => 35, 'unset' => 39],
        'cyan' => ['set' => 36, 'unset' => 39],
        'white' => ['set' => 37, 'unset' => 39],
        'default' => ['set' => 39, 'unset' => 39],
    ];
    private static \$availableBackgroundColors = [
        'black' => ['set' => 40, 'unset' => 49],
        'red' => ['set' => 41, 'unset' => 49],
        'green' => ['set' => 42, 'unset' => 49],
        'yellow' => ['set' => 43, 'unset' => 49],
        'blue' => ['set' => 44, 'unset' => 49],
        'magenta' => ['set' => 45, 'unset' => 49],
        'cyan' => ['set' => 46, 'unset' => 49],
        'white' => ['set' => 47, 'unset' => 49],
        'default' => ['set' => 49, 'unset' => 49],
    ];
    private static \$availableOptions = [
        'bold' => ['set' => 1, 'unset' => 22],
        'underscore' => ['set' => 4, 'unset' => 24],
        'blink' => ['set' => 5, 'unset' => 25],
        'reverse' => ['set' => 7, 'unset' => 27],
        'conceal' => ['set' => 8, 'unset' => 28],
    ];

    private \$foreground;
    private \$background;
    private \$href;
    private \$options = [];
    private \$handlesHrefGracefully;

    /**
     * Initializes output formatter style.
     *
     * @param string|null \$foreground The style foreground color name
     * @param string|null \$background The style background color name
     * @param array       \$options    The style options
     */
    public function __construct(string \$foreground = null, string \$background = null, array \$options = [])
    {
        if (null !== \$foreground) {
            \$this->setForeground(\$foreground);
        }
        if (null !== \$background) {
            \$this->setBackground(\$background);
        }
        if (\\count(\$options)) {
            \$this->setOptions(\$options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setForeground(\$color = null)
    {
        if (null === \$color) {
            \$this->foreground = null;

            return;
        }

        if (!isset(static::\$availableForegroundColors[\$color])) {
            throw new InvalidArgumentException(sprintf('Invalid foreground color specified: \"%s\". Expected one of (%s)', \$color, implode(', ', array_keys(static::\$availableForegroundColors))));
        }

        \$this->foreground = static::\$availableForegroundColors[\$color];
    }

    /**
     * {@inheritdoc}
     */
    public function setBackground(\$color = null)
    {
        if (null === \$color) {
            \$this->background = null;

            return;
        }

        if (!isset(static::\$availableBackgroundColors[\$color])) {
            throw new InvalidArgumentException(sprintf('Invalid background color specified: \"%s\". Expected one of (%s)', \$color, implode(', ', array_keys(static::\$availableBackgroundColors))));
        }

        \$this->background = static::\$availableBackgroundColors[\$color];
    }

    public function setHref(string \$url): void
    {
        \$this->href = \$url;
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(\$option)
    {
        if (!isset(static::\$availableOptions[\$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: \"%s\". Expected one of (%s)', \$option, implode(', ', array_keys(static::\$availableOptions))));
        }

        if (!\\in_array(static::\$availableOptions[\$option], \$this->options)) {
            \$this->options[] = static::\$availableOptions[\$option];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetOption(\$option)
    {
        if (!isset(static::\$availableOptions[\$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: \"%s\". Expected one of (%s)', \$option, implode(', ', array_keys(static::\$availableOptions))));
        }

        \$pos = array_search(static::\$availableOptions[\$option], \$this->options);
        if (false !== \$pos) {
            unset(\$this->options[\$pos]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array \$options)
    {
        \$this->options = [];

        foreach (\$options as \$option) {
            \$this->setOption(\$option);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function apply(\$text)
    {
        \$setCodes = [];
        \$unsetCodes = [];

        if (null === \$this->handlesHrefGracefully) {
            \$this->handlesHrefGracefully = 'JetBrains-JediTerm' !== getenv('TERMINAL_EMULATOR') && !getenv('KONSOLE_VERSION');
        }

        if (null !== \$this->foreground) {
            \$setCodes[] = \$this->foreground['set'];
            \$unsetCodes[] = \$this->foreground['unset'];
        }
        if (null !== \$this->background) {
            \$setCodes[] = \$this->background['set'];
            \$unsetCodes[] = \$this->background['unset'];
        }

        foreach (\$this->options as \$option) {
            \$setCodes[] = \$option['set'];
            \$unsetCodes[] = \$option['unset'];
        }

        if (null !== \$this->href && \$this->handlesHrefGracefully) {
            \$text = \"\\033]8;;\$this->href\\033\\\\\$text\\033]8;;\\033\\\\\";
        }

        if (0 === \\count(\$setCodes)) {
            return \$text;
        }

        return sprintf(\"\\033[%sm%s\\033[%sm\", implode(';', \$setCodes), \$text, implode(';', \$unsetCodes));
    }
}
", "vendor/symfony/console/Formatter/OutputFormatterStyle.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Formatter/OutputFormatterStyle.php");
    }
}
