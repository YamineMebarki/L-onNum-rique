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

/* vendor/ocramius/package-versions/CHANGELOG.md */
class __TwigTemplate_e51994220354768e5de697b1582b90f35472c6b2cbe03175f85b1b1ef46aeca3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/CHANGELOG.md"));

        // line 1
        echo "# CHANGELOG

## 1.1.3 - 2017-09-06

This release fixes a bug that caused PackageVersions to prevent
the `composer remove` and `composer update` commands to fail when
this package is removed.

In addition to that, mutation testing has been added to the suite,
ensuring that the package is accurately and extensively tested.

Total issues resolved: **3**

- [40: Mutation testing, PHP 7.1 testing](https://github.com/Ocramius/PackageVersions/pull/40) thanks to @Ocramius
- [41: Removing this package on install results in file access error](https://github.com/Ocramius/PackageVersions/issues/41) thanks to @Xerkus
- [46: #41 Avoid issues when the package is scheduled for removal](https://github.com/Ocramius/PackageVersions/pull/46) thanks to @Jean85

## 1.1.2 - 2016-12-30

This release fixes a bug that caused PackageVersions to be enabled
even when it was part of a globally installed package.

Total issues resolved: **3**

- [35: remove all temp directories](https://github.com/Ocramius/PackageVersions/pull/35)
- [38: Interferes with other projects when installed globally](https://github.com/Ocramius/PackageVersions/issues/38)
- [39: Ignore the global plugin when updating local projects](https://github.com/Ocramius/PackageVersions/pull/39)

## 1.1.1 - 2016-07-25

This release removes the [`\"files\"`](https://getcomposer.org/doc/04-schema.md#files) directive from
[`composer.json`](https://github.com/Ocramius/PackageVersions/commit/86f2636f7c5e7b56fa035fa3826d5fcf80b6dc72),
as it is no longer needed for `composer install --classmap-authoritative`.
Also, that directive was causing issues with HHVM installations, since
PackageVersions is not compatible with it.

Total issues resolved: **1**

- [34: Fatal error during travis build after update to 1.1.0](https://github.com/Ocramius/PackageVersions/issues/34)

## 1.1.0 - 2016-07-22

This release introduces support for running `composer install --classmap-authoritative`
and `composer install --no-scripts`. Please note that performance
while using these modes may be degraded, but the package will
still work.

Additionally, the package was tuned to prevent the plugin from
running twice at installation.

Total issues resolved: **10**

- [18: Fails when using composer install --no-scripts](https://github.com/Ocramius/PackageVersions/issues/18)
- [20: CS (spacing)](https://github.com/Ocramius/PackageVersions/pull/20)
- [22: Document the way the require-dev section is treated](https://github.com/Ocramius/PackageVersions/issues/22)
- [23: Underline that composer.lock is used as source of information](https://github.com/Ocramius/PackageVersions/pull/23)
- [27: Fix incompatibility with --classmap-authoritative](https://github.com/Ocramius/PackageVersions/pull/27)
- [29: mention optimize-autoloader composer.json config option in README](https://github.com/Ocramius/PackageVersions/pull/29)
- [30: The version class is generated twice during composer update](https://github.com/Ocramius/PackageVersions/issues/30)
- [31: Remove double register of the event listeners](https://github.com/Ocramius/PackageVersions/pull/31)
- [32: Update the usage of mock APIs to use the new API](https://github.com/Ocramius/PackageVersions/pull/32)
- [33: Fix for #18 -  support running with --no-scripts flag](https://github.com/Ocramius/PackageVersions/pull/33)

## 1.0.4 - 2016-04-23

This release includes a fix/workaround for composer/composer#5237,
which causes `ocramius/package-versions` to sometimes generate a
`Versions` class with malformed name (something like
`Versions_composer_tmp0`) when running `composer require <package-name>`.

Total issues resolved: **2**

- [16: Workaround for composer/composer#5237 - class parsing](https://github.com/Ocramius/PackageVersions/pull/16)
- [17: Weird Class name being generated](https://github.com/Ocramius/PackageVersions/issues/17)

## 1.0.3 - 2016-02-26

This release fixes an issue related to concurrent autoloader
re-generation caused by multiple composer plugins being installed.
The issue was solved by removing autoloader re-generation from this
package, but it may still affect other packages.

It is now recommended that you run `composer dump-autoload --optimize`
after installation when using this particular package.
Please note that `composer (install|update) -o` is not sufficient
to avoid autoload overhead when using this particular package.

Total issues resolved: **1**

- [15: Remove autoload re-dump optimization](https://github.com/Ocramius/PackageVersions/pull/15)

## 1.0.2 - 2016-02-24

This release fixes issues related to installing the component without
any dev dependencies or with packages that don't have a source or dist
reference, which is usual with packages defined directly in the
`composer.json`.

Total issues resolved: **3**

- [11: fix composer install --no-dev PHP7](https://github.com/Ocramius/PackageVersions/pull/11)
- [12: Packages don't always have a source/reference](https://github.com/Ocramius/PackageVersions/issues/12)
- [13: Fix #12 - support dist and missing package version references](https://github.com/Ocramius/PackageVersions/pull/13)

## 1.0.1 - 2016-02-01

This release fixes an issue related with composer updates to
already installed versions.
Using `composer require` within a package that already used
`ocramius/package-versions` caused the installation to be unable
to write the `PackageVersions\\Versions` class to a file.

Total issues resolved: **6**

- [2: remove unused use statement](https://github.com/Ocramius/PackageVersions/pull/2)
- [3: Remove useless files from dist package](https://github.com/Ocramius/PackageVersions/pull/3)
- [5: failed to open stream: phar error: write operations disabled by the php.ini setting phar.readonly](https://github.com/Ocramius/PackageVersions/issues/5)
- [6: Fix/#5 use composer vendor dir](https://github.com/Ocramius/PackageVersions/pull/6)
- [7: Hotfix - #5 generate package versions also when in phar context](https://github.com/Ocramius/PackageVersions/pull/7)
- [8: Versions class should be ignored by VCS, as it is an install-time artifact](https://github.com/Ocramius/PackageVersions/pull/8)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/package-versions/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# CHANGELOG

## 1.1.3 - 2017-09-06

This release fixes a bug that caused PackageVersions to prevent
the `composer remove` and `composer update` commands to fail when
this package is removed.

In addition to that, mutation testing has been added to the suite,
ensuring that the package is accurately and extensively tested.

Total issues resolved: **3**

- [40: Mutation testing, PHP 7.1 testing](https://github.com/Ocramius/PackageVersions/pull/40) thanks to @Ocramius
- [41: Removing this package on install results in file access error](https://github.com/Ocramius/PackageVersions/issues/41) thanks to @Xerkus
- [46: #41 Avoid issues when the package is scheduled for removal](https://github.com/Ocramius/PackageVersions/pull/46) thanks to @Jean85

## 1.1.2 - 2016-12-30

This release fixes a bug that caused PackageVersions to be enabled
even when it was part of a globally installed package.

Total issues resolved: **3**

- [35: remove all temp directories](https://github.com/Ocramius/PackageVersions/pull/35)
- [38: Interferes with other projects when installed globally](https://github.com/Ocramius/PackageVersions/issues/38)
- [39: Ignore the global plugin when updating local projects](https://github.com/Ocramius/PackageVersions/pull/39)

## 1.1.1 - 2016-07-25

This release removes the [`\"files\"`](https://getcomposer.org/doc/04-schema.md#files) directive from
[`composer.json`](https://github.com/Ocramius/PackageVersions/commit/86f2636f7c5e7b56fa035fa3826d5fcf80b6dc72),
as it is no longer needed for `composer install --classmap-authoritative`.
Also, that directive was causing issues with HHVM installations, since
PackageVersions is not compatible with it.

Total issues resolved: **1**

- [34: Fatal error during travis build after update to 1.1.0](https://github.com/Ocramius/PackageVersions/issues/34)

## 1.1.0 - 2016-07-22

This release introduces support for running `composer install --classmap-authoritative`
and `composer install --no-scripts`. Please note that performance
while using these modes may be degraded, but the package will
still work.

Additionally, the package was tuned to prevent the plugin from
running twice at installation.

Total issues resolved: **10**

- [18: Fails when using composer install --no-scripts](https://github.com/Ocramius/PackageVersions/issues/18)
- [20: CS (spacing)](https://github.com/Ocramius/PackageVersions/pull/20)
- [22: Document the way the require-dev section is treated](https://github.com/Ocramius/PackageVersions/issues/22)
- [23: Underline that composer.lock is used as source of information](https://github.com/Ocramius/PackageVersions/pull/23)
- [27: Fix incompatibility with --classmap-authoritative](https://github.com/Ocramius/PackageVersions/pull/27)
- [29: mention optimize-autoloader composer.json config option in README](https://github.com/Ocramius/PackageVersions/pull/29)
- [30: The version class is generated twice during composer update](https://github.com/Ocramius/PackageVersions/issues/30)
- [31: Remove double register of the event listeners](https://github.com/Ocramius/PackageVersions/pull/31)
- [32: Update the usage of mock APIs to use the new API](https://github.com/Ocramius/PackageVersions/pull/32)
- [33: Fix for #18 -  support running with --no-scripts flag](https://github.com/Ocramius/PackageVersions/pull/33)

## 1.0.4 - 2016-04-23

This release includes a fix/workaround for composer/composer#5237,
which causes `ocramius/package-versions` to sometimes generate a
`Versions` class with malformed name (something like
`Versions_composer_tmp0`) when running `composer require <package-name>`.

Total issues resolved: **2**

- [16: Workaround for composer/composer#5237 - class parsing](https://github.com/Ocramius/PackageVersions/pull/16)
- [17: Weird Class name being generated](https://github.com/Ocramius/PackageVersions/issues/17)

## 1.0.3 - 2016-02-26

This release fixes an issue related to concurrent autoloader
re-generation caused by multiple composer plugins being installed.
The issue was solved by removing autoloader re-generation from this
package, but it may still affect other packages.

It is now recommended that you run `composer dump-autoload --optimize`
after installation when using this particular package.
Please note that `composer (install|update) -o` is not sufficient
to avoid autoload overhead when using this particular package.

Total issues resolved: **1**

- [15: Remove autoload re-dump optimization](https://github.com/Ocramius/PackageVersions/pull/15)

## 1.0.2 - 2016-02-24

This release fixes issues related to installing the component without
any dev dependencies or with packages that don't have a source or dist
reference, which is usual with packages defined directly in the
`composer.json`.

Total issues resolved: **3**

- [11: fix composer install --no-dev PHP7](https://github.com/Ocramius/PackageVersions/pull/11)
- [12: Packages don't always have a source/reference](https://github.com/Ocramius/PackageVersions/issues/12)
- [13: Fix #12 - support dist and missing package version references](https://github.com/Ocramius/PackageVersions/pull/13)

## 1.0.1 - 2016-02-01

This release fixes an issue related with composer updates to
already installed versions.
Using `composer require` within a package that already used
`ocramius/package-versions` caused the installation to be unable
to write the `PackageVersions\\Versions` class to a file.

Total issues resolved: **6**

- [2: remove unused use statement](https://github.com/Ocramius/PackageVersions/pull/2)
- [3: Remove useless files from dist package](https://github.com/Ocramius/PackageVersions/pull/3)
- [5: failed to open stream: phar error: write operations disabled by the php.ini setting phar.readonly](https://github.com/Ocramius/PackageVersions/issues/5)
- [6: Fix/#5 use composer vendor dir](https://github.com/Ocramius/PackageVersions/pull/6)
- [7: Hotfix - #5 generate package versions also when in phar context](https://github.com/Ocramius/PackageVersions/pull/7)
- [8: Versions class should be ignored by VCS, as it is an install-time artifact](https://github.com/Ocramius/PackageVersions/pull/8)
", "vendor/ocramius/package-versions/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/ocramius/package-versions/CHANGELOG.md");
    }
}
