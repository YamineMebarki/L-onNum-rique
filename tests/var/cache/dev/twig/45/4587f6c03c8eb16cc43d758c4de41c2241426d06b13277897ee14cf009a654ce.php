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

/* vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php */
class __TwigTemplate_87dcabb978e6184c80e70510043506d8b0e29353cddc11eb30b4c752eb869b7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php"));

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

namespace Symfony\\Component\\VarDumper\\Command\\Descriptor;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * Describe collected data clones for html output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class HtmlDescriptor implements DumpDescriptorInterface
{
    private \$dumper;
    private \$initialized = false;

    public function __construct(HtmlDumper \$dumper)
    {
        \$this->dumper = \$dumper;
    }

    public function describe(OutputInterface \$output, Data \$data, array \$context, int \$clientId): void
    {
        if (!\$this->initialized) {
            \$styles = file_get_contents(__DIR__.'/../../Resources/css/htmlDescriptor.css');
            \$scripts = file_get_contents(__DIR__.'/../../Resources/js/htmlDescriptor.js');
            \$output->writeln(\"<style>\$styles</style><script>\$scripts</script>\");
            \$this->initialized = true;
        }

        \$title = '-';
        if (isset(\$context['request'])) {
            \$request = \$context['request'];
            \$controller = \"<span class='dumped-tag'>{\$this->dumper->dump(\$request['controller'], true, ['maxDepth' => 0])}</span>\";
            \$title = sprintf('<code>%s</code> <a href=\"%s\">%s</a>', \$request['method'], \$uri = \$request['uri'], \$uri);
            \$dedupIdentifier = \$request['identifier'];
        } elseif (isset(\$context['cli'])) {
            \$title = '<code>\$ </code>'.\$context['cli']['command_line'];
            \$dedupIdentifier = \$context['cli']['identifier'];
        } else {
            \$dedupIdentifier = uniqid('', true);
        }

        \$sourceDescription = '';
        if (isset(\$context['source'])) {
            \$source = \$context['source'];
            \$projectDir = \$source['project_dir'] ?? null;
            \$sourceDescription = sprintf('%s on line %d', \$source['name'], \$source['line']);
            if (isset(\$source['file_link'])) {
                \$sourceDescription = sprintf('<a href=\"%s\">%s</a>', \$source['file_link'], \$sourceDescription);
            }
        }

        \$isoDate = \$this->extractDate(\$context, 'c');
        \$tags = array_filter([
            'controller' => \$controller ?? null,
            'project dir' => \$projectDir ?? null,
        ]);

        \$output->writeln(<<<HTML
<article data-dedup-id=\"\$dedupIdentifier\">
    <header>
        <div class=\"row\">
            <h2 class=\"col\">\$title</h2>
            <time class=\"col text-small\" title=\"\$isoDate\" datetime=\"\$isoDate\">
                {\$this->extractDate(\$context)}
            </time>
        </div>
        {\$this->renderTags(\$tags)}
    </header>
    <section class=\"body\">
        <p class=\"text-small\">
            \$sourceDescription
        </p>
        {\$this->dumper->dump(\$data, true)}
    </section>
</article>
HTML
        );
    }

    private function extractDate(array \$context, string \$format = 'r'): string
    {
        return date(\$format, \$context['timestamp']);
    }

    private function renderTags(array \$tags): string
    {
        if (!\$tags) {
            return '';
        }

        \$renderedTags = '';
        foreach (\$tags as \$key => \$value) {
            \$renderedTags .= sprintf('<li><span class=\"badge\">%s</span>%s</li>', \$key, \$value);
        }

        return <<<HTML
<div class=\"row\">
    <ul class=\"tags\">
        \$renderedTags
    </ul>
</div>
HTML;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php";
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

namespace Symfony\\Component\\VarDumper\\Command\\Descriptor;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * Describe collected data clones for html output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class HtmlDescriptor implements DumpDescriptorInterface
{
    private \$dumper;
    private \$initialized = false;

    public function __construct(HtmlDumper \$dumper)
    {
        \$this->dumper = \$dumper;
    }

    public function describe(OutputInterface \$output, Data \$data, array \$context, int \$clientId): void
    {
        if (!\$this->initialized) {
            \$styles = file_get_contents(__DIR__.'/../../Resources/css/htmlDescriptor.css');
            \$scripts = file_get_contents(__DIR__.'/../../Resources/js/htmlDescriptor.js');
            \$output->writeln(\"<style>\$styles</style><script>\$scripts</script>\");
            \$this->initialized = true;
        }

        \$title = '-';
        if (isset(\$context['request'])) {
            \$request = \$context['request'];
            \$controller = \"<span class='dumped-tag'>{\$this->dumper->dump(\$request['controller'], true, ['maxDepth' => 0])}</span>\";
            \$title = sprintf('<code>%s</code> <a href=\"%s\">%s</a>', \$request['method'], \$uri = \$request['uri'], \$uri);
            \$dedupIdentifier = \$request['identifier'];
        } elseif (isset(\$context['cli'])) {
            \$title = '<code>\$ </code>'.\$context['cli']['command_line'];
            \$dedupIdentifier = \$context['cli']['identifier'];
        } else {
            \$dedupIdentifier = uniqid('', true);
        }

        \$sourceDescription = '';
        if (isset(\$context['source'])) {
            \$source = \$context['source'];
            \$projectDir = \$source['project_dir'] ?? null;
            \$sourceDescription = sprintf('%s on line %d', \$source['name'], \$source['line']);
            if (isset(\$source['file_link'])) {
                \$sourceDescription = sprintf('<a href=\"%s\">%s</a>', \$source['file_link'], \$sourceDescription);
            }
        }

        \$isoDate = \$this->extractDate(\$context, 'c');
        \$tags = array_filter([
            'controller' => \$controller ?? null,
            'project dir' => \$projectDir ?? null,
        ]);

        \$output->writeln(<<<HTML
<article data-dedup-id=\"\$dedupIdentifier\">
    <header>
        <div class=\"row\">
            <h2 class=\"col\">\$title</h2>
            <time class=\"col text-small\" title=\"\$isoDate\" datetime=\"\$isoDate\">
                {\$this->extractDate(\$context)}
            </time>
        </div>
        {\$this->renderTags(\$tags)}
    </header>
    <section class=\"body\">
        <p class=\"text-small\">
            \$sourceDescription
        </p>
        {\$this->dumper->dump(\$data, true)}
    </section>
</article>
HTML
        );
    }

    private function extractDate(array \$context, string \$format = 'r'): string
    {
        return date(\$format, \$context['timestamp']);
    }

    private function renderTags(array \$tags): string
    {
        if (!\$tags) {
            return '';
        }

        \$renderedTags = '';
        foreach (\$tags as \$key => \$value) {
            \$renderedTags .= sprintf('<li><span class=\"badge\">%s</span>%s</li>', \$key, \$value);
        }

        return <<<HTML
<div class=\"row\">
    <ul class=\"tags\">
        \$renderedTags
    </ul>
</div>
HTML;
    }
}
", "vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php");
    }
}
