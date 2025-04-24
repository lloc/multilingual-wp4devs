# Multilingual WordPress for Developers

This plugin is a companion to my talk *“Multilingual WordPress for Developers”*. It includes practical examples and techniques covered during the session, aimed at helping developers confidently build multilingual WordPress websites.

Discover how to make the most of WordPress’s internationalization (i18n) and localization (l10n) features, set up multilingual environments using multisite or plugins, and streamline your workflow with custom code — all focused on simplifying multilingual development.

## Composer & Developer Tooling

This plugin includes a set of tools and scripts to support modern development workflows for multilingual WordPress projects.

### 🛠 Requirements

- PHP >= 8.1
- Node.js (for JavaScript tooling)
- [WP-CLI](https://wp-cli.org/) (included via `wp-cli/wp-cli-bundle`)

### 📦 Composer Setup

The plugin uses PSR-4 autoloading for both runtime and test classes:

<pre><code>{
  "autoload": {
    "psr-4": {
      "lloc\\Multilingual_WP4Devs\\": "include/"
    }
  },
  "autoload-dev": {
    "psr-4": {
      "lloc\\MLWP4Devs_Tests\\": "tests/phpunit/"
    }
  }
}
</code></pre>

Run `composer install` to install dependencies.

### 🔍 Quality Assurance

The plugin comes with several scripts to ensure code quality and consistency throughout development:

| Script         | Description                            |
|----------------|----------------------------------------|
| `test:php`     | Runs PHPUnit tests                     |
| `coverage:php` | Generates code coverage in HTML format |
| `lint:php`     | Lints PHP code using PHPCS             |
| `fix:php`      | Auto-fixes PHP code style issues       |
| `phpstan`      | Runs static analysis with PHPStan      |
| `qa`           | Runs both code linting and static analysis |

> Included QA tools:
> - [PHPUnit](https://phpunit.de/)
> - [Brain Monkey](https://github.com/Brain-WP/BrainMonkey)
> - [PHPStan for WordPress](https://github.com/szepeviktor/phpstan-wordpress)
> - [WPCS](https://github.com/WordPress/WordPress-Coding-Standards)

### 🌍 Internationalization

The plugin supports full internationalization workflows, including the generation of modern translation file formats:

| Script         | Description                                          |
|----------------|------------------------------------------------------|
| `i18n:pot`     | Generates a `.pot` file from source strings          |
| `i18n:po`      | Updates `.po` files from the `.pot`                  |
| `i18n:mo`      | Compiles `.po` files to `.mo` files                  |
| `i18n:json`    | Generates `.json` files for JavaScript (JED format)  |
| `i18n:php`     | Generates `.l10n.php` files for performance          |

> These commands use WP-CLI’s `wp i18n` interface under the hood.

### 🔧 Build & Project Setup

These scripts are included to help with setting up and maintaining the development environment:

| Script                   | Description                                               |
|--------------------------|-----------------------------------------------------------|
| `build`                  | Installs dependencies and builds JavaScript assets        |
| `githooks`               | Installs a pre-commit hook (if available in `bin/`)       |
| `post-install-cmd` / `post-update-cmd` | Automatically sets up git hooks after Composer install/update |
