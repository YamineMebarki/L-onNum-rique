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

/* vendor/symfony/form/Console/Descriptor/TextDescriptor.php */
class __TwigTemplate_6edcae06b15a76741b8909f9e71dc5fc78e7ec5328bdb390ad0678fee880e427 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/TextDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/TextDescriptor.php"));

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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Console\\Helper\\Dumper;
use Symfony\\Component\\Console\\Helper\\TableSeparator;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class TextDescriptor extends Descriptor
{
    private \$fileLinkFormatter;

    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this->fileLinkFormatter = \$fileLinkFormatter;
    }

    protected function describeDefaults(array \$options)
    {
        if (\$options['core_types']) {
            \$this->output->section('Built-in form types (Symfony\\Component\\Form\\Extension\\Core\\Type)');
            \$shortClassNames = array_map(function (\$fqcn) {
                return \$this->formatClassLink(\$fqcn, \\array_slice(explode('\\\\', \$fqcn), -1)[0]);
            }, \$options['core_types']);
            for (\$i = 0, \$loopsMax = \\count(\$shortClassNames); \$i * 5 < \$loopsMax; ++\$i) {
                \$this->output->writeln(' '.implode(', ', \\array_slice(\$shortClassNames, \$i * 5, 5)));
            }
        }

        if (\$options['service_types']) {
            \$this->output->section('Service form types');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['service_types']));
        }

        if (!\$options['show_deprecated']) {
            if (\$options['extensions']) {
                \$this->output->section('Type extensions');
                \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['extensions']));
            }

            if (\$options['guessers']) {
                \$this->output->section('Type guessers');
                \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['guessers']));
            }
        }
    }

    protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = [])
    {
        \$this->collectOptions(\$resolvedFormType);

        if (\$options['show_deprecated']) {
            \$this->filterOptionsByDeprecated(\$resolvedFormType);
        }

        \$formOptions = \$this->normalizeAndSortOptionsColumns(array_filter([
            'own' => \$this->ownOptions,
            'overridden' => \$this->overriddenOptions,
            'parent' => \$this->parentOptions,
            'extension' => \$this->extensionOptions,
        ]));

        // setting headers and column order
        \$tableHeaders = array_intersect_key([
            'own' => 'Options',
            'overridden' => 'Overridden options',
            'parent' => 'Parent options',
            'extension' => 'Extension options',
        ], \$formOptions);

        \$this->output->title(sprintf('%s (Block prefix: \"%s\")', \\get_class(\$resolvedFormType->getInnerType()), \$resolvedFormType->getInnerType()->getBlockPrefix()));

        if (\$formOptions) {
            \$this->output->table(\$tableHeaders, \$this->buildTableRows(\$tableHeaders, \$formOptions));
        }

        if (\$this->parents) {
            \$this->output->section('Parent types');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$this->parents));
        }

        if (\$this->extensions) {
            \$this->output->section('Type extensions');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$this->extensions));
        }
    }

    protected function describeOption(OptionsResolver \$optionsResolver, array \$options)
    {
        \$definition = \$this->getOptionDefinition(\$optionsResolver, \$options['option']);

        \$dump = new Dumper(\$this->output);
        \$map = [];
        if (\$definition['deprecated']) {
            \$map = [
                'Deprecated' => 'deprecated',
                'Deprecation message' => 'deprecationMessage',
            ];
        }
        \$map += [
            'Required' => 'required',
            'Default' => 'default',
            'Allowed types' => 'allowedTypes',
            'Allowed values' => 'allowedValues',
            'Normalizers' => 'normalizers',
        ];
        \$rows = [];
        foreach (\$map as \$label => \$name) {
            \$value = \\array_key_exists(\$name, \$definition) ? \$dump(\$definition[\$name]) : '-';
            if ('default' === \$name && isset(\$definition['lazy'])) {
                \$value = \"Value: \$value\\n\\nClosure(s): \".\$dump(\$definition['lazy']);
            }

            \$rows[] = [\"<info>\$label</info>\", \$value];
            \$rows[] = new TableSeparator();
        }
        array_pop(\$rows);

        \$this->output->title(sprintf('%s (%s)', \\get_class(\$options['type']), \$options['option']));
        \$this->output->table([], \$rows);
    }

    private function buildTableRows(array \$headers, array \$options): array
    {
        \$tableRows = [];
        \$count = \\count(max(\$options));
        for (\$i = 0; \$i < \$count; ++\$i) {
            \$cells = [];
            foreach (array_keys(\$headers) as \$group) {
                \$option = \$options[\$group][\$i] ?? null;
                if (\\is_string(\$option) && \\in_array(\$option, \$this->requiredOptions, true)) {
                    \$option .= ' <info>(required)</info>';
                }
                \$cells[] = \$option;
            }
            \$tableRows[] = \$cells;
        }

        return \$tableRows;
    }

    private function normalizeAndSortOptionsColumns(array \$options)
    {
        foreach (\$options as \$group => \$opts) {
            \$sorted = false;
            foreach (\$opts as \$class => \$opt) {
                if (\\is_string(\$class)) {
                    unset(\$options[\$group][\$class]);
                }

                if (!\\is_array(\$opt) || 0 === \\count(\$opt)) {
                    continue;
                }

                if (!\$sorted) {
                    \$options[\$group] = [];
                } else {
                    \$options[\$group][] = null;
                }
                \$options[\$group][] = sprintf('<info>%s</info>', (new \\ReflectionClass(\$class))->getShortName());
                \$options[\$group][] = new TableSeparator();

                sort(\$opt);
                \$sorted = true;
                \$options[\$group] = array_merge(\$options[\$group], \$opt);
            }

            if (!\$sorted) {
                sort(\$options[\$group]);
            }
        }

        return \$options;
    }

    private function formatClassLink(string \$class, string \$text = null): string
    {
        if (null === \$text) {
            \$text = \$class;
        }

        if ('' === \$fileLink = \$this->getFileLink(\$class)) {
            return \$text;
        }

        return sprintf('<href=%s>%s</>', \$fileLink, \$text);
    }

    private function getFileLink(string \$class): string
    {
        if (null === \$this->fileLinkFormatter) {
            return '';
        }

        try {
            \$r = new \\ReflectionClass(\$class);
        } catch (\\ReflectionException \$e) {
            return '';
        }

        return (string) \$this->fileLinkFormatter->format(\$r->getFileName(), \$r->getStartLine());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Console/Descriptor/TextDescriptor.php";
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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Console\\Helper\\Dumper;
use Symfony\\Component\\Console\\Helper\\TableSeparator;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class TextDescriptor extends Descriptor
{
    private \$fileLinkFormatter;

    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this->fileLinkFormatter = \$fileLinkFormatter;
    }

    protected function describeDefaults(array \$options)
    {
        if (\$options['core_types']) {
            \$this->output->section('Built-in form types (Symfony\\Component\\Form\\Extension\\Core\\Type)');
            \$shortClassNames = array_map(function (\$fqcn) {
                return \$this->formatClassLink(\$fqcn, \\array_slice(explode('\\\\', \$fqcn), -1)[0]);
            }, \$options['core_types']);
            for (\$i = 0, \$loopsMax = \\count(\$shortClassNames); \$i * 5 < \$loopsMax; ++\$i) {
                \$this->output->writeln(' '.implode(', ', \\array_slice(\$shortClassNames, \$i * 5, 5)));
            }
        }

        if (\$options['service_types']) {
            \$this->output->section('Service form types');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['service_types']));
        }

        if (!\$options['show_deprecated']) {
            if (\$options['extensions']) {
                \$this->output->section('Type extensions');
                \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['extensions']));
            }

            if (\$options['guessers']) {
                \$this->output->section('Type guessers');
                \$this->output->listing(array_map([\$this, 'formatClassLink'], \$options['guessers']));
            }
        }
    }

    protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = [])
    {
        \$this->collectOptions(\$resolvedFormType);

        if (\$options['show_deprecated']) {
            \$this->filterOptionsByDeprecated(\$resolvedFormType);
        }

        \$formOptions = \$this->normalizeAndSortOptionsColumns(array_filter([
            'own' => \$this->ownOptions,
            'overridden' => \$this->overriddenOptions,
            'parent' => \$this->parentOptions,
            'extension' => \$this->extensionOptions,
        ]));

        // setting headers and column order
        \$tableHeaders = array_intersect_key([
            'own' => 'Options',
            'overridden' => 'Overridden options',
            'parent' => 'Parent options',
            'extension' => 'Extension options',
        ], \$formOptions);

        \$this->output->title(sprintf('%s (Block prefix: \"%s\")', \\get_class(\$resolvedFormType->getInnerType()), \$resolvedFormType->getInnerType()->getBlockPrefix()));

        if (\$formOptions) {
            \$this->output->table(\$tableHeaders, \$this->buildTableRows(\$tableHeaders, \$formOptions));
        }

        if (\$this->parents) {
            \$this->output->section('Parent types');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$this->parents));
        }

        if (\$this->extensions) {
            \$this->output->section('Type extensions');
            \$this->output->listing(array_map([\$this, 'formatClassLink'], \$this->extensions));
        }
    }

    protected function describeOption(OptionsResolver \$optionsResolver, array \$options)
    {
        \$definition = \$this->getOptionDefinition(\$optionsResolver, \$options['option']);

        \$dump = new Dumper(\$this->output);
        \$map = [];
        if (\$definition['deprecated']) {
            \$map = [
                'Deprecated' => 'deprecated',
                'Deprecation message' => 'deprecationMessage',
            ];
        }
        \$map += [
            'Required' => 'required',
            'Default' => 'default',
            'Allowed types' => 'allowedTypes',
            'Allowed values' => 'allowedValues',
            'Normalizers' => 'normalizers',
        ];
        \$rows = [];
        foreach (\$map as \$label => \$name) {
            \$value = \\array_key_exists(\$name, \$definition) ? \$dump(\$definition[\$name]) : '-';
            if ('default' === \$name && isset(\$definition['lazy'])) {
                \$value = \"Value: \$value\\n\\nClosure(s): \".\$dump(\$definition['lazy']);
            }

            \$rows[] = [\"<info>\$label</info>\", \$value];
            \$rows[] = new TableSeparator();
        }
        array_pop(\$rows);

        \$this->output->title(sprintf('%s (%s)', \\get_class(\$options['type']), \$options['option']));
        \$this->output->table([], \$rows);
    }

    private function buildTableRows(array \$headers, array \$options): array
    {
        \$tableRows = [];
        \$count = \\count(max(\$options));
        for (\$i = 0; \$i < \$count; ++\$i) {
            \$cells = [];
            foreach (array_keys(\$headers) as \$group) {
                \$option = \$options[\$group][\$i] ?? null;
                if (\\is_string(\$option) && \\in_array(\$option, \$this->requiredOptions, true)) {
                    \$option .= ' <info>(required)</info>';
                }
                \$cells[] = \$option;
            }
            \$tableRows[] = \$cells;
        }

        return \$tableRows;
    }

    private function normalizeAndSortOptionsColumns(array \$options)
    {
        foreach (\$options as \$group => \$opts) {
            \$sorted = false;
            foreach (\$opts as \$class => \$opt) {
                if (\\is_string(\$class)) {
                    unset(\$options[\$group][\$class]);
                }

                if (!\\is_array(\$opt) || 0 === \\count(\$opt)) {
                    continue;
                }

                if (!\$sorted) {
                    \$options[\$group] = [];
                } else {
                    \$options[\$group][] = null;
                }
                \$options[\$group][] = sprintf('<info>%s</info>', (new \\ReflectionClass(\$class))->getShortName());
                \$options[\$group][] = new TableSeparator();

                sort(\$opt);
                \$sorted = true;
                \$options[\$group] = array_merge(\$options[\$group], \$opt);
            }

            if (!\$sorted) {
                sort(\$options[\$group]);
            }
        }

        return \$options;
    }

    private function formatClassLink(string \$class, string \$text = null): string
    {
        if (null === \$text) {
            \$text = \$class;
        }

        if ('' === \$fileLink = \$this->getFileLink(\$class)) {
            return \$text;
        }

        return sprintf('<href=%s>%s</>', \$fileLink, \$text);
    }

    private function getFileLink(string \$class): string
    {
        if (null === \$this->fileLinkFormatter) {
            return '';
        }

        try {
            \$r = new \\ReflectionClass(\$class);
        } catch (\\ReflectionException \$e) {
            return '';
        }

        return (string) \$this->fileLinkFormatter->format(\$r->getFileName(), \$r->getStartLine());
    }
}
", "vendor/symfony/form/Console/Descriptor/TextDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Console/Descriptor/TextDescriptor.php");
    }
}
