# PHP Validation
A complete validation library written in PHP

## Installation
Use the package manager [composer](https://getcomposer.org) to install the library
```bash
composer require riculum/php-validation
```

## Validation
You can use either `isValidate`, which returns true or false, or `validate`, which either throws an exception on error or returns the formatted input.

### Example for isValidate
```php
$isValid = Validator::isValidEmail('john.doe@example.com'); 
var_dump($isValid); // true or false
```

### Example for validate
```php
try {
    $formattedEmail = Validator::validateEmail('john.doe@example.com');
} catch (InvalidValidationException $e) {
    echo $e->getMessage();
}
```

## Possible validation
```php
public static function isValidChar(?string $char, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): bool;
public static function isValidCity(string $city, int $minLength = 1, int $maxLength = 50): bool;
public static function isValidCountryCode(string $countryCode, string $set = 'alpha-2', $caseSensitive = false): bool;
public static function isValidCurrencyCode(string $currencyCode, $caseSensitive = false): bool;
public static function isValidDomain(string $domain, $caseSensitive = true): bool;
public static function isValidEmail(string $email, $caseSensitive = true): bool;
public static function isValidLanguageCode(string $languageCode, $caseSensitive = false): bool;
public static function isValidName(string $name, int $minLength = 1, int $maxLength = 50): bool;
public static function isValidPassword(string $password, int $minLength = 8, int $maxLength = 250, bool $mixUpperLow = true, bool $mixLetterNumber = true, bool $mixSpecialChar = true): bool;
public static function isValidPhone(string $phone, string $countryCode = ""): bool;
public static function isValidStreet(string $street, int $minLength = 1, int $maxLength = 100): bool;
public static function isValidZip(string $zip, int $minLength = 1, int $maxLength = 4): bool;
public static function isValidWebsite(?string $website, bool $required = false, ?string $default = null): bool;
public static function isValidDate(?string $date, string $format = "yyyy-mm-dd", bool $required = false, ?string $default = null): bool;
public static function isValidDecimal(?string $decimal, bool $required = false, ?string $default = null): bool;
public static function isValidInt(?string $int, int $minLength = 1, int $maxLength = 11, bool $required = false, ?string $default = null): bool;
public static function isValidIBAN(?string $iban, bool $required = false, ?string $default = null): bool;
public static function isValidBESRID(?string $besrId, bool $required = false, ?string $default = null): bool;
public static function isValidEnum(?string $enum, array $enums, bool $required = false, ?string $default = null): bool;

public static function validateCity(string $city, int $minLength = 1, int $maxLength = 50): ?string;
public static function validateCountryCode(string $countryCode, string $set = 'alpha-2', $caseSensitive = false): ?string;
public static function validateCurrencyCode(string $currencyCode, $caseSensitive = false): ?string;
public static function validateDomain(string $domain, $caseSensitive = true): ?string;
public static function validateEmail(string $email, $caseSensitive = true): ?string;
public static function validateLanguageCode(string $languageCode, $caseSensitive = false): ?string;
public static function validateName(string $name, int $minLength = 1, int $maxLength = 50): ?string;
public static function validatePassword(string $password, int $minLength = 8, int $maxLength = 250, bool $mixUpperLow = true, bool $mixLetterNumber = true, bool $mixSpecialChar = true): ?string;
public static function validatePhone(string $phone, string $countryCode = ""): ?string;
public static function validateStreet(string $street, int $minLength = 1, int $maxLength = 100): ?string;
public static function validateZip(string $zip, int $minLength = 1, int $maxLength = 4): ?string;
public static function validateDate(?string $date, string $format = "yyyy-mm-dd", bool $required = false, ?string $default = null): ?string;
public static function validateDecimal(?string $decimal, bool $required = false, ?string $default = null): ?float;
public static function validateInt(?string $int, int $minLength = 1, int $maxLength = 11, bool $required = false, ?string $default = null): ?int;
public static function validateIBAN(?string $iban, bool $required = false, ?string $default = null): ?string;
public static function validateBESRID(?string $besrId, bool $required = false, ?string $default = null): ?string;
public static function validateEnum(?string $enum, array $enums, bool $required = false, ?string $default = null): ?string;
public static function validateChar(?string $char, int $minLength, int $maxLength, bool $required, ?string $default): ?string;
```

## Bugreport & Contribution
If you find a bug, please either create a ticket in github, or initiate a pull request

## Versioning
We adhere to semantic (major.minor.patch) versioning (https://semver.org/). This means that:

* Patch (x.x.patch) versions fix bugs
* Minor (x.minor.x) versions introduce new, backwards compatible features or improve existing code.
* Major (major.x.x) versions introduce radical changes which are not backwards compatible.

In your automation or procedure you can always safely update patch & minor versions without the risk of your application failing.
