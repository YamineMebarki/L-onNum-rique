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

/* vendor/symfony/translation/Dumper/QtFileDumper.php */
class __TwigTemplate_a79f555337a83f6da4912d5528d8ac2fad898842daf64ed910acfc42a63f1894 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/QtFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/QtFileDumper.php"));

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
 * QtFileDumper generates ts files from a message catalogue.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class QtFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;
        \$ts = \$dom->appendChild(\$dom->createElement('TS'));
        \$context = \$ts->appendChild(\$dom->createElement('context'));
        \$context->appendChild(\$dom->createElement('name', \$domain));

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$message = \$context->appendChild(\$dom->createElement('message'));
            \$metadata = \$messages->getMetadata(\$source, \$domain);
            if (isset(\$metadata['sources'])) {
                foreach ((array) \$metadata['sources'] as \$location) {
                    \$loc = explode(':', \$location, 2);
                    \$location = \$message->appendChild(\$dom->createElement('location'));
                    \$location->setAttribute('filename', \$loc[0]);
                    if (isset(\$loc[1])) {
                        \$location->setAttribute('line', \$loc[1]);
                    }
                }
            }
            \$message->appendChild(\$dom->createElement('source', \$source));
            \$message->appendChild(\$dom->createElement('translation', \$target));
        }

        return \$dom->saveXML();
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'ts';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/QtFileDumper.php";
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
 * QtFileDumper generates ts files from a message catalogue.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class QtFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;
        \$ts = \$dom->appendChild(\$dom->createElement('TS'));
        \$context = \$ts->appendChild(\$dom->createElement('context'));
        \$context->appendChild(\$dom->createElement('name', \$domain));

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$message = \$context->appendChild(\$dom->createElement('message'));
            \$metadata = \$messages->getMetadata(\$source, \$domain);
            if (isset(\$metadata['sources'])) {
                foreach ((array) \$metadata['sources'] as \$location) {
                    \$loc = explode(':', \$location, 2);
                    \$location = \$message->appendChild(\$dom->createElement('location'));
                    \$location->setAttribute('filename', \$loc[0]);
                    if (isset(\$loc[1])) {
                        \$location->setAttribute('line', \$loc[1]);
                    }
                }
            }
            \$message->appendChild(\$dom->createElement('source', \$source));
            \$message->appendChild(\$dom->createElement('translation', \$target));
        }

        return \$dom->saveXML();
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'ts';
    }
}
", "vendor/symfony/translation/Dumper/QtFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/QtFileDumper.php");
    }
}
