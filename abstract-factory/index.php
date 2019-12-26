<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

/** @var array $locations */
$locations = [
    'GB',
    'FR',
    'RAND'
];

foreach ($locations as $location) {
    /** @var AbstractFactory $factory */
    $factory = Factory::getFactory($location);

    /** @var Product $product */
    $product = $factory->createProduct();
    /** @var ShippingMethod $shippingMethod */
    $shippingMethod = $factory->createShippingMethod();

    echo formatProduct($product);
    echo formatShippingMethod($shippingMethod);
    echo PHP_EOL;
}

/**
 * @param Product $product
 * @return string
 */
function formatProduct(Product $product)
{
    return sprintf(
        "%s - %s (£%s)" . PHP_EOL,
        $product->getName(),
        $product->getDescription(),
        number_format($product->getPrice(), 2)
    );
}

/**
 * @param ShippingMethod $shippingMethod
 * @return string
 */
function formatShippingMethod(ShippingMethod $shippingMethod)
{
    return sprintf(
        "%s - %s (£%s)" . PHP_EOL,
        $shippingMethod->getProvider(),
        $shippingMethod->getEstimatedTime(),
        number_format($shippingMethod->getPrice(), 2)
    );
}


