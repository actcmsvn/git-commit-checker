# Changelog

All notable changes to `actcmsvn/git-commit-checker` will be documented in this file.

## 2.1.2 - 2025-07-05

- Bump version `laravel/pint`

## 2.1.1 - 2024-12-06

- Fix various bugs

## 2.1.0 - 2024-12-06

- Fix output render on Windows platform (https://github.com/actcmsvn/git-commit-checker/pull/10)

## 2.0.1 - 2024-12-05

- Add warning message "Run command to see coding standard detail issues"
- Update version icon from README.md
- Remove verbose when run `pint --test`

## 2.0.0 - 2024-12-05

- Drop support PHP 7.x, Laravel <= 8.x
- Replace PHP Code Sniffer, PHPLint to Laravel Pint
- Rename command `git:install-hooks` to `git-commit-checker:install`
- Rename command `git:pre-commit-hook` to `git-commit-checker:pre-commit-hook`
- Remove command `git:create-phpcs`
- Remove TravisCI, StyleCI, Scrutinizer
- Remove unnecessary files

## 1.0.0 - 2024-11-26

- First release.
