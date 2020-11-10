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

/* vendor/symfony/console/Output/ConsoleSectionOutput.php */
class __TwigTemplate_b4d53f65fc6dbc9da5aeacb347d11f8fc61efba43ca60904d135d42b8b30de88 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/ConsoleSectionOutput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/ConsoleSectionOutput.php"));

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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Terminal;

/**
 * @author Pierre du Plessis <pdples@gmail.com>
 * @author Gabriel Ostrolucký <gabriel.ostrolucky@gmail.com>
 */
class ConsoleSectionOutput extends StreamOutput
{
    private \$content = [];
    private \$lines = 0;
    private \$sections;
    private \$terminal;

    /**
     * @param resource               \$stream
     * @param ConsoleSectionOutput[] \$sections
     */
    public function __construct(\$stream, array &\$sections, int \$verbosity, bool \$decorated, OutputFormatterInterface \$formatter)
    {
        parent::__construct(\$stream, \$verbosity, \$decorated, \$formatter);
        array_unshift(\$sections, \$this);
        \$this->sections = &\$sections;
        \$this->terminal = new Terminal();
    }

    /**
     * Clears previous output for this section.
     *
     * @param int \$lines Number of lines to clear. If null, then the entire output of this section is cleared
     */
    public function clear(int \$lines = null)
    {
        if (empty(\$this->content) || !\$this->isDecorated()) {
            return;
        }

        if (\$lines) {
            array_splice(\$this->content, -(\$lines * 2)); // Multiply lines by 2 to cater for each new line added between content
        } else {
            \$lines = \$this->lines;
            \$this->content = [];
        }

        \$this->lines -= \$lines;

        parent::doWrite(\$this->popStreamContentUntilCurrentSection(\$lines), false);
    }

    /**
     * Overwrites the previous output with a new message.
     *
     * @param array|string \$message
     */
    public function overwrite(\$message)
    {
        \$this->clear();
        \$this->writeln(\$message);
    }

    public function getContent(): string
    {
        return implode('', \$this->content);
    }

    /**
     * @internal
     */
    public function addContent(string \$input)
    {
        foreach (explode(PHP_EOL, \$input) as \$lineContent) {
            \$this->lines += ceil(\$this->getDisplayLength(\$lineContent) / \$this->terminal->getWidth()) ?: 1;
            \$this->content[] = \$lineContent;
            \$this->content[] = PHP_EOL;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$message, \$newline)
    {
        if (!\$this->isDecorated()) {
            parent::doWrite(\$message, \$newline);

            return;
        }

        \$erasedContent = \$this->popStreamContentUntilCurrentSection();

        \$this->addContent(\$message);

        parent::doWrite(\$message, true);
        parent::doWrite(\$erasedContent, false);
    }

    /**
     * At initial stage, cursor is at the end of stream output. This method makes cursor crawl upwards until it hits
     * current section. Then it erases content it crawled through. Optionally, it erases part of current section too.
     */
    private function popStreamContentUntilCurrentSection(int \$numberOfLinesToClearFromCurrentSection = 0): string
    {
        \$numberOfLinesToClear = \$numberOfLinesToClearFromCurrentSection;
        \$erasedContent = [];

        foreach (\$this->sections as \$section) {
            if (\$section === \$this) {
                break;
            }

            \$numberOfLinesToClear += \$section->lines;
            \$erasedContent[] = \$section->getContent();
        }

        if (\$numberOfLinesToClear > 0) {
            // move cursor up n lines
            parent::doWrite(sprintf(\"\\x1b[%dA\", \$numberOfLinesToClear), false);
            // erase to end of screen
            parent::doWrite(\"\\x1b[0J\", false);
        }

        return implode('', array_reverse(\$erasedContent));
    }

    private function getDisplayLength(string \$text): string
    {
        return Helper::strlenWithoutDecoration(\$this->getFormatter(), str_replace(\"\\t\", '        ', \$text));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Output/ConsoleSectionOutput.php";
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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Terminal;

/**
 * @author Pierre du Plessis <pdples@gmail.com>
 * @author Gabriel Ostrolucký <gabriel.ostrolucky@gmail.com>
 */
class ConsoleSectionOutput extends StreamOutput
{
    private \$content = [];
    private \$lines = 0;
    private \$sections;
    private \$terminal;

    /**
     * @param resource               \$stream
     * @param ConsoleSectionOutput[] \$sections
     */
    public function __construct(\$stream, array &\$sections, int \$verbosity, bool \$decorated, OutputFormatterInterface \$formatter)
    {
        parent::__construct(\$stream, \$verbosity, \$decorated, \$formatter);
        array_unshift(\$sections, \$this);
        \$this->sections = &\$sections;
        \$this->terminal = new Terminal();
    }

    /**
     * Clears previous output for this section.
     *
     * @param int \$lines Number of lines to clear. If null, then the entire output of this section is cleared
     */
    public function clear(int \$lines = null)
    {
        if (empty(\$this->content) || !\$this->isDecorated()) {
            return;
        }

        if (\$lines) {
            array_splice(\$this->content, -(\$lines * 2)); // Multiply lines by 2 to cater for each new line added between content
        } else {
            \$lines = \$this->lines;
            \$this->content = [];
        }

        \$this->lines -= \$lines;

        parent::doWrite(\$this->popStreamContentUntilCurrentSection(\$lines), false);
    }

    /**
     * Overwrites the previous output with a new message.
     *
     * @param array|string \$message
     */
    public function overwrite(\$message)
    {
        \$this->clear();
        \$this->writeln(\$message);
    }

    public function getContent(): string
    {
        return implode('', \$this->content);
    }

    /**
     * @internal
     */
    public function addContent(string \$input)
    {
        foreach (explode(PHP_EOL, \$input) as \$lineContent) {
            \$this->lines += ceil(\$this->getDisplayLength(\$lineContent) / \$this->terminal->getWidth()) ?: 1;
            \$this->content[] = \$lineContent;
            \$this->content[] = PHP_EOL;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$message, \$newline)
    {
        if (!\$this->isDecorated()) {
            parent::doWrite(\$message, \$newline);

            return;
        }

        \$erasedContent = \$this->popStreamContentUntilCurrentSection();

        \$this->addContent(\$message);

        parent::doWrite(\$message, true);
        parent::doWrite(\$erasedContent, false);
    }

    /**
     * At initial stage, cursor is at the end of stream output. This method makes cursor crawl upwards until it hits
     * current section. Then it erases content it crawled through. Optionally, it erases part of current section too.
     */
    private function popStreamContentUntilCurrentSection(int \$numberOfLinesToClearFromCurrentSection = 0): string
    {
        \$numberOfLinesToClear = \$numberOfLinesToClearFromCurrentSection;
        \$erasedContent = [];

        foreach (\$this->sections as \$section) {
            if (\$section === \$this) {
                break;
            }

            \$numberOfLinesToClear += \$section->lines;
            \$erasedContent[] = \$section->getContent();
        }

        if (\$numberOfLinesToClear > 0) {
            // move cursor up n lines
            parent::doWrite(sprintf(\"\\x1b[%dA\", \$numberOfLinesToClear), false);
            // erase to end of screen
            parent::doWrite(\"\\x1b[0J\", false);
        }

        return implode('', array_reverse(\$erasedContent));
    }

    private function getDisplayLength(string \$text): string
    {
        return Helper::strlenWithoutDecoration(\$this->getFormatter(), str_replace(\"\\t\", '        ', \$text));
    }
}
", "vendor/symfony/console/Output/ConsoleSectionOutput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Output/ConsoleSectionOutput.php");
    }
}
