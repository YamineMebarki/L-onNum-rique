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

/* vendor/doctrine/data-fixtures/CHANGELOG.md */
class __TwigTemplate_833a524ef40ca5e30431c05030d936314fa69bfc605ce3365b974b3f56b7820d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/CHANGELOG.md"));

        // line 1
        echo "# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [1.3.0] - 2017-11-27

### Fixed
  - [248: Rename example classes names for consistency](https://github.com/doctrine/data-fixtures/pull/248) - @Kwadz
  - [253: Fix syntax highlighting on README](https://github.com/doctrine/data-fixtures/pull/253) - @fefas
  - [269: Remove tabs](https://github.com/doctrine/data-fixtures/pull/269) - @garak

### Changed
  - [266: Bump PHP requirement to 7.1](https://github.com/doctrine/data-fixtures/pull/266) - @alcaeus

### Added
  - [255: Added handling of PHPCR documents on method `getIdentifier()`](https://github.com/doctrine/data-fixtures/pull/255) - @aemaething
  - [274: Hook point to control creating fixtures objects](https://github.com/doctrine/data-fixtures/pull/274) - @weaverryan

### Fixed
  - [572: Only show generated migration in verbose mode](https://github.com/doctrine/migrations/pull/572) - @alcaeus

## [1.6.0] - 2017-11-09

### Fixed
  - [536: Fix typo in exception message](https://github.com/doctrine/migrations/pull/536) - @mantiz
  - [545: Allow nullable custom template](https://github.com/doctrine/migrations/pull/545) - @PapsOu
  - [560: Fix `--dry-run` and `--write-sql` with `addSql`](https://github.com/doctrine/migrations/pull/560) - @mikeSimonson
  - [569: Allow using absolute paths for custom template](https://github.com/doctrine/migrations/pull/569) - @alcaeus

### Changed
  - [537: Require PHP 7.1](https://github.com/doctrine/migrations/pull/537) - @lcobucci
  - [563: Remove copyright headers](https://github.com/doctrine/migrations/pull/563) - @mikeSimonson
  - [534: Change RecursiveRegexFinder to follow Symlinks](https://github.com/doctrine/migrations/pull/534) - @burci

### Added
  - [506: Add migration events](https://github.com/doctrine/migrations/pull/506) - @chrisguitarguy
  - [509: Add delta in migrate command](https://github.com/doctrine/migrations/pull/509) - @Safranil
  - [535: Allow changing migration class template in generate command](https://github.com/doctrine/migrations/pull/535) - @PapsOu
  - [542: Enable phpcs to ensure coding style](https://github.com/doctrine/migrations/pull/542) - @lcobucci
  - [562: Allow providing a path for file dump](https://github.com/doctrine/migrations/pull/562) - @mikeSimonson
  - [565: Allow Symfony 4](https://github.com/doctrine/migrations/565) - @weaverryan
  - [568: Add `ConfigurationHelperInterface` to allow overriding internal class](https://github.com/doctrine/migrations/pull/568) - @alcaeus
  - [571: Allow changing migration class template in diff command](https://github.com/doctrine/migrations/pull/571) - @alcaeus

## [1.5.0] - 2016-12-25

### Fixed
  - [447: Fix typo in error code](https://github.com/doctrine/migrations/pull/447) thanks to @funivan
  - [448: Removed unused import](https://github.com/doctrine/migrations/pull/448) thanks to @localheinz
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [449: Use the class keyword](https://github.com/doctrine/migrations/pull/449) thanks to @localheinz
  - [453: Use better assertions](https://github.com/doctrine/migrations/pull/453) thanks to @localheinz
  - [452: Fix the visibility of the AbstractTest](https://github.com/doctrine/migrations/pull/452) thanks to @localheinz
  - [450: Use the short array syntax](https://github.com/doctrine/migrations/pull/450) thanks to @localheinz
  - [464: Clean the github autogenerated zip archive](https://github.com/doctrine/migrations/pull/464) thanks to @mlocati
  - [457: Fix an issue where the migration wheren't sorted propely](https://github.com/doctrine/migrations/pull/457) thanks to @JHGitty, @Charles68
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [471: Fix loading the configuration from a php file](https://github.com/doctrine/migrations/pull/471) thanks to @aaa2000
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [472: Change comment marker a cross platform one ](https://github.com/doctrine/migrations/pull/472) thanks to @aaa2000
  - [476: Add test for the execute command](https://github.com/doctrine/migrations/pull/476) thanks to @chrisguitarguy
  - [470: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/470) thanks to @abacaphiliac
  - [489: Better help message in the execute command](https://github.com/doctrine/migrations/pull/489) thanks to @eko
  - [500: Updating the dev dependencies](https://github.com/doctrine/migrations/pull/500) thanks to @mikeSimonson
  - [501: Fix a bug in a rarely used message call](https://github.com/doctrine/migrations/pull/501) thanks to @Seldaek

### Changed
  - [478: Changed the default generated version number to UTC](https://github.com/doctrine/migrations/pull/446) thanks to @c960657
  - [479: Explicitly connecting to support master slave connections](https://github.com/doctrine/migrations/pull/479) thanks to @chrisguitarguy
  - [482: Use strict comparaison in the generated migrations](https://github.com/doctrine/migrations/pull/482) thanks to @tifabien

### Added
  - [470: Add uptodate command](https://github.com/doctrine/migrations/pull/470) thanks to @abacaphiliac
  - [477: Add parameters to the output of the dry run migrations](https://github.com/doctrine/migrations/pull/477) thanks to @chrisguitarguy
  - [497: Show the content of the generated file on the console](https://github.com/doctrine/migrations/pull/497) thanks to @ErikTrapman
  - [480: Don't prompt the user for confirmation when there is nothing to do](https://github.com/doctrine/migrations/pull/480) thanks to @chrisguitarguy


## [1.4.1] - 2016-03-14
### Fixed
  - [439: Add missing dependency in the phar build](https://github.com/doctrine/migrations/pull/439)


## [1.4.0] - 2016-02-23
### Added
  - [431: Formatted diffs](https://github.com/doctrine/migrations/pull/431)
  - [437: Allowing to set the column name from config too](https://github.com/doctrine/migrations/pull/437)

## [1.3.1] - 2016-02-23
### Fixed
  - [433: Fix: ExecuteCommand by making sure that it autoload the versions](https://github.com/doctrine/migrations/pull/433)
  - [434: Fixing an issue in the order at which some configuration key are loaded](https://github.com/doctrine/migrations/pull/434)

### Changed
  - [429: code refactoring for clarity](https://github.com/doctrine/migrations/pull/429)
  - [428: code refactoring for clarity](https://github.com/doctrine/migrations/pull/428)

### Added
  - [425: ProxyManager ~2.0 is also compatible with migrations](https://github.com/doctrine/migrations/pull/425)


## [1.3.0] - 2016-01-23
### Fixed
  - [421: Fix issue with some method when the migrations were not loaded](https://github.com/doctrine/migrations/pull/421)
  - [405: Correcting composer constraints: allowing PHP 7, dropping 5.4 support](https://github.com/doctrine/migrations/pull/405)
  - [406: putting the composer.json back in the archive](https://github.com/doctrine/migrations/pull/406)

### Changed
  - [233: Separate Configuration Objects from Configuration File Loading](https://github.com/doctrine/migrations/issues/233)
  - [407: Replacing the Schema by a proxy](https://github.com/doctrine/migrations/pull/407)
  - [422: Refactor the getConnection into a chainloader](https://github.com/doctrine/migrations/pull/422)
  - [Dropped the support for php 5.4](https://github.com/doctrine/migrations/pull/393)
  - [Again make the phar more than 3 times smaller](https://github.com/doctrine/migrations/pull/396)

### Added
  - [404: add possibility to read doctrine's config/cli-paypal.php](https://github.com/doctrine/migrations/pull/404)
  - [409: Add a failing test case for an edge case with the write-sql option](https://github.com/doctrine/migrations/pull/409)
  - [424: Adding a regression test for the configuration](https://github.com/doctrine/migrations/pull/424)
  - [391: Give the possibility to override the Migration template](https://github.com/doctrine/migrations/pull/391)

## [1.2.2] - 2016-01-07
### Fixed
  - [Fix the write-sql option in the version class too](https://github.com/doctrine/migrations/commit/91043f742da8506ab7115a1d14247ce26375f6f5)

## [1.2.1] - 2015-12-23
### Fixed
  - [Fix the write-sql option](https://github.com/doctrine/migrations/pull/400)

## [1.2.0] - 2015-12-15
### Fixed
  - [fix \"all migrated versions shown as unavailable executed\" ](https://github.com/doctrine/migrations/commit/875849e2a80d37dc8bf5dd0663e464b6789e3b56)
  - [Prevent the use of 0 as migration name as it is used internally and conflict](http://github.com/doctrine/migrations/commit/5df49c5ad5dc2265401a54a3b9e6ecb3e7cda8d0)
  - [composer: drop symfony/console from suggested packages, since it's required package](http://github.com/doctrine/migrations/commit/d263c7bfac7188009ab0717ed5aa6577e80)
  - [fix spaces and complete missing file-docblocks](http://github.com/doctrine/migrations/commit/4b68a69c3e35492b36ec140ebb216cdb80ffe655)
  - [RecursiveDirectoryIterator don't obtain some order of the file list.](http://github.com/doctrine/migrations/commit/ed95c05c14381e64404f1135763fcc9b65317b96)
  - [Fix the yml parser issue with unescaped backslash in double quoted string](http://github.com/doctrine/migrations/commit/af3cce7d2e490ead821fcbdb54b4772b4913ee1d)

### Changed
  - [Adding compression to the generation of the phar](http://github.com/doctrine/migrations/commit/70730ff8655f0be89ce0f06d1e279930d7eb2550)
  - [tests: move autoload of tests to composer](http://github.com/doctrine/migrations/commit/3a4f8368e4b7b95d2e6c51c26f6dc41bb05a5ce5)
  - [travis: drop PHP 7.0 from allowed failures, it passes well](http://github.com/doctrine/migrations/commit/57ec2f071a7a840c554058b77f2089893d06ba23)
  - [Revert the use of exec to run sql queries](http://github.com/doctrine/migrations/commit/0af6e6e705b905a56cbed26cb5c17faad4c2c04f)

### Added
  - [Adding a little script to prepare and generate the phar](http://github.com/doctrine/migrations/commit/3a8ef413e7f8a42d4e0f3d32d30601b26fb27e60)
  - [Configuration: check if migration class exists added](http://github.com/doctrine/migrations/commit/a53d7c83b319341c985d2a21950e260fa55b0b8d)
  - [Made composer.json compatible with SF 3.0](http://github.com/doctrine/migrations/commit/4e909f2e661a8414a3e04ce987a09c9e849cd13f)
  - [Added configurable version column name](http://github.com/doctrine/migrations/commit/02ddf4318b84a20bb0e3486acfc6e6f41cc63426)

## [1.1.0] - 2015-09-29
### Fixed
  - [Switch unexisting <warning> tag to <comment>](http://github.com/doctrine/migrations/commit/93a81ff0dcc858de4df5c17d97f2f24b3bfa3c36)
  - [Ensure that Yaml::parse return an array as it can apparently return a string](http://github.com/doctrine/migrations/commit/1499f0cc3e5f5b20a510ba8f0779d5c68a9e5084)
  - [Avoid uploading code coverage to Scrutinizer for HHVM and PHP 7](http://github.com/doctrine/migrations/commit/d47d65021dcb711480bf27f6d0bbba138e220f12)
  - [Improve the Travis configuration by persisting the composer cache](http://github.com/doctrine/migrations/commit/bda0509b479ae6605b8fa749b0999b4ce2ff8c04)
  - [Keep the license file in the downloadable archives](https://github.com/doctrine/migrations/commit/dfbee38e004899bc078d5d47b13bea53799fca1e#diff-fc723d30b02a4cca7a534518111c1a66)

### Changed
  - [Use short array syntax](http://github.com/doctrine/migrations/commit/50a6e18c95ff617325229a4a649d65c1a11445bc)
  - [composer: use PSR-4 autoload](http://github.com/doctrine/migrations/commit/7fb8d301b2f4d4a564433165e0604b7d34013844)
  - [refactoring the configuration loading](http://github.com/doctrine/migrations/commit/e95b277111c74cfe65eb959d4471f45a815e1ece)
  - [Drop support for php 5.3](https://github.com/doctrine/migrations/commit/0e60856a10e8b510daa612fe25f6245aece77e68)
  - [compressing the phar so that it's half the size now](https://github.com/doctrine/migrations/commit/70730ff8655f0be89ce0f06d1e279930d7eb2550)

### Added
  - [Added the ability to auto create migrations in a folder by month and year](http://github.com/doctrine/migrations/commit/0b8e40868e12a36de7f689add61857b9ba29c4bc)
  - [Set default name for configuration helper](http://github.com/doctrine/migrations/commit/1f3592f2f126a022db275192f17b8d5c01f19822)
  - [Added ability to load config from php array or json files.](http://github.com/doctrine/migrations/commit/8cf01d623f9eb3728ba86c22970347107a8f0be7)
  - [Added the possibility to inject the OutputWriter after instantiation](https://github.com/doctrine/migrations/pull/342)
  - [Added the --allow-no-migration option to avoid throwing an exception if no migrations are found](https://github.com/doctrine/migrations/commit/a9ec86faa3a3f7f592a633af43b6ef6c9f358239#diff-0a4648a19ba565cda76b349e89552a9b)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [1.3.0] - 2017-11-27

### Fixed
  - [248: Rename example classes names for consistency](https://github.com/doctrine/data-fixtures/pull/248) - @Kwadz
  - [253: Fix syntax highlighting on README](https://github.com/doctrine/data-fixtures/pull/253) - @fefas
  - [269: Remove tabs](https://github.com/doctrine/data-fixtures/pull/269) - @garak

### Changed
  - [266: Bump PHP requirement to 7.1](https://github.com/doctrine/data-fixtures/pull/266) - @alcaeus

### Added
  - [255: Added handling of PHPCR documents on method `getIdentifier()`](https://github.com/doctrine/data-fixtures/pull/255) - @aemaething
  - [274: Hook point to control creating fixtures objects](https://github.com/doctrine/data-fixtures/pull/274) - @weaverryan

### Fixed
  - [572: Only show generated migration in verbose mode](https://github.com/doctrine/migrations/pull/572) - @alcaeus

## [1.6.0] - 2017-11-09

### Fixed
  - [536: Fix typo in exception message](https://github.com/doctrine/migrations/pull/536) - @mantiz
  - [545: Allow nullable custom template](https://github.com/doctrine/migrations/pull/545) - @PapsOu
  - [560: Fix `--dry-run` and `--write-sql` with `addSql`](https://github.com/doctrine/migrations/pull/560) - @mikeSimonson
  - [569: Allow using absolute paths for custom template](https://github.com/doctrine/migrations/pull/569) - @alcaeus

### Changed
  - [537: Require PHP 7.1](https://github.com/doctrine/migrations/pull/537) - @lcobucci
  - [563: Remove copyright headers](https://github.com/doctrine/migrations/pull/563) - @mikeSimonson
  - [534: Change RecursiveRegexFinder to follow Symlinks](https://github.com/doctrine/migrations/pull/534) - @burci

### Added
  - [506: Add migration events](https://github.com/doctrine/migrations/pull/506) - @chrisguitarguy
  - [509: Add delta in migrate command](https://github.com/doctrine/migrations/pull/509) - @Safranil
  - [535: Allow changing migration class template in generate command](https://github.com/doctrine/migrations/pull/535) - @PapsOu
  - [542: Enable phpcs to ensure coding style](https://github.com/doctrine/migrations/pull/542) - @lcobucci
  - [562: Allow providing a path for file dump](https://github.com/doctrine/migrations/pull/562) - @mikeSimonson
  - [565: Allow Symfony 4](https://github.com/doctrine/migrations/565) - @weaverryan
  - [568: Add `ConfigurationHelperInterface` to allow overriding internal class](https://github.com/doctrine/migrations/pull/568) - @alcaeus
  - [571: Allow changing migration class template in diff command](https://github.com/doctrine/migrations/pull/571) - @alcaeus

## [1.5.0] - 2016-12-25

### Fixed
  - [447: Fix typo in error code](https://github.com/doctrine/migrations/pull/447) thanks to @funivan
  - [448: Removed unused import](https://github.com/doctrine/migrations/pull/448) thanks to @localheinz
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [449: Use the class keyword](https://github.com/doctrine/migrations/pull/449) thanks to @localheinz
  - [453: Use better assertions](https://github.com/doctrine/migrations/pull/453) thanks to @localheinz
  - [452: Fix the visibility of the AbstractTest](https://github.com/doctrine/migrations/pull/452) thanks to @localheinz
  - [450: Use the short array syntax](https://github.com/doctrine/migrations/pull/450) thanks to @localheinz
  - [464: Clean the github autogenerated zip archive](https://github.com/doctrine/migrations/pull/464) thanks to @mlocati
  - [457: Fix an issue where the migration wheren't sorted propely](https://github.com/doctrine/migrations/pull/457) thanks to @JHGitty, @Charles68
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [471: Fix loading the configuration from a php file](https://github.com/doctrine/migrations/pull/471) thanks to @aaa2000
  - [451: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/451) thanks to @localheinz
  - [472: Change comment marker a cross platform one ](https://github.com/doctrine/migrations/pull/472) thanks to @aaa2000
  - [476: Add test for the execute command](https://github.com/doctrine/migrations/pull/476) thanks to @chrisguitarguy
  - [470: Case insensitive method calls and types](https://github.com/doctrine/migrations/pull/470) thanks to @abacaphiliac
  - [489: Better help message in the execute command](https://github.com/doctrine/migrations/pull/489) thanks to @eko
  - [500: Updating the dev dependencies](https://github.com/doctrine/migrations/pull/500) thanks to @mikeSimonson
  - [501: Fix a bug in a rarely used message call](https://github.com/doctrine/migrations/pull/501) thanks to @Seldaek

### Changed
  - [478: Changed the default generated version number to UTC](https://github.com/doctrine/migrations/pull/446) thanks to @c960657
  - [479: Explicitly connecting to support master slave connections](https://github.com/doctrine/migrations/pull/479) thanks to @chrisguitarguy
  - [482: Use strict comparaison in the generated migrations](https://github.com/doctrine/migrations/pull/482) thanks to @tifabien

### Added
  - [470: Add uptodate command](https://github.com/doctrine/migrations/pull/470) thanks to @abacaphiliac
  - [477: Add parameters to the output of the dry run migrations](https://github.com/doctrine/migrations/pull/477) thanks to @chrisguitarguy
  - [497: Show the content of the generated file on the console](https://github.com/doctrine/migrations/pull/497) thanks to @ErikTrapman
  - [480: Don't prompt the user for confirmation when there is nothing to do](https://github.com/doctrine/migrations/pull/480) thanks to @chrisguitarguy


## [1.4.1] - 2016-03-14
### Fixed
  - [439: Add missing dependency in the phar build](https://github.com/doctrine/migrations/pull/439)


## [1.4.0] - 2016-02-23
### Added
  - [431: Formatted diffs](https://github.com/doctrine/migrations/pull/431)
  - [437: Allowing to set the column name from config too](https://github.com/doctrine/migrations/pull/437)

## [1.3.1] - 2016-02-23
### Fixed
  - [433: Fix: ExecuteCommand by making sure that it autoload the versions](https://github.com/doctrine/migrations/pull/433)
  - [434: Fixing an issue in the order at which some configuration key are loaded](https://github.com/doctrine/migrations/pull/434)

### Changed
  - [429: code refactoring for clarity](https://github.com/doctrine/migrations/pull/429)
  - [428: code refactoring for clarity](https://github.com/doctrine/migrations/pull/428)

### Added
  - [425: ProxyManager ~2.0 is also compatible with migrations](https://github.com/doctrine/migrations/pull/425)


## [1.3.0] - 2016-01-23
### Fixed
  - [421: Fix issue with some method when the migrations were not loaded](https://github.com/doctrine/migrations/pull/421)
  - [405: Correcting composer constraints: allowing PHP 7, dropping 5.4 support](https://github.com/doctrine/migrations/pull/405)
  - [406: putting the composer.json back in the archive](https://github.com/doctrine/migrations/pull/406)

### Changed
  - [233: Separate Configuration Objects from Configuration File Loading](https://github.com/doctrine/migrations/issues/233)
  - [407: Replacing the Schema by a proxy](https://github.com/doctrine/migrations/pull/407)
  - [422: Refactor the getConnection into a chainloader](https://github.com/doctrine/migrations/pull/422)
  - [Dropped the support for php 5.4](https://github.com/doctrine/migrations/pull/393)
  - [Again make the phar more than 3 times smaller](https://github.com/doctrine/migrations/pull/396)

### Added
  - [404: add possibility to read doctrine's config/cli-paypal.php](https://github.com/doctrine/migrations/pull/404)
  - [409: Add a failing test case for an edge case with the write-sql option](https://github.com/doctrine/migrations/pull/409)
  - [424: Adding a regression test for the configuration](https://github.com/doctrine/migrations/pull/424)
  - [391: Give the possibility to override the Migration template](https://github.com/doctrine/migrations/pull/391)

## [1.2.2] - 2016-01-07
### Fixed
  - [Fix the write-sql option in the version class too](https://github.com/doctrine/migrations/commit/91043f742da8506ab7115a1d14247ce26375f6f5)

## [1.2.1] - 2015-12-23
### Fixed
  - [Fix the write-sql option](https://github.com/doctrine/migrations/pull/400)

## [1.2.0] - 2015-12-15
### Fixed
  - [fix \"all migrated versions shown as unavailable executed\" ](https://github.com/doctrine/migrations/commit/875849e2a80d37dc8bf5dd0663e464b6789e3b56)
  - [Prevent the use of 0 as migration name as it is used internally and conflict](http://github.com/doctrine/migrations/commit/5df49c5ad5dc2265401a54a3b9e6ecb3e7cda8d0)
  - [composer: drop symfony/console from suggested packages, since it's required package](http://github.com/doctrine/migrations/commit/d263c7bfac7188009ab0717ed5aa6577e80)
  - [fix spaces and complete missing file-docblocks](http://github.com/doctrine/migrations/commit/4b68a69c3e35492b36ec140ebb216cdb80ffe655)
  - [RecursiveDirectoryIterator don't obtain some order of the file list.](http://github.com/doctrine/migrations/commit/ed95c05c14381e64404f1135763fcc9b65317b96)
  - [Fix the yml parser issue with unescaped backslash in double quoted string](http://github.com/doctrine/migrations/commit/af3cce7d2e490ead821fcbdb54b4772b4913ee1d)

### Changed
  - [Adding compression to the generation of the phar](http://github.com/doctrine/migrations/commit/70730ff8655f0be89ce0f06d1e279930d7eb2550)
  - [tests: move autoload of tests to composer](http://github.com/doctrine/migrations/commit/3a4f8368e4b7b95d2e6c51c26f6dc41bb05a5ce5)
  - [travis: drop PHP 7.0 from allowed failures, it passes well](http://github.com/doctrine/migrations/commit/57ec2f071a7a840c554058b77f2089893d06ba23)
  - [Revert the use of exec to run sql queries](http://github.com/doctrine/migrations/commit/0af6e6e705b905a56cbed26cb5c17faad4c2c04f)

### Added
  - [Adding a little script to prepare and generate the phar](http://github.com/doctrine/migrations/commit/3a8ef413e7f8a42d4e0f3d32d30601b26fb27e60)
  - [Configuration: check if migration class exists added](http://github.com/doctrine/migrations/commit/a53d7c83b319341c985d2a21950e260fa55b0b8d)
  - [Made composer.json compatible with SF 3.0](http://github.com/doctrine/migrations/commit/4e909f2e661a8414a3e04ce987a09c9e849cd13f)
  - [Added configurable version column name](http://github.com/doctrine/migrations/commit/02ddf4318b84a20bb0e3486acfc6e6f41cc63426)

## [1.1.0] - 2015-09-29
### Fixed
  - [Switch unexisting <warning> tag to <comment>](http://github.com/doctrine/migrations/commit/93a81ff0dcc858de4df5c17d97f2f24b3bfa3c36)
  - [Ensure that Yaml::parse return an array as it can apparently return a string](http://github.com/doctrine/migrations/commit/1499f0cc3e5f5b20a510ba8f0779d5c68a9e5084)
  - [Avoid uploading code coverage to Scrutinizer for HHVM and PHP 7](http://github.com/doctrine/migrations/commit/d47d65021dcb711480bf27f6d0bbba138e220f12)
  - [Improve the Travis configuration by persisting the composer cache](http://github.com/doctrine/migrations/commit/bda0509b479ae6605b8fa749b0999b4ce2ff8c04)
  - [Keep the license file in the downloadable archives](https://github.com/doctrine/migrations/commit/dfbee38e004899bc078d5d47b13bea53799fca1e#diff-fc723d30b02a4cca7a534518111c1a66)

### Changed
  - [Use short array syntax](http://github.com/doctrine/migrations/commit/50a6e18c95ff617325229a4a649d65c1a11445bc)
  - [composer: use PSR-4 autoload](http://github.com/doctrine/migrations/commit/7fb8d301b2f4d4a564433165e0604b7d34013844)
  - [refactoring the configuration loading](http://github.com/doctrine/migrations/commit/e95b277111c74cfe65eb959d4471f45a815e1ece)
  - [Drop support for php 5.3](https://github.com/doctrine/migrations/commit/0e60856a10e8b510daa612fe25f6245aece77e68)
  - [compressing the phar so that it's half the size now](https://github.com/doctrine/migrations/commit/70730ff8655f0be89ce0f06d1e279930d7eb2550)

### Added
  - [Added the ability to auto create migrations in a folder by month and year](http://github.com/doctrine/migrations/commit/0b8e40868e12a36de7f689add61857b9ba29c4bc)
  - [Set default name for configuration helper](http://github.com/doctrine/migrations/commit/1f3592f2f126a022db275192f17b8d5c01f19822)
  - [Added ability to load config from php array or json files.](http://github.com/doctrine/migrations/commit/8cf01d623f9eb3728ba86c22970347107a8f0be7)
  - [Added the possibility to inject the OutputWriter after instantiation](https://github.com/doctrine/migrations/pull/342)
  - [Added the --allow-no-migration option to avoid throwing an exception if no migrations are found](https://github.com/doctrine/migrations/commit/a9ec86faa3a3f7f592a633af43b6ef6c9f358239#diff-0a4648a19ba565cda76b349e89552a9b)
", "vendor/doctrine/data-fixtures/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/CHANGELOG.md");
    }
}
