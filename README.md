# Squeezed
An extension of the simple service container Pimple to provide tagging support.

## Using Squeezed

### Tagging a service

You can tag a service in the container by using the `Squeezed::tagService();` method:

```
$container = new Squeezed();
$container['some_service'] = new SomeService();
$container['another_service'] = new AnotherService();

$container->tagService('tag name', 'some_service');
$container->tagService('tag name', 'another_service');
```

### Retrieving services by tag

Once you have tagged some services you can then retrieve them by their tag name. This is useful when dealing with categories of services such as console commands or controllers.

```
$taggedServices = $container->getByTag('tag name');
```

This will return an array of the tagged services indexed by their service ID.

## Future Development

* Add support for Pimple 2.0
