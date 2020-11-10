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

/* vendor/symfony/maker-bundle/appveyor.yml */
class __TwigTemplate_40be1004533d947b2245326238883f20f410a2a6d420f7faf036fe91b1b22bd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/appveyor.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/appveyor.yml"));

        // line 1
        echo "build: false
platform:
    - x64
clone_folder: C:\\projects\\maker-bundle

cache:
    - C:\\projects\\maker-bundle\\vendor -> composer.json
    # Cache chocolatey packages
    - C:\\ProgramData\\chocolatey\\bin -> .appveyor.yml
    - C:\\ProgramData\\chocolatey\\lib -> .appveyor.yml
    # Cache php install
    - C:\\tools\\php -> .appveyor.yml
    - .phpunit -> phpunit

services:
  - mysql

init:
    - SET PATH=C:\\Program Files\\OpenSSL;C:\\tools\\php;%PATH%
    - SET COMPOSER_NO_INTERACTION=1
    - SET PHP=0 # This var is connected to PHP install cache
    - SET ANSICON=121x90 (121x90)

environment:
    TEST_DATABASE_DSN: mysql://root:Password12!@127.0.0.1:3306/test_maker
    matrix:
      - dependencies: highest
        php_ver_target: 7.2.3

install:
    - ps: Set-Service wuauserv -StartupType Manual
    - IF EXIST C:\\tools\\php (SET PHP=1) # Checks for the PHP install being cached
    - IF %PHP%==0 cinst --params '\"\"/InstallDir:C:\\tools\\php\"\"' --ignore-checksums -y php --version %php_ver_target%
    - cd C:\\tools\\php
    - IF %PHP%==0 copy php.ini-development php.ini /Y
    - IF %PHP%==0 echo memory_limit=-1 >> php.ini
    - IF %PHP%==0 echo serialize_precision=14 >> php.ini
    - IF %PHP%==0 echo realpath_cache_size=8192k >> php.ini
    - IF %PHP%==0 echo max_execution_time=1200 >> php.ini
    - IF %PHP%==0 echo date.timezone=\"UTC\" >> php.ini
    - IF %PHP%==0 echo extension_dir=ext >> php.ini
    - IF %PHP%==0 echo opcache.enable_cli=1 >> php.ini
    - IF %PHP%==0 echo extension=php_openssl.dll >> php.ini
    - IF %PHP%==0 echo extension=php_mbstring.dll >> php.ini
    - IF %PHP%==0 echo extension=php_fileinfo.dll >> php.ini
    - IF %PHP%==0 echo extension=php_mysqli.dll >> php.ini
    - IF %PHP%==0 echo extension=php_curl.dll >> php.ini
    - IF %PHP%==0 echo extension=php_pdo_mysql.dll >> php.ini
    - IF %PHP%==0 echo @php %%~dp0composer.phar %%* > composer.bat
    - appveyor-retry appveyor DownloadFile https://getcomposer.org/composer.phar
    - cd C:\\projects\\maker-bundle
    - composer global require --no-progress --no-scripts --no-plugins symfony/flex dev-master
    - IF %dependencies%==highest appveyor-retry composer update --no-progress --no-suggest --ansi
    - vendor/bin/simple-phpunit install

test_script:
    - cd C:\\projects\\maker-bundle
    - vendor/bin/simple-phpunit
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/appveyor.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("build: false
platform:
    - x64
clone_folder: C:\\projects\\maker-bundle

cache:
    - C:\\projects\\maker-bundle\\vendor -> composer.json
    # Cache chocolatey packages
    - C:\\ProgramData\\chocolatey\\bin -> .appveyor.yml
    - C:\\ProgramData\\chocolatey\\lib -> .appveyor.yml
    # Cache php install
    - C:\\tools\\php -> .appveyor.yml
    - .phpunit -> phpunit

services:
  - mysql

init:
    - SET PATH=C:\\Program Files\\OpenSSL;C:\\tools\\php;%PATH%
    - SET COMPOSER_NO_INTERACTION=1
    - SET PHP=0 # This var is connected to PHP install cache
    - SET ANSICON=121x90 (121x90)

environment:
    TEST_DATABASE_DSN: mysql://root:Password12!@127.0.0.1:3306/test_maker
    matrix:
      - dependencies: highest
        php_ver_target: 7.2.3

install:
    - ps: Set-Service wuauserv -StartupType Manual
    - IF EXIST C:\\tools\\php (SET PHP=1) # Checks for the PHP install being cached
    - IF %PHP%==0 cinst --params '\"\"/InstallDir:C:\\tools\\php\"\"' --ignore-checksums -y php --version %php_ver_target%
    - cd C:\\tools\\php
    - IF %PHP%==0 copy php.ini-development php.ini /Y
    - IF %PHP%==0 echo memory_limit=-1 >> php.ini
    - IF %PHP%==0 echo serialize_precision=14 >> php.ini
    - IF %PHP%==0 echo realpath_cache_size=8192k >> php.ini
    - IF %PHP%==0 echo max_execution_time=1200 >> php.ini
    - IF %PHP%==0 echo date.timezone=\"UTC\" >> php.ini
    - IF %PHP%==0 echo extension_dir=ext >> php.ini
    - IF %PHP%==0 echo opcache.enable_cli=1 >> php.ini
    - IF %PHP%==0 echo extension=php_openssl.dll >> php.ini
    - IF %PHP%==0 echo extension=php_mbstring.dll >> php.ini
    - IF %PHP%==0 echo extension=php_fileinfo.dll >> php.ini
    - IF %PHP%==0 echo extension=php_mysqli.dll >> php.ini
    - IF %PHP%==0 echo extension=php_curl.dll >> php.ini
    - IF %PHP%==0 echo extension=php_pdo_mysql.dll >> php.ini
    - IF %PHP%==0 echo @php %%~dp0composer.phar %%* > composer.bat
    - appveyor-retry appveyor DownloadFile https://getcomposer.org/composer.phar
    - cd C:\\projects\\maker-bundle
    - composer global require --no-progress --no-scripts --no-plugins symfony/flex dev-master
    - IF %dependencies%==highest appveyor-retry composer update --no-progress --no-suggest --ansi
    - vendor/bin/simple-phpunit install

test_script:
    - cd C:\\projects\\maker-bundle
    - vendor/bin/simple-phpunit
", "vendor/symfony/maker-bundle/appveyor.yml", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/appveyor.yml");
    }
}
