## Create a package.json file in root directory
## Paste the code from below

```cmd
{
  "name": "sass-compiler",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "sass-dev": "sass --watch --update --style=expanded assets/scss:assets/css",
    "sass-prod": "sass --no-source-map --style=compressed assets/scss:assets/css"
  },
  "keywords": ["sass-compiler"],
  "author": "sharif uddin",
  "license": "ISC",
  "devDependencies": {
    "clean-css-cli": "^5.4.2",
    "sass": "^1.43.4"
  }
}
```

## Init your project
```cmd
  npm init -y
```

## Install Sass and Dependicies
```cmd
  npm install
```
## For Development
```cmd
  npm run sass-dev
```
## For Production
```cmd
  npm run sass-prod
```
