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

---

## 🔍 Quality Assurance

This plugin includes comprehensive QA tooling for both PHP and JavaScript.

### PHP QA Tools

| Script         | Description                              |
|----------------|------------------------------------------|
| `test:php`     | Runs PHPUnit tests                       |
| `coverage:php` | Generates code coverage (HTML output)    |
| `lint:php`     | Runs PHPCS on all PHP files              |
| `fix:php`      | Auto-fixes code style issues via PHPCBF  |
| `phpstan`      | Runs static analysis via PHPStan         |
| `qa`           | Shortcut to run both code style and static analysis |

> Tools used:
> - [PHPUnit](https://phpunit.de/)
> - [Brain Monkey](https://github.com/Brain-WP/BrainMonkey)
> - [PHPStan for WordPress](https://github.com/szepeviktor/phpstan-wordpress)
> - [WPCS (WordPress Coding Standards)](https://github.com/WordPress/WordPress-Coding-Standards)

### JavaScript QA Tools

| Script         | Description                             |
|----------------|-----------------------------------------|
| `test:js`      | Runs JavaScript tests using Jest        |
| `lint:js`      | Lints JS files using ESLint             |
| `fix:js`       | Auto-fixes JS code style using ESLint   |

> Jest is configured using `@wordpress/jest-preset-default`.

---

### Unified Scripts

| Script         | Description                                |
|----------------|--------------------------------------------|
| `test`         | Runs both PHP and JS tests                 |
| `lint`         | Lints both PHP and JS code                 |
| `fix`          | Auto-fixes style issues in PHP and JS      |

---

## 🌍 Internationalization

The plugin supports full internationalization workflows with WP-CLI:

| Script         | Description                                          |
|----------------|------------------------------------------------------|
| `i18n:pot`     | Generates a `.pot` file from translatable strings   |
| `i18n:po`      | Updates `.po` files from the `.pot`                 |
| `i18n:mo`      | Compiles `.po` files into `.mo`                     |
| `i18n:json`    | Generates `.json` translation files for JavaScript |
| `i18n:php`     | Creates `.l10n.php` files for improved performance |
