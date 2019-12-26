<?php

class ProxyImageService implements ImageService
{
  public static $cachedImages;

  public static function load($path)
  {
    if (!isset(self::$cachedImages[$path])) {
      self::$cachedImages[$path] = RealImageService::load($path);
    }

    return self::$cachedImages[$path];
  }
}
