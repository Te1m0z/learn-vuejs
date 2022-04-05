module.exports = {
  root: true,
  env: {
    browser: true,
    node: true
  },
  extends: ["plugin:vue/vue3-essential", "eslint:recommended"],
  parserOptions: {
    parser: "@babel/eslint-parser"
  }
};
