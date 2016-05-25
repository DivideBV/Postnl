# Code style

This project uses the [PSR-2](http://www.php-fig.org/psr/psr-2/) coding style.

# Grunt

To ease compliance to the coding standards, the Grunt task runner is employed.

## Installation

 - `npm install`
 - `composer install`

## Running

 - `grunt cs` code style checking
 - `grunt lint` syntax checking (linting)
 - `grunt` runs the default grunt task: both linting and code style checking

# Editorconfig

To prevent having to reconfigure your editor (line breaks, indenting) while
switching between projects, Editorconfig is used.

# API documentation

API documentation can optionally be generated locally in HTML format. Note: this
also uses Grunt. Documentation is placed in the `docs` folder.

 - `grunt doc`
 - `xdg-open docs/index.html`
