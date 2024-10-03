# ExamplePhpGitHubActions

[![test](https://github.com/eylemugurel/ExamplePhpGitHubActions/actions/workflows/test.yml/badge.svg)](https://github.com/eylemugurel/ExamplePhpGitHubActions/actions/workflows/test.yml)
[![codecov](https://codecov.io/gh/eylemugurel/ExamplePhpGitHubActions/branch/main/graph/badge.svg?token=QD734AK8G8)](https://codecov.io/gh/eylemugurel/ExamplePhpGitHubActions)

An example PHP project demonstrating the usage of PHPUnit with GitHub Actions.

### Versions

| PHP    | PHPUnit | Xdebug | Composer |
| :----- | :------ | :----- | :------- |
| 7.1.33 | 7.5.20  | 2.9.8  | 2.2.24   |
| 7.2.34 | 8.5.40  | 3.1.6  | 2.7.9    |
| 7.3.33 | 9.6.21  | 3.1.6  | 2.7.9    |
| 7.4.33 | 9.6.21  | 3.1.6  | 2.7.9    |
| 8.0.30 | 9.6.21  | 3.3.2  | 2.7.9    |
| 8.1.30 | 10.5.35 | 3.3.2  | 2.7.9    |
| 8.2.24 | 11.3.6  | 3.3.2  | 2.7.9    |
| 8.3.12 | 11.3.6  | 3.3.2  | 2.8.0    |

### About badges

The "test" badge is provided out of the box by GitHub Actions.

To obtain a coverage badge, one great option is to integrate [Codecov](https://about.codecov.io/) into your repository. To get started with Codecov, follow these steps:

1. Navigate to the [Codecov](https://about.codecov.io/sign-up/) sign-up page and click the **GitHub** button.
2. Click the **Continue to GitHub (Public Repos Only)** link.
3. Click the **Authorize Codecov** button.

Note that you don't need a Codecov token for public repositories.

After the initial upload of your `coverage.xml` to Codecov by your workflow, you can retrieve the coverage badge link from the Markdown section on the "Badges & Graphs" page of your account:
```
https://app.codecov.io/github/<org-name>/<repo-name>/settings/badge
```

### References
- https://github.com/marketplace/actions/setup-php-action
- https://github.com/marketplace/actions/codecov
