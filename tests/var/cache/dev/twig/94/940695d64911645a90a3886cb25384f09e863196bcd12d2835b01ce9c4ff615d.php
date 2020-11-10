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

/* vendor/symfony/translation/Dumper/PoFileDumper.php */
class __TwigTemplate_9e2bb242fb9f22e6770235ee97180ffa8ed3425a7a9a7b34f5a67890c6f5ed45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/PoFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/PoFileDumper.php"));

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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * PoFileDumper generates a gettext formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class PoFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$output = 'msgid \"\"'.\"\\n\";
        \$output .= 'msgstr \"\"'.\"\\n\";
        \$output .= '\"Content-Type: text/plain; charset=UTF-8\\n\"'.\"\\n\";
        \$output .= '\"Content-Transfer-Encoding: 8bit\\n\"'.\"\\n\";
        \$output .= '\"Language: '.\$messages->getLocale().'\\n\"'.\"\\n\";
        \$output .= \"\\n\";

        \$newLine = false;
        foreach (\$messages->all(\$domain) as \$source => \$target) {
            if (\$newLine) {
                \$output .= \"\\n\";
            } else {
                \$newLine = true;
            }
            \$metadata = \$messages->getMetadata(\$source, \$domain);

            if (isset(\$metadata['comments'])) {
                \$output .= \$this->formatComments(\$metadata['comments']);
            }
            if (isset(\$metadata['flags'])) {
                \$output .= \$this->formatComments(implode(',', (array) \$metadata['flags']), ',');
            }
            if (isset(\$metadata['sources'])) {
                \$output .= \$this->formatComments(implode(' ', (array) \$metadata['sources']), ':');
            }

            \$output .= sprintf('msgid \"%s\"'.\"\\n\", \$this->escape(\$source));
            \$output .= sprintf('msgstr \"%s\"'.\"\\n\", \$this->escape(\$target));
        }

        return \$output;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'po';
    }

    private function escape(\$str)
    {
        return addcslashes(\$str, \"\\0..\\37\\42\\134\");
    }

    private function formatComments(\$comments, string \$prefix = ''): ?string
    {
        \$output = null;

        foreach ((array) \$comments as \$comment) {
            \$output .= sprintf('#%s %s'.\"\\n\", \$prefix, \$comment);
        }

        return \$output;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/PoFileDumper.php";
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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * PoFileDumper generates a gettext formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class PoFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$output = 'msgid \"\"'.\"\\n\";
        \$output .= 'msgstr \"\"'.\"\\n\";
        \$output .= '\"Content-Type: text/plain; charset=UTF-8\\n\"'.\"\\n\";
        \$output .= '\"Content-Transfer-Encoding: 8bit\\n\"'.\"\\n\";
        \$output .= '\"Language: '.\$messages->getLocale().'\\n\"'.\"\\n\";
        \$output .= \"\\n\";

        \$newLine = false;
        foreach (\$messages->all(\$domain) as \$source => \$target) {
            if (\$newLine) {
                \$output .= \"\\n\";
            } else {
                \$newLine = true;
            }
            \$metadata = \$messages->getMetadata(\$source, \$domain);

            if (isset(\$metadata['comments'])) {
                \$output .= \$this->formatComments(\$metadata['comments']);
            }
            if (isset(\$metadata['flags'])) {
                \$output .= \$this->formatComments(implode(',', (array) \$metadata['flags']), ',');
            }
            if (isset(\$metadata['sources'])) {
                \$output .= \$this->formatComments(implode(' ', (array) \$metadata['sources']), ':');
            }

            \$output .= sprintf('msgid \"%s\"'.\"\\n\", \$this->escape(\$source));
            \$output .= sprintf('msgstr \"%s\"'.\"\\n\", \$this->escape(\$target));
        }

        return \$output;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'po';
    }

    private function escape(\$str)
    {
        return addcslashes(\$str, \"\\0..\\37\\42\\134\");
    }

    private function formatComments(\$comments, string \$prefix = ''): ?string
    {
        \$output = null;

        foreach ((array) \$comments as \$comment) {
            \$output .= sprintf('#%s %s'.\"\\n\", \$prefix, \$comment);
        }

        return \$output;
    }
}
", "vendor/symfony/translation/Dumper/PoFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/PoFileDumper.php");
    }
}
