# octiq-php-failing-test

PHP fixture: **no build step** (PHP's recipe has `compiles: false`), a CI that
runs `vendor/bin/phpunit`, and no `octiq.verify.json`.

Used to exercise the indexed sync path where the only verdict is a suite: the
suite's command comes from the CI policy, and a failing suite must report
`tests_failed` with `buildGreen` still true.
