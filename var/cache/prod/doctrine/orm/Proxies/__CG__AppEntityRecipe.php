<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Recipe extends \App\Entity\Recipe implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'average' => [parent::class, 'average', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'difficulty' => [parent::class, 'difficulty', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'imageFile' => [parent::class, 'imageFile', null],
        "\0".parent::class."\0".'imageName' => [parent::class, 'imageName', null],
        "\0".parent::class."\0".'ingredients' => [parent::class, 'ingredients', null],
        "\0".parent::class."\0".'isFavorite' => [parent::class, 'isFavorite', null],
        "\0".parent::class."\0".'isPublic' => [parent::class, 'isPublic', null],
        "\0".parent::class."\0".'marks' => [parent::class, 'marks', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'nbPeople' => [parent::class, 'nbPeople', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'time' => [parent::class, 'time', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'average' => [parent::class, 'average', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'description' => [parent::class, 'description', null],
        'difficulty' => [parent::class, 'difficulty', null],
        'id' => [parent::class, 'id', null],
        'imageFile' => [parent::class, 'imageFile', null],
        'imageName' => [parent::class, 'imageName', null],
        'ingredients' => [parent::class, 'ingredients', null],
        'isFavorite' => [parent::class, 'isFavorite', null],
        'isPublic' => [parent::class, 'isPublic', null],
        'marks' => [parent::class, 'marks', null],
        'name' => [parent::class, 'name', null],
        'nbPeople' => [parent::class, 'nbPeople', null],
        'price' => [parent::class, 'price', null],
        'time' => [parent::class, 'time', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
        'user' => [parent::class, 'user', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'average' => true,
            "\0".parent::class."\0".'id' => true,
            "\0".parent::class."\0".'imageFile' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}