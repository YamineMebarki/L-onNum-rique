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

/* vendor/phpdocumentor/reflection-common/appveyor.yml */
class __TwigTemplate_c026ca422458ad8192adb4697e043856ff7117a1b1d1b701db271c531841919b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/appveyor.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/appveyor.yml"));

        // line 1
        echo "build: false
clone_folder: c:\\reflectioncommon
max_jobs: 3
platform: x86
pull_requests:
  do_not_increment_build_number: true
version: '{build}.{branch}'
skip_tags: true
branches:
  only:
    - master

environment:
  matrix:
    - php_ver_target: 7.1
    - php_ver_target: 7.2
matrix:
  fast_finish: false

cache:
  - c:\\php -> appveyor.yml
  - '%LOCALAPPDATA%\\Composer\\files'

init:
  - SET PATH=C:\\Program Files\\OpenSSL;c:\\tools\\php;%PATH%
  - SET COMPOSER_NO_INTERACTION=1
  - SET PHP=1
  - SET ANSICON=121x90 (121x90)


install:
  - IF EXIST c:\\tools\\php (SET PHP=0)
  - ps: appveyor-retry cinst --params '\"\"/InstallDir:C:\\tools\\php\"\"' --ignore-checksums -y php --version ((choco search php --exact --all-versions -r | select-string -pattern \$env:php_ver_target | sort { [version](\$_ -split '\\|' | select -last 1) } -Descending | Select-Object -first 1) -replace '[php|]','')
  - cd c:\\tools\\php
  - IF %PHP%==1 copy /Y php.ini-development php.ini
  - IF %PHP%==1 echo max_execution_time=1200 >> php.ini
  - IF %PHP%==1 echo date.timezone=\"UTC\" >> php.ini
  - IF %PHP%==1 echo extension_dir=ext >> php.ini
  - IF %PHP%==1 echo extension=php_curl.dll >> php.ini
  - IF %PHP%==1 echo extension=php_openssl.dll >> php.ini
  - IF %PHP%==1 echo extension=php_mbstring.dll >> php.ini
  - IF %PHP%==1 echo extension=php_fileinfo.dll >> php.ini
  - IF %PHP%==1 echo zend.assertions=1 >> php.ini
  - IF %PHP%==1 echo assert.exception=On >> php.ini
  - IF %PHP%==1 echo @php %%~dp0composer.phar %%* > composer.bat
  - appveyor-retry appveyor DownloadFile https://getcomposer.org/composer.phar
  - cd c:\\reflectioncommon
  - composer install --no-interaction --prefer-dist --no-progress

test_script:
  - cd c:\\reflectioncommon
  - vendor\\bin\\phpunit --no-coverage
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/appveyor.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("build: false
clone_folder: c:\\reflectioncommon
max_jobs: 3
platform: x86
pull_requests:
  do_not_increment_build_number: true
version: '{build}.{branch}'
skip_tags: true
branches:
  only:
    - master

environment:
  matrix:
    - php_ver_target: 7.1
    - php_ver_target: 7.2
matrix:
  fast_finish: false

cache:
  - c:\\php -> appveyor.yml
  - '%LOCALAPPDATA%\\Composer\\files'

init:
  - SET PATH=C:\\Program Files\\OpenSSL;c:\\tools\\php;%PATH%
  - SET COMPOSER_NO_INTERACTION=1
  - SET PHP=1
  - SET ANSICON=121x90 (121x90)


install:
  - IF EXIST c:\\tools\\php (SET PHP=0)
  - ps: appveyor-retry cinst --params '\"\"/InstallDir:C:\\tools\\php\"\"' --ignore-checksums -y php --version ((choco search php --exact --all-versions -r | select-string -pattern \$env:php_ver_target | sort { [version](\$_ -split '\\|' | select -last 1) } -Descending | Select-Object -first 1) -replace '[php|]','')
  - cd c:\\tools\\php
  - IF %PHP%==1 copy /Y php.ini-development php.ini
  - IF %PHP%==1 echo max_execution_time=1200 >> php.ini
  - IF %PHP%==1 echo date.timezone=\"UTC\" >> php.ini
  - IF %PHP%==1 echo extension_dir=ext >> php.ini
  - IF %PHP%==1 echo extension=php_curl.dll >> php.ini
  - IF %PHP%==1 echo extension=php_openssl.dll >> php.ini
  - IF %PHP%==1 echo extension=php_mbstring.dll >> php.ini
  - IF %PHP%==1 echo extension=php_fileinfo.dll >> php.ini
  - IF %PHP%==1 echo zend.assertions=1 >> php.ini
  - IF %PHP%==1 echo assert.exception=On >> php.ini
  - IF %PHP%==1 echo @php %%~dp0composer.phar %%* > composer.bat
  - appveyor-retry appveyor DownloadFile https://getcomposer.org/composer.phar
  - cd c:\\reflectioncommon
  - composer install --no-interaction --prefer-dist --no-progress

test_script:
  - cd c:\\reflectioncommon
  - vendor\\bin\\phpunit --no-coverage
", "vendor/phpdocumentor/reflection-common/appveyor.yml", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/appveyor.yml");
    }
}
