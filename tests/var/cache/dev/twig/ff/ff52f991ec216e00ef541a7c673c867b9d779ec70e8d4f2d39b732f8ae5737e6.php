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

/* vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php */
class __TwigTemplate_89f21c6d4a1b593319b4bcb53a837b8010a83e3ce1d16eb1260c0ef7400daf66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Loader\\FilesystemLoader;

/**
 * @author Behnoush Norouzali <behnoush.norouzi@gmail.com>
 *
 * @internal
 */
class NativeFilesystemLoader extends FilesystemLoader
{
    /**
     * {@inheritdoc}
     */
    protected function findTemplate(\$template, \$throw = true)
    {
        try {
            return parent::findTemplate(\$template, \$throw);
        } catch (LoaderError \$e) {
            if ('' === \$template || '@' === \$template[0] || !preg_match('/^(?P<bundle>[^:]*?)(?:Bundle)?:(?P<path>[^:]*+):(?P<template>.+\\.[^\\.]+\\.[^\\.]+)\$/', \$template, \$m)) {
                throw \$e;
            }
            if ('' !== \$m['path']) {
                \$m['template'] = \$m['path'].'/'.\$m['template'];
            }
            if ('' !== \$m['bundle']) {
                \$suggestion = '@'.\$m['bundle'].'/'.\$m['template'];
            } else {
                \$suggestion = \$m['template'];
            }
            if (false === parent::findTemplate(\$suggestion, false)) {
                throw \$e;
            }

            throw new LoaderError(sprintf('Template reference \"%s\" not found, did you mean \"%s\"?', \$template, \$suggestion), -1, null, \$e);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Loader\\FilesystemLoader;

/**
 * @author Behnoush Norouzali <behnoush.norouzi@gmail.com>
 *
 * @internal
 */
class NativeFilesystemLoader extends FilesystemLoader
{
    /**
     * {@inheritdoc}
     */
    protected function findTemplate(\$template, \$throw = true)
    {
        try {
            return parent::findTemplate(\$template, \$throw);
        } catch (LoaderError \$e) {
            if ('' === \$template || '@' === \$template[0] || !preg_match('/^(?P<bundle>[^:]*?)(?:Bundle)?:(?P<path>[^:]*+):(?P<template>.+\\.[^\\.]+\\.[^\\.]+)\$/', \$template, \$m)) {
                throw \$e;
            }
            if ('' !== \$m['path']) {
                \$m['template'] = \$m['path'].'/'.\$m['template'];
            }
            if ('' !== \$m['bundle']) {
                \$suggestion = '@'.\$m['bundle'].'/'.\$m['template'];
            } else {
                \$suggestion = \$m['template'];
            }
            if (false === parent::findTemplate(\$suggestion, false)) {
                throw \$e;
            }

            throw new LoaderError(sprintf('Template reference \"%s\" not found, did you mean \"%s\"?', \$template, \$suggestion), -1, null, \$e);
        }
    }
}
", "vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php");
    }
}
