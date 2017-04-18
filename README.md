# hidro

Hidro is a dead simple prototying tool. Use it to quickly create a styleguide, views and components on a fully navigable web.

## Installation

### Using git
```bash
  git clone https://github.com/sergiouve/hidro.git my_prototype
```

### Using yeoman
```bash
  yo hidro
```

### Usage

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


