# hidro

*Dead simple web prototyping framework for developers*

- [Installation](#installation)
- [Usage](#usage)
  + [Startup](#startup)
  + [Structure](#structure)
  + [Workflow](#workflow)

#### What is it?
Hidro is a dead simple prototying/design tool for developers.
Use **HTML and CSS** to quickly create a styleguide, views and components on a fully navigable web.

#### What is it not?
Hidro is not supposed to be used to power a *real life* production webapp, it is designed to just prototype/design it.

<a name="installation"></a>
## Installation

### Using git
```bash
git clone https://github.com/sergiouve/hidro.git my_prototype
```

### Using yeoman
Not yet implemented.
```bash
yo hidro
```

<a name="usage"></a>
## Usage

<a name="startup"></a>
### Startup

```bash
gulp
```

This will start compiling assets and boot up a server on **localhost:3000**

<a name="structure"></a>
### Structure

Hidro uses the following file structure
```
assets/
├── images/
├── scripts/
│   └── prototype.js
├── styles/
│   └── main.css
└── vendors/

helpers/
├── config.php
└── url.php

resources/

src/
├── images/
├── scss/
│   ├── common/
│   │   ├── _base.scss
│   │   ├── _helpers.scss
│   │   ├── _mixins.scss
│   │   ├── _typography.scss
│   │   └── _variables.scss
│   ├── components/
│   │   └── _example-component.scss
│   ├── pages/
│   │   ├── _styleguide.scss
│   │   └── _welcome.scss
│   └── main.scss
└── vendors/

views/
├── components/
├── layouts/
│   ├── footer.view.php
│   └── header.view.php
├── pages/
│   ├── styleguide.view.php
│   └── welcome.view.php
└── layout.view.php

gulpfile.js
index.php
package.json
README.md
```

<a name="workflow"></a>
### Workflow

1. Views  
Views files should be saved in the **views/** folder with a **.view.php** extension.

```
views/
├── components/ -> Small UX components
├── layouts/ -> Bigger structures that will repeat all over the project
│   ├── footer.view.php
│   └── header.view.php
├── pages/ -> Full pages
│   ├── styleguide.view.php
│   └── welcome.view.php
└── layout.view.php -> The base webpage from where the rest of the views and resources are loaded
```

You can link to other pages or include components inside other elements via
the **$routes** and **$components** arrays. Hidro will recognize all your **.view.php** files
from the views/pages and views/components folders and store them in the **$routes** and **$componetns**
arrays respectively (the key being the file name *without the .view.php extension).

**Examples**

Link to another pages
```html
Visit our <a href="<?= $routes['products']; ?>">Products</a> page for more!
```

Include a component
```html
...
<div class="products__container">
  <?php include($components['header']); ?>
  ...
</div>
...
```

2. SCSS
