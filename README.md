# API Platform Traits

Package to ease the use of common properties needed for the api platform package.

You may want to have a look at: https://github.com/epubli/api-platform-test

### Content of this package

- OrmIdentificatorTrait
- OrmTimestampableTrait
- OrmSoftDeletableTrait

### Usage of ORM Timestampable and SoftDeletable

Add the stof doctrine extension:

`composer require stof/doctrine-extensions-bundle`

Edit the config file `config/packages/stof_doctrine_extensions.yaml`

It should look like this:
```yaml
stof_doctrine_extensions:
    default_locale: en_US
    orm:
        default:
            softdeleteable: true
            timestampable: true
```

Here is an example class which implements these traits:
```php
use Epubli\ApiPlatform\TraitBundle\OrmSoftDeletableTrait;
use Epubli\ApiPlatform\TraitBundle\OrmTimestampableTrait;
use Gedmo\Mapping\Annotation\SoftDeleteable;

#[ApiResource()]
#[SoftDeleteable(fieldName: 'deletedAt', timeAware: false, hardDelete: false)]
class Example
{
    use OrmTimestampableTrait;
    use OrmSoftDeletableTrait;
}
```


Also add the SoftDeletableFilter to the doctrine config if you use the SoftdeletableTrait 

`config/packages/doctrine.yaml`

```yaml
doctrine:
    orm:
        filters:
            softdeleteable:
                class: Gedmo\SoftDeleteable\Filter\SoftDeleteableFilter
                enabled: true
```
