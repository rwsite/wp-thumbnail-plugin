# GitHub Actions Workflows

## test.yml

Automated testing workflow that runs on every push and pull request.

### Triggers
- Push to `main`, `develop`, `master` branches
- Pull requests to `main`, `develop`, `master` branches

### Matrix Testing
Tests run on PHP 8.2, 8.3, and 8.4 with MySQL 8.0 service.

### Steps
1. **Setup PHP** - Install PHP with required extensions (gd, imagick, pdo, etc.)
2. **Cache Composer** - Cache dependencies for faster builds
3. **Install Dependencies** - Run `composer install`
4. **Setup WordPress** - Clone and configure WordPress test suite
5. **Create Database** - Initialize MySQL test database
6. **Run Tests** - Execute unit and integration tests
7. **Coverage Report** - Generate and upload coverage on PHP 8.2
8. **PHPStan Analysis** - Run static analysis on PHP 8.2
9. **Archive Results** - Save test artifacts for 30 days

### Coverage
- Codecov integration for coverage tracking
- Clover XML format for detailed reports
- HTML reports available in artifacts

### Artifacts
Test results and coverage reports are archived for 30 days:
- `coverage/clover.xml` - Coverage in Clover format
- `coverage/html/` - HTML coverage report
- `.phpunit.result.cache` - Test cache

## Local Testing

Run the same tests locally:
```bash
composer test
composer test:coverage
composer phpstan
```

See `TESTING.md` for detailed testing guide.
